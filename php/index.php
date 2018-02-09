<?php

# Our Current Location
$location = ['51.301819','-0.337613'];

$link = mysqli_connect("localhost","root","","postboxes");
$result = $link->query("SELECT
    id, (
      6371 * acos (
      cos ( radians($user_lat) )
      * cos( radians( 51.301819 ) )
      * cos( radians( -0.337613 ) - radians($user_lng) )
      + sin ( radians($user_lat) )
      * sin( radians( 51.301819 ) )
    )
) AS distance
FROM boxes
HAVING distance < 30
ORDER BY distance
LIMIT 0 , 20");

$output = "<table>";
while($row = mysqli_fetch_array($result)) {
  $output .= "<tr>";
    $output .= "<td>".$row['category']."</td>";
    $output .= "<td>".$row['type']."</td>";
    $output .= "<td>".$row['location']."</td>";
    $output .= "<td>".$row['depot']."</td>";
    $output .= "<td>".$row['outcode']."</td>";
    $output .= "<td>Collected At: ".$row['collection']."</td>";
  $output .= "</tr>";

}

echo $output;
