<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pages controller
 *
 * @author 		PyroCMS Dev Team
 * @package 	PyroCMS\Core\Modules\Products\Controllers
 */
class Admin extends Admin_Controller {

	/**
	 * The current active section
	 *
	 * @var string
	 */
	protected $section = 'products';

	/** @var array The validation rules */
	protected $rules = array(
			'title' => array(
					'field' => 'title',
					'label' => 'lang:global:title',
					'rules' => 'trim|htmlspecialchars|required|max_length[200]|callback__check_title'
			),
			'slug' => array(
					'field' => 'slug',
					'label' => 'lang:global:slug',
					'rules' => 'trim|required|alpha_dot_dash|max_length[200]|callback__check_slug'
			),
			array(
					'field' => 'category_id',
					'label' => 'lang:blog:category_label',
					'rules' => 'trim|numeric'
			),
			array(
					'field' => 'keywords',
					'label' => 'lang:global:keywords',
					'rules' => 'trim'
			),
			array(
					'field' => 'body',
					'label' => 'lang:blog:content_label',
					'rules' => 'trim|required'
			),
			array(
					'field' => 'type',
					'rules' => 'trim|required'
			),
			array(
					'field' => 'status',
					'label' => 'lang:blog:status_label',
					'rules' => 'trim|alpha'
			),
			array(
					'field' => 'created_on',
					'label' => 'lang:blog:date_label',
					'rules' => 'trim|required'
							),
							array(
							'field' => 'created_on_hour',
							'label' => 'lang:blog:created_hour',
							'rules' => 'trim|numeric|required'
									),
									array(
									'field' => 'created_on_minute',
									'label' => 'lang:blog:created_minute',
									'rules' => 'trim|numeric|required'
											),
											array(
											'field' => 'comments_enabled',
											'label' => 'lang:blog:comments_enabled_label',
											'rules' => 'trim|required'
													),
													array(
													'field' => 'preview_hash',
													'label' => '',
													'rules' => 'trim'
															)
	);
	
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
		
		$this->load->model('products_m');
	}

	/**
	 * Index methods, lists all pages
	 */
	public function index()
	{
		$query = $this->products_m->get_all();
		
		echo $this->section;
		
		$this->template
			->title($this->module_details['name'])
			->set('data', $query)
			->build('admin/index');
	}

	

	/**
	 * Create a new page
	 *
	 * @param int $parent_id The id of the parent page.
	 */
	public function create()
	{
// 		$this->template
		
// 		->title($this->module_details['name'])
// 		->set('products', $this->products_m->update())
// 		->build('admin/index');

		// Set our validation rules
		$this->form_validation->set_rules($this->rules);
		
		if ($this->form_validation->run())
		{
			echo 'New Product Added';
		}else{
			echo 'Create New Product';
		}
		
		
	}

	/**
	 * Edit an existing page
	 *
	 * @param int $id The id of the page.
	 */
	public function edit($id = 0)
	{
		$this->template
		
		->title($this->module_details['name'])
		->set('products', $this->products_m->update())
		->build('admin/index');
	}



	/**
	 * Delete a page.
	 *
	 * @param int $id The id of the page to delete.
	 */
	public function delete($id = 0)
	{
		$this->template
		
		->title($this->module_details['name'])
		->set('products', $this->products_m->delete())
		->build('admin/index');
	}

}
