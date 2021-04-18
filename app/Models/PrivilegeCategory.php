<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivilegeCategory extends Model
{
    use HasFactory;

    public function privileges() {
        return $this->hasMany(Privilege::class);
    }

    public function privilegeIcon() {
        return $this->hasMany(PrivilegeIcon::class);
    }
}
