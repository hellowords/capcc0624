<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class NewsController extends Controller {

    //显示图说新闻列表
    public function picture()
    {
        //头部
  /*      $this->display('Public:top');*/

        //分页显示，每页10条
        $m=M('News_picture');
        $count= $m->count('id');
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%');
        $show= $page->show();
        $res = $m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($res);$i++)
        {
            $news[$i]['content']=iconv_substr($res[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$res);
        $this->assign('page',$show);

        $this->display();

    }

    //显示动态新闻列表
    public function active()
    {
    /*    $this->display('Public:top');*/

        //表名
        $m=M('News_active');
        $count= $m->count('id');
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%');
        $show= $page->show();
        $res = $m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($res);$i++)
        {
            $news[$i]['content']=iconv_substr($res[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$res);
        $this->assign('page',$show);
        $this->display();
    }

    //添加新闻的页面
    public function add()
    {
        //判断有无tag传递过来
        $tag=I('get.tag');
        if($tag)
        {
            $this->assign('tag',$tag);
            $this->display();
        }else
        {
            $this->redirect("News/index",'',3,'出错了！');
        }


    }
/*    public function  add_picture_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  =  4194304 ;// 设置附件上传大小
        $upload->exts     =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =  './Public/';// 设置附件上传根目录
        $upload->savePath  = './Uploads/News/images/'; // 设置附件上传目录

        $info=$upload->upload();
        //dump($info);
        if(!$info)
        {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else
        {// 上传成功
            //$this->success('上传成功！');
            $m=M('News_picture');
            //接收隐藏域传递的值
            //如果存在，说明是编辑页面过来的
            // 如果不存在，说明是添加页面过来的
            $newsid=I('nid');

            $data=array(
                'Title'=>I('title'),
                'Content'=>I('content'),
                'ImgPath'=>str_replace('./','',$info['Picture']['savepath']).$info['Picture']['savename'],
                'InsertTime'=> date('Y-m-d H:i:s',time()),
            );
            if($newsid)
            {
                $where['NewsID']=$newsid;
                $res=$m->where($where)->save($data);
            }else{
                $res=$m->add($data);
            }

            if($res == false)
            {
                $this->error('添加失败！');
            }else
            {
                $this->success('添加成功！',U('News/picture'));
            }
        }


    }*/
/*    public function  add_active_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  =  4194304 ;// 设置附件上传大小
        $upload->exts     =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =  './Public/Uploads';// 设置附件上传根目录
        $upload->savePath  = './Index/images/'; // 设置附件上传目录

        $info=$upload->upload();
        //dump($info);
        if(!$info)
        {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else
        {// 上传成功
            //$this->success('上传成功！');
            $m=M('News_active');
            //接收隐藏域传递的值
            //如果存在，说明是编辑页面过来的
            // 如果不存在，说明是添加页面过来的
            $newsid=I('nid');

            $data=array(
                'Title'=>I('title'),
                'Content'=>I('content'),
                'O_Author'=>I('o_author'),
                'Author'=>I('author'),
                'Editor'=>I('editor'),
                'Time'=> date('Y-m-d H:i:s',time()),
                'Source'=>I('source'),
                'Picture'=>str_replace('./','',$info['Picture']['savepath']).$info['Picture']['savename']
            );
            if($newsid)
            {
                $where['NewsID']=$newsid;
                $res=$m->where($where)->save($data);
            }else{
                $res=$m->add($data);
            }

            if($res == false)
            {
                $this->error('添加失败！');
            }else
            {
                $this->success('添加成功！','News/active');
            }
        }


    }*/

    //添加新闻的方法
    public function  add_news()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 4194304;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/';// 设置附件上传根目录
        $upload->savePath = './Uploads/News/images/'; // 设置附件上传目录

        $info = $upload->upload();
        /*dump($info);
        exit;*/
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            //$this->success('上传成功！');
            //根据$db选择对应的数据库
            $tag=I('get.tag');
            $db_name='News_'.$tag;
            $m = M($db_name);
            $data = array(
                'Title' => I('post.title'),
                'Content' => I('post.content'),
                'OriAuthor' => I('post.oriAuthor'),
                'Author' => I('post.author'),
                'Editor' => I('post.editor'),
                'PubTime' => I('post.pubtime'),
                'InsertTime' => date('Y-m-d H:i:s', time()),
                'Source' => I('post.source'),
                'ImgPath' => str_replace('./', '', $info['Picture']['savepath']) . $info['Picture']['savename'],
                'Headline'=>(I('post.headline')=='on')?1:0 //标记头条
            );

            $id = I('post.nid');
            //接收隐藏域传递的值
            //如果存在，说明是编辑页面过来的
            // 如果不存在，说明是添加页面过来的
            if ($id)
            {
                $where['ID'] = $id;
                $res = $m->where($where)->save($data);
                if ($res == false)
                {
                    $this->error('编辑失败！');
                } else
                {

                    $this->success('编辑成功！', U("News/$tag"));
                }
            } else
            {
                $res = $m->add($data);
                if ($res == false) {
                    $this->error('添加失败！');
                } else {

                    $this->success('添加成功！', U("News/$tag"));
                }
            }
        }
    }


    public function delete_news()
    {
        $tag=I('get.tag');
        $db_name='News_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $res=$m->where($where)->delete();

        if($res>0)
        {
            $this->success('删除成功!',U("News/$tag"));
        }else
        {
            $this->error('删除失败！');
        }

    }
    public function edit_news()
    {
        $tag=I('get.tag');
        $db_name='News_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $news=$m->where($where)->find();
        //dump($news);
        // exit;
        $this->assign('news',$news);
        $this->assign('tag',$tag);
        $this->display();

    }
}