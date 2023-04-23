<div>
    <!-- Display School Personnel Info-->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">School Personnel Table</h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('create-account') }}">
                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Personnel
                        </a>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Personnel Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Position
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @isset($personnels)
                                            @foreach ($personnels as $personnel)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 ps-3">{{ $personnel->id }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 ps-3">{{ $personnel->p_lastname.', '.$personnel->p_firstname.' '.$personnel->p_midname }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-center text-xs font-weight-bold mb-0">{{ $personnel->p_position}}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="ms-auto">
                                                        <a class="btn btn-link text-info px-1 mb-0" href="javascript:;">
                                                            <i class="material-icons text-sm">visibility</i>
                                                            View
                                                        </a>
                                                        <a class="btn btn-link text-dark px-1 mb-0" href="javascript:;">
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

    {{-- <!-- Add Student Info -->
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
                        <form method="POST" action="{{ route('school-personnel.store') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="firstname" class="col col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="firstname" name="firstname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="midname" class="col col-form-label">Middle Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="midname" name="midname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="lastname" class="col col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="lastname" name="lastname">
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
                                <label for="address" class="col col-form-label">Address</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="address"
                                        name="address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="cnumber" class="col col-form-label">Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="cnumber" name="cnumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Position</label>
                                <div class="col-md-10">
                                    <select id="position" class="form-select border px-2" name="position">
                                        <option>Open this select menu</option>
                                        @isset($roles)
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    <span>{{ Str::ucfirst($role->name) }}</span>
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
