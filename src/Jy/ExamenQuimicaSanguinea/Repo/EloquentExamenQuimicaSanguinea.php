<?php

namespace Jy\ExamenQuimicaSanguinea\Repo;


use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenQuimicaSanguinea\Repo\ExamenQuimicaSanguineaInterface;

class EloquentExamenQuimicaSanguinea implements ExamenQuimicaSanguineaInterface {

    private $app;
    private $errors;
    private $consulta;

    public function __construct($app = null, ConsultaInterface $consulta)
    {
        $this->app = $app ?: app();
        $this->consulta = $consulta;
    }

    public function model($model)
    {
        $this->model = $this->app['config']->get('examen-quimica-sanguinea::'.$model);

        if ($this->model)
            return $this->app[$this->model];

        throw new \Exception("No se encuentra el modelo especificado (".$model.") en jy/examen-quimica-sanguinea/config/config.php", 639);
    }

    public function store(array $input)
    {
        $model = $this->model(self::MODELO);
        $examen_quimica_sanguinea = $model->newInstance([]);
        return $this->save($examen_quimica_sanguinea, $input);
    }

    public function update(array $input)
    {
        $examen_quimica_sanguinea = $this->get($input['id_consulta']);
        return $this->save($examen_quimica_sanguinea, $input);
    }

    public function get($id_consulta)
    {
        $model = $this->model(self::MODELO);
        return $model->where('id_consulta', '=', $id_consulta)->first();
    }

    public function getLast($consultas)
    {
        $model = $this->model(self::MODELO);
        return $model->whereIn('id_consulta', $consultas)
                    ->orderBy('id', 'desc')
                    ->first();
    }

    public function save($examen_quimica_sanguinea, $input)
    {
        $examen_quimica_sanguinea->id_consulta = $input['id_consulta'];
        $examen_quimica_sanguinea->glicemia_basal = $input['glicemia_basal'];
        $examen_quimica_sanguinea->glicemia_basal_tecnica = $input['glicemia_basal_tecnica'];
        $examen_quimica_sanguinea->glicemia_post = $input['glicemia_post'];
        $examen_quimica_sanguinea->glicemia_post_tecnica = $input['glicemia_post_tecnica'];
        $examen_quimica_sanguinea->trigliceridos = $input['trigliceridos'];
        $examen_quimica_sanguinea->trigliceridos_tecnica = $input['trigliceridos_tecnica'];
        $examen_quimica_sanguinea->colesterol_total = $input['colesterol_total'];
        $examen_quimica_sanguinea->colesterol_total_tecnica = $input['colesterol_total_tecnica'];
        $examen_quimica_sanguinea->colesterol_hdl = $input['colesterol_hdl'];
        $examen_quimica_sanguinea->colesterol_hdl_tecnica = $input['colesterol_hdl_tecnica'];
        $examen_quimica_sanguinea->colesterol_ldl = $input['colesterol_ldl'];
        $examen_quimica_sanguinea->colesterol_ldl_tecnica = $input['colesterol_ldl_tecnica'];
        $examen_quimica_sanguinea->acido_urico = $input['acido_urico'];
        $examen_quimica_sanguinea->acido_urico_tecnica = $input['acido_urico_tecnica'];
        $examen_quimica_sanguinea->creatinina = $input['creatinina'];
        $examen_quimica_sanguinea->creatinina_tecnica = $input['creatinina_tecnica'];
        $examen_quimica_sanguinea->bun = $input['bun'];
        $examen_quimica_sanguinea->bun_tecnica = $input['bun_tecnica'];

        if ($examen_quimica_sanguinea->validate())
        {
            $examen_quimica_sanguinea->save();
            return $examen_quimica_sanguinea;
        } else {
            $this->errors = $examen_quimica_sanguinea->errors();
            return false;
        }
    }

    public function errors()
    {
        return $this->errors;
    }
}