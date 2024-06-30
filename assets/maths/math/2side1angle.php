<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h2>Program to calculate Area of Triangle When two sides and the angle between these two sides are given</h2>
				<h3>Side Of Triangle in Term of  base b , height h and angle A</h3>
				<div class="col-md-12">
					<form action="" method="post" class="2side-1angle-form">						
						<div class="col-md-4">
							<label for="side-a">Enter Side a</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="side-a" id="side-a" value="<?php echo isset($_POST['side-a']) ? $_POST['side-a'] : '' ;?>">					
						</div>
						<div class="col-md-4">
							<label for="side-b">Enter side b</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="side-b" id="side-b" value="<?php echo isset($_POST['side-b']) ? $_POST['side-b'] : '' ;?>">
						</div>
						<div class="col-md-4">
							<label for="angle-a">Enter Angle A</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="angle-a" id="angle-a" value="<?php echo isset($_POST['angle-a']) ? $_POST['angle-a'] : '' ;?>">
						</div>
						<div class="col-md-8">
							<input type="submit" name="submit" value="Calculate">
						</div>
					</form>			
					<?php
						if(@$_POST['submit']){
							$a = $_POST['side-a'];
							$b = $_POST['side-b'];
							$A = $_POST['angle-a'];
							
							$area = ($a*$b*sin(deg2rad($A)))/2;

									
						}
					?>
					<div class="col-md-8">
						<div class="col-md-4">	
							<label>Area: </label>
						</div>
						<div class="col-md-4">								
							<input type="text" readonly value="<?php echo @$area;?>"/>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="4u sidebar">
				<h1>Formula</h1>
				<p>A=abSinC/2</p>
				<p>where a,b are the two known sides and C is the included angle.</p>
				<img src="images/2side.gif">

			</div>
		</div>
	</section>
</div>