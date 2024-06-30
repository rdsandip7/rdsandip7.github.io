<div class="wrapper style2">
	<section class="container">
        <div class="row">
            <div id="content" class="8u skel-cell-important">
            	<h2>Program to calculate Area of Triangle When Height and Base Are Given</h2>
                <h3>Side Of Triangle in Term of base b and height h</h3>
                <div class="col-md-12">
            		<form action="" method="post" class="height-and-base-form">
                        <div class="col-md-12">
                            <div class="col-md-8">            			
                                <label for="base-b">Enter Base of Triangle</label>  
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="base-b" id="base-b"value="<?php echo isset($_POST['base-b']) ? $_POST['base-b'] : '' ;?>">
                            </div>
                            <div class="col-md-8">                                   
                                <label for="height-h">Enter Height Of Triangle</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="height-h" id="height-h"value="<?php echo isset($_POST['height-h']) ? $_POST['height-h'] : '' ;?>">
                            </div>
                            <div class="col-md-8">                               
                                <input type="submit" name="submit" value="Calculate">
                            </div>
                        </div>                    		
            		</form>
            		<?php
            			if(@$_POST['submit']){
            				$b = $_POST['base-b'];
            				$h = $_POST['height-h'];
            				
            				
            				$area = ($b*$h)/2;
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
                    <h1>Usually called "half of base times height", the area of a triangle is given by the formula below.</h1>
                    <h2>Area    = ba /2 </h2>
                    where
                    b  is the length of the base
                    a  is the length of the corresponding altitude
                </p>
                <img src="images/heightbase.gif">
            </div>
	</section>
</div>