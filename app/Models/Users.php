<?php

namespace App\Models;

use App\Models\UserTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "username",
        "name",
        "surname",
        "phoneNumber",
        "mail",
        "password"
    ];

    public function type() {
        return $this->hasOne(UserTypes::class , 'id' , 'type');
    }
    
}
