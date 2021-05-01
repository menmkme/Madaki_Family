<?php

namespace App\Http\Controllers;

use App\Models\madaki;
use App\Models\Madaki_Childs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madaki = madaki::all();
        return view('home',[
            'madakis' => $madaki
        ]);
    }

    public function create()
    {
        return view('create');
    }

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
        'Description' => 'required|min:3|max:1000',
        //'img_path' =>
        //'user_id' => 'required|unique:First_Name',



        //'image' => 'required|mimes:png,jpg,jpeg|max:5784'
       ]);

         $madaki = new madaki;

        //     $madaki->First_Name = $request->input('First_Name');
        //     $madaki->Surname = $request->input('Surname');
        //     $madaki->Last_Name = $request->input('Last_Name');
        //     $madaki->DOB = $request->input('DOB');
        //     $madaki->State = $request->input('State');
        //     $madaki->LGA = $request->input('LGA');
        //     $madaki->Description = $request->input('description');
        //     $madaki->img_path = $newImageName;
        //  $madaki->save();

         madaki::create([
            'First_Name' => $request->input('First_Name'),
            'Surname' => $request->input('Surname'),
            'Last_Name' => $request->input('Last_Name'),
            'DOB' => $request->input('DOB'),
            'State' => $request->input('State'),
            'LGA' => $request->input('LGA'),
            'Description' => $request->input('Description'),
            'img_path' => $newImageName,
            //'user_id' => auth()->user()->id

        ]);

        return redirect('/home');
    }

}

