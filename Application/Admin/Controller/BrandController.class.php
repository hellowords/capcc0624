<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/7
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

class BrandController extends Controller {

    //显示老字号列表
    public function tradition()
    {
        //分页显示，每页10条
        $m=M('Brand_tradition');
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
    public function product()
    {
        $m=M('Brand_product');
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
    public function brand()
    {
        $m=M('Brand_brand');
        $count= $m->count('id');
        $page= new \Think\Page($count,10);
        $page->setConfig('theme','<b>%HEADER%</b> 当前第%NOW_PAGE%页 共%TOTAL_PAGE%页   &nbsp; %FIRST%   %UP_PAGE%    %LINK_PAGE%     %DOWN_PAGE% &nbsp;     %END%');
        $show= $page->show();
        $news = $m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        //dump($show);
        // exit;
        for($i=0;$i<count($news);$i++)
        {
            $news[$i]['content']=iconv_substr($news[$i]['content'],0,30,'utf-8');
        }
        $this->assign('list',$news);
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

    public function  add_brand()
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
            $db_name='Brand_'.$tag;
            $m = M($db_name);
            $data = array(
                'Title' => I('post.title'),
                'Content' => I('post.content'),
                'Author' => I('post.author'),
                'InsertTime' => date('Y-m-d H:i:s', time()),
                'ImgPath' => str_replace('./', '', $info['Picture']['savepath']) . $info['Picture']['savename'],
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

                    $this->success('编辑成功！', U("Brand/$tag"));
                }
            } else
            {
                $res = $m->add($data);
                if ($res == false) {
                    $this->error('添加失败！');
                } else {

                    $this->success('添加成功！', U("Brand/$tag"));
                }
            }
        }
    }


    public function delete_brand()
    {
        $tag=I('get.tag');
        $db_name='Brand_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $res=$m->where($where)->delete();

        if($res>0)
        {
            $this->success('删除成功!',U("Brand/$tag"));
        }else
        {
            $this->error('删除失败！');
        }

    }
    public function edit_brand()
    {
        $tag=I('get.tag');
        $db_name='Brand_'.$tag;
        $m=M($db_name);
        $where['ID']=I('get.id');
        $brand=$m->where($where)->find();
        //dump($news);
        // exit;
        $this->assign('brand',$brand);
        $this->assign('tag',$tag);
        $this->display();

    }
}