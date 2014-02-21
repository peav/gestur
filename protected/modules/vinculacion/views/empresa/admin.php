<?php
/** @var EmpresaController $this */
/** @var Empresa $model */
$this->breadcrumbs = array(
    'Empresas' => array('index'),
    Yii::t('AweCrud.app', 'Manage'),
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Empresa::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Empresa::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('empresa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Empresa::label(2) ?>    </legend>

    <?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
    <div class="search-form" style="display:none">
        <?php
        // $this->renderPartial('_search',array(
//	'model' => $model,
//)); 
        ?>
    </div><!-- search-form -->

    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'id' => 'empresa-grid',
        'type' => 'striped condensed',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            //'id',
            'nombre',
            'descripcion',
            'dir_calleprin',
            'dir_callesec',
            //'dir_ncasa',
            'telefono',
            array(
                'name' => 'estado',
                'filter' => $model->estadosOptions,
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{view} {update}'
            ),
        ),
    ));
    ?>
</fieldset>