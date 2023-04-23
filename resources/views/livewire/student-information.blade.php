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
            @Elseif (session()->has('message'))
                <div class="alert alert-success text-center">{{ session('message') }}</div>
            @endif
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Student Information Table</h6>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class=" me-3 my-3 text-end">
                        <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Student
                        </button>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Add Student Information</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST" id="studentInformationForm" action="{{ route('student-information.store') }}">
                                            @csrf
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="lrn" class="row form-label">Learner's Reference No.</label>
                                                    <input class="form-control border px-2" type="text" id="lrn"
                                                        name="lrn" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="firstname" class="row form-label">First Name</label>
                                                    <input class="form-control border px-2" type="text" id="firstname"
                                                        name="firstname" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="midname" class="row form-label">Middle Name</label>
                                                    <input class="form-control border px-2" type="text" id="midname"
                                                        name="midname">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="lastname" class="row form-label">Last Name</label>
                                                    <input class="form-control border px-2" type="text" id="lastname" name="lastname" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="address" class="row form-label">Address</label>
                                                    <input class="form-control border px-2" type="text" id="address"
                                                        name="address" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="row form-label" for="sex">Sex</label>
                                                    <select id="sex" class="form-select border px-2 text-dark" name="sex" required>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="snumber" class="row form-label">Student Contact No.</label>
                                                    <input class="form-control border px-2" type="text" id="snumber"
                                                        name="snumber" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="gname" class="row form-label">Guardian Name</label>
                                                    <input class="form-control border px-2" type="text" id="gname"
                                                        name="gname" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="gnumber" class="row form-label">Guardian Contact No.</label>
                                                    <input class="form-control border px-2" type="text" id="gnumber"
                                                        name="gnumber" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label class="row form-label" for="sex">Grade Level</label>
                                                    <select id="gradelvl" class="form-select border px-2" name="gradelvl" required>
                                                        <option value="Grade 11">Grade 11</option>
                                                        <option value="Grade 12">Grade 12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="strand" class="row form-label">Strand</label>
                                                    <select id="strand" class="form-select border px-2" name="strand" required>
                                                        <option value="Accountancy, Business and Management">Accountancy, Business and Management</option>
                                                        <option value="General Academic Strand">General Academic Strand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="section" class="row form-label">Section</label>
                                                    <input class="form-control border px-2" type="text" id="section"
                                                        name="section" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="bday" class="row form-label">Birthday</label>
                                                    <input class="form-control border px-2" type="date" id="bday"
                                                        name="bday" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="form-group">
                                                    <label for="age" class="row form-label">Age</label>
                                                    <input class="form-control border px-2" type="text" id="age"
                                                        name="age" required>
                                                </div>
                                            </div>
                                        </form>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" form="studentInformationForm" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                          </div>
                        </div>
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
                                                        <button type="button" class="btn btn-link text-danger text-gradient px-1 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="material-icons text-sm">delete</i>Delete</button>
                                                        </div>
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"><i class="material-icons text-m py-2">warning</i> Are you sure do you want to delete?</h5>
                                                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="text-m font-weight-bold mb-0" id="del_items_label">LRN: {{ $student->lrn }}</p>
                                                                    <p class="text-m font-weight-bold mb-0" id="del_items_label">Name: {{ $student->s_lastname.', '.$student->s_firstname.' '.$student->s_midname }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <a class="btn btn-link text-dark text-gradient px-1 mb-0" data-bs-dismiss="modal">Close</a>
                                                                  <a class="btn btn-link text-danger text-gradient px-1 mb-0" wire:click="delete({{ $student->id }})"">
                                                                    Delete</a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
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



