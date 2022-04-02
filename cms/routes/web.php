<?php

use Illuminate\Support\Facades\Route;
use App\Models\Log;
use Illuminate\Http\Request;
// 6行目
use App\Http\Controllers\LogController; //追加
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 投稿のダッシュボード表示(Logs.blade.php)
Route::get('/', [LogController::class, 'create']);

// 「本」の詳細画面表示
Route::get('/Logdetail/{Log}',[LogController::class, 'show']);

// 投稿のダッシュボード表示(Logslist.blade.php)
Route::get('/Logslist',[LogController::class, 'index']);
    
Route::group(['middleware' => 'auth'], function(){

    // 新「投稿」を追加
    Route::post('/Logs', [LogController::class, 'store']);
    
    // 「本」の更新画面表示
    Route::get('/Logsedit/{Log}',[LogController::class, 'edit']);
    
    // 「本」の更新処理
    Route::post('Logs/update',[LogController::class, 'update']);
    
    // 本を削除
    Route::delete('/Log/{Log}',[LogController::class, 'destroy']);
    
	// ログインユーザの本を取得
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
});
Auth::routes();
