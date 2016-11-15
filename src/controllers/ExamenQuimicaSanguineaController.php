<?php

use \Illuminate\Routing\Controller;
use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenQuimicaSanguinea\Repo\ExamenQuimicaSanguineaInterface;

class ExamenQuimicaSanguineaController extends Controller {

    protected $examen_quimica_sanguinea;
    protected $consulta;

    public function __construct(ConsultaInterface $consulta, ExamenQuimicaSanguineaInterface $examen_quimica_sanguinea)
    {
        $this->consulta = $consulta;
        $this->examen_quimica_sanguinea = $examen_quimica_sanguinea;
    }

    public function index()
    {
        $consulta_activa = $this->consulta->obtenerConsultaActiva();
        if (!is_null($consulta_activa))
        {
            $examen_quimica_sanguinea = $this->examen_quimica_sanguinea->get($consulta_activa->id);

            if (!$examen_quimica_sanguinea)
            {
                $paciente = $consulta_activa->paciente;
                $consultas = $paciente->consultas()->lists('id');
                $examen_quimica_sanguinea = $this->examen_quimica_sanguinea->getLast($consultas);
            }

            $formulario = [
                'empresa' => $consulta_activa->empresa,
                'sede' => $consulta_activa->sede,
                'paciente' => $consulta_activa->paciente,
                'consulta' => $consulta_activa,
                'examen_quimica_sanguinea' => $examen_quimica_sanguinea,
                'status' => Session::get('status')
            ];

            $datos = [
                'seccion' => Config::get('examen-quimica-sanguinea::seccion_examen_quimica_sanguinea'),
                'formulario' => View::make(Config::get('examen-quimica-sanguinea::formulario'), $formulario)
            ];

            return View::make(Config::get('examen-quimica-sanguinea::vista_formulario'), $datos);
        } else {

            return Redirect::to('error/C01/'.Config::get('examen-quimica-sanguinea::seccion_examen_quimica_sanguinea'));
        }
    }

    public function store()
    {
        $resultado = $this->examen_quimica_sanguinea->store(Input::all());
        if ($resultado)
        {
            $this->consulta->updateHistoria(Input::get('id_consulta'), Config::get('examen-quimica-sanguinea::seccion_examen_quimica_sanguinea'));
            return Redirect::to(Config::get('examen-quimica-sanguinea::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-quimica-sanguinea::prefijo_ruta'))
                            ->withInput()
                            ->withErrors($this->examen_quimica_sanguinea->errors())
                            ->with('status', 'error');
        }
    }

    public function update()
    {
        $resultado = $this->examen_quimica_sanguinea->update(Input::all());
        
        if($resultado)
        {       
            return Redirect::to(Config::get('examen-quimica-sanguinea::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-quimica-sanguinea::prefijo_ruta'))
                            ->withInput()
                            ->withErrors( $this->examen_quimica_sanguinea->errors() )
                            ->with('status', 'error');
        }
    }

    public function historialExamenCoprologico()
    {
        $historiales = $this->consulta->historiales(Input::get('id_paciente'), Input::get('fecha_i', null), Input::get('fecha_f', null));

        $examen_quimica_sanguinea = [];

        foreach ($historiales as $historial) 
        {
            if (count($historial->examenQuimicaSanguinea))
                array_push($examen_quimica_sanguinea, $historial);
        }

        return Response::json($examen_quimica_sanguinea);
    }

    public function getHistorialExamenCoprologico()
    {
        $historial = $this->consulta->get(Input::get('id'));
        $datos = [
            'historial' => $historial,
            'examen_quimica_sanguinea' => $historial->examenQuimicaSanguinea
        ];

        return View::make(Config::get('examen-quimica-sanguinea::historial_examen_quimica_sanguinea'), $datos)
                    ->render();
    }

}