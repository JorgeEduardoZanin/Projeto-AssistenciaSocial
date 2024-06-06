<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidade;
use App\Models\Local;

class EntidadeController extends Controller
{
    public function index()
    {
        $entidades = Entidade::with('locals')->get();
        return view('entidadeDash', compact('entidades'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string|max:500',
            'hour' => 'required|string|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'local_id' => 'required|exists:locals,id'
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $validatedData['image'] = $imageName;
        }

        $entidade = Entidade::create($validatedData);

        if ($request->has('local_id')) {
            $entidade->locals()->associate($request->local_id);
            $entidade->save();
        }

        return redirect()->route('dashboard')->with('success', 'Entidade criada com sucesso.');
    }



    public function show($local)
    {
        $local = Local::findOrFail($local);

        $entidades = $local->entidades()->paginate(4); // Paginação com 10 entidades por página

        return view('entidades', compact('entidades'));
    }


    public function create()
    {
        $locais = Local::all();

        return view('entidadeCreate', compact('locais'));
    }

    public function update(Request $request, Entidade $entidade)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string|max:500',
            'hour' => 'required|string|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'local_id' => 'required|exists:locals,id'
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $validatedData['image'] = $imageName;
        }

        $entidade->update($validatedData);

        if ($request->has('local_id')) {
            $entidade->locals()->associate($request->local_id);
            $entidade->save();
        }

        return redirect()->route('dashboard')->with('success', 'Entidade atualizada com sucesso.');
    }
    public function edit(Entidade $entidade)
    {
        $locais = Local::all();
        return view('entidadeEdit', compact('entidade', 'locais'));
    }


    public function destroy(Entidade $entidade)
    {
        $entidade->delete();

        return redirect()->back()->with('success', 'Entidade excluída com sucesso.');
    }
}
