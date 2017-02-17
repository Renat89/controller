<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    //
  public function index()
      {
        $editoras = Editora::all();
        return view('editora.index', compact('editoras'));
      }


  public function cria()
      {
        return view('editora.cria');
      }

  public function armazena()
      {
        Editora::create(request()->all());

        return redirect('/editoras');
    }

  public function edita($id)
  {
    $editora = Editora::find($id);  //Procurar a editora
    return view('editora.edita', compact('editora')); //pode usar editora/edita

  }

  public function atualiza($id)
  {
    $editora = Editora::find($id);
    $editora->fill(request()->all());
    $editora->save();

    //$valores = collect(request()->all());
    //$valorea->pull('email');
    //dd($valores->all());

    return redirect('/editoras');
  }


}
