<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;

class FormularioController extends Controller
{
    
    public function index()
    {
        return view('formulario');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $dados)
    {

        $validatedData = $dados->validate([

            'Nome' => 'required',
            'DataNascimento' => 'required',
            'Endereco' => 'required',
            'CEP' => 'required',
            'Cidade' => 'required',
            'Estado' => 'required',
            'TelefoneFixo' => 'required',
            'TelefoneCelular' => 'required'
        ]);
            
        $Formulario = new Formulario;

        $Formulario->name = $dados->Nome;
        $Formulario->data_nascimento = date("Y-m-d H:i:s", strtotime($dados->DataNascimento));
        $Formulario->endereco = $dados->Endereco;
        $Formulario->cep = (int)$dados->CEP;
        $Formulario->cidade = $dados->Cidade;
        $Formulario->estado = $dados->Estado;
        $Formulario->telefone_fixo = $dados->TelefoneFixo;
        $Formulario->telefone_celular = $dados->TelefoneCelular;
        
        $Formulario->save();
        
        session()->flash('success', 'Cadastrado com sucesso!'); 
        return redirect('/formulario');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
