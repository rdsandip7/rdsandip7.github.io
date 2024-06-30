<div class="wrapper style2">
    <section class="container">
        <h2>Program to calculate multiplication of scalar vectors</h2>
        <div class="col-md-12">
            <form method="post" action="">
                <h2>Enter the values</h2>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h3>Scalar value</h3>
                            <div class="col-md-6">
                                s = 
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="s" value="<?php if(isset($_POST['s'])) echo $_POST['s']; ?>" placeholder="scalar value">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Vector value in term of x, y, z</h3>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <input type="text" placeholder="value of x" name="x" value="<?php if(isset($_POST['x'])) echo $_POST['x']; ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="y" placeholder="value of y" value="<?php if(isset($_POST['y'])) echo $_POST['y']; ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="z" placeholder="value of z" value="<?php if(isset($_POST['z'])) echo $_POST['z']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" name="submit" class="">
            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $s=($_POST['s']);

                    $x = (int)$_POST['x'];
                    $y = (int)$_POST['y'];
                    $z = (int)$_POST['z'];
                    
                    $scalar_multiplication =  '('.($s*$x).','.($s*$y).','.($s*$z).')';
                    
                    
                }
            ?>
            <div class="col-md-8">
                <div class="col-md-4">  
                    <label>Result: </label>
                </div>
                <div class="col-md-4">                              
                    <input type="text" readonly value="<?php echo @$scalar_multiplication;?>"/>
                </div>
            </div> 
        </div>
    </section>
</div>