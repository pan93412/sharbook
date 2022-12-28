<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $user_id
 * @property string|null $isbn
 * @property string|null $author
 * @property string|null $publisher
 * @property string|null $published_at
 * @property string|null $language
 * @property int $is_used
 * @method static \Database\Factories\BookFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUserId($value)
 * @mixin \Eloquent
 */
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
