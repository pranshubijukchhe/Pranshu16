Date :2022/06/19- 2022/06/20 

PHP
Stands for "PHP: Hypertext Preprocessor," a recursive acronym. PHP is a scripting language web developers use to create dynamic websites. It is often installed by default on Apache web servers, alongside MySQL as part of a "LAMP" configuration.

When a website visitor accesses a PHP page, the web server processes, or "parses," the PHP code, which can output HTML to the webpage. In the example below, the PHP function gets the local time and date from the server and inserts it into the HTML.

PHP scripts can range from simple one-line commands to complex functions. Some PHP-based websites generate nearly all webpage content dynamically using a series of PHP scripts. While early versions of PHP were not object-oriented langauge, PHP3 introduced support for classes, including object attributes and methods. Developers can create custom object libraries and import them into various PHP pages, similar to a compilied language.

What can PHP do?
Anything. PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more.
1)Server-side scripting
2)Command line scripting
3)Writing desktop applications.

virtual host setup
Virtual Host
A virtual host is used for hosting multiple domain names on a single server.

Create a folder in htdocs of xammp then write php code syntax: <?php> echo "Echo is use to print in php" ?>

Open apachi > conf >extra >httpd-vhosts.conf in notepad (run as administrator) Then add:

 DocumentRoot "C:\xampp\htdocs\folder location"
 ServerName name.local
</VirtualHost>
then save

Then open C:\Windows\System32\drivers\etc\hosts in notepad add 127.0.01 name.local then you are ready to go:search localhost/location of your directory
