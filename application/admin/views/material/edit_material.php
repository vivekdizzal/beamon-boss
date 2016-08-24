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
                        <a href="<?php echo site_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Add Material</li>
                </ol>
            </div>
        </header> -->
          <section id="content" class="form-layout">
            <!-- Column Center -->
           <div class="row">
             <div class="col-sm-6">
                 <div class="panel">
                 <?php echo $this->session->flashdata('response'); ?>

                    <form action="<?php echo site_url('tooling/edit_material/'.$get_record[0]['id']); ?>" method="post" id="edit_material">

                    <div class="form-group">
                        <label class="col-lg-12 control-label pt18">Material Name</label>
                        <div class="col-lg-12">
                             <input type="text" class="form-control" name="material_name" id="material_name" value="<?php echo $get_record[0]['material_name']; ?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 control-label pt18">Material Description</label>
                        <div class="col-lg-12">
                             <input type="text" class="form-control" name="material_description" id="material_description" value="<?php echo $get_record[0]['material_description']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 control-label pt18">Material Cost</label>
                        <div class="col-lg-12">
                             <input type="text" class="form-control" name="material_cost" id="material_cost" value="<?php echo $get_record[0]['cost']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <input type="submit" class="bg-success theme-add" value="Update Material" name="add_material" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                 </form>
            </div>
        </div>
</div>
 </br></br></br></br></br></br></br></br></br></br></br>

<script>
    $('#edit_material').validate({
        rules:{
            "material_name": {
                required: true,
                
            },
            "material_description":{
                required: true,
            },
            "material_cost":{
                required: true,
                number:true
            },
        },
        messages:{
            "material_name": {
                required: " Material Name is required",

            },
            "material_description":{
                required: "Description is required",
            },
            "material_cost":{
                required: "Cost of material is required",
                number: "Please enter only digit"
            },
        },

    });


    </script>

