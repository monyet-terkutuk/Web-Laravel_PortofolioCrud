<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    function __construct()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.education.index', [
            'title' => 'Experience',
            'histories' => History::where('type', 'education')->orderBy('end_date', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.education.create', [
            'title' => 'Add Education',
            'history' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $history = ([
            'title' => 'required|max:225',
            'info_st' => 'required',
            'info_nd' => 'required',
            'info_rd' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'type' => 'education'
        ]);

        $validateData = $request->validate($history);

        $validateData['type'] = 'education';


        History::create($validateData);
        return redirect('/dashboard/education/')->with('success', 'Data Berhasil ditambah');
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
        $data = History::where('id', $id)->where('type', 'education')->first();
        return view('dashboard.education.edit', [
            'title' => 'Edit',
            'history' => $data
        ]);
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

        $history = $request->validate([
            'title' => 'required|max:225',
            'info_st' => 'required',
            'info_nd' => 'required',
            'info_rd' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'type' => 'education'
        ]);

        History::where('id', $id)->where('type', 'education')->update($history);
        return redirect('/dashboard/education/')->with('success', 'Your page has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        History::where('id', $id)->where('type', 'education')->delete();
        return redirect('dashboard/education/')->with('success', 'Your data has been deleted');
    }
}
