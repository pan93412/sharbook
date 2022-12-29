<?php

namespace App\Models;

use App\Enums\BookStatus;
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
        "status",
    ];

    protected $casts = [
        'status' => BookStatus::class,
        'published_at' => 'datetime:Y-m-d',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pricings()
    {
        return $this->hasMany(Pricing::class);
    }

    public function bookPictures()
    {
        return $this->hasMany(BookPictures::class);
    }
}
