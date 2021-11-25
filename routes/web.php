<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::group(['namespace'=>'Front'], function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/about', 'PagesController@about')->name('about');
        Route::get('/contact', 'PagesController@contact')->name('contact');
        Route::post('/contact', 'PagesController@postContact')->name('contact');
        Route::get('/catalog', 'PagesController@catalogs')->name('catalog');
        Route::post('/subscription', 'PagesController@subscription')->name('subscription');
        
        Route::get('/productBycategory/{slug}', 'PagesController@productBycategory')->name('productBycategory');
        Route::get('/productBySubcategory/{slug}', 'PagesController@productBySubcategory')->name('productBySubcategory');

        Route::get('/products', 'PagesController@products')->name('products');
        Route::get('/product-detail/{slug}', 'PagesController@productDetail')->name('product-detail');
        Route::get('/product-search', 'PagesController@productSearch')->name('product-search');
        

        Route::get('/services', 'PagesController@services')->name('services');
        Route::get('/service-detail/{slug}', 'PagesController@serviceDetail')->name('service-detail');

        Route::get('/blogs', 'PagesController@blogs')->name('blogs');
        Route::get('/blog-detail/{slug}', 'PagesController@blogDetail')->name('blog-detail');

        Route::get('/categories', 'PagesController@categories')->name('categories');
        Route::get('/category/{slug}', 'PagesController@subcategory')->name('category');

        Route::get('/videos', 'PagesController@videos')->name('videos');
        Route::get('/video/{slug}', 'PagesController@videoDetail')->name('video');
    });

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        // forget password
        Route::get('forget-password', 'LoginController@forgetPassword')->name('forget-password');
        Route::get('conform-password', 'LoginController@confirmPassword')->name('conform-password');
        

    });

    Route::group(['middleware' => ['auth'], 'prefix'=>'admin', 'namespace'=>'Admin', 'as'=>'admin.'], function() {
    // Route::group(['middleware' => ['auth', 'permission'], 'prefix'=>'admin', 'namespace'=>'Admin', 'as'=>'admin.'], function() {

        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Home Routes
         */
        Route::get('/', 'HomeController@index')->name('home.index');

        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * User Routes
         */
        Route::group(['prefix' => 'posts'], function() {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);


        // new routes
        //blog
        Route::get('blog', [BlogController::class, 'index'])->name('blog.index'); 
        Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create'); 
        Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store'); 
        Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit'); 
        Route::put('blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');

    //site setting
        Route::get('/site-setting', [SiteSettingController::class, 'index'])->name('site-setting');
        Route::put('/site-setting/{id}/update', [SiteSettingController::class, 'update'])->name('site-setting.update');
    
    
    //categories
    Route::group(['prefix' => 'category', 'as'=>'category.'], function() {
        Route::get('', [CategoryController::class, 'index'])->name('index'); 
        Route::get('/create', [CategoryController::class, 'create'])->name('create'); 
        Route::post('/store', [CategoryController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [CategoryController::class, 'destroy'])->name('destroy'); 
    });

    //product Subcategory
    Route::group(['prefix' => 'subcategory', 'as'=>'subcategory.'], function() {
        Route::get('', [SubcategoryController::class, 'index'])->name('index'); 
        Route::get('/create', [SubcategoryController::class, 'create'])->name('create'); 
        Route::post('/store', [SubcategoryController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [SubcategoryController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [SubcategoryController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [SubcategoryController::class, 'destroy'])->name('destroy'); 

    });

    //Service
    Route::group(['prefix' => 'service', 'as'=>'service.'], function() {
        Route::get('/', [ServiceController::class, 'index'])->name('index'); 
        Route::get('/create', [ServiceController::class, 'create'])->name('create'); 
        Route::post('/store', [ServiceController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [ServiceController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [ServiceController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [ServiceController::class, 'destroy'])->name('destroy');
    });

    

    //product
    Route::group(['prefix' => 'product', 'as'=>'product.'], function() {
        Route::get('/', [ProductController::class, 'index'])->name('index'); 
        Route::get('/create', [ProductController::class, 'create'])->name('create'); 
        Route::post('/store', [ProductController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit'); 
        Route::get('/{id}/show', [ProductController::class, 'show'])->name('show'); 
        Route::put('/{id}/update', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [ProductController::class, 'destroy'])->name('destroy'); 
        Route::get('category/{id}/product-veriety', [ProductController::class, 'categoryByProductVeriety'])->name('category.product-veriety');
    });

    //Slider
    Route::group(['prefix' => 'slider', 'as'=>'slider.'], function() {
        Route::get('/', [SliderController::class, 'index'])->name('index'); 
        Route::get('/create', [SliderController::class, 'create'])->name('create'); 
        Route::post('/store', [SliderController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [SliderController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [SliderController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [SliderController::class, 'destroy'])->name('destroy'); 
    });
    

    //Testimonial
    Route::group(['prefix' => 'testimonial', 'as'=>'testimonial.'], function() {
        Route::get('/', [TestimonialController::class, 'index'])->name('index'); 
        Route::get('/create', [TestimonialController::class, 'create'])->name('create'); 
        Route::post('/store', [TestimonialController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [TestimonialController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [TestimonialController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [TestimonialController::class, 'destroy'])->name('destroy'); 
    });


    //Catalog
    Route::group(['prefix' => 'catalog', 'as'=>'catalog.'], function() {
        Route::get('/', [CatalogController::class, 'index'])->name('index'); 
        Route::get('/create', [CatalogController::class, 'create'])->name('create'); 
        Route::post('/store', [CatalogController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [CatalogController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [CatalogController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [CatalogController::class, 'destroy'])->name('destroy');
    });

    //Client
    // Route::get('client', [ClientController::class, 'index'])->name('client.index'); 
    // Route::get('client/create', [ClientController::class, 'create'])->name('client.create'); 
    // Route::post('client/store', [ClientController::class, 'store'])->name('client.store'); 
    // Route::get('client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit'); 
    // Route::put('client/{id}/update', [ClientController::class, 'update'])->name('client.update');
    // Route::delete('client/{id}/delete', [ClientController::class, 'destroy'])->name('client.destroy');

    //video
    Route::group(['prefix' => 'video', 'as'=>'video.'], function() {
        Route::get('/', [VideoController::class, 'index'])->name('index'); 
        Route::get('/create', [VideoController::class, 'create'])->name('create'); 
        Route::post('/store', [VideoController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [VideoController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [VideoController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [VideoController::class, 'destroy'])->name('destroy');
    });

    //about
    Route::group(['prefix' => 'about', 'as'=>'about.'], function() {
        Route::get('/', [AboutController::class, 'index'])->name('index'); 
        Route::get('/create', [AboutController::class, 'create'])->name('create'); 
        Route::post('/store', [AboutController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [AboutController::class, 'edit'])->name('edit'); 
        Route::put('/{id}/update', [AboutController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [AboutController::class, 'destroy'])->name('destroy');
    });

    // Contact
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
    });

});
