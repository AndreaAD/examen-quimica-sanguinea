<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearModuloExamenQuimicaSanguinea extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examen_quimica_sanguinea', function($table){
            $table->bigIncrements('id');
            $table->bigInteger('id_consulta')->unsigned();
            $table->string('glicemia_basal')->nullable();
            $table->string('glicemia_basal_tecnica')->nullable();
            $table->string('glicemia_post')->nullable();
            $table->string('glicemia_post_tecnica')->nullable();
            $table->string('trigliceridos')->nullable();
            $table->string('trigliceridos_tecnica')->nullable();
            $table->string('colesterol_total')->nullable();
            $table->string('colesterol_total_tecnica')->nullable();
            $table->string('colesterol_hdl')->nullable();
            $table->string('colesterol_hdl_tecnica')->nullable();
            $table->string('colesterol_ldl')->nullable();
            $table->string('colesterol_ldl_tecnica')->nullable();
            $table->string('acido_urico')->nullable();
            $table->string('acido_urico_tecnica')->nullable();
            $table->string('creatinina')->nullable();
            $table->string('creatinina_tecnica')->nullable();
            $table->string('bun')->nullable();
            $table->string('bun_tecnica')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });

        if (Schema::hasTable('consultas'))
        {
            Schema::table('examen_quimica_sanguinea', function($table){
                $table->foreign('id_consulta')->references('id')->on('consultas')->onDelete('cascade');
            });

        }

        if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            $id_modulo = DB::table('modulos')->insertGetId(
                ['nombre' => 'Examen química sanguínea', 'icono' => 'fa-folder-o', 'descripcion' => 'Paquete para gestionar el examen de química sanguínea de sus pacientes', 'predeterminado' => 0, 'valor'  => 10000]
            );

            DB::table('permissions')->insert([
                ['name' => 'gestionar_examen_quimica_sanguinea', 'display_name' => 'Examen química sanguínea', 'id_modulo' => $id_modulo]
            ]);
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            DB::table('permissions')->where('name', '=', 'gestionar_examen_quimica_sanguinea')->delete();
            DB::table('modulos')->where('nombre', '=', 'Examen química sanguínea')->delete();
        }

        if (Schema::hasTable('consultas'))
        {
	        Schema::table('examen_quimica_sanguinea', function(Blueprint $table){
	            $table->dropForeign('examen_quimica_sanguinea_id_consulta_foreign');
	        });

        }

        Schema::drop('examen_quimica_sanguinea');
	}

}
