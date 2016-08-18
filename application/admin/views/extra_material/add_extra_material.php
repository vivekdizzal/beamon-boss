 <section id="content_wrapper">               
           <section id="content" class="form-layout">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
						<form action="<?php echo site_url('tooling/add_extra_material'); ?>" method="post">
							<div class="form-group">
                                 <label class="col-lg-12 control-label pt18">Extra Material in inch</label>
                                    <div class="col-lg-12">	
										<input type="text" name="extra_material_inch" />
									</div>
							</div>
							<div class="form-group">
                                <div class="col-lg-12 text-right">
									<input type="submit" name="add_extra_material_inch" value="Add Extra Material" class="bg-success theme-add">
								</div>
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>