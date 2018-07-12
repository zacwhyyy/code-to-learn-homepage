<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<title>Code to Learn | Zhiyang</title>
	<meta name="description" content="Zhiyang's playground. In the midst of making coding part of my daily life.">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76847575-5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-76847575-5');
	</script>

	</head>
	<body class="bg-dark">

	<?php $fileDirectory = "http://limzhiyang.com/code" ?>

	<!-- navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Code to Learn</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Welcome <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" target="_blank" href="http://limzhiyang.com/profile/">About Me</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="https://github.com/zacwhyyy" target="_blank">Github</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="https:medium.com/@limzhiyang" target="_blank">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="mailto:zhiyang.designer@gmail.com" target="_blank">Say Hi</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<?php $fileDirectory = "http://limzhiyang.com/codetolearn/" ?>

	<!-- introduction -->
	<div class="container">
		<div class="row mt-5 pt-3 pb-5">
			<div class="col mt-5">
				<h1 class="text-white display-3 mt-4">Code to Learn.</h1>
				<p class="text-grey">
Inspired by <a href="http://jenniferdewalt.com/index.html" class="text-white" target="_blank">Jennifer Dewalt's 180 websites in 180 days</a>. <br>Follow the projects here.</p>
				<h4 class="text-white lead mt-4">Elsewhere</h4>
				<p>
					<a href="http://limzhiyang.com/works/" target="_blank" class="badge badge-secondary">Portfolio</a>
					<a href="https://dribbble.com/zacwhyyy" target="_blank" class="badge badge-secondary">Dribbble</a>
					<a href="https://www.behance.net/limzhiyang" target="_blank" class="badge badge-secondary">Behance</a>
					<a href="https://medium.com/@limzhiyang" target="_blank" class="badge badge-secondary">Medium</a>
					<a href="https://graphicriver.net/user/zacwhyyy/portfolio" target="_blank" class="badge badge-secondary">Graphicriver</a>
				</p>
			</div>
		</div>

		<!-- spacer -->
		<div class="row mt-5">
			<div class="col mt-5"></div>
		</div>

		<!-- start copying this row -->
		<div class="row mb-4">
			<div class="col-sm-4">
				<!-- Card 1 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Code to Learn Website</h5>
						<p class="card-text">Setting up this website.<br><br></p>
						<a href="#" class="btn btn-dark full-width">View Project</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Card 2 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">The Blak Radio</h5>
						<p class="card-text">Internet Radio, dedicated to my dad.<br><br></p>
						<a href="<?php echo $fileDirectory; ?>2-blakradio" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Card 3 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Before I Die...</h5>
						<p class="card-text">Before I die, I want to... How would you complete the sentence?</p>
						<a href="<?php echo $fileDirectory; ?>3-beforeidie" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
		</div>

		<!-- start copying this row -->
		<div class="row mb-4">
			<div class="col-sm-4">
				<!-- Card 1 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">The Budget Helper</h5>
						<p class="card-text">Have you ever wondered how much you should spend each month?</p>
						<a href="<?php echo $fileDirectory; ?>4-budget" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Card 2 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Guess the Number</h5>
						<p class="card-text">Aka 終極密碼.<br><br></p>
						<a href="<?php echo $fileDirectory; ?>5-guess" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Card 3 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Meditation Timer</h5>
						<p class="card-text">Take a break, take a breath.<br><br></p>
						<a href="<?php echo $fileDirectory; ?>6-meditate" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
		</div>

		<!-- start copying this row -->
		<div class="row mb-4">
			<div class="col-sm-4">
				<!-- Card 1 -->
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">To Do List</h5>
						<p class="card-text">Keeps track of the tasks that you want to achieve daily.</p>
						<a href="<?php echo $fileDirectory; ?>7-todo" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
			
			<!-- <div class="col-sm-4">
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Guess the Number</h5>
						<p class="card-text">Aka 終極密碼.<br><br></p>
						<a href="<?php echo $fileDirectory; ?>5-guess" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<h5 class="card-title">Meditation Timer</h5>
						<p class="card-text">Take a break, take a breath.<br><br></p>
						<a href="<?php echo $fileDirectory; ?>6-meditate" class="btn btn-dark full-width" target="_blank">View Project</a>
					</div>
				</div>
			</div> -->
		</div>

		<!-- footer -->
		<div class="row mt-5 mb-3">
			<div class="col text-grey"><p class="text-center credit">Made with <del>determination</del> by Zhiyang <br>© 2018</p></div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
</html>


