<div>
    {{-- <embed type="text/html" src="{{ $qrcode }}"> --}}

    <div class="mb-3 text-center">
        {!! $qrcode !!}

    </div>


    <div class="text-center mb-3">
        <button type="button" id="scan" class="mb-3">Scan QR</button>
        <div>
            <video id="preview" width="480"></video>
        </div>
    </div>
</div>
