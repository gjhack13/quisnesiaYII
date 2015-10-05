<?php
class HalamanController extends Controller{
	//untuk menyatakan bahwa kita menggunakan layout
	public $layout = '//layouts/halaman';
	
	public function actionIndex(){
		//render ke file index.php
		$this->render('index');
	}
	
	public function actionHalaman1(){
		$this->render('halaman1');
	}
	
	public function actionAbout(){
		$this->render('about');
	}
	
	
	
}
?>
