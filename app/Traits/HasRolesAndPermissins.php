<?php
namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;

trait HasRolesAndPermissins{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('slug', $role);
    }
    public function hasPermission($permission)
    {
        return $this->permissions->contains('slug', $permission);
    }
}

