<?php

Yii::import('vinculacion.models._base.BaseEmpresa');

class Empresa extends BaseEmpresa {

    /**
     * @return Empresa
     */
    
    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Empresa|Empresas', $n);
    }

    public function attributeLabels() {
        return array_merge(parent::attributeLabels(),array(
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'dir_calleprin' => Yii::t('app', 'Dir. Calle Principal'),
            'dir_callesec' => Yii::t('app', 'Dir. Calle Secundaria'),
            'dir_ncasa' => Yii::t('app', 'Numero de Casa'),
            'telefono' => Yii::t('app', 'Teléfono'),
            'estado' => Yii::t('app', 'Estado'),
            'repVinculacions' => null,
        ));
    }
    
    public function getEstadosOptions() {
        return array(
            self::ESTADO_ACTIVO => Yii::t('app', 'Activo'),
            self::ESTADO_INACTIVO => Yii::t('app', 'Inactivo'),
        );
    }

}
