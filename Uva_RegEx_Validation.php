<?php

## ############################################################ ##
##  ------------------ Uva RegEx Validation ------------------  ##
##                                                              ##
##  @package     Uva_RegEx_Validation                           ##
##  @author      Marco Fernandez                                ##
##  @link        http://inventtoo.com                           ##
##  @link        http://github.com/inventtoo                    ##
##  @version     0.3.0 (2014.03.06)                             ##
##  @license     http://opensource.org/licenses/MIT             ##
##  @copyright   2014 inventtoo.com                             ##
##                                                              ##
## ############################################################ ##

/**
	/======== RegEx Validation Functions
		is_alphabetic             validate if a string is alphabetic
		is_alphanumeric           validate if a string is alphanumeric
		is_number_string          validate if a string is numeric
		is_email                  validate if a string is an e-mail
		is_hexadecimal_color      validate if a string is hexadecimal color value
		is_url                    validate if a string is an URL
		is_url_image              validate if a string is an image URL
		is_url_friendly	          validate if a string is a friendly URL without domain 
		is_ip                     validate if a string is an IP value
		is_strlen_min(s,l)        validate the minimum length of a string (string,lenght) 
		is_strlen_max(s,l)        validate the maximal length of a string (string,lenght) 
		is_strlen_between(s,m,M)  validate if the string has between min and max characters (string,min,max)
		is_username(s,m,M)        validate if a string is a valid username (letters [Upper/Lower-case], point [.], underscore [_]) (string,min,max)
		is_password(s,m,M)        validate if a string is a valid password (string,min,max)
		is_password_secure(s,m,M) validate if a string is a valid secure password with special characters (string,min,max)
		is_personal_name          validate if a string is a full personal name
		is_html_tag               validate if a string is a html tag
		is_datetime               validate if a string is a datetime string (yyyy-mm-dd hh:mm:ss)
		is_time                   validate if a string is a time string (hh:mm:ss)
		is_date                   validate if a string is a date string ISO-Standard(yyyy-mm-dd)
		is_date_ddmmyyyy          validate if a string is a date string (dd-mm-yyyy)
		is_date_mmddyyyy          validate if a string is a date string (mm-dd-yyyy)
		is_date_yyyymmdd          validate if a string is a date string (yyyy-mm-dd)
****
**/

class uva{

	// ~~~ Validate if a string is alphabetic
	public static function is_alphabetic($string) {
		$regEx = '/^[a-zA-zàáâãäåèéêëìíîïòóôõöùúûüçýÿñæœþßÀÁÂÃÄÅÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÇÝŸÑÆŒÞ]*$/';
		return preg_match($regEx, $string);
	}

	// ~~~ Validate if a string is alphanumeric
	public static function is_alphanumeric($string) {
		$regEx = '/^[a-zA-Z0-9àáâãäåèéêëìíîïòóôõöùúûüçýÿñæœþßÀÁÂÃÄÅÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÇÝŸÑÆŒÞ]*$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is numeric
	public static function is_number_string($string) {
        $regEx = '/^\d+$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is an e-mail
	public static function is_email($string) {
		$regEx = '/^([a-zA-Z0-9_\.-]+)@([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})$/';
		return preg_match($regEx, $string);
	}

	// ~~~ Validate if a string is hexadecimal color value
	public static function is_hexadecimal_color($string) {
		$regEx = '/^#?([a-f0-9]{6}|[a-f0-9]{3})$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is an URL
	public static function is_url($string) {
		$regEx = '/^(https?:\/\/)?([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})([\/\w _\.-]*)*\/?$/';
		return preg_match($regEx, $string);
	}

	// ~~~ Validate if a string is an image URL
	public static function is_url_image($string){
		$regEx = '/^(https?:\/\/)?([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})([\/\w _\.-]*)*([\/\w _\.-]*.(png|gif|jpg|ico))$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a friendly URL without domain
	public static function is_url_friendly($string){  // without domain
		$regEx = '/^[a-z0-9-]+$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is an IP value
	public static function is_ip($string) {		
		$regEx = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
		return preg_match($regEx, $string);
	}

	// ~~~ Validate the minimum length of a string
	public static function is_strlen_min($string,$length){
		$regEx = "/^(.{{$length},})$/";	
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate the maximal length of a string
	public static function is_strlen_max($string,$length){
		$regEx = "/^(.{0,{$length}})$/";	
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if the string has between min and max characters
	public static function is_strlen_between($string,$min,$max){
		$regEx = "/^(.{{$min},{$max}})$/";	
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a valid username (letters [Upper/Lower-case], point [.], underscore [_])
	public static function is_username($string, $min=3, $max=16) {
		$regEx = "/^[a-zA-Z0-9\._]{{$min},{$max}}$/";
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a valid password
	public static function is_password($string, $min=6, $max=18) {
		$regEx = "/^[a-zA-Z0-9]{{$min},{$max}}$/";
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a valid secure password with special characters
	public static function is_password_secure($string, $min=6, $max=18) { 
		// Secure password should have (lower-case, upper-case, numbers, and special character)
		$regEx1 = "/^(.{{$min},{$max}})$/";			
		$regEx2 = "/[a-z]+/";					
		$regEx3 = "/[A-Z]+/";					
		$regEx4 = "/[0-9]+/";					
		$regEx5 = "/[\!|\#|\$|\%|\&|\/|\?|\¿|\¡|\*|\+|\_|\-|\-|\.|\@]+/";
		$regExMatch = preg_match($regEx1,$string)&&preg_match($regEx2,$string)&&preg_match($regEx3,$string);
		$regExMatch &= preg_match($regEx4, $string)&&preg_match($regEx5, $string);
		return $regExMatch;
	}
	
	// ~~~ Validate if a string is a full personal name
	public static function is_personal_name($string) {		
		$regEx = "/^((([A-Z]{1}(\'[A-Za-z])?([a-z]+)\ )|(([yY]|(de)|(DE))\ )){1,})([A-Z]{1}(\'[A-Za-z])?([a-z]+))$/";
		return preg_match($regEx, $string);
	}

	// ~~~ Validate if a string is a html tag
	public static function is_html_tag($string){
		$regEx = '/^<([a-z]+)([^<]+)*(?:>(.*)<\/(?1)>|\s+\/>)$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a datetime string (yyyy-mm-dd hh:mm:ss)
	public static function is_datetime($string) {
		if (preg_match("/^(\d{4})-([0][0-9]|[1][0-2])-([012][0-9]|3[01]) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $string, $matches)) {
			$year  = $matches[1];
			$month = $matches[2];
			$day   = $matches[3];
			if (checkdate($month, $day, $year)) return true;
		}
		return false;
	}
	
	// ~~~ Validate if a string is a time string (hh:mm:ss)
	public static function is_time($string) {
		$regEx = '/^([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/';
		return preg_match($regEx, $string);
	}
	
	// ~~~ Validate if a string is a date string ISO-Standard(yyyy-mm-dd)
	public static function is_date($string) {
		return is_date_yyyymmdd($string);
	}
	
	// ~~~ Validate if a string is a date string (dd-mm-yyyy)
	public static function is_date_ddmmyyyy($string,$a='-'){
		$a = (($a=='/')||($a=='-')||($a=='.')) ? $a : '-';
		$regEx = "/^([012][0-9]|3[01])\\{$a}([0][0-9]|[1][0-2])\\{$a}(\d{4})$/";
		if(preg_match($regEx, $string, $matches)){
			$day   = $matches[1];
			$month = $matches[2];
			$year  = $matches[3];
			if (checkdate($month, $day, $year)) return true;
		}
		return false;
	}
	
	// ~~~ Validate if a string is a date string (mm-dd-yyyy)
	public static function is_date_mmddyyyy($string,$a='-'){
		$a = (($a=='/')||($a=='-')||($a=='.')) ? $a : '-';
		$regEx = "/^([0][0-9]|[1][0-2])\\{$a}([012][0-9]|3[01])\\{$a}(\d{4})$/";
		if(preg_match($regEx, $string, $matches)){
			$month = $matches[1];
			$day   = $matches[2];
			$year  = $matches[3];
			if (checkdate($month, $day, $year)) return true;
		}
		return false;
	}
	
	// ~~~ Validate if a string is a date string (yyyy-mm-dd)
	public static function is_date_yyyymmdd($string,$a='-'){
		$a = (($a=='/')||($a=='-')||($a=='.')) ? $a : '-';
		$regEx = "/^(\d{4})\\{$a}([0][0-9]|[1][0-2])\\{$a}([012][0-9]|3[01])$/";
		if(preg_match($regEx, $string, $matches)){
			$year  = $matches[1];
			$month = $matches[2];
			$day   = $matches[3];
			if (checkdate($month, $day, $year)) return true;
		}
		return false;
	}

}
