<?php

// use App\Services\GeneticAlgorithm\Individual;
// use App\Services\GeneticAlgorithm\Population;
// use App\Services\GeneticAlgorithm\GeneticAlgorithm;
// use App\Appliance;
use Carbon\Carbon;
// use App\Services\GeneticAlgorithm\Schedule;
// use App\Prcu;
// use App\Services\GeneticAlgorithm\SchedulingGA;
// use App\Services\GeneticAlgorithm\FitnessFunction;
// use App\PowerGenerated;
// use App\Events\PvUpdated;
use App\Events\FlashMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScheduleGenerated as mailScheduleGenerated;
use App\Events\ScheduleGenerated;

// use App\Http\Controllers\DailyHour;

// use App\Events\FlashMsg;
// use App\Events\FlaMsg;
// use App\Schedule as ScheduleModel;

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
    return redirect('/home');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/mail', function () {
    $mail = 'mail funcionando';
    // Mail::to('diegolascano@gmail.com')->send(new mailScheduleGenerated($mail));
    event(new ScheduleGenerated($mail));
    return 'mail enviado';
});

Auth::routes();

Route::get('/dashboard', 'TabsController@dashboard')->name('dashboard');
Route::get('/trends', 'TabsController@trends')->name('trends');
Route::get('/historical', 'TabsController@historical')->name('historical');

Route::get('/api/energyCost', 'FetchDataAPI@energyCost')->name('energyCost');
Route::get('/api/pvSim', 'FetchDataAPI@pvSim')->name('pvSim');
Route::get('/api/schedule', 'FetchDataAPI@schedule')->name('schedule');

/**
 * Routes for graphs
 */
Route::get('/api/realtimeCost', 'FetchDataAPI@realtimeCost')->name('realtimeCost');
Route::get('/api/realtimeEnergy', 'FetchDataAPI@realtimeEnergy')->name('realtimeEnergy');
Route::get('/api/realCostData', 'FetchDataAPI@realCostData')->name('realCostData');
Route::get('/api/energyData', 'FetchDataAPI@energyData')->name('energyData');

/**
 * Routes for small cards with daily values
 */
Route::get('/api/dailyAvg', 'FetchDataAPI@dailyAvg')->name('dailyAvg');
Route::get('/api/estimatedCost', 'FetchDataAPI@estimatedCost')->name('estimatedCost');
Route::get('/api/realCost', 'FetchDataAPI@realCost')->name('realCost');
Route::get('/api/grossCost', 'FetchDataAPI@grossCost')->name('grossCost');
Route::get('/api/consumedEnergy', 'FetchDataAPI@consumedEnergy')->name('consumedEnergy');
Route::get('/api/pvRealGenerated', 'FetchDataAPI@pvRealGenerated')->name('pvRealGenerated');
Route::get('/api/pvSimUsed', 'FetchDataAPI@pvSimUsed')->name('pvSimUsed');
Route::get('/api/costSavings', 'FetchDataAPI@costSavings')->name('costSavings');
Route::get('/api/energySavings', 'FetchDataAPI@energySavings')->name('energySavings');

Route::get('/api/pvSim', 'FetchDataAPI@pvSim')->name('pvSim');
Route::get('/api/pvGenReal', 'FetchDataAPI@pvGenReal')->name('pvGenReal');

// Route::get('ga/importData', function(){
//     // IMPORT CSV FOR Prcu DATA
// })->name('importData');

Route::resource('schedules', 'SchedulesController');
Route::resource('appliances', 'AppliancesController');
// Route::resource('dailyPV', 'DailyPVController');

Route::get('/api/userControl', function() {
    $routes[0]['name'] = 'Dashboard';
    $routes[0]['route'] = 'http://homenergymanager.com/dashboard';
    $routes[1]['name'] = 'Appliances';
    $routes[1]['route'] = 'http://homenergymanager.com/appliances';
    $routes[2]['name'] = 'Schedules';
    $routes[2]['route'] = 'http://homenergymanager.com/schedules';
    // $routes[2]['name'] = 'PV Control';
    // $routes[2]['route'] = 'http://homenergymanager.com/dailyPV';

    return $routes;
});