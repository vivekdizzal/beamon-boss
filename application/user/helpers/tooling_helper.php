<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('error_message'))
{
	function error_message( $string="" ) 
	{
		return ' <div class="alert alert-danger">
   				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 				  '.$string.'</div>';
	}
}

if ( ! function_exists('success_message'))
{
	function success_message( $string="" ) 
	{
		return '<div class="alert alert-success alert-full fade in" style="color: #3c763d;
    background-color: #dff0d8; border-color: #d6e9c6;" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">X</span></button>'.$string.'</div>';
	}
}

if(! function_exists('material_calculation'))
{
	function material_calculation($data)
	{

		$result = array();

		$markup = $data['markup'];
		$extra_material_inch = $data['extra_material'];
		$material_cost = array();
		$total_material_cost = 0;

		/*material calculation*/
		if(!empty($data['material_xvalue']))
		{
			
			/* Get the cost of the material here*/
			foreach($data['material_xvalue'] as $key => $value)
			{
				$CI =& get_instance();	
				$cost = $CI->crud_model->get_one('cost','boss_master_tooling_material',array('id' => $data['tooling_material_select'][$key]));

				/*Calculation part here*/
				$cost_of_mat = (($data['material_xvalue'][$key] + $extra_material_inch) * ($data['material_yvalue'][$key] + $extra_material_inch) + (($data['material_xvalue'][$key] + $extra_material_inch) * ($data['material_yvalue'][$key] + $extra_material_inch)*($markup/100)))*$cost;

				array_push($material_cost,$cost_of_mat);
				$total_material_cost = $total_material_cost + $cost_of_mat;
			}
			$result['material_cost'] = $material_cost;
			$result['total_material_cost'] = number_format((float)$total_material_cost, 2, '.', '');

		}

		/* tooling material extra*/
		$tooling_material_other_total_cost = 0;
		if(!empty($data['tooling_material_other']))
		{
			$tooling_material_other_cost = array();
		
			foreach($data['tooling_material_other'] as $key => $value)
			{
				$cost_tooling_other_material = $data['tooling_material_other_value'][$key];
				array_push($tooling_material_other_cost,$cost_tooling_other_material);
				$tooling_material_other_total_cost = $tooling_material_other_total_cost + $cost_tooling_other_material;
			}
			$result['total_extra_material_cost'] = number_format((float)$tooling_material_other_total_cost, 2, '.', '');
		}
		/** Tooling accessory calculation 
			For Existing tooling
			*/
		$accessory_total_cost= 0;
		if(!empty($data['extra_qty']))
		{
			$accessory_cost = array();
			
			$cost_of_acc =0;
			foreach($data['tooling_accessory_name'] as $key => $value)
			{
				if($data['extra_qty'][$key] != "")
				{
					$cost_of_acc = $data['extra_qty'][$key] * $data['extra_cost'][$key];
				}
				else
				{
					$cost_of_acc = 0;
				}
				array_push($accessory_cost,$cost_of_acc);
				$accessory_total_cost = $accessory_total_cost + $cost_of_acc;
			}
			$result['accessory_cost'] = $accessory_cost;
			$result['accessory_total_cost'] = number_format((float)$accessory_total_cost, 2, '.', '');
		}

		/*update the dynamic value*/

		$tooling_accessory_extra_total = 0;
		if(isset($data['extra_accessory_cost']))
		{
			$extra_acc_cost = array();
			foreach($data['extra_accessory_cost'] as $key => $value)
			{
				$tooling_extra_acc_cost = $data['extra_accessory_cost'][$key] * $data['extra_accessory_qty'][$key];
				array_push($extra_acc_cost,$tooling_extra_acc_cost);
				$tooling_accessory_extra_total = $tooling_accessory_extra_total + $tooling_extra_acc_cost;
			}
			$result['accessory_extra_cost'] = $extra_acc_cost;
			$result['tooling_extra_accessory_cost'] = number_format((float)$tooling_accessory_extra_total, 2, '.', '');
		}

		/*end of code*/
		/*calculate time here*/
		$std_design_cost = (($data['std_design_hr'] > 0 ? $data['std_design_hr'] : 0) * $data['standard_design_cost']) + ((($data['std_design_min'] > 0 ? $data['std_design_min'] : 0)/60) * $data['standard_design_cost'] );

		$std_machine_cost = (($data['std_machine_hr'] > 0 ? $data['std_machine_hr'] : 0) * $data['standard_machine_cost']) + ((($data['std_machine_min'] > 0 ? $data['std_machine_min'] : 0)/60) * $data['standard_machine_cost'] );

		$std_assembly_cost = (($data['std_assembly_hr'] > 0 ? $data['std_assembly_hr'] : 0) * $data['standard_assembly_cost']) + ((($data['std_assembly_min'] > 0 ? $data['std_assembly_min'] : 0)/60) * $data['standard_assembly_cost'] );

		$cpx_design_cost = (($data['cpx_design_hr'] > 0 ? $data['cpx_design_hr'] : 0) * $data['complex_design_cost']) + ((($data['cpx_design_min'] > 0 ? $data['cpx_design_min'] : 0)/60) * $data['complex_design_cost'] );

		$cpx_machine_cost = (($data['cpx_machine_hr'] > 0 ? $data['cpx_machine_hr'] : 0) * $data['complex_machine_cost']) + ((($data['cpx_machine_min'] > 0 ? $data['cpx_machine_min'] : 0)/60) * $data['complex_machine_cost'] );

		$cpx_assembly_cost = (($data['cpx_assembly_hr'] > 0 ? $data['cpx_assembly_hr'] : 0) * $data['complex_assembly_cost']) + ((($data['cpx_assembly_min'] > 0 ? $data['cpx_assembly_min'] : 0)/60) * $data['complex_assembly_cost'] );

		$std_other_cost = (($data['std_other_hr'] > 0 ? $data['std_other_hr'] : 0) * $data['time_other_name']) + ((($data['std_other_min'] > 0 ? $data['std_other_min'] : 0)/60) * $data['time_other_name'] );

		$cpx_other_cost = (($data['cpx_other_hr'] > 0 ? $data['cpx_other_hr'] : 0) * $data['time_other_name']) + ((($data['cpx_other_min'] > 0 ? $data['cpx_other_min'] : 0)/60) * $data['time_other_name'] );

		$total_time_cost = $std_design_cost+$std_machine_cost+$std_assembly_cost+$cpx_design_cost+$cpx_machine_cost+$cpx_assembly_cost+$std_other_cost+$cpx_other_cost;


		/*Get seperate time cost*/
		$total_design_cost = $std_design_cost + $cpx_design_cost;
		$total_machine_cost = $std_machine_cost + $cpx_machine_cost;
		$total_assembly_cost = $std_assembly_cost + $cpx_assembly_cost;
		$total_other_time_cost = $std_other_cost+$cpx_other_cost;


		$result['total_design_cost'] = number_format((float)$total_design_cost, 2, '.', ''); 
		$result['total_machine_cost'] = number_format((float)$total_machine_cost, 2, '.', '');
		$result['total_assembly_cost'] = number_format((float)$total_assembly_cost, 2, '.', '');
		$result['total_other_time_cost'] = number_format((float)$total_other_time_cost, 2, '.', '');

		$result['time_total_cost'] = number_format((float)$total_time_cost, 2, '.', '');
		/*End of  time calculation*/

		/*total cost calculation for all  without premium and dsicount
			add all material cost,assembly cost, total time cost
		*/
		$total_calculation_wop = 0;
		$total_calculation_wop = $total_material_cost+$tooling_material_other_total_cost+$accessory_total_cost+$total_time_cost+$tooling_accessory_extra_total;

		$result['total_calculation_wop'] = number_format((float)$total_calculation_wop, 2, '.', '');
		/**Calculate tooling premium*/
		$tooling_premium=0;
		$tooling_discount=0;
		if($data['tooling_premium'] != "")
		{
			$tooling_premium = $total_calculation_wop * ($data['tooling_premium']/100);
		}

		/* eheck discount exist*/
		if($data['tooling_discount'] !="")
		{
			$tooling_discount = $total_calculation_wop * ($data['tooling_discount']/100);
		}

		/*ffinal total after tooling premium and discount*/
		$total_calculation_after_pd = $total_calculation_wop + $tooling_premium - $tooling_discount;

		$result['tooling_premium'] = $tooling_premium;
		$result['tooling_discount'] = $tooling_discount;
		$result['total_calculation_after_pd'] = number_format((float)$total_calculation_after_pd, 2, '.', '');
		/*calculation for multiple quote*/
		$multiple_quote_cost = 0;
		if(isset($data['multiple_quote']))
		{
			$multiple_quote = $data['multiple_quote'];
			if($multiple_quote != "other")
			{
				for($mqc = 1;$mqc < $multiple_quote ; $mqc++)
				{
					$multiple_quote_cost = $multiple_quote_cost + $total_calculation_wop - ($std_design_cost+$cpx_design_cost);
				}
			}
			else
			{
				$multiple_quote_cstm = $data['custom_quote_std'];
				for($mqc = 1;$mqc < $multiple_quote_cstm ; $mqc++)
				{
					$multiple_quote_cost = $multiple_quote_cost + $total_calculation_wop - ($std_design_cost+$cpx_design_cost);
				}
			}
		}
		$final_multiple_quote_cost = $total_calculation_wop + $multiple_quote_cost;

		/* Round off multiple quotes*/
		$round_off_mq = round_off($final_multiple_quote_cost);
		
		$result['round_off_mq'] = $round_off_mq;
		/*End of round off*/
		return $result;
	}

}
if(! function_exists('round_off'))
{
	function round_off($number=0)
	{
		 $limit = ($number < 1000 ? 5 :($number > 2000 ? 25 : 10));
		 return ($number % $limit) >= 2.5 ? intval($number / $limit) * $limit + $limit : intval($number / $limit) * $limit;
	}
}