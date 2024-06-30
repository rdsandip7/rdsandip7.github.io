<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h1>Program to solve Linear equation of three variables</h1>

				<h3>
					In this solution we take following as general equation
					<p><i>
						a<sub>1</sub>x + b<sub>1</sub>y + c<sub>1</sub>z + d =0 ...(1)
						<br>
						a<sub>2</sub>x + b<sub>2</sub>y + c<sub>2</sub>z + d =0 ...(2)
						<br>		
						a<sub>3</sub>x + b<sub>3</sub>y + c<sub>3</sub>z + d =0 ...(3)</i>
					</p>
				</h3>
				<div class="col-md-12"><!-- div for forms inputs and results starts -->
					<!-- form starts -->
					<form class="form-inline" action="" method="post">
						<h2>Coeffiecient of equations in terms of a, b, c</h2>
						<div class="col-md-12">
							<h3>Enter the coeffiecient of first equation in terms of a, b, c , d</h3>
						</div>
						<div class="col-md-3">	
							<input type="text" name="a1" id="a1" placeholder="value of a" value="<?php echo isset($_POST['a1']) ? $_POST['a1'] : '' ;?>">	
						</div>						
						<div class="col-md-3">										
							<input type="text" name="b1" id="b1" placeholder="value of b" value="<?php echo isset($_POST['b1']) ? $_POST['b1'] : '' ;?>">			
						</div>
						<div class="col-md-3">
							<input type="text" name="c1" id="c1" placeholder="value of c" value="<?php echo isset($_POST['c1']) ? $_POST['c1'] : '' ;?>">
						</div>
						<div class="col-md-3">
							<input type="text" name="d1" id="d1" placeholder="value of d" value="<?php echo isset($_POST['d1']) ? $_POST['d1'] : '' ;?>">
						</div>		
						<div class="col-md-12">
							<h3>Enter the coeffiecient of second equation in terms of a, b, c, d</h3>
						</div>
						<div class="col-md-3">
							<input type="text" name="a2" id="a2" placeholder="value of a" value="<?php echo isset($_POST['a2']) ? $_POST['a2'] : '' ;?>">
						</div>
						<div class="col-md-3">							
							<input type="text" name="b2" id="b2" placeholder="value of b" value="<?php echo isset($_POST['b2']) ? $_POST['b2'] : '' ;?>">			
						</div>
						<div class="col-md-3">				
							<input type="text" name="c2" id="c2" placeholder="value of c" value="<?php echo isset($_POST['c2']) ? $_POST['c2'] : '' ;?>">
						</div>
						<div class="col-md-3">
							<input type="text" name="d2" id="d2" placeholder="value of d" value="<?php echo isset($_POST['d2']) ? $_POST['d2'] : '' ;?>">
						</div>
						<div class="col-md-12">
							<h3>Enter the coeffiecient of third equation in terms of a, b, c , d</h3>
						</div>
						<div class="col-md-3">
							<input type="text" name="a3" id="a3" placeholder="value of a" value="<?php echo isset($_POST['a3']) ? $_POST['a3'] : '' ;?>">			
						</div>
						<div class="col-md-3">				
							<input type="text" name="b3" id="b3" placeholder="value of b" value="<?php echo isset($_POST['b3']) ? $_POST['b3'] : '' ;?>">	
						</div>				
						<div class="col-md-3">
							<input type="text" name="c3" id="c3" placeholder="value of c" value="<?php echo isset($_POST['c3']) ? $_POST['c3'] : '' ;?>">
						</div>
						<div class="col-md-3">
							<input type="text" name="d3" id="d3" placeholder="value of d" value="<?php echo isset($_POST['d3']) ? $_POST['d3'] : '' ;?>">
						</div>
						<div class="col-md-12">
							<input type="submit" name="submit" value="Calculate">
						</div>
					</form><!-- form ends here-->				
					<?php
						if(@$_POST['submit']){
							$a1 = $_POST['a1'];
							$b1 = $_POST['b1'];
							$c1 = $_POST['c1'];
							$d1 = $_POST['d1'];

							$a2 = $_POST['a2'];
							$b2 = $_POST['b2'];
							$c2 = $_POST['c2'];
							$d2 = $_POST['d2'];

							$a3 = $_POST['a3'];
							$b3 = $_POST['b3'];
							$c3 = $_POST['c3'];
							$d3 = $_POST['d3'];



							$D = ($a1*$b2*$c3+$b1*$a3*$c2+$c1*$a2*$b3)-($a1*$c2*$b3+$b1*$a2*$c3+$c1*$b2*$a3);

	 						$x = (($b1*$c3*$d2+$c1*$b2*$d3+$d1*$c2*$b3)-($b1*$c2*$d3+$c1*$b3*$d2+$d1*$b2*$c3))/$D;

	 						$y = (($a1*$c2*$d3+$c1*$a3*$d2+$d1*$a2*$c3)-($a1*$c3*$d2+$c1*$a2*$d3+$d1*$c2*$a3))/$D;

	 						$z = (($a1*$b3*$d2+$b1*$a2*$d3+$d1*$b2*$a3)-($a1*$b2*$d3+$b1*$a3*$d2+$d1*$a2*$b3))/$D;
										           
						}
					?>
						<div class="col-md-12">
							<div class="col-md-8">
								<label>Value of x: </label>
							</div>
							<div class="col-md-4">		
								<input type="text" value="<?php echo @$x;?>"/>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-8">			
								<label>Value of y: </label>
							</div>
							<div class="col-md-4">								
								<input type="text" value="<?php echo @$y;?>"/>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-8">			
								<label>Value of z: </label>
							</div>
							<div class="col-md-4">					
								<input type="text" value="<?php echo @$z;?>"/>
							</div>
						</div>			
				
					
				</div>
			</div>
			<div id="sidebar" class="4u sidebar">
				<p>
					A linear equation in three variables describes a plane and is an equation equivalent to the equation 

				
					<h2> Ax+By+Cz+D =0 </h2>					

					where A, B, C, and D are real numbers and A, B, C, and D are not all 0.

				</p>
			</div>
		</div>
	</section>
</div>
	
