import Swal from 'sweetalert2';
import moment from 'moment/moment';

let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });
const csrf = document.querySelector('meta[name="csrf-token"]').content;

    // If the camera scan the QR Code this will run
    scanner.addListener('scan', function (content) {
        // Request
        let formData = new FormData();
        formData.append('time', moment().unix());
        formData.append('studentID', content);

        setTimeout(() => {
            fetch('https://attendance-system-nashs.test/attendance-report', {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrf,
            },
            body: formData
            })
            .then(result => result.json())
            .then(data => {
                console.log(data);

                if(data.status == "error" || data.message == "An error has occured!")
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }  else {
                    const timeRecord = `
                        <div>
                            <h5>Name: ${data.ar_studentname}</h5>
                            <p>Date and Time: ${moment(data.ar_date).format('MMMM Do YYYY')} at ${moment(data.ar_time).format('h:mm A')}</p>
                            ${data.ar_department ? '<p>Department: <span class="text-capitalize">'+data.ar_department+'</span></p>' : ''}
                            ${data.ar_subject ? '<p>Subject: <span class="text-capitalize">'+data.subject+'</span></p>' : ''}
                        </div>
                    `
                    Swal.fire({
                        icon: 'success',
                        title: 'Time Recorded',
                        html: timeRecord,
                    })
                }

            })
        }, 500)
    });

    // This will start the camera
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            const buttonScanner = document.getElementById('scanQRCode');
            const flipButton = document.getElementById('flipButton');

            // scanner.start(cameras[0]);
            buttonScanner.addEventListener('click', () => {
                    if(cameras[0])
                    {
                        scanner.start(cameras[0])
                    }
                    document.querySelector('.camera-con').classList.remove('d-none');
            })

            flipButton.addEventListener('click', () => {
                    if (cameras[0]) {
                        flipButton.innerText = 'Back';
                        // scanner.start(cameras[0]);
                        scanner.start(cameras[1])
                    } else {
                        flipButton.innerText = 'Front';
                        // scanner.start(cameras[0]);
                        scanner.start(cameras[0])
                    }
            })

        } else {
            console.error('No cameras found.');
        }
    }).catch(function (e) {
        console.error(e);
    });


// window.deleteConfirm = function(formId)
// {
//     Swal.fire({
//         icon: 'warning',
//         text: 'Do you want to delete this?',
//         showCancelButton: true,
//         confirmButtonText: 'Delete',
//         confirmButtonColor: '#e3342f',
//     }).then((result) => {
//         if (result.isConfirmed) {
//             document.getElementById(formId).submit();
//         }
//     });
// }
// console.log()
