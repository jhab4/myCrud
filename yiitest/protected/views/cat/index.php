<?php
/* @var $this CatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cats',
);

$this->menu=array(
	array('label'=>'Create Cat', 'url'=>array('create')),
	array('label'=>'Manage Cat', 'url'=>array('admin')),
);
?>

<h1>Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
