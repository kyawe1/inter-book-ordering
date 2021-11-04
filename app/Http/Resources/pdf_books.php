<?php

namespace App\Http\Resources;

use App\Http\Resources\publisher as ResourcesPublisher;

use Illuminate\Http\Resources\Json\JsonResource;

class pdf_books extends JsonResource
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
            'ISBN_Number'=>$this->ISBN_Number,
            'author_name'=>$this->author_name,
            'Details'=>$this->Details,
            'edition'=>$this->edition,
            'published_date'=>$this->published_date,
            'publisher'=>new ResourcesPublisher($this->publish)
        ];
    }
}
