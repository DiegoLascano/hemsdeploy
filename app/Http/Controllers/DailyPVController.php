<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\DailyPV;
use App\DailyEnergy;
// use App\Events\PvUpdated;
// use App\Events\FlashMessage;

class DailyPVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $dailyPV = DailyEnergy::where('date', $date)->get();
        // $dailyPV['date'] = $data[0]['date'];
        // for ($i = 1; $i < 25; $i++) { 
        //     $dailyPV[$i-1] = $data[0][$i];
        // }
        // $dailyPV = $data[0];
        // dd($data[0]);
        // dd($dailyPV['date']);
        return view('dailyPV.index', compact('dailyPV'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Hola desde create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Hola desde store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Hola desde show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyEnergy $dailyPV)
    {
        // dd($dailyPV);
        return view('dailyPV.edit', compact('dailyPV'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyEnergy $dailyPV)
    {
        // dd($dailyPV->`1`);
        // $attributes = $request->only(['0','1','2','3']);
        // $attributes = ([
        //     $dailyPV[1] => $request->input('1'),
        //     $dailyPV[2] => $request->input('2'),
        //     $dailyPV[3] => $request->input('3'),
        //     $dailyPV[4] => $request->input('4'),
        //     $dailyPV[5] => $request->input('5'),
        //     $dailyPV[6] => $request->input('6'),
        //     $dailyPV[7] => $request->input('7'),
        //     $dailyPV[8] => $request->input('8'),
        //     $dailyPV[9] => $request->input('9'),
        //     $dailyPV[10] => $request->input('11'),
        //     $dailyPV[11] => $request->input('12'),
        //     $dailyPV[12] => $request->input('12'),
        //     $dailyPV[13] => $request->input('13'),
        //     $dailyPV[14] => $request->input('14'),
        //     $dailyPV[15] => $request->input('15'),
        //     $dailyPV[16] => $request->input('16'),
        //     $dailyPV[17] => $request->input('17'),
        //     $dailyPV[18] => $request->input('18'),
        //     $dailyPV[19] => $request->input('19'),
        //     $dailyPV[20] => $request->input('20'),
        //     $dailyPV[21] => $request->input('21'),
        //     $dailyPV[22] => $request->input('22'),
        //     $dailyPV[23] => $request->input('23'),
        //     $dailyPV[24] => $request->input('24'),
        // ]);
        $dailyPV->update($request->all());
        // $dailyPV->name = $request->input('name');
        // dd($dailyPV);
        // PvUpdated::dispatch($dailyPV);
        // FlashMessage::dispatch('success', 'PV data updated');
        return redirect('/dailyPV');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Hola desde destroy';
    }
}
