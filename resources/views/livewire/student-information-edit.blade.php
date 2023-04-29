<div>
    <div class="container">
        <div class="row">
            <div class="ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                    <div class="card-body">
                        <form wire:submit.prevent=updateStudInfo>
                            @csrf
                            <div class="mb-3 row">
                                <label for="lrn" class="col col-form-label">Learner's Reference No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="lrn"
                                        name="lrn" wire:model="lrn">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="firstname" class="col col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="firstname"
                                        name="firstname" wire:model="firstname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="midname" class="col col-form-label">Middle Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="midname"
                                        name="midname" wire:model="midname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="lastname" class="col col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="lastname"
                                        name="lastname" wire:model="lastname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col col-form-label">Address</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="address"
                                        name="address" wire:model="address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Gender</label>
                                <div class="col-md-10">
                                    <select id="sex" class="form-select border px-2 text-dark" name="sex" wire:model="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="snumber" class="col col-form-label">Student Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="snumber"
                                        name="snumber" wire:model="snumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gname" class="col col-form-label">Guardian Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="gname"
                                        name="gname" wire:model="gname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gnumber" class="col col-form-label">Guardian Contact No.</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="gnumber"
                                        name="gnumber" wire:model="gnumber">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Grade Level</label>
                                <div class="col-md-10">
                                    <select id="gradelvl" class="form-select border px-2" name="gradelvl" wire:model="gradelvl">
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="strand" class="col col-form-label">Strand</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="strand"
                                        name="strand" wire:model="strand">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="section" class="col col-form-label">Section</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="section"
                                        name="section" wire:model="section">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bday" class="col col-form-label">Birthday</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="date" id="bday"
                                        name="bday" wire:model="bday">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="age" class="col col-form-label">Age</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="age"
                                        name="age" wire:model="age">
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
