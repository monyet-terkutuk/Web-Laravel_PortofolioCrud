<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills_source = public_path('admin/devicons.json');
        $skills_data = file_get_contents($skills_source);
        $skills_data = json_decode($skills_data, true);
        $skills = array_column($skills_data, 'name');
        $skill = "'" . implode("','", $skills) . "'";


        return view('dashboard.skill.index', [
            'title' => 'Skill'
        ])->with(['skill' => $skill]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'language' => 'required',
            'workflow' => 'required',
        ]);

        Metadata::updateOrCreate(['meta_key' => 'language'], ['meta_value' => $request->language]);
        Metadata::updateOrCreate(['meta_key' => 'workflow'], ['meta_value' => $request->workflow]);

        return redirect('/dashboard/skill/')->with('success', 'Your skill has been updated');
    }
}
