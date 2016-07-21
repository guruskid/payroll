<!DOCTYPE html>
<html>

	<head>
		<?php
			include('supervisormenuheader.php');
		?>
		<title>Overtime Application</title>
		<style>
			.btn2{
				margin-left:-10.7em;
			}
						.form-horizontal .control-label{
			/* text-align:right; */
			text-align:left;
			}
		</style>
		<script type="text/javascript">
		$(function() {
			$('input[name="daterange"]').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});
		});
		</script>
		<script>
		function clearThis(target){
        	target.value= "";
    	}
		$(function() {
			$( ".ename" ).autocomplete({
				source: 'search3.php'
					
			});
			$( ".ename" ).autocomplete({
			select: function(e, ui) {  
                 document.getElementById("date").focus();
               		}
             });

		});

		</script>
		<link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
		<!-- Clock picker -->
		<script src="js/plugins/clockpicker/clockpicker.js"></script>
		<script type="text/javascript" >//ajax
			$(document).ready(function(){
			$(document).on('submit','#myForm', function() {
			var reason = $("#reason").val();
			var end = $("#timeto").val();
			var start = $("#timefrom").val();
			var date = $("#date").val();
			var empid = $("#empid").val();
			var name = $("#name").val();

			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'reason1='+ reason + '&end1=' + end + '&start1=' + start + '&date1=' + date + '&empid1=' + empid + '&name1=' + name;
			if(reason==''){
			$('#warning').fadeIn(700);
			$('#success').hide();
			}
			else{
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: "adminovertimeapplicationexe.php",
				data: dataString,
				cache: false,
				success: function(result){
				$('#reason').val('');
				$('#date').val('');
				$('#timefrom').val('');
				$('#timeto').val('');
				toastr.options = { 
				"closeButton": true,
			  "debug": false,
			  "progressBar": true,
			  "preventDuplicates": true,
			  "positionClass": "toast-top-right",
			  "onclick": null,
			  "showDuration": "400",
			  "hideDuration": "1000",
			  "timeOut": "7000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut" // 1.5s
				}
				toastr.success('Successfully applied for overtime	!');
					}
				});
			}
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
						<h5>Overtime Application</h5>
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
					<div class="ibox-content">
						<form id = "myForm" method = "post"  class="form-horizontal">
													<div class="form-group">
								<input type="hidden" id = "empid" name = "empid" class="form-control" value = " <?php echo $_SESSION['logsession'] ?>">
								<div class="col-md-3"></div>
								<label class="col-sm-1 control-label">Employee Name</label>
								<div class="col-md-4"><input type="text" onfocus="clearThis(this)" id="name" onpaste="return false" onDrop="return false" class="form-control ename"></div>
							</div>
							<div class="form-group"><div class="col-md-3"></div>
								<label class="col-sm-1 control-label">Date</label>
								<div class="col-md-4"><input id = "date" type="text" onpaste="return false" onDrop="return false"  class="form-control" name="daterange" required="" onKeyPress="return noneonly(this, event)"/> </div>
							</div>
								<div class="form-group"><div class="col-md-3"></div>
								<label class="col-sm-1 control-label">Time from</label>
								<div class="col-md-4">
									<div class="input-group clockpicker" data-autoclose="true">
										<input type="text" id = "timefrom" onpaste="return false" onDrop="return false" class="form-control timepicker1" required="" onKeyPress="return noneonly(this, event)">
										<span class="input-group-addon">
											<span class="fa fa-clock-o"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group"><div class="col-md-3"></div>
								<label class="col-sm-1 control-label">Time to</label>
								<div class="col-md-4">
									<div class="input-group clockpicker" data-autoclose="true">
										<input id = "timeto" type="text" onpaste="return false" onDrop="return false" class="form-control timepicker1" required="" onKeyPress="return noneonly(this, event)" >
										<span class="input-group-addon">
											<span class="fa fa-clock-o"></span>
										</span>
									</div>
                            </div>
							</div>
								<div class="form-group"><div class="col-md-3"></div>
								<label class="col-sm-1 control-label">Reason</label>
								<div class="col-md-4"><input id = "reason"  onpaste="return false" onDrop="return false" name = "reason" type="text" class="form-control" required="" placeholder = "Type your reason here..."></div>
							</div>
							<div class="col-md-4"></div>
								<button id ="submit" type="submit" class="btn btn-w-m btn-primary">Submit</button>
							</form>
					</div>
				</div>
			</div>
		</div>
   <script src="js/jquery.min.js"></script>
		<script src="js/timepicki.js"></script>
		<script>
		$('.timepicker1').timepicki();
		</script>
		 <script>
		$('.timepicker2').timepicki();
		</script>
		<script src="js/bootstrap.min.js"></script>
		<link href="css/timepicki.css" rel="stylesheet">
		<?php
			include('menufooter.php');
		?>
	</body>
</html>