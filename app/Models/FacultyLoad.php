<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyLoad extends Model
{
    use HasFactory;
    protected $table = 'faculty_loads';
    protected $primaryKey = 'id';
    protected $fillable = [
        'perID',
        'sub_name',
        'sub_gradelvl',
        'sub_strand',
        'sub_section',
        'sub_day',
        'sub_timestart',
        'sub_timeend'
    ];
}
