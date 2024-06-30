<div class="wrapper style2">
    <section class="container">
        <form name="form1" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkMatrix()">
            <table>
                <tr>
                    <td>
                        <label>Enter the number of rows for matrix :</label>
                    </td>
                    <td>
                        <input type="text" name="row" id="row">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter the number of columns for matrix :</label>
                    </td>
                    <td>
                        <input type="text" name="col" id="col">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
                    </td>
                </tr>
            </table>
            <div id="matrixA">
            </div>
            <div id="matrixB">
            </div>
            <input type="submit" name="submit" value="submit">
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
            </script>
        </form>
        <?php
            if (@$_POST['submit'] === 'submit') {
            $amatrix = $_POST['amatrix'];
            $bmatrix = $_POST['bmatrix'];
            $row = $_POST['row'];
            $col=$_POST['col'];
            if (!is_array($amatrix) && !is_array($bmatrix)) {
                echo "Please Create Matrix First by Clicking on Create Matrix!";
                exit;
            }
           
            
            for ($m = 0; $m < $row; $m++) {
                echo '<div class="box col-md-6" >';
                for ($n = 0; $n < $col; $n++) {
                    if( $amatrix[$m][$n] === $bmatrix[$m][$n])
                    {
                        echo "the matrix are identical";
                    }
                    else{
                        echo "matrix is not identical";
                    }
                    // echo '<h2>';
                    // print_r($cmatrix[$m][$n]);
                    // echo '</h2>';
                }
                echo '</div>';  
                }                
            
            }
        ?>
    </section>
</div>
