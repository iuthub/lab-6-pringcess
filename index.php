<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
       .error {color: #FF0000;}
        </style>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>


		<h1>Registration Form</h1>

		<p>
        <?php
        $maritalstatusErr="";
		$genderErr="";
		$name=$email=$username=$password=$confirmpassword=$dob=$gender=$maritalstatus=$address=$city=$postalcode=$homephone=$mobilephone=$credit=$creditexp=$salary=$url=$gpa="";
		$nameErr=$emailErr=$usernameErr=$passwordErr=$confirmpasswordErr=$dobdErr=$genderErr=$maritalstatusErr=$addressErr=$cityErr=$postalcodeErr=$homephoneErr=$mobilephoneErr=$creditErr=$creditexpErr=$salaryErr=$urlErr=$gpaErr="";
		
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else { 
  	$name=$_POST["name"];
  	$pattern="/[\D]{2,}/";
  	if(preg_match($pattern, $name)) {
						$match="Correct";
					} else {
						 $nameErr ="Invalid name";
					}
}

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is required";
  } else { 
  	$email=$_POST["email"];
    $pattern1="/[a-z]+(\d)*(\D)*(\d)*@(gmail\.com|mail\.ru|mail\.com|hotmail\.com)/";
  	if(preg_match($pattern1, $email)) {
						$match="Correct";
					} else {
						 $emailErr ="Invalid e-mail";
					}
}

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else { 
  	$username=$_POST["username"];
    $pattern2="/(\D|\d){5,}/";
  	if(preg_match($pattern2, $username)) {
						$match="Correct";
					} else {
						 $usernameErr ="Invalid username";
					}
}

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else { 
  	$password=$_POST["password"];
    $pattern3="/(\D|\d){8,}/";
  	if(preg_match($pattern3, $password)) {
						$match="Correct";
					} else {
						 $passwordErr ="Invalid password";
					}
}

if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "Confirm password is required";
  } else { 
  	$confirmpassword=$_POST["confirmpassword"]; 
  	if(strcmp($password, $confirmpassword)==0) {
						$match="Correct";
					} else {
						 $passwordErr ="Passwords do not match";
					}
}

if (isset($_POST["dob"])){
   	$dob=$_POST["dob"];
    $pattern4="/^([0-2][0-9]|(3)[0-1])\.(((0)[0-9])|((1)[0-2]))\.\d{4}$/";
  	if(preg_match($pattern4, $dob)) {
						$match="Correct";
					} else {
						 $dobdErr ="Invalid DOB";
					}
}
 if (isset($_POST["gender"])){
  	$gender=$_POST["gender"];
    $pattern5="/(female|male)/";
  	if(preg_match($pattern5, $gender)) {
						$match="Correct";
					} else {
						 $genderErr ="Invalid gender";
					}

}


  if (isset($_POST["maritalstatus"])){
  	$maritalstatus=$_POST["maritalstatus"];
    $pattern6="/(single|married|divorced|widowed)/";
  	if(preg_match($pattern6, $maritalstatus)) {
						$match="Correct";
					} else {
						 $maritalstatusErr ="Invalid marital status";
					}

}

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else { 
  	$address=$_POST["address"];
   }

   if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else { 
  	$city=$_POST["city"];
   }

   
  if (empty($_POST["postalcode"])) {
    $postalcodeErr = "Postal code is required";
  } else { 
  	$postalcode=$_POST["postalcode"];
    $pattern7="/(\d){6}/";
  	if(preg_match($pattern7, $postalcode)) {
						$match="Correct";
					} else {
						 $postalcodeErr ="Invalid postalcode";
					}
}


if (empty($_POST["homephone"])) {
    $homephoneErr = "homephone is required";
  } else { 
  	$homephone=$_POST["homephone"];
    $pattern8="/71 2([0-9]){6}/";
  	if(preg_match($pattern8, $homephone)) {
						$match="Correct";
					} else {
						 $homephoneErr ="Invalid homephone";
					}
}

if (empty($_POST["mobilephone"])) {
    $mobilephoneErr = "mobilephone is required";
  } else { 
  	$mobilephone=$_POST["mobilephone"];
    $pattern9="/9[0-8] [1-9]([0-9]){6}/";
  	if(preg_match($pattern9, $mobilephone)) {
						$match="Correct";
					} else {
						 $mobilephoneErr ="Invalid mobilephone";
					}
}

if (empty($_POST["credit"])) {
    $creditErr = "Credit card number is required";
  } else { 
  	$credit=$_POST["credit"];
    $pattern10="/(([0-9]){4} ){3}[0-9]/";
  	if(preg_match($pattern10, $credit)) {
						$match="Correct";
					} else {
						 $creditErr ="Invalid credit card number";
					}
}

if (empty($_POST["creditexp"])) {
    $creditexpErr = "Credit card expiry date is required";
  } else { 
  	$creditexp=$_POST["creditexp"];
    $pattern11="/^([0-2][0-9]|(3)[0-1])\.(((0)[0-9])|((1)[0-2]))\.\d{4}$/";
  	if(preg_match($pattern11, $creditexp)) {
						$match="Correct";
					} else {
						 $creditexpErr ="Invalid credit card expiry date";
					}
}


if (empty($_POST["salary"])) {
    $salaryErr = "Monthly salary is required";
  } else { 
  	$salary=$_POST["salary"];
    $pattern12="/UZS (\d{3}\,)+\.\d+/";
  	if(preg_match($pattern12, $salary)) {
						$match="Correct";
					} else {
						 $salaryErr ="Invalid monthly salary";
					}
}


if (empty($_POST["url"])) {
    $urlErr = "URL is required";
  } else { 
  	$url=$_POST["url"];
    $pattern13="/http\:\/\/([a-z])+\.(com|ru|org|edu)/";
  	if(preg_match($pattern13, $url)) {
						$match="Correct";
					} else {
						 $urlErr ="Invalid URL";
					}
}

if (empty($_POST["gpa"])) {
    $gpaErr = "GPA is required";
  } else { 
  	$gpa=$_POST["gpa"];
    $pattern14="/([0-3]\.[0-9]|4\.[0-5])/";
  	if(preg_match($pattern14, $gpa)) {
						$match="Correct";
					} else {
						 $gpaErr ="Invalid GPA";
					}

}

  }	?>
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" >
				<span class="error">* <?php echo $nameErr;?></span>
			</dd>
			
			 <dt>E-mail</dt>
			<dd>
				<input type="text" name="email" >
				<span class="error">* <?php echo $emailErr;?></span>
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="username" >
				<span class="error">* <?php echo $usernameErr;?></span>
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="text" name="password" >
				<span class="error">* <?php echo $passwordErr ?></span>
			</dd>
			<dt>Confirm password</dt>
			<dd>
				<input type="text" name="confirmpassword" >
				<span class="error">* <?php echo $confirmpasswordErr ;?></span>
			</dd>
			<dt>Date of birth</dt>
			<dd>
				<input type="text" name="dob" >
				<span class="error">* <?php echo $dobdErr ;?></span>
			</dd>
			<dt>Gender</dt>
			<dd>
			  <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">
              <label for="male">Male</label><br>
              <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="female">
              <label for="female">Female</label><br>
              <span class="error"> <?php echo $genderErr ;?></span>
			</dd>
			<dt>Marital status</dt>
			<dd>
			 <input type="radio"  name="maritalstatus" value="single">
 			 <label for="single">Single</label><br>
 			 <input type="radio"  name="maritalstatus" value="married">
 			 <label for="married">Married</label><br>
 			 <input type="radio"  name="maritalstatus" value="divorced">
 			 <label for="divorced">Divorced</label><br>
 			 <input type="radio"  name="maritalstatus" value="widowed">
 			 <label for="widowed">Widowed</label><br>
 			 <span class="error"> <?php echo $maritalstatusErr ;?></span>
 			</dd>

 			<dt>Address</dt>
			<dd>
				<input type="text" name="address" >
				<span class="error">* <?php echo $addressErr ;?></span>
			</dd>

			<dt>City</dt>
			<dd>
				<input type="text" name="city" >
				<span class="error">* <?php echo $cityErr ;?></span>
			</dd>

			<dt>Postal code</dt>
			<dd>
				<input type="text" name="postalcode" >
				<span class="error">* <?php echo $postalcodeErr ;?></span>
			</dd>

			<dt>Home phone</dt>
			<dd>
				<input type="text" name="homephone" >
				<span class="error">* <?php echo $homephoneErr ;?></span>
			</dd>
			<dt> Mobile phone</dt>
			<dd>
				<input type="text" name="mobilephone" >
				<span class="error">* <?php echo $mobilephoneErr ;?></span>
			</dd>
		</dl>
		<dt>Credit card number</dt>
			<dd>
				<input type="text" name="credit" >
				<span class="error">* <?php echo $creditErr ;?></span>
			</dd>
			<dt>Credit card expiry date</dt>
			<dd>
				<input type="text" name="creditexp" >
				<span class="error">* <?php echo $creditexpErr ;?></span>
			</dd>
			<dt>Monthly salary</dt>
			<dd>
				<input type="text" name="salary" >
				<span class="error">* <?php echo $salaryErr ;?></span>
			</dd>
		<dt>Web site URL</dt>
			<dd>
				<input type="text" name="url" >
				<span class="error">* <?php echo $urlErr ;?></span>
			</dd>
			<dt>GPA</dt>
			<dd>
				<input type="text" name="gpa" >
				<span class="error">* <?php echo $gpaErr;?></span>
			</dd>
		<div> <br/>
			<input type="submit" value="Register">
		</div>
	</form>
	<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $confirmpassword;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $maritalstatus;
echo "<br>";
echo $address;
echo "<br>";
echo $city;
echo "<br>";
echo $postalcode;
echo "<br>";
echo $homephone;
echo "<br>";
echo $mobilephone;
echo "<br>";
echo $credit;
echo "<br>";
echo $creditexp;
echo "<br>";
echo $salary;
echo "<br>";
echo $url;
echo "<br>";
echo $gpa;
echo "<br>";
?>
	</body>
</html>