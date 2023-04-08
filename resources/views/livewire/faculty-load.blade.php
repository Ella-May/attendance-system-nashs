<div>
    <!-- Display Faculty Load -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Faculty Load Table</h6>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Subject Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Strand
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Grade Level and Section
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Day
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Subject Time
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @isset($subjects)
                                            @foreach ($subjects as $subject)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $subject->sub_name }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $subject->sub_strand }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $subject->sub_gradelvl.' - '.$subject->sub_section }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $subject->sub_day }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $subject->sub_timestart.' - '.$subject->sub_timeend }}</p>
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
    <!-- Add Faculty Load -->
    <div class="container">
        <div class="row">
            <div class="ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @Elseif(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('faculty-load.store') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="subname" class="col col-form-label">Subject Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="subname"
                                        name="subname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Grade Level</label>
                                <div class="col-md-10">
                                    <select id="subgradelvl" class="form-select border px-2" name="subgradelvl">
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="substrand" class="col col-form-label">Strand</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="substrand" name="substrand">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subsection" class="col col-form-label">Section</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="subsection" name="subsection">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Day</label>
                                <div class="col-md-10">
                                    <select id="subday" class="form-select border px-2" name="subday">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subtimestart" class="col col-form-label">Subject Time Start</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="time" id="subtimestart"
                                        name="subtimestart">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subtimeend" class="col col-form-label">Subject Time End</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="time" id="subtimeend"
                                        name="subtimeend">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
