<?php
/* @var $this usersController */
/* @var $model users */

$users = Yii::app()->db->createCommand()
		->select('*')
		->from('testing.users')
		->queryAll();

	$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'Manage users', 'url'=>array('admin')),
	);

?>

<h1>Crud Mock-up</h1>

<div id="crud" style="max-height:450px;overflow:auto;min-height:400px;width:500px;border:1px solid black;float:left;">
	<?php for($i = 0; $i < count($users); $i++){
		echo "<div id='profile' style='border-bottom:1px solid black;'>";
			echo "<p>" . $users[$i]['fullName'] . " - Age: " . $users[$i]['age'] . "</p>";
			echo "<p>Bio: " . $users[$i]['bio'] . "</p>";
			echo "<p>Hair Color: " . $users[$i]['hairColor'] . "</p>";
			echo "<p>Eye Color: " . $users[$i]['eyeColor'] . "</p>";
			echo "<p>Occupation: " . $users[$i]['occupation'] . "</p>";
			echo "<p>Worth of Cat: " . $users[$i]['worth_of_cat'] . "</p>";
		echo "</div>";
	}
	?>
</div>

