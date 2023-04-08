<div>
    <!-- Display Student Info -->
    <div class="container-fluid py-4">
        <div class="row">
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

    <!-- Add Student Info -->
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
                        <form method="POST" action="{{ route('student-information.store') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="lrn" class="col col-form-label">Learner's Reference No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="lrn"
                                        name="lrn">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="firstname" class="col col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="firstname"
                                        name="firstname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="midname" class="col col-form-label">Middle Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="midname"
                                        name="midname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="lastname" class="col col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="lastname"
                                        name="lastname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col col-form-label">Address</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="address"
                                        name="address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Sex</label>
                                <div class="col-md-10">
                                    <select id="sex" class="form-select border px-2" name="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="snumber" class="col col-form-label">Student Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="snumber"
                                        name="snumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gname" class="col col-form-label">Guardian Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="gname"
                                        name="gname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gnumber" class="col col-form-label">Guardian Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="gnumber"
                                        name="gnumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Grade Level</label>
                                <div class="col-md-10">
                                    <select id="gradelvl" class="form-select border px-2" name="gradelvl">
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="strand" class="col col-form-label">Strand</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="strand"
                                        name="strand">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="section" class="col col-form-label">Section</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="section"
                                        name="section">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bday" class="col col-form-label">Birthday</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="date" id="bday"
                                        name="bday">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="age" class="col col-form-label">Age</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="age"
                                        name="age">
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
