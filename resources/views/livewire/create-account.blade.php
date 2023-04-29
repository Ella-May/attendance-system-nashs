<div>
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
                        <form method="POST" action="{{ route('create-account.store') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="firstname" class="col col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="firstname"
                                        name="firstname" required>
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
                                        name="lastname" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col col-form-label">Address</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="address"
                                        name="address" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="cnumber" class="col col-form-label">Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="cnumber" name="cnumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="email" id="email"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Gender</label>
                                <div class="col-md-10">
                                    <select id="sex" class="form-select border px-2" name="sex" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Position</label>
                                <div class="col-md-10">
                                    <select id="position" class="form-select border px-2" name="position" required>
                                        <option>Open this select menu</option>
                                        <option value="Faculty Member">Faculty Member</option>
                                        <option value="Security Personnel">Security Personnel</option>
                                        <option value="Clinician">Clinician</option>
                                        <option value="Principal">Principal</option>
                                        <option value="School Registrar">School Registrar</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" id="createAccount" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
