<?php

namespace App\Http\Controllers;


use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnes = Abonne::All();
        return view('welcome', compact('abonnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nom' => 'required | max:255',
            'prenom' => 'required | max:255',
            'date_naissance' => 'required | date',
            'niveau_scolaire' => 'required | max:255',
            'adresse' => 'required | max:255',
            'telephone' => 'required | max:255',
            'categorie_abonnement' => 'required | max:255',
            'montant_paye' => 'required | numeric',
        ]);
        $abonnee = Abonne::create($storeData);
        return redirect()->route('abonnes.index')->with('success', 'Abonnée ajoutée avec succès');

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
        $abonnes = Abonne::find($id);
        return view('edit', compact('abonnes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function udapte (Request $request, $id){
        $updateData = $request->validate([
            'nom' => 'required | max:255',
            'prenom' => 'required | max:255',
            'date_naissance' => 'required | date',
            'niveau_scolaire' => 'required | max:255',
            'adresse' => 'required | max:255',
            'telephone' => 'required | max:255',
            'categorie_abonnement' => 'required | max:255',
            'montant_paye' => 'required | numeric',
        ]);
        Abonne::whereId($id)->update($updateData);
        return redirect('/')->with('success', 'Abonnée modifiée avec succès');

    }
    public function remove($id)
    {
        $abonne = Abonne::find($id);
        $abonne->delete();
        return redirect('/')->with('success', 'Votre abonnement a été supprimé'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
