<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'lastname',
        'document',
        'phone',
        'city',
        'department',
        'address',
        'id_rol',
    ];

    public function positions()
    {
        return $this->belongsToMany(Positions::class, 'employees_positions', 'id_employee', 'id_position');
    }

    public function boss()
    {
        return $this->belongsToMany(Employees::class, 'employees_positions', 'id_employee', 'id_boss');
    }

    public function rol()
    {
        return $this->hasOne(Roles::class, 'id', 'id_rol');
    }
}
