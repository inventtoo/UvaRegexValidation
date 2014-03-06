### Welcome to Uva Regular Expressions Syntax Validation

## What is this?
![UvaRegexValidation](https://raw.github.com/inventtoo/UvaRegexValidation/master/design/UvaRegexValidation_mini.png "Logo Uva Regex Validation") *Uva Regex Validation* is a class of static functions to validate strings through regular expressions.

##Regular Expression Rules (RegEx Rules) 
|[RegEx][1] |Description                                                  |
|:---------:|-------------------------------------------------------------|
|/ /        |start delimiter - end delimiter
|^          |star with
|$          |end with
|()         |group, output reference as (?1)(?2)...
|(?<name>)  |name group, output reference as (?P>name) or (?&name) [PHP Manual][2]
|?:         |(?: .... ) don't capture group as output  [StackOverflow Post][3]
|&#124;     |or
|\          |escaped
|+          |one or more repetitions (at least 1 repetition)
|*          |zero or more repetitions (optional with multiple repetitions)
|?          |one or zero repetitions (optional 1 repetition)
|{x}        |x repetitions
|{x,y}      |from x to y repetitions
|{x,}       |from x to any repetitions
|a-z        |a to z letters
|A-Z        |A to Z letters
|0-9        |0 to 9 numbers
|.          |any single character (point)
|\\.        |point (escaped point)
|\/         |slash / (escaped slash)
|[xyz]      |matches a single character contained within the brackets, i.e.: x OR y OR z
|[^xyz]     |any character not contained, i.e.: a NOR b NOR c ...
|\d         |equivalence of: [0-9] any number 
|\D         |equivalence of: [^0-9] not any number  
|\w         |equivalence of: [A-Za-z0-9_] any letter,number,underscore, dot or hyphen        
|\W         |equivalence of: [^A-Za-z0-9_] non-word characters 
|\a         |equivalence of: [A-Za-z] alphabetic characters
|\l         |equivalence of: [a-z] lower-case letters
|\u         |equivalence of: [A-Z] upper-case letters

[1]: http://en.wikipedia.org/wiki/Regular_expression "Wikipedia"
[2]: http://www.php.net/manual/en/regexp.reference.recursive.php "PHP Manual"
[3]: http://stackoverflow.com/questions/3512471/non-capturing-group "StackOverFlow"
[4]: http://net.tutsplus.com/tutorials/other/8-regular-expressions-you-should-know/ "Tutsplus.com"
	
	
##List of functions

###PHP Functions
* **is_​array** [\[Manual\]][5]
* **is_​string** [\[Manual\]][6]
* **is_​object** [\[Manual\]][7]
* **is_​bool** - ex: true, false [\[Manual\]][8]
* **is_​float (is_​double, is_​real)**- ex: 23.5, 1e7 [\[Manual\]][9]
* **is_​int (is_​integer, is_​long)** - ex: 23, 86 [\[Manual\]][10]
* **is_​null** - ex: null, NULL [\[Manual\]][11]
* **is_​numeric** - ex:  "42", 1337, 0x539, 02471, 0b10100111001, 1337e0, 9.1 [\[Manual\]][12]
* **is_​scalar** - ex: integer||float||string||boolean [\[Manual\]][13]
[5]: http://mx1.php.net/manual/en/function.is-array.php
[6]: http://mx1.php.net/manual/en/function.is-string.php
[7]: http://mx1.php.net/manual/en/function.is-object.php
[8]: http://mx1.php.net/manual/en/function.is-bool.php
[9]: http://mx1.php.net/manual/en/function.is-float.php
[10]: http://mx1.php.net/manual/en/function.is-int.php
[11]: http://mx1.php.net/manual/en/function.is-null.php
[12]: http://mx1.php.net/manual/en/function.is-numeric.php
[13]: http://mx1.php.net/manual/en/function.is-scalar.php

###Class Functions
* **is_alphabetic** - validate if a string is alphabetic
* **is_alphanumeric** - validate if a string is alphanumeric
* **is_number_string** - validate if a string is numeric
* **is_email** - validate if a string is an e-mail
* **is_hexadecimal_color** - validate if a string is hexadecimal color value
* **is_url** - validate if a string is an URL
* **is_url_image** - validate if a string is an image URL
* **is_url_friendly** - validate if a string is a friendly URL without domain 
* **is_ip** - validate if a string is an IP value
* **is_strlen_min(s,l)** - validate the minimum length of a string (string,lenght) 
* **is_strlen_max(s,l)** - validate the maximal length of a string (string,lenght) 
* **is_strlen_between(s,m,M)** - validate if the string has between min and max characters (string,min,max)
* **is_username(s,m,M)** - validate if a string is a valid username (letters [Upper/Lower-case], point [.], underscore [_]) (string,min,max)
* **is_password(s,m,M)** - validate if a string is a valid password (string,min,max)
* **is_password_secure(s,m,M)** - validate if a string is a valid secure password with special characters (string,min,max)
* **is_personal_name** -validate if a string is a full personal name
* **is_html_tag** - validate if a string is a html tag
* **is_datetime** - validate if a string is a datetime string (yyyy-mm-dd hh:mm:ss)
* **is_time** - validate if a string is a time string (hh:mm:ss)
* **is_date** - validate if a string is a date string ISO-Standard(yyyy-mm-dd)
* **is_date_ddmmyyyy** - validate if a string is a date string (dd-mm-yyyy)
* **is_date_mmddyyyy** - validate if a string is a date string (mm-dd-yyyy)
* **is_date_yyyymmdd** - validate if a string is a date string (yyyy-mm-dd)

##Examples

```php
<?php

var_dump(uva::is_url('http://inventtoo.com'));
//Output: int(1) 

var_dump(uva::is_alphabetic('123456'));
//Output: int(0) 

var_dump(uva::is_url('test'));
//Output: int(0) 
```

##License
This project have a MIT License, so you can modify it, redistribute it, print it, burn it, or whatever you want.


