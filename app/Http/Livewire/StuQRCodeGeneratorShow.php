<?php

namespace App\Http\Livewire;

use App\Models\StudentInformation;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
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
        $student = $this->studentID;
        $qrcode = QrCode::size(300)->generate($student);
        $students = StudentInformation::where('id', $student)->first();
        $data = compact('qrcode', 'student', 'students');
        return view('livewire.stu-q-r-code-generator-show', $data);
    }

    public function download(Request $request, $id)
    {
        $studInfo = StudentInformation::where('id', $id)->first();
        $this->studentID = $studInfo->id;
        $this->lrn = $studInfo->lrn;

        $imageName  = strtolower(str_replace(' ', '-', $studInfo->s_firstname)).'-'.strtolower($studInfo->s_lastname).'-'.'qr-code';
        $headers    = array('Content-Type' => ['png','svg','eps']);
        $type       = 'png';
        $image      = QrCode::format('png')
                    ->size(300)->errorCorrection('H')
                    ->generate($studInfo->id);

        Storage::disk('public')->put('qr-code/'.$imageName, $image);


        $path = Storage::disk('public')->path('qr-code/' . $imageName);

        $imageCreate = imagecreatefrompng($path);
        // imagejpeg($imageCreate, $path, 100);
        imagedestroy($imageCreate);

        return response()->download($path, $imageName.'.'.$type, $headers)->deleteFileAfterSend();
    }
}
