<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $request->user()->load('projects.files');

    return view('projects.index', [
        'projects' => $request->user()->projects
    ]);
});

Route::get('/files', function (Request $request) {
    $request->user()->load('files.project');

    return view('files.index', [
        'files' => $request->user()->files
    ]);
});
