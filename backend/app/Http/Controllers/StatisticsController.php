<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Concurrency;

class StatisticsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, UserService $userService)
    {
        [$usersCount, $postsCount, $categoriesCount] = Concurrency::run([
            fn () => $userService->getActiveUsersCount(),
            fn () => 100,
            fn () => 30,
        ]);

        return response()->json([
            'usersCount' => $usersCount,
            'postsCount' => $postsCount,
            'categoriesCount' => $categoriesCount
        ]);
    }
}
