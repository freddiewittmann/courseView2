<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel = "stylesheet" type = "text/css" href = "css/indexStyles.css">
	<title>Home Page</title>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content = "IE=edge"> <!--Internet explorer use the latest rendering engine -->
	<meta name="viewport" content = "width = divice-width, initial-scale = 1"> <!--Set the page width to the size of the device-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Bootstrap CDN-->
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "css/adjuster.css">
	<link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
	<style>
		/*HTML elements*/
		body {
			background: #DCDCDC;
			font-family: 'Quicksand', sans-serif;
		}
		button:hover {
			background-color: #ec971f;
		  	border-color: #ec971f;
		}
		h1 {
			font-size: 4vw;
			text-align: center;
			position: relative;
			top: 11vh;
			padding-bottom: 7vh;
		}
		input::placeholder {
			font-size: 15px;
		}
		p {
			font-size: 18px;
			color: black;
			font-weight: bold;
			font-family: 'Quicksand', sans-serif;
		}
		/*Classes*/
		.aboutUs {
			position: relative;
			top: 13vh;
			padding-bottom: 70px;
		}
		.rest {
			font-family: 'Montserrat', sans-serif;
			font-size: 50px;
		}
		.search {
			position: relative;
			display: flex;
			padding-bottom: 1.5vw;
		}
		.searchTerm {
			width: 100%;
			height: 48px;
			border: .4vh solid #F78411;
			border-right: none;
			padding: 5px;
			border-radius: 5px 0 0 5px;
			outline: none;
		}
		.searchButton {
			width: 40px;
			height: 47px;
			border: .4vh solid #F78411;
			background: #F78411;
			text-align: center;
			color: #fff;
			border-radius: 0 5px 5px 0;
			cursor: pointer;
			font-size: 20px;
		}
		.searchDescription {
			width: 36vw;
			position: relative;
			left: -7%;
			padding-top: 6vh;
		}
		.wrap {
			width: 30vw;
			position: relative;
			top: 210px;
			left: 50%;
			transform: translate(-50%, -50%);  
		}
		/*IDs*/
		#titleElement {
			font-weight: bold;
			color: #F78411;
			font-size: 110px;
		}
		@media only screen and (max-width: 600px) {
			.aboutUs {
				padding-top: 8vh;
			}
		}
	</style>
</head>
<body>
	<div class = "container"> <!--puts padding around contained elements-->
				<div class = "row">
					<div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
						<a href = "<?php echo route('pages.home');?>">
							<h1><span id = "titleElement">C</span><span class = "rest">ourse </span><span id = "titleElement">V</span><span class = "rest">iew</span></h1>
						</a>
							<br>
							<b>Find out more about your courses!</b>
					</div>
				</div>
				<div class = "text-center aboutUs">
	   				<a type = "button" class="btn btn-warning" href = "<?php echo route('pages.about');?>">About</a>
				</div>
		<div class = "wrap">
			<br>
			<!--SEARCH FORM-->
				<form action = 'courseList.php' method = 'GET'>
		   			<div class="search text-center">
		      			<input type="text" required = "required" name = "course" class="searchTerm" placeholder="Search a course name or course code...">
		      			<button type="submit" class="searchButton glyphicon glyphicon-search">
		     			</button>
		   			</div>
		   		</form>
	   			<div class = "searchDescription text-center">
	   				<p><span id = "description">Use the search bar above to search for a course and find out what people think about it! You can also leave a review or chat with others about the course!</span></p>
	   			</div>
	   	</div>
	</div> 
</body>