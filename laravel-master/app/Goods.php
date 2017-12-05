<?php
namespace App;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  

class Goods extends Model
{
    protected $tableName = 'goods';   
    public function add($data){
        return DB::table($this->tableName)->insert($data);
   }
    public function showInfo(){
        //查询所有数据
        return DB::table($this->tableName)->get();
    }
      public function delRow($id){
        //删除
        return DB::table($this->tableName)->where(['id'=>$id])->delete();
    }
    public function updates($id){
         //查询一条数据
       $row = DB::table('goods')
            ->where(['id'=>$id])
            ->first();
        //get_object_vars是可以在laravel里直接将对象转换成数组
        // $row = get_object_vars($row);  
        return $row;
    }
    public function update_do($post){
        //修改数据
       //print_r($post);die;
        $id=$post['id'];
        //print_r($id);die;
        $data['name']=$post['name'];
        $data['content']=$post['content'];
        return DB::table($this->tableName)->where(['id'=>$id])->update($data);
    }
}
