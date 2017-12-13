<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/12/1
 * Time: 上午9:18
 */

namespace app\index\controller\v1;

use think\Controller;
use think\Db;
class Comment extends Controller
{

    public function index(){

   $result = $this->params;

   if (empty($result)){

       return json_encode(array('error' => '参数为空'));
   } else {


       $data = Db::query('select * from Comment where videoid = ?',[$result['id']]);
       return json_encode($data);

   }


    }
}