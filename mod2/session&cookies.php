<?php
/*  Coockies and sesion
PHP Global Variables - Superglobals

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION


    $_COOKIE
    Cookie is a small .txt file it is made automaticaly and cookie is made in clients cache memory on that perticular browser.
    cookie contains unconfidential information about user locations name

    cookies are always indipendent
    
    $_SESSION 
    is a small .txt made automaticaly on server it contains confidentials information about id and passwords.
    session are always dipendent on cookies.


     ---------
    | Cookies |   
     ---------

     initialized as method using setcookie(name,value) name and value are mandetory and the 3rd parameter is expiry time
     and by default expiry time is 1 year from the date it is created. 

     setcookie(name,value,expiry_time)  expiry_time value is given in seconds 

     ex 1 min = 1min*60 seconds

     it doesn't follow leap year 

     for this we use time() function to catch time when the function is called + expiry_time

     time()+ 34 seconds

     setcookie(name,value,expiry_time,path)
     4th parameter is path  "/" by default we give this value so that it can access form anywhre 
     if we want to give perticular path the we can specify as "/second.php"
        
     setcookie(name,value,expiry_time,path,domain)
     5th parameter is domain  

     example as parent and child domain 
     as 
     gla.ac.in // parent domain
     8082, 8085 ,  // child domain as port numbers

     6th parameter is https
     setcookie(name,value,expiry_time,path,domain,https)
     as value given is 'True or False'

     7th parameter is https
     setcookie(name,value,expiry_time,path,domain,https,secure)


     ------------------------------------------------------------
     | setcookie(name,value,expiry_time,path,domain,https,secure) |
     ------------------------------------------------------------
     setcookie(""marks,,expiry_time,path,domain,https,secure) 

*/

//condition to destroy the cookie
//setcookie("marks",get_current_user(),time()-10);  //time se piche le jaao wo automatically destroy ho jaayega

//page1
setcookie("marks",get_current_user(),time()+10);

//page2
echo"Arif". $_COOKIE["Admin"];
if (isset($_COOKIE['marks'])){
    echo ($_COOKIE['marks']);
}
echo "<button><script>location.href='page2.php'</script></button>";


//page3

if (isset($_COOKIE['marks'])){
    setcookie("marks",'',time()-(60*60*324));
}


?>