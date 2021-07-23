<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inventori extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventori_type',
        'keterangan',
        'banyak_barang'
    ];

    public function getAllInventori()
    {
        return DB::table('inventori')
            ->leftJoin('inventori_type', 'inventori_type.inventori_type_id', '=', 'inventori.inventori_type')
            ->get();
    }
}
