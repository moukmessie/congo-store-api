<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EshopsResource extends JsonResource
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
            'id'=>(string)$this->id,
            'type'=>'Eshops',
        'attributes'=>[
            'store_siret'=>$this->store_siret,
            'store_name'=>$this->store_name,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at
            ]
        ];
    }
}
