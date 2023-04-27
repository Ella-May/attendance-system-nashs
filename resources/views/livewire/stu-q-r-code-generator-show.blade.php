<div>
    {{-- <embed type="text/html" src="{{ $qrcode }}"> --}}

    <div class="card me-4 pb-0">
        <div class="card-header pb-0 px-3">
            <h6>Generated QR Code</h6>
        </div>
        <div class="mb-3 text-center">
            {!! $qrcode !!}
        </div>
        <div class="card-body pt-4 p-3 pb-0">
            <ul class="list-group">
                <li class="border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        @isset($students)
                            <h6 class="mb-3 text-sm">Student Information</h6>
                            <span class="mb-2 text-xs">ID:
                                <span class="text-dark font-weight-bold ms-sm-2">{{ $students->id }}</span>
                            </span>
                            <span class="mb-2 text-xs">Name:
                                <span class="text-dark font-weight-bold ms-sm-2">{{ $students->s_lastname.', '.$students->s_firstname.' '.$students->s_midname }}</span>
                            </span>
                            <span class="mb-2 text-xs">LRN:
                                <span class="text-dark ms-sm-2 font-weight-bold">{{ $students->lrn }}</span>
                            </span>
                            <span class="text-xs">Grade & Section:
                                <span class="text-dark ms-sm-2 font-weight-bold">{{ $students->s_gradelvl.' - '.$students->s_section}}</span>
                            </span>
                        @endisset
                    </div>
                </li>
            </ul>
            <div class="text-center mb-3 py-0">
                <div class="d-flex flex-row gap-2 align-items-center justify-content-center">
                    <a href="{{ route('qrcode-generator.download', ['id' => $student]) }}">
                        <button type="button" class="btn btn-secondary mb-3">Download</button>
                    </a>
                 </div>
            </div>
        </div>
    </div>


</div>
