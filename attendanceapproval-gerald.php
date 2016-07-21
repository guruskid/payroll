<?php
if(isset($_POST['test'])){
	$selection = $_POST['selection'];

	$cutarray = array();
	$cutarray = split(" - ", $selection);
	$initialcut = $cutarray[0];
	$endcut = $cutarray[1];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			 include('menuheader.php');
		?>

		<title>Payroll</title>
		<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
		<script src="js/plugins/toastr/toastr.min.js"></script>
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style>
			.form-horizontal .control-label{
			/* text-align:right; */
			text-align:left;
			}
			input{
			border: none;
			border-color: transparent;
				
			}
			
			.zx{
			border: none;
			border-color: transparent;
			margin-top:2.4%;
			font-size:1em;
			cursor:default;
			}
						.zxc{
			border: none;
			border-color: transparent;
			margin-top:1%;
			font-size:1em;
			cursor:default;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" >//ajax
			// $(function() {
			// //   $(this).parents(".josh").animate({ backgroundColor: "white" }, "slow")
			// //   .animate({ opacity: "hide" }, "slow");
			// //  $('#approvedstatus').fadeIn(300).delay(3200).fadeOut(300);
			// //  $(window).scrollTop(0);
			// // return false;
			// });
			// $.ajax({
			//    type: "POST",
			//    url: "attendancedetailsapproval.php?empid="+$(this).data('employee-id'),
			//    data: info,
			//    success: function(){
			//  }
			// $.ajax({
			//    type: "POST",
			//    url: "attendancedetailsapproval.php?empid="+$(this).data('employee-id'),
			//    data: info,
			//    success: function(){
			//  }
		</script>

		<script type="text/javascript">
			$(function() {
				$('input[name="daterange"]').daterangepicker({
					singleDatePicker: true,
					showDropdowns: true
				});
			});
		</script>
		<script type="text/javascript">
			$(function() {
				$('input[name="daterange2"]').daterangepicker({
					singleDatePicker: true,
					showDropdowns: true
				});
			});
		</script>
		<script type="text/javascript">
		$(function() {
				$('input[name="daterange3"]').daterangepicker({
					singleDatePicker: true,
					showDropdowns: true
				});
			});
		</script>             
		<script type="text/javascript">
			$(document).ready(function() {
				$('#tab-2').click(function() {
					$(this).removeClass('tab-pane active');
					$('#tab-1').removeClass('tab-pane active');
				});
				$('#tab-1').click(function() {
					$(this).removeClass('tab-pane active');
				});
			});
		</script>
		

		<script type="text/javascript">
		//modal to
			$(document).on("click", ".viewempdialog", function () {
			 var employeeid = $(this).data('employee-id');
			 var lastname = $(this).data('lastname');
			 var firstname = $(this).data('firstname');
			 var middlename = $(this).data('middlename');
			 var gender = $(this).data('gender');
			 var birthday = $(this).data('birthday');
			 var marital = $(this).data('marital');
			 var shifttype = $(this).data('shifttype');
			 var schedule = $(this).data('schedule');
			 var address = $(this).data('address');
			 var city = $(this).data('city');
			 var zip = $(this).data('zip');
			 var email = $(this).data('email');
			 var cellnum = $(this).data('cellnum');
			 var employeetype = $(this).data('employeetype');
			 var jobtitle = $(this).data('jobtitle');
			 var department = $(this).data('department');
			 

			 var sssded = $(this).data('ssstax')/2;
			 var phheed = $(this).data('phhe')/2;
			

			 var rate = $(this).data('rate');
			 var srate = Math.round((rate / 2) * 100) / 100;

			 
			 var pgibed = Math.round((srate*(($(this).data('pgib') / 2 ) / 100 )) * 100) / 100;
			 
			 var tddd = +sssded + +phheed + +pgibed;

			 var factor = $(this).data('factor');
			 var rate2 = rate * 12 / factor;
			 var dr = Math.round(rate2 * 100) / 100;
			 var hrr2 =  dr / 8;
			 var hrr = Math.round(hrr2 * 100) / 100;
			 var tota2 = $(this).data('tota');
			 var tota = (Math.round((tota2*hrr) * 100) / 100);

 			 var finaltota = (Math.round((((tota-sssded)-phheed)-pgibed) * 100) / 100);

			 var wew = tota2;

			 var taxcode = $(this).data('taxcode');

			 var sss = $(this).data('sss');
			 var philhealth = $(this).data('philhealth');
			 var pagibig = $(this).data('pagibig');
			 var tin = $(this).data('tin');
			 var shift = $(this).data('shift');
			 var datehired = $(this).data('datehired');
			 var restday = $(this).data('restday');
			 var password = $(this).data('password');
			 var sickleave = $(this).data('sickleave');
			 var vacationleave = $(this).data('vacationleave');
			 var status = $(this).data('status');
			 var jobtitle = $(this).data('jobtitle');



$(".modal-body #wew").val( wew );
			 $(".modal-body #pgibed").val( pgibed );
			 $(".modal-body #tddd").val( tddd );
			 $(".modal-body #phheed").val( phheed );
 			 $(".modal-body #finaltota").val( finaltota ); 			
			 $(".modal-body #sssded").val( sssded ); 
			 $(".modal-body #tota").val( tota );
			 $(".modal-body #empid").val( employeeid );
			 $(".modal-body #lastname").val( lastname );
			 $(".modal-body #firstname").val( firstname );
			 $(".modal-body #middlename").val( middlename );
			 $(".modal-body #gender").val( gender );	
			 $(".modal-body #birthday").val( birthday );	
			 $(".modal-body #marital").val( marital );	
			 $(".modal-body #shifttype").val( shifttype );
			 $(".modal-body #schedule").val( schedule );
			 $(".modal-body #address").val( address );	
			 $(".modal-body #city").val( city );	
			 $(".modal-body #zip").val( zip );	
			 $(".modal-body #email").val( email );	
			 $(".modal-body #cellnum").val( cellnum );	
			 $(".modal-body #employeetype").val( employeetype );	
			 $(".modal-body #jobtitle").val( jobtitle );	
			 $(".modal-body #department").val( department );	
			 $(".modal-body #rate").val( rate );
			 $(".modal-body #srate").val( srate );
			 $(".modal-body #dr").val( dr );
			 $(".modal-body #hrr").val( hrr );
			 $(".modal-body #taxcode").val( taxcode );	
			 $(".modal-body #sss").val( sss );	
			 $(".modal-body #philhealth").val( philhealth );	
			 $(".modal-body #pagibig").val( pagibig );	
			 $(".modal-body #tin").val( tin );	
			 $(".modal-body #shift").val( shift );	
			 $(".modal-body #datehired").val( datehired );	
			 $(".modal-body #restday").val( restday );	
			 $(".modal-body #password").val( password );	
			 $(".modal-body #sickleave").val( sickleave );	
			 $(".modal-body #vacationleave").val( vacationleave );	
			 $(".modal-body #status").val( status );	
			 $(".modal-body #jobtitle").val( jobtitle );
			  
			   // As pointed out in comments, 
			 // it is superfluous to have to manually call the modal.
			 // $('#addBookDialog').modal('show');   
			
			});
		// </script>
		 <script type="text/javascript" >//ajax	
			$(document).ready(function(){
			$(document).on('submit','#uploadForm', function() {
				$(this).find('td[name=attendance_status]').each(function(){
					if($(this).html() == 'Pending'){
						swal({  title: "Cannot Submit",   text: "There are pending attendance status",   timer: 3000, type: "warning",   showConfirmButton: false});
							return false;
					}else{
						
						// AJAX Code To Submit Form.
						$.ajax({
							type: "POST",
							url: "attendanceapprovalexe.php",
							success: function(result){
							// toastr.options = { 
							// "closeButton": true,
						 //  "debug": false,
						 //  "progressBar": true,
						 //  "preventDuplicates": true,
						 //  "positionClass": "toast-top-right",
						 //  "onclick": null,
						 //  "showDuration": "400",
						 //  "hideDuration": "1000",
						 //  "timeOut": "7000",
						 //  "extendedTimeOut": "1000",
						 //  "showEasing": "swing",
						 //  "hideEasing": "linear",
						 //  "showMethod": "fadeIn",
						 //  "hideMethod": "fadeOut" // 1.5s
							// }
							// toastr.success('Successfully Submitted!');
								}
							});
					}
				});
		// 	var empid = $("#empid").val();
		// 	var lastname = $("#lastname").val();
		// 	var firstname = $("#firstname").val();
		// 	var middlename = $("#middlename").val();
		// 	var gender = $("#gender").val();
		// 	var birthday = $("#birthday").val();
		// 	var marital = $("#marital").val();
		// 	var shifttype = $("#shifttype").val();
		// 	var schedule = $("#schedule").val();
		// 	var restday = $("#restday").val();
		// 	var address = $("#address").val();
		// 	var email = $("#email").val();
		// 	var mobile = $("#mobile").val();
		// 	var employeetype = $("#employeetype").val();
		// 	var department = $("#department").val();
		// 	var jobtitle = $("#jobtitle").val();
		// 	var rate = $("#rate").val();
		// 	var taxcode = $("#taxcode").val();
		// 	var dependency = $("#dependency").val();
		// 	var sss = $("#sss").val();
		// 	var philhealth = $("#philhealth").val();
		// 	var pagibig = $("#pagibig").val();
		// 	var tin = $("#tin").val();
		// 	var shift = $("#shift").val();
		// 	var datehired = $("#datehired").val();
		// 	var city = $("#city").val();
		// 	var zip = $("#zip").val();
		// 	var restday = $("#restday").val();
		// 	var password = $("#password").val();
		// 	// Returns successful data submission message when the entered information is stored in database.
		// 	var dataString = 'employeeid='+ empid + '&lastname='+ lastname + '&firstname='+ firstname + '&middlename='+ middlename + '&gender='+ gender + '&birthday='+ birthday + '&marital='+ marital + '&address='+ address +'&shifttype=' shifttype + '&schedule='+ schedule + '&email='+ email + '&mobile='+ mobile + '&emptype='+ emptype + '&department='+ department + '&jobtitle='+ jobtitle + '&rate='+ rate + '&taxcode='+ taxcode + '&sss='+ sss + '&philhealth='+ philhealth + '&pagibig='+ pagibig + '&tin='+ tin + '&shift='+ shift + '&datehired='+ datehired + '&city='+ city + '&zip='+ zip + '&restday='+ restday + '&password='+ password;
			
		// 	history.replaceState({}, "Title", "attendanceapproval.php");
			// });
			return false;
			});
			});
		</script>
	
	</head>
	<body>
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Attendance Approval</h5>
						<div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="fa fa-wrench"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li><a href="#">Config option 1</a>
								</li>
								<li><a href="#">Config option 2</a>
								</li>
							</ul>
							<a class="close-link">
								<i class="fa fa-times"></i>
							</a>
						</div>
					</div>
					
						<div class="ibox-content">	<br><br>						
							<div class="form-group">
							<div class="col-md-3"></div>
							<form method="POST" action="attendanceapproval-gerald.php">
								<label class="col-sm-1 control-label">Schedule List</label>
								<div class="col-md-4">
									<select id = "leavetype" class="form-control"  data-default-value="z" name="selection" required="">
								<?php 
								include('dbconfig.php');
								
								if ($result1 = $mysqli->query("SELECT * FROM cutoff WHERE cutoff_status = 'Active'")) //get records from db
									{
										if ($result1->num_rows > 0) //display records if any
										{
												if(isset($_POST['test'])){
													echo '<option value="'.$initialcut." - ".$endcut."\">".date("F d, Y",strtotime($initialcut)).' - ';
												echo date("F d, Y",strtotime($endcut)).'</option>';
												}else{
													echo '<option value=""> Select Cutoff &nbsp;&nbsp;(Month-Day-Year) </option>';
												}
											while ($row1 = mysqli_fetch_object($result1)){
												$initial = $row1->cutoff_initial;
												$end = $row1->cutoff_end;

												echo '<option value="'.$initial." - ".$end."\">".date("F d, Y",strtotime($initial)).' - ';
												echo date("F d, Y",strtotime($end)).'</option>';
											}
										}
									}
								
								?>
								</SELECT>
							</div>
							<button type="submit" name="test" class="btn btn-w-m btn-primary">Validate</button>
						</form>
							</div>
						<br><br><br><br>


				<!--generate table-->

				<form method="POST" id="uploadForm" class="form-horizontal">
					<div class="ibox-content">
					<input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">
						</div>
						<div class="ibox-content" id = "tableHolderz">
							<?php
							include('dbconfig.php');
							if(isset($_POST['test'])){

							//	
							if ($cut = $mysqli->query("SELECT * FROM emp_cutoff WHERE empcut_initial='$initialcut' AND empcut_end = '$endcut'")){
								if ($cut->num_rows > 0){
									echo "<table class='footable table table-stripped' data-page-size='30' data-filter=#filter>";								
										echo "<thead>";
										echo "<tr>";
										echo "<th>ID</th>";
										echo "<th>Name</th>";
										echo "<th>Department</th>";
										echo "<th>Status</th>";
										echo "</tr>";
										echo "</thead>";
										echo "<tfoot>";                    
										echo "<tr>";
										echo "<td colspan='7'>";
										echo "<ul class='pagination pull-right'></ul>";
										echo "</td>";
										echo "</tr>";
										echo "</tfoot>";

							while($cutoff = $cut ->fetch_object()){
								$empcutid=$cutoff->empcut_id;
								$empcutempid=$cutoff->employee_id;
								$empcutinitial=$cutoff->empcut_initial;
								$empcutend=$cutoff->empcut_end;

								if ($result1 = $mysqli->query("SELECT * FROM employee WHERE employee_id='$empcutempid' AND employee_status = 'active' ORDER BY employee_id")) //get records from db
								{
									if ($result1->num_rows > 0) //display records if any
									{
										while ($row1 = $result1->fetch_object())
										{
											$emp_id = $row1->employee_id;
											$name = $row1->employee_firstname . "  " . $row1->employee_middlename . " " . $row1->employee_lastname;
											$empid = $row1->employee_id;
											$emp_type = $row1->employee_type;
											$emp_shift = $row1->employee_shift;
											$emp_restday = $row1->employee_restday;
											$emp_sickleave = $row1->employee_sickleave;
											$emp_vacationleave = $row1->employee_vacationleave;

											if($attRes = $mysqli->query("SELECT * FROM attendance INNER JOIN emp_cutoff ON attendance.employee_id = emp_cutoff.employee_id WHERE attendance.attendance_date BETWEEN '$initialcut' AND '$endcut' AND emp_cutoff.employee_id='$emp_id'")){

												$newabsent = 0;
												$newreghrs = 0;
												$newlate = 0;
												$newundertime = 0;
												$newregot = 0;
												$newrestot = 0;
												$newrestot8 = 0;
												$newlegalot = 0;
												$newlegalot8 = 0;
												$newlegalrestot = 0;
												$newlegalrestot8 = 0;
												$newspecialot = 0;
												$newspecialot8 = 0;
												$newspecialrestot = 0;
												$newspecialrestot8 = 0;
												$newregotnd = 0;
												$newrestnd = 0;
												$newrestnd8 = 0;
												$newlegalnd = 0; 	
												$newlegalnd8 = 0;
												$newspecialnd = 0;
												$newspecialnd8 = 0;
												$newlegalrestnd = 0;
												$newlegalrestnd8 = 0;
												$newspecialrestnd = 0;
												$newspecialrestnd8 = 0;

												while($rowx = $attRes->fetch_object()){

												$absent = $rowx->attendance_absent;
												$reghrs = $rowx->attendance_hours;
												$late = $rowx->attendance_late;
												$undertime = $rowx->attendance_undertime;
												$regot = $rowx->attendance_overtime;
												$restot = $rowx->RST_OT;
												$restot8 = $rowx->RST_OT_GRT8;
												$legalot = $rowx->LH_OT;
												$legalot8 = $rowx->LH_OT_GRT8;
												$legalrestot = $rowx ->RST_LH_OT;
												$legalrestot8 = $rowx->RST_LH_OT_GRT8;
												$specialot = $rowx->SH_OT;
												$specialot8 = $rowx->SH_OT_GRT8;
												$specialrestot = $rowx->RST_SH_OT;
												$specialrestot8 = $rowx->RST_SH_OT_GRT8;
												$regotnd = $rowx->REG_OT_ND;
												$restnd = $rowx->RST_ND;
												$restnd8 = $rowx->RST_ND_GRT8;
												$legalnd = $rowx->LH_ND;
												$legalnd8 = $rowx->LH_ND_GRT8;
												$specialnd = $rowx->SH_ND;
												$specialnd8 = $rowx->SH_ND_GRT8;
												$legalrestnd = $rowx->RST_LH_ND;
												$legalrestnd8 = $rowx->RST_LH_ND_GRT8;
												$specialrestnd = $rowx->RST_SH_ND;
												$specialrestnd8 = $rowx->RST_SH_ND_GRT8;

												$newabsent = $newabsent + $absent;
												$newreghrs = sprintf("%.2f",$newreghrs + $reghrs);
												$newlate = $newlate + $late;
												$newundertime = $newundertime + $undertime;
												$newregot = sprintf("%.2f",$newregot + $regot);
												$newrestot = sprintf("%.2f",$newrestot + $restot);
												$newrestot8 = sprintf("%.2f",$newrestot8 + $restot8);
												$newlegalot = sprintf("%.2f",$newlegalot + $legalot);
												$newlegalot8 = sprintf("%.2f",$newlegalot8 + $legalot8);
												$newlegalrestot = sprintf("%.2f",$newlegalrestot + $legalrestot);
												$newlegalrestot8 = sprintf("%.2f",$newlegalrestot8 + $legalrestot8);
												$newspecialot = sprintf("%.2f",$newspecialot + $specialot);
												$newspecialot8 = sprintf("%.2f",$newspecialot8 + $specialot8);
												$newspecialrestot = sprintf("%.2f",$newspecialrestot + $specialrestot);
												$newspecialrestot8 = sprintf("%.2f",$newspecialrestot8 + $specialrestot8);
												$newregotnd = sprintf("%.2f",$newregotnd + $regotnd);
												$newrestnd = sprintf("%.2f",$newrestnd + $restnd);
												$newrestnd8 = sprintf("%.2f",$newrestnd8 + $restnd8);
												$newlegalnd = sprintf("%.2f",$newlegalnd + $legalnd);
												$newlegalnd8 = sprintf("%.2f",$newlegalnd8 + $legalnd8);
												$newspecialnd = sprintf("%.2f",$newspecialnd + $specialnd);
												$newspecialnd8 = sprintf("%.2f",$newspecialnd8 + $specialnd8);
												$newlegalrestnd = sprintf("%.2f",$newlegalrestnd + $legalrestnd);
												$newlegalrestnd8 = sprintf("%.2f",$newlegalrestnd8 + $legalrestnd8);
												$newspecialrestnd = sprintf("%.2f",$newspecialrestnd + $specialrestnd);
												$newspecialrestnd8 = sprintf("%.2f", $newspecialrestnd8 + $specialrestnd8);

											}
										}
											//REG HRS
											$newreghrsfloor = floor($newreghrs);
											$newreghrsdecimal = substr((($newreghrs-$newreghrsfloor) *100)*60, 0, 2);
											$newreghrsConverted = $newreghrsfloor.':'.$newreghrsdecimal;

											//REG OT
											$newregotfloor = floor($newregot);
											$newregotdecimal = substr((($newregot-$newregotfloor) *100)*60, 0, 2);
											$newregotConverted = $newregotfloor.':'.$newregotdecimal;

											//REST OT
											$newrestotfloor = floor($newrestot);
											$newrestotdecimal = substr((($newrestot-$newrestotfloor) *100)*60, 0, 2);
											$newrestotConverted = $newrestotfloor.':'.$newrestotdecimal;

											//REST OT 8
											$newrestot8floor = floor($newrestot8);
											$newrestot8decimal = substr((($newrestot8-$newrestot8floor) *100)*60, 0, 2);
											$newrestot8Converted = $newrestot8floor.':'.$newrestot8decimal;

											//LEGAL OT
											$newlegalotfloor = floor($newlegalot);
											$newlegalotdecimal = substr((($newlegalot-$newlegalotfloor) *100)*60, 0, 2);
											$newlegalotConverted = $newlegalotfloor.':'.$newlegalotdecimal;

											//LEGAL OT 8
											$newlegalot8floor = floor($newlegalot8);
											$newlegalot8decimal = substr((($newlegalot8-$newlegalot8floor) *100)*60, 0, 2);
											$newlegalot8Converted = $newlegalot8floor.':'.$newlegalot8decimal;

											//LEGAL REST OT
											$newlegalrestotfloor = floor($newlegalrestot);
											$newlegalrestotdecimal = substr((($newlegalrestot-$newlegalrestotfloor) *100)*60, 0, 2);
											$newlegalrestotConverted = $newlegalrestotfloor.':'.$newlegalrestotdecimal;

											//LEGAL REST OT 8
											$newlegalrestot8floor = floor($newlegalrestot8);
											$newlegalrestot8decimal = substr((($newlegalrestot8-$newlegalrestot8floor) *100)*60, 0, 2);
											$newlegalrestot8Converted = $newlegalrestot8floor.':'.$newlegalrestot8decimal;

											//SPECIAL OT
											$newspecialotfloor = floor($newspecialot);
											$newspecialotdecimal = substr((($newspecialot-$newspecialotfloor) *100)*60, 0, 2);
											$newspecialotConverted = $newspecialotfloor.':'.$newspecialotdecimal;

											//SPECIAL OT 8
											$newspecialot8floor = floor($newspecialot8);
											$newspecialot8decimal = substr((($newspecialot8-$newspecialot8floor) *100)*60, 0, 2);
											$newspecialot8Converted = $newspecialot8floor.':'.$newspecialot8decimal;

											//SPECIAL REST OT
											$newspecialrestotfloor = floor($newspecialrestot);
											$newspecialrestotdecimal = substr((($newspecialrestot-$newspecialrestotfloor) *100)*60, 0, 2);
											$newspecialrestotConverted = $newspecialrestotfloor.':'.$newspecialrestotdecimal;

											//SPECIAL REST OT 8
											$newspecialrestot8floor = floor($newspecialrestot8);
											$newspecialrestot8decimal = substr((($newspecialrestot8-$newspecialrestot8floor) *100)*60, 0, 2);
											$newspecialrestot8Converted = $newspecialrestot8floor.':'.$newspecialrestot8decimal;

											//REG OT ND
											$newregotndfloor = floor($newregotnd);
											$newregotnddecimal = substr((($newregotnd-$newregotndfloor) *100)*60, 0, 2);
											$newregotndConverted = $newregotndfloor.':'.$newregotnddecimal;

											//REST ND
											$newrestndfloor = floor($newrestnd);
											$newrestnddecimal = substr((($newrestnd-$newrestndfloor) *100)*60, 0, 2);
											$newrestndConverted = $newrestndfloor.':'.$newrestnddecimal;

											//REST ND 8
											$newrestnd8floor = floor($newrestnd8);
											$newrestnd8decimal = substr((($newrestnd8-$newrestnd8floor) *100)*60, 0, 2);
											$newrestnd8Converted = $newrestnd8floor.':'.$newrestnd8decimal;

											//LEGAL ND 
											$newlegalndfloor = floor($newlegalnd);
											$newlegalnddecimal = substr((($newlegalnd-$newlegalndfloor) *100)*60, 0, 2);
											$newlegalndConverted = $newlegalndfloor.':'.$newlegalnddecimal;

											//LEGAL ND 8
											$newlegalnd8floor = floor($newlegalnd8);
											$newlegalnd8decimal = substr((($newlegalnd8-$newlegalnd8floor) *100)*60, 0, 2);
											$newlegalnd8Converted = $newlegalnd8floor.':'.$newlegalnd8decimal;

											//SPECIAL ND
											$newspecialndfloor = floor($newspecialnd);
											$newspecialnddecimal = substr((($newspecialnd-$newspecialndfloor) *100)*60, 0, 2);
											$newspecialndConverted = $newspecialndfloor.':'.$newspecialnddecimal;

											//SPECIAL ND 8
											$newspecialnd8floor = floor($newspecialnd8);
											$newspecialnd8decimal = substr((($newspecialnd8-$newspecialnd8floor) *100)*60, 0, 2);
											$newspecialnd8Converted = $newspecialnd8floor.':'.$newspecialnd8decimal;

											//LEGAL REST ND
											$newlegalrestndfloor = floor($newlegalrestnd);
											$newlegalrestnddecimal = substr((($newlegalrestnd-$newlegalrestndfloor) *100)*60, 0, 2);
											$newlegalrestndConverted = $newlegalrestndfloor.':'.$newlegalrestnddecimal;

											//LEGAL REST ND 8
											$newlegalrestnd8floor = floor($newlegalrestnd8);
											$newlegalrestnd8decimal = substr((($newlegalrestnd8-$newlegalrestnd8floor) *100)*60, 0, 2);
											$newlegalrestnd8Converted = $newlegalrestnd8floor.':'.$newlegalrestnd8decimal;

											//SPECIAL REST ND
											$newspecialrestndfloor = floor($newspecialrestnd);
											$newspecialrestnddecimal = substr((($newspecialrestnd-$newspecialrestndfloor) *100)*60, 0, 2);
											$newspecialrestndConverted = $newspecialrestndfloor.':'.$newspecialrestnddecimal;

											//SPECIAL REST ND 8
											$newspecialrestnd8floor = floor($newspecialrestnd8);
											$newspecialrestnd8decimal = substr((($newspecialrestnd8-$newspecialrestnd8floor) *100)*60, 0, 2);
											$newspecialrestnd8Converted = $newspecialrestnd8floor.':'.$newspecialrestnd8decimal;

											//LATE
											$totalhours = floor($newlate/60);
											$backtomins = $totalhours*60;
											$remainingmins = $newlate-$backtomins;
											$result = date("H:i", strtotime($totalhours.':'.$remainingmins));

											//UNDERTIME
											$totalhoursunder = floor($newundertime/60);
											$backtominsunder = $totalhoursunder*60;
											$remainingminsunder = $newundertime-$backtominsunder;
											$undertimeresult = date("H:i", strtotime($totalhoursunder.':'.$remainingminsunder));


											$attstatus = $mysqli->query("SELECT * FROM total_comp WHERE employee_id = '$empid'");
											if ($attstatus->num_rows > 0) {
											$row101 = mysqli_fetch_object($attstatus);
											$attendance_status = $row101->attendance_status;
											}else{
												$attendance_status='Pending';
											}

											echo "<tr class = 'josh'>";
											echo "<td>" . $row1->employee_id . "</td>";
											echo "<td><a href='#' data-toggle='modal'
														data-employee-id='$empid' 
														data-cutoff='".$initialcut.' - '.$endcut."'
														data-initial='$empcutinitial'
														data-end='$empcutend'
														data-lastname='$name'
														data-shifttype='$emp_type'
														data-schedule='$emp_shift'
														data-restday='$emp_restday'
														data-sickleave='$emp_sickleave'
														data-vacationleave='$emp_vacationleave'

														data-absent='".$newabsent."'
														data-reghrs='".$newreghrsConverted."'
														data-late='".$result."'
														data-undertime='".$undertimeresult."'
														data-regot='".$newregotConverted."'
														data-restot='".$newrestotConverted."'
														data-restot8='".$newrestot8Converted."'
														data-legalot='".$newlegalotConverted."'
														data-legalot8='".$newlegalot8Converted."'
														data-legalrestot='".$newlegalrestotConverted."'
														data-legalrestot8='".$newlegalrestot8Converted."'
														data-specialot='".$newspecialotConverted."'
														data-specialot8='".$newspecialot8Converted."'
														data-specialrestot='".$newspecialrestotConverted."'
														data-specialrestot8='".$newspecialrestot8Converted."'
														data-regotnd='".$newregotndConverted."'
														data-restnd='".$newrestndConverted."'
														data-restnd8='".$newrestnd8Converted."'
														data-legalnd='".$newlegalndConverted."'
														data-legalnd8='".$newlegalnd8Converted."'
														data-specialnd='".$newspecialndConverted."'
														data-specialnd8='".$newspecialnd8Converted."'
														data-legalrestnd='".$newlegalrestndConverted."'
														data-legalrestnd8='".$newlegalrestnd8Converted."'
														data-specialrestnd='".$newspecialrestndConverted."'
														data-specialrestnd8='".$newspecialrestnd8Converted."'



											data-target='#myModal2' class = 'viewempdialog'>" . $row1->employee_lastname . "," . " " . $row1->employee_firstname . " " . $row1->employee_middlename . "</a></td>";
											echo "<td>" . $row1->employee_department . "</td>";
											echo "<td id='attendance_status" . $row1->employee_id . "' name='attendance_status'>" . $attendance_status . "</td>";											
											echo "</tr>";
										}	
									}
								}
							}
									}

										echo "</table>";

								}
							}

											
								

							
						?>
						<div class="col-sm-9"></div>								
						<div class="col-sm-3">
						<button type="submit" name="submit" id="attendanceapprovalsubmit" class="btn btn-w-m btn-primary">Submit</button>
					</div><br>
				</div>
			</div>
        </div>
    </form>

		<script type="text/javascript">
				//modal to
					$(document).on("click", ".viewempdialog", function () {
					 document.getElementById('approvedstatus').value = $(this).data('employee-id');
					 document.getElementById('pendingstatus').value = $(this).data('employee-id');
					 var period = $(this).data('cutoff');
					 var absent = $(this).data('absent');
					 var reghrs = $(this).data('reghrs');
					 var late = $(this).data('late');
					 var undertime = $(this).data('undertime');
					 var regot = $(this).data('regot');
					 var restot = $(this).data('restot');
					 var restot8 = $(this).data('restot8');
					 var legalot = $(this).data('legalot');
					 var legalot8 = $(this).data('legalot8');
					 var legalrestot = $(this).data('legalrestot');
					 var legalrestot8 = $(this).data('legalrestot8');
					 var specialot = $(this).data('specialot');
					 var specialot8 = $(this).data('specialot8');
					 var specialrestot = $(this).data('specialrestot');
					 var specialrestot8 = $(this).data('specialrestot8');
					 var regotnd = $(this).data('regotnd');
					 var restnd = $(this).data('restnd');
					 var restnd8 = $(this).data('restnd8');
					 var legalnd = $(this).data('legalnd');
					 var legalnd8 = $(this).data('legalnd8');
					 var specialnd = $(this).data('specialnd');
					 var specialnd8 = $(this).data('specialnd8');
					 var legalrestnd = $(this).data('legalrestnd');
					 var legalrestnd8 = $(this).data('legalrestnd8');
					 var specialrestnd = $(this).data('specialrestnd');
					 var specialrestnd8 = $(this).data('specialrestnd8');

					 $(".modal-body #period").val( period );
					 $(".modal-body #absent").val( absent );
					 $(".modal-body #reghrs").val( reghrs );
					 $(".modal-body #late").val( late );
					 $(".modal-body #undertime").val( undertime );
					 $(".modal-body #regot").val( regot );
					 $(".modal-body #restot").val( restot );
					 $(".modal-body #restot8").val( restot8 );
					 $(".modal-body #legalot").val( legalot );
					 $(".modal-body #legalot8").val( legalot8 );
					 $(".modal-body #legalrestot").val( legalrestot );
					 $(".modal-body #legalrestot8").val( legalrestot8 );
					 $(".modal-body #specialot").val( specialot );
					 $(".modal-body #specialot8").val( specialot8 );
					 $(".modal-body #specialrestot").val( specialrestot );
					 $(".modal-body #specialrestot8").val( specialrestot8 );
					 $(".modal-body #regotnd").val( regotnd );
					 $(".modal-body #restnd").val( restnd );
					 $(".modal-body #restnd8").val( restnd8 );
					 $(".modal-body #legalnd").val( legalnd );
					 $(".modal-body #legalnd8").val( legalnd8 );
					 $(".modal-body #specialnd").val( specialnd );
					 $(".modal-body #specialnd8").val( specialnd8 );
					 $(".modal-body #legalrestnd").val( legalrestnd );
					 $(".modal-body #legalrestnd8").val( legalrestnd8 );
					 $(".modal-body #specialrestnd").val( specialrestnd );
					 $(".modal-body #specialrestnd8").val( specialrestnd8 );
						$.ajax({
	                        url: "otattendanceapproval-gerald.php?empid="+$(this).data('employee-id')+"&cutoff_initial="+$(this).data('initial')+"&cutoff_end="+$(this).data('end'),
	                        method: "POST",
	                        success: function(data) {
	                            $('#tbodyot').html(data);
	                        }
	                    });
	                    $.ajax({
	                        url: "detailsapproval.php?empid="+$(this).data('employee-id')+"&cutoff_initial="+$(this).data('initial')+"&cutoff_end="+$(this).data('end'),
	                        method: "POST",
	                        success: function(data) {
	                            $('#tbodydetails').html(data);
	                        }
	                    });
	                   	$.ajax({
	                        url: "leavedetails.php?empid="+$(this).data('employee-id')+"&cutoff_initial="+$(this).data('initial')+"&cutoff_end="+$(this).data('end'),
	                        method: "POST",
	                        success: function(data) {
	                            $('#tbodyleave').html(data);
	                        }
	                    });
					});
		</script>

		</script>

	<div class="modal inmodal fade" id="myModal2" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">				
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<i class="fa fa-user modal-icon"></i>
					<h4 class="modal-title" readonly>Attendance Approval</h4>
					<h4 id="displaysched" class="modal-title" readonly></h4>
				</div>
				<div class="modal-body">
					<div class="ibox-content">
						<div class="tabs-container">
							<ul id="mytab" class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#employee">Employee Details</a></li>
								<li class=""><a data-toggle="tab" href="#summary">Summary</a></li>
								<li class=""><a data-toggle="tab" href="#details">Details</a></li>
								<li class=""><a data-toggle="tab" href="#overtime">Overtime Details</a></li>
								<li class=""><a data-toggle="tab" href="#exemption">Exemption</a></li>
								<!-- <li class=""><a data-toggle="tab" href="#exemption">Exemption</a></li> -->

							</ul>
							<div class="tab-content">
								<div id="employee" class="tab-pane fade active in" >
									<div class="panel-body">
										<div class="form-group">
										<div class="col-sm-2"><b>Employee ID</b></div>
										<div class="col-sm-1"><input id ="empid" readonly></div>
										<br>
										<br>
										<div class="col-sm-2"><b>Name</b></div>
										<div class="col-sm-3"><input id="lastname" readonly></div>
										<br>
										<br>
										<div class="col-sm-2"><b>Shift Type</b></div>
										<div class="col-sm-1"><input id="shifttype" readonly></div>  
										<br>
										<br>
										<div class="col-sm-2"><b>Schedule</b></div>
										<div class="col-sm-1"><input id="schedule" readonly></div>  
										<br>
										<br>
										<div class="col-sm-2"><b>Restday</b></div>
										<div class="col-sm-1"><input id="restday" readonly></div>  
										<br>
										<br>
										</div>
									</div>
								</div>
							</ul>

									<div id="summary" class="tab-pane" >
									<div class="panel-body">
										<div class="form-group">
										<div class="col-sm-2"><b>Cut Off Period</b></div>
										<div class="col-sm-3"><input id="period" readonly></div>  
										<div class="col-sm-5"><b>Legal Holiday Restday OT > 8</b></div>
										<div class="col-sm-1"><input id="legalrestot8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Absent</b></div>
										<div class="col-sm-2"><input id="absent" readonly></div>  
										<div class="col-sm-5"><b>Legal Holiday Night Diff</b></div>
										<div class="col-sm-1"><input id="legalnd" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Regular Hours</b></div>
										<div class="col-sm-2"><input id="reghrs" readonly></div>  
										<div class="col-sm-5"><b>Legal Holiday Night Diff > 8</b></div>
										<div class="col-sm-1"><input id="legalnd8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Late</b></div>
										<div class="col-sm-2"><input id="late" readonly></div>  
										<div class="col-sm-5"><b>Legal Holiday Restday Night Diff</b></div>
										<div class="col-sm-1"><input id="legalrestnd" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Undertime</b></div>
										<div class="col-sm-2"><input id="undertime" readonly></div>  
										<div class="col-sm-5"><b>Legal Holiday Restday Night Diff > 8</b></div>
										<div class="col-sm-1"><input id="legalrestnd8" readonly></div> 
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Regular OT</b></div>
										<div class="col-sm-2"><input id="regot" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday OT</b></div>
										<div class="col-sm-1"><input id="specialot" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Regular OT Night Diff</b></div>
										<div class="col-sm-2"><input id="restnd" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday OT > 8</b></div>
										<div class="col-sm-1"><input id="specialnd8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Restday OT</b></div>
										<div class="col-sm-2"><input id="restot" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Restday OT</b></div>
										<div class="col-sm-1"><input id="specialrestot" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Restday OT > 8</b></div>
										<div class="col-sm-2"><input id="restot8" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Restday OT > 8</b></div>
										<div class="col-sm-1"><input id="specialrestot8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Restday Night Diff</b></div>
										<div class="col-sm-2"><input id="restnd" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Night Diff</b></div>
										<div class="col-sm-1"><input id="specialnd" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Restday Night Diff > 8</b></div>
										<div class="col-sm-2"><input id="restnd8" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Night Diff > 8</b></div>
										<div class="col-sm-1"><input id="specialnd8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Legal Holiday OT</b></div>
										<div class="col-sm-2"><input id="legalot" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Restday Night Diff</b></div>
										<div class="col-sm-1"><input id="specialrestnd" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Legal Holiday OT > 8</b></div>
										<div class="col-sm-2"><input id="legalot8" readonly></div>  
										<div class="col-sm-5"><b>Special Holiday Restday Night Diff > 8</b></div>
										<div class="col-sm-1"><input id="specialrestnd8" readonly></div>  
										</div>
										<br>
										<div class="form-group">
										<div class="col-sm-3"><b>Legal Holiday Restday OT</b></div>
										<div class="col-sm-2"><input id="legalrestot" readonly></div> 
										</div>

									</div>
								</div>
							</ul>
								<div style= "max-height:150px; min-height:150px; overflow-y:scroll;" id="details" class="tab-pane" >
									<div class="panel-body">
										<table class='footable table table-stripped'>						
											<thead>
												<tr>
													<th>Date</th>
													<th>Shift</th>
													<th>Day Type</th>
													<th>Time In</th>
													<th>Lunch Out</th>
													<th>Lunch In</th>
													<th>Time Out</th>
													<th>Reg Hrs</th>
													<th>Late</th>
													<th>Undertime</th>
												</tr>
											</thead>
											<tbody id="tbodydetails">
											</tbody>
										</table>
									</div>
								</div>
							</ul>
								<div style= "max-height:150px; min-height:150px; overflow-y:scroll;" id="overtime" class="tab-pane" >
									<div class="panel-body">
										<table class='footable table table-stripped' data-page-size='8' data-filter=#filter>						
											<thead>
												<tr>
													<th>Date</th>
													<th>Time From</th>
													<th>Time To</th>
													<th>Hours</th>
													<th>Approved By</th>
												</tr>
											</thead>
											<tbody id="tbodyot">
											</tbody>
										</table>
									</div>
								</div>
							</ul>

							<div style= "max-height:150px; min-height:150px; overflow-y:scroll;" id="exemption" class="tab-pane" >
								<div class="panel-body">
									<table class='footable table table-stripped' data-page-size='8' data-filter=#filter>						
										<thead>
											<tr>
												<th>Leave Type</th>
												<th>Date</th>
												<th>Approved By</th>
											</tr>
										</thead>
										<tbody id="tbodyleave">
										</tbody>
									</table>
								</div>
							</div>
						</ul>
								<!-- <div id="exemption" class="tab-pane" >
									<div class="panel-body">
										<div class="col-md-3"></div>
										<div class="col-md-3"><b>Vacation Leave</b></div>
										<div class="col-md-4"><input id="vacationleave" readonly></div>  
										<br><br>
										<div class="col-md-3"></div>
										<div class="col-md-3"><b>Sick Leave</b></div>
										<div class="col-md-4"><input id="sickleave" readonly></div>  
									</div>
									</div>

								</ul> -->
								</div>
							</div>
						</div>
					<div class="modal-footer">
					<button id="approvedstatus" type="button" class="btn btn-primary" data-dismiss="modal" name="approved"><i class='fa fa-check'></i>Approved</button>
					<button id="pendingstatus" type="button" class="btn btn-warning" data-dismiss="modal" name="pending"><i class=''></i>Pending</button>
				</div>
			</div>
		</div>
	</div>
</div>		
		<?php
			include('menufooter.php');
		?>
	
		<script type="text/javascript">


			$('#approvedstatus').click(function(){
				var empid101 = $(this).val();
				// alert(empid101);
				$.ajax({
		            url: 'attendancedetailsapproval.php?empid='+empid101+'&period='+$('#period').val()+'&absent='+$('#absent').val()+'&reghrs='+$('#reghrs').val()+'&late='+$('#late').val()+'&undertime='+$('#undertime').val()+'&regot='+$('#regot').val()+'&regotnd='+$('#regotnd').val()+'&restot='+$('#restot').val()+'&restot8='+$('#restot8').val()+'&restnd='+$('#restnd').val()+'&restnd8='+$('#restnd8').val()+'&legalot='+$('#legalot').val()+'&legalot8='+$('#legalot8').val()+'&legalnd='+$('#legalnd').val()+'&legalnd8='+$('#legalnd8').val()+'&specialot='+$('#specialot').val()+'&specialot8='+$('#specialot8').val()+'&specialnd='+$('#specialnd').val()+'&specialnd8='+$('#specialnd8').val()+'&legalrestot='+$('#legalrestot').val()+'&legalrestot8='+$('#legalrestot8').val()+'&legalrestnd='+$('#legalrestnd').val()+'&legalrestnd8='+$('#legalrestnd8').val()+'&specialrestot='+$('#specialrestot').val()+'&specialrestot8='+$('#specialrestot8').val()+'&specialrestnd='+$('#specialrestnd').val()+'&specialrestnd8='+$('#specialrestnd8').val(),
		            method: "POST",
		            success: function(data) {
		                $('#displaysomething').html(data);
		                $('#attendance_status'+empid101).html('Approved');
		            }
		        });
	        });

	        $('#pendingstatus').click(function(){
			var empid101 = $('#approvedstatus').val();
			// alert(empid101);
				$.ajax({
		            url: 'attendancedetailspending.php?empid='+empid101,
		            method: "POST",
		            success: function(data) {
		                $('#displaysomething').html(data);
		                $('#attendance_status'+empid101).html('Pending');
		            }
				});
			});

	        $('#attendanceapprovalsubmit').click(function(){
	        	$('#uploadForm').find('td[name=attendance_status]').each(function(){
					if($(this).html() == 'Pending'){
						swal({  title: "Cannot Submit",   text: "There are pending attendance status",   timer: 3000, type: "warning",   showConfirmButton: false});
							return false;
					}else{
						var sched = $('#leavetype').val();
						// alert(empid101);
							$.ajax({
					            url: 'attendanceapprovalexe.php?sched='+sched,
					            method: "POST",
					            success: function(data) {
					                eval(data);
					            }
							});
					}
				});
			return false;
			});
		</script>
		<div id="displaysomething"></div>
	</body>

</html>



<!-- $.ajax({
url: "leavedetails.php?empid="+$(this).data('employee-id')+"&cutoff_initial="+$(this).data('initial')+"&cutoff_end="+$(this).data('end'),
method: "POST",
success: function(data) {
$('#tbodyleave').html(data);
}
}); -->