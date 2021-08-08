<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('admin.surveys.index')->with('items', Survey::all());
    }

    public function create()
    {
        return view('admin.surveys.add');
    }

    public function store(Request $request)
    {

        $inputs = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required',
            'url' => 'required|url'
        ]);
        Survey::create($inputs);
        alert()->success('تم اضافة الاستبيان بنجاح !')->autoclose(5000);
        return back();
    }

    public function edit(Survey $survey)
    {
        return view('admin.surveys.edit', ['item' => $survey]);
    }

    public function update(Request $request, Survey $survey)
    {

        $inputs = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required',
            'url' => 'required|url'
        ]);
        $survey->update($inputs);
        alert()->success('تم تعديل الاستبيان بنجاح !')->autoclose(5000);
        return back();
    }

    public function destroy(Survey $survey)
    {
        $survey->delete();
        alert()->success('تم حذف الاستبيان بنجاح !')->autoclose(5000);
        return back();
    }

}
