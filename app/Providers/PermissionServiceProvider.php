<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;


class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        foreach(Permission::all() as $permission){
       Gate::define($permission->slug, function($user) use ($permission){
           return $user->hasPermission($permission->slug);
       });
    }
}
}