<section id="content_wrapper">               

<section id="content" class="form-layout">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel">
				<form action="<?php echo  site_url('tooling/add_material'); ?>" method="post">
				<!--p>Material Name </p>
				<input type="text" name="material_name" id="material_name" /></br>
				<p>Material Description </p>
				<input type="text" name="material_description" id="material_description" /></br>
				<p>Material Cost </p>
				<input type="text" name="material_cost" id="material_cost" /></br></br></br>
				<input type="submit" value="Add Material" name="add_material" /-->
				
					<div class="form-group">
						<label class="col-lg-12 control-label pt18">Material Name</label>
						<div class="col-lg-12">
							<input type="text" name="material_name" id="material_name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 control-label pt18">Material Description</label>
						<div class="col-lg-12">
							<input type="text" name="material_description" id="material_description" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 control-label pt18">Material Cost</label>
						<div class="col-lg-12">
							<input type="text" name="material_cost" id="material_cost" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12 text-right">
							<input type="submit" value="Add Material" name="add_material" class="bg-success theme-add" />
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>



