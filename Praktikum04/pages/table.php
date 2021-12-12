<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum4</title>

        <link rel="stylesheet" href="../bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
    <body>
        <div id="wrap" class="card-wrapper">

			<?php
            	$row = 1;
            	//open csv
            	if (($handle = fopen("csv/username.csv", "r")) !== FALSE) {
            		//table start
            		echo '<table id ="csvTable" class="table table-striped">';
            		//get lines
            		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            			//get amount of values per line
            			$num = count($data);
            			//first row is thead other rows are tablerows
            			if ($row == 1) {
            				echo '<thead><tr>';
            			}else{
            				echo '<tr>';
            			}

            			//for every value
            			for ($c=0; $c < $num; $c++) {
            				//if no value, put non breaking space, otherwise put the value
            				if(empty($data[$c])) {
            				   $value = "&nbsp;";
            				}else{
            				   $value = $data[$c];
            				}

            				//if single row than tableheader, otherwise td
            				if ($row == 1) {
            					echo '<th scope="col">'.$value.'</th>';
            				}else{
            					echo '<td>'.$value.'</td>';
            				}
            			}

            			//add actions to the table after the first row which is the header
            			if ($row != 1) {
            				$actual_row = $row - 1;
            				echo '<td><a href="form.php?row='.$actual_row.'">Edit</a></td>';
            				echo '<td><a href="deleteRow.php?row='.$actual_row.'">Delete</a></td>';
            			}

            			//add actions header
            			if ($row == 1) {
            				echo '<th scope="col">Actions</th></tr></thead><tbody>';
            			}else{
            				echo '</tr>';
            			}

            			//increment
            			$row++;
            		}
            	   	//table end
            		echo '</tbody></table>';
            		fclose($handle);
            	}
            ?>

            <div>
                <button id="btnNewEntry" type="button" class="btn btn-secondary" onclick="insertForm()">New Value</button>
            </div>

            <script>
                function insertForm() {
                    window.open("form.php","_self")
				}
            </script>
        </div>
    </body>
</html>