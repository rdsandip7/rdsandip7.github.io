<div class="wrapper style2"><!-- wrapper for container starts -->
	<section class="container"><!-- section container starts -->
		<div class="row"><!-- div class row start starts -->
			<div id="content" class="8u skel-cell-important"><!-- container at left side starts -->
				<h1>Program to solve Linear equation in two variables</h1>
				<!-- general equation starts -->
				<h3>
					In this solution we take following as general equation
					<p>
						a<sub>1</sub>x + b<sub>1</sub>y + c<sub>1</sub> =0 ...(1)<br>
						a<sub>2</sub>x + b<sub>2</sub>y + c<sub>2</sub> =0 ...(2)
					</p>
				</h3>
				<!-- general equation ends -->
				<div class="col-md-12"><!-- div for forms inputs and results starts -->
					<!-- form starts -->
					<form action="" method="post" role="form">
						<h2>Coeffiecient of equations in terms of a, b, c</h2>
							<div class="col-md-12">				
								<h3>Enter the coeffiecient of first equation in terms of a, b, c</h3>
							</div>								
								<div class="col-md-4"><!-- input for value of a of first equation -->	
									<input type="text" name="a" id="a" placeholder="value of a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : '' ;?>" >
									
								</div>
								<div class="col-md-4"><!-- input for value of b of first equation -->
									<input type="text" name="b" id="b" placeholder="value of b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : '' ;?>">				
								</div>
								<div class="col-md-4"><!-- input for value of c of first equation -->
									<input type="text" name="c" id="c" placeholder="value of c"value="<?php echo isset($_POST['b']) ? $_POST['b'] : '' ;?>">
								</div>
							<div class="col-md-12">				
								<h3>Enter the coeffiecient of second equation in terms of a, b, c</h3>
							</div>	
									<div class="col-md-4"><!-- input for value of a of second equation -->
										<input type="text" name="a2" id="a2" placeholder="value of  a"value="<?php echo isset($_POST['a2']) ? $_POST['a2'] : '' ;?>">
									</div>					
									<div class="col-md-4"><!-- input for value of b of second equation -->			
										<input type="text" name="b2" id="b2" placeholder="value of b" value="<?php echo isset($_POST['b2']) ? $_POST['b2'] : '' ;?>">
									</div>					
									<div class="col-md-4"><!-- input for value of c of second equation -->
										<input type="text" name="c2" id="c2" placeholder="value of c"value="<?php echo isset($_POST['c2']) ? $_POST['c2'] : '' ;?>">
									</div>
									<div class="col-md-12">
										<input type="submit" name="submit" value="Calculate">
									</div>
					</form><!-- form ends -->	
						<!-- php calculation starts -->				
						<?php
							if(@$_POST['submit']){
								$a = $_POST['a'];
								$b = $_POST['b'];
								$c = $_POST['c'];
								$a2 = $_POST['a2'];
								$b2 = $_POST['b2'];
								$c2 = $_POST['c2'];

		 						
									$x = (($b*$c2 - $b2*$c) / ($a*$b2 - $a2*$b));
									$y = (($c*$a2 - $c2*$a) / ($a*$b2 - $a2*$b));
											           
							}
						?> <!-- php ends -->
						<div class="col-md-4"><!-- display result starts -->
							<label>Value of x: </label>
							<input type="text" readonly value="<?php echo @$x;?>"/>
						</div>
						<div class="col-md-4">
							<label>Value of y: </label>												
							<input type="text" readonly value="<?php echo @$y;?>"/>
						</div>	<!-- display result ends -->		
				</div><!-- div for forms inputs and results ends -->
					

			</div><!-- container at left side ends -->
			<div id="sidebar" class="4u sidebar"><!-- conatiner of right side starts -->
			<!-- discription of linear equation starts -->
				<h1>A linear system of two equations with two variables is any system that can be written in the form.</h1>
				<img src="images/linear2.gif"><!-- image of general equation -->
				<h1>where any of the constants can be zero with the exception that each equation must have at least one variable in it.</h1>
			<!-- discription of linear equation end -->
			</div><!-- conatiner at right ends -->
		</div><!-- div class row ends -->
	</section><!-- section container ends -->
</div><!-- wrapper for container ends -->
	
	
