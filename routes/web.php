<?php


use App\Http\Controllers\ShowQRController;
use App\Http\Livewire\AttendanceReport;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Billing;
use App\Http\Livewire\CreateAccount;
use App\Http\Livewire\FacultyLoad;
use App\Http\Livewire\FacultyLoadEdit;
use App\Http\Livewire\QRCodeScanner;
use App\Http\Livewire\SchoolPersonnel;
use App\Http\Livewire\StudentInformation;
use App\Http\Livewire\StudentInformationEdit;
use App\Http\Livewire\StuQRCodeGenerator;
use App\Http\Livewire\StuQRCodeGeneratorShow;
use App\Http\Livewire\UserAccount;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ExampleLaravel\UserManagement;
use App\Http\Livewire\ExampleLaravel\UserProfile;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\RTL;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Tables;
use App\Http\Livewire\VirtualReality;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('sign-in');
});

Route::get('forgot-password', ForgotPassword::class)->middleware('guest')->name('password.forgot');
Route::get('reset-password/{id}', ResetPassword::class)->middleware('signed')->name('reset-password');



Route::get('sign-up', Register::class)->middleware('guest')->name('register');
Route::get('sign-in', Login::class)->middleware('guest')->name('login');

Route::get('user-profile', UserProfile::class)->middleware('auth')->name('user-profile');
Route::get('user-management', UserManagement::class)->middleware('auth')->name('user-management');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('billing', Billing::class)->name('billing');
    Route::get('profile', Profile::class)->name('profile');
    Route::get('tables', Tables::class)->name('tables');
    Route::get('notifications', Notifications::class)->name("notifications");
    Route::get('virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('static-sign-in', StaticSignIn::class)->name('static-sign-in');
    Route::get('static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('rtl', RTL::class)->name('rtl');
    Route::get('user-account', UserAccount::class)->name('user-account');
    Route::get('create-account', CreateAccount::class)->name('create-account');
    Route::post('create-account', [CreateAccount::class, 'store'])->name('create-account.store');
    Route::get('student-information', StudentInformation::class)->name('student-information');
    Route::get('student-information/{id}', StudentInformationEdit::class)->name('student-information.edit');
    Route::post('student-information', [StudentInformation::class, 'store'])->name('student-information.store');
    Route::get('school-personnel', SchoolPersonnel::class)->name('school-personnel');
    Route::post('school-personnel', [SchoolPersonnel::class, 'store'])->name('school-personnel.store');
    Route::get('faculty-load', FacultyLoad::class)->name('faculty-load');
    Route::get('faculty-load/{id}', FacultyLoadEdit::class)->name('faculty-load.edit');
    Route::post('faculty-load', [FacultyLoad::class, 'store'])->name('faculty-load.store');
    Route::get('attendance-report', AttendanceReport::class)->name('attendance-report');
    Route::post('attendance-report', [AttendanceReport::class, 'store'])->name('attendance-report.store');
    Route::get('qrcode-generator', StuQRCodeGenerator::class)->name('qrcode-generator');
    Route::get('qrcode-generator/{id}', StuQRCodeGeneratorShow::class)->name('qrcode-generator.show');
    Route::get('qrcode-generator/{id}/download', [StuQRCodeGeneratorShow::class, 'download'])->name('qrcode-generator.download');
    Route::get('qrcode-scanner', QRCodeScanner::class)->name('qrcode-scanner');
    // Route::get('qrcode', function(){ return QrCode::size(200)->generate('A basic example of Qr Code'); });
});

