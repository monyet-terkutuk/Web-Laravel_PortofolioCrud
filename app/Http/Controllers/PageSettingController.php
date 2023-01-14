<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use App\Models\Page;
use Illuminate\Http\Request;

class PageSettingController extends Controller
{
    public function index()
    {
        return  view('dashboard.setting.index', [
            'title' => 'Setting Page',
            'pages' => Page::orderBy('title', 'asc')->get()
        ]);
    }

    public function update(Request $request)
    {
        Metadata::updateOrCreate(['meta_key' => 'about_page'], ['meta_value' => $request->about_page]);
        Metadata::updateOrCreate(['meta_key' => 'interest_page'], ['meta_value' => $request->interest_page]);
        Metadata::updateOrCreate(['meta_key' => 'award_page'], ['meta_value' => $request->award_page]);
        return redirect('dashboard/setting')->with('success', 'Update page success !!');
    }
}
