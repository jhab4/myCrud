<?php
/* @var $this PagesController */

$this->breadcrumbs=array(
	'Pages',
);

$pages = Yii::app()->db->createCommand()
    ->select('*')
    ->from('pages')
    ->queryAll();
?>
<h1>All Pages</h1>

<ul>
<?php
foreach($pages as $page){
	echo "<li><a href='pages/view/{$page['slug']}'>" . $page['title'] . "</a></li>";
}
?>
