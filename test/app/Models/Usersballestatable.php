<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class usersballestatable extends Sximo  {
	
	protected $table = 'tb_users';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " Select * from tb_users ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE last_name = 'BALLESTA' ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	
	public  function insertRow( $data , $id)
	{
		$data['last_name'] = 'BALLESTA';
		parent::insertRow( $data , $id);
	}
}
