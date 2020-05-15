<?php 
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {  
ob_start("ob_gzhandler");  
} else {  
ob_start();  
} 
//header to store the file
header("Expires: ".date("D, j M Y h:i:s", mktime(0, 0, 0, date("n")+1, date("j")+1, 2020))." GMT"); 
header("Content-Type: image/png");
 
##################################################### 
//bar graph function file 
##################################################### 
 
function barGraph($value1,$value2,$value3) { 
      
    //Create a new image 
    $image = imagecreate(400,82); 
      
    //Set the colours of the image parts 
    $background = ImageColorAllocate($image,255,255,255); 
    $border = ImageColorAllocate($image,0,0,0); 
    $fill = ImageColorAllocate($image,43,82,0); 
      
    //create the background of the bars 
    ImageFilledRectangle($image,0,0,302,20,$background); 
    ImageFilledRectangle($image,0,30,302,50,$background); 
    ImageFilledRectangle($image,0,60,302,80,$background); 
      
    //create the bars themselves 
    ImageFilledRectangle($image,1,1,$value1,19,$fill); 
    ImageFilledRectangle($image,1,31,$value2,49,$fill); 
    ImageFilledRectangle($image,1,61,$value3,79,$fill); 
      
    //Create the Borders 
    ImageRectangle($image,0,0,300,20,$border); 
    ImageRectangle($image,0,30,300,50,$border); 
    ImageRectangle($image,0,60,300,80,$border); 
      
    //add labels to the items 
    ImageString($image,5 , 310, 0 ,$_GET['aTitle'],$border); 
    ImageString($image,5 , 310, 30,$_GET['bTitle'], $border); 
    ImageString($image,5 , 310, 60,$_GET['cTitle'], $border); 
      
    //convert this page into a PNG image 
    imagePNG($image); 
      
    //Delete the image from menory 
    imagedestroy($image); 
    } 
 
//call the function and pass it it's values 
barGraph($_GET['a'],$_GET['b'],$_GET['c']); 
?> 