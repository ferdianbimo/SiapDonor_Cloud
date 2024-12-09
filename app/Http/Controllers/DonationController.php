<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Donor;
use App\Models\Bloodtype;

class DonationController extends Controller
{
    public function index()
    {
        $pageTitle = 'Donation';
        return view('donation', compact('pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create Donors';

        // ELOQUENT
        $bloodtypes = Bloodtype::all();

        return view('action.create', compact('pageTitle', 'bloodtypes'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // // Get File
        // $file = $request->file('cv');

        // if ($file != null) {
        //     $originalFilename = $file->getClientOriginalName();
        //     $encryptedFilename = $file->hashName();

        //     // Store File
        //     $file->store('public/files');
        // }

        // ELOQUENT
        $donor = new Donor();
        $donor->firstname = $request->firstName;
        $donor->lastname = $request->lastName;
        $donor->email = $request->email;
        $donor->gender = $request->gender;
        $donor->age = $request->age;
        $donor->bloodtype_id = $request->type;

        // if ($file != null) {
        //     $employee->original_filename = $originalFilename;
        //     $employee->encrypted_filename = $encryptedFilename;
        // }

        $donor->save();
        // Alert::success('Added Successfully', 'Donor Data Added Successfully.');
        return redirect()->route('donation');
    }

    public function show($id)
    {
        $pageTitle = 'Donors Detail';
        $donor = Donor::find($id);
        return view('action.show', compact('pageTitle', 'donor'));
    }


    public function edit($id)
    {
        $pageTitle = 'Edit Donor';
        $donor = Donor::find($id);
        $bloodtypes = Bloodtype::all();
        return view('action.edit', compact('pageTitle', 'donor', 'bloodtypes'));
    }

    public function destroy($id)
    {
        $donor = Donor::find($id);
        $donor->delete();
        return redirect()->route('donation');
    }

    public function getData(Request $request)
{
    $donors = Donor::with('bloodtype');

    if ($request->ajax()) {
        return datatables()->of($donors)
            ->addIndexColumn()
            ->addColumn('action', function($donor) {
                return view('action.actions', compact('donor'));
            })
            ->toJson();
    }
}
}
