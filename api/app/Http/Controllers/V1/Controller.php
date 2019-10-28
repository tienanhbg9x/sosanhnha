<?php
/**
 * Created by PhpStorm.
 * User: minhngoc
 * Date: 21/10/2019
 * Time: 14:22
 */


namespace App\Http\Controllers\V1;
use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    public $page = 1;
    public $fields = '*';
    public $where  = null;
    public $limit = 30;

    function __construct(Request $request)
    {
        if($request->page){
            $page = (int) $request->page;
            if($page<1||$page>100000){
                $this->page  = 1;
            }else{
                $this->page = $page;
            }
            $this->page = (int) $request->page;
        }
        if($request->fields) $this->fields = $request->fields;
        if($request->where) $this->where = $request->where;
        if($request->limit){
            $limit = (int) $request->limit;
            if($limit<1||$limit>100){
                $this->limit  = 30;
            }else{
                $this->limit = (int) $request->limit;
            }
        }

    }

    function createResponse($data,$status_code=200,$header=[]){
        $response = ['status'=>$status_code,'data'=>$data];
        return response($response,$status_code,$header);
    }

}
