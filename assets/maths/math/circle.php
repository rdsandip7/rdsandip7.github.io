<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				
				<div class="col-md-12"><!-- div for forms inputs and results starts -->
					<!-- form starts -->
					<form action="" method="post" class="circle-form">
						<h1>Program to Calculate Area of circle</h1>
						<div class="col-md-6">				
							<label for="radius">Enter the radius of circle : </label>
						</div>
						<div class="col-md-3">		
							<input type="text" name="radius" id="radius" value="<?php echo isset($_POST['radius']) ? $_POST['radius'] : '' ;?>">
						</div>	
						<div class="col-md-5">							
							<input type="submit" name="area" value="Area ">
						</div>
						<div class="col-md-5">		
							<input type="submit" name="circumference" value="Circumference">
						</div>
					</form>			
						<?php
							
							if(@$_POST['area']){
								$r = $_POST['radius'];			
								$area = pi()* $r*$r;
									
							}
							if(@$_POST['circumference']){
								$r = $_POST['radius'];
								$circumference	= 2*pi()*$r;
							}					
						?>	
						<div class="col-md-6">	
							<label>Area: </label>
								
							<input type="text"  value="<?php echo @$area;?>" />
						</div>
						<div class="col-md-6">	
							<label>Circumference: </label>
							
							<input type="text" value="<?php echo @$circumference;?>"/>
						</div>
								
									
			</div>
			<!-- <div class="col-md-8"> -->
				<div id="sidebar" class="4u sidebar">
					<h2>Area of Circle</h2>
					<span class="byline">The area of a circle is the number of square units inside that circle</span>
					<h3>Formula to calculate Area</h3>
					<span>A=πr<sup>2</sup></span>
					<img src="images/circle.jpg" height="100px" width="100px">
					<h2>Circumference of Circle</h2>
					<span class="byline">The distance around a circle is called the circumference</span>
					<h3>Formula to calculate circumference</h3>
					<span>C=2πr</span>
				</div>
			</div>
		</div>
	</section>
</div>
	