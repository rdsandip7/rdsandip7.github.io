<div class="wrapper style2">
    <section class="container">
        <form name="form1" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkMatrix()">
            <div class="matrixa">
                <table>
                    <tr>
                        <td>         
                            <label>Enter the number of rows for first matrix :</label>
                        </td>
                        <td> 
                            <input type="text" name="row" id="row">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Enter the number of columns for first matrix : </label>
                        </td>
                        <td>
                            <input type="text" name="col" id="col"><br>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="matrixb">
                <table>
                    <tr>
                        <td>
                            <label>Enter the number of rows for second matrix :</label>
                        </td>
                        <td>
                            <input type="text" name="row2" id="row2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Enter the number of columns for second matrix :</label>
                        </td>
                        <td>
                            <input type="text" name="col2" id="col2"><br>
                        </td>
                    </tr>
                </table>
            </div>
            <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
            <div id="matrixA">
            </div>
            <div id="matrixB">
            </div>
            <input type="submit" name="submit" value="submit">
        </form>
            <script>
                function createMatrix() {
                    var row = document.getElementById('row').value;
                    var col = document.getElementById('col').value;
                    var row2 = document.getElementById('row2').value;
                    var col2 = document.getElementById('col2').value;
                    var i, j, c, d, k, m, n, sum = 0;;
                    if (row == '') {
                        alert('Please Enter Number Of Rows!');
                        return false;
                    }
                    if (col == '') {
                        alert('Please Enter Number Of Columns !');
                        return false;
                    }
                    if (col != row2) {
                        alert("Entered matrices cannot be multiplied")
                    }
                    else{
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
                        for (m = 0; m < row2; m++) {
                            bmatrix[m] = new Array();
                            htmlB += '<tr>';
                            for (n = 0; n < col2; n++) {
                                htmlB += '<td>';
                                htmlB += '<input type="text" name="bmatrix[' + m + '][' + n + ']">';
                                htmlB += '</td>';
                            }
                            htmlB += '</tr>';
                        }
                        htmlB += '</table>';
                        document.getElementById('matrixB').innerHTML = htmlB;
                    }
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
            </script>
 
    
        <?php
            if (@$_POST['submit'] === 'submit') {
            $amatrix = $_POST['amatrix'];
            $bmatrix = $_POST['bmatrix'];
            $row = $_POST['row'];
            $col=$_POST['col'];
            $row2 = $_POST['row2'];
            $col2 =$_POST['col2'];
            $sum = 0;
            if (!is_array($amatrix) && !is_array($bmatrix)) {
                echo "Please Create Matrix First by Clicking on Create Matrix!";
                exit;
            }
            for ($c = 0;$c < $row;$c++) {
                for($d = 0; $d < $col2;$d++){
                    for($k = 0;$k < $row2;$k++){    
                        $sum = $sum + $amatrix[$c][$k] * $bmatrix[$k][$d];
                    }
                    $multiply[$c][$d] = $sum;                  
                }
            }
           echo '<div class="col-md-4">';
            echo '<div class="row">';
            echo '<p>The resultant matrix is :</p>';
                for ($c = 0;$c < $row;$c++) {
                     echo '<div class="box col-md-6" >';
                    for($d = 0;$d < $col2;$d++){
                       echo '<h2>';
                        print_r($multiply[$c][$d]);
                        echo '</h2>';
                    }
                    echo '</div>';  
                }                
            echo '</div>';
            echo '</div>';
            }
        ?>
    </section>
</div>