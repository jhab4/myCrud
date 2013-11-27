<?php
	$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'View users', 'url'=>array('index')),
	array('label'=>'Manage users', 'url'=>array('admin')),
	);
	
	$id = $model->id;
	
?>

<h1>Update User <?php echo $model->fullName; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<h2>Cats - <a href="addCat?owner=<?php echo $id; ?>">Add Cat</a></h2>

<ul>
<?php
if(!$cats){
	echo "<li>This person owns no cats</li>";
}
else{
	foreach($cats as $cat){
		echo "<li>" . $cat['name'] . " - <a href='editCat?id=" . $cat['id'] . "&owner=" . $id . "'>Edit</a> - <a href='deleteCat?id=" . $cat['id'] . "'>Delete</a></li>";
	}
}
?>
</ul>