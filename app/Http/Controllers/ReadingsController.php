<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use App\Models\Reading2;
use App\Exports\DownloadReadingsExport;
use Excel;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readings = Reading::orderBy('id', 'desc')->paginate(15);
        return view('readings.index')
            ->withReadings($readings);
    }

    public function index2()
    {
        $readings = Reading2::orderBy('id', 'desc')->paginate(15);
        return view('readings.index2')
            ->withReadings($readings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportReadingsIntoExcel()
    {
        return Excel::download(new DownloadReadingsExport,'readingsdatabase.xlsx');
    }

    public function exportReadingsIntoCSV()
    {
        return Excel::download(new DownloadReadingsExport,'readingsdatabase.csv');
    }
}
