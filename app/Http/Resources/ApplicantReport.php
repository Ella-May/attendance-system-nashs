<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantReport extends JsonResource
{
    public static $wrap = null;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ar_subjectID' => $this->subjectID,
            'ar_studentId' => $this->ar_studentId,
            'ar_studentname' => $this->ar_studentname,
            'ar_lrn' => $this->ar_lrn,
            'ar_gradelvl' => $this->ar_gradelvl,
            'ar_section' => $this->ar_section,
            'ar_date' => $this->ar_date,
            'ar_subject' => $this->ar_subject,
            'ar_department' => \Str::ucfirst($this->ar_department),
            'ar_remarks' => $this->ar_remarks
        ];
    }
}
