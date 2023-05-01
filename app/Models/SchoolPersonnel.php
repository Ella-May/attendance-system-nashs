<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolPersonnel extends Model
{
    use HasFactory;
    protected $table = 'school_personnels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'userID',
        'p_firstname',
        'p_lastname',
        'p_midname',
        'p_sex',
        'p_address',
        'p_cnumber',
        'p_position'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userID');
    }

    public function subjects()
    {
        return $this->hasMany(FacultyLoad::class, 'school_perID', 'id');
    }
}
