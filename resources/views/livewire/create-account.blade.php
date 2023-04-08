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
                                <label for="email" class="col col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="email" id="email"
                                        name="email">
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
