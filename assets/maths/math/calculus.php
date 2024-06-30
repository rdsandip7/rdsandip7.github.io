<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h2>Program to Choose conjuction, Disjunction and negation</h2>
				<h3>Statements in term of True and False</h3>
				<div class="col-md-12">
					<form action="" method="post">
					<h2>For negation selsect only one statement</h2>
					<h3>For other select both statement</h3>
						<div class="col-md-12">							
							<label for="side-a">Enter Statement for negation</label>
						
							<div class="btn-group">
								<!--selection for first statement start here  -->
							  <select name="taskOption" id="sel1">
							    <option>Statement</option>
							    <option value=true <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >true</option>
							    <option value=false <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >false</option>
							  </select><!--selection for first statement end here  -->
							</div>			
						</div>
						<div class="col-md-12">					
							<input type="submit" name="negation" value="Negation ">
						</div>
						<h3>Enter the statement for conjunction and disjunction</h3>
						<div class="col-md-4">							
							<label for="side-a">Enter first Statement</label>
						
							<div class="btn-group">
								<!--selection for first statement start here  -->
							  <select name="taskOption" id="sel1">
							    <option>Statement</option>
							    <option value=true <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >true</option>
							    <option value=false <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >false</option>
							  </select><!--selection for first statement end here  -->
							</div>			
						</div>
						<div class="col-md-4">

							<label for="side-b">Enter second Statement</label>
							<div class="btn-group">
								<!--selection for second statement start here  -->
							  <select name="taskOption1" class="dropdown" id="sel1">
							    <option>Statement</option>
							    <option value=true <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >true</option>
							    <option value=false <?php echo isset($_POST['taskOption']) ? 'selected="selected" ' : ''; ?> >false</option>
							  </select><!--selection for second statement end here  -->
							</div>	
						</div>
						<div class="col-md-8">					
							<input type="submit" name="conjunction" value="Conjunction ">
							<input type="submit" name="disjunction" value="Disjunction ">
						</div>						
					</form>
				</div>
				<!--php code start here  -->
				<?php
					if(isset($_POST['negation'])){
						$selectOption1 = $_POST['taskOption'];
						$selectOption2 = $_POST['taskOption1'];
						
						if ($selectOption1==='true' || $selectOption2==='true') {
							echo "<textarea> Negation of this Statement is FALSE</textarea>";
						}
						else{
							echo "<textarea> Negation of this Statement is TRUE</textarea>";
						}
					}					
					
					
					if(isset($_POST['conjunction'])){
						$selectOption1 = $_POST['taskOption'];
						$selectOption2 = $_POST['taskOption1'];
						
						if ($selectOption1==='true' && $selectOption2==='true') {

        					echo "<textarea> Conjunction of this two Statement is TRUE</textarea>";	
        				# code...
        				}
        				else if($selectOption1==='true' && $selectOption2==='false')
        				{
							echo "<textarea> Conjunction of this two Statement is FALSE</textarea>";
						}
						else if($selectOption1==='false' && $selectOption2==='true')
						{
							echo "<textarea> Conjunction of this two Statement is FALSE</textarea>";
						}
						else if($selectOption1 === 'false' && $selectOption2 === 'false'){
							echo "<textarea> Conjunction of this two Statement is False</textarea>";
						}
						else{
							echo "<textarea> STATEMENT IS INCOMPLETE</textarea>";
						}
					}
						
            		if(@$_POST['disjunction']){
						$selectOption1 = $_POST['taskOption'];
						$selectOption2 = $_POST['taskOption1'];
						if ($selectOption1==='true' && $selectOption2==='true') {
        					echo "<textarea> Disjunction of this two Statement is TRUE</textarea>";        				
        				}
        				else if($selectOption1==='true' && $selectOption2==='false')
        				{
							echo "<textarea> Disjunction of this two Statement is TRUE</textarea>";
						}
						else if($selectOption1==='false' && $selectOption2==='true')
						{
							echo "<textarea> Disjunction of this two Statement is TRUE</textarea>";
						}
						else if($selectOption1 === 'false' && $selectOption2 === 'false'){
							echo "<textarea> Disjunction of this two Statement is FALSE</textarea>";
						}
						else{
							echo "<textarea> STATEMENT IS INCOMPLETE</textarea>";
						}
            		}
					
				?>
				<!-- <div class="col-md-12">
					<label>Result</label>
					<input type="text" readonly value="">
				</div> -->
				
			</div>
			<div id="sidebar" class="4u sidebar">
				<h2>Negation – “NOT”</h2>
				<img src="images/negation.png" width="350px;">
				<p>
					Negation is the statement “not p”, denoted &not;p, and so it would have the opposite truth value of p. If p is true, then &not;p if false. If p is false, then &not;p is true. Notice that the truth table shows all of these possibilities.
				</p>
				<h2>Conjunction – “AND”</h2>
				<img src="images/conjunction.png" width="350px;">
				<p>
					It is denoted by p&and;q. If only if both satatements are true then the p&and;q is true, otherwise statement is false. 
				</p>
				<h2>Disjunction – “OR”</h2>
				<img src="images/disjunction.png" width="350px;">
				<p>
					You may not realize it, but there are two types of “or”s. There is the inclusive or where we allow for the fact that both statements might be true, and there is the exclusive or, where we are strict that only one statement or the other is true. In math, the “or” that we work with is the inclusive or, denoted p &or; q
				</p>
			</div>
		</div>
	</section>
</div>