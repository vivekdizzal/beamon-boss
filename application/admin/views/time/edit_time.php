 <section id="content_wrapper">               
     <section id="content" class="form-layout">
            <!-- Column Center -->
           <div class="row">
             <div class="col-sm-6">
                 <div class="panel">
                 <?php echo $this->session->flashdata('response'); ?>
				<form action="<?php echo site_url('tooling/edit_time/'.$records[0]["id"]); ?>" method="post" id="edit_time">

					 <div class="form-group">
                        <label class="col-lg-12 control-label pt18">Name</label>
                        	<div class="col-lg-12">
									<input type="text" class="form-control" name="name" id="name" value="<?php echo $records[0]['name']; ?>" readonly />
							 </div>
                    </div>

					<div class="form-group">
                        <label class="col-lg-12 control-label pt18">Design Type</label>
                        	<div class="col-lg-12">
		          			  <input type="text" class="form-control" name="design_type" id="design_type" value="<?php echo $records[0]['design_complex']; ?>" readonly />
		          		   </div>
                    </div>

		          	<div class="form-group">
                        <label class="col-lg-12 control-label pt18">Cost (Per hour)</label>
                        	<div class="col-lg-12">
								<input type="text" class="form-control" name="cost" id="cost" value="<?php echo $records[0]['cost']; ?>" />
							 </div>
                    </div>
                     <div class="form-group">
                        <div class="col-lg-12 text-right">
							<input type="submit" class="bg-success theme-add" value="Update Time" id="edit_time" name="edit_time" />
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
    </div>
</div>
</br></br></br></br></br></br></br></br></br></br>
<script>
  $('#edit_time').validate({
    rules:{
      "name": {
        required: true,
        
      },
      "cost":{
        required: true,
        number:true,
      },
    },
    messages:{
      "name": {
        required: "Name is required",

      },
      "cost":{
        required: "Cost is required",
        number:"Please enter only number",
      },
    },

  });


</script>