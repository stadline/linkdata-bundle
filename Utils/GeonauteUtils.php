<?php

namespace Geonaute\Module\CoreBundle\Utils;

class GeonauteUtils
{
	/**
	 * Create a token with different algo
	 * algo = 1 (default algo) renders tokens like dz3d415zed1z32d1z
	 * algo = 2 (pretty token) renders token like a3EdfR45Gr
	 * algo = 3 (long algo) renders tokens like dz3d415zed1z32d1zdzedzeferfrefzeczecezd
	 * 
	 * @param unknown_type $algo
	 * @return string
	 */
	static function generateToken($algo = 1)
	{
		switch ($algo)
		{
			case 1:
				$token = substr(sha1(rand(1,99999).microtime()), 0, 20); 
				break;
			case 2:
				$token = self::prettyToken(10);
				break;
			case 3:
				$token = substr(sha1(rand(1,99999).microtime()), 0, 50); 
				break;
		}
		
		return $token;
	}

	/**
	 * Generate a token with the specified number of chars
	 * @param integer $numStr
	 * @return string
	 */
	private static function prettyToken($numStr)
	{
		srand( (double)microtime()*rand(1000000,9999999) );
		$uId = "";
		$arrChar = array(); // Nouveau tableau
	
		for( $i=65; $i<90; $i++ ) {
			array_push( $arrChar, chr($i) ); // Ajoute A-Z au tableau
			array_push( $arrChar, strtolower( chr( $i ) ) ); // Ajouter a-z au tableau
		}
	
		for( $i=48; $i<57; $i++ ) {
			array_push( $arrChar, chr( $i ) ); // Ajoute 0-9 au tableau
		}
	
		for( $i=0; $i< $numStr; $i++ ) {
			$uId .= $arrChar[rand( 0, (count( $arrChar )-1) )]; // Ecrit un aléatoire
		}
		return $uId;
	}
	
	/**
	 * Generate a slug for a text
	 * @param unknown $text
	 * @return string
	 */
	static public function slugify($text)
	{
	    // replace all non letters or digits by -
	    $text = preg_replace('/\W+/', '-', $text);
	
	    // trim and lowercase
	    $text = strtolower(trim($text, '-'));
	
	    return $text;
	}
}
