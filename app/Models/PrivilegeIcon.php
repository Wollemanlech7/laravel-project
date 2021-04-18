<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivilegeIcon extends Model
{
    use HasFactory;


    public function privilegeCategory() {
        return $this->belongsToMany(privilegeCategory::class);
    }
}
