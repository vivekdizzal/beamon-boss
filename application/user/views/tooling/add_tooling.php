<!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
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
                    <li class="breadcrumb-current-item">New Tooling</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <div class="" id="content">
            <div class="row">

                <div class="col-md-12">

                    <!-- Standard Fields -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">Tooling Quotes</span>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal">
								<div class="row">
									<div class="col-sm-12">
										<div class="tab-block mb25">
											<ul class="nav nav-tabs tooling-select">
												<li class="active-tooling">
													<div class="radio-custom mb5">
														<input id="Standard" checked="" name="radioExample" type="radio">
														<label for="Standard">Standard Quote</label>
													</div>
												</li>
												<li>
													<div class="radio-custom mb5">
														<input id="Custom" name="radioExample" type="radio">
														<label for="Custom">Custom Quote</label>
													</div>
												</li>
											</ul>
											<div class="tab-content padd-none p25 tolling-content">
												<div id="tab6_1" class="tab-pane active">
													<div class="form-group">
														<label class="col-lg-2 control-label">Type of fixtures:</label>
														<div class="col-lg-4">
															<div class="">
																<select class="form-control">
																	
																	<?php
																		foreach($fixture_list as $fixture)
																		{
																			echo "<option value=".$fixture['id'].">".$fixture['fixture_name']."</option>";
																		}
																	?>
																	<option>Others</option>
																</select>
															</div>
														</div>
													</div>
													<table class="table boss-table">
														<tr>
															<td colspan="5">
																<b>MATERIAL:</b>
															</td>
															<td width="100"><b>$243.33</b></td>
														</tr>
														<tr>
															<th width="20%">Type</th><th>Size - X in Inch</th><th width="130">Size - Y in Inch</th><th>Extra Material in inch</th><th>Mark-up</th><th>Cost</th>
														</tr>
														<tr>
															<td>Material-1:</td><td colspan="5"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
														</tr>
														<tr>
															<td>Material-2:</td><td colspan="5"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
														</tr>
														<tr>
															<td>Material-3:</td><td><span class="pull-left append-add"><i class="fa fa-plus-square"></i></span></td><td colspan="4"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
														</tr>
														<tr>
															<td>Others</td>
															<td><span class="pull-left append-add"><i class="fa fa-plus-square"></i></span></td>
															<td colspan="3"></td>
															<td></td>
														</tr>
													</table>
													<table class="table boss-table add_extra_append">
														<tr>
															<td>
																<b>EXTRAS:</b>
															</td>
															<td colspan="2"><span class="pull-left append-add"><i class="fa fa-plus-square add_extra"></i></span></td>
															<td width="100"><b>$0.00</b></td>
														</tr>
														<tr>
															<th width="20%">Item</th><th>Cost/Unit</th><th>Qty</th><th>Cost</th>
														</tr>
			<?php
				/* Dynamically display others accesssories here*/
				foreach($accessories_list as $accessories)
				{
			?>
				<tr>
					<td>
						<?php echo $accessories['accessory_name']; ?>
					</td>
					<td>
					<div class="price-update table-price-update">
						<div class="show-price">$<span><?php echo $accessories['accessory_cost']; ?> <a href="#" class="Edit-price">Edit</a></span></div>
						<div class="update-price" style="display:none;">
							<input type="text" value="<?php echo $accessories['accessory_cost']; ?>" class="get-value form-control pull-left auto-width-text">
							<a href="#" class="pull-left padd-top save-price">Save</a>
						</div>
					</div>
				</td>
				<td>
					<b>$18</b>
				</td>
				<td>
					<b>$18</b>
				</td>
				<tr>
															
			<?php
				}	

			?>


														<tr>
															<td>
																Clamps
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
															<tr>
															<td>
																Pressure Clips
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
															<tr>
															<td>
																Pins
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
														</tr>
													</table>
													<table class="table">
														<tr>
															<td colspan="5">
																<b>TIME:</b>
															</td>
															<td width="100"><b>$105.00</b></td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th></th><th></th><th colspan="2">Standard Design - India</th><th colspan="2">Complex Design - CA</th><th></th>
														</tr>
														<tr>
															<th></th><th>Unit/hr.</th><th colspan="2">Time</th><th colspan="2">Time</th><th width="100">Cost</th>
														</tr>
														<tr>
															<th></th><th></th><th>Hrs</th><th>Mins</th><th>Hrs</th><th>Mins</th><th></th>
														</tr>
														<tr>
															<td>Design </td>
															<td>$<?php echo $standard_timing[0]['cost']; ?> </td>
															<td><input type="text" value="1" class="form-control"></td>
															<td><input type="text" value="10" class=" form-control "></td>
															<td><input type="text" value="" class="form-control"></td>
															<td><input type="text" value="" class=" form-control" ></td>
															<td>$60.00 </td>
														</tr>
														<tr>
															<td>Machine  </td>
															<td>$<?php echo $standard_timing[1]['cost']; ?> </td>
															<td><input type="text" value="1" class="form-control "></td>
															<td><input type="text" value="20" class=" form-control"> </td>
															<td><input type="text" value="" class=" form-control"> </td>
															<td><input type="text" value="" class=" form-control"> </td>
															<td>$45.00 </td>
														</tr>
														<tr>
															<td>Assembly  </td>
															<td>$<?php echo $standard_timing[2]['cost']; ?> </td>
															<td><input type="text" value="" class=" form-control"></td>
															<td><input type="text" value="" class="form-control "> </td>
															<td><input type="text" value="" class="form-control "></td>
															<td><input type="text" value="" class="form-control "></td>
															<td>$0.00 </td>
														</tr>
														<tr>
															<td>Others </td>
															<td><input type="text" value="" class=" form-control"></td>
															<td><input type="text" value="" class="form-control "> </td>
															<td><input type="text" value="" class="form-control "></td>
															<td><input type="text" value="" class="form-control "></td>
															<td><input type="text" value="" class="form-control "></td>
															<td>$0.00 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td>Units:</td>
															<td>1 </td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td>Total:</td>
															<td>$353 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Premium</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" value="10%" class="form-control"></td>
															<td>$35.3 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Discount</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" value="10%" class="form-control"></td>
															<td>$35.3 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td><b>Total:</b></td>
															<td><b>$353</b> </td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th><b>Multiple Quotes:</b></th><th width="100"><b>Cost</b></th>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample3" name="radioExample" type="radio" value="2">
																	<label for="radioExample3">2</label>
																</div>
															</td>
															<td>$645</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample4" name="radioExample" type="radio" value="3">
																	<label for="radioExample4">3</label>
																</div>
															</td>
															<td>$940</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample5" name="radioExample" type="radio" value="4">
																	<label for="radioExample5">4</label>
																</div>
															</td>
															<td>$1230</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample6" name="radioExample" type="radio" value="5">
																	<label for="radioExample6">5</label>
																</div>
															</td>
															<td>$1530</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample7" name="radioExample" type="radio" value="10">
																	<label for="radioExample7">10</label>
																</div>
															</td>
															<td>$3000</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample8" name="radioExample" type="radio" value="15">
																	<label for="radioExample8">15</label>
																</div>
															</td>
															<td>$4450</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample9" name="radioExample" type="radio" value="20">
																	<label for="radioExample9">20</label>
																</div>
															</td>
															<td>$5925</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample10" name="radioExample" type="radio">
																	<label for="radioExample10">Other</label>
																	<input type="text" value="" id="radio_id" class="form-control radio_other" name="custom_quote">
																</div>
															</td>
															<td></td>
														</tr>
													</table>
													

													<textarea class="form-control" id="textArea2" rows="3" placeholder="Notes: Customer will recieve this notes"></textarea>
													<div class="form-buttons text-right">
														<button class="btn btn-default ph25" type="submit">Update</button><button class="btn btn-default ph25" type="submit">Send Evalution</button><button class="green btn btn-default ph25" type="submit">Send Final</button>
													</div>

												</div>
												<div id="tab6_2" class="tab-pane">
													<div class="form-group">
														<label class="col-lg-2 control-label">Type of fixtures:</label>
														<div class="col-lg-4">
															<div class="">
																<select class="form-control">
																		<option>Selective Wave Fixture</option>
																	<option>Press Fit Fixture</option>
																	<option>X-Ray Fixture</option>
																	<option>Others</option>
																</select>
															</div>
														</div>
													</div>
													<table class="table boss-table">
														<tr>
															<td colspan="5">
																<b>MATERIAL:</b>
															</td>
															<td width="200"><b>$243.33</b></td>
														</tr>
														<tr>
															<th width="20%">Type</th><th>Size - X in Inch</th><th width="130">Size - Y in Inch</th><th>Extra Material in inch</th><th>Mark-up</th><th>Cost</th>
														</tr>
														<tr>
															<td>Material-1:</td><td colspan="5"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td>Material-2:</td><td colspan="5"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td>Material-3:</td><td><span class="pull-left append-add"><i class="fa fa-plus-square"></i></span></td><td colspan="4"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td>Others</td><td><span class="pull-left append-add"><i class="fa fa-plus-square"></i></span></td><td colspan="3"></td><td>$18</td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<td>
																<b>EXTRAS:</b>
															</td>
															<td colspan="2"><span class="pull-left append-add"><i class="fa fa-plus-square"></i></span></td>
															<td width="100"><b>$0.00</b></td>
														</tr>
														<tr>
															<th width="20%">Item</th><th>Cost/Unit</th><th>Qty</th><th>Cost</th>
														</tr>
														<tr>
															<td>
																Clamps
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
															<tr>
															<td>
																Pressure Clips
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
															<tr>
															<td>
																Pins
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price">$<span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<div class="show-price"><span>18 <a href="#" class="Edit-price">Edit</a></span></div>
																	<div class="update-price" style="display:none;">
																		<input type="text" value="18" class="get-value form-control pull-left auto-width-text">
																		<a href="#" class="pull-left padd-top save-price">Save</a>
																	</div>
																</div>
															</td>
															<td>
																<b>$18</b>
															</td>
														</tr>
													</table>
													<table class="table">
														<tr>
															<td colspan="5">
																<b>TIME:</b>
															</td>
															<td width="100"><b>$105.00</b></td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th></th><th></th><th colspan="2">Standard Design - India</th><th colspan="2">Complex Design - CA</th><th></th>
														</tr>
														<tr>
															<th></th><th>Unit/hr.</th><th colspan="2">Time</th><th colspan="2">Time</th><th width="100">Cost</th>
														</tr>
														<tr>
															<th></th><th></th><th>Hrs</th><th>Mins</th><th>Hrs</th><th>Mins</th><th></th>
														</tr>
														<tr>
															<td>Design </td>
															<td>$<?php echo $standard_timing[0]['cost']; ?> </td>
															<td><input type="text" value="1" class="form-control"></td>
															<td><input type="text" value="10" class=" form-control "></td>
															<td><input type="text" value="" class="form-control"></td>
															<td><input type="text" value="" class=" form-control" ></td>
															<td>$60.00 </td>
														</tr>
														<tr>
															<td>Machine  </td>
															<td>$<?php echo $standard_timing[1]['cost']; ?> </td>
															<td><input type="text" value="1" class="form-control "></td>
															<td><input type="text" value="20" class=" form-control"> </td>
															<td><input type="text" value="" class=" form-control"> </td>
															<td><input type="text" value="" class=" form-control"> </td>
															<td>$45.00 </td>
														</tr>
														<tr>
															<td>Assembly  </td>
															<td>$<?php echo $standard_timing[2]['cost']; ?></td>
															<td><input type="text" value="" class=" form-control"></td>
															<td><input type="text" value="" class="form-control "> </td>
															<td><input type="text" value="" class="form-control "></td>
															<td><input type="text" value="" class="form-control "></td>
															<td>$0.00 </td>
														</tr>
														<tr>
															<td colspan="6">Others </td>
															<td>$0.00 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td>Units:</td>
															<td>1 </td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td>Total:</td>
															<td>$353 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Premium</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" value="10%" class="form-control"></td>
															<td>$35.3 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Discount</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" value="10%" class="form-control"></td>
															<td>$35.3 </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td><b>Total:</b></td>
															<td><b>$353</b> </td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th><b>Multiple Quotes:</b></th><th width="100"><b>Cost</b></th>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample3" name="radioExample" type="radio" value="2">
																	<label for="radioExample3">2</label>
																</div>
															</td>
															<td>$645</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample4" name="radioExample" type="radio" value="3">
																	<label for="radioExample4">3</label>
																</div>
															</td>
															<td>$940</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample5" name="radioExample" type="radio" value="4">
																	<label for="radioExample5">4</label>
																</div>
															</td>
															<td>$1230</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample6" name="radioExample" type="radio" value="5" >
																	<label for="radioExample6">5</label>
																</div>
															</td>
															<td>$1530</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample7" name="radioExample" type="radio" value="10" >
																	<label for="radioExample7">10</label>
																</div>
															</td>
															<td>$3000</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample8" name="radioExample" type="radio" value="15">
																	<label for="radioExample8">15</label>
																</div>
															</td>
															<td>$4450</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample9" name="radioExample" type="radio" value="20">
																	<label for="radioExample9">20</label>
																</div>
															</td>
															<td>$5925</td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="radioExample10" name="radioExample" type="radio">
																	<label for="radioExample10">Other</label>
																	<input type="text" value="" id="radio_id" class="form-control radio_other" name="custom_quote">
																</div>
															</td>
															<td></td>
														</tr>
													</table>
													

													<textarea class="form-control" id="textArea2" rows="3" placeholder="Notes: Customer will recieve this notes"></textarea>
													<div class="form-buttons text-right">
														<button class="btn btn-default ph25" type="submit">Update</button><button class="btn btn-default ph25" type="submit">Send Evalution</button><button class="green btn btn-default ph25" type="submit">Send Final</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>