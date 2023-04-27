<div>
    <!-- Display Faculty Load -->
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
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Faculty Load Table</h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Subject
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalCenterTitle">Add Faculty Load</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form method="POST" action="{{ route('faculty-load.store') }}" id="facultyLoadForm">
                                                @csrf
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label for="subname" class="row form-label">Subject Name</label>
                                                        <input class="form-control border px-2" type="text" id="subname"
                                                            name="subname" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label class="row form-label" for="subgradelvl">Grade Level</label>
                                                        <select id="subgradelvl" class="form-select border px-2" name="subgradelvl" required>
                                                            <option value="Grade 11">Grade 11</option>
                                                            <option value="Grade 12">Grade 12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label for="substrand" class="row form-label">Strand</label>
                                                        <select id="substrand" class="form-select border px-2" name="substrand" required>
                                                            <option value="Accountancy, Business and Management">Accountancy, Business and Management</option>
                                                            <option value="General Academic Strand">General Academic Strand</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label for="subsection" class="row form-label">Section</label>
                                                        <input class="form-control border px-2" type="text" id="subsection" name="subsection" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label class="row form-label" for="subday">Day</label>
                                                        <select id="subday" class="form-select border px-2" name="subday" required>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="form-group">
                                                        <label for="subtimestart" class="row form-label">Subject Time Start</label>
                                                        <input class="form-control border px-2" type="time" id="subtimestart"
                                                            name="subtimestart" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="subtimeend" class="row form-label">Subject Time End</label>
                                                        <input class="form-control border px-2" type="time" id="subtimeend"
                                                            name="subtimeend" required>
                                                    </div>
                                                </div>
                                            </form>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" form="facultyLoadForm" class="btn btn-primary">Submit</button>
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
                                        <th class="text-center align-middle text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                            Subject Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @isset($subjects)
                                            @foreach ($subjects as $subject)
                                            <tr>
                                                <td class="align-middle text-center text-sm">
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
                                                <td class="align-middle text-center text-sm">
                                                    <div class="ms-auto text-end">
                                                        <button type="button" class="btn btn-link text-info px-1 mb-0"  data-bs-toggle="modal" data-bs-target="#viewModal{{ $subject->id }}">
                                                            <i class="material-icons text-sm">visibility</i>
                                                            View
                                                        </button>
                                                        <div class="modal fade" id="viewModal{{ $subject->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"><i class="material-icons text-m py-2">info</i> Faculty Load Information</h5>
                                                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="text-m font-weight-bold mb-0" id="view_items_label">Subject Name: {{ $subject->sub_name }}</p>
                                                                    <p class="text-m font-weight-bold mb-0" id="view_items_label">Strand: {{ $subject->sub_strand }}</p>
                                                                    <p class="text-m font-weight-bold mb-0" id="view_items_label">Grade Level & Section: {{ $subject->sub_gradelvl.' - '.$subject->sub_section }}</p>
                                                                    <p class="text-m font-weight-bold mb-0" id="view_items_label">Subject Day: {{ $subject->sub_day }}</p>
                                                                    <p class="text-m font-weight-bold mb-0" id="view_items_label">Subject Time: {{ $subject->sub_timestart.' - '.$subject->sub_timeend }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <a class="btn btn-link text-dark text-gradient px-1 mb-0" data-bs-dismiss="modal">Close</a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <a class="btn btn-link text-dark px-1 mb-0" href="{{ route('faculty-load.edit', ['id' => $subject->id ]) }}">
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
                                                                    <p class="text-m font-weight-bold mb-0" id="del_items_label">Subject Name: {{ $subject->sub_name }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <a class="btn btn-link text-dark text-gradient px-1 mb-0" data-bs-dismiss="modal">Close</a>
                                                                  <a class="btn btn-link text-danger text-gradient px-1 mb-0" wire:click="delete({{ $subject->id }})"">
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
