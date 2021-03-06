<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\CardsController;
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

//リスト一覧画面
Route::get('/', [ListingsController::class,'index'])->name('index');

//リスト新規画面
Route::get('/new', [ListingsController::class,'new'])->name('new');

//リスト新規処理
Route::post('/listings', [ListingsController::class,'store'])->name('store');

//リスト更新画面
Route::get('/listingsedit/{listing_id}', [ListingsController::class,'edit'])->name('edit');

//リスト更新処理
Route::post('/listing/edit', [ListingsController::class, 'update'])->name('update');

//リスト削除処理
Route::get('/listingsdelete/{listing_id}', [ListingsController::class, 'destroy'])->name('destroy');

//ここまでlistingstable

//カード新規画面
Route::get('listing/{listing_id}/card/new', [CardsController::class,'new'])->name('new_card');

//カード新規処理
Route::post('/listing/{listing_id}/card', [CardsController::class,'store']);

//カード詳細画面
Route::get('listing/{listing_id}/card/{card_id}', [CardsController::class,'show']);

//カード編集画面
Route::get('listing/{listing_id}/card/{card_id}/edit', [CardsController::class,'edit']);

//カード更新処理
Route::post('/card/edit', [CardsController::class,'update']);

//カード削除処理
Route::get('listing/{listing_id}/card/{card_id}/delete', [CardsController::class,'destroy']);

//===ここまで追加===

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
