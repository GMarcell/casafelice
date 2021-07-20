<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class traffics extends Model
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

    public function getAllTraffic()
    {
        return DB::table('traffics')
            ->leftJoin('tipe_ruangan', 'tipe_ruangan.tipe_ruangan_id', '=', 'traffics.room_type')
            ->leftJoin('tanda_pengenal', 'tanda_pengenal.tanda_pengenal_id', '=', 'traffics.tanda_pengenal')
            ->leftJoin('gender', 'gender.gender_id', '=', 'traffics.gender')
            ->leftJoin('source', 'source.source_id', '=', 'traffics.source')
            ->get();
    }
}
