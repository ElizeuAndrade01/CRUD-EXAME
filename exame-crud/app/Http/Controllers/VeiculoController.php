<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Models\ModeloVeiculos;

class VeiculoController extends Controller
{
    public readonly ModeloVeiculos $objVeiculo;

    public function __construct() {
        $this->objVeiculo = new ModeloVeiculos();
    }

    public function index(){
        $veiculos = $this->objVeiculo->all();
        return view('index', ['veiculos' => $veiculos]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update($id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
