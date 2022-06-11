<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Carbon\Carbon;
use App\Http\Requests\NoticiaRequest;

class NoticiaController extends Controller
{
    //
    public function index()
{
    $noticias = Noticia::all();

    return view('noticias.index', [
        'noticias' => Noticia::where('status',Noticia::STATUS_ATIVO)->paginate(4)
    ]);
    return view('noticias.indexinativo', [
        'noticias' => Noticia::where('status',Noticia::STATUS_INATIVO)->get()
    ]);
}
//
public function create()
{
    return view('noticias.create');

}
public function store(NoticiaRequest $request)
{
    $dados = $request->all();

  
    $request->imagem->storeAs('public', $request->imagem->getClientOriginalName());
    $dados['imagem'] = '/storage/' . $request->imagem->getClientOriginalName();
    Noticia::create($dados);
    
    return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
}
public function edit($noticia)
{
    $noticia = Noticia::findOrFail($noticia);
    
    return view('noticias.edit', [
        'noticia' => $noticia
    ]);
}
public function update($noticia, NoticiaRequest $request)
{
    $noticia = Noticia::findOrFail($noticia);
    $dados = $request->all();
    
    if ($request->imagem) {
        $request->imagem->storeAs('public', $request->imagem->getClientOriginalName());
        $dados['imagem'] = '/storage/' . $request->imagem->getClientOriginalName();
    }
    $noticia->update($dados);
    
    return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
}

public function destroy($noticia)
{
    $noticia = Noticia::findOrFail($noticia);
    $noticia->delete();

    return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');
}

}
