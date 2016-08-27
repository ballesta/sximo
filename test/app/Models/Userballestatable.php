<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class userballestatable extends Sximo  {
	
	protected $table = 'tb_users';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT * FROM tb_users ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE username = 'ballesta' ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
