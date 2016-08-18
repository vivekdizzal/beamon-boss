 <section id="content_wrapper">               
      
        
          <section id="content" class="form-layout">
            <!-- Column Center -->
           <div class="row">
             <div class="col-sm-6">
                 <div class="panel">
                <form action="<?php echo site_url('tooling/edit_fixture/'.$get_record[0]['id']); ?>" method="post">

                    <div class="form-group">
                        <label class="col-lg-12 control-label pt18">Name</label>
                            <div class="col-lg-12">	
                	           <input type="text" class="form-control" name="fixture_name" value="<?php echo $get_record[0]['fixture_name']; ?>" />
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-lg-12 control-label pt18">Description(optional)</label>
                                <div class="col-lg-12">
                	               <h2></h2>
                	               <input type="text" class="form-control" name="fixture_description" value="<?php echo $get_record[0]['fixture_description']; ?>" />
                                </div>
                    </div>
                     <div class="form-group">
                        <div class="col-lg-12 text-right">
                	       <input type="submit" class="bg-success theme-add" name="edit_fixture" value="Update Fixture">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
</div>