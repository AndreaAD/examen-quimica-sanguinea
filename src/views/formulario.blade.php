<div class="row cyan">
    <div class="col-xs-12">
        <h1>{{ Lang::get('app.examen_quimica_sanguinea.titulo') }}</h1>
    </div>
</div>
<div class="contenido">
    <div class="row">
        <div class="col-xs-12">
            <h3><i class="fa fa-file-o"></i> {{ Lang::get('app.examen_quimica_sanguinea.sub-titulo') }}</h3>
            <p class="text-muted">{{ Lang::get('app.examen_quimica_sanguinea.mensaje.formulario') }}<br><br></p>
        </div>
    </div>
    @if ($status == 'error')
        @include('includes.msgerror')
    @elseif ( $status == 'success' )
        @include('includes.msgok')
    @endif
    {{ Form::open(['url' => Config::get('examen-quimica-sanguinea::prefijo_ruta').'/', 'method' => (!$examen_quimica_sanguinea || $examen_quimica_sanguinea['id_consulta'] != $consulta['id']? 'post' : 'put')]) }}
        <fieldset>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item" >
                            @include('includes.paciente_consulta')
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="glicemia_basal">{{ Lang::get('app.label.glicemia_basal') }}</label>
                                    {{ Form::text('glicemia_basal', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['glicemia_basal'] : Input::old('glicemia_basal'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="glicemia_basal_tecnica">{{ Lang::get('app.label.glicemia_basal_tecnica') }}</label>
                                    {{ Form::text('glicemia_basal_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['glicemia_basal_tecnica'] : Input::old('glicemia_basal_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="glicemia_post">{{ Lang::get('app.label.glicemia_post') }}</label>
                                    {{ Form::text('glicemia_post', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['glicemia_post'] : Input::old('glicemia_post'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="glicemia_post_tecnica">{{ Lang::get('app.label.glicemia_post_tecnica') }}</label>
                                    {{ Form::text('glicemia_post_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['glicemia_post_tecnica'] : Input::old('glicemia_post_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="trigliceridos">{{ Lang::get('app.label.trigliceridos') }}</label>
                                    {{ Form::text('trigliceridos', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['trigliceridos'] : Input::old('trigliceridos'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="trigliceridos_tecnica">{{ Lang::get('app.label.trigliceridos_tecnica') }}</label>
                                    {{ Form::text('trigliceridos_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['trigliceridos_tecnica'] : Input::old('trigliceridos_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="colesterol_total">{{ Lang::get('app.label.colesterol_total') }}</label>
                                    {{ Form::text('colesterol_total', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_total'] : Input::old('colesterol_total'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="colesterol_total_tecnica">{{ Lang::get('app.label.colesterol_total_tecnica') }}</label>
                                    {{ Form::text('colesterol_total_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_total_tecnica'] : Input::old('colesterol_total_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="colesterol_hdl">{{ Lang::get('app.label.colesterol_hdl') }}</label>
                                    {{ Form::text('colesterol_hdl', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_hdl'] : Input::old('colesterol_hdl'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="colesterol_hdl_tecnica">{{ Lang::get('app.label.colesterol_hdl_tecnica') }}</label>
                                    {{ Form::text('colesterol_hdl_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_hdl_tecnica'] : Input::old('colesterol_hdl_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="colesterol_ldl">{{ Lang::get('app.label.colesterol_ldl') }}</label>
                                    {{ Form::text('colesterol_ldl', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_ldl'] : Input::old('colesterol_ldl'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="colesterol_ldl_tecnica">{{ Lang::get('app.label.colesterol_ldl_tecnica') }}</label>
                                    {{ Form::text('colesterol_ldl_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['colesterol_ldl_tecnica'] : Input::old('colesterol_ldl_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="acido_urico">{{ Lang::get('app.label.acido_urico') }}</label>
                                    {{ Form::text('acido_urico', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['acido_urico'] : Input::old('acido_urico'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="acido_urico_tecnica">{{ Lang::get('app.label.acido_urico_tecnica') }}</label>
                                    {{ Form::text('acido_urico_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['acido_urico_tecnica'] : Input::old('acido_urico_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="creatinina">{{ Lang::get('app.label.creatinina') }}</label>
                                    {{ Form::text('creatinina', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['creatinina'] : Input::old('creatinina'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="creatinina_tecnica">{{ Lang::get('app.label.creatinina_tecnica') }}</label>
                                    {{ Form::text('creatinina_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['creatinina_tecnica'] : Input::old('creatinina_tecnica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="bun">{{ Lang::get('app.label.bun') }}</label>
                                    {{ Form::text('bun', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['bun'] : Input::old('bun'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-10">
                                    <label for="bun_tecnica">{{ Lang::get('app.label.bun_tecnica') }}</label>
                                    {{ Form::text('bun_tecnica', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['bun_tecnica'] : Input::old('bun_tecnica'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::hidden('historial', true, ['data-url' => URL::to('historial/examen_quimica_sanguinea'), 'data-id' => $consulta['id_paciente']]) }}
                {{ Form::hidden('id', $examen_quimica_sanguinea ? $examen_quimica_sanguinea['id'] : '0', array()) }}
                {{ Form::hidden('id_consulta', $consulta ? $consulta['id'] : '0', array()) }}
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary">{{ Lang::get('app.interface.guardar') }}</button>
                    <a href="{{URL::to(Config::get('examen-quimica-sanguinea::prefijo_ruta').'/')}}" class="btn btn-default back">{{ Lang::get('app.interface.volver') }}</a>
                </div>
            </div>
        </fieldset>
    {{ Form::close() }}
</div>
