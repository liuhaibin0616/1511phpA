<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Goods;
use App\Http\Requests;
use Illuminate\Support\Facades\Redis;
class GoodsController extends Controller
{
	public function __construct(){
		$this->bount = new Goods;
	}
    public function getAbout(){
    	
    	return view('goods/index');
    }
     public function add(){
    	$data = Input::all();
    	$res = $this->bount->add($data);
        if($res){

    echo '<script>alert("添加成功");location.href="'.'show'.'";</script>';
        }
    	
    }
    public function show(){
        $data=$this->bount->showInfo();

        return view('goods/show',['data'=>$data]);
    }
    public function deletes(){
        $id = Input::get('id');
        $res=$this->bount->delRow($id);
        if($res){
            echo '<script>alert("删除成功");location.href="'.'show'.'";</script>';
        }
    }
    public function updates(){
        $id = Input::get('id');
        $data=$this->bount->updates($id);
        //print_r($data);die;
        return view('goods/save',['data'=>$data]);
    }
    public function update_do(){
        $post = Input::all();
        $res=$this->bount->update_do($post);
        if($res){
            echo '<script>alert("修改成功");location.href="'.'show'.'";</script>';
        }
    }
}
?>