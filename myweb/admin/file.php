<?php


require_once('constants.php');

$sql2="SELECT * FROM cv";

$result=mysqli_query($conn,$sql2);

 $files=mysqli_fetch_all($result,MYSQLI_ASSOC);




if(isset($_POST['save']))
{

  $filename=$_FILES['myfile']['name'];

  $destination='uploads/'.$filename;

  $extension=pathinfo($filename,PATHINFO_EXTENSION);

  $file=$_FILES['myfile']['tmp_name'];
  $size=$_FILES['myfile']['size'];

  if(!in_array($extension,['pdf']))
  {
    echo "Your file must be pdf ";
  }
  elseif($_FILES['myfile']['size']>1000000){
    echo "file is too large";
  } 
  else{

    if(move_uploaded_file($file,$destination)){

      $sql="INSERT INTO cv (name,size,downloads)
            VALUES('$filename','$size',0)
      ";

      if(mysqli_query($conn,$sql)){
        echo"file uploaded successfully";
      }else{
        echo"file uploaded fail";
      }

    }

  }


}




if(isset($_GET['file_id'])){

  $id=$_GET['file_id'];
  
  $sql3=" SELECT * FROM cv WHERE id=$id";
  $download=mysqli_query($conn,$sql3);
  
  $file=mysqli_fetch_assoc($download);
  
  $filepath='uploads/' . $file['name'];
  
  if(file_exists($filepath)){
  
    header('Content-Type: application/octet-stream');
  
    header('Content-Description: File Transfer');
  
    header('Content-Disposition:attachment; filename='.basename($filepath));
  
    header('Expires:0');
  
    header('Cache-Control:must-revalidate');
    header('Pragma:public');
  
    header('Content-Length:'.filesize('uploads/'.$file['name']));
  
    readfile('uploads/'.$file['name']);
  
    $newCount=$file['downloads']+1;
  
    $updateQuery="UPDATE cv SET downloads=$newCount WHERE id=$id";
  
    mysqli_query($conn,$updateQuery);
  

  
    exit;
}
}
?>






