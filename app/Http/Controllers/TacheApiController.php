<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tache as ResourcesTache;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesTache::collection(Tache::orderbyDesc('created_at')->get());
         
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Tache::create($request-> all())) {
            return response() ->json([
                'success' => 'Tache créée avec succès.'
            ], 200);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function show(Tache $tache)
    {
        return new ResourcesTache($tache);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tache $tache)
    {
        if ( $tache -> update ($request->all())) {
            return response() ->json([
                'success' => 'Tache modifiée avec succès.'
            ], 200);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tache $tache)
    {
        $tache -> delete();
    }
}
