
<div class="mx-3 px-4">
    <h3>Scan QR Code here</h3>
</div>

<div class="text-center mb-3">
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <button type="button" id="scanQRCode" class="btn btn-primary mb-3">Scan QR</button>
        </div>
</div>
<div class="d-none camera-con">
    <div class="text-center mb-3">
        <video id="preview" width="720"></video>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-primary" id="flipButton">Back</button>
    </div>
</div>


<script src="{{ asset('assets') }}/js/instascan/instascan.min.js"></script>
<script src="/js/sweetalert.js"></script>
<script>
    // let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });
    // const csrf = document.querySelector('meta[name="csrf-token"]').content;



    //     // If the camera scan the QR Code this will run
    //     scanner.addListener('scan', function (content) {
    //         // Request
    //         let formData = new FormData();
    //         formData.append('time', Date.now());
    //         formData.append('studentID', content);

    //         fetch('{{ env('ATTENDANCE_REPORT') }}', {
    //             method: "POST",
    //             headers: {
    //                 "X-CSRF-TOKEN": csrf,
    //             },
    //             body: formData
    //         }).then(result => swal({icon: "success"}))
    //     });

    //     // This will start the camera
    //     Instascan.Camera.getCameras().then(function (cameras) {
    //         if (cameras.length > 0) {
    //             const buttonScanner = document.getElementById('scanQRCode');
    //             const flipButton = document.getElementById('flipButton');

    //             // scanner.start(cameras[0]);
    //             buttonScanner.addEventListener('click', () => {
    //                     if(cameras[0])
    //                     {
    //                         scanner.start(cameras[0])
    //                     }
    //                     document.querySelector('.camera-con').classList.remove('d-none');
    //             })

    //             flipButton.addEventListener('click', () => {
    //                     if (cameras[0]) {
    //                         flipButton.innerText = 'Back';
    //                         // scanner.start(cameras[0]);
    //                         scanner.start(cameras[1])
    //                     } else {
    //                         flipButton.innerText = 'Front';
    //                         // scanner.start(cameras[0]);
    //                         scanner.start(cameras[0])
    //                     }
    //             })

    //         } else {
    //             console.error('No cameras found.');
    //         }
    //     }).catch(function (e) {
    //         console.error(e);
    //     });

</script>
