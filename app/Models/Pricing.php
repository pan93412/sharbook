<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "type",
        "price"
    ];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
