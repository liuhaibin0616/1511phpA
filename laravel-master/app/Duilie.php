<?php
namespace App;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB; 

class Duilie extends Model{
	protected $tableName = 'Duilie';
	public function getinfo($data){
		return DB::table($this->tableName)->insert($data);
	}
	public function getshow(){
		return DB::table($this->tableName)->get();
	}
}
?>