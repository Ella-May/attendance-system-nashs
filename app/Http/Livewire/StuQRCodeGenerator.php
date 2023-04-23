<?php

namespace App\Http\Livewire;

use App\Models\StudentInformation;
use Livewire\Component;

class StuQRCodeGenerator extends Component
{

    public function render()
    {
        $students = StudentInformation::get();
        $data = compact('students');
        return view('livewire.stu-q-r-code-generator', $data);
    }
}
