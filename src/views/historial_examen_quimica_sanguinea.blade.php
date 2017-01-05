<div class="row">
    <div class="col-xs-12 form-group">
          <label>{{ Lang::get('app.label.fecha').'/'.Lang::get('app.label.hora') }}</label>
          <p class="form-control-static"> 
               Fecha: {{ $historial['created_at'] }}
          </p>
    </div>
    <div class="col-xs-12">
        <div class="row">
            @if ($examen_quimica_sanguinea['glicemia_basal'] != "")
                <div class="col-xs-2 form-group">
                    <label for="glicemia_basal">{{ Lang::get('app.label.glicemia_basal') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['glicemia_basal'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['glicemia_basal_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="glicemia_basal_tecnica">{{ Lang::get('app.label.glicemia_basal_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['glicemia_basal_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['glicemia_post'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="glicemia_post">{{ Lang::get('app.label.glicemia_post') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['glicemia_post'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['glicemia_post_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="glicemia_post_tecnica">{{ Lang::get('app.label.glicemia_post_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['glicemia_post_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['trigliceridos'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="trigliceridos">{{ Lang::get('app.label.trigliceridos') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['trigliceridos'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['trigliceridos_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="trigliceridos_tecnica">{{ Lang::get('app.label.trigliceridos_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['trigliceridos_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_total'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="colesterol_total">{{ Lang::get('app.label.colesterol_total') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_total'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_total_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="colesterol_total_tecnica">{{ Lang::get('app.label.colesterol_total_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_total_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_hdl'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="colesterol_hdl">{{ Lang::get('app.label.colesterol_hdl') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_hdl'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_hdl_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="colesterol_hdl_tecnica">{{ Lang::get('app.label.colesterol_hdl_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_hdl_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_ldl'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="colesterol_ldl">{{ Lang::get('app.label.colesterol_ldl') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_ldl'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['colesterol_ldl_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="colesterol_ldl_tecnica">{{ Lang::get('app.label.colesterol_ldl_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['colesterol_ldl_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['acido_urico'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="acido_urico">{{ Lang::get('app.label.acido_urico') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['acido_urico'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['acido_urico_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="acido_urico_tecnica">{{ Lang::get('app.label.acido_urico_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['acido_urico_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['creatinina'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="creatinina">{{ Lang::get('app.label.creatinina') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['creatinina'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['creatinina_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="creatinina_tecnica">{{ Lang::get('app.label.creatinina_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['creatinina_tecnica'] }}</p>
                </div>
            @endif
            @if ($examen_quimica_sanguinea['bun'] != "")
                <div class="col-xs-2 form-group ">
                    <label for="bun">{{ Lang::get('app.label.bun') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['bun'] }}</p>
                </div>
            @endif
             @if ($examen_quimica_sanguinea['bun_tecnica'] != "")
                <div class="col-xs-10 form-group ">
                    <label for="bun_tecnica">{{ Lang::get('app.label.bun_tecnica') }}</label>
                    <p class="form-control-static">{{ $examen_quimica_sanguinea['bun_tecnica'] }}</p>
                </div>
            @endif
        </div>
    </div>
</div>