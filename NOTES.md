- Htdocs folder stores all files of php programs that we write


## Why PHP?

- Stands for PHP: Hypertext Preprocessor

- PHP is a server-side scripting language
- Using PHP, we can interact with databases, create dynamic web pages, and do many more things

- Instead of lots of commands to output HTML, PHP pages contain HTML with embedded code that does "something".

## Syntax

- A PHP script starts with `<?php` and ends with `?>`
- `<?php` is the opening tag and `?>` is the closing tag
- PHP statements end with a semicolon (;) // This is a must

### Comments in PHP

- Single line comments start with `//`
- Multi-line comments start with `/*` and end with `*/`


Note: Keywords, classes, functions, and user-defined functions are not case-sensitive.

## Variables

- Variables are case-sensitive
- Variables start with the `$` sign, followed by the name of the variable
- They are containers for storing data values.

- No concept of data types for variables in PHP because PHP is a loosely typed language, which means that variables do not need to be declared with any particular data type.

### Rules for PHP variables:

- A variable starts with the `$` sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($age and $AGE are two different variables)


## Data Types

- PHP supports the following data types:

1. String - sequences of characters
2. Integer - non-decimal numbers
3. Float (floating point numbers - also called double)
4. Boolean
5. Array
6. Object - instances of classes
7. NULL


- var_dump() function is used to display the data type and value of a variable.

## String Functions

- strlen() - returns the length of a string
- str_word_count() - counts the number of words in a string
- strrev() - reverses a string
- strpos() - searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
- str_replace() - replaces some characters with some other characters in a string
- revstr() - reverses a string
- rtrim() - removes whitespace or other predefined characters from the right side of a string
- ltrim() - removes whitespace or other predefined characters from the left side of a string
- trim() - removes whitespace or other predefined characters from both sides of a string