# The Job Space - Job Searching Made Easy

<a href="#about">About</a> | <a href="#contributing">Contributing</a> | <a href="#quality_of_code">Quality of Code</a> | <a href="#contact">Contact</a>
------------ | ------------- | ------------ |------------ 
 | | <a href="#commenting">Commenting</a> |
 | | <a href="#php_coding_standards">PHP Coding Standards</a> |
 | | <a href="#software_design_principles">Software Design Principles</a> |
 | | <a href="#software_design_patterns">Software Design Patterns</a> |
 | | <a href="#testing">Testing</a> |

## <a name="about">About</a>
This is a project that aims to process various job search feeds/APIs and display retrieved job postings in an easy-to-navigate manner.

I plan to store feed/API urls in a database, via a Laravel-based admin backend. To display job postings, I plan to create an API
which will combine listings from all feeds, then display them via the use of BackboneJS. Initially, I plan for job search listings 
to be sortable by: title, date posted, location, proximity to location, keywords, and the feed vendor - more will be added later on.
I plan to use Bootstrap for front-end look-and-feel - I am not a designer by trade, so will be aiming for the 'simple is best' approach.

I know the niche-market for such sites is over-saturated; however, this is more of a project to build upon my personal coding experience.

## <a name="contributing">Contributing</a>
If anyone wants to contribute, by all means to so. To help make things easier for this, I request all contributions follow these steps 
below: 

* Fork the repository.
* Add your code, make a fix, etc...
* Submit a pull request to this repository.

If you spot mistakes in my code, please by all means let me know. I'm always wanting to improve my code, so collaboration is very welcome.

## <a name="quality_of_code">Quality of Code</a>

### <a name="commenting">Commenting</a>
To help other potential contributors (as well as myself) understand what you have contributed, please comment your code. 
Suggested examples can be viewed at http://www.phpdoc.org/docs/latest/getting-started/your-first-set-of-documentation.html.

### <a name="php_coding_standards">PHP Coding Standards</a>
As I want to increase the quality of my code, I plan to use relevant PHP coding standards from http://www.php-fig.org/psr/ (at least up to PSR4).

### <a name="software_design_principles">Software Design Principles</a>
I also will do my best to adhere to relevant software design principles - a good reference for these is http://www.oodesign.com/design-principles.html. 
Some good examples of software design principles, in PHP, can be seen at http://code.tutsplus.com/series/the-solid-principles--cms-634.

### <a name="software_design_patterns">Software Design Patterns</a>
Where appropriate, I also plan to enhance code quality by making the most out of Object-Oriented Design Patterns. Some excellent examples can 
be found at https://github.com/domnikl/DesignPatternsPHP. 

### <a name="testing">Testing</a>

#### <a name="php_code_base">PHP Code Base</a>
For testing PHP classes, functions, code logic, etc, I plan to use PHPUnit. If you don't know what PHPUnit is, you can visit the vendor website 
at https://phpunit.de/ - examples of it's use in Laravel 5+ can be seen at https://laraveltips.wordpress.com/category/phpunit-testing-in-laravel-5-1/.

#### <a name="backbonejs">BackboneJS</a>
I am still relatively new to BackboneJS, so using tests here will make life a whole lot easier. I plan to look over the following guides:

* http://www.sitepoint.com/unit-testing-backbone-js-applications/
* http://mdcox.net/posts/backbone-unit-testing.html

#### <a name="jquery_vanilla_javascript">JQuery/Vanilla Javascript</a>
Up until now, I haven't seriously considered unit testing any of my Javascript/JQuery code (probably because my speciality is back-end server-side code). 
That is a bad thing on my part, so I plan on starting now. Upon a quick glance, QUnit (http://qunitjs.com/) provides an excellent framework for testing - 
some excellent examples can be directly accessed at http://qunitjs.com/intro/. The 'Intro' section is comprehensive, so will be looked upon very often.


## <a name="contact">Contact</a>
Want to talk about this repository, coding in general, etc? Get in touch with me at:

* Email: emailme[.AT.]robertattfield[@DOT@]com
* Web: http://www.robertattfield.com
* LinkedIn: http://nz.linkedin.com/in/robertattfield
* Stack Overflow: http://stackoverflow.com/users/678629/rob 
* Facebook: https://www.facebook.com/robattfieldwebdeveloper 
* Packagist: http://packagist.com/packages/rattfieldnz