<?php

namespace App\Http\Livewire;

use App\Models\FacultyLoad;
use App\Models\SubjectInfo;
use Illuminate\Database\QueryException;
use Livewire\Component;

class SubjectInfoEdit extends Component
{
    public $subID, $subname, $subgradelvl, $substrand, $subsection, $subday, $subtimestart, $subtimeend;

    public function mount($id)
    {
        $subjectInfo = SubjectInfo::where('id', $id)->first();
        $this->subID = $subjectInfo->id;
        $this->subname = $subjectInfo->sub_name;
        $this->subgradelvl = $subjectInfo->sub_gradelvl;
        $this->substrand = $subjectInfo->sub_strand;
        $this->subsection = $subjectInfo->sub_section;
        $this->subday = $subjectInfo->sub_day;
        $this->subtimestart = $subjectInfo->sub_timestart;
        $this->subtimeend = $subjectInfo->sub_timeend;
    }

    public function updateFacultyLoad()
    {
        try
        {
            $subjectInfo = SubjectInfo::where('id', $this->subID);
            $subjectInfo->update(
                [
                    'sub_name' => $this->subname,
                    'sub_gradelvl' => $this->subgradelvl,
                    'sub_strand' => $this->substrand,
                    'sub_section' => $this->subsection,
                    'sub_day' => $this->subday,
                    'sub_timestart' => $this->subtimestart,
                    'sub_timeend' => $this->subtimeend
                ]
            );
            return redirect()->route('subject-info')->with('success', 'Faculty Load updated successfully!');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.subject-info-edit');
    }
}
