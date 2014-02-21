<?php
/** @var EmpresaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'descripcion', array('class' => 'span5', 'maxlength' => 300)); ?>

<?php echo $form->textFieldRow($model, 'dir_calleprin', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'dir_callesec', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'dir_ncasa', array('class' => 'span5', 'maxlength' => 10)); ?>

<?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5', 'maxlength' => 20)); ?>

<?php echo $form->textFieldRow($model, 'estado', array('class' => 'span5', 'maxlength' => 8)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
