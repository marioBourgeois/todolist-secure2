<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller

{
    public function index() {
               
        $taches = Tache::all();
        
        
        return view('listeDeTaches', compact('taches'));

    }


    //création d'une tache (create)
    public function ajouterTache(Request $request) {

        Tache::create([
            'nomTache' => $request->tache,
            'etat' => 0,
            'user_id' => auth()->id() 
        ]);

        return redirect('listeDeTaches');

    }


    public function edit($id){
        $tache = Tache::findOrFail($id);

        return view('tacheEdit', compact('tache'));
    }


    public function update($id, Request $request) {
    
        $tache = Tache::findOrFail($id);
    
        $tache->update(["nomTache"=>$request->tache
        ]);
    
        return redirect('listeDeTaches');
        }

       
    public function delete($id){

            $tache = Tache::findOrFail($id);
            $tache->delete();
            return redirect('listeDeTaches');
        }


    public function dashboard(){

            return view('dashboard');
    
        }
}
