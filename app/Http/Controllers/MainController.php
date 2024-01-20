<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Person;

class MainController extends Controller
{
    

    public function index()
    {
        $people = Person::all();


        $data = [

            'status'=>200,
            'people'=>$people
        ];

        return response()->json($data,200);


    }

    public function show($id)
    {
        $people = Person::findOrfail($id);

        return new PersonResource($people);
    }

    public function store(PersonRequest $request)
    {

            $people = new Person;
            $people->fill($request->validated())->save();

            return new PersonResource($People);


    }

    public function update(PersonRequest $request, $id)
    {

           $people = Person::find($id);
           $people->fill($request->validated())->save();

           return new PersonResource($people);

    }

    public function destroy($id)
    {
        $people = Person::find($id);

        $people->delete();
        echo "Deleted";
    }
}
