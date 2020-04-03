<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\Request;

class Admin extends Base
{
    public function index(){

        $model = new \app\admin\model\Admin();

        $list = $model->paginate(7);
        $page = $list->render();

        $this->assign([
            'list'  =>  $list,
            'page'  => $page,
        ]);
        return $this->fetch('admin');
    }

    /**
     * ## 管理员添加页
     * @ Add
     **/

    public function add(){

        return $this->fetch();
    }

    /**
     ** ## 数据库添加数据
     * @Insert
     **/
    public function save(){
        if ($this->request->isPost()){
            $data = $this->request->param();
            $admin = [
                'account' => trim($data['account']),
                'face' => $data['face'],
                'password' => substr(md5(trim($data['password'])),10,16),
                'name'  =>  trim($data['name']),
                'status' => $data['status']
            ];

            $validate = validate('admin');
            if ($validate->scene('add')->check($admin)===false){
                $this->error($validate->getError());
            }

           if(\app\admin\model\Admin::create($admin)){
               $this->success('执行操作成功');
           }else{
               $this->error('执行操作失败');
           }

        }else{
            $this->error('异常操作');
        }

    }

    /**
     * ## 管理员添加页
     * @ edit
     **/

    public function edit($id){

        $admin = \app\admin\model\Admin::get($id);
        if (!$admin){
            $this->error('管理员不存在');
        }

        $this->assign([
            'admin' =>  $admin,
        ]);
        return $this->fetch();
    }

    /**
     ** ## 数据库更新数据
     * @    Update
     **/
    public function update(){
        if ($this->request->isPost()){
            $data = $this->request->param();
            //halt($data);
            if (isset($data['id']) && isset($data['account'])){
                $admin = [
                    'id'    =>  $data['id'],
                    'account' => trim($data['account']),
                    'face' => $data['face'],
                    'name'  =>  trim($data['name']),
                    'status' => $data['status']
                ];

                if ($data['face']!=$data['odface']){
                    unlink(substr($data['odface'],1));
                }

                unset($data['odface']);

                if (empty($data['password'])){
                    unset($data['password']);
                }else{
                    $admin['password'] = substr(md5(trim($data['password'])),10,16);
                }

                $validate = validate('admin');
                if ($validate->scene('edit')->check($admin)===false){
                    $this->error($validate->getError());
                }

            }
            else{
                $admin =[
                    'id'    => $data['id'],
                    'status'    =>  $data['status'],
                ];
            }

            //halt($admin);

            if(\app\admin\model\Admin::update($admin)){
                $this->success('执行操作成功');
            }else{
                $this->error('执行操作失败');
            }


        }else{
            $this->error('异常操作');
        }

    }

    /**
     * Admin constructor.
     * @param Request|null $request
     */

    public function del($id){

        $delAdmin = \app\admin\model\Admin::get($id);

        if ($delAdmin){
            if(\app\admin\model\Admin::destroy($id,false)){
                return Message(1,'执行操作成功');
            }else{
                return Message(0,'执行操作失败');
            }
        }else{
            return Message(0,'找不到要删除的用户');
        }

    }

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
}