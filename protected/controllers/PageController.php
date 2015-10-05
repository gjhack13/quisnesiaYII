<?php
class PageController extends Controller{
	//untuk menyatakan bahwa kita menggunakan layout
	public $layout = '//layouts/halaman';
	
	public function actionIndex(){
		//render ke file index.php
		$this->render('index');
	}
	
	public function actionKutipan(){
		$this->render('kutipan');
	}
	
	public function actionAbout(){
		$this->render('about');
	}
	
	
	
}
?>
