<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('home');
//});

Auth::routes(['register' => True]);

Route::get('/', 'HomeController@index')->name('index');

Route::resource('category', 'CategoryController');
Route::get('category-index', 'CategoryController@index')->name('category.index');
Route::get('category-create', 'CategoryController@create')->name('category.create');

Route::resource('subcategory', 'SubcategoryController');
Route::get('/category/{category}', 'SubcategoryController@category');
Route::get('/sub_category/{sub_category}/{category}', 'SubcategoryController@sub_category');


Route::resource('products', 'ProductController');
Route::get('products-index', 'ProductController@index')->name('products.index');
Route::get('products-create', 'ProductController@create')->name('products.create');
Route::get('products/{id} ', 'ProductController@update')->name('products.update');
Route::get('/sold ', 'ProductController@sold')->name('products.sold');

Route::resource('stock', 'StockController');
Route::get('stock-index', 'StockController@index')->name('stock.index');

Route::get('stock-create', 'StockController@create')->name('stock.create');
//Route::post('stock-store/{id}', 'StockController@store')->name('stock.store');
Route::get('stock-invoice', 'StockController@invoice')->name('stock.invoice');
Route::get('stock-pre_order/{pid}', 'StockController@pre_order')->name('stock.pre_order');
Route::get('stock-sold/{pid}', 'StockController@sold')->name('stock.sold');

Route::resource('assignments', 'AssignmentController');
Route::get('assignments-index', 'AssignmentController@index')->name('assignments.index');
Route::get('assignments-create', 'AssignmentController@create')->name('assignments.create');

Route::resource('frontend', 'FrontController');

//mail
Route::get('/sendmail', function(Request $request){

    $email = $request->email;
    $date = $request->ad;
    $details = [
        'title' => 'Mail from iGear',
        'body' => 'this is your appointment schedule. You have to be present at our office in',
        'date' =>$date,
    ];
    Mail::to($email)->send(new \App\Mail\Testmail($details));
    Session::flash('success', 'Email is sent successfully');
    return redirect()->route('assignments.index');

})->name('mail.send');
