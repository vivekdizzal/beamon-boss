 <section id="content_wrapper">               
    <section id="content" class="form-layout">
            <!-- Column Center -->
        <div class="row">
             <div class="col-sm-6">
                 <div class="panel">
                        <?php echo $this->session->flashdata('response'); ?>
                        <form action="<?php echo site_url('tooling/edit_extra_material/'.$records[0]['id']); ?>" method="post" id="edit_extra_material">
                              <div class="form-group">
                                 <label class="col-lg-12 control-label pt18">Change Extra Material in inch</label>
                                     <div class="col-lg-12">	
                        	               <input type="text" name="extra_material_inch" value="<?php echo $records[0]['extra_material_inch']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 text-right">
                                    	<input type="submit" class="bg-success theme-add" name="add_extra_material_inch" value="Update">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                        </form>
                </div>
            </div>
    </div>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    <script>
        $('#edit_extra_material').validate({
            rules:{
                "extra_material_inch": {
                    required: true,
                    number: true
                    
                },
            },
            messages:{
                "extra_material_inch": {
                    required: "Extra Material is required",
                    number: "please enter only number"

                },
            },

        });
    </script>