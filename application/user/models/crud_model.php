<?php
class Crud_Model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	//get record count by sql
	function get_count_by_sql($SQL){
		$rs = $this->db->query($SQL);
		return $rs->num_rows();
	}
	
	//get records by sql
	function get_by_sql($SQL){
		$rs = $this->db->query($SQL);
		if($rs->num_rows() > 0){
			return $rs->result_array();
		}
		else{
			return false;
		}
	}

	
	// select records count (for pagination)
	function get_count($table_name = '', $where=array())
	{			
			$rs = $this->db->get_where($table_name,$where);
			return $rs->num_rows();
	}
	function get_records($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		
		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null)
		{
			$this->db->order_by($order_by_field, $order_by_order);
		}
		$rs = $this->db->get_where($table_name,$where);

		if($rs->num_rows() > 0){
			return $rs->result_array();
		}
		else{
			return false;
		}
	}
	// select records
	function get($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){

		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}
		if(array_key_exists("customer_group_name",$where))
		{

			$this->db->like($where); 
		 	$rs = $this->db->get($table_name);
		}
		else
		{
			$rs = $this->db->get_where($table_name,$where);
		}
		

		if($rs->num_rows() > 0){
			return $rs->result_array();
		}
		else{
			return false;
		}
	}

	// select records
	function get_addresses($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}
		$this->db->select("addresses.*");
		$this->db->select("customers.customer_id as customer_id");
		//echo "<pre>"; print_r($this->db->like($where)); echo "</pre>"; 

		if(isset($where['customers.customer_id']) && isset($where['addresses.address_id']))
		{
			$this->db->where(array('customers.customer_id'=>$where['customers.customer_id']));
			$this->db->where(array('addresses.address_id'=>$where['addresses.address_id']));
			unset($where['customers.customer_id'], $where['addresses.address_id']);
		}

		$this->db->like($where); 
		
		$this->db->from($table_name);
		$this->db->join('customer_address_map','customer_address_map.address_id = addresses.address_id ','left');
		$this->db->join('customers','customers.customer_id = customer_address_map.customer_id ','left');
		
		$rs= $this->db->get();

		if($rs->num_rows() > 0)
		{
			//echo "<pre>"; print_r($this->db->like($rs->num_rows())); echo "</pre>"; exit;
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}


	function getcount_like_customers($table_name = '', $where=array())
	{
		if(isset($where['customers.customer_group_id']))
		{
			$this->db->where(array('customers.customer_group_id'=>$where['customers.customer_group_id']));
			unset($where['customers.customer_group_id']);
		}
		//print_r($this->db);
		//print_r($where);
		$this->db->like($where);
		$this->db->from($table_name);	
		$this->db->join('customer_groups','customer_groups.customer_group_id = customers.customer_group_id ','left');
		$rs= $this->db->get();
		return $rs->num_rows();
	}

	function get_like_customers($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		

		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}	

		$this->db->select("customers.*");
		$this->db->select("customer_groups.customer_group_name as customer_group_name");


		if(isset($where['customers.customer_group_id']))
		{
			$this->db->where(array('customers.customer_group_id'=>$where['customers.customer_group_id']));
			unset($where['customers.customer_group_id']);
		}

		$this->db->like($where); 
		
		$this->db->from($table_name);
		$this->db->join('customer_groups','customer_groups.customer_group_id = customers.customer_group_id ','left');
		
		$rs= $this->db->get();
		//echo $this->db->last_query();
		if($rs->num_rows() > 0)
		{
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}

	function getcount_like_addresses($table_name = '', $where=array())
	{
		if(isset($where['customers.customer_id']))
		{
			$this->db->where(array('customers.customer_id'=>$where['customers.customer_id']));
			unset($where['customers.customer_id']);
			
		}
		
		//echo "<pre>"; print_r($this->db); echo "</pre>";
		//echo "<pre>"; print_r($where); echo "</pre>"; 
		$this->db->like($where);
		$this->db->from($table_name);	
		$this->db->join('customer_address_map','customer_address_map.address_id = addresses.address_id ','left');
		$this->db->join('customers','customers.customer_id = customer_address_map.customer_id ','left');
		$rs= $this->db->get();
		return $rs->num_rows();
	}

	function get_like_addresses($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		

		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}	

		$this->db->select("addresses.*");
		$this->db->select("customers.customer_id as customer_id");
		//echo "<pre>"; print_r($where); echo "</pre>"; exit;

		if(isset($where['customers.customer_id']))
		{
			$this->db->where(array('customers.customer_id'=>$where['customers.customer_id']));
			unset($where['customers.customer_id']);
		}

		$this->db->like($where); 
		
		$this->db->from($table_name);
		$this->db->join('customer_address_map','customer_address_map.address_id = addresses.address_id ','left');
		$this->db->join('customers','customers.customer_id = customer_address_map.customer_id ','left');
		
		$rs= $this->db->get();
		//echo $this->db->last_query();
		if($rs->num_rows() > 0)
		{
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}


	function getcount_product_like($table_name = '', $where=array())
	{	
		if(array_key_exists("product_name",$where))
		{

			$this->db->like($where); 
		 	$rs = $this->db->get($table_name);
		}
		else
		{
			$rs = $this->db->get_where($table_name);

		}
		return $rs->num_rows();
		
	}

	function get_product_like($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}	

		 if(array_key_exists("product_name",$where))
		{

			$this->db->like($where); 
		 	$rs = $this->db->get($table_name);
		}
		else
		{
			$rs = $this->db->get_where($table_name,$where);
		}		
		
		if($rs->num_rows() > 0)
		{
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}
	function getcount_like_partnumber($table_name = '', $where=array())
	{	
		$rs = $this->db->get_where($table_name);
			return $rs->num_rows();

	}

	function get_like_partnumber($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null)
	{
		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}	

	// 	 if(array_key_exists("product_part_number",$where))
	// 	{

	// 		//$this->db->like($where); 
	// 	 	$rs = $this->db->get($table_name);
	// 	}
	// 	else
	// 	{
	// 		$rs = $this->db->get_where($table_name,$where);
	// 	}		
		
	// 	if($rs->num_rows() > 0)
	// 	{
	// 		return $rs->result_array();
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }	
		

		$rs = $this->db->get_where($table_name,$where);

		if($rs->num_rows() > 0){
			return $rs->result_array();
		}
		else{
			return false;
		}
	}
	
	// get list of records for drop down
	function get_list($id_field_name,$value_field_name,$table_name,$init_list=array(),$where=array()){
		$this->db->select($id_field_name);
		$this->db->select($value_field_name);
		$this->db->where($where);
		$rs = $this->db->get($table_name);
		if($rs->num_rows()>0)
		{
			$records = $rs->result_array();
			foreach($records as $record)
			{
				$init_list[$record[$id_field_name]] = $record[$value_field_name];
			}
		}
		return $init_list;
	}
	// get one row
	function get_row($table_name,$where=array()){
		$records = $this->get($table_name,$where);
		if($records != false){
			return $records[0];
		}
		else{
			return false;
		}
	}
	// get one field
	function get_one($field_name,$table_name,$where=array()){
		$records = $this->get($table_name,$where);
		if($records != false){
			return $records[0][$field_name];
		}
		else{
			return false;
		}
	}
	// create new record
	function insert($table_name = '', $data=array()){
		$this->db->insert($table_name,$data);
		return $this->db->insert_id();
	}

	// update existing record
	function update($table_name = '', $data=array(),$where=array()){
		$this->db->update($table_name,$data,$where);
	}

	// delete existing record
	function delete($table_name = '', $where=array()){
		$this->db->delete($table_name,$where);
	}
	// Update or Insert
	function update_or_insert($table_name = '', $data=array(), $where=array()){
		$n = $this->get_count($table_name,$where);
		if($n > 0){
			$this->update($table_name,$data,$where);
			return true;
		}
		else{
			$this->db->insert($table_name,$data);
			return $this->db->insert_id();
		}
	}


	////////////

	function override_price_model($total,$product_id,$price_model_id)
	{
		$where = array(
				'pricing_model_id' => $price_model_id,
				'product_id'	=> $product_id
		);
		$result = $this->crud_model->get('pricing_overrides',$where);


		if($result!=false)
		{

			//return $row[0];

			return ($result[0]['overridden_price']);


		}
	}

	function get_base_price($total,$product_id,$price_model_id)
	{
		$where = array(
				'product_id'	=> $product_id
		);
		$rs = $this->crud_model->get('products',$where);

		if($rs!= false)
		{
			$base_price =  $rs[0]['base_unit_price'];

		}
		else
		{
			return false;
		}


		$where_discount = array(
				'pricing_model_id'	=> $price_model_id
		);
		$res = $this->crud_model->get('pricing_models',$where_discount);
		if($res !=false)
		{

			$discount_percentage = $res[0]['discount_percentage'];

		}
		else
		{
			return false;
		}

		$discount_price 	 = $base_price - ($base_price * $discount_percentage / 100);

		return 	$discount_price;
	}

	/**
	 * Get final price of the product
	 */
	function get_customer_price($product_id=0,$pricing_model_id=0){

		//-----
		$where = array('pricing_model_id'=>$pricing_model_id,'product_id'=>$product_id);
		$pricing_overrides = $this->get('pricing_overrides',$where);
		if($pricing_overrides!=false){
			// #3
			$product_overridden_price = $pricing_overrides[0]['overridden_price'];
			if($product_overridden_price == 0){
				return 0;
			}
		}
		else{
			$product_overridden_price = 0;
		}
		//-----
		if($product_overridden_price > 0){
			return $product_overridden_price;
		}
		else{
			//-----
			$product_base_price = 0;
			$pricing_model_discount_percentage = 0;
			//-----
			$where = array('product_id'=>$product_id);
			$products = $this->get('products',$where);
			if($products!=false){
				// #1
				$product_base_price = $products[0]['base_unit_price'];
			}
			else{
				return 0;
			}
			//-----
			$where = array('pricing_model_id'=>$pricing_model_id);
			$pricing_models = $this->get('pricing_models',$where);
			if($pricing_models!=false){
				$pricing_model_discount_percentage = $pricing_models[0]['discount_percentage'];
			}
			else{
				$pricing_model_discount_percentage = 0;
			}
			// #2
			$product_discounted_price = $product_base_price - ($product_base_price * $pricing_model_discount_percentage / 100);
			return $product_discounted_price;
		}
	}
	function get_customer($id_field_name,$value_field_name,$company_name,$table_name,$init_list=array(),$where=array()){
		$this->db->select($id_field_name);
		$this->db->select($value_field_name);
		$this->db->select($company_name);
		$this->db->where($where);
		$rs = $this->db->get($table_name);
		if($rs->num_rows()>0){
			$records = $rs->result_array();
			foreach($records as $record){

				$init_list[$record[$id_field_name]] = $record[$company_name] .' ['. $record[$value_field_name].']';

			}
		}

		return $init_list;
	}
	function get_representatives($id_field_name,$value_field_name,$company_name,$table_name,$init_list=array(),$where=array()){
		$this->db->select($id_field_name);
		$this->db->select($value_field_name);
		$this->db->select($company_name);
		$this->db->where($where);
		$rs = $this->db->get($table_name);
		if($rs->num_rows()>0){
			$records = $rs->result_array();
			foreach($records as $record){

				$init_list[$record[$id_field_name]] = $record[$company_name] .' ['. $record[$value_field_name].']';

			}
		}

		return $init_list;
	}
	function get_products($id_field_name,$value_field_name,$packaging,$units_per_pkg,$units,$table_name,$init_list=array(),$where=array()){
		$this->db->select($id_field_name);
		$this->db->select($value_field_name);
		$this->db->select($packaging);
		$this->db->select($units_per_pkg);
		$this->db->select($units);
		$this->db->where($where);
		$rs = $this->db->get($table_name);
		if($rs->num_rows()>0){
			$records = $rs->result_array();
			foreach($records as $record){

				$init_list[$record[$id_field_name]] = $record[$value_field_name] .' ['. $record[$packaging].' / '.$record[$units_per_pkg].'  '.$record[$units].']';

			}
		}

		return $init_list;
	}
	function get_like_customers_activites($table_name = '', $where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null){
		

		if(!is_null($offset) and !is_null($limit))
		{
			$this->db->limit($limit,$offset);
		}
		if($order_by_field != null and $order_by_order != null){
			$this->db->order_by($order_by_field, $order_by_order);
		}	

		
		 $this->db->like($where); 
		
		 $this->db->from($table_name);	
		// $this->db->join('customer_groups','customer_groups.customer_group_id = customers.customer_group_id ');
			
		 $rs= $this->db->get();			
		
		if($rs->num_rows() > 0)
		{
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}

	function get_orders($where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null)
	{
		$sql="
			SELECT 
				orders.order_id,
				orders.order_datetime,
				orders.customer_order_number,
				customers.customer_name 
			FROM 
				orders
			LEFT JOIN customers 
				ON 
					orders.customer_id = customers.customer_id
			WHERE 1  
		";
		if($where['customer_group_id'] >0)
		{
			$sql .= " AND customers.customer_group_id = customer_group_id ";
		}
		if($where['fromdate'] != "" and $where['todate'] != "")
		{
			$sql .= "AND (orders.order_datetime >= '".$where['fromdate']." 00:00:00' AND orders.order_datetime <= '".$where['todate']." 23:59:59')";
		}
		$sql .= " LIMIT ".$limit.",".$offset;
		$rs = $this->db->query($sql);

		if ($rs->num_rows () > 0) 
		{
			return $rs->result_array();
		}
		else
		{
			return false;
		}
	}

	function get_count_orders($where=array(),$limit=null,$offset=null,$order_by_field=null,$order_by_order=null)
	{
		$sql="
			SELECT 
				orders.order_id,
				orders.order_datetime,
				orders.customer_order_number,
				customers.customer_name 
			FROM 
				orders
			LEFT JOIN customers 
				ON 
					orders.customer_id = customers.customer_id
			WHERE 1  
		";
		
		if($where['customer_group_id'] >0)
		{
			$sql .= " AND customers.customer_group_id = customer_group_id ";
		}
		if($where['fromdate'] != "" and $where['todate'] != "")
		{
			$sql .= "AND (orders.order_datetime >= '".$where['fromdate']." 00:00:00' AND orders.order_datetime <= '".$where['todate']." 23:59:59')";
		}
		
		$rs = $this->db->query($sql);
		$result = $rs->num_rows ();
		return $result;
	}

}