<?php
	$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'View all users', 'url'=>array('index')),
	array('label'=>'Manage users', 'url'=>array('admin')),
	);
?>

<h1><?php echo $model->fullName; ?></h1>

<p>Biography: <?php echo $model->bio; ?></p>

<p>Age: <?php echo $model->age; ?></p>

<p>Hair Color: <?php echo $model->hairColor; ?></p>

<p>Eye Color: <?php echo $model->eyeColor; ?></p>

<h2>Cats</h2>

<ul>
<?php
if(!$cats){
	echo "<li>This person owns no cats</li>";
}
else{
	foreach($cats as $cat){
		echo "<li>Name: " . $cat['name'] . " - Color: " . $cat['color'] . "</li>";
	}
}
?>
</ul>