<?php 

//Working with $_COOKIES superglobal

/* Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 
You can set a specific data to be stored in the browser, and then retrieve it when the use visits the site again */

//Setting a Cookie
setcookie('name', 'Matt', time() + 86400); //Sets a cookie for one day(86400 seconds);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//Unsetting a cookie - Sets cookie to ''/null (subtract the time that the cookie was set for)
setcookie('name', '', time() - 86400);


