<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamarr154 extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    protected $primarykey = 'kamar_id';
    // protected $keytype = 'string';
    protected $fillable = [
        'id',
        'id_pasien',
        ',',
    ];
}
