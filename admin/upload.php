<?php
if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ''){
   /* Getting file name */
   $file_name = $_FILES['file']['name'];
   $file_size = $_FILES['file']['size'];

   /* Location */
   $location = "img/temporary/".$file_name;
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($location,PATHINFO_EXTENSION));
   $rename = uniqid(rand(), true).'.'.$imageFileType;

   $newLocation = "img/temporary/".$rename;

   /* Valid Extensions */
   $valid_extensions = array("jpg","jpeg","png");
   /* Check file extension */
   if( !in_array($imageFileType,$valid_extensions) ) {
      $uploadOk = 0;
   }
   /* Check file size */
   if($file_size > 307200){
      $uploadOk = 0;
   }

   if($uploadOk == 0){
      echo $uploadOk;
   }else{
      /* Upload file */
      if(move_uploaded_file($_FILES['file']['tmp_name'],$newLocation)){
         echo $newLocation;
      }else{
         echo $uploadOk;
      }
   }
}