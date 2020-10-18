<!DOCTYPE html>
<html>
<head>
	<title>
		Patient Registration
	</title>
</head>
<body>
	<form>
		<!-- this is for First name -->
		<label for="fname">First name:</label><br>

  		<input type="text" id="fname" name="fname"><br>

  		<!-- this is for Middle name -->

  		<label for="mname">Middle name:</label><br>

  		<input type="text" id="mname" name="mname"><br>

  		<!-- this is for Last name -->

  		<label for="lname">Last name:</label><br>

  		<input type="text" id="lname" name="lname">

  		<br>
  		<br> <!-- this is for gender -->
  		<label for="gender">Gender:</label><br>
  		<input type="radio" id="male" name="gender" value="male">
  		<label for="male">Male</label>
  		<input type="radio" id="female" name="gender" value="female">
  		<label for="female">Female</label>
  		<input type="radio" id="other" name="gender" value="other">
  		<label for="other">Other</label>

  		<!-- this is for dob -->
  		<br>
  		<br>
  		<label for="dob">Date of Birth :</label><br>
  		<input type="date" id="dob" name="dob">

  		<br>
  		<br>

  		<!-- this is for address -->

  		<label for="addressline1">Address Line 1:</label><br>

  		<input type="text" id="addressline1" name="addressline1"><br>

  		<label for="addressline2">Address Line 2:</label><br>

  		<input type="text" id="addressline2" name="addressline2"><br>

  		<label for="addressline3">Address Line 3:</label><br>

  		<input type="text" id="addressline3" name="addressline3"><br>


  		<br>
  		<br> <!-- this is for symptoms -->
  		<label for="symptoms">Symptoms:</label><br>

  		<input type="radio" id="yes" name="symptoms" value="yes">
  		<label for="yes">Yes</label>

  		<input type="radio" id="no" name="symptoms" value="no">
  		<label for="no">No</label>
  		



	</form>	
</body>
</html>