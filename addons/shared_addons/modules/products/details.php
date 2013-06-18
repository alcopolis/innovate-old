<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Products extends Module {
	public $version = '1.0';
	
	public function info()
	{
		return array(
				'name' => array(
						'en' => 'Products'
				),
				'description' => array(
						'en' => 'Products Page'
				),
				'frontend' => true,
				'backend' => true,
				'skip_xss' => true,
				'menu' => 'content',
				
				'roles' => array(
						'put_live', 'edit_live', 'delete_live',
						'create_types', 'edit_types', 'delete_types'
				),
		);
	}
	
	public function install()
	{
		$this->dbforge->drop_table('inn_product_features');
		$this->dbforge->drop_table('inn_products');
		
		return TRUE;
	}
	
	public function uninstall()
	{
		return TRUE;
	}
	
	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}
	
	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}