<?php 
include_once 'dbconfig.php';

$empid = isset($_GET['empid']) ? $_GET['empid'] : false;

/*if($empid) {
	echo "<table id='leave_type' class='footable table table-stripped' data-page-size='20' data-filter=#filter>						
	<thead>
		<tr>
			<th>Leave Type</th>
			<th>From</th>
			<th>Status</th>
			<!--th>To</th-->
			<!--th>Days</th-->
			<th>Approved By</th>
			<th>Approve Date</th>
		</tr>
	</thead>
	<tbody>";



	$leavedetails = $mysqli->query("SELECT * FROM tbl_leave WHERE employee_id=$empid");
		if($leavedetails->num_rows > 0){
			while($leave = $leavedetails->fetch_object()){
				echo '<tr>';
				echo '<td>'.$leave->leave_type.'</td>';
				echo '<td>'.$leave->leave_start.'</td>';
				echo '<td>'.$leave->leave_status.'</td>';
				//echo '<td>'.$leave->.'</td>';
				echo '<td>'.$leave->leave_approvedby.'</td>';
				echo '<td>'.$leave->leave_approvaldate.'</td>';
				echo '</tr>';
			}
		}
			

	echo "</tbody>
	</table>";
}*/

if ($emp_shiftlog = $mysqli->query("SELECT * FROM shift_logs WHERE employee_id = $empid ORDER BY shiftlog_date DESC"){
								if($emp_shiftlog->num_rows > 0){
								echo '<table class="footable table table-stripped" data-page-size="10" data-limit-navigation="5" data-filter=#filter>';	
								echo '<thead>';
								echo '<tr>';
								echo '<th>Date</th>';
								echo '<th>Start Date</th>';
								echo '<th>End Date</th>';
								echo '<th>Schedule</th>';
								echo '<th>Rest Day</th>';
								echo '<th>Status</th>';
								echo '</tr>';
								echo '</thead>';
								echo "<tfoot>";                    
								echo "<tr>";
								echo "<td colspan='7'>";
								echo "<ul class='pagination pull-right'></ul>";
								echo "</td>";
								echo "</tr>";
								echo "</tfoot>";
								while($shiftlog = mysqli_fetch_object($emp_shiftlog)){
									//$shiftlogid = $shiftlog->shiftlog_id;
									echo '<tr>';
									echo '<td>'.$shiftlog->shiftlog_date.'</td>';
									echo '<td>'.$shiftlog->shiftlog_startdate.'</td>';
									echo '<td>'.$shiftlog->shiftlog_enddate.'</td>';
									echo '<td>'.$shiftlog->shiftlog_schedule.'</td>';
									echo '<td>'.$shiftlog->shiftlog_restday.'</td>';
									echo '<td>'.$shiftlog->shiftlog_status.'</td>';
									echo '</tr>';
									}
								}
								echo "</table>";
							}

?>