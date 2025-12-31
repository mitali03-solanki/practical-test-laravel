<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * class Test
     * 
     * property int $id
     * property string $name
     * property string $email
     * property string|null $description
     * property int $age
     * property string $password
     * property \Illuminate\Support\Carbon|null $created_at
     * property \Illuminate\Support\Carbon|null $updated_at
     */


    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $searchable = ['name', 'email', 'description', 'age'];
    protected $fillable = ['name' , 'email','description','age','password'];
}
