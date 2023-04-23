<?php

namespace App\Http\Livewire;

use App\Models\StudentInformation;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StuQRCodeGeneratorShow extends Component
{
    public $studentID, $lrn;

    public function mount($id)
    {
        $studInfo = StudentInformation::where('id', $id)->first();
        $this->studentID = $studInfo->id;
        $this->lrn = $studInfo->lrn;
    }

    public function render()
    {
        $qrcode = QrCode::size(100)->generate($this->lrn);
        $data = compact('qrcode');
        return view('livewire.stu-q-r-code-generator-show', $data);
    }
}
