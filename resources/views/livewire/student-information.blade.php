<div>
    <!-- Display Student Info -->
    <div class="container-fluid py-4">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @Elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Student Information Table</h6>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            LRN
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Student Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Strand
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Grade Level and Section
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @isset($students)
                                            @foreach ($students as $student)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $student->lrn }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $student->s_lastname.', '.$student->s_firstname.' '.$student->s_midname }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $student->s_strand }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $student->s_gradelvl.' - '.$student->s_section }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="ms-auto text-end">
                                                        <a class="btn btn-link text-info px-1 mb-0" href="javascript:;">
                                                            <i class="material-icons text-sm">visibility</i>
                                                            View
                                                        </a>
                                                        <a class="btn btn-link text-dark px-1 mb-0" href="{{ route('student-information.edit', ['id' => $student->id ]) }}">
                                                            <i class="material-icons text-sm">edit</i>
                                                            Edit
                                                        </a>
                                                        <a class="btn btn-link text-danger text-gradient px-1 mb-0" href="javascript:;">
                                                            <i class="material-icons text-sm">delete</i>Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
