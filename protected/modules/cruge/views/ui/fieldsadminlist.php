<?php
$this->pageTitle = Yii::t('app', 'Campos Personalizados');
?>

<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-list"></i> <?php echo ucwords(CrugeTranslator::t("campos personalizados"));?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
     </div>
    <div class="widget-body form">
        <?php 
        $cols = array();
        // presenta los campos de ICrugeField
        foreach(Yii::app()->user->um->getSortFieldNamesForICrugeField() as $key=>$fieldName){
                $value=null;
                if($fieldName == 'required')
                        $value = '$data->getRequiredName()';
                $cols[] = array('name'=>$fieldName,'value'=>$value);
        }
        $cols[] = array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template' => '{update} {delete}',
                'deleteConfirmation'=>CrugeTranslator::t("Esta seguro de eliminar este campo ?"),
                'buttons' => array(
                                'update'=>array(
                                        'label'=>CrugeTranslator::t("editar campo"),
                                        'url'=>'array("fieldsadminupdate","id"=>$data->getPrimaryKey())'
                                ),
                                'delete'=>array(
                                        'label'=>CrugeTranslator::t("eliminar campo"),
                                        'url'=>'array("fieldsadmindelete","id"=>$data->getPrimaryKey())'
                                ),
                        ),	
        );
        //$this->widget(Yii::app()->user->ui->CGridViewClass, array(
        //    'dataProvider'=>$dataProvider,
        //    'columns'=>$cols,
        //	'filter'=>$model,
        //));

        $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'llamada-grid',
                    'type' => 'striped condensed',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'columns' => $cols
                ));
        ?>
    </div>
</div>