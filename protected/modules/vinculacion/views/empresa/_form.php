<div class="form">
    <?php
    /** @var EmpresaController $this */
    /** @var Empresa $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'id' => 'empresa-form',
        'enableAjaxValidation' => false,
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
        'enableClientValidation' => true,
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
    <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

    <?php //echo $form->textFieldRow($model, 'id', array('class' => 'span5')) ?>
    <?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 100)) ?>
    <?php echo $form->textFieldRow($model, 'descripcion', array('class' => 'span5', 'maxlength' => 300)) ?>
    <?php echo $form->textFieldRow($model, 'dir_calleprin', array('class' => 'span5', 'maxlength' => 50)) ?>
    <?php echo $form->textFieldRow($model, 'dir_callesec', array('class' => 'span5', 'maxlength' => 50)) ?>
    <?php echo $form->textFieldRow($model, 'dir_ncasa', array('class' => 'span5', 'maxlength' => 10)) ?>
    <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5', 'maxlength' => 20)) ?>
    
    <?php echo $form->dropDownListRow($model, 'estado', Empresa::model()->EstadosOptions) ?>
    
        
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            //'buttonType'=>'submit',
            'label' => Yii::t('AweCrud.app', 'Cancel'),
            'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>
</div>