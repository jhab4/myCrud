<?php
/* @var $this CatController */
/* @var $model Cat */

$this->breadcrumbs=array(
	'Cats'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cat', 'url'=>array('index')),
	array('label'=>'Create Cat', 'url'=>array('create')),
	array('label'=>'View Cat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cat', 'url'=>array('admin')),
);
?>

<h1>Update Cat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>