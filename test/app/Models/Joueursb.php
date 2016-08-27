<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class joueursb extends Sximo  {
	
	protected $table = 'foot_joueur';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT foot_joueur.* FROM foot_joueur  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE foot_joueur.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
