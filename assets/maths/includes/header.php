<?php //replace_for_mod_rewrite('intro'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Math Help</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="<?php echo BASE_URL;?> /assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css" />
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Math Help</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="<?php echo BASE_URL;?>/welcome">Home</a></li>
								<li>
								<!-- Nav  for Geometry-->
									<a href="">Geometry</a>
									<ul>
										<!-- Nav to circle -->
										<li><a href="<?php echo BASE_URL .'/' .'circle'; ?>">Circle</a></li>
										<li>
											<!-- Nav to triangle -->
											<a href="">Triangle</a>
											<ul>
												<li><a href="<?php echo BASE_URL .'/' .'2side1angle'; ?>">2 side and 1 angle</a></li>
												<li><a href="<?php echo BASE_URL .'/' .'3sidearea'; ?>">3 side </a></li>
												<li><a href="<?php echo BASE_URL .'/' .'heightbase'; ?>">height and base</a></li>
											</ul><!-- Nav to triangle ends -->
										</li>
									</ul>
								</li>
								<li><!-- Nav to vector start -->
									<a href="#">Vector</a>
									<ul>
										<li><a href="<?php echo BASE_URL .'/' .'add'; ?>">Addition</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'dotproduct'; ?>">Dot Product</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'sub'; ?>">Subtraction</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'multi'; ?>">Multiplication</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'scalar'; ?>">Scalar Multiplication</a></li>
									</ul><!-- Nav to vector ends -->
								</li>
								<li>
									<!-- Nav to algebra start -->
									<a href="">Algebra</a>
									<ul>
										<li><a href="<?php echo BASE_URL .'/' .'linear2'; ?>">Linear Equation with 2 variable</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'linear3'; ?>">Linear Equation with 3 variable </a></li>
										<li><a href="<?php echo BASE_URL .'/' .'quadratic'; ?>">Quadratic Equation</a></li>
									</ul><!-- Nav to algebra ends -->
								</li>
								<li>
									<!-- Nav to Matrix start -->
									<a href="">Matrix</a>
									<ul>
										<li><a href="<?php echo BASE_URL .'/' .'addition'; ?>">Addition of Matrix</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'identity'; ?>">Identical Matrix</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'inverse'; ?>">Inverse Matrix</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'multiplication'; ?>">Multiplication of Matrix</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'subtraction'; ?>">Subtraction of Matrix</a></li>
										<li><a href="<?php echo BASE_URL .'/' .'transpose'; ?>">Transpose of matrix</a></li>
									</ul><!-- Nav to matrix ends -->
								</li>
								<li>
									<!-- Nav to Calculus start here -->
									<a href="<?php echo BASE_URL .'/' .'calculus'; ?>">Calculus</a>
									<!-- Nav to calculus ends -->
								</li>
								<li>
									<!-- Nav to statistics start here -->
									<a href="">Statistics</a>
									<ul>
										<li><a href="">Standard Deviation</a></li>
										<li><a href="">Frequency</a></li>
									</ul><!-- Nav to Statistics ends -->
								</li>
							</ul>
						</nav>	
				</div>
			</div>
