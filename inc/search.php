
<script src="../js/jquery-ui.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<?php
	include "../function/config.php";
	include "../function/connect.php";
	ADOdb_Active_Record::SetDatabaseAdapter($db);
	 
	//Get Province 
		$sql = "SELECT id,name_in_thai FROM `provinces` ORDER BY CONVERT( `name_in_thai` USING tis620 )   ASC ";
		$stmt = $db->Prepare($sql);
		$rs = $db->Execute($stmt);
		$listClass = $rs->GetAssoc();
		$listClassCount = $rs->maxRecordCount();
		//var_dump($listClassCount);
?>

<div class="home_search">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="home_search_container">
					<div class="home_search_title">Search for your trip</div>
					<div class="home_search_content">
						<form action="#" class="home_search_form" id="home_search_form">
							<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								
								<select id="provinces" name="provinces" class="search_input search_input_1" required="required">
									<option value="">จังหวัด</option>
									<?php foreach ($listClass as $key => $val) { ?>
									<option value="<?=$key ?>"><?= $val ?></option>

									
									<?php } // foreach ?>
								</select>
								
								<input type="text" class="search_input search_input_2" id="departure" placeholder="วันที่ออกเดินทาง" required="required" >
								<input type="text" class="search_input search_input_3" id="arrival" placeholder="วันที่สิ้นสุด" required="required">
								<input type="text" class="search_input search_input_4" placeholder="Budget" required="required">
								<button class="home_search_button" >search</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){

	$('#departure').datepicker({
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true, 
				beforeShow: function () { 
					var tmp = $('#departure').val();
					if(tmp != "") {
						var d = tmp.substr(0,2);
						var m = tmp.substr(3,2);
						var y = parseInt(tmp.substr(6,4))-543;
						
						$('#departure').val(d+"/"+m+"/"+y);
					}
				},
				onSelect: function (dateText, inst) {
					var d = dateText.substr(0,2);
					var m = dateText.substr(3,2);
					var y = parseInt(dateText.substr(6,4))+543;
					$('#departure').val(d+"/"+m+"/"+y);
				},
				onClose: function(dateTime){
					
					if(dateTime != "") {
						var d = dateTime.substr(0,2);
						var m = dateTime.substr(3,2);
						var y = parseInt(dateTime.substr(6,4));
						if(y < 2100){
							y= y+543 ;
						}
						else if(y > 2700){
							y = y-543;
						}
						$('#departure').val(d+"/"+m+"/"+y);
					}
				}
    });  

	$('#arrival').datepicker({
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true, 
				beforeShow: function () { 
					var tmp = $('#arrival').val();
					if(tmp != "") {
						var d = tmp.substr(0,2);
						var m = tmp.substr(3,2);
						var y = parseInt(tmp.substr(6,4))-543;
						
						$('#arrival').val(d+"/"+m+"/"+y);
					}
				},
				onSelect: function (dateText, inst) {
					var d = dateText.substr(0,2);
					var m = dateText.substr(3,2);
					var y = parseInt(dateText.substr(6,4))+543;
					$('#arrival').val(d+"/"+m+"/"+y);
				},
				onClose: function(dateTime){
					
					if(dateTime != "") {
						var d = dateTime.substr(0,2);
						var m = dateTime.substr(3,2);
						var y = parseInt(dateTime.substr(6,4));
						if(y < 2100){
							y= y+543 ;
						}
						else if(y > 2700){
							y = y-543;
						}
						$('#arrival').val(d+"/"+m+"/"+y);
					}
				}
    });
	
});


</script>