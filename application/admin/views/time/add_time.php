 <section id="content_wrapper">               
         <section id="content" class="form-layout">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                		<form action="<?php echo site_url('tooling/add_time'); ?>" method="post" id="add_time">
                            <div class="form-group">
                                 <label class="col-lg-12 control-label pt18">Name</label>
                                     <div class="col-lg-12">
                					     <input type="text" name="name" id="name" class="form-control" >
                                    </div>
                              </div>

                            <div class="form-group">
                                 <label class="col-lg-12 control-label pt18">Design Type</label>
                                    <div class="col-lg-12">
                        
                                        <select name="design_type" class="form-control">
                                            <option>Standard Design</option>
                                            <option>Complex Design</option>
                                        </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-lg-12 control-label pt18">Cost (Per hour)</label>
                                    <div class="col-lg-12">
                			              <input type="text" name="add_time" id="add_time" class="form-control" >
                			          </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-lg-12 text-right">
                			             <input type="submit" value="Add Time" id="add_time" class="bg-success theme-add" />
                                 </div>
                            </div>
                            <div class="clearfix"></div>
                		</form>
                </div>
        </div>
</div>

<script>
  $('#add_time').validate({
    rules:{
      "name": {
        required: true,
        
      },
      "add_time":{
        required: true,
      },
    },
    messages:{
      "name": {
        required: " Material Name is required",

      },
      "add_time":{
        required: "Description is required",
      },
    },

  });


</script>

