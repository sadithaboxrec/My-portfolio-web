<?php
require_once('constants.php'); 
include('check_login.php');
include_once('file.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Uploaded</title>
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>

    <div class="logout">
    <a href="logout.php" >Logout</a>
    </div>


  <div class="container">

    <div class="row">
      <form action="index.php" method="post" enctype="multipart/form-data">
        <h3>Upload Files</h3>
        <input type="file" name="myfile"><br>
        <button type="submit" name='save'>Upload</button>
      </form>
    </div>


    <div class="row">

    <table>

      <thead>
        <th>Id</th>
        <th>File Name</th>
        <th>Size</th>
        <th>Downloads</th>
        <th>Action</th>
      </thead>

      <tbody>
      <?php 
      foreach($files as $file):
      ?>

           <tr>
            <td> <?php echo $file['id']; ?></td>
            <td> <?php echo $file['name']; ?></td>
            <td> <?php echo $file['size'] / 1000 ."kb"; ?></td>
            <td> <?php echo $file['downloads']; ?></td>

            <td>
              <a href="index.php?file_id=<?php echo $file['id']; ?>" class="btn_primary">Download</a>

              <a href="index.php" class="btn_secondary">Refresh</a>
 
            <a href="deletecv.php?file_id=<?php echo $file['id']; ?>" class="btn_danger">Delete</a>
            </td>

           </tr>

           
      <?php endforeach; ?>


      </tbody>

    </table>

    
    </div>

  </div><!-- container end -->



</body>
</html>


