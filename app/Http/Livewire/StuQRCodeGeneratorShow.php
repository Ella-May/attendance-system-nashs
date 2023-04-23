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
        $qrcode = QrCode::size(300)->generate($this->lrn);
        $student = $this->studentID;
        $data = compact('qrcode', 'student');
        return view('livewire.stu-q-r-code-generator-show', $data);
    }

    public function download(Request $request, $id)
    {
        $studInfo = StudentInformation::where('id', $id)->first();
        $this->studentID = $studInfo->id;
        $this->lrn = $studInfo->lrn;

        $imageName  = 'qr-code';
        $headers    = array('Content-Type' => ['png','svg','eps']);
        $type       = 'png';
        $image      = QrCode::format('png')
                    ->size(300)->errorCorrection('H')
                    ->generate($this->lrn);

        Storage::disk('public')->put($imageName, $image);

        $type = 'png';
        $image = imagecreatefrompng('storage/'.$imageName);
        imagejpeg($image, 'storage/'.$imageName, 100);
        imagedestroy($image);

        return response()->download('storage/'.$imageName, $imageName.'.'.$type, $headers)->deleteFileAfterSend();
    }
}
