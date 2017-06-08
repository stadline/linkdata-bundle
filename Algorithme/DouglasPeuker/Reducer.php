<?php

namespace Geonaute\LinkdataBundle\Algorithme\DouglasPeuker;

class Reducer
{

    /**
     * Reduce the number of points in a shape using the Douglas-Peucker algorithm
     * @param $collection
     * @param int $maxPoints
     * @return array
     */
    public function reduceWithTolerance($collection, $maxPoints)
    {
        //If it's an array, load a collection
        if (!is_object($collection) && is_array($collection)) {
            $collection = new LazyVectorCollection($collection);
        }

        // if a shape has 2 or less points it cannot be reduced
        if ($maxPoints <= 0 || count($collection->getVectors()) < $maxPoints) {
            return $collection->getVectors();
        }

        $vectors = $collection->getVectors();
        
        $newCollection = new LazyVectorCollection(array()); // the new shape to return
        // automatically add the first and last point to the returned shape
        $newCollection->addVector($vectors[0]);
        $newCollection->addVector($vectors[count($vectors) - 1]);

        // the first and last points in the original shape are
        // used as the entry point to the algorithm.
        $this->douglasPeuckerReduction(
            $collection, // original shape
            $newCollection, // reduced shape
            $maxPoints, // tolerance
            0, // index of first point
            count($vectors) - 1  // index of last point
        );

        // all done, return the reduced shape
        return $newCollection->getVectors();
    }


    public function radiusSimplify($collection, $rad = 1, $index = 0)
    {
        
        //If it's an array, load a collection
        if (!is_object($collection) && is_array($collection)) {
            $collection = new LazyVectorCollection($collection);
        }

        $nbTarget = 2000;
        
        $newCollection = new LazyVectorCollection();
        $vectors = $collection->getVectors();
        $maxDist = $rad * $rad;
        $q = $vectors[0];
        $lenght = count($vectors);

        for($i = 0; $i < $lenght; $i++) {
            $p = $vectors[$i];
            if((($p->getX()-$q->getX())* ($p->getX()-$q->getX()) + ($p->getY()-$q->getY()) * ($p->getY()-$q->getY())) >= $maxDist) {
                $newCollection->addVector($p);
                $q = $p;
            }
        }

        if(abs(count($newCollection->getVectors()) - $nbTarget) <= $nbTarget*0.5) {
            return $newCollection->getVectors();
         //Index is a protection
        } elseif($index < 20) {
            $nb = count($newCollection->getVectors());
            $nb0 = count($collection->getVectors());

            //TODO: Optimize function get convergence
            $newRad = $rad*(1 + 5*($nb-$nbTarget)/($nb0-$nbTarget));
            return $this->radiusSimplify($collection, $newRad, $index+1);
        } else {   //fail and return first collection
           return $collection->getVectors();
        }
    }

    /**
     * Reduce the points in $shape between the specified first and last
     * index. Add the shapes to keep to $newShape
     * @param VectorCollectionInterface $collection
     * @param VectorCollectionInterface $newCollection
     * @param $maxPoints
     * @param $firstIdx
     * @param $lastIdx
     */
    public function douglasPeuckerReduction(VectorCollectionInterface $collection, VectorCollectionInterface $newCollection, $maxPoints, $firstIdx, $lastIdx)
    {
        if ($lastIdx <= $firstIdx + 1) {
            // overlapping indexes, just return
            return;
        }

        // retrieve all points for subsequent processing
        $vectors = $collection->getVectors();

        // loop over the points between the first and last points
        // and find the point that is the furthest away

        $maxDistance = 0.0;
        $indexFarthest = 0;

        $PointsSegment1 = 0;
        $TotalPoints=0;

        $firstVector = $vectors[$firstIdx];
        $lastVector = $vectors[$lastIdx];

        for ($idx = $firstIdx + 1; $idx < $lastIdx; $idx++) {
            $TotalPoints = $TotalPoints + 1;
            $vector = $vectors[$idx];

            $distance = $this->orthogonalDistance($vector, $firstVector, $lastVector);

            // only keep the point with the greatest distance
            if ($distance > $maxDistance) {
                $maxDistance = $distance;
                $indexFarthest = $idx;
                //We keep index for maxdistance point
                $PointsSegment1 = $TotalPoints;
            }
        }
        $PointsSegment2 = $TotalPoints - $PointsSegment1;

        // if the point that is furthest away is within the tolerance,
        // it is simply discarded. Otherwise, it's added to the reduced
        // shape and the algorithm continues
        if ($maxPoints > 0) {
            $newCollection->addVector($vectors[$indexFarthest]);

            // reduce the shape between the starting point to newly found point
            $this->douglasPeuckerReduction($collection, $newCollection, round(($maxPoints-1)*$PointsSegment1/$TotalPoints), $firstIdx, $indexFarthest);

            // reduce the shape between the newly found point and the finishing point
            $this->douglasPeuckerReduction($collection, $newCollection, round(($maxPoints-1)*$PointsSegment2/$TotalPoints), $indexFarthest, $lastIdx);
        }
    }

    /**
     * Calculate the orthogonal distance from the line joining the
     * $lineStart and $lineEnd points from $point
     *
     * @param   ShapePoint  $point      The point the distance is being calculated for
     * @param   ShapePoint  $lineStart  The point that starts the line
     * @param   ShapePoint  $lineEnd    The point that ends the line
     * @return  float   The distance in geographic coordinate system degrees
     */
    public function orthogonalDistance(VectorInterface $vector, VectorInterface $firstVector, VectorInterface $lastPoint)
    {
        $area = abs(
            (
            $firstVector->getX() * $lastPoint->getY() + $lastPoint->getX() * $vector->getY() + $vector->getX() * $firstVector->getY() - $lastPoint->getX() * $firstVector->getY() - $vector->getX() * $lastPoint->getY() - $firstVector->getX() * $vector->getY()
            ) / 2
        );

        $bottom = sqrt(pow($firstVector->getX() - $lastPoint->getX(), 2) + pow($firstVector->getY() - $lastPoint->getY(), 2));

        if ($bottom == 0) { return 0; }

        return $area / $bottom * 2.0;
    }

}
