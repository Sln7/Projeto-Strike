<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;


class SiteController extends Controller
{
    public function index()
    {
        $site = Site::all();
        return view('admin.site.index', compact('site'));
    }

    function new () {
        return view('admin.site.store');
    }
    public function store(request $request){
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->photo->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->photo->storeAs('site', $nameFile);
            // arquivo foi armazenado em storage/app/public/site/nomedinamicoarquivo.extensao

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
            }
        }
    }
}
