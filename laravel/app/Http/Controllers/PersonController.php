<?php

namespace App\Http\Controllers;

use App\Models\Person as ModelsPerson;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $hasItems = ModelsPerson::has('boards')->get();
        $noItems = ModelsPerson::doesntHave('boards')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('person.index', $param);
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $min = (int)$request->input * 1;
        $max = $min + 10;
        $item = ModelsPerson::ageGreaterThan($min)
                ->ageLessThan($max)
                ->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, ModelsPerson::$rules);
        $person = new ModelsPerson;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = ModelsPerson::find($request->id);
        return view('person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, ModelsPerson::$rules);
        $person = ModelsPerson::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function delete(Request $request)
    {
        $person = ModelsPerson::find($request->id);
        return view('person.del', ['form' => $person]);
    }

    public function remove(Request $request)
    {
        ModelsPerson::find($request->id)->delete();
        return redirect('/person');
    }
}
