<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consolidados".
 *
 * @property integer $id
 * @property integer $cliente_id
 * @property double $cargo_basico
 * @property double $cargo_variable
 * @property integer $estrato
 * @property integer $numero_horas
 * @property double $valor_hora
 * @property double $sub_total_horas
 * @property integer $numero_minutos
 * @property double $valor_minuto
 * @property double $sub_total_minutos
 * @property integer $numero_kb
 * @property double $valor_kb
 * @property double $sub_total_kb
 * @property double $total
 *
 * @property Clientes $cliente
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
            [['cliente_id', 'cargo_basico', 'estrato'], 'required'],
            [['cliente_id', 'estrato', 'numero_horas', 'numero_minutos', 'numero_kb'], 'integer'],
            [['cargo_basico', 'cargo_variable', 'valor_hora', 'sub_total_horas', 'valor_minuto', 'sub_total_minutos', 'valor_kb', 'sub_total_kb', 'total'], 'number'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_id' => 'id']],
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
            'cargo_basico' => 'Cargo Basico',
            'cargo_variable' => 'Cargo Variable',
            'estrato' => 'Estrato',
            'numero_horas' => 'Número Horas',
            'valor_hora' => 'Valor Hora',
            'sub_total_horas' => 'Sub Total Horas',
            'numero_minutos' => 'Número Minutos',
            'valor_minuto' => 'Valor Minuto',
            'sub_total_minutos' => 'Sub Total Minutos',
            'numero_kb' => 'Número Kb',
            'valor_kb' => 'Valor Kb',
            'sub_total_kb' => 'Sub Total Kb',
            'total' => 'Total a pagar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_id']);
    }
}
