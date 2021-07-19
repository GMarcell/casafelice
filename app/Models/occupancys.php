<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class occupancys extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tanda_pengenal',
        'gender',
        'address',
        'room_number',
        'source',
        'room_type',
        'no_telephone',
        'email',
        'check_in_date',
        'check_out_date'
    ];

    public function getAllOccupancy()
    {
        return DB::table('occupancys')
            ->leftJoin('tipe_ruangan', 'tipe_ruangan.tipe_ruangan_id', '=', 'occupancys.room_type')
            ->leftJoin('tanda_pengenal', 'tanda_pengenal.tanda_pengenal_id', '=', 'occupancys.tanda_pengenal')
            ->leftJoin('gender', 'gender.gender_id', '=', 'occupancys.gender')
            ->leftJoin('source', 'source.source_id', '=', 'occupancys.source')
            ->get();
    }
}
