<?php 

namespace Jy\ExamenQuimicaSanguinea\Repo;

use Illuminate\Support\Facades\Config;

trait TraitExamenQuimicaSanguineaConsulta {
	
    public function examenQuimicaSanguinea()
    {
        return $this->hasOne(Config::get('examen-quimica-sanguinea::modelo'), 'id_consulta');
    }
}