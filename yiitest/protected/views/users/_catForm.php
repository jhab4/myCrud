<?php
/* @var $this TblUserController */
/* @var $model TblUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($catModel); ?>

	<div class="row">
		<?php echo $form->labelEx($catModel,'name'); ?>
		<?php echo $form->textField($catModel,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($catModel,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($catModel,'color'); ?>
		<?php echo $form->textField($catModel,'color',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($catModel,'color'); ?>
	</div>

	<input name="Cat[owner_id]" id="Cat_owner_id" type="hidden" value="<?php echo $_GET['owner']; ?>">
	<div class="row buttons">
		<?php echo CHtml::submitButton($catModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->