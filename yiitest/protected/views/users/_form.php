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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fullName'); ?>
		<?php echo $form->textField($model,'fullName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age',array('size'=>60,'maxlength'=>128, 'integerOnly'=>true)); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php echo $form->textField($model,'bio',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hairColor'); ?>
		<?php echo $form->dropDownList($model,'hairColor',array('1'=>'brown','2'=>'red','3'=>'blonde')); ?>
		<?php echo $form->error($model,'hairColor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'eyeColor'); ?>
		<?php echo $form->textField($model,'eyeColor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'eyeColor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'worth_of_cat'); ?>
		<?php echo $form->textField($model,'worth_of_cat',array('size'=>60,'maxlength'=>128, 'integerOnly'=>true)); ?>
		<?php echo $form->error($model,'worth_of_cat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->