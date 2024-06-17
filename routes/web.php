<?php

use Illuminate\Support\Facades\Route;

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


/*---------------------frontend---------------------------------------*/
/*
Route::get('/',function(){
 $categories=App\Models\CategoriesCourse::all();
 return view('frontend.index',compact('categories'));
});
*/
Route::get('/','FrontendController@index')->name('index');

Route::get('frontend/the-school','FrontendController@school')->name('the-school');
Route::get('frontend/contact-us','FrontendController@contact')->name('contact-us');
Route::get('frontend/registrationPage','frontendPageController@reg')->name('registrationPage');

Route::get('frontend/privacy-and-data-protection','FrontendController@privacy')->name('privacy-and-data-protection');
Route::get('frontend/Alumni-Privacy-Notice','FrontendController@alumni')->name('Alumni-Privacy-Notice');
Route::get('frontend/Marketing-Privacy-Notice','FrontendController@marketing')->name('Marketing-Privacy-Notice');
Route::get('frontend/Student-Privacy-Notice','FrontendController@studentPri')->name('Student-Privacy-Notice');
Route::get('frontend/Story-Photo-Privacy-Notice','FrontendController@storyPhoto')->name('Story-Photo-Privacy-Notice');

Route::get('frontend/sbs-info','FrontendController@sbs')->name('sbs-info');
Route::get('frontend/lincoln-info','FrontendController@lincoln')->name('lincoln-info');
Route::get('frontend/helpuniversity-info','FrontendController@help')->name('helpuniversity-info');
Route::get('frontend/event/{id}','FrontendController@graduation')->name('events');


Route::get('frontend/sbsmba_registration','frontendPageController@sbsmbaStudentf')->name('sbsmba_registraton');

Route::get('frontend/lincolnmba_registraton','frontendPageController@lincolnmbaStudentf')->name('lincolnmba_registraton');

Route::get('frontend/iqndiploma_registraton','frontendPageController@iqndiplomaf')->name('iqndiploma_registraton');

Route::get('frontend/abediploma_registraton','frontendPageController@abediplomaf')->name('abediploma_registraton');

Route::get('frontend/minimba_registraton','frontendPageController@minimbaf')->name('minimba_registraton');

Route::get('frontend/certificate_registraton','frontendPageController@Certificatef')->name('certificate_registraton');

//Route::get('frontend/abediplomaZoom/','FrontendController@abediplomaZoom')->name('frontend.abediplomaZoom');
Route::get('frontend/dashboard','frontendPageController@dashboard')->name('dashboard');


Route::get('frontend/our-programs/{category}','FrontendController@ourprograms')->name('frontend.our-programs');
Route::get('frontend/our-programs/course-details/{course}','FrontendController@showCourseDetails')->name('frontend.our-programs.detail');
Route::get('frontend/miniMBA/','FrontendController@minimba')->name('frontend.miniMBA');
Route::get('frontend/certificate/','FrontendController@certi')->name('frontend.certificate');
//Route::get('frontend/our-programs/{id}','FrontendController@detail')->name('frontend.detail');

Auth::routes(['verify' => true]);

//---------------------frontend---------------------------------------

Route::resource('frontend/abediploma','AbestudentController');
//->middleware('auth');
Route::resource('frontend/abediplomaZoom','AbestudentZoomController');
Route::resource('frontend/iqndiploma','iqnDiplomaController');
Route::resource('frontend/sbsmba','SbsStudentController');
//->middleware('auth');
Route::resource('frontend/lincolnmba','LincolnStudentController');
Route::resource('frontend/miniMBA','minifrontContoller');
Route::resource('frontend/certificate','certifrontendController');
Route::resource('fontend/contact-us','ContactUsController');
Route::resource('fontend/our-programs','EnquiryController');
Route::resource('frontend/payment','paymentController');
Route::resource('frontend/accountChange','accountFrontController');
//Route::resource('fontend/registrationPage','frontendPageController');
//Route::resource('frontend/our-programs','CourseDetail');

/*
eloquent database
frontend
frontend.store
frontend.edit
frontend.create
frontend.delete
fronted.update

*/

//---------------------Backtend---------------------------------------
Route::group(['middleware' => ['admin']], function () {
//Route::resource('backend/Backend','BackendController');
Route::resource('backend/abebackend','AbeBackendController');
//->middleware('auth');
Route::resource('backend/abebackendZoom','AbebackendZoomController');
Route::resource('backend/iqnbackendpos','IqnDiplomaBackendController');
Route::resource('backend/sbsbackend','SbsBackendController');
Route::resource('backend/lincolnbackend','lincolnBackendController');
Route::resource('backend/categories','CategoriesCourseController');
Route::resource('backend/type','CoursetypeController');
Route::resource('backend/courses','CoursesController');
Route::resource('backend/miniMba','miniBackendController');
Route::resource('backend/contactUs','ContactusBackendController');
Route::resource('backend/enquiry','enquiryBackendController');
Route::resource('backend/certificatebackend','CertificateController');
//-------------------------------------------------------------------
Route::get('backend/miniMba/facetoface/{id}',[App\Http\Controllers\miniBackendController::class, 'facetoface'])->name('miniMbaone');
Route::get('backend/miniMba/elearning/{id}',[App\Http\Controllers\miniBackendController::class, 'elearning'])->name('miniMbatwo');
Route::get('backend/miniMba/zoomclass/{id}',[App\Http\Controllers\miniBackendController::class, 'zoom'])->name('miniMbathree');
//-------------------------------------------------------------------
Route::get('backend/abebackend/facetoface/{id}',[App\Http\Controllers\AbeBackendController::class, 'facetoface'])->name('abeone');
Route::get('backend/abebackend/elearning/{id}',[App\Http\Controllers\AbeBackendController::class, 'elearning'])->name('abetwo');
Route::get('backend/abebackend/zoomclass/{id}',[App\Http\Controllers\AbeBackendController::class, 'zoom'])->name('abethree');
//-------------------------------------------------------------------

//-------------------------------------------------------------------
Route::get('backend/iqnbackendpos/facetoface/{id}',[App\Http\Controllers\IqnDiplomaBackendController::class, 'facetoface'])->name('iqnone');
Route::get('backend/iqnbackendpos/elearning/{id}',[App\Http\Controllers\IqnDiplomaBackendController::class, 'elearning'])->name('iqntwo');
Route::get('backend/iqnbackendpos/zoomclass/{id}',[App\Http\Controllers\IqnDiplomaBackendController::class, 'zoom'])->name('iqnthree');
//-------------------------------------------------------------------
Route::get('backend/certificatebackend/facetoface/{id}',[App\Http\Controllers\CertificateController::class, 'facetoface'])->name('certificateone');
Route::get('backend/certificatebackend/elearning/{id}',[App\Http\Controllers\CertificateController::class, 'elearning'])->name('certificatetwo');
Route::get('backend/certificatebackend/zoomclass/{id}',[App\Http\Controllers\CertificateController::class, 'zoom'])->name('certificatethree');
//-------------------------------------------------------------------

Route::resource('backend/mailing','MailController');
Route::resource('backend/allstudentDOB','DobBackendController');
Route::resource('backend/allmail','allmailController');
Route::resource('backend/account','accountController');
Route::resource('backend/studentpayment','studentPayController');
Route::resource('backend/studentBackendpayment','studentBackendpayment');
Route::resource('backend/celebration','CelebrateController');

// Route::post('student_reg/student_create_account/',[App\Http\Controllers\UserController::class, 'AccountFrontend'])->name('accountregister');
});
Route::post('student_reg/student_create_account/',[App\Http\Controllers\UserController::class, 'AccountFrontend'])->name('accountregister');

Route::get('/google-login', 'GoogleAuthController@redirectToProvider');
Route::get('/callback', 'GoogleAuthController@handleProviderCallback');
Route::get('/search_course','FrontendController@searchDetails')->name('search_course');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('mylogout');
//Mail System


