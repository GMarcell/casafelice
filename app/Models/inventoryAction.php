<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inventoryAction extends Model
{
    use HasFactory;

    public function getAllInventoryAction()
    {
        return DB::table('inventory_actions')
            ->leftJoin('inventory_type', 'inventory_type.inventory_type_id', '=', 'inventory_actions.inventory_type')
            ->leftJoin('inventory_action_type', 'inventory_action_type.inventory_action_id', '=', 'inventory_actions.inventory_action_type')
            ->get();
    }
}
