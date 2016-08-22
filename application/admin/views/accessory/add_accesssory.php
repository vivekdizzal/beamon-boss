 <section id="content_wrapper">               
      
        <!-- Topbar -->
        <!-- <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="index.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Add Accessory</li>
                </ol>
            </div>
        </header> -->
       <section id="content" class="form-layout">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                        <form action="<?php echo site_url('tooling/add_accessories'); ?>" method="post" id="add_accessories">
                        <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Name</label>
                                <div class="col-lg-12">
                                     <input type="text" name="accessory_name" id="accessory_name" class="form-control" />
                            </div>
                        </div>
                         <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Quantity</label>
                                <div class="col-lg-12">
                                     <input type="text" name="accessory_qty" id="accessory_qty" class="form-control"/>
                                  </div>
                        </div>
                         <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Cost</label>
                                <div class="col-lg-12">
                                  <input type="" name="cost" id="cost" class="form-control"/>
                                </div>
                        </div>

                        <input type="submit" name="add_accessory" id="add_accessory" value="Add Accessories" class="bg-success theme-add" />
                        </form>
                    </div>
                </div>
            </div>

            <script>
            $("#add_accessories").validate({
				rules:{
					"accessory_name": {
						required: true,
						
					},
					"accessory_qty":{
						required: true,
					},
					"cost":{
						required: true,
					},
				},
				messages:{
					"accessory_name": {
						required: " Accessory Name is required",

					},
					"accessory_qty":{
						required: "Quantity is required",
					},
					"cost":{
						required: "Cost of material is required",
					},
				},
			});
</script>