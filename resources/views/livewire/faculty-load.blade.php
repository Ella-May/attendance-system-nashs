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
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Assign Subject
                            </button>
                            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalCenterTitle">Add Subject Infomation</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form method="POST" action="{{ route('faculty-load.store') }}" id="facultyLoadForm">
                                                @csrf
                                                <div class="d-flex gap-2 flex-wrap">
                                                    <fieldset class="flex-fill">
                                                        <h6 class="mb-2">List of Faculty Members</h6>
                                                        <div class="list-group">
                                                            @isset($facultyMembers)
                                                            @foreach ($facultyMembers as $member)
                                                            <label for="{{ $member->id }}" class="mb-0 list-group-item list-group-item-action member">
                                                                <div>
                                                                    <input type="radio" id="{{ $member->id }}" name="member" class="d-none" value="{{ $member->id }}">
                                                                    <p class="mb-0">
                                                                        {{ $member->p_firstname }} {{ $member->p_lastname }}
                                                                    </p>
                                                                </div>
                                                            </label>
                                                            @endforeach
                                                            @endisset
                                                          </div>
                                                    </fieldset>
                                                    <fieldset class="flex-fill">
                                                        <h6 class="mb-2">Subjects</h6>
                                                        <div class="list-group">
                                                        @isset($subjectInfos)
                                                        @foreach ($subjectInfos as $info)
                                                        <label for="{{ $info->id.$info->sub_name }}" class="list-group-item list-group-item-action subjectInfo mb-1">
                                                                <input type="checkbox" id="{{ $info->id.$info->sub_name }}" name="subject[]" class="" value="{{ $info->id }}">
                                                                <p class="fw-bold mb-0">
                                                                    {{ $info->sub_name }}
                                                                </p>
                                                                <p class="mb-0">
                                                                    {{ $info->sub_strand }}
                                                                </p>
                                                                <p class="mb-0">
                                                                    {{ $info->sub_gradelvl }} - {{ $info->sub_section }}
                                                                </p>
                                                        </label>
                                                        @endforeach
                                                        @endisset
                                                        </div>
                                                    </fieldset>
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
                                            Personnel Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Subject
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Subject Strand
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Grade Level and Section
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Day
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Time Start
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Time End
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @isset($facultyLoads)
                                            @foreach ($facultyLoads as $load)
                                            <tr>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $load->schoolPersonnel->p_firstname }} {{ $load->schoolPersonnel->p_midname }} {{ $load->schoolPersonnel->p_lastname }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $load->subjectInfo->sub_name }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $load->subjectInfo->sub_strand }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $load->subjectInfo->sub_gradelvl }} {{ $load->subjectInfo->sub_section }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $load->subjectInfo->sub_day }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ date('h:i A', strtotime($load->subjectInfo->sub_timestart ))}}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ date('h:i A', strtotime($load->subjectInfo->sub_timeend)) }}
                                                    </p>
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
<script>
   const clickableDivs = document.querySelectorAll('.member');
   const subjectInfos = document.querySelectorAll('.subjectInfo');

   subjectInfos.forEach((info) => {
        info.addEventListener('click', function(e) {
            // info.classList.add('active');
           info.firstElementChild.checked ? info.classList.add('active') : info.classList.remove('active');

        });
    })

    clickableDivs.forEach(function(div) {
        div.addEventListener('click', function() {
            clickableDivs.forEach(function(div) {
                div.classList.remove('active');
                });
            div.classList.add('active');
        });
    });
</script>
