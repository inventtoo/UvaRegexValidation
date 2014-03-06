### Welcome to Uva Regular Expressions Syntax Validation

# What is this?
![UvaRegexValidation](https://raw.github.com/inventtoo/UvaRegexValidation/master/design/UvaRegexValidation_mini.png "Logo Uva Regex Validation") *Uva Regex Validation* is a class of static functions to validate strings through regular expressions.

#License
This project have a MIT License, so you can modify it, redistribute it, print it, burn it, or whatever you want.

#Regex Rules
|RegEx      |Description                                                  |
|:---------:|-------------------------------------------------------------|
|/ /        |start delimiter - end delimiter
|^          |Star with
|$          |end with
|()         |group, output reference as (?1)(?2)...
|(?<name>)  |name group, output reference as (?P>name) or (?&name) [Ref.2]
|?:         |(?: .... ) don't capture group as output  [Ref.3]
|````|````        |or
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
|.          |any single character
|\\.         |point
|\/         |slash /
|[xyz]      |matches a single character contained within the brackets, i.e.: x OR y OR z
|[^xyz]     |any character not contained, i.e.: a OR b OR c ...
|\d         |[0-9]               any number 
|\D         |^0-9]              not any number  
|\w         |[A-Za-z0-9_]        any letter,number,underscore, dot or hyphen        
|\W         |[^A-Za-z0-9_]       non-word characters 
|\a         |[A-Za-z]            alphabetic characters
|\l         |[a-z]               lower-case letters
|\u         |[A-Z]               upper-case letters
	

#List of functions
