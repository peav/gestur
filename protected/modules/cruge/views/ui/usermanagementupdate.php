<?php
/** @var Form $model es una instancia que implementa a ICrugeStoredUser, y debe traer ya los campos extra 	accesibles desde $model->getFields() */
/** @var Boolean $boolIsUserManagement true o false.  si es true indica que esta operandose bajo el action de adminstracion de usuarios, si es false indica que se esta operando bajo 'editar tu perfil' */

$this->pageTitle = Yii::t('app', 'Administrador de Usuarios');
?>

<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-user"></i> <?php echo ucwords(CrugeTranslator::t($boolIsUserManagement ? "editando usuario" : "editando tu perfil"));?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
     </div>
    <div class="widget-body form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'crugestoreduser-form',
            'enableAjaxValidation'=>false,
            'enableClientValidation'=>false,
        )); ?>
        <div class="row-fluid form-group">
            <div class='field-group'>
                <div class='separator-form span11'><?php echo ucfirst(CrugeTranslator::t("datos de la cuenta"));?></div>
                <div class="clear"></div>
                <div class='col control-group'>
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo $form->textField($model,'username'); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <div class='col control-group'>
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>
                <div class='col control-group'>
                    <?php echo $form->labelEx($model,'newPassword'); ?>
                    <?php echo $form->textField($model,'newPassword',array('size'=>10)); ?>
                    <?php echo $form->error($model,'newPassword'); ?>
                    <script>
                        function fnSuccess(data){
                            $('#CrugeStoredUser_newPassword').val(data);
                        }
                        function fnError(e){
                            alert("error: "+e.responseText);
                        }
                    </script>
                    <?php echo CHtml::ajaxbutton(
                            CrugeTranslator::t("Generar una nueva clave")
                            ,Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
                            ,array('success'=>new CJavaScriptExpression('fnSuccess'),
                                    'error'=>new CJavaScriptExpression('fnError'))
                            ,array('class'=>'btn btn-inverse btn-new-password')
                    ); ?>
                </div>
            </div>

            <div class='field-group'>
                    <div class='col control-group textfield-readonly'>
                        <?php echo $form->labelEx($model,'regdate'); ?>
                        <?php echo $form->textField($model,'regdate',array(
                                'readonly'=>'readonly',
                                'value'=>Yii::app()->user->ui->formatDate($model->regdate),
                            )); ?>
                    </div>
                    <div class='col control-group textfield-readonly'>
                        <?php echo $form->labelEx($model,'actdate'); ?>
                        <?php echo $form->textField($model,'actdate',array(
                                'readonly'=>'readonly',
                                'value'=>Yii::app()->user->ui->formatDate($model->actdate),
                            )); ?>
                    </div>
                    <div class='col control-group textfield-readonly'>
                    <?php echo $form->labelEx($model,'logondate'); ?>
                    <?php echo $form->textField($model,'logondate',array(
                            'readonly'=>'readonly',
                            'value'=>Yii::app()->user->ui->formatDate($model->logondate),
                        )
                    ); ?>
                    </div>

            </div>
        </div>

        <!-- inicio de campos extra definidos por el administrador del sistema -->
        <?php 
            if(count($model->getFields()) > 0){
                    echo "<div class='row-fluid form-group'>";
                    echo "<div class='separator-form span11'>".ucfirst(CrugeTranslator::t("datos de la cuenta"))."</div>";
                    echo '<div class="clear"></div>';
                    foreach($model->getFields() as $f){
                            // aqui $f es una instancia que implementa a: ICrugeField
                            echo "<div class='col control-group'>";
                            echo Yii::app()->user->um->getLabelField($f);
                            echo Yii::app()->user->um->getInputField($model,$f);
                            echo $form->error($model,$f->fieldname);
                            echo "</div>";
                    }
                    echo "</div>";
            }
        ?>
        <!-- fin de campos extra definidos por el administrador del sistema -->




        <!-- inicio de opciones avanazadas, solo accesible bajo el rol 'admin' -->

        <?php 
                if($boolIsUserManagement){
                    if(Yii::app()->user->checkAccess('edit-advanced-profile-features'
                        ,__FILE__." linea ".__LINE__)){
                        $this->renderPartial('_edit-advanced-profile-features'
                                ,array('model'=>$model,'form'=>$form),false);
                    }		 
                }

        ?>

        <!-- fin de opciones avanazadas, solo accesible bajo el rol 'admin' -->

        <div class="row-fluid buttons">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => CrugeTranslator::t("Guardar Cambios"),
            )); ?>
        </div>
        <?php //echo $form->errorSummary($model); ?>
        <?php $this->endWidget(); ?>
    </div>
</div>