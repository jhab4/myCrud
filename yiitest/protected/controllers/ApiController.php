<?php

class ApiController extends Controller
{
	public function printJSON($str){
		header('Content-type: application/json');
		$final = json_encode($str);
		if($final == "false"){
			echo "That record(s) does not exist";
		}
		else{
			echo $final;
		}
		die;
	}
	public function checkValues($post){
		if(isset($post['fullName']) && isset($post['age']) && isset($post['bio']) && isset($post['hairColor']) && isset($post['eyeColor'])){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionList(){
		$users = Yii::app()->db->createCommand()
			->select('*')
			->from('users')
			->queryAll();
			
		$this->printJSON($users);
    }

	public function actionView($id){
		$user = Yii::app()->db->createCommand()
			->select('*')
			->from('testing.users')
			->where("id=" . $id)
			->queryRow();
			
		$this->printJSON($user);
    }
	
	public function actionEdit($id){
		if(!$this->checkValues($_POST)){
			$this->printJSON("Please send data with request");
		}
		else{
			$model=$this->loadModel($id);
			$model->attributes=$_POST;
			
			if($model->save()){
				$d = $model->getAttributes(array("id"));
				$this->printJSON($d);
			}
			else{
				$this->printJSON($model->getErrors());
			}
		}
    }

	public function actionCreate(){
		if(!$this->checkValues($_POST)){
			$this->printJSON("Please send data with request");
		}
		else{
			$model = new ApiUser();
			$model->attributes=$_POST;
			
			if($model->save()){
				$d = $model->getAttributes(array("id"));
				$this->printJSON($d);
			}
			else{
				$this->printJSON($model->getErrors());
			}
		}
    }

	public function actionDelete($id){
		if($model = $this->loadModel($id)){
			$model->delete();
			$str = "The record {$id} has been deleted";
			$this->printJSON($str);
		}
		else{
			$this->printJSON(false);
		}
    }
	
	
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}