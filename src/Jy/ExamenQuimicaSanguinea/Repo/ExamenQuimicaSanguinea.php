<?php 

namespace Jy\ExamenQuimicaSanguinea\Repo;

use LaravelBook\Ardent\Ardent;
use Illuminate\Support\Facades\Config;

class ExamenQuimicaSanguinea extends Ardent {

    public static $rules = [
        'id_consulta' => 'required',
    ];
    
    protected $table = 'examen_quimica_sanguinea';
    protected $primaryKey = 'id';
    protected $fillable = ['id_consulta','glicemia_basal','glicemia_basal_tecnica','glicemia_post','glicemia_post_tecnica','trigliceridos','trigliceridos_tecnica','colesterol_total','colesterol_total_tecnica','colesterol_hdl','colesterol_hdl_tecnica','colesterol_ldl','colesterol_ldl_tecnica','acido_urico','acido_urico_tecnica','creatinina','creatinina_tecnica','bun','bun_tecnica'];

    public function consulta()
    {
        return $this->belongsTo(Config::get('examen-quimica-sanguinea::modelo_consulta'), 'id_consulta');
    }
}

