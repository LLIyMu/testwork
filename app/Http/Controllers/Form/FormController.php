<?php

namespace App\Http\Controllers\Form;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormStoreRequest;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('form', compact('forms'));
    }

    public function store(FormStoreRequest $request)
    {
        $form = Form::create($request->all());
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Успешно добавлено',
                'data' => $form->toJSON()
            ]);
        }
        return redirect()->route('form.index');
    }
}
