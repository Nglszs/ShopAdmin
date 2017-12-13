<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/11/27
 * Time: 下午3:34
 */

namespace app\index\controller\v1;


use think\Controller;
use think\Db;

class Exam extends Controller
{
    public function index()
    {

        $result = Db::query('select * from Subject');

        if ($result == null){


            return json_encode('查询数据库为空');

        } else {

            return json_encode($result);

        }




    }


    public function get(){

        return 'jack is niubi';
    }

}