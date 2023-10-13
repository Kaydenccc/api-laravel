<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'fullname','email','password','kontak_ort','kontak_sis','kelas_id'
    ];

    protected $table = 'siswa';
}
