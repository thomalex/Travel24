<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>travelingmart - Administration</title>
	
</head>
<script type="text/javascript" src="<?php echo WEB_DIR; ?>js/jquery-1.3.2.min.js"></script>
<link type="text/css" href="<?php echo WEB_DIR?>calender/css/overcast/jquery-ui-1.8.6.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php print WEB_DIR; ?>datepickernew/ui.core.js"></script>
<script type="text/javascript" src="<?php print WEB_DIR; ?>datepickernew/ui.datepicker.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	 $(function(){
					$( "#sd" ).datepicker({
						numberOfMonths: 3,
						minDate: 0
					});
					$( "#ed" ).datepicker({
						numberOfMonths: 3,
						minDate: 2
					});
					$( "#depart_bus" ).datepicker({
						numberOfMonths: 3,
						minDate: 0
					});
				});
	 		$('#sd').change(function(){
				
		   var selectedDate = $(this).datepicker('getDate');
		    var str1 = $( "#ed" ).val();
			
			var predayDate = dateADD(selectedDate);
			var str2 = zeroPad(predayDate.getDate(),2)+"/"+zeroPad((predayDate.getMonth()+1),2)+"/"+(predayDate.getFullYear());
			var dt1 = parseInt(str1.substring(0,2),10);
			var mon1 = parseInt(str1.substring(3,5),10);
			var yr1 = parseInt(str1.substring(6,10),10);
			var dt2 = parseInt(str2.substring(0,2),10);
			var mon2 = parseInt(str2.substring(3,5),10);
			var yr2 = parseInt(str2.substring(6,10),10);
			var date1 = new Date(yr1, mon1, dt1);
			var date2 = new Date(yr2, mon2, dt2);
			if(date2 < date1)
			{
			}
			else
			{
			   var nextdayDate  = dateADD(selectedDate);
			   var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"/"+zeroPad((nextdayDate.getMonth()+1),2)+"/"+(nextdayDate.getFullYear());
			   $t = nextDateStr;
			   $( "#ed" ).datepicker({
							numberOfMonths: 3,
							minDate: $t
						});
			   $( "#ed" ).val($t);
			}
		 });	
		 $('#ed').change(function(){
		   var selectedDate = $(this).datepicker('getDate');
		    var str1 = $( "#sd" ).val();
			var predayDate = dateSUB(selectedDate);
			var str2 = zeroPad(predayDate.getDate(),2)+"/"+zeroPad((predayDate.getMonth()+1),2)+"/"+(predayDate.getFullYear());
			var dt1 = parseInt(str1.substring(0,2),10);
			var mon1 = parseInt(str1.substring(3,5),10);
			var yr1 = parseInt(str1.substring(6,10),10);
			var dt2 = parseInt(str2.substring(0,2),10);
			var mon2 = parseInt(str2.substring(3,5),10);
			var yr2 = parseInt(str2.substring(6,10),10);
			var date1 = new Date(yr1, mon1, dt1);
			var date2 = new Date(yr2, mon2, dt2);
			if(date2 > date1)
			{
			}
			else
			{
			   var nextdayDate  = dateSUB(selectedDate);
			   var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"/"+zeroPad((nextdayDate.getMonth()+1),2)+"/"+(nextdayDate.getFullYear());
			   $t = nextDateStr;
			   $( "#sd" ).datepicker({
							numberOfMonths: 3,
							minDate: $t
						});
			   $( "#sd" ).val($t);
			}
		 });	
		  $(function(){
					$( "#sd_domestic" ).datepicker({
						numberOfMonths: 3,
						minDate: 0
					});
					$( "#sd_domestic" ).datepicker({
						numberOfMonths: 3,
						minDate: 2
					});
				});	
				$('#sd_domestic').change(function(){
				
		   var selectedDate = $(this).datepicker('getDate');
		    var str1 = $( "#ed_domestic" ).val();
			
			var predayDate = dateADD(selectedDate);
			var str2 = zeroPad(predayDate.getDate(),2)+"/"+zeroPad((predayDate.getMonth()+1),2)+"/"+(predayDate.getFullYear());
			var dt1 = parseInt(str1.substring(0,2),10);
			var mon1 = parseInt(str1.substring(3,5),10);
			var yr1 = parseInt(str1.substring(6,10),10);
			var dt2 = parseInt(str2.substring(0,2),10);
			var mon2 = parseInt(str2.substring(3,5),10);
			var yr2 = parseInt(str2.substring(6,10),10);
			var date1 = new Date(yr1, mon1, dt1);
			var date2 = new Date(yr2, mon2, dt2);
			if(date2 < date1)
			{
			}
			else
			{
			   var nextdayDate  = dateADD(selectedDate);
			   var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"/"+zeroPad((nextdayDate.getMonth()+1),2)+"/"+(nextdayDate.getFullYear());
			   $t = nextDateStr;
			   $( "#ed_domestic" ).datepicker({
							numberOfMonths: 3,
							minDate: $t
						});
			   $( "#ed_domestic" ).val($t);
			}
		 });	
		 $('#ed_domestic').change(function(){
		   var selectedDate = $(this).datepicker('getDate');
		    var str1 = $( "#sd_domestic" ).val();
			var predayDate = dateSUB(selectedDate);
			var str2 = zeroPad(predayDate.getDate(),2)+"/"+zeroPad((predayDate.getMonth()+1),2)+"/"+(predayDate.getFullYear());
			var dt1 = parseInt(str1.substring(0,2),10);
			var mon1 = parseInt(str1.substring(3,5),10);
			var yr1 = parseInt(str1.substring(6,10),10);
			var dt2 = parseInt(str2.substring(0,2),10);
			var mon2 = parseInt(str2.substring(3,5),10);
			var yr2 = parseInt(str2.substring(6,10),10);
			var date1 = new Date(yr1, mon1, dt1);
			var date2 = new Date(yr2, mon2, dt2);
			if(date2 > date1)
			{
			}
			else
			{
			   var nextdayDate  = dateSUB(selectedDate);
			   var nextDateStr = zeroPad(nextdayDate.getDate(),2)+"/"+zeroPad((nextdayDate.getMonth()+1),2)+"/"+(nextdayDate.getFullYear());
			   $t = nextDateStr;
			   $( "#sd_domestic" ).datepicker({
							numberOfMonths: 3,
							minDate: $t
						});
			   $( "#sd_domestic" ).val($t);
			}
		 });	 
});
function dateADD(currentDate)
{
 var valueofcurrentDate=currentDate.valueOf()+(24*60*60*1000);
 var newDate =new Date(valueofcurrentDate);
 return newDate;
} 
function dateSUB(currentDate)
{
 var valueofcurrentDate=currentDate.valueOf()-(24*60*60*1000);
 var newDate =new Date(valueofcurrentDate);
 return newDate;
} 
function zeroPad(num,count)
{
	var numZeropad = num + '';
	while(numZeropad.length < count) {
	numZeropad = "0" + numZeropad;
	}
	return numZeropad;
}
	 
	 </script>
<body>
<?php $this->load->view('header'); ?>
<link type="text/css" href="<?php echo WEB_DIR_ADMIN?>css/style_one.css" rel="stylesheet" />
<link href="<?php echo WEB_DIR_ADMIN?>/images/fev_icon.png" rel='shortcut icon' type='image/x-icon'/>
<div id="container_warpper" style="padding-bottom:50px; margin-top:50px;" >
   <div class="left_menu_sub">
		<ul>
<?php $this->load->view('reports/agent/left_menu'); ?>
  
		</ul>
	</div>
   <script type="text/javascript">
  function abc()
  {
  //	alert('anand');
  $('#add_comm').show();
  $('#view_comm').hide();
  }
  function xyz()
  {
  //	alert('anand');
  $('#add_comm').hide();
  $('#view_comm').show();
  }
  </script>
  
  <div style="margin:auto; width:700px; height:auto; overflow:hidden;">
 
  <div id="view_comm" style="width:678px; height:auto; overflow:hidden; border:solid 1px #ccc; margin-left:20px; font-size:12px;">
  <table width="100%"  style="border: solid 1px #C03" border="1">
 <tr style="background-color:#505e91; border:solid 1px #ccc; color:#fff; font-size:14px; text-align:center;" height="30"><th>API</th><th>Hotel Name</th><th>Hotel Code</th><th>Checkin</th><th>Checkout</th><th>Booked Date</th><th>Room Type</th></tr>
 <?php if(isset($res)) { if($res != '') { foreach($res as $row) { ?>
 	<tr height="30"><td><?php echo $row->api; ?></td><td><?php echo $row->hotel_name; ?></td><td><?php echo $row->hotel_code; ?></td><td><?php echo $row->check_in; ?></td><td><?php echo $row->check_out; ?></td><td><?php echo $row->voucher_date; ?></td><td><?php echo $row->room_type; ?></td></tr>
 <?php } } } ?>
   </table>
  </div>
   
  </div>
  
  
  
  
  
</div>
<?php $this->load->view('footer'); ?>
</body>
</html>
