<?php
/* @var $this usersController */
/* @var $model users */


	$this->menu=array(
	array('label'=>'View users', 'url'=>array('index')),
	array('label'=>'Manage users', 'url'=>array('admin')),
	);

?>
Create User
<?php $this->renderPartial('_form', array('model'=>$model)); ?>