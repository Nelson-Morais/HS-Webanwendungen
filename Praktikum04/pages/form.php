
<?php

	//Variables
	$error = '';
	$username = '';
	$identifier = '';
	$firstName = '';
	$lastName = '';


	//if row set get row
	$row = '';
	if (isset($_GET['row'])) {
		$row = $_GET['row'];
	}

	//if submit value is set
	if(isset($_POST["submit"])) {
		if (empty($_POST["inputUsername"])) {
			$error .= '<p><label class="text-danger">Bitte Username eingeben</label></p>';
		}
		else {
			$username = $_POST["inputUsername"];
		}

		if (empty($_POST["inputIdentifier"])) {
			$error .= '<p><label class="text-danger">Bitte Identifier eingeben</label></p>';
		}
		else {
			$identifier = $_POST["inputIdentifier"];
		}

		if (empty($_POST["inputFirstName"])) {
			$error .= '<p><label class="text-danger">Bitte Vornamen eingeben</label></p>';
		}
		else {
			$firstName = $_POST["inputFirstName"];
		}

		if (empty($_POST["inputLastName"])) {
			$error .= '<p><label class="text-danger">Bitte Nachnamen eingeben</label></p>';
		}
		else {
			$lastName = $_POST["inputLastName"];
		}

		//if no errors were catched
		if ($error == '') {
			//open csv
			if (($handle = fopen("csv/username.csv", "a")) !== FALSE) {
				//check if row was set
				if ($row != '') {
					//create a new csv with the old values and add the new edited values to it
					$handle = fopen("csv/username.csv", "r");
					$temp_handle = fopen("csv/temp_handle.csv","w");
					for ($i = 0; ($data = fgetcsv($handle, 1000)) !== FALSE; $i++) {
						if ($i != $row) {
							fputcsv($temp_handle,$data);
						}
						else {
							$data = array(
								'Username'		=>	$username,
								'Identifier'	=>	$identifier,
								'First Name'	=>	$firstName,
								'Last Name'		=>	$lastName
							);
							fputcsv($temp_handle, $data);
						}
					}
					fclose($handle);
					fclose($temp_handle);
					rename('csv/temp_handle.csv','csv/username.csv');
				}
				else {
					//create new value
					$data = array(
						'Username'		=>	$username,
						'Identifier'	=>	$identifier,
						'First Name'	=>	$firstName,
						'Last Name'		=>	$lastName
					);
					fputcsv($handle, $data);
				}
				//redirect to table
				$table = '<script type="text/javascript">window.open("table.php","_self")</script>';
				echo $table;

			}
		}
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum4</title>
        <link rel="stylesheet" href="../bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

    <body>
		<div id="wrap" class="card-wrapper">
			<form method="post">
			<?php echo $error; ?>
			  <div class="form-group">
				<label for="inputUsername">Username</label>
				<input value="<?php echo $username; ?>" type="text" name="inputUsername" class="form-control" id="inputUsername" aria-describedby="emailHelp" placeholder="Username">
			  </div>
			  <div class="form-group">
				<label for="inputIdentifier">ID Number</label>
				<input value="<?php echo $identifier; ?>" type="text" name="inputIdentifier" class="form-control" id="inputIdentifier" placeholder="ID Number">
			  </div>
			  <div class="form-group">
				<label for="inputFirstName">First Name</label>
				<input value="<?php echo $firstName; ?>" type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="First Name">
			  </div>
			  <div class="form-group">
				<label for="inputLastName">Last Name</label>
				<input value="<?php echo $lastName; ?>" type="text" name="inputLastName" class="form-control" id="inputLastName" placeholder="Last Name">
			  </div>
			  <button type="submit" name="submit" class="btn btn-secondary" value="Submit">Submit</button>
			</form>
		</div>
    </body>
    <style type="text/css">
    	form-group{
        margin-left: auto;
        margin-right: auto;
        width: 8em
        padding: 100px;
        }
    	</style>
</html>

