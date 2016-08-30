<?php
include("dbconfig.php");
include 'functions.php';
if(isset($_POST['sub'])){
	$initial = date("Y-m-d", strtotime($_POST['daterange2']));
	$end = $_POST['daterange3'];
	$amount = $_POST['amount'];
	$earningname = $_POST['earningname'];

	if($end == ""){
		$end = "0000-00-00";
	}else{
		$end = date("Y-m-d", strtotime($_POST['daterange3']));
	}

	$count = count($_POST['id']);

//assign employee ids to array
	$empids = $_POST['id'];

	for ($i=0; $i<$count; $i++) {

		$earningsett = $mysqli->query("SELECT * FROM earnings_setting WHERE earnings_name = '$earningname'");
		if ($earningsett->num_rows > 0) {
			$row = mysqli_fetch_object($earningsett);
			$earnings_id = $row->earnings_id;
			$earnings_type = $row->earnings_type;
			$earnings_max_amount = $row->earnings_max_amount;

			$totalcomp = $mysqli->query("SELECT * FROM total_comp WHERE employee_id = '".$_POST["id"][$i]."'");
			if($totalcomp->num_rows > 0) {
				$row1 = mysqli_fetch_object($totalcomp);
				$comp_id = $row1->comp_id;
				$cutoffdate = $row1->cutoff;
				$cutarray = array();
				$cutarray = split(" - ", $cutoffdate);
				$keydatefrom = $cutarray[0];
				$keydatefrom = date("Y-m-d", strtotime($keydatefrom));
				$keydateto = $cutarray[1];
				$keydateto = date("Y-m-d", strtotime($keydateto));

				/*$empearnings = $mysqli->query("SELECT * FROM emp_earnings WHERE employee_id = '".$_POST["id"][$i]."'");
				if($empearnings->num_rows > 0) {
					while ($row2 = $empearnings->fetch_object()){
						
					}
				}*/

				if(($end != "0000-00-00" && (($initial <= $keydatefrom || ($initial >= $keydatefrom && $initial <= $keydateto)) && ($end >= $keydatefrom || $end <= $keydateto))) || ($end == "0000-00-00" && ($initial <= $keydatefrom || ($initial >= $keydatefrom && $initial <= $keydateto)))){
					if($stmt = $mysqli->prepare("INSERT INTO emp_earnings (earnings_setting_id, employee_id, earn_name, earn_max, earn_type, initial_date, end_date, comp_id) VALUES ('$earnings_id','" . $_POST["id"][$i] . "', '$earningname', '$amount', '$earnings_type', '$initial', '$end', '$comp_id')")){
						$stmt->execute();
					 	$stmt->close();

					 	$emp_id=$_POST["id"][$i];
					 	//put update code here - gerald pasion
					 	//check_update($cutoffdate, $empids);
					 	//compute($cutoffdate, 1, $emp_id);
					 	
					 	$comp_sal = $mysqli->query("SELECT * FROM total_comp_salary WHERE comp_id = '$comp_id'");
						if ($comp_sal->num_rows > 0) {
							header("Location: earnings.php?addEarnings");
						 	compute($cutoffdate, 1, $emp_id, $comp_id);
						 }

					}
				}
				else{
					if($stmt = $mysqli->prepare("INSERT INTO emp_earnings (earnings_setting_id, employee_id, earn_name, earn_max, earn_type, initial_date, end_date) VALUES ('$earnings_id','" . $_POST["id"][$i] . "', '$earningname', '$amount', '$earnings_type', '$initial', '$end')")){
						$stmt->execute();
					 	$stmt->close();
					}
				}
			}//inner if 
			else{
				if($stmt = $mysqli->prepare("INSERT INTO emp_earnings (earnings_setting_id, employee_id, earn_name, earn_max, earn_type, initial_date, end_date) VALUES ('$earnings_id','" . $_POST["id"][$i] . "', '$earningname', '$amount', '$earnings_type', '$initial', '$end')")){
					$stmt->execute();
				 	$stmt->close();
				}
			}//inner else
			header("Location: earnings.php?addEarnings");
		}//outer if
	}



}//end if

//panggawa ng pangalan ng earnings
else{
	$name = $_POST['name1'];
	$earningtype = $_POST['earningtype1'];

	$name = trim($name," ");
	
	if($earningsett = $mysqli->query("SELECT * FROM earnings_setting WHERE earnings_name = '$name'")){
		if ($earningsett->num_rows > 0) {
			echo 'swal({  title: "ERROR",   text: "Earning Already Exists!",   timer: 3000, type: "warning",   showConfirmButton: false});';
			return false;
		}
		else {
			// insert the new record into the database
			if ($stmt = $mysqli->prepare("INSERT INTO earnings_setting (earnings_name, earnings_type) VALUES ('$name', '$earningtype')"))
			{
				$stmt->execute();
				$stmt->close();

				echo 'swal({title: "SUCCESS",text: "Earning Successfully Added",timer: 1000, type: "success",showConfirmButton: false}); window.setTimeout(function(){location.reload();}, 1000);';
				//header("Location: earnings.php?added");
			}
			// show an error if the query has an error
			else
			{
				echo "ERROR: Could not prepare SQL statement.";
			}	
		}
	}
	
}


?>