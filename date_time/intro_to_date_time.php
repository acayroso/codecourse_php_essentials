<?php

//Create a DateTime object
    $date  = new DateTime;
    var_dump($date);
    
//Format a DateTime content
    echo "<br/>";
    echo $date->format('dS M Y');
     
// Format a DateTime with a time-stamp (unix format)
    echo "<br/>";
    echo $date->getTimestamp();
    
// Using the Scope Resolution Operator
    $dateString = '2017-11-16';
    $date = DateTime::createFromFormat('Y-m-d',$dateString);
    var_dump($date);
    
 // Set the Date and Time
    $dateObj = new DateTime;
    
    $dateObj->setDate(2017,09,04);
    $dateObj->setTime(12,30,30);
    var_dump($dateObj);
    