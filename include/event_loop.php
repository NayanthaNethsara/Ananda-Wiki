

     <?php
   
 global $day_current;
 global $month_current;
 global $year_current; 


 //1 title
   $query =" SELECT * FROM events WHERE year> '{$year_current}' OR year = '{$year_current}' AND month> '{$month_current}' OR month = '{$month_current}' AND day> '{day_current}' OR day = '{day_current}' ORDER BY day ASC";

   $events = mysqli_query($db, $query);

if($events){
    while ($event = mysqli_fetch_assoc($events)) {

 $name = $event['name'];
 $description = $event['event'];
 $when = $event['date'];
 $day = $event['day'];
 $month = $event['month'];
 $year = $event['year'];


    
 


 $one_event  = '<div class="container timelines-container" mbri-timelines="">'
 .'<div class="row timeline-element reverse separline">'
 .'<div class="timeline-date-panel col-xs-12 col-md-6  align-left">'  
      .'<div class="time-line-date-content">'
      .'<p class="mbr-timeline-date mbr-fonts-style display-5">'
      .$when  
      .'</p>'
      .'</div>'
      .'</div>'
      .'<span class="iconBackground">'
      .'</span>'
      .'<div class="col-xs-12 col-md-6 align-right">'
      .'<div class="timeline-text-content">'
      .'<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">'
      .$name
      .'</h4>'
      .'<p class="mbr-timeline-text mbr-fonts-style display-7">'
      .$description
      .'</p>'
      .'</div>'
      .'</div>'
      .'</div>';

echo $one_event;
   
    }
}



   ?> 