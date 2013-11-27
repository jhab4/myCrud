<?php
/* @var $this CatController */
/* @var $model Cat */

$this->breadcrumbs=array(
	'Cats'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Cat', 'url'=>array('index')),
	array('label'=>'Create Cat', 'url'=>array('create')),
	array('label'=>'Update Cat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cat', 'url'=>array('admin')),
);
?>

<h1>View Cat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'color',
		'owner_id',
	),
)); ?>
