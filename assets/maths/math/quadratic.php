<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h1>Program to Solve Quadratic equation involving real root</h1>
				<h3>
					In this solution we take following as general equation
					<h1>
						ax<sup>2</sup> + bx + c
					</h1>
				</h3>
					<h4>Coeffiecient of equation in terms of a, b, c</h4>
				<div class="col-md-12">
					<form action="" method="post">					
						<div class="col-md-4">
							<input type="text" name="a" id="a" placeholder="value of a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : '' ;?>" >
						</div>
						<div class="col-md-4">
							<input type="text" name="b" id="b" placeholder="value of b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : '' ;?>" >
						</div>
						<div class="col-md-4">						
							<input type="text" name="c" id="c" placeholder="value of c" value="<?php echo isset($_POST['c']) ? $_POST['c'] : '' ;?>" >
						</div>
						<div class="col-md-12">
							<input type="submit" name="submit" value="Calculate">
						</div>		
						
					</form>
					<?php
							if(@$_POST['submit']){
								$a = $_POST['a'];
								$b = $_POST['b'];
								$c = $_POST['c'];
					            function  equate($a, $b, $c){
					          		$d = $b * $b - 4* $a * $c;
								        if($d>0){
								            echo "The roots are real and distinct\n\r";
								            $r1 = (-$b + sqrt($d))/(2*$a);
								            $r2 = (-$b - sqrt($d))/(2*$a);
								            echo "The roots are " .$r1 .", " .$r2;
								        }
								        elseif ($d==0) {
								            echo "The roots are real and equal \n\r";
								            $r1 = (-$b / ( 2 * $a ));
								            $r2 = $r1;
								            echo "The roots are " .$r1 .", " .$r2;
								        }
								        else{
								            $d = -$d;
								            echo "The roots are imaginary\n\r";
								            $m = (-$b / (2 * $a));
								            $s = sqrt($d)/(2 * $a);
								            echo "The roots are " .$m ." + i " .$s ." and " .$m ." -i " .$s;
								        }
								}
						        echo '<div class="container-result" ><h3>Result: ';
						        equate($a, $b, $c);
						        echo '</h3></div>';
						    }
					    ?>

				</div>
			</div>
			<div id="sidebar" class="4u sidebar">
				<p>
					In elementary algebra, a quadratic equation (from the Latin quadratus for "square") is any equation having the form

					<h2>ax<sup>2</sup>+bx+c=0</h2>

					<span>where x represents an unknown, and a, b, and c represent known numbers such that a is not equal to 0. If a = 0, then the equation is linear, not quadratic. The numbers a, b, and c are the coefficients of the equation, and may be distinguished by calling them, respectively, the quadratic coefficient, the linear coefficient and the constant or free term</span>
				</p>
				<img src="images/quadratic.png">
			</div>
	</section>
</div>
