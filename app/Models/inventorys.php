<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inventorys extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function getAllInventory()
    {
        return DB::table('inventorys')
            ->leftJoin('inventory_type', 'inventory_type.inventory_type_id', '=', 'inventorys.inventory_type')
            ->get();
    }
}
