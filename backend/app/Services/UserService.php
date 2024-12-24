<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserService
{
    public function getActiveUsersCount()
    {
        return Cache::rememberForever('admin.users.active', function () {
            return User::where('is_active', true)->count();
        });
    }
}