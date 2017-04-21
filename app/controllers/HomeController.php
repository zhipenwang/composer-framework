<?php
/**
* HomeController
*/
class HomeController extends BaseController
{
	
	public function home(){
		// 模型操作数据库
		$article = Article::findAll();
		// 传递到视图的参数
		$array = array(
			'title' => 'view视图调用测试',
			'article'=>$article,
		);
		// 映射到视图
		$this->display('index/index', $array);
	}
}