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

		echo 'Create New Product';
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
