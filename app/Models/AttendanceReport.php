<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_subjectID',
        'ar_studentId',
        'ar_studentname',
        'ar_lrn',
        'ar_gradelvl',
        'ar_section',
        'ar_date',
        'ar_subject',
        'ar_department',
        'ar_subject',
        'ar_remarks'
    ];
}
