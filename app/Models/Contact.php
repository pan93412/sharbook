<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $user
 * @property string $type
 * @property string $identifier
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUser($value)
 * @mixin \Eloquent
 * @property string $user_id
 * @method static \Database\Factories\ContactFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUserId($value)
 */
class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
