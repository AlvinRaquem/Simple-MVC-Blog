<?php

include(__DIR__.'/../model/blog.php');

Class BlogController {
	private $blog;

	public function __construct(){
		$this->blog = new Blog;
		if(session_id()=="")
			session_start();
	}

	public function index(){
		$blogs = $this->blog->getAllData();
		require_once(__DIR__.'/../../view/index.php');
		
	}

	public function viewBlog($id){
		$blog = $this->blog->find($id);
		require_once(__DIR__.'/../../view/viewblog.php');
	}

	public function addblog($params = []){
		$saveblog = $this->blog->Save($params);
		$this->index();
	}

	public function removeBlog($id){
		$blog = $this->blog->remove($id);
		$this->index();
	}

}

$BlogController = new BlogController;
