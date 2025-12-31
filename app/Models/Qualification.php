<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * class Qualification
 * 
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $institute
 * @property int|null $year
 * @property string|null $grade
 * @property $created_at
 * @property $updated_at
 */

class Qualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'institute',
        'year',
        'grade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
