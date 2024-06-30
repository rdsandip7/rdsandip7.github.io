<div class="wrapper style2">
    <section class="container">
        <form name="form1" action="" method="post" onsubmit="return checkMatrix()">
            Enter the number of rows for matrix :
            <input type="text" name="row" id="row" value="<?php echo isset($_POST['row']) ? $_POST['row'] : '' ;?>">
            Enter the number of columns for matrix :
            <input type="text" name="col" id="col" value="<?php echo isset($_POST['col']) ? $_POST['col'] : '' ;?>" >
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
                
            </script>
        </form>
        <?php
            if (@$_POST['submit'] === 'submit') {
                $amatrix = $_POST['amatrix'];
                $row = $_POST['row'];
                $col=$_POST['col'];

                if (!is_array($amatrix)) {
                    echo "Please Create Matrix First by Clicking on Create Matrix!";
                    exit;
                }

                    if($row==1){
                        return $amatrix[0][0];
                    }
                    else if($row==2){
                        $determinant= $amatrix[0][0]*$amatrix[1][1]-$amatrix[0][1]*$amatrix[1][0];
                    }
                    echo "$determinant";
                 //   for ( $c = 0 ; $c < $row ; $c++ ){
                 // for ( $d = 0 ; $d < $col ; $d++ ) {              
                 //        $transpose[$d][$c] = $amatrix[$c][$d];
                 //  }













               
            }
        ?>
    </section>
</div>