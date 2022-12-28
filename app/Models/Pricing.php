<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pricing
 *
 * @property int $id
 * @property string $book_id
 * @property string $type
 * @property string $price
 * @property-read \App\Models\Book|null $books
 * @method static \Database\Factories\PricingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricing whereType($value)
 * @mixin \Eloquent
 */
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
