 <section id="content_wrapper">               
      
        <!-- Topbar -->
        
          <section id="content" class="form-layout">
          	<div class="row">
				<div class="col-sm-6">
					<div class="panel">
						<form action="<?php echo site_url('tooling/add_fixture'); ?>" method="post" id="add_fixture">
							<div class="form-group">
								<label class="col-lg-12 control-label pt18">Fixture Name</label>
									<div class="col-lg-12">	
										<input type="text" name="fixture_name" class="form-control" >
									</div>
							</div>
							<div class="form-group">
								<label class="col-lg-12 control-label pt18">Description(optional)</label>
									<div class="col-lg-12">
						
										<input type="text" name="fixture_description" class="form-control" >
									</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12 text-right">
									<input type="submit" name="add_fixture" value="Add Fixture" class="bg-success theme-add">
								</div>
							</div>
							<div class="clearfix"></div>
						</form>
				</div>
		</div>
	</div>

	<script>
		$('#add_fixture').validate({
		rules:{
			"fixture_name": {
				required: true,
				
			},
		},
		messages:{
			"fixture_name": {
				required: "Fixture Name is required",

			},
		},

	});


	</script>