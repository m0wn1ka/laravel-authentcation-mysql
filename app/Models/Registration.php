<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','homephone','extension','workphone','fax','cellphone','email','homeaddress','country','city','state','zip','gender','martialstatus','dob','checkbox'];
}
