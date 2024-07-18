<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $table = "startups";
    protected $fillable =  ['nama_pendaftar', 'email', 'nama_team', 'anggota_1', 'anggota_2', 'nama_sekolah', 'no_hp', 'pembayaran'];
}
