<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function book()
    {
        return $this->belongsTo('App\Models\Pdf_Books', 'book_id');
    }
}
