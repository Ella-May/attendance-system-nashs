<?php

namespace App\Http\Livewire;

use App\Models\StudentInformation;
use Illuminate\Database\QueryException;
use Livewire\Component;

class StudentInformationEdit extends Component
{
    public $lrn, $firstname, $midname, $lastname, $address, $sex, $snumber, $gname, $gnumber, $gradelvl, $strand, $section, $bday, $age, $studentID;

    public function mount($id)
    {
        $studInfo = StudentInformation::where('id', $id)->first();
        $this->studentID = $studInfo->id;
        $this->lrn = $studInfo->lrn;
        $this->firstname = $studInfo->s_firstname;
        $this->midname = $studInfo->s_midname;
        $this->lastname = $studInfo->s_lastname;
        $this->address = $studInfo->s_address;
        $this->sex = $studInfo->s_sex;
        $this->snumber = $studInfo->s_cnumber;
        $this->gname = $studInfo->g_name;
        $this->gnumber = $studInfo->g_cnumber;
        $this->gradelvl = $studInfo->s_gradelvl;
        $this->strand = $studInfo->s_strand;
        $this->section = $studInfo->s_section;
        $this->bday = $studInfo->s_bday;
        $this->age = $studInfo->s_age;
    }

    public function updateStudInfo()
    {
        try{
            $studInfo = StudentInformation::where('id', $this->studentID);
            $studInfo->update(
                ['lrn' => $this->lrn,
                's_firstname' => $this->firstname,
                's_midname' => $this->midname,
                's_lastname' => $this->lastname,
                's_address' => $this->address,
                's_cnumber' => $this->snumber,
                'g_name' => $this->gname,
                'g_cnumber' => $this->gnumber,
                's_gradelvl' => $this->gradelvl,
                's_strand' => $this->strand,
                's_section' => $this->section,
                's_bday' => $this->bday,
                's_age' => $this->age,
                's_sex' => $this->sex]
            );
            return back()->with('success', 'Student Information updated successfully');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.student-information-edit');
    }
}
