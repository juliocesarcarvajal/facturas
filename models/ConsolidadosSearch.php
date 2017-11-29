<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consolidados;

/**
 * ConsolidadosSearch represents the model behind the search form about `app\models\Consolidados`.
 */
class ConsolidadosSearch extends Consolidados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cliente_id', 'estrato', 'numero_horas', 'numero_minutos', 'numero_kb'], 'integer'],
            [['cargo_basico', 'cargo_variable', 'valor_hora', 'sub_total_horas', 'valor_minuto', 'sub_total_minutos', 'valor_kb', 'sub_total_kb', 'total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Consolidados::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cliente_id' => $this->cliente_id,
            'cargo_basico' => $this->cargo_basico,
            'cargo_variable' => $this->cargo_variable,
            'estrato' => $this->estrato,
            'numero_horas' => $this->numero_horas,
            'valor_hora' => $this->valor_hora,
            'sub_total_horas' => $this->sub_total_horas,
            'numero_minutos' => $this->numero_minutos,
            'valor_minuto' => $this->valor_minuto,
            'sub_total_minutos' => $this->sub_total_minutos,
            'numero_kb' => $this->numero_kb,
            'valor_kb' => $this->valor_kb,
            'sub_total_kb' => $this->sub_total_kb,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
