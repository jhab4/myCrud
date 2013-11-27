<?php
/* @var $this usersController */
/* @var $model users */

$users = Yii::app()->db->createCommand()
		->select('*')
		->from('testing.users')
		->queryAll();

	$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'View users', 'url'=>array('index')),
	);

?>

<h1>Crud Mock-up</h1>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script type="text/javascript">
var k=0;
$(document).ready(function(){
	$("div#profile").click(function(){
		$("div[name=" + k + "]").css("background-color","white");
		$(this).css("background-color","aliceblue");
		var cl = $(this).attr("name");
		k = cl;
		$("a.update").attr("href","update?id=" + cl);
		$("a.delete").attr("href","delete?id=" + cl);
		$("a.view").attr("href","view?id=" + cl);
	});
});
</script>

<div id="crud" style="max-height:450px;overflow:auto;min-height:400px;width:500px;border:1px solid black;float:left;">
	<?php for($i = 0; $i < count($users); $i++){
		echo "<div id='profile' name='" . $users[$i]['id'] . "' style='border-bottom:1px solid black;'>";
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
<div style="float:left;margin-left:45px;margin-top:20px;id="update">
	<a class="update" href="" >Update</a>
	<a class="delete" href="" >Delete</a>
	<a class="view" href="" >View</a>
</div>