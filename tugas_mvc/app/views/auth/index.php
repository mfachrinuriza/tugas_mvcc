<!DOCTYPE html>
<html>
<head>
	<title>Form Sign Up</title>
</head>
<body>
	<h1>Create a New Account !</h1>
	
	<h5>Sign Up Form</h5>
	<form action="auth/register" method="post">
		
		<p>Fist Name : </p>
		<input type="text" placeholder="Nama Depan Anda" name="nama_depan">
		<p>Last Name : </p>
		<input type="text" placeholder="Nama Belakang Anda" name="nama_belakang">

		<p>Gender:</p>
			<p><input type="radio">Male</p>
			<p><input type="radio">Famale</p>
			<p><input type="radio">other</p>

		<p>Nationality:</p>
		<select>
			<option>Indonesian</option>
			<option>American</option>
			<option>Malaysian</option>
		</select>

		<p>Language Spoken:</p>
		<p><input type="checkbox">Bahasa Indonesia</p>
		<p><input type="checkbox">English</p>
		<p><input type="checkbox">Other</p>

		<p>Bio:</p>
		<textarea placeholder="Silahkan masukan bio anda"></textarea>

		<br/><button type="submit">Submit</button>
	</form>
</body>
</html>