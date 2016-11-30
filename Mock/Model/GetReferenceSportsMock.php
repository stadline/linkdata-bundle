<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetReferenceSportsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceSports';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse(SerializerInterface $serializer, $data)
    {
        return $serializer->deserialize('
<RESPONSE>
	<META>
            <STATUSCODE>200</STATUSCODE>
            <MESSAGE>OK : done</MESSAGE>
	</META>
	<SPORTS>
        <SPORT>
            <ID>91</ID>
            <NAME>Fitness</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>113</ID>
            <NAME>Marche</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>121</ID>
            <NAME>Course à pied</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>126</ID>
            <NAME>Trail</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>153</ID>
            <NAME>Alpinisme</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>168</ID>
            <NAME>Randonnée</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>174</ID>
            <NAME>Ski</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>185</ID>
            <NAME>Snowboard</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>264</ID>
            <NAME>Bodyboard</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>274</ID>
            <NAME>Natation</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>296</ID>
            <NAME>Surf</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>301</ID>
            <NAME>Voile</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>381</ID>
            <NAME>Vélo</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>385</ID>
            <NAME>Vélo sur route</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>388</ID>
            <NAME>VTT</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>320</ID>
            <NAME>Golf</NAME>
            <UNIVERSID>9</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>173</ID>
            <NAME>Raquette à neige</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>110</ID>
            <NAME>Vélo en salle</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>395</ID>
            <NAME>Tapis de course en salle</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>79</ID>
            <NAME>Danse</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>98</ID>
            <NAME>Musculation en salle</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>265</ID>
            <NAME>Canoë kayak</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>77</ID>
            <NAME>Triathlon</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>200</ID>
            <NAME>Equitation</NAME>
            <UNIVERSID>7</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>273</ID>
            <NAME>Kite surf</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>280</ID>
            <NAME>Planche à voile</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>360</ID>
            <NAME>BMX</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>367</ID>
            <NAME>Roller</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>374</ID>
            <NAME>Skate board</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>357</ID>
            <NAME>Tennis</NAME>
            <UNIVERSID>10</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>397</ID>
            <NAME>Vélo elliptique</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>398</ID>
            <NAME>Rameur</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>260</ID>
            <NAME>Aquagym</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>45</ID>
            <NAME>Arts martiaux</NAME>
            <UNIVERSID>3</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>263</ID>
            <NAME>Aviron</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>335</ID>
            <NAME>Badminton</NAME>
            <UNIVERSID>10</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>10</ID>
            <NAME>Basketball</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>35</ID>
            <NAME>Boxe</NAME>
            <UNIVERSID>3</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>161</ID>
            <NAME>Escalade</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>13</ID>
            <NAME>Football</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>18</ID>
            <NAME>Handball</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>20</ID>
            <NAME>Hockey</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>284</ID>
            <NAME>Plongée</NAME>
            <UNIVERSID>8</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>27</ID>
            <NAME>Rugby</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>176</ID>
            <NAME>Ski alpin</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>32</ID>
            <NAME>Volleyball</NAME>
            <UNIVERSID>2</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>114</ID>
            <NAME>Marche nordique</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>399</ID>
            <NAME>Run &amp; Bike</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>105</ID>
            <NAME>Yoga</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>354</ID>
            <NAME>Squash</NAME>
            <UNIVERSID>10</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>326</ID>
            <NAME>Tir à l&#039;arc</NAME>
            <UNIVERSID>9</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>7</ID>
            <NAME>Parapente</NAME>
            <UNIVERSID>1</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>400</ID>
            <NAME>Stand Up Paddle</NAME>
            <UNIVERSID>9</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>340</ID>
            <NAME>Padel</NAME>
            <UNIVERSID>10</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>358</ID>
            <NAME>Tennis de table</NAME>
            <UNIVERSID>10</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>401</ID>
            <NAME>Home Trainer</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>366</ID>
            <NAME>Char à voile</NAME>
            <UNIVERSID>11</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>177</ID>
            <NAME>Ski de randonnée</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>184</ID>
            <NAME>Ski nordique skating</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>183</ID>
            <NAME>Ski nordique alternatif</NAME>
            <UNIVERSID>6</UNIVERSID>
        </SPORT>
        <SPORT>
            <ID>402</ID>
            <NAME>Activité quotidienne</NAME>
            <UNIVERSID>4</UNIVERSID>
        </SPORT>
	</SPORTS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceSports\Response', 'xml');
    }
}
