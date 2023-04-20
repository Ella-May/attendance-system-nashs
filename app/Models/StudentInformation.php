<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    use HasFactory;
    protected $table = 'student_information';
    protected $primaryKey = 'id';
    protected $fillable =
        ['lrn',
        's_firstname',
        's_midname',
        's_lastname',
        's_address',
        's_cnumber',
        'g_name',
        'g_cnumber',
        's_gradelvl',
        's_section',
        's_strand',
        's_bday',
        's_age',
        's_sex'];
}
