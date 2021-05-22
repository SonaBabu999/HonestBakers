
    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controller\cashier\feedbackController;


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

    Auth::routes(['reset'=> false]);
    Route::get('/home', 'HomeController@index')->name('home');
    
    
  
    Route::group(['middleware' => 'PreventBackHistory'],function(){

      Auth::routes();
    
      Route::get('/home', 'HomeController@index');

      Route::get('/feedback', function () {
        return redirect('management');
      });
      Route::get('/management', function () {
        return view('home');
      });
      Route::get('/management', function () {
        return redirect('home');
      });
    
    
    //Route::middleware(['auth'])->group(function(){
    
      
        
        Route::get('/cashier', 'cashier\cashierController@index');
        Route::get('/cashier/getMenuFromCategory/{cat_id}', 'cashier\cashierController@getMenuFromCategory');
        Route::get('/cashier/getSaleDetails/{table_id}', 'cashier\cashierController@getSaleDetails');
        
        Route::get('/cashier/showReceipt/{s_id}', 'cashier\cashierController@showReceipt');
        
         
        
        Route::get('/cashier/getAlltables', 'cashier\cashierController@getTables');
        
        Route::post('/cashier/orderFood', 'cashier\cashierController@orderFood');
        Route::post('/cashier/confirmOrder', 'cashier\cashierController@confirmOrder');
        Route::post('/cashier/deleteOrder', 'cashier\cashierController@deleteOrder');
        Route::post('/cashier/savePayment', 'cashier\cashierController@savePayment');
        Route::get('/cashier/feedback', 'management\feedbackController@create');
        Route::get('/management/feedback', 'management\feedbackController@index');
        Route::post('/ReadFeedback', 'management\feedbackController@store');
  
       //Route::middleware(['auth','verifyAdmin'])->group(function(){
    
        Route::get('/report', 'report\reportController@index');
        Route::get('/report/show', 'report\reportController@show');
        Route::get('/report/show/excel', 'report\reportController@export');
        
          
        Route::resource('/management/category', 'management\categoryController');
        Route::resource('/management/menu', 'management\menuController');
        Route::resource('/management/table', 'management\tableController');
       });
    
  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
