<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webdg extends Model
{
    use HasFactory;

    protected $table = "webdgs";
    protected $fillable =  ['nama_team', 'email', 'nomor_telpon', 'pembayaran'];
}
