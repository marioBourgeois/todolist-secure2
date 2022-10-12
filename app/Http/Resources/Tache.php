<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tache extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nomTache' => 'Nom de la tache: ' . $this -> nomTache,
            'etat' => 'Etat de la tache: ' . $this -> etat,
            
        ];
    }
}
