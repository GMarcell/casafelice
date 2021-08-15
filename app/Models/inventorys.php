<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inventorys extends Model
{
    use HasFactory;

    protected $fillable = [
        'tambah',
        'kurang'
    ];

    public function getAllInventory()
    {
        return DB::table('inventory')
            ->leftJoin('inventory_type', 'inventory_type.inventory_type_id', '=', 'inventory.inventory_type')
            ->get();
    }
}
