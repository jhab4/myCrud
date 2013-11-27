<?php
/* @var $this CatController */
/* @var $model Cat */

$this->breadcrumbs=array(
	'Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cat', 'url'=>array('index')),
	array('label'=>'Manage Cat', 'url'=>array('admin')),
);
?>

<h1>Create Cat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>