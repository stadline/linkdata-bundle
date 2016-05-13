<?php 

namespace Geonaute\LinkDataBundle\Utils;

/**
 * Interface to be used for render the statistics used is progress
 * 
 * @author fabien
 */
interface ProgressStatisticMapperInterface
{
   public function getDurationId();

   public function getTotalDuration();
   
   public function getTotalCalories();

   public function getCaloriesId();
   
   public function getTotalDistance();

   public function getDistanceId();
   
   public function getSpeedId();

   public function getSortedDurations($length);
   
   public function getSports();
   
}