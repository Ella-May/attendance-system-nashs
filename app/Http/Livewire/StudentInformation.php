<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\QueryException;
use Livewire\Component;
use App\Models\StudentInformation as StudentInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class StudentInformation extends Component
{
    public function render()
    {
        $students = StudentInfo::get();
        $data = compact('students');
        return view('livewire.student-information', $data);

    }

    public function store(Request $request)
    {
        try{
            DB::transaction(function () use ($request){
                StudentInfo::create([
                    'lrn' => $request->lrn,
                    's_firstname' => $request->firstname,
                    's_midname' => $request->midname,
                    's_lastname' => $request->lastname,
                    's_address' => $request->address,
                    's_cnumber' => $request->snumber,
                    'g_name' => $request->gname,
                    'g_cnumber' => $request->gnumber,
                    's_gradelvl' => $request->gradelvl,
                    's_strand' => $request->strand,
                    's_section' => $request->section,
                    's_bday' => $request->bday,
                    's_age' => $request->age,
                    's_sex' => $request->sex
                ]);
            });
            return back()->with('success', 'Student Information added successfully');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $student = StudentInfo::where('id', $id)->first();
        $student->delete();

        session()->flash('message', 'Student Information has been deleted successfully');
    }

    public function show($id)
    {
        return view('livewire.student-information');
    }
}
