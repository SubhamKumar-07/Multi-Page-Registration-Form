<?php

require_once('conn.php');

$message="";
if(isset($_POST['submit']))
{
  $filename1 = $_FILES['file1']['name'];
  $filesize = $_FILES['file1']['size'];
  $filetemp = $_FILES['file1']['tmp_name'];
  if(is_uploaded_file($filetemp)){
     if($filesize < 4194304){
       if(move_uploaded_file($filetemp, "Uploads/$filename1")){
        $target_path1 = "Uploads/". basename($filename1);
        $filename2 = $_FILES['file2']['name'];
        $filesize = $_FILES['file2']['size'];
        $filetemp = $_FILES['file2']['tmp_name'];
        if(is_uploaded_file($filetemp)){
           if($filesize < 4194304){
             if(move_uploaded_file($filetemp, "Uploads/$filename2")){
              $target_path2 = "Uploads/". basename($filename2);
              $filename3 = $_FILES['file3']['name'];
              $filesize = $_FILES['file3']['size'];
              $filetemp = $_FILES['file3']['tmp_name'];
              if(is_uploaded_file($filetemp)){
                 if($filesize < 4194304){
                   if(move_uploaded_file($filetemp, "Uploads/$filename3")){
                    $target_path3 = "Uploads/". basename($filename3);
                    $filename4 = $_FILES['file4']['name'];
                    $filesize = $_FILES['file4']['size'];
                    $filetemp = $_FILES['file4']['tmp_name'];
                    if(is_uploaded_file($filetemp)){
                       if($filesize < 10485760){
                         if(move_uploaded_file($filetemp, "Uploads/$filename4")){
                          $target_path4 = "Uploads/". basename($filename4);
                          $sql = "INSERT INTO `upload`(`photograph`, `hscmarksheet`, `sscmarksheet`, `semester`) VALUES ('$target_path1','$target_path2','$target_path3','$target_path4')";
                          $result = mysqli_query($conn,$sql);
                          echo '<script type="text/javascript">';
                          echo ' alert("Data Saved Successfully.")';
                          echo '</script>'; 
                         }
                       }else{
                        $message ="Semester Marksheet Should Be Less Than 10MB.";
                       }
                    }
                   }
                 }else{
                  $message ="SSC Marksheet Should Be Less Than 4MB.";
                 }
              }
             }
           }else{
            $message = "HSC Marksheet Should Be Less Than 4MB.";
           }
        }
       }
     }else{
      $message ="Photograph Should Be Less Than 4MB.";
     }
  }
 
}
        
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
    <style>
      .required::after{
        content:" *";
        color:red;
        font: size 20px;
      }
    </style>
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <h4><?php echo $message ?></h4>
      <br>
      <form class="form" method="post" enctype="multipart/form-data">
      <div class="column">
      <label class="required">Passport Size Photograph (JPEG, PNG, JPG)</label>:&nbsp;&nbsp;&nbsp;
      <input type="file" name="file1" accept=".jpeg, .jpg, .png" required>
      </div>
      <br><br>
      <div class="column">
      <label class="required">HSC Marksheet (PDF, JPEG, PNG, DOCX)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
      <input type="file" id="file" name="file2" accept=".pdf, .jpeg, .jpg, .png, .docx" required>
      </div>
      <br><br>
      <div class="column">
      <label class="required">SSC Marksheet (PDF, JPEG, PNG, DOCX)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
      <input type="file" id="file" name="file3" accept=".pdf, .jpeg, .jpg, .png, .docx" required>
      </div>
      <br><br>
      <div class="column">
      <label class="required">Semester Marksheet (PDF, DOCX)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
      <input type="file" id="file" name="file4" accept=".pdf, .docx" required>
      </div>
      <div class="column">
        <button onclick="window.history.back()">Back</button>
        <button name = "submit">Save Data</button>
        </div>
      </form>
    </section>
</body>
</html>
