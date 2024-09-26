<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesPositions extends Model
{
    use HasFactory;

    protected $table = 'employees_positions';
    protected $guarded = ['id'];
    protected $fillable = [
        'id_employee',
        'id_position',
        'id_boss',
    ];

    public function positions()
    {
        return $this->belongsToMany(Positions::class,'employees_positions','id_position','id_employee');
    }

    public function employee()
    {
        return $this->hasOne(Employees::class, 'id', 'id_employee');
    }

    public function boss(){
        return $this->hasOne(Employees::class, 'id', 'id_boss');
    }
}
