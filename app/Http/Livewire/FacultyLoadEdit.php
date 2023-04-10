<?php

namespace App\Http\Livewire;

use App\Models\FacultyLoad;
use Illuminate\Database\QueryException;
use Livewire\Component;

class FacultyLoadEdit extends Component
{
    public $subID, $subname, $subgradelvl, $substrand, $subsection, $subday, $subtimestart, $subtimeend;

    public function mount($id)
    {
        $facultyLoad = FacultyLoad::where('id', $id)->first();
        $this->subname = $facultyLoad->sub_name;
        $this->subgradelvl = $facultyLoad->sub_gradelvl;
        $this->substrand = $facultyLoad->sub_strand;
        $this->subsection = $facultyLoad->sub_section;
        $this->subday = $facultyLoad->sub_day;
        $this->subtimestart = $facultyLoad->sub_timestart;
        $this->subtimeend = $facultyLoad->sub_timeend;
    }

    public function updateFacultyLoad()
    {
        try
        {
            $facultyLoad = FacultyLoad::where('id', $this->subID);
            $facultyLoad->update(
                ['sub_name' => $this->subname,
                'sub_gradelvl' => $this->subgradelvl,
                'sub_strand' => $this->substrand,
                'sub_section' => $this->subsection,
                'sub_day' => $this->subday,
                'sub_timestart' => $this->subtimestart,
                'sub_timeend' => $this->subtimeend
                ]
            );
            return back()->with('success', 'Faculty Load updated successfully');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.faculty-load-edit');
    }
}
