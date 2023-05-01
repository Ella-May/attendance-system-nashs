<?php

namespace App\Http\Livewire;

use App\Http\Resources\ApplicantReport;
use App\Models\AttendanceReport as ModelsAttendanceReport;
use App\Models\StudentInformation;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AttendanceReport extends Component
{
    public function render()
    {
        $schoolClinics = ModelsAttendanceReport::where('ar_department', 'school')->orWhere('ar_department', 'clinic')->get();
        $faculty = ModelsAttendanceReport::where('ar_subjectID', '!=', null)->where('ar_subject', '!=', null)->get();

        $data = compact('schoolClinics', 'faculty');

        return view('livewire.attendance-report', $data);
    }

    public function store(Request $request)
    {
        try {
            $attendance = DB::transaction(function () use ($request) {

                $student = StudentInformation::where('id',$request->studentID)->first();

                if($student->exists())
                {
                    $student = $student->first();

                    $user = Auth::user();

                    if($user->hasRole('Clinician'))
                    {
                        $attendanceReport = ModelsAttendanceReport::create([
                            'ar_studentId' => $student->id,
                            'ar_studentname' => $student->s_firstname.' '.$student->s_midname.' '.$student->s_lastname,
                            'ar_lrn' => $student->lrn,
                            'ar_gradelvl' => $student->s_gradelvl,
                            'ar_section' => $student->s_section,
                            'ar_date' => now(),
                            'ar_department' => 'clinic',
                        ]);

                        return $attendanceReport;
                    }

                    if($user->hasRole('Security Personnel'))
                    {
                        $attendanceReport = ModelsAttendanceReport::create([
                            'ar_studentId' => $student->id,
                            'ar_studentname' => $student->s_firstname.' '.$student->s_midname.' '.$student->s_lastname,
                            'ar_lrn' => $student->lrn,
                            'ar_gradelvl' => $student->s_gradelvl,
                            'ar_section' => $student->s_section,
                            'ar_date' => now(),
                            'ar_department' => 'school',
                        ]);

                       return $attendanceReport;
                    }

                    if($user->hasRole('Faculty Member'))
                    {

                        if(count($user->personnel->subjects) > 0)
                        {

                            foreach($user->personnel->subjects as $subject)
                            {
                                $startTime = strtotime($subject->subjectInfo->sub_timestart);
                                $endTime =  strtotime($subject->subjectInfo->sub_timeend);
                                $point = strtotime(now());

                                if($point >= $startTime && $point <= $endTime )
                                {
                                    $attendanceReport = ModelsAttendanceReport::create([
                                        'ar_subjectID' => $subject->subjectInfo->id,
                                        'ar_studentId' => $student->id,
                                        'ar_studentname' => $student->s_firstname.' '.$student->s_midname.' '.$student->s_lastname,
                                        'ar_lrn' => $student->lrn,
                                        'ar_gradelvl' => $student->s_gradelvl,
                                        'ar_section' => $student->s_section,
                                        'ar_date' => now(),
                                        'ar_subject' => $subject->subjectInfo->sub_name,
                                        'ar_remarks' => 'present'
                                    ]);
                                    return $attendanceReport;
                                }

                                // return json_encode([
                                //     'start' => $startTime,
                                //     'end' => $endTime,
                                //     'now' => $point,
                                //     'inside' => $point >= $startTime && $point <= $endTime ? true : false,
                                // ], true);
                            }
                        }
                    }

                }
            });

        } catch(QueryException $e)
        {
            return $e->getMessage();
        }

        if(!$attendance instanceof ModelsAttendanceReport)
        {
            $returnData = array(
                'status' => 'error',
                'message' => 'An error occurred!'
            );

            return Response::json($returnData, 200);
        }

        return ApplicantReport::make($attendance);
    }
}
