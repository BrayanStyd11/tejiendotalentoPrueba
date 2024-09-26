<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;

    protected $table = 'positions';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'area'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_position', 'id_position', 'id_employee');
    }
}
