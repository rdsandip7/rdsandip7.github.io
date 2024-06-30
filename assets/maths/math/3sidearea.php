<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h1>Program to calculate Area of Triangle Using 3 Side</h1>
				<h2>Side Of Triangle in Term of a , b , c</h2>
				<div class="col-md-12">
					<form action="" method="post" class="3-side-form">
						
						<div class="col-md-4">		
							<label for="side-a">Enter Side a</label>
						</div>
						<div class="col-md-8">			
							<input type="text" name="side-a" id="side-a" value="<?php echo isset($_POST['side-a']) ? $_POST['side-a'] : '' ;?>">
						</div>
						<div class="col-md-4">
							<label for="side-b">Enter Side b</label>
						</div>
						<div class="col-md-8">									
							<input type="text" name="side-b" id="side-b" value="<?php echo isset($_POST['side-b']) ? $_POST['side-b'] : '' ;?>">
						</div>
						<div class="col-md-4">
							<label for="side-c">Enter Side c</label>
						</div>
						<div class="col-md-8">			
							<input type="text" name="side-c" id="side-c" value="<?php echo isset($_POST['side-c']) ? $_POST['side-c'] : '' ;?>">
						</div>
						<div class="col-md-8">
							<input type="submit" name="submit" value="Calculate">
						</div>			
					</form>

					<?php
						if(@$_POST['submit']){
							$a = $_POST['side-a'];
							$b = $_POST['side-b'];
							$c = $_POST['side-c'];
							$p= ($a+$b+$c)/2;
							$area = Sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
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
				<p>
				<b>A method for calculating the area of a triangle when you know the lengths of all three sides.</b>
				<br>
				Let a,b,c be the lengths of the sides of a triangle. The area is given by:
				<h2>Area	=	 √	 p	 (	p	−	a	) 	(	p	−	b	)	 (	p	−	c	) </h2>  
				where p is half the perimeter, or   (a	+	b	+	c )/2</p>
				<img src="images/3side.png">
			</div>
		</div>
		
   
	</section>
</div>


