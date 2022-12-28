<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "isbn",
        "author",
        "publisher",
        "published_at",
        "language",
        "is_used",
    ];

    public function users()
    {
        $this->belongsTo(User::class);
    }

    public function pricings()
    {
        $this->hasMany(Pricing::class);
    }
}
