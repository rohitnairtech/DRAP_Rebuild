
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2 class="page-header">All reports on this Task</h2>
	<div id="EarlierReports"  style='overflow:auto; width:100%;max-height:500px; overflow-x: hidden;'>
	
		
	<?php 
	if(empty($PreviousReports))
	{

		echo '	<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-info">
						 <strong>No Data Available!</strong> No reports to be found for this particular task.
						</div>
					</div>
				</div>
				';
	}
	else{
		foreach($PreviousReports as $row)
		{	
		echo '<div class="row">
					<div class="col-xs-2">
						<div class="well text-center">'.$row->reportingTime.'</div>
					</div>
					<div class="col-xs-2">
						<div class="well text-center">'.$row->Reported_by.'</div>
					</div>
					<div class="col-xs-8">
						<div class="well">'.$row->report_content.'</div>
					</div>
				</div>
			
				<br>'; 
		}
	}
	?>
			
		
			
		
	</div>
	<div id="alertZone">
		<div class="alert alert-danger text-center">
		  <strong>Do you want to flag this task as complete?</strong> This action is irreversible.<br><br>
		  <form method="post" action="<?php echo base_url(); ?>TaskStatus_Completed">
		  	<button type="submit" id="Task_Uid" name="Task_Uid" value="<?php echo $Uid;?>" class="btn btn-danger"> Task Completed </button>
		  </form>
		</div>
	</div>
	</div>
	</div>