<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class Admin extends Authenticatable 
{
    use HasFactory ;
    protected $guard='admin';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'mobile',
        'password',
        'status',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
