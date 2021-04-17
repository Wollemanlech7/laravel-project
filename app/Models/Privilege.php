<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use HasFactory;

    public function privilegeCategory() {
        return $this->belongsTo(PrivilegeCategory::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_privileges');
    }
}
