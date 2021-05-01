<?php

namespace App\Http\Controllers;

use App\Models\Madaki_Childs;
use Illuminate\Http\Request;

class yaranMadakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madaki = Madaki_Childs::all();
        return view('yaran_madaki',[
            'ymadakis' => $madaki
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_md_childs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

            $request->image->move(\public_path('images'), $newImageName);
        }

        //Validations

       $request->validate([
        'First_Name' => 'required|string|max:255',
        'Surname' =>  'required|string|max:255',
        'Last_Name' => 'required|string|max:255',
        'DOB' => 'required|date_format:Y-m-d|before:today',
        'State' => 'required|string|max:255',
        'LGA' =>  'required|string|max:255',
        'Occupation' => 'required|String|max:255',
        'Description' => 'required|min:3|max:1000',
        //'img_path' =>
        //'user_id' => 'required|unique:First_Name',



        //'image' => 'required|mimes:png,jpg,jpeg|max:5784'
       ]);


         Madaki_Childs::create([
            'First_Name' => $request->input('First_Name'),
            'Surname' => $request->input('Surname'),
            'Last_Name' => $request->input('Last_Name'),
            'DOB' => $request->input('DOB'),
            'State' => $request->input('State'),
            'LGA' => $request->input('LGA'),
            'Occupation' => $request->input('Occupation'),
            'Description' => $request->input('Description'),
            'img_path' => $newImageName,


        ]);

        return redirect('/yaran_madaki');
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
}
