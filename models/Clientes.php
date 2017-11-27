<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property string $telefono
 * @property string $direccion
 * @property string $sexo
 * @property string $email
 *
 * @property Consolidados[] $consolidados
 * @property Facturas[] $facturas
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'cedula', 'telefono', 'direccion', 'sexo', 'email'], 'required'],
            [['nombres', 'apellidos'], 'string', 'max' => 64],
            [['cedula', 'telefono', 'direccion'], 'string', 'max' => 32],
            [['sexo'], 'string', 'max' => 16],
            [['email'], 'string', 'max' => 128],
            [['cedula'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'sexo' => 'Sexo',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsolidados()
    {
        return $this->hasMany(Consolidados::className(), ['cliente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Facturas::className(), ['cliente_id' => 'id']);
    }

    public function getfullName()
    {
        return $this->nombres.' '.$this->apellidos;
    }
}
