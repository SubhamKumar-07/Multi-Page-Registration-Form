<?php

require_once('conn.php');

$message="";
if(isset($_POST['submit']))
{
     $Firstname = mysqli_real_escape_string($conn,$_POST["Firstname"]);
       $Lastname = mysqli_real_escape_string($conn,$_POST["Lastname"]);
         $BirthDate = mysqli_real_escape_string($conn,$_POST["BirthDate"]);
          $EmailAddress = mysqli_real_escape_string($conn,$_POST["EmailAddress"]);
          $ffirstname = mysqli_real_escape_string($conn,$_POST["ffirstname"]);
          $flastname = mysqli_real_escape_string($conn,$_POST["flastname"]);
          $mfirstname = mysqli_real_escape_string($conn,$_POST["mfirstname"]);
          $mlastname = mysqli_real_escape_string($conn,$_POST["mlastname"]);
          $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
          $nationality = mysqli_real_escape_string($conn,$_POST["nationality"]);
          $StreetAddress = mysqli_real_escape_string($conn,$_POST["StreetAddress"]);
          $city = mysqli_real_escape_string($conn,$_POST["city"]);
          $country = mysqli_real_escape_string($conn,$_POST["country"]);
          $mobilehome = mysqli_real_escape_string($conn,$_POST["mobilehome"]);
          $mobile = mysqli_real_escape_string($conn,$_POST["mobile"]);

$sql="SELECT * FROM `first` WHERE (`mobilehome` ='$mobilehome' or `EmailAddress` ='$EmailAddress' or `mobile` ='$mobile')";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
if ($EmailAddress==$row['EmailAddress'])
{
    $message = "Email Address already exists";
}
elseif($mobile==$row['mobile'])
  {
      $message= "Telephone Personal Number already exists";
  }
  elseif($mobilehome==$row['mobilehome'])
  {
      $message= "Telephone Home Number already exists";
  }
}

else
{ 
$sql = "INSERT INTO `first`(`Firstname`, `Lastname`, `BirthDate`, `EmailAddress`, `ffirstname`, `flastname`, `mfirstname`, `mlastname`, `gender`, `nationality`, `StreetAddress`, `city`, `country`, `mobilehome`, `mobile`) VALUES ('$Firstname','$Lastname','$BirthDate','$EmailAddress','$ffirstname','$flastname','$mfirstname','$mlastname','$gender','$nationality','$StreetAddress','$city','$country','$mobilehome','$mobile')";
   $result = mysqli_query($conn,$sql);  

   if($result)
   {
       header('location: index-2.php');
   }
   else
   {
       echo 'not inserted';
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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
      <form action="#" class="form" method="POST">
        <label class="required">First Name</label>
        <div class="column">
        <div class="inputt-box">
          <input type="text" name="Firstname" placeholder="First name" required />
        </div>
        <div class="inputt-box">
          <input type="text" name="Lastname" placeholder="Last name" required />
        </div>
      </div>

      <div class="input-box">
        <label class="required">Birth Date</label>
        <input type="date" name= "BirthDate" placeholder="Enter birth date" required />
      </div>

        <div class="input-box">
          <label class="required">Email Address</label>
          <input type="email" name="EmailAddress" placeholder="Enter email address" required />
        </div>
        <br>
        <label class="required">Father's Name</label>
        <div class="column">
        <div class="inputt-box">
          <input type="text" name="ffirstname" placeholder="First name" required />
        </div>
        <div class="inputt-box">
          <input type="text" name="flastname" placeholder="Last name" required />
        </div>
      </div>
      <br>
      <label class="required">Mother's Name</label>
      <div class="column">
      <div class="inputt-box">
        <input type="text" name="mfirstname" placeholder="First name" required />
      </div>
      <div class="inputt-box">
        <input type="text" name="mlastname" placeholder="Last name" required />
      </div>
     </div>

      
        <div class="gender-box">
          <h3 class="required">Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" value="male" name="gender"/>
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" value="female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" value="other" name="gender" />
              <label for="check-other">Prefer Not To Say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label class="required">Nationality</label>
          <input type="text" name="nationality" placeholder="Nationality" required /><br><br>
          <label class="required">Home Address</label>
          <input type="text" name="StreetAddress" placeholder="Street Address" required />
          <div class="column">
            <input type="text" name="city" placeholder="City" required />
            <div class="select-box">
              <select name="country" placeholder="Country" required>
              <option>--Select Country--</option>
              <option value="AF">Afghanistan</option>
    <option value="Armenia">Armenia</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Bhutan">Bhutan</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei">Brunei</option>
    <option value="Cambodia">Cambodia</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CY">Cyprus</option>
    <option value="GE">Georgia</option>
    <option value="HK">Hong Kong</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran</option>
    <option value="IQ">Iraq</option>
    <option value="IL">Israel</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KP">North Korea</option>
    <option value="KR">South Korea</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Laos</option>
    <option value="LB">Lebanon</option>
    <option value="MO">Macao</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="MN">Mongolia</option>
    <option value="MM">Myanmar (Burma)</option>
    <option value="NP">Nepal</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PS">Palestine</option>
    <option value="PH">Philippines</option>
    <option value="QA">Qatar</option>
    <option value="RU">Russia</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SG">Singapore</option>
    <option value="LK">Sri Lanka</option>
    <option value="SY">Syria</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="AE">United Arab Emirates</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VN">Vietnam</option>
    <option value="YE">Yemen</option>
              </select>
            </div>
          </div>
          <div class="input-box">
            <label>Telephone Home</label>
            <input type="text"  name="mobilehome" placeholder="Telephone Home" maxlength="10" pattern="[1-9]{1}[0-9]{9}" title="Only Numeric Value" required>
          </div>
          <div class="input-box">
            <label class="required">Telephone Personal</label>
            <input type="text"  name="mobile" placeholder="Telephone Mobile" maxlength="10" pattern="[1-9]{1}[0-9]{9}" title="Only Numeric Value" required>
          </div>
        </div>
        
        <button name = "submit">Next</button>
      </form>
    </section>
</body>
</html>
