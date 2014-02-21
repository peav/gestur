<?php
/** @var EmpresaController $this */
/** @var Empresa $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->descripcion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->descripcion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->dir_calleprin)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('dir_calleprin')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->dir_calleprin); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->dir_callesec)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('dir_callesec')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->dir_callesec); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->dir_ncasa)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('dir_ncasa')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->dir_ncasa); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>