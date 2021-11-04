<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class publisher extends JsonResource
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
            'name'=>$this->name,
            'address'=>$this->address,
            'contact_number'=>$this->contact_number,
            'email'=>$this->email,
            'ban'=>$this->ban
        ];
    }
}
