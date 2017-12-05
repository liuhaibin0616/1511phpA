<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis as Redis; 
use App\Duilie;
use App\Http\Requests;

class DuilieController extends Controller
{
	public function __construct(){
		$this->bount = new Duilie;
	}
	public function add_do(){
		$data = input::all();
		$res = $this->bount->getinfo($data);
		$arr=$this->bount->getshow();
		//echo "<pre>";
		//print_r($arr);die;
		$r  = serialize($data);
		  Redis::lpush('shi',$r);
        return view('duilie/add',['arr'=>$arr]);
		
	}
}