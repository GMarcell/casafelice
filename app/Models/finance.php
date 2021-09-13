<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class finance extends Model
{
    use HasFactory;

    public function getAllFinance()
    {
        return DB::table('finance')
            ->leftJoin('tipe_finance', 'tipe_finance.id_tipe_finance', '=', 'finance.tipe')
            ->get();
    }
}
