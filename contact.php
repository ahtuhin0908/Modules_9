<!DOCTYPE html>
<html>
<title>Contact</title>
<link rel="Shortcut icon" type="x-icon" href="contact.png"
<head>
	<title>Contact Us</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		input[type="text"], input[type="email"], textarea {
			margin-bottom: 20px;
			width: 50%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px 1px #ccc;
		}
		input[type="submit"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #4CAF50;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="process_form.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Your name.." required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Your email.." required>

		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" placeholder="Subject.." required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" placeholder="Write something.." required></textarea>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
