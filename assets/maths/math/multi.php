<div class="wrapper style2">
	<section class="container">
		<h2>Program to calculate multiplication of two vectors</h2>
		<div class="col-md-12">
			<form method="post" action="">
				<h2>Enter the values</h2>
    			<div class="col-md-6">
        			<h3>Vector A</h3>
        			<div class="col-md-12">
		        		<div class="col-md-4">
						    x = 
						</div>
						<div class="col-md-8">
						    <input type="text" name="x1" value="<?php if(isset($_POST['x1'])) echo $_POST['x1']; ?>">
						</div>						
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
						    y = 
						</div>
						<div class="col-md-8">
						    <input type="text" name="y1" value="<?php if(isset($_POST['y1'])) echo $_POST['y1']; ?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
					        z = 
						</div>
						<div class="col-md-8">
					        <input type="text" name="z1" value="<?php if(isset($_POST['z1'])) echo $_POST['z1']; ?>"><br/>
						</div>
					</div>
    			</div>
    			<div class="col-md-6">
			        <h3>Vector B</h3>
			        <div class="col-md-12">
				        <div class="col-md-4">
				        	x = 
				        </div>
				        <div class="col-md-8">
				        	<input type="text" name="x2" value="<?php if(isset($_POST['x2'])) echo $_POST['x2']; ?>">
				        </div>
				    </div>
				    <div class="col-md-12">
				    	<div class="col-md-4">
				        	y = 
				        </div>
				        <div class="col-md-8">
				        	<input type="text" name="y2" value="<?php if(isset($_POST['y2'])) echo $_POST['y2']; ?>">
				        </div>
				    </div>
				    <div class="col-md-12">
				    	<div class="col-md-4">
				        	z = 
				        </div>
				        <div class="col-md-8">
				        	<input type="text" name="z2" value="<?php if(isset($_POST['z2'])) echo $_POST['z2']; ?>">
				        </div>
				    </div>
			    </div>
    			<div class="clearfix"></div>
    			<div class="col-md-12">
					<input type="submit" name="submit" class="">
				</div>
			</form>
			<?php
				if(isset($_POST['submit']))
				{
					$x1 = (int)$_POST['x1'];
					$y1 = (int)$_POST['y1'];
					$z1 = (int)$_POST['z1'];
					
					$x2 = (int)$_POST['x2'];
					$y2 = (int)$_POST['y2'];
					$z2 = (int)$_POST['z2'];
					$vector_multiplication = ($x1*$x2) + ($y1*$y2) + ($z1*$z2);
					
					
				}
			?> 
			<div class="col-md-8">
				<div class="col-md-4">	
					<label>Result: </label>
				</div>
				<div class="col-md-4">								
					<input type="text" readonly value="<?php echo @$vector_multiplication;?>"/>
				</div>
			</div>
		</div>
	</section>
</div>