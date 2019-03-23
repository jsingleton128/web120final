<?php
//config.php

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;

//default:    
$title = THIS_PAGE;    
$logo = '';//no icon by default 
$logo_color = ''; //make logo_color an empty string by default
$css = '';//no link by default 

//no index while building a client site in our space
$robots = "noindex,nofollow";

$meta_description = "Seattle's one and only Glamazon Goddess, Isabella Extynn";

$meta_keywords = "Isabella Extynn, Isabella, Extynn, Isabella Extynn Seattle WA, Stetson Wilson Drag, Drag, Drag Queen, Female Impersonation, Female Impersonator, Seattle Drag queen, Seattle Drag queens, Seattle queens, Queen of the Pigs, Glamazon Goddess, Glamazon";

switch(THIS_PAGE){
    
    case 'index.php':
        $title = 'Isabella Extynn Home';
    break;

    case 'about.php':
        $title = 'Isabella Extynn About Huh';
    break;
 
    case 'merch.php':
        $title = 'Isabella Extynn Merchandise';
    break;

    case 'events.php':
        $title = 'Isabella Extynn Event Schedule';
    break;
        
    case 'gallery.php':
        $title = 'Isabella Extynn Media Gallery';
    break;
           
    case 'contactme.php':
        $title = 'Isabella Extynn Contact Me';
        $css = '<link rel="stylesheet" href="css/contact.css"/>';
    break;

}

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfJVosUAAAAAA1VWBlZ3Li5Z3yPNT8Zf3ytAfwp";
$secretKey = "6LfJVosUAAAAAIs8NVsa5yQ3g378uuk2vm6bBMXJ";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>