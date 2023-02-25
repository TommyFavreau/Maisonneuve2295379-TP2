<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //select * from blog_posts where id = $etudiant" 
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::select()
        ->paginate(15);

        return view('etudiant.index', ['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create',[ 'villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'address' => 'required|string',
            'phone' => 'required|max:20',
            'email' => 'required|email|unique:etudiants',
            'birthday' => 'required|date_format:Y-m-d|before:today|after:1900-01-01',
            'ville_id' => 'exists:villes,id',
            'users_id' => 'sometimes|integer',
        ]);
        
        $users_id = ($request->users_id) ? $request->users_id : null;
        $newEtudiant = Etudiant::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'ville_id' => $request->ville_id,
            'users_id' => $users_id
        ]);

        return redirect(route('etudiant.show', $newEtudiant->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //select * from blog_posts where id = $etudiant" 
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant, Ville $ville)
    {
        $villes = Ville::all();
        return view('etudiant.edit', ['etudiant' => $etudiant, 'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'address' => 'required|string',
            'phone' => 'required|max:20',
            'email' => 'required|email|exists:etudiants',
            'birthday' => 'required|date_format:Y-m-d|before:today|after:1900-01-01',
            'ville_id' => 'exists:villes,id',
            'users_id' => 'sometimes|integer'
        ]);

        $users_id = ($request->users_id) ? $request->users_id : null;
        $etudiant->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'ville_id' => $request->ville_id,
            'users_id' => $users_id
        ]);

        return redirect(route('etudiant.show', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect(route('index'));
    }

}
