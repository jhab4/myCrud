<?php

class PagesController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionView($name){
		
	$viewPage = Yii::app()->db->createCommand()
		->select('*')
		->from('pages')
		->where("slug='" . $name . "'")
		->queryRow();
		
	$id = $viewPage['id'];
	
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function loadModel($id)
	{
		$model=Page::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}