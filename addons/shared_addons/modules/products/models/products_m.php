<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Regular pages model
 *
 * @author Phil Sturgeon
 * @author Jerel Unruh
 * @author PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Pages\Models
 *
 */
class Products_m extends MY_Model
{
	public function __construct() {
		parent::__construct();
	}
	
	public function get($id=NULL){
		return 'get method';
	}
	
	public function update($primary_value = NULL, $data = NULL, $skip_validation = false){
		return 'update method';
	}
	
	public function delete($id=NULL){
		return 'delete method';
	}
}