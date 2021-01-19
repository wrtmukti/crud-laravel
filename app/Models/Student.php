<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // $fillable = untuk milih yg boleh masuk db, sisanya gaboleh
    // $guard = milih yg gaboleh masuk db, sisanya boleh masuk semua
    protected $fillable = ['nama', 'nim', 'email','jurusan'];


}
