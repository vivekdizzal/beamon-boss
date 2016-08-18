 <section id="content_wrapper">               
    
    <section id="content" class="form-layout">
            <!-- Column Center -->
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <form action="<?php echo  site_url('tooling/edit_markup/'.$records[0]["id"]); ?>" method="post">
                        <div class="form-group">
                            <label class="col-lg-12 control-label pt18">Markup Percentage</label>
                                <div class="col-lg-12">
                                   <input type="text" class="form-control" name="markup_percentage" id="markup_percentage" value="<?php echo $records[0]['markup_percentage']; ?>" />
                                </div>
                        </div>
                   
                        <div class="form-group">
                            <div class="col-lg-12 text-right">
                                <input type="submit" class="bg-success theme-add" value="Update" name="edit_markup" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>



