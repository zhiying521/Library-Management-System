<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryUser extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'password',
        'email',
        'is_admin',
        'verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $hidden=[
        'password',
    ];
    protected $casts=[
        'verified_at'=>'datetime',
        'password'=>'hashed'
    ];

}
