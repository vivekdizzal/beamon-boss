<?php
	error_reporting('E_ALL');
?>

     <script type="text/javascript">
				
	</script>

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

                           <!--  <form class="form-horizontal" method="post" id="add_new_tooling" action="<?php echo base_url('tooling/add_tooling'); ?>"> -->
								<div class="row">
									<div class="col-sm-12">
										<div class="tab-block mb25">
											<ul class="nav nav-tabs tooling-select">
												<li class="active-tooling">
													<div class="radio-custom mb5">
														<input id="Standard" checked="" name="tooling_type" type="radio" value="0">
														<label for="Standard">Standard Quote</label>
													</div>
												</li>
												<li>
													<div class="radio-custom mb5">
														<input id="Custom" name="tooling_type" type="radio" value="1">
														<label for="Custom">Custom Quote</label>
													</div>
												</li>
											</ul>
									<form class="form-horizontal" method="post" id="add_new_tooling" action="<?php echo base_url('tooling/add_tooling'); ?>">
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
													<table class="table boss-table field-wrapper">
														<tr>
															<td colspan="3">
																<b>MATERIAL:</b>
															</td>
															<td width="100"><b></b></td>
														</tr>
														<tr>
															<th width="20%">Type</th><th width="25%">Size - X in Inch</th><th width="25%">Size - Y in Inch</th><th width="20%">Cost</th>
														</tr>
														
														
														<tr>
															<td>Material-1:</td><td><span class="pull-left append-add"><i class="fa fa-plus-square add-material"></i></span></td><td colspan="3"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control"  name="tooling_material_select[]" id="tooling_material_select0">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option value='".$material['id']."' data-status='".$material['cost']."'>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<input type="text" value="" id="material_xvalue[0]" name="material_xvalue[0]" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_xvalue[]">
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<input type="text" value="" id="material_yvalue[0]" name="material_yvalue[0]" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_yvalue[]">
																</div>
															</td>
															<td>
																<b><div><span id="material_total_cost0"></span></div></b>
															</td>

														</tr>
														</table>
														<table class="table boss-table add_extra">
														<tr>
															<td>Others</td>
															<td><span class="pull-left "><i class="fa fa-plus-square append-add-extra"></i></span></td>
															<td colspan="3"></td>
															<!-- <td></td> -->
														</tr>
													</table>
													<table class="table boss-table tooling-extra-append">
														<tr>
															<td>
																<b>EXTRAS:</b>
															</td>
															<td colspan="2"><span class="pull-left"><i class="fa fa-plus-square tooling-extra"></i></span></td>
															<td width="100"><b>$0.00</b></td>
														</tr>
														<tr>
															<th width="20%">Item</th><th width="25%">Cost/Unit</th><th width="25%">Qty</th><th width="20%">Cost</th>
														</tr>
			<?php
				/* Dynamically display others accesssories here*/
				$accessory_count = 0;
				foreach($accessories_list as $accessories)
				{
			?>
				<tr>
					<td>
						<?php echo $accessories['accessory_name']; ?>
						<input type="hidden" name="tooling_accessory_name[]" value="<?php echo $accessories['id']; ?>" />
					</td>
					<td>
					<div class="price-update table-price-update">
					
						<input type="text" class="form-control input-tooling" name="extra_cost[]" value="<?php echo $accessories['accessory_cost']; ?>" >
					</div>
				</td>
				<td>
					<input type="text" class="form-control input-tooling" name="extra_qty[]" value="" >
				</td>
				<td>
					<b><span id="extra_accessory_<?php echo $accessory_count; ?>"></span></b>
				</td>
				</tr>
															
			<?php
				$accessory_count++;
				}	

			?>


											</table>
													<table class="table">
														<tr>
															<td colspan="5">
																<b>TIME:</b>
															</td>
															<td width="100"><b></b></td>
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
															<td><span id="std_design_cost" value="<?php echo $standard_timing[0]['cost']; ?>">$<?php echo $standard_timing[0]['cost']; ?></span></td>
															<td><input type="text" value="" name="std_design_hr" class="form-control"></td>
															<td><input type="text" value="" id="std_design_min" name="std_design_min" class="form-control validate[max[59]]"></td>
															<td><input type="text" value="" name="cpx_design_hr" class="form-control"></td>
															<td><input type="text" value="" name="cpx_design_min" id="cpx_design_min" class=" form-control validate[max[59]]" ></td>
															<td><b><span id="total_cost_design"></span></b> </td>
														</tr>
														<tr>
															<td>Machine  </td>
															<td><span id="std_machine_cost" value="<?php echo $standard_timing[1]['cost']; ?>">$<?php echo $standard_timing[1]['cost']; ?> </span></td>
															<td><input type="text" name="std_machine_hr" class="form-control"></td>
															<td><input type="text" name="std_machine_min" id="std_machine_min" class=" form-control validate[max[59]]"> </td>
															<td><input type="text" name="cpx_machine_hr" class=" form-control"> </td>
															<td><input type="text" name="cpx_machine_min" id="cpx_machine_min" class="form-control validate[max[59]]"> </td>
															<td><b><span id="total_cost_machine"></span></b> </td>
														</tr>
														<tr>
															<td>Assembly  </td>
															<td><span id="std_assembly_cost" value="<?php echo $standard_timing[2]['cost']; ?>">$<?php echo $standard_timing[2]['cost']; ?></span> </td>
															<td><input type="text" name="std_assembly_hr" class=" form-control"></td>
															<td><input type="text" name="std_assembly_min" id="std_assembly_min" class="form-control  validate[max[59]]"> </td>
															<td><input type="text" name="cpx_assembly_hr" class="form-control "></td>
															<td><input type="text" name="cpx_assembly_min" id="cpx_assembly_min" class="form-control validate[max[59]]"></td>
															<td><b><span id="total_cost_assembly"></span></b> </td>
														</tr>
														<tr>
															<td>Others </td>
															<td><input type="text" name="time_other_name"  class=" form-control"></td>
															<td><input type="text" name="std_other_hr" class="form-control "> </td>
															<td><input type="text" name="std_other_min" class="form-control "></td>
															<td><input type="text" name="cpx_other_hr" class="form-control "></td>
															<td><input type="text" name="cpx_other_min" class="form-control "></td>
															<td><b><span id="total_cost_other"></span> </b> </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td>Units:</td>
															<td><b><span id="total_unit"></span></b> </td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td>Total:</td>
															<td><b><span id="total_tooling_cost_wor"></span></b></td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Premium</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" name="tooling_premium" id="tooling_premium" value="" class="form-control"></td>
															<td><span id="total_tooling_premium"></span> </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Discount</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" name="tooling_discount" id="tooling_discount" value="" class="form-control"></td>
															<td><b><span id="total_tooling_discount"></span></b></td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td><b>Total:</b></td>
															<td><b><span id="total_after_discount"></span></b> </td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th><b>Multiple Quotes:</b></th><th width="100"><b>Cost</b></th>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_2" name="multiple_quote" type="radio" value="2">
																	<label for="multiple_quote_2">2</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_2" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_3" name="multiple_quote" type="radio" value="3">
																	<label for="multiple_quote_3">3</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_3" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_4" name="multiple_quote" type="radio" value="4">
																	<label for="multiple_quote_4">4</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_4" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_5" name="multiple_quote" type="radio" value="5">
																	<label for="multiple_quote_5">5</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_5" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_6" name="multiple_quote" type="radio" value="10">
																	<label for="multiple_quote_6">10</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_10" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_7" name="multiple_quote" type="radio" value="15">
																	<label for="multiple_quote_7">15</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_15" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_8" name="multiple_quote" type="radio" value="20">
																	<label for="multiple_quote_8">20</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_20" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_other" name="multiple_quote" type="radio" value="other">
																	<label for="multiple_quote_other">Other</label>
																	<input type="text" value="" id="mul_quote_text" class="form-control radio_other" name="custom_quote_std">
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_other" class="multiple_quote_cost"></span></b></td>
														</tr>
													</table>
													

													<textarea class="form-control" id="tooling_description" name="tooling_description" rows="3" placeholder="Notes: Customer will recieve this notes"></textarea>
													<div class="form-buttons text-right">
														<button class="btn btn-default ph25" value="tooling_calculate" type="button" onclick="calculate();">Calculate</button>
														<button class="btn btn-default ph25" value="tooling_update" type="submit">Update</button>
														<button class="btn btn-default ph25" value="tooling_send_evaluation"  type="submit">Send Evalution</button>
														<button class="green btn btn-default ph25" value="tooling_send_final" type="submit">Send Final</button>
													</div>

												</div>
												<input type="hidden" name="markup" value="<?php echo $mark_up[0]['markup_percentage']; ?>" >
												<input type="hidden" name="extra_material" value="<?php echo $tooling_extra_material_inch[0]['extra_material_inch']; ?>" >
												<input type="hidden" name="complex_design_cost" id="complex_design_cost" value="<?php echo $complex_timing[0]['cost']; ?>">
												<input type="hidden" name="complex_machine_cost" id="complex_machine_cost" value="<?php echo $complex_timing[1]['cost']; ?>">
												<input type="hidden" name="complex_assembly_cost" id="complex_assembly_cost" value="<?php echo $complex_timing[2]['cost']; ?>">
												<input type="hidden" name="standard_design_cost" id="complex_design_cost" value="<?php echo $standard_timing[0]['cost']; ?>">
												<input type="hidden" name="standard_machine_cost" id="complex_machine_cost" value="<?php echo $standard_timing[1]['cost']; ?>">
												<input type="hidden" name="standard_assembly_cost" id="complex_assembly_cost" value="<?php echo $standard_timing[2]['cost']; ?>">
												<input type="hidden" name="quote_id" value="<?php echo $quote_id; ?>" >
 											
												
											</div>
										</form>

											<form class="form-horizontal" method="post" id="add_new_tooling" action="<?php echo base_url('tooling/add_tooling1'); ?>">
											<div class="tab-content padd-none p25 tolling-content">
												<div id="tab6_2" class="tab-pane active">
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
													<table class="table boss-table field-wrapper">
														<tr>
															<td colspan="3">
																<b>MATERIAL:</b>
															</td>
															<td width="100"><b></b></td>
														</tr>
														<tr>
															<th width="20%">Type</th><th width="25%">Size - X in Inch</th><th width="25%">Size - Y in Inch</th><th width="20%">Cost</th>
														</tr>
														
														
														<tr>
															<td>Material-1:</td><td><span class="pull-left append-add"><i class="fa fa-plus-square add-material"></i></span></td><td colspan="3"></td>
														</tr>
														<tr>
															<td>
																<select class="form-control"  name="tooling_material_select[]" id="tooling_material_select0">
																	<?php 
																		foreach($material_list as $material)
																		{
																			echo "<option value='".$material['id']."' data-status='".$material['cost']."'>".$material['material_name']."</option>";
																		}

																	?>
																</select>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<input type="text" value="" id="material_xvalue[0]" name="material_xvalue[0]" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_xvalue[]">
																</div>
															</td>
															<td>
																<div class="price-update table-price-update">
																	<input type="text" value="" id="material_yvalue[0]" name="material_yvalue[0]" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_yvalue[]">
																</div>
															</td>
															<td>
																<b><div><span id="material_total_cost0"></span></div></b>
															</td>

														</tr>
														</table>
														<table class="table boss-table add_extra">
														<tr>
															<td>Others</td>
															<td><span class="pull-left "><i class="fa fa-plus-square append-add-extra"></i></span></td>
															<td colspan="3"></td>
															<!-- <td></td> -->
														</tr>
													</table>
													<table class="table boss-table tooling-extra-append">
														<tr>
															<td>
																<b>EXTRAS:</b>
															</td>
															<td colspan="2"><span class="pull-left"><i class="fa fa-plus-square tooling-extra"></i></span></td>
															<td width="100"><b>$0.00</b></td>
														</tr>
														<tr>
															<th width="20%">Item</th><th width="25%">Cost/Unit</th><th width="25%">Qty</th><th width="20%">Cost</th>
														</tr>
			<?php
				/* Dynamically display others accesssories here*/
				$accessory_count = 0;
				foreach($accessories_list as $accessories)
				{
			?>
				<tr>
					<td>
						<?php echo $accessories['accessory_name']; ?>
						<input type="hidden" name="tooling_accessory_name[]" value="<?php echo $accessories['id']; ?>" />
					</td>
					<td>
					<div class="price-update table-price-update">
					
						<input type="text" class="form-control input-tooling" name="extra_cost[]" value="<?php echo $accessories['accessory_cost']; ?>" >
					</div>
				</td>
				<td>
					<input type="text" class="form-control input-tooling" name="extra_qty[]" value="" >
				</td>
				<td>
					<b><span id="extra_accessory_<?php echo $accessory_count; ?>"></span></b>
				</td>
				</tr>
															
			<?php
				$accessory_count++;
				}	

			?>


											</table>
													<table class="table">
														<tr>
															<td colspan="5">
																<b>TIME:</b>
															</td>
															<td width="100"><b></b></td>
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
															<td><span id="std_design_cost" value="<?php echo $standard_timing[0]['cost']; ?>">$<?php echo $standard_timing[0]['cost']; ?></span></td>
															<td><input type="text" value="" name="std_design_hr" class="form-control"></td>
															<td><input type="text" value="" id="std_design_min" name="std_design_min" class="form-control validate[max[59]]"></td>
															<td><input type="text" value="" name="cpx_design_hr" class="form-control"></td>
															<td><input type="text" value="" name="cpx_design_min" id="cpx_design_min" class=" form-control validate[max[59]]" ></td>
															<td><b><span id="total_cost_design"></span></b> </td>
														</tr>
														<tr>
															<td>Machine  </td>
															<td><span id="std_machine_cost" value="<?php echo $standard_timing[1]['cost']; ?>">$<?php echo $standard_timing[1]['cost']; ?> </span></td>
															<td><input type="text" name="std_machine_hr" class="form-control"></td>
															<td><input type="text" name="std_machine_min" id="std_machine_min" class=" form-control validate[max[59]]"> </td>
															<td><input type="text" name="cpx_machine_hr" class=" form-control"> </td>
															<td><input type="text" name="cpx_machine_min" id="cpx_machine_min" class="form-control validate[max[59]]"> </td>
															<td><b><span id="total_cost_machine"></span></b> </td>
														</tr>
														<tr>
															<td>Assembly  </td>
															<td><span id="std_assembly_cost" value="<?php echo $standard_timing[2]['cost']; ?>">$<?php echo $standard_timing[2]['cost']; ?></span> </td>
															<td><input type="text" name="std_assembly_hr" class=" form-control"></td>
															<td><input type="text" name="std_assembly_min" id="std_assembly_min" class="form-control  validate[max[59]]"> </td>
															<td><input type="text" name="cpx_assembly_hr" class="form-control "></td>
															<td><input type="text" name="cpx_assembly_min" id="cpx_assembly_min" class="form-control validate[max[59]]"></td>
															<td><b><span id="total_cost_assembly"></span></b> </td>
														</tr>
														<tr>
															<td>Others </td>
															<td><input type="text" name="time_other_name"  class=" form-control"></td>
															<td><input type="text" name="std_other_hr" class="form-control "> </td>
															<td><input type="text" name="std_other_min" class="form-control "></td>
															<td><input type="text" name="cpx_other_hr" class="form-control "></td>
															<td><input type="text" name="cpx_other_min" class="form-control "></td>
															<td><b><span id="total_cost_other"></span> </b> </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td>Units:</td>
															<td><b><span id="total_unit"></span></b> </td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td>Total:</td>
															<td><b><span id="total_tooling_cost_wor"></span></b></td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Premium</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" name="tooling_premium" id="tooling_premium" value="" class="form-control"></td>
															<td><span id="total_tooling_premium"></span> </td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td colspan="2">Discount</td>
														</tr>	
														<tr>
															<td colspan="5"> </td>
															<td><input type="text" name="tooling_discount" id="tooling_discount" value="" class="form-control"></td>
															<td><b><span id="total_tooling_discount"></span></b></td>
														</tr>
														<tr>
															<td colspan="5"> </td>
															<td><b>Total:</b></td>
															<td><b><span id="total_after_discount"></span></b> </td>
														</tr>
													</table>
													<table class="table boss-table">
														<tr>
															<th><b>Multiple Quotes:</b></th><th width="100"><b>Cost</b></th>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_2" name="multiple_quote" type="radio" value="2">
																	<label for="multiple_quote_2">2</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_2" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_3" name="multiple_quote" type="radio" value="3">
																	<label for="multiple_quote_3">3</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_3" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_4" name="multiple_quote" type="radio" value="4">
																	<label for="multiple_quote_4">4</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_4" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_5" name="multiple_quote" type="radio" value="5">
																	<label for="multiple_quote_5">5</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_5" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_6" name="multiple_quote" type="radio" value="10">
																	<label for="multiple_quote_6">10</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_10" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_7" name="multiple_quote" type="radio" value="15">
																	<label for="multiple_quote_7">15</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_15" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_8" name="multiple_quote" type="radio" value="20">
																	<label for="multiple_quote_8">20</label>
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_20" class="multiple_quote_cost"></span></b></td>
														</tr>
														<tr>
															<td>
																<div class="radio-custom mb5">
																	<input id="multiple_quote_other" name="multiple_quote" type="radio" value="other">
																	<label for="multiple_quote_other">Other</label>
																	<input type="text" value="" id="mul_quote_text" class="form-control radio_other" name="custom_quote_std">
																</div>
															</td>
															<td><b><span id="multiple_quote_cost_other" class="multiple_quote_cost"></span></b></td>
														</tr>
													</table>
													

													<textarea class="form-control" id="tooling_description" name="tooling_description" rows="3" placeholder="Notes: Customer will recieve this notes"></textarea>
													<div class="form-buttons text-right">
														<button class="btn btn-default ph25" value="tooling_calculate" type="button" onclick="calculate();">Calculate</button>
														<button class="btn btn-default ph25" value="tooling_update" type="submit">Update</button>
														<button class="btn btn-default ph25" value="tooling_send_evaluation"  type="submit">Send Evalution</button>
														<button class="green btn btn-default ph25" value="tooling_send_final" type="submit">Send Final</button>
													</div>

												</div>

												<!-- start of code-->






												<!-- -->





												<input type="hidden" name="markup" value="<?php echo $mark_up[0]['markup_percentage']; ?>" >
												<input type="hidden" name="extra_material" value="<?php echo $tooling_extra_material_inch[0]['extra_material_inch']; ?>" >
												<input type="hidden" name="complex_design_cost" id="complex_design_cost" value="<?php echo $complex_timing[0]['cost']; ?>">
												<input type="hidden" name="complex_machine_cost" id="complex_machine_cost" value="<?php echo $complex_timing[1]['cost']; ?>">
												<input type="hidden" name="complex_assembly_cost" id="complex_assembly_cost" value="<?php echo $complex_timing[2]['cost']; ?>">
												<input type="hidden" name="standard_design_cost" id="complex_design_cost" value="<?php echo $standard_timing[0]['cost']; ?>">
												<input type="hidden" name="standard_machine_cost" id="complex_machine_cost" value="<?php echo $standard_timing[1]['cost']; ?>">
												<input type="hidden" name="standard_assembly_cost" id="complex_assembly_cost" value="<?php echo $standard_timing[2]['cost']; ?>">
												<input type="hidden" name="quote_id" value="<?php echo $quote_id; ?>" >
 											
												
											</div>
										</form>
										</div>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  <script>
  	$(document).ready(function(){
 
		$("#add_new_tooling").validationEngine('attach',{promptPosition : "topRight", scroll: false});
   
	   $('input[name="multiple_quote"]').click(function(){
	  	if($(this).attr("value")=="other"){    
	  			$('#mul_quote_text').show();
	  	}
	  	else
	  	{
	  			$('#mul_quote_text').val('');
	  		  	$('#mul_quote_text').hide();
	  		}
	  	});

	   /* for calculation*/
	    var maxField = 10; //Input fields increment limitation
				    var material_count=1;
				    var addButton = $('.add-material'); //Add button selector
				    var wrapper = $('.field-wrapper'); //Input field wrapper
					var id_count = 0;
					var id_count_extra = 0;
				    var x = 1; //Initial field counter is 1
				    var extra_material_other_count = 0;

				    $('.append-add-extra').click(function(){ //Once add button is clicked
				      
				             var fieldHTML = '<tr><td>Material:</td><td colspan="3"></td>														</tr><tr><td><input type="text" id="tooling_material_other['+extra_material_other_count+']" class="form-control input-tooling validate[required]" name="tooling_material_other['+extra_material_other_count+']" data-tooling="tooling_material_other[]"></td><td colspan="3"><b><input type="text" id="tooling_material_other_value['+extra_material_other_count+']" class="form-control input-tooling validate[required]" name="tooling_material_other_value['+extra_material_other_count+']" data-tooling="tooling_material_other_value[]" ></b></td></tr>';
				            $('.add_extra').append(fieldHTML); // Add field html
				            extra_material_other_count++;
				    });
					
				//for add extra option
					   $(addButton).click(function(){ //Once add button is clicked
				        if(x < maxField){ //Check maximum number of input fields
				            x++; //Increment field counter
				            material_count++;
				            id_count++;
				             var fieldHTML = '<tr><td>Material-'+material_count+':</td><td colspan="3"></td>														</tr><tr><td><select class="form-control"  name="tooling_material_select[]" id="tooling_material_select'+id_count+'"><?php 
																		foreach($material_list as $material)
																		{
																			/*echo "<option>".$material['material_name']."</option>";*/

																			echo '<option value="'.$material['id'].'" data-status="'.$material['cost'].'">'.$material['material_name'].'</option>';
																		}
																	?>		</select></td><td><div class="price-update table-price-update"><input type="text" id="material_xvalue['+id_count+']" value="" name="material_xvalue['+id_count+']" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_xvalue[]"></div></td><td><div class="price-update table-price-update"><input type="text" value="" id="material_yvalue['+id_count+']" name="material_yvalue['+id_count+']" class="form-control input-tooling validate[required,custom[onlyNumberDecimal]]" data-tooling="material_yvalue[]"></div></td><td><b><span id="material_total_cost'+id_count+'"></span></b></td></tr>';
				            $(wrapper).append(fieldHTML); // Add field html
				            console.log(material_count);
				        }
				    });

				    $('.tooling-extra').click(function(){ //Once add button is clicked
			      		
			             var fieldHTML = '<tr><td><input type="text" name="tooling_accessory_extra_name['+id_count_extra+']" id="tooling_accessory_extra_name['+id_count_extra+']" data-accessory-name="tooling_accessory_extra[]" class="form-control input-tooling validate[required]" ></td><td><div class="price-update table-price-update"><input type="text" value="" name="extra_accessory_cost['+id_count_extra+']" id="extra_accessory_cost['+id_count_extra+']" data-extra-accessory-cost="extra_accessory_cost[]" class="form-control input-tooling validate[required]"></div></td><td><div class="price-update table-price-update"><input type="text" value="" name="extra_accessory_qty['+id_count_extra+']" id="extra_accessory_qty['+id_count_extra+']" data-extra-accessory-qty="extra_accessory_qty[]" class="form-control input-tooling validate[required]"></div></td><td><b><span id="extra_accessory_cost_'+id_count_extra+'"></span></b></td></tr>';
			            $('.tooling-extra-append').append(fieldHTML); // Add field html
			            id_count_extra++;
			        
			    });
					
				   /*calculation*/

	
});
  
function calculate()
  	{

  	var all_mat_total_cost = 0;
  	var all_extra_total_cost = 0;
  	var all_time_total_cost = 0;
  	var material_tooling_other_total_cost = 0;

  	var material_inch = $('input[name="extra_material"]').val();
  	var markup_fixed = $('input[name="markup"]').val();
  	/*calculate Material */
  	var material_x_value = $('input[data-tooling="material_xvalue[]"]').map(function(){
     							  return this.value
   							}).get();


  	var material_y_value = $('input[data-tooling="material_yvalue[]"]').map(function(){
      						 return this.value
  							}).get();

  	var material_tooling_other = $('input[data-tooling="tooling_material_other[]"]').map(function(){
      						 return this.value
  							}).get();

  	var tooling_material_other_value  = $('input[data-tooling="tooling_material_other_value[]"]').map(function()								{
      										 return this.value
  										}).get();

  	console.log(material_x_value);
  	console.log(material_tooling_other);

  	var material_cost = [];
 	for(var i=0 ; i< material_x_value.length ; i++ )
 	{
 		var material_fixed_cost = $('#tooling_material_select'+i).find("option:selected").data('status');
 		console.log('material fixed cost'+material_fixed_cost);
 		var markup_final_percent = parseFloat((markup_fixed/100).toFixed(2));
 		var partb = ((parseFloat(material_x_value[i]) + parseFloat(material_inch)) * (parseFloat(material_y_value[i]) + parseFloat(material_inch)) * markup_final_percent);
  		material_cost[i] = ((parseFloat(material_x_value[i])+parseFloat(material_inch))*(parseFloat(material_y_value[i])+parseFloat(material_inch))+partb)*material_fixed_cost ;//material_x_value[i] * material_y_value[i];
  		if(isNaN(material_cost[i]))
  		{
 			material_cost[i] = 0;
  		}

  		$('#material_total_cost'+i).text('$'+parseFloat(material_cost[i]).toFixed(2));
 		if(material_x_value[i] != "" && material_y_value[i] !="" || material_x_value[i] != 'undefined' && material_y_value[i] != 'undefined' || !isNaN(material_x_value[i] && !isNaN(material_y_value[i]))){
 			all_mat_total_cost +=  parseFloat(material_cost[i]);
 			//console.log('all mat cost'+all_mat_total_cost);
 		}

 	}

 	/*Extra Material Tooling*/
 	for(var mto=0 ; mto < material_tooling_other.length ; mto++)
 	{
 		material_tooling_other_total_cost += parseFloat(tooling_material_other_value[mto]);
 	}


 	//


  	/*calculate material extra */
  	var extra_cost = $('input[name="extra_cost[]"]').map(function(){
     							  return this.value
   							}).get();


  	var extra_qty = $('input[name="extra_qty[]"]').map(function(){
      						 return this.value
      						 }).get();
  	var material_extra_cost = [];						
  	for(var e=0 ; e< extra_cost.length ; e++ )
 	{
 		material_extra_cost[e] = parseFloat(extra_cost[e]) * parseFloat(extra_qty[e]);
 		
 		if(isNaN(material_extra_cost[e])){
 			material_extra_cost[e] = 0;
 		}
 		$('#extra_accessory_'+e).text('$'+material_extra_cost[e]);
 		all_extra_total_cost +=  parseFloat(material_extra_cost[e]);
 		//console.log('all extra cost'+all_extra_total_cost);

 	}
  	
  	/*calculate cost for extra accessory*/

  		var tooling_extra_accessory_name = $('input[data-accessory-name="tooling_accessory_extra[]"]').map(function(){
					      						 return this.value
					  						}).get();
  		var tooling_extra_accessory_cost = $('input[data-extra-accessory-cost="extra_accessory_cost[]"]').map(function(){
					      						 return this.value
					  						}).get();

		var tooling_extra_accessory_qty = $('input[data-extra-accessory-qty="extra_accessory_qty[]"]').map(function(){
					      						 return this.value
					  						}).get();


		/*
				assign extra material variables here
		*/
		var extra_tooling_accessory_cost = 0;
		var extra_tooling_accessory_total_cost = 0;

		if(!tooling_extra_accessory_name.length == 0)
		{
			for(var etac=0 ; etac < tooling_extra_accessory_name.length; etac++)
			{
				extra_tooling_accessory_cost = tooling_extra_accessory_cost[etac] * tooling_extra_accessory_qty[etac];
				
				extra_tooling_accessory_total_cost = extra_tooling_accessory_total_cost + extra_tooling_accessory_cost;
		 		$('#extra_accessory_cost_'+etac).text('$'+extra_tooling_accessory_cost);

			}			
		}

  	/*End of calculation*/

  	/* calculate time*/ 

  	var std_design_hr= $('input[name="std_design_hr"]').val();
  	var std_design_min= $('input[name="std_design_min"]').val();
  	var cpx_design_hr = $('input[name="cpx_design_hr"]').val();
  	var cpx_design_min =  $('input[name="cpx_design_min"]').val();

  	var std_machine_hr= $('input[name="std_machine_hr"]').val();
  	var std_machine_min= $('input[name="std_machine_min"]').val();
  	var cpx_machine_hr = $('input[name="cpx_machine_hr"]').val();
  	var cpx_machine_min =  $('input[name="cpx_machine_min"]').val();

  	var std_assembly_hr= $('input[name="std_assembly_hr"]').val();
  	var std_assembly_min= $('input[name="std_assembly_min"]').val();
  	var cpx_assembly_hr = $('input[name="cpx_assembly_hr"]').val();
  	var cpx_assembly_min =  $('input[name="cpx_assembly_min"]').val();

  	var time_other_name = $('input[name="time_other_name"]').val();
  	var std_other_hr = $('input[name="std_other_hr"]').val();
  	var std_other_min = $('input[name="std_other_min"]').val();
  	var cpx_other_hr = $('input[name="cpx_other_hr"]').val();
  	var cpx_other_min = $('input[name="cpx_other_min"]').val();

  	/*get the hour value dynamically*/
  	var design_cost = $('#std_design_cost').attr('value');
  	var assembly_cost = $('#std_assembly_cost').attr('value');
  	var machine_cost = $('#std_machine_cost').attr('value');
  	var complex_design_cost = $('#complex_design_cost').val();
  	var complex_assembly_cost = $('#complex_assembly_cost').val();
  	var complex_machine_cost = $('#complex_machine_cost').val();

  	/* For Design**/
  	if(check_number(std_design_hr) || check_number(std_design_min))
  	{
  		std_design_hr = assign_value(std_design_hr);
  		std_design_min = assign_value(std_design_min);
  		var total_standard_design_cost = (design_cost*std_design_hr) + (design_cost*(std_design_min/60));
  		console.log('design hour:'+total_standard_design_cost);
  	}

  	if(check_number(cpx_design_hr)  || check_number(cpx_design_min))
  	{
  		cpx_design_hr = assign_value(cpx_design_hr);
  		cpx_design_min = assign_value(cpx_design_min);
  		var total_complex_design_cost = (complex_design_cost*cpx_design_hr) + (complex_design_cost*(cpx_design_min/60));
  	}

  	/**For Machine*/
  	if(check_number(std_machine_hr) || check_number(std_machine_min))
  	{
  		std_machine_hr = assign_value(std_machine_hr);
  		std_machine_min = assign_value(std_machine_min);
  		var total_standard_machine_cost = (machine_cost*std_machine_hr) + (machine_cost*(std_machine_min/60));
  	}

  	if(check_number(cpx_machine_hr)  || check_number(cpx_machine_min))
  	{
  		cpx_machine_hr = assign_value(cpx_machine_hr);
  		cpx_machine_min = assign_value(cpx_machine_min);
  		var total_complex_machine_cost = (complex_machine_cost*cpx_design_hr) + (complex_machine_cost*(cpx_design_min/60));
  	}

  	/* For Assembly*/
  	if(check_number(std_assembly_hr) || check_number(std_assembly_min))
  	{
  		var total_standard_assembly_cost = (assembly_cost*std_assembly_hr) + (assembly_cost*(std_assembly_min/60));
  	}

  	if(check_number(cpx_assembly_hr) || check_number(cpx_assembly_min))
  	{
  		var total_complex_assembly_cost = (complex_assembly_cost*cpx_assembly_hr) + (complex_assembly_cost*(cpx_assembly_min/60));
  	}

  	/* For rthers*/
  	if(check_number(std_other_hr) || check_number(std_other_min))
  	{
  		var total_standard_other_cost = (time_other_name*assign_value(std_other_hr)) + (time_other_name*(assign_value(std_other_min)/60));
  	}

  	if(check_number(cpx_other_hr) || check_number(cpx_other_min))
  	{
  		
  		var total_complex_other_cost = (time_other_name*assign_value(cpx_other_hr)) + (time_other_name*(assign_value(cpx_other_min)/60));
  	}


  		var total_design_cost = assign_value(total_standard_design_cost) + assign_value(total_complex_design_cost);
  		var total_assembly_cost = assign_value(total_standard_assembly_cost) + assign_value(total_complex_assembly_cost);
  		var total_machine_cost = assign_value(total_standard_machine_cost) + assign_value(total_complex_machine_cost);
  		var total_other_cost = assign_value(total_standard_other_cost) + assign_value(total_complex_other_cost);

 
  		$('#total_cost_design').text('$'+assign_value(total_design_cost));
  		$('#total_cost_assembly').text('$'+assign_value(total_assembly_cost));
  		$('#total_cost_machine').text('$'+assign_value(total_machine_cost));
  		$('#total_cost_other').text('$'+assign_value(total_other_cost));

  	var total_time_cost_wo_design = total_assembly_cost + total_machine_cost + total_other_cost;
  	/*Calculate Accessories*/
  	/*total time cost */
  	var total_time_cost = total_design_cost + total_time_cost_wo_design;
  	/*end of total time */

  	var total_tooling_cost_wro = total_time_cost + all_mat_total_cost + all_extra_total_cost + material_tooling_other_total_cost;
  	//append here to total values

  	$('#total_tooling_cost_wor').text('$'+parseFloat(total_tooling_cost_wro).toFixed(2));

  	//end of append

  	/*check premium available*/
  	var premium_exist = $('#tooling_premium').val();
  	if(premium_exist != "")
  	{	
  		var premium_calculation = (parseFloat(premium_exist)/100) * total_tooling_cost_wro;
  		$('#total_tooling_premium').text('$'+parseFloat(premium_calculation).toFixed(2));
  	}

  	var discount_exist = $('#tooling_discount').val();
  	if(discount_exist != "")
  	{
  		var discount_calculation = (parseFloat(discount_exist)/100) * total_tooling_cost_wro;
  		$('#total_tooling_discount').text('$'+parseFloat(discount_calculation).toFixed(2));
  	}

  	/*
		Total calculation after discount
  	*/
  	var total_after_dp;
  	if(premium_exist != "" || discount_exist !="")
  	{
  		total_after_dp = (total_tooling_cost_wro + assign_value(premium_calculation)) - assign_value(discount_calculation);
  	}
  	else
  	{
  		total_after_dp = total_tooling_cost_wro;
  	}

  	$('#total_after_discount').text('$'+parseFloat(total_after_dp).toFixed(2));
  	/*This is here for calculating multiple quotes*/
  	var multiple_quote = $('input[name="multiple_quote"]:checked').attr('value');

	$('#total_unit').text(multiple_quote);

  	/* multiple quotes check here*/
  	if(multiple_quote != "")
  	{
  		if(multiple_quote != "other")
  		{
	  		$('.multiple_quote_cost').text('');
	  		var multiple_quote_cost = 0;
	  		for(var mcq=1 ; mcq < multiple_quote ; mcq++ )
	  		{
	  			multiple_quote_cost += total_tooling_cost_wro - total_design_cost;
	  		}
	  	}
	  	else
	  	{
	  		$('.multiple_quote_cost').text('');
	  		var multiple_text_val = $('#mul_quote_text').val();
	  		var multiple_quote_cost = 0;
	  		for(var mcq=1 ; mcq < multiple_text_val ; mcq++ )
	  		{
	  			multiple_quote_cost += total_tooling_cost_wro - total_design_cost;
	  		}
	  	}
  		var final_multiple_quote_cost = multiple_quote_cost + total_after_dp;
  	}

  	/**Round Off Calculation*/
  	if(final_multiple_quote_cost < 1000)
  	{
  		var round_final_multiple_quote_cost = round5(final_multiple_quote_cost);
  	}
  	else if(final_multiple_quote_cost > 1000 && final_multiple_quote_cost < 2000)
  	{
  		var round_final_multiple_quote_cost = round10(final_multiple_quote_cost);
  	}
  	else
  	{
  		  var round_final_multiple_quote_cost = round25(final_multiple_quote_cost);
  	}



    $("#multiple_quote_cost_"+multiple_quote).text((round_final_multiple_quote_cost).toFixed(2));
  }

	function round5(x)
	{
	    return (x % 5) >= 2.5 ? parseInt(x / 5) * 5 + 5 : parseInt(x / 5) * 5;
	}
	function round10(x)
	{
	    return (x % 10) >= 2.5 ? parseInt(x / 10) * 10 + 10 : parseInt(x / 10) * 10;
	}
	function round25(x)
	{
	    return (x % 25) >= 2.5 ? parseInt(x / 25) * 25 + 25 : parseInt(x / 25) * 25;
	}

	/*function to check number**/
	function check_number(numb) {
		if(numb=="") return false;
		if(numb==0) return false;
		if(isNaN(numb) ) return false;
		return true;
	}

	function assign_value(numb)
	{
		if(numb=="" || isNaN(numb))
		{
			return 0;
		}
		return numb;
	}
  </script>