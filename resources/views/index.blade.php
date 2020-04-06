<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
		body {
			  background: #f1f4f7;
			  padding-top: 60px;
			  font-size: 14px;
			  color: #444444;
			  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
			  }
	</style>
</head>
<body>

	<div class="row">
			<h2 align="center">Daily Expense Tracker</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="font-size: 20px;background-color: white">Log in
				</div>
				<div class="panel-body">
					<p style="font-size:20px; color:red" align="center"></p>
					<form action="index1" method="POST">@csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true" style="height: 50px;">@error('email')
									<div>{{$message}}</div>@enderror<br>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" style="height: 50px;" required="true">@error('password')
									<div>{{$message}}</div>@enderror<br>
							</div>
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">login</button><span style="padding-left:250px">
								<a class="btn btn-primary" href="/register">Register</a></span>
							</div>
							</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
