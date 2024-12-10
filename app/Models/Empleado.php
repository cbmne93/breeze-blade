<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cedula', 'nombres', 'apellidos'];


    public function scopeFilter($query, $params)
    {
        $query->where(function ($query) use ($params) {
            $query->when($params['search'] ?? false, function ($query, $search) {
                $query->where('nombres', 'LIKE', '%' . $search . '%')
                    ->orWhere('apellidos', 'LIKE', '%' . $search . '%')
                    ->orWhere('cedula', 'LIKE', '%' . $search . '%');
            });
        });
    }
}
