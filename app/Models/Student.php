<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'gender',
        'dob',
        'department',
        'batch',
        'division_id',
        'district_id',
        'phone_number',
        'email',
    ];

    public function division(){
        return $this->belongsTo(District::class, 'division_id');
    }

    public function district(){
        return $this->belongsTo(District::class, 'district_id');
    }
}
