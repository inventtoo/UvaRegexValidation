### Welcome to Uva Regular Expressions Syntax Validation

## What is this?
![UvaRegexValidation](https://raw.github.com/inventtoo/UvaRegexValidation/master/design/UvaRegexValidation_mini.png "Logo Uva Regex Validation") *Uva Regex Validation* is a class of static functions to validate strings through regular expressions.

##License
This project have a MIT License, so you can modify it, redistribute it, print it, burn it, or whatever you want.

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
|\d         |equivalance of: [0-9] any number 
|\D         |equivalance of: [^0-9] not any number  
|\w         |equivalance of: [A-Za-z0-9_] any letter,number,underscore, dot or hyphen        
|\W         |equivalance of: [^A-Za-z0-9_] non-word characters 
|\a         |equivalance of: [A-Za-z] alphabetic characters
|\l         |equivalance of: [a-z] lower-case letters
|\u         |equivalance of: [A-Z] upper-case letters

[1]: http://en.wikipedia.org/wiki/Regular_expression "Wikipedia"
[2]: http://www.php.net/manual/en/regexp.reference.recursive.php "PHP Manual"
[3]: http://stackoverflow.com/questions/3512471/non-capturing-group "StackOverFlow"
[4]: http://net.tutsplus.com/tutorials/other/8-regular-expressions-you-should-know/ "Tutsplus.com"
	
	
#List of functions
