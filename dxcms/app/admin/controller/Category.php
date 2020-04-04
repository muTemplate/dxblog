<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\exception\DbException;
use think\Request;
use think\Db;
use think\response\Json;

class Category extends Base
{
    public function index()
    {

        $list = \app\admin\model\Category::getList();

        $this->assign([
            'list' => $list,

        ]);
        return $this->fetch('category');
    }

    /**
     * ## 管理员添加页
     * @ Add
     **/

    public function add($pid=0)
    {

        $this->assign([
            'pid' => $pid,
        ]);
        return $this->fetch('add_category');
    }

    /**
     ** ## 数据库添加数据
     * @Insert
     **/
    public function save()
    {
        if ($this->request->isPost()) {
            $data = $this->request->param();
            //halt($data);

            $category = [
                'title' => trim($data['title']),
                'pid'   =>  $data['pid'],
                'name' => $data['name'],
                'cover_img' => trim($data['cover_img']),
                'type' => (int)trim($data['type']),
                'cate_folder' => $data['cate_folder'],
                "readauth" => (int)trim($data['readauth']),
                "isread" => (int)$data['isread'],
                "meta_title" => trim($data['meta_title']),
                "meta_key" => trim($data['meta_key']),
                "meta_desc" => trim($data['meta_desc']),
                "content" => trim($data['content']),
                'create_time' => time()
            ];

            $validate = validate('category');
            if ($validate->scene('add')->check($category) === false) {
                $this->error($validate->getError());
            }
            $model = new \app\admin\model\Category();

            Db::startTrans();
            try {

                Db::name('category')->insert($category);
                $id = Db::name('category')->getLastInsID();
                switch ($category['type']) {
                    case 1:
                        $url = url('home/lists/index?id=' . $id);
                        break;
                    case 2:
                        $url = url('home/single/index?id=' . $id);
                        break;
                    case 3:
                        $url = url($category['cate_folder']);
                        break;
                    case 4:
                        $url = url('home/activity/index?id=' . $id);
                        break;
                }
                $model->save(['typelink' => $url], ['id' => $id]);
                // 提交事务
                Db::commit();


            } catch (\Exception $e) {

                // 回滚事务
                Db::rollback();
                $this->error($e->getTraceAsString());
            }
            $this->success('执行操作成功');

        } else {
            $this->error('异常操作');
        }

    }

    /**
     * ## 管理员添加页
     * @ edit
     **/

    public function edit($id)
    {

        $category = \app\admin\model\Category::get($id);
        if (!$category) {
            $this->error('栏目不存在');
        }

        $this->assign([
            'category' => $category,
        ]);
        return $this->fetch('edit_category');
    }

    /**
     ** ## 数据库更新数据
     * @    Update
     **/
    public function update()
    {
        if ($this->request->isPost()) {
            $data = $this->request->param();
            if (isset($data['id']) && isset($data['title'])){
                $category = [
                    'id' => (int)$data['id'],
                    'title' => trim($data['title']),
                    'name' => $data['name'],
                    'cover_img' => trim($data['cover_img']),
                    'type' => (int)trim($data['type']),
                    'cate_folder' => $data['cate_folder'],
                    "readauth" => (int)trim($data['readauth']),
                    "isread" => (int)$data['isread'],
                    "meta_title" => trim($data['meta_title']),
                    "meta_key" => trim($data['meta_key']),
                    "meta_desc" => trim($data['meta_desc']),
                    "content" => trim($data['content']),
                    'create_time' => time()
                ];

                $validate = validate('category');
                if ($validate->scene('add')->check($category) === false) {
                    $this->error($validate->getError());
                }
                $model = new \app\admin\model\Category();
                switch ($category['type']) {
                    case 1:
                        $category['typelink'] = url('home/lists/index?id=' . $category['id']);
                        break;
                    case 2:
                        $category['typelink'] = url('home/single/index?id=' . $category['id']);
                        break;
                    case 3:
                        $category['typelink'] = url($category['cate_folder']);
                        break;
                    case 4:
                        $category['typelink'] = url('home/activity/index?id=' . $category['id']);
                        break;
                }
                if ($model->save($category, ['id' => $category['id']])) {

                    $this->success('执行操作成功');

                } else {

                    $this->error('执行操作失败');
                }
            }else{

                $cate =[
                    'id'    => $data['id'],
                    'isread'    =>  $data['isread'],
                ];

               if( \app\admin\model\Category::update($cate)){

                   return Message(1,'执行操作成功');
               }else{
                   return Message(0,'执行操作失败');
               }

            }




        } else {
            $this->error('异常操作');
        }


    }

//    排序
    public function sort(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $sort = $data['sort'];

            foreach ($sort as $k=>$v){

                \app\admin\model\Category::update(['sort'=>$v],['id'=>$k]);
            }
            $this->success('执行操作成功');
        }

    }


    /**
     * Admin constructor.
     * @param $id
     * @return Json
     * @throws DbException
     */

    public function del($id)
    {

        $delCate = \app\admin\model\Category::get($id);

        if ($delCate) {
            if (\app\admin\model\Category::destroy($id, false)) {
                return Message(1, '执行操作成功');
            } else {
                return Message(0, '执行操作失败');
            }
        } else {
            return Message(0, '找不到要删除的栏目');
        }

    }

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
}