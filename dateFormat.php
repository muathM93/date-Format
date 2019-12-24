<?php


    public function dateFormat($oldDate)
    {
        "2019-01-15 11:12:13";
        
        $array = explode(" ", $oldDate);
        $dateArray = explode("-", $array[0]);
        $timeArray = explode(":", $array[1]);
        
        $thisYear  = $dateArray[0];
        $thisMonth = $dateArray[1];
        $thisDay   = $dateArray[2];
        
        $thisHour  = $timeArray[0];
        $thisMinute = $timeArray[1];
        $thisSecond   = $timeArray[2]; 
        
        if($thisMonth == "01") $thisMonth = "Jan";
        else if($thisMonth == "02") $thisMonth = "Feb";
        else if($thisMonth == "03") $thisMonth = "Mar";
        else if($thisMonth == "04") $thisMonth = "Apr";
        else if($thisMonth == "05") $thisMonth = "May";
        else if($thisMonth == "06") $thisMonth = "June";
        else if($thisMonth == "07") $thisMonth = "July";
        else if($thisMonth == "08") $thisMonth = "Aug";
        else if($thisMonth == "09") $thisMonth = "Sep";
        else if($thisMonth == "10") $thisMonth = "Oct";
        else if($thisMonth == "11") $thisMonth = "Nov";
        else if($thisMonth == "12") $thisMonth = "Dec";
        
        $newDate = "$thisDay $thisMonth $thisYear on $thisHour:$thisMinute";
        
        return $newDate;
    } 

?>