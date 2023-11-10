<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }
}
