<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPictures extends Model
{
    use HasFactory;

    protected $fillable = [
        "src",
        "alt",
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
