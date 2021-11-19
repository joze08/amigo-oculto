<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmigoOculto;

class AmigoOcultoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = AmigoOculto::all();
        return view('areas', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newAmigoOculto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = new AmigoOculto();
        $dados->tema = $request->input('tema');
        $dados->entregas = $request->input('entregas');
        $dados->save();
        return redirect('/amigoOculto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = AmigoOculto::find($id);
        if (isset($dados)) {
            return view('editAmigoOculto', compact('dados'));
        }
        return redirect('/amigoOculto');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = AmigoOculto::find($id);
        if (isset($dados)) {
            $dados->tema = $request->input('tema');
            $dados->entregas = $request->input('entregas');
            $dados->save();
        }
        return redirect('/amigoOculto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados = AmigoOculto::find($id);
        if (isset($dados)) {
            $dados->delete();
        } else {
            return response('Amigo oculto não foi encontrado', 404);
        }
        return redirect('/amigoOculto');
    }
}
