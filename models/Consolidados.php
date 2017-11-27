<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consolidados".
 *
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $factura_id
 * @property double $cargo_fijo
 * @property double $cargo_variable
 *
 * @property Clientes $cliente
 * @property Facturas $factura
 */
class Consolidados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consolidados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_id', 'factura_id', 'cargo_fijo'], 'required'],
            [['cliente_id', 'factura_id'], 'integer'],
            [['cargo_fijo', 'cargo_variable'], 'number'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_id' => 'id']],
            [['factura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Facturas::className(), 'targetAttribute' => ['factura_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cliente_id' => 'Cliente ID',
            'factura_id' => 'Factura ID',
            'cargo_fijo' => 'Cargo Fijo',
            'cargo_variable' => 'Cargo Variable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactura()
    {
        return $this->hasOne(Facturas::className(), ['id' => 'factura_id']);
    }
}
