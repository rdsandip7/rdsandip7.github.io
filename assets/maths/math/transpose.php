<div class="wrapper style2">
    <section class="container">
        <form name="form1" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkMatrix()">
            Enter the number of rows for matrix :
            <input type="text" name="row" id="row">
            Enter the number of columns for matrix :
            <input type="text" name="col" id="col">
            <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
            <div id="matrixA">
            </div>
            <input type="submit" name="submit" value="submit" >
            <script>
                function createMatrix() {
                    var row = document.getElementById('row').value;
                    var col = document.getElementById('col').value;
                    var i , j;
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
                    var transpose= new Array();
 
                 
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
            $row = $_POST['row'];
            $col=$_POST['col'];
            if (!is_array($amatrix) && !is_array($bmatrix)) {
                echo "Please Create Matrix First by Clicking on Create Matrix!";
                exit;
            }
           echo '<div class="col-md-4">';
            echo '<div class="row">';
            echo '<p>The resultant matrix is :</p>';
            for ( $c = 0 ; $c < $row ; $c++ )
                  {
                     for ( $d = 0 ; $d < $col ; $d++ )               
                        $transpose[$d][$c] = $amatrix[$c][$d];
                  }
            for ( $c = 0 ; $c < $col; $c++ ) {
                echo '<div class="box col-md-12" >';
                for ( $d = 0 ; $d < $row ; $d++ ) {
                    echo '<h2>';
                    print_r($transpose[$c][$d]);
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
