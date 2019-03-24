<html>
 <head>
  <meta charset="utf-8">
 </head>
<body>

<?php

 $page = file_get_contents('https://www.gismeteo.ru/weather-moscow-balchug-12905/now/');
 $start = "<div class=\"tab tooltip\" data-text=\"";
 $end   = "<span class=\"tab-weather__feel-value\">";
 $end_end = "</span>";

 $start_pos = strpos($page, $start);
 $end_pos   = strpos($page, $end);
 $end_pos   = strpos($page, $end_end, $end_pos);

 $my_chunk  = substr($page, $start_pos, $end_pos - $start_pos);

 echo strip_tags(html_entity_decode($my_chunk));

?>

 </body>
</html>

