<?php

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

Auth::routes();
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::post('admin/login','App\Http\Controllers\Auth\LoginController@adminLogin')->name('admin.login');
Route::get('admin/logout', 'App\Http\Controllers\Auth\LoginController@logout')->middleware('auth:admin')->name('admin.logout');
Route::get('admin/',[ App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth:admin','language'])->name('welcome');



Route::group(['middleware' => ['auth:admin','language'],'prefix'=> 'admin'], function() {
Route::get('/home',[ App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hiringRequest','App\Http\Controllers\HiriningRequesrController');
Route::resource('feedback','App\Http\Controllers\FeedbackController');
Route::resource('/users','App\Http\Controllers\UserController');
Route::resource('/games','App\Http\Controllers\GameController');
Route::resource('/countries','App\Http\Controllers\CountryController');
Route::resource('/matches','App\Http\Controllers\MatchController');
Route::resource('/announcements','App\Http\Controllers\AnnouncementController');
Route::resource('/reports','App\Http\Controllers\ReportController');
Route::resource('/transaction','App\Http\Controllers\TransactionController');

Route::get('withdrawal-request', 'App\Http\Controllers\TransactionController@withdrawal_request')->name('admin.withdrawal.request');
Route::get('bank-details', 'App\Http\Controllers\TransactionController@player_bank_details')->name('admin.player.bank_details');
Route::get('withdrawal-approve', 'App\Http\Controllers\TransactionController@withdrawal_approve')->name('admin.withdrawal.approve');

Route::get('chat', 'App\Http\Controllers\ChatController@adminChat')->name('admin.chat');
Route::post('chat', 'App\Http\Controllers\ChatController@retrieveChatForAdmin')->name('get.chat');
Route::get('messages', 'App\Http\Controllers\ChatController@adminFetchMessages')->name('admin.fetch.message');
Route::post('messages', 'App\Http\Controllers\ChatController@adminSendMessage')->name('admin.send.message');
Route::get('/game-report','App\Http\Controllers\ReportController@game_report')->name('game_report');
Route::get('/matches/points/{id}','App\Http\Controllers\MatchController@points')->name('matches.points');
Route::get('/matches/details/{id}','App\Http\Controllers\MatchController@info')->name('matches.info');
Route::put('/matches/points/{id}','App\Http\Controllers\MatchController@positionPoints')->name('matches.pos.points');
Route::get('/matches/player-profile/{id}','App\Http\Controllers\MatchController@player_profile')->name('player.profile');
Route::get('/matches/team-profile/{id}','App\Http\Controllers\MatchController@team_profile')->name('team.profile');

Route::get('/admins',[ App\Http\Controllers\UserController::class, 'admin'])->name('admin.all');
Route::post('/matches/results-update','App\Http\Controllers\MatchController@playerInfo')->name('matches.player.update');
Route::post('/matches/results/{id}','App\Http\Controllers\MatchController@result')->name('matches.results');
Route::get('/settings',[ App\Http\Controllers\SiteSettingController::class, 'index'])->name('setting.all');
Route::post('/settings',[ App\Http\Controllers\SiteSettingController::class, 'store'])->name('settings');
Route::post('/settings/footer',[ App\Http\Controllers\SiteSettingController::class, 'footer'])->name('settings.footer');
Route::get('/settings/cache',[ App\Http\Controllers\SiteSettingController::class, 'optimize'])->name('optimize');
Route::get('/settings/cache-clear',[ App\Http\Controllers\SiteSettingController::class, 'optimizeClear'])->name('optimize.clear');
});
Route::group(['middleware' => 'language'], function() {
Route::group(['middleware' => 'auth'], function() {

    Route::resource('chats','App\Http\Controllers\ChatController');
    Route::get('messages', 'App\Http\Controllers\ChatController@fetchMessages')->name('fetch.message');
    Route::post('messages', 'App\Http\Controllers\ChatController@sendMessage')->name('send.message');
    Route::get('user/profile', 'App\Http\Controllers\Web\UserController@profile')->name('profile');
	Route::post('user/profile-update', 'App\Http\Controllers\Web\UserController@profile_update')->name('profile_update');

    Route::get('user/dashboard', 'App\Http\Controllers\Web\DashboardController@user_dashboard')->name('user_dashboard');
    Route::get('user/dashboard/hiring-fee', 'App\Http\Controllers\Web\DashboardController@hiring_fee')->name('dashboard.fee');
    Route::post('user/dashboard/update-hiring-fee', 'App\Http\Controllers\Web\DashboardController@update_hiring_fee')->name('dashboard.fee.update');
    Route::get('user/dashboard/bank-details', 'App\Http\Controllers\Web\DashboardController@bank_details')->name('dashboard.bankDetails');
    Route::post('user/dashboard/update-bank-details', 'App\Http\Controllers\Web\DashboardController@update_bank_details')->name('dashboard.bank_details.update');
    Route::get('user/dashboard/hiring-request', 'App\Http\Controllers\Web\DashboardController@hiring_request')->name('dashboard.hiring_request');
    Route::get('user/dashboard/payment', 'App\Http\Controllers\Web\DashboardController@payment')->name('dashboard.payment');
    Route::get('checkout/{id}', 'App\Http\Controllers\Web\HiriningRequesrController@checkout')->name('checkout');
    Route::get('user/dashboard/profile', 'App\Http\Controllers\Web\DashboardController@profile')->name('dashboard.profile');
    Route::post('user/dashboard/update-profile', 'App\Http\Controllers\Web\DashboardController@profile_update')->name('dashboard.profile.update');
    Route::get('user/dashboard/withdrawal-request', 'App\Http\Controllers\Web\DashboardController@withdrawal')->name('dashboard.withdrawal');
    Route::post('user/dashboard/withdrawal-amount', 'App\Http\Controllers\Web\DashboardController@withdrawal_amount')->name('dashboard.withdraw');
});


	

Route::resource('/user','App\Http\Controllers\Web\UserController');

Route::get('payment','App\Http\Controllers\Web\HomeController@payment')->name('payment');

Route::post('web/login1','App\Http\Controllers\Auth\LoginController@login1')->name('web.login');
Route::get('web/logout', 'App\Http\Controllers\Auth\LoginController@logout')->middleware('auth')->name('web.logout');

Route::get('/',[ App\Http\Controllers\Web\HomeController::class, 'index'])->name('web');

Route::get('web/login', [ App\Http\Controllers\Web\HomeController::class,'login'])->name('web_login');

Route::get('/guest-login', [ App\Http\Controllers\Web\HomeController::class,'guest_login'])->name('web_guest_login');

Route::get('sign-up', [ App\Http\Controllers\Web\HomeController::class, 'register'])->name('web_register');
Route::post('register-user', [ App\Http\Controllers\Web\HomeController::class, 'register_user'])->name('register_user');
Route::get('e-pal', [ App\Http\Controllers\Web\HomeController::class, 'e_pal'])->name('e_pal');
Route::get('contact-us', [ App\Http\Controllers\Web\HomeController::class, 'contact'])->name('contact');
Route::get('community', [ App\Http\Controllers\Web\HomeController::class, 'communication'])->name('communication');
// Route::get('live', [ App\Http\Controllers\Web\HomeController::class, 'live'])->name('live');
Route::post('create-team', [ App\Http\Controllers\Web\HomeController::class, 'create_team'])->name('create_team');
Route::resource('contact', 'App\Http\Controllers\Web\ContactUsController');

Route::resource('feedbacks','App\Http\Controllers\FeedbackController');

Route::post('feedback_submit', [ App\Http\Controllers\Web\FeedbackController::class, 'feedback_submit'])->name('feedback_submit');
Route::post('hiring-form', [ App\Http\Controllers\Web\HiriningRequesrController::class, 'hiringForm'])->name('hiringForm');

});