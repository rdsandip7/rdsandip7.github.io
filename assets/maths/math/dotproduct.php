<div class="wrapper style2">
	<section class="container">
			<h1>Program to calculate dot product of two vectors</h1>
			<div class="col-md-12">
			<form method="post" action="">
				<h2>Coeffiecient of a-vector in terms of i, j, k</h2>
    			<div class="col-md-6">
        			<h3>Vector A</h3>
        			<div class="col-md-12">
		        		<div class="col-md-8">
						    Enter coefficient of i
						</div>
						<div class="col-md-4">
						    <input type="text" name="a-first" value="<?php if(isset($_POST['a-first'])) echo $_POST['a-first']; ?>">
						</div>						
					</div>
					<div class="col-md-12">
						<div class="col-md-8">
						    Enter coefficient of j
						</div>
						<div class="col-md-4">
						    <input type="text" name="a-second" value="<?php if(isset($_POST['a-second'])) echo $_POST['a-second']; ?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-8">
					        Enter coefficient of k
						</div>
						<div class="col-md-4">
					        <input type="text" name="a-third" value="<?php if(isset($_POST['a-third'])) echo $_POST['a-third']; ?>"><br/>
						</div>
					</div>
    			</div>
    			<div class="col-md-6">
			        <h3>Vector B</h3>
			        <div class="col-md-12">
				        <div class="col-md-8">
				        	Enter coefficient of i
				        </div>
				        <div class="col-md-4">
				        	<input type="text" name="b-first" value="<?php if(isset($_POST['b-first'])) echo $_POST['b-first']; ?>">
				        </div>
				    </div>
				    <div class="col-md-12">
				    	<div class="col-md-8">
				        	Enter coefficient of j
				        </div>
				        <div class="col-md-4">
				        	<input type="text" name="b-second" value="<?php if(isset($_POST['b-second'])) echo $_POST['b-second']; ?>">
				        </div>
				    </div>
				    <div class="col-md-12">
				    	<div class="col-md-8">
				        	Enter coefficient of k
				        </div>
				        <div class="col-md-4">
				        	<input type="text" name="b-third" value="<?php if(isset($_POST['b-third'])) echo $_POST['b-third']; ?>">
				        </div>
				    </div>
			    </div>
    			<div class="clearfix"></div>
    			<div class="col-md-12">
					<input type="submit" name="submit" class="">
				</div>
			</form>
			<?php
				if(@$_POST['submit']){
					$ai = $_POST['a-first'];
					$aj = $_POST['a-second'];
					$ak = $_POST['a-third'];
					$bi = $_POST['b-first'];
					$bj = $_POST['b-second'];
					$bk = $_POST['b-third'];
				

					function dot_product($v1, $v2)
					{
						return ($v1*$v2);
						echo "Result:<input type='text' value='$sum'/>";	
					}
					$a=array($ai, $aj, $ak);
					$b=array($bi, $bj, $bk);
					$dot_product=array_sum(array_map("dot_product", $a,$b));

					$maga=sqrt(($ai*$ai)+($aj*$aj)+($ak*$ak));
					$magb=sqrt(($bi*$bi)+($bj*$bj)+($bk*$bk));
					$unit= $dot_product/($maga*$magb);
				}
			?> 
			<div class="col-md-12">
				<div class="col-md-3">	
					<label>Dot Product: </label>
				</div>
				<div class="col-md-3">								
					<input type="text" readonly value="<?php echo @$dot_product;?>"/>
				</div>
				<div class="col-md-3">	
					<label>Unit vector: </label>
				</div>
				<div class="col-md-3">								
					<input type="text" readonly value="<?php echo @$unit;?>"/>
				</div>
			</div>
		</div>
	</section>
</div>
