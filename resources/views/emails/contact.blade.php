<!DOCTYPE html>
<html>
<head>
	<title>Email Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- BOOTSTRAP FILE -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row" style="background-color: #d9d9d9;">
		<div class="">
			<div class="panel panel-default" style="padding:0 10px;">
				<div style="background-color: #6d7b8d; border:2px solid #fff;">
					<h2 style="color: #fff; text-align: center; text-shadow: 1px 1px #000; border: 1px solid #bcc6cc; padding: 5px 20px;">New E-mail: Contact
					</h2>
				</div>
				<hr>

		       <div style="background-color: #ebf4f8; margin-top: 50px; padding: 30px;">
			       <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Name:</b> {{ ucwords($name) }}</p>
			       <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Email:</b> {{ ucwords($email) }}</p>
			       {{-- <p style="color: #000; text-shadow: 1px 1px #fff;"><b>Subject:</b> {{ ucwords($subject) }}</p> --}}
		       </div>

		       <div style="background-color: #e5e4e2; margin-top: 50px;">
					<p style="color: #6d7b8d;text-shadow: 1px 1px #fff; margin-bottom: 100px; padding: 30px;"><b>Message Body: </b><br> {{ ucwords($msgBody) }}</p>
		       </div>
		  </div>
  </div>
</div>
</div>
</body>
</html>
