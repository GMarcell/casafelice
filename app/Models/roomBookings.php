<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class roomBookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'check_in_date',
        'check_out_date',
        'room_type'
    ];

    public function getAllBooking()
    {
        return DB::table('room_bookings')
            ->leftJoin('tipe_ruangan', 'tipe_ruangan.tipe_ruangan_id', '=', 'room_bookings.room_type')
            ->get();
    }
}
