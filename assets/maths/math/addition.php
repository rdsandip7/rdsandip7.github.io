<div class="wrapper style2">
    <section class="container">
        <div class="col-md-12">
            <form name="form1" action="" method="post" >
                <div class="col-md-6">
                    <label>Enter the number of rows for matrix :</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="row" id="row" value="<?php echo isset($_POST['row']) ? $_POST['row'] : '' ;?>">
                </div>
                <div class="col-md-6">
                    <label>Enter the number of columns for matrix :</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="col" id="col" value="<?php echo isset($_POST['col']) ? $_POST['col'] : '' ;?>">
                </div>
                <div class="col-md-6">
                    <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
                </div>
                <div class="col-md-12">
                    <div id="matrixA">
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="matrixB">
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="matrixC">
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" name="submit" value="submit" class="submit" id="submit" onclick="addMatrix()">
                </div>
                <div class="col-md-12">
                    <div class="create">
                        <script>
                            function createMatrix() {
                                var row = document.getElementById('row').value;
                                var col = document.getElementById('col').value;
                                var i , j , m , n;
                                if (row == '') {
                                    alert('Please Enter Number Of Rows!');
                                    return false;
                                }
                                if (col == '') {
                                    alert('Please Enter Number Of Columns !');
                                    return false;
                                }

                                var amatrix = new Array();

                                var htmlA = 'Enter the A matrix :';
                                htmlA += '<table>';

                                for (i = 0; i < row; i++) {
                                    amatrix[i] = new Array();

                                    htmlA += '<tr>';
                                    for (j = 0; j < col; j++) {
                                        htmlA += '<td>';
                                        htmlA += '<input type="text" name="amatrix[' + i + '][' + j + ']">';
                                        htmlA += '</td>';
                                    }
                                    htmlA += '</tr>';
                                }
                                htmlA += '</table>';
                                document.getElementById('matrixA').innerHTML = htmlA;

                                var bmatrix = new Array();
                                var htmlB = 'Enter the B matrix :';
                                htmlB += '<table>';
                                for (i = 0; i < row; i++) {
                                    bmatrix[i] = new Array();
                                    htmlB += '<tr>';
                                    for (j = 0; j < col; j++) {
                                        htmlB += '<td>';
                                        htmlB += '<input type="text" name="bmatrix[' + i + '][' + j + ']">';
                                        htmlB += '</td>';
                                    }
                                    htmlB += '</tr>';
                                }
                                htmlB += '</table>';
                                document.getElementById('matrixB').innerHTML = htmlB;
                            }

                            function checkMatrix() {
                                var row = document.getElementById('row').value;
                                var col = document.getElementById('col').value;

                                if (row == '' || col == '') {
                                    alert('Please Create Matrix First!');
                                    return false;
                                }
                                else {
                                    return true;
                                }
                            }
                            $("#submit").click(function addMatrix(){
                            $("p").append("<b>Appended text</b>");
                       
                            function addMatrix(){
                                 document.getElementById('matrixC').innerHTML = htmlC;
                                var cmatrix = new Array();
                                
                                    var row = document.getElementById('row').value;
                                    var col = document.getElementById('col').value;
                                    var  m , n;
                                    var htmlC = 'Addition of matrix :';
                               
                                    for (m = 0; m < row; m++) {
                                        cmatrix[i] = new Array();
                                        for (n = 0; n < col; n++) {
                                            cmatrix[m][n] = amatrix[m][n] + bmatrix[m][n];
                                            }
                                            
                                          }  
                            }
                             });
                               
                        </script>
                    </div>
                </div>
            </form>
        </div>
       <!--  <?php
            if (@$_POST['submit'] === 'submit') {
            $amatrix = $_POST['amatrix'];
            $bmatrix = $_POST['bmatrix'];
            $row = $_POST['row'];
            $col=$_POST['col'];
            if (!is_array($amatrix) && !is_array($bmatrix)) {
                echo "Please Create Matrix First by Clicking on Create Matrix!";
                exit;
            }
            echo '<div class="col-md-4">';
            echo '<div class="row">';
            echo '<p>The resultant matrix is :</p>';
            
            for ($m = 0; $m < $row; $m++) {
                echo '<div class="box col-md-6" >';
                for ($n = 0; $n < $col; $n++) {
                    $cmatrix[$m][$n] = $amatrix[$m][$n] + $bmatrix[$m][$n];
                    echo '<h2>';
                    print_r($cmatrix[$m][$n]);
                    echo '</h2>';
                }
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            }
        ?> -->
    </section>
</div>