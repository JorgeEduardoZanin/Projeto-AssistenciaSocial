<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        return response()->json($noticias);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $noticia = Noticia::create($request->all());

        if ($request->has('entidades')) {
            $noticia->entidades()->sync($request->entidades);
        }

        return response()->json($noticia, 201);
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return response()->json($noticia);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());


        if ($request->has('entidades')) {
            $noticia->entidades()->sync($request->entidades);
        }

        return response()->json($noticia, 200);
    }

    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return response()->json(null, 204);
    }
}
