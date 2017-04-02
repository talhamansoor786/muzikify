<!DOCTYPE html>
<html lang="en" ng-app="App">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muzikify</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<main>
		  <div ng-view></div>
		  <footer>
			<p>Designed By Me - Powered by Spotify</p>
		  </footer>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-route.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-resource.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-sanitize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-cookies.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controller.js"></script>
</body>
</html>