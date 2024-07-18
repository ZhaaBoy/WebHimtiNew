<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLegends extends Model
{
    use HasFactory;

    protected $table = "mobile_legends";
    protected $fillable =  ['nama_pendaftar', 'email', 'nama_team', 'nama_leader', 'team_1', 'team_2', 'team_3', 'team_4', 'team_5', 'cadangan_1', 'cadangan_2', 'nomor_telpon', 'pembayaran'];
}
