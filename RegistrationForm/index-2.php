<?php

require_once('conn.php');

$message="";
if(isset($_POST['submit']))
{
     $hscinstitution = mysqli_real_escape_string($conn,$_POST["hscinstitution"]);
       $hscboard = mysqli_real_escape_string($conn,$_POST["hscboard"]);
         $hscscore = mysqli_real_escape_string($conn,$_POST["hscscore"]);
          $sscinstitution = mysqli_real_escape_string($conn,$_POST["sscinstitution"]);
          $sscboard = mysqli_real_escape_string($conn,$_POST["sscboard"]);
          $sscscore = mysqli_real_escape_string($conn,$_POST["sscscore"]);
          $currentlypursuing = mysqli_real_escape_string($conn,$_POST["currentlypursuing"]);
          $currenteducation = mysqli_real_escape_string($conn,$_POST["currenteducation"]);
          $overallpercentage = mysqli_real_escape_string($conn,$_POST["overallpercentage"]);
          $backlogs = mysqli_real_escape_string($conn,$_POST["backlogs"]);

$sql = "INSERT INTO `second`(`hscinstitution`, `hscboard`, `hscscore`, `sscinstitution`, `sscboard`, `sscscore`, `currentlypursuing`, `currenteducation`, `overallpercentage`, `backlogs`) VALUES('$hscinstitution','$hscboard','$hscscore','$sscinstitution','$sscboard','$sscscore','$currentlypursuing','$currenteducation','$overallpercentage','$backlogs')";
   $result = mysqli_query($conn,$sql);

   if($result)
   {
       header('location: upload.php');
   }
   else
   {
       echo 'not inserted';
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
      <form action="#" class="form" method="post">

        <div class="input-box">
            <label class="required">HSC Institution Name</label>
            <input type="text" name="hscinstitution" placeholder="Institution Name" required />
          </div>

        <br>
        <div class="column">
         <div class="inputt-box">
            <label class="required">HSC Board</label>
          <input type="text" name="hscboard" placeholder="Board Name" required />
          </div>
        <div class="inputt-box">
            <label class="required">Score in HSC(%)</label>
          <input type="number" name="hscscore" placeholder="In Percentage" maxlength="4" step="0.01" required />
        </div>
      </div>

      <div class="input-box">
        <label class="required">SSC Institution Name</label>
        <input type="text" name="sscinstitution" placeholder="Institution Name" required />
      </div>

      <br>
      <div class="column">
        <div class="inputt-box">
            <label class="required">SSC Board</label>
          <input type="text" name="sscboard" placeholder="Board name" required />
        </div>
        <div class="inputt-box">
            <label class="required">Score in SSC(%)</label>
          <input type="number" name="sscscore" placeholder="In Percentage" maxlength="4" step="0.01"   required />
        </div>
      </div>



      <div class="input-box">
        <label class="required">Currently Pursuing</label>
        <input type="text" name="currentlypursuing" placeholder="Pursuing" required />
      </div>

        <div class="input-box">
          <label class="required">Current Educational Institution Name</label>
          <input type="text" name="currenteducation" placeholder="Institution Name" required />
        </div>
        
        <div class="input-box">
            <label class="required">Overall Percentage</label>
            <input type="number" name="overallpercentage" placeholder="Percentage" maxlength="4" step="0.01"   required />
          </div>
        
    
        <div class="input-box address">
          <div class="input-box">
            <label class="required">Current Backlogs If Any</label>
            <input type="number" name="backlogs"  placeholder="No. Of Backlogs" maxlength="2" required>
          </div>
        </div>
        <div class="column">
        <button onclick="window.history.back()">Back</button>
        <button name = "submit">Next</button>
        </div>
      </form>
    </section>
</body>
</html>
