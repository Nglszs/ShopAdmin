<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/11/30
 * Time: 下午2:31
 */

namespace app\index\controller\v1;


use think\Controller;
use think\Db;

class Video extends Controller
{

    public function index(){

        $result = Db::query('select * from Video');

        if ($result == null){


            return json_encode('查询数据库为空');

        } else {

            return json_encode($result);

        }


    }
}