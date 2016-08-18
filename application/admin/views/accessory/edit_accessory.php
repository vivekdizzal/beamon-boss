 <section id="content_wrapper">               
      
        <!-- Topbar -->
       <!--  <header id="topbar" class="alt">
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
                    <li class="breadcrumb-current-item">Edit Accessory</li>
                </ol>
            </div>
        </header> -->
          <section id="content" class="form-layout">
            <!-- Column Center -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">

    				<form action="<?php echo site_url('tooling/edit_accessories/'.$get_record[0]['id']); ?>" method="post">
                             <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Name</label>
                                <div class="col-lg-12">
            			         	<input type="text" class="form-control" name="accessory_name" id="accessory_name" value="<?php echo $get_record[0]['accessory_name']; ?>" />
                                     </div>
                                </div>
                             <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Quantity</label>
                                <div class="col-lg-12">
            				        <input type="text" class="form-control" name="accessory_qty" id="accessory_qty" value="<?php echo $get_record[0]['accessory_qty']; ?>" />
                                </div>
                              </div>
                             <div class="form-group">
                             <label class="col-lg-12 control-label pt18">Cost</label>
                                <div class="col-lg-12">
            				        <input type="text" class="form-control" name="cost" id="cost" value="<?php echo $get_record[0]['accessory_cost']; ?>" />
                                 </div>
                              </div>

    				<input type="submit" name="edit_accessory" id="edit_accessory" value="Update" class="bg-success theme-add" />
    				</form>
                </div>
            </div>
		</div>