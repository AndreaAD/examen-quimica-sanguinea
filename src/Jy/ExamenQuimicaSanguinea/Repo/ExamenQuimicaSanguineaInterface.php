<?php

namespace Jy\ExamenQuimicaSanguinea\Repo;

interface ExamenQuimicaSanguineaInterface {

	const MODELO = 'modelo';

	public function model($model);

	public function store(array $input);

	public function update(array $input);

	public function get($id_consulta);

	public function getLast($consultas);

	public function errors();
}