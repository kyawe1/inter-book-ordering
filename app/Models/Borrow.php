<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Borrow extends Model
{
    use HasFactory;
    protected $guarded=[

    ];
    function book(){
        return $this->belongsTo('App\Models\Pdf_Books','book_id');
    }
}
