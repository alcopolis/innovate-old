<?php

class Packages extends Admin_Controller {
	
	protected $section = 'packages';
	
	/**
	 * Constructor method
	 *
	 * Loads the form_validation library, the pages, pages layout
	 * and navigation models along with the language for the pages
	 * module.
	 */
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('packages_m');
	}
	
	/**
	 * Index methods, lists all pages
	 */
	public function index()
	{
		//$query = $this->products_m->get_all();
		$query = '';
		
		echo $this->section;

		$this->template
			->title($this->module_details['name'])
			->set('data', $query)
			->build('admin/packages');
	}
	
	public function create()
	{
		echo 'Create New Packages';
		$query = '';
		
		$this->template
		->title($this->module_details['name'])
		->set('data', $query)
		->build('admin/packages');
	}
}