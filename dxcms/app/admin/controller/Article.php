<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\Db;
use think\Request;

class Article extends Base
{
    public function index(){

        $model = new \app\admin\model\Article();

        $list = $model->paginate(7);
        $page = $list->render();

        $this->assign([
            'list'  =>  $list,
            'page'  => $page,
        ]);
        return $this->fetch('article');
    }

    /**
     * ## 文档添加页
     * @ Add
     **/

    public function add(){
        $category = \app\admin\model\Category::getList();
        $flag = Db::name('flag')->select();
        $this->assign([
            'cate' => $category,
            'flag' => $flag,
        ]);
        return $this->fetch('add_article');
    }

    /**
     ** ## 数据库添加数据
     * @Insert
     **/
    public function save(){
        if ($this->request->isPost()){
            $data = $this->request->param();

            $article = [
                'pid' => (int)$data['pid'],
                'title' => trim($data['title']),
                'flag' => $data['flag'],
                'info' => trim($data['info']),
                'writer'  =>  trim($data['writer']),
                'source' => trim($data['source']),
                'comment' => (int)$data['comment'],
                'create_time' => !empty($data['create_time'])?strtotime($data['create_time']):time(),
                'update_time' => time()
            ];

            $model = new \app\admin\model\Article();
            $validate = validate('article');
            if ($validate->scene('add')->check($article)===false){
                $this->error($validate->getError());
            }

            $aid = $model->insertGetId($article);

            if ($aid){
                $content = [
                    'body'  => $data['body'],
                    'aid'   => $aid,
                    'title' => $data['title'],
                ];
                Db::name('content')->insert($content);

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

        $article = \app\admin\model\Article::get($id);
        if (!$article){
            $this->error('文档不存在');
        }
        $category = \app\admin\model\Category::getList();
        $content = Db::name('content')->where('aid',$id)->find();
        $flag = Db::name('flag')->select();
        $this->assign([
            'article' =>  $article,
            'cate'  =>  $category,
            'content'  =>   $content,
            'flag'  =>  $flag,
        ]);
        return $this->fetch('edit_article');
    }

    /**
     ** ## 数据库更新数据
     * @    Update
     **/
    public function update(){
        if ($this->request->isPost()){


            $data = $this->request->param();
            if (isset($data['id']) && isset($data['title'])){
                $article = [
                    'id'    => (int)$data['id'],
                    'pid' => (int)$data['pid'],
                    'title' => trim($data['title']),
                    'flag' => $data['flag'],
                    'info' => trim($data['info']),
                    'writer'  =>  trim($data['writer']),
                    'source' => trim($data['source']),
                    'comment' => (int)$data['comment'],
                    'create_time' => !empty($data['create_time'])?strtotime($data['create_time']):time(),
                    'update_time' => time()
                ];

                $model = new \app\admin\model\Article();
                $validate = validate('article');
                if ($validate->scene('edit')->check($article)===false){
                    $this->error($validate->getError());
                }

                $aid = $model->save($article);

                if ($aid){
                    $content = [
                        'body'  => $data['body'],
                        'aid'   => $aid,
                        'title' => $data['title'],
                    ];
                    Db::name('content')->update($content);

                    $this->success('执行操作成功');
                }else{
                    $this->error('执行操作失败');
                }
            }else{

                $arctile =[
                    'id'    => $data['id'],
                    'isread'    =>  $data['isread'],
                ];

                if( \app\admin\model\Article::update($arctile)){

                    return Message(1,'执行操作成功');
                }else{
                    return Message(0,'执行操作失败');
                }
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

        $delAdmin = \app\admin\model\Article::get($id);

        if ($delAdmin){
            if(\app\admin\model\Article::destroy($id,false)){
                return Message(1,'执行操作成功');
            }else{
                return Message(0,'执行操作失败');
            }
        }else{
            return Message(0,'找不到要删除的文章');
        }

    }

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
}