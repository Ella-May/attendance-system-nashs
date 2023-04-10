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
                        <form wire:submit.prevent=updateFacultyLoad>
                            @csrf
                            <div class="mb-3 row">
                                <label for="subname" class="col col-form-label">Subject Name</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="subname"
                                        name="subname" wire:model="subname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Grade Level</label>
                                <div class="col-md-10">
                                    <select id="subgradelvl" class="form-select border px-2" name="subgradelvl" wire:model="subgradelvl">
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="substrand" class="col col-form-label">Strand</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="substrand" name="substrand" wire:model="substrand">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subsection" class="col col-form-label">Section</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="text" id="subsection" name="subsection" wire:model="subsection">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col col-form-label" for="formFile">Day</label>
                                <div class="col-md-10">
                                    <select id="subday" class="form-select border px-2" name="subday" wire:model="subday">
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
                                        name="subtimestart" wire:model="subtimestart">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="subtimeend" class="col col-form-label">Subject Time End</label>
                                <div class="col-md-10">
                                    <input class="form-control border px-2" type="time" id="subtimeend"
                                        name="subtimeend" wire:model="subtimeend">
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
