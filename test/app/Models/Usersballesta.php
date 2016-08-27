<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class usersballesta extends Sximo  {
	
	protected $table = 'users_ballesta';
	protected $primaryKey = '';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT users_ballesta.* FROM users_ballesta  ";
	}	

	public static function queryWhere(  ){
		
		return "  ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
