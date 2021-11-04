<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf_Books extends Model
{
    use HasFactory;
    protected $guarded=[
        'slug'
    ];
    function set_slug(){
        $this->slug=str_replace(' ','_',$this->name);
    }
    function publish(){
        return $this->belongsTo('App\Models\Publisher','publish_id');
    }
}
