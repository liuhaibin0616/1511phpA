<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Login;
use App\Http\Requests;
class LoginController extends Controller
{
	public function __construct(){
		$this->bount = new Login;
	}
	public function setlogin(){
		return view('login/login');
	}
	public function login_do(){
		$data = Input::all();
		$res = $this->bount->getinfo($data);
		print_r($res);
	}
}