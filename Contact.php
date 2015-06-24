<!DOCTYPE html>
<html>
<head>
<title> Contact </title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div id="container1">
	<div id="container">
	<div id="header">
	<table id="tallign">
		<tr><center>
			<td class="image"><img src="logo.gif" alt="Logo"></td></center>
			<td>Silverado Cinema</td>
		</tr>
	</table>
</body>
<body>
	</div>
	<div id="navigation">
	<a href="Home Page.php" class="myButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="Contact.php" class="myButton">Contact Us</a>
	<a href="Movie.php" class="myButton">All Movies</a>
	<a href="Booking.php" class="myButton">Online Bookings</a>	

	
	<section><center>
<br><img src="contactus.jpg" height="174" width="500" alt="contactus"/><br><br></center>


<font color="white">
<p>Please fill in the form below to contact us. One of our friendly staff members will get back to you shortly.</p><br>


<form method="POST" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php">

E-mail: <input type="email" name="email" required><br><br>

<textarea rows="4" cols="50" name="message" required></textarea><br><br>

<select name="subject">
  <option value="general_enquiry">General Enquiry</option>
  <option value="group_and_corporate_bookings">Group and Corporate Bookings</option>

  <option value="suggestions_and_complaints">Suggestions and Complaints</option>
</select><br><br>
</font>
<input type="submit" value="Submit">
</form>
</section>

<footer>
<p>&copy; Silverado Cinemas, 2015 - Meng Ung (s3383816)</p>
</footer>


</div>
</div>

</html>
