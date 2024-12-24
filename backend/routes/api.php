<?php

use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->prefix('admin')->group(function () {
    Route::apiResource('/users', UserController::class);
    Route::get('/statistics', StatisticsController::class)->name('statistics');
});



Route::get('/posts', function () {
    return response()->json([
        [
            'id' => 1,
            'title' => 'Post Exemplo 1',
            'description' => 'Uma descrição curta sobre o post exemplo 1. Esse texto é limitado para visualização rápida.',
            'slug' => 'post-exemplo-1',
            'image' => 'https://via.placeholder.com/300x200',
            'author' => 'Autor 1',
            'created_at' => now()->subDays(1)->toDateTimeString(),
        ],
        [
            'id' => 2,
            'title' => 'Post Exemplo 2',
            'description' => 'Uma descrição curta sobre o post exemplo 2. Um exemplo útil para demonstração.',
            'slug' => 'post-exemplo-2',
            'image' => 'https://via.placeholder.com/300x200',
            'author' => 'Autor 2',
            'created_at' => now()->subDays(2)->toDateTimeString(),
        ],
        [
            'id' => 3,
            'title' => 'Post Exemplo 3',
            'description' => 'Uma descrição curta sobre o post exemplo 3. Aqui é possível ajustar conforme necessário.',
            'slug' => 'post-exemplo-3',
            'image' => 'https://via.placeholder.com/300x200',
            'author' => 'Autor 3',
            'created_at' => now()->subDays(3)->toDateTimeString(),
        ],
        [
            'id' => 4,
            'title' => 'Post Exemplo 4',
            'description' => 'Uma descrição curta sobre o post exemplo 4. Isso é muito útil para testes de layout.',
            'slug' => 'post-exemplo-4',
            'image' => 'https://via.placeholder.com/300x200',
            'author' => 'Autor 4',
            'created_at' => now()->subDays(4)->toDateTimeString(),
        ],
        [
            'id' => 5,
            'title' => 'Post Exemplo 5',
            'description' => 'Uma descrição curta sobre o post exemplo 5. Mais um exemplo útil para testes.',
            'slug' => 'post-exemplo-5',
            'image' => 'https://via.placeholder.com/300x200',
            'author' => 'Autor 5',
            'created_at' => now()->subDays(5)->toDateTimeString(),
        ],
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return response()->json([
        'id' => 1,
        'title' => 'Post Exemplo ' . $slug,
        'description' => 'Uma descrição curta sobre o post exemplo ' . $slug,
        'slug' => 'post-exemplo-' . $slug,
        'image' => 'https://via.placeholder.com/300x200',
        'author' => 'Autor Administrador',
        'created_at' => now()->subDays(5)->toDateTimeString(),
    ]);
});
