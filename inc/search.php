
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
								
								<input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
								<input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
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
  
});
</script>