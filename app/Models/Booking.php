<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['Name' , 'Country' ,'Email', 'Hotel' , 'Check-in' , 'Check-out' , 'Comfort' , 'Adults' , 'Children' , 'Rooms' , 'Message'];
}
