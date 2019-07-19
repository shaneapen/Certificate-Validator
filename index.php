<!-- ISQP19EB5C -->
<?php

$url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

// Random id EB5C starts at 7th index from the slash part of URL
$full_id = substr($url, strrpos($url, '/') + 1);

if($_POST['certificateID']){
 $full_id = $_POST['certificateID'];
};

$event = substr($full_id,0,4);
$year = substr($full_id,4,2);
$userID = substr($full_id,6);

$dir = "data/".$event."/".$year;
$certificate_file = $dir."/certificate.php";
$json_file = $dir."/".$event.$year.".json";


if(file_exists($certificate_file) && file_exists($json_file)){
      
      $json = json_decode(file_get_contents($json_file, true));

      if(array_key_exists($userID, $json))
            include $certificate_file;
      else
            include 'form.html';
            
}else
      include 'form.html';

?>