<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyLoad extends Model
{
    use HasFactory;

    protected $table = 'faculty_loads';

    protected $fillable = [
        'school_perID',
        'subject_infoID',
    ];

    public function schoolPersonnel()
    {
        return $this->hasOne(SchoolPersonnel::class, 'id', 'school_perID');
    }

    public function subjectInfo()
    {
        return $this->hasOne(SubjectInfo::class, 'id', 'subject_infoID');
    }
}
