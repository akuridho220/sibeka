<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengajuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $with = ['user_id'];

    public function konseli(): BelongsTo
    {
        return $this->belongsTo(User::class, 'konseli_id', 'id');
    }

    public function konselor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'konselor_id', 'id');
    }

    public function laporan()
    {
        return $this->hasOne(Laporan::class);
    }
}
