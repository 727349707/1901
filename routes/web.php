<?php

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

Route::get('/', function () {
    return view('welcome');
});
// ->middleware('Login')
// Route::any('/index','admin\admin@Index');


Route::get('/index', function () {
    return view('admin/layouts/main');
});

// //后台登录
// Route::any('/login','Admin\LoginController@login');
// Route::any('/login_do','Admin\LoginController@login_do');
// //退出登录
// Route::any('/logout','Admin\LoginController@logout');
   
//后台管理员


// Route::prefix('/adminuser')->group(function(){
//     Route::any('/adminuser','Admin\AdminuserController@adminuser');
//     Route::any('/adminuser_do','Admin\AdminuserController@adminuser_do');
//     Route::any('/docreate','Admin\AdminuserController@docreate');
  
// });




/**
 * 登录
 */
Route::get('/login', 'admin\admin@login');
Route::any('/login_denglu', 'admin\admin@login_denglu');
/**
 * 操作
 */


Route::group(['middleware' => ['Login']], function () {
    Route::get('/loy', 'admin\admin@loy');
    Route::get('admin', 'Admin\admin@admin');



    Route::group(['middleware' => ['Quanxian']], function () {
        Route::get('admin_insert', 'admin\admin@admin_insert');
        Route::post('admin_submit', 'admin\admin@admin_submit');
        Route::get('admin_set/{admin_id}', 'admin\admin@admin_set');
        Route::post('admin_role_insert', 'admin\admin@admin_role_insert');
        Route::get('admin_delete/{admin_id}', 'admin\admin@admin_delete');


        Route::get('role_delete/{role_id}', 'admin\admin@role_delete');


        Route::get('role_select', 'admin\admin@role_select');
        Route::get('right', 'admin\admin@right');


        //讲师管理
        Route::get('lecturer', 'admin\admin@lecturer');


        //讲师视图
        Route::any('lecturerAdd','admin\admin@lecturerAdd');
        //讲师软删除
        Route::any('del/{lect_id}','admin\admin@del');
    });

//添加讲师
    Route::any('lecturerAddhandel','admin\admin@lecturerAddhandel');
//讲师展示
    Route::any('lecturerIndex','admin\admin@lecturerIndex');
    Route::get('admin_update', 'admin\admin@admin_update');
    Route::post('admin_update_add', 'admin\admin@admin_update_add');

    /**
     *角色添加
     */
    Route::get('role', 'admin\admin@role');
    Route::post('role_insert', 'admin\admin@role_insert');

    Route::post('role_right', 'admin\admin@role_right');


});