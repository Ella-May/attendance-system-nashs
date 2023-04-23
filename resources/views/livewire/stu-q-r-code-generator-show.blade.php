<div>
    {{-- <embed type="text/html" src="{{ $qrcode }}"> --}}

    <div class="mb-3 text-center">
        {!! $qrcode !!}
    </div>


    <div class="text-center mb-3">
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <button type="button" id="scan" class="btn btn-primary mb-3">Scan QR</button>
            <a href="{{ route('qrcode-generator.download', ['id' => $student]) }}">
                <button type="button" class="btn btn-secondary mb-3">Download</button>
            </a>
         </div>
        <div>
            <video id="preview" width="480"></video>
        </div>
    </div>
</div>
