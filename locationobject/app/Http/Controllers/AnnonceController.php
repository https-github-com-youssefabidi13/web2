<?php

namespace App\Http\Controllers;

use App\Models\annonces;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partenaire.ajouterAnnonce'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// Validate form data
$validatedData = $request->validate([
    'object_id' => 'required',
    'ville' => 'required' , 
    'jours_min' => 'required',
    'price' => 'required', 
    'date_debut' =>'required', 
    'date_fin' => 'required' ,  
]);
$validatedData['user_id'] = auth()->id();
// Create a new Annonce instance with validated form data
$annonce = new annonces([
    'products_id' => $validatedData['object_id'],
    'city' => $validatedData['ville'],
    'minday' => $validatedData['jours_min'],
    'regular_price' => $validatedData['price'],
    'from' => $validatedData['date_debut'],
    'to' => $validatedData['date_fin'],
    'user_id' => $validatedData['user_id'] 
]);
// Save the Annonce instance to the database
$annonce->save();
    if ($annonce) {
        // Get the number of annonces with a status of "enlign"
        $enlignCount = annonces::where('stat', 1)->count();

        // Check if there are fewer than 5 annonces with a status of "enlign"
        if ($enlignCount < 5) {
            // Set the status of the new annonce to "enlign"
            $annonce->stat = 1;
            // Save the updated status to the database
            $annonce->save();
            return redirect('/addAnnonce')->with('message' , 'Annonce poster avec succees!');
        } else {
            // Set the status of the new annonce to "en   attente"
            $annonce->stat = 2;
            // Save the updated stat to the database
            $annonce->save();
            return redirect('/addAnnonce')->with('message' , 'Annonce en attente!');
        }
}    }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
