<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Authenticatable 
{
    use HasApiTokens, Notifiable, HasFactory;

    // Specify the custom table name
    protected $table = 'custom_users';

    // Specify the primary key if it's different from the default 'id'
    protected $primaryKey = 'custom_id';

    // Add any other custom settings like timestamps, fillable fields, etc.
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'password',
        // add other fields as necessary
    ];
}
