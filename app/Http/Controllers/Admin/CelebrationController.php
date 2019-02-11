<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Celebration;

class CelebrationController extends Controller
{
    public function index()
    {
        $celebrations = Celebration::all();
        return view('admin.celebrations.index', compact('celebrations'));
    }

    function new () {
        return view('admin.celebrations.store');
    }

    public function store(Request $request)
    {


        //transferindo dados para o array
        $eventData = $request->all();
        
        // Define o valor default para a variável que contém o nome da imagem
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->photo->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->photo->storeAs('celebrations', $nameFile);
            // arquivo foi armazenado em storage/app/public/celebrations/nomedinamicoarquivo.extensao

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
            }

        }
        //Setando hash do nome do arquivo para salvar no banco
        $eventData['photo'] = $nameFile;

        $celebration = new Celebration();
        $celebration->create($eventData);

        print 'evento inserido com sucesso';
    }

    public function edit(Celebration $celebration)
    {
        return view('admin.celebrations.edit', compact('celebration'));
    }

    public function update(Request $request, $id)
    {
        $celebrationData = $request->all();

        $validator = $request->validated();

        $celebration = Celebration::findOrFail($id);
        $celebration->update($celebrationData);

        print 'produto atualizado com sucesso';
    }

    public function delete($id)
    {
        $celebration = Celebration::findOrFail($id);
        $celebration->delete();

        print 'produto removido com sucesso';
    }
}
