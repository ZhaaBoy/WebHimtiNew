<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bootcamp extends Model
{
    use HasFactory;

    protected $table = "bootcamps";
    protected $fillable =  ['nama','nim', 'kelas', 'tgl_lahir', 'alamat', 'no_kel', 'no_hp'];
}
