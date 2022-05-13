<?php

session_start();

include "connection.php";






if(isset($_POST['add']))
{
  $fileName=$_FILES['file']['name'];
  $fileType=$_FILES['file']['type'];
  $fileSize=$_FILES['file']['size'];
  $fileTemp=$_FILES['file']['tmp_name'];

  $name=$_POST['name'];
    $website=$_POST['website'];
    $address=$_POST['address'];
    $region=$_POST['region'];

  if(is_uploaded_file($fileTemp))
  {
    if($fileSize<2097152)
    {
      if($fileType='image/jpeg')
      {
        if(move_uploaded_file($fileTemp,"images/$fileName"))
        {
            $image='images/'.$fileName;
            $sql1="INSERT INTO hotels (name,website,address,region,rating,image)VALUES('$name','$website','$address','$region',0,'$image')";
            mysqli_query($conn,$sql1);
            
            header("location:userprofile.php");
        }
        else
        {
          echo "Upload failed";
        }
      }
      else
      {
        echo "Select Image file";
      }
    }
    else
    {
      echo "File exceeds 2MB";
    }
  }
  else
  {
    echo "No file selected";
  }
}
else
{
  echo "Select a file";
}






?>