<?php


use Illuminate\Support\Facades\Auth;
// use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Storage;
// use Symfony\Component\Console\Input\Input;
// use TCG\Voyager\Facades\Voyager;



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
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
    return view('admin.dashboard');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers', 'CustomerController@index')->name('customers');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
Route::put('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');

Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::get('/supplier/create', 'SupplierController@create')->name('supplier.create');
Route::post('/supplier/store', 'SupplierController@store')->name('supplier.store');
Route::get('/supplier/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
Route::put('/supplier/update/{id}', 'SupplierController@update')->name('supplier.update');
Route::get('/supplier/destroy/{id}', 'SupplierController@destroy')->name('supplier.destroy');

Route::get('/equipments', 'EquipmentController@index')->name('equipments');
Route::get('/equipment/create', 'EquipmentController@create')->name('equipment.create');
Route::post('/equipment/store', 'EquipmentController@store')->name('equipment.store');
Route::get('/equipment/edit/{id}', 'EquipmentController@edit')->name('equipment.edit');
Route::put('/equipment/update/{id}', 'EquipmentController@update')->name('equipment.update');
Route::get('/equipment/destroy/{id}', 'EquipmentController@destroy')->name('equipment.destroy');

Route::get('/services', 'ServiceController@index')->name('services');
Route::get('/service/create', 'ServiceController@create')->name('service.create');
Route::post('/service/store', 'ServiceController@store')->name('service.store');
Route::get('/service/edit/{id}', 'ServiceController@edit')->name('service.edit');
Route::put('/service/update/{id}', 'ServiceController@update')->name('service.update');
Route::get('/service/destroy/{id}', 'ServiceController@destroy')->name('service.destroy');

Route::get('/offers', 'OfferController@index')->name('offers');
Route::get('/offer/create', 'OfferController@create')->name('offer.create');
Route::post('/offer/store', 'OfferController@store')->name('offer.store');
Route::get('/offer/edit/{id}', 'OfferController@edit')->name('offer.edit');
Route::put('/offer/update/{id}', 'OfferController@update')->name('offer.update');
Route::get('/offer/destroy/{id}', 'OfferController@destroy')->name('offer.destroy');
Route::get('/sendhtmlemail/html_email/{id}','OfferController@html_email')->name('offer.html_email');
Route::get('/offerprint/print/{id}','OfferController@print')->name('offer.print');
Route::get('/offerget/{id}', 'OfferController@offerget')->name('offerget');

Route::get('/contracts', 'ContractController@index')->name('contracts');
Route::get('/contract/create', 'ContractController@create')->name('contract.create');
Route::post('/contract/store', 'ContractController@store')->name('contract.store');
Route::get('/contract/edit/{id}', 'ContractController@edit')->name('contract.edit');
Route::put('/contract/update/{id}', 'ContractController@update')->name('contract.update');
Route::get('/contract/destroy/{id}', 'ContractController@destroy')->name('contract.destroy');

Route::get('/marketers', 'MarketerController@index')->name('marketers');
Route::get('/marketer/create', 'MarketerController@create')->name('marketer.create');
Route::post('/marketer/store', 'MarketerController@store')->name('marketer.store');
Route::get('/marketer/edit/{id}', 'MarketerController@edit')->name('marketer.edit');
Route::put('/marketer/update/{id}', 'MarketerController@update')->name('marketer.update');
Route::get('/marketer/destroy/{id}', 'MarketerController@destroy')->name('marketer.destroy');

Route::get('/salesmanagers', 'SalesmanagerController@index')->name('salesmanagers');
Route::get('/salesmanager/create', 'SalesmanagerController@create')->name('salesmanager.create');
Route::post('/salesmanager/store', 'SalesmanagerController@store')->name('salesmanager.store');
Route::get('/salesmanager/edit/{id}', 'SalesmanagerController@edit')->name('salesmanager.edit');
Route::put('/salesmanager/update/{id}', 'SalesmanagerController@update')->name('salesmanager.update');
Route::get('/salesmanager/destroy/{id}', 'SalesmanagerController@destroy')->name('salesmanager.destroy');

Route::get('/customerinvoices', 'CustomerinvoiceController@index')->name('customerinvoices');
Route::get('/customerinvoicesget/{id}', 'CustomerinvoiceController@customerinvoicesget')->name('customerinvoicesget');
Route::get('/customerinvoice/create', 'CustomerinvoiceController@create')->name('customerinvoice.create');
Route::post('/customerinvoice/store', 'CustomerinvoiceController@store')->name('customerinvoice.store');
Route::get('/customerinvoice/edit/{id}', 'CustomerinvoiceController@edit')->name('customerinvoice.edit');
Route::put('/customerinvoice/update/{id}', 'CustomerinvoiceController@update')->name('customerinvoice.update');
Route::get('/customerinvoice/destroy/{id}', 'CustomerinvoiceController@destroy')->name('customerinvoice.destroy');

Route::get('/supplierinvoices', 'SupplierinvoicesController@index')->name('supplierinvoices');
Route::get('/supplierinvoice/create', 'SupplierinvoicesController@create')->name('supplierinvoice.create');
Route::post('/supplierinvoice/store', 'SupplierinvoicesController@store')->name('supplierinvoice.store');
Route::get('/supplierinvoice/edit/{id}', 'SupplierinvoicesController@edit')->name('supplierinvoice.edit');
Route::put('/supplierinvoice/update/{id}', 'SupplierinvoicesController@update')->name('supplierinvoice.update');
Route::get('/supplierinvoice/destroy/{id}', 'SupplierinvoicesController@destroy')->name('supplierinvoice.destroy');

Route::get('/prices', 'PriceController@index')->name('prices');
Route::get('/price/create', 'PriceController@create')->name('price.create');
Route::post('/price/store', 'PriceController@store')->name('price.store');
Route::get('/price/edit/{id}', 'PriceController@edit')->name('price.edit');
Route::put('/price/update/{id}', 'PriceController@update')->name('price.update');
Route::get('/price/destroy/{id}', 'PriceController@destroy')->name('price.destroy');

Route::get('/serviceprices', 'ServicepriceController@index')->name('serviceprices');
Route::get('/serviceprice/create', 'ServicepriceController@create')->name('serviceprice.create');
Route::post('/serviceprice/store', 'ServicepriceController@store')->name('serviceprice.store');
Route::get('/serviceprice/edit/{id}', 'ServicepriceController@edit')->name('serviceprice.edit');
Route::put('/serviceprice/update/{id}', 'ServicepriceController@update')->name('serviceprice.update');
Route::get('/serviceprice/destroy/{id}', 'ServicepriceController@destroy')->name('serviceprice.destroy');

Route::get('/infos', 'InfoController@index')->name('infos');
Route::get('/info/create', 'InfoController@create')->name('info.create');
Route::post('/info/store', 'InfoController@store')->name('info.store');
Route::get('/info/edit/{id}', 'InfoController@edit')->name('info.edit');
Route::put('/info/update/{id}', 'InfoController@update')->name('info.update');
Route::get('/info/destroy/{id}', 'InfoController@destroy')->name('info.destroy');

Route::get('/subservices', 'SubserviceController@index')->name('subservices');
Route::get('/subservicesget/{id}', 'SubserviceController@subservicesget')->name('subservicesget');
Route::get('/subservice/create', 'SubserviceController@create')->name('subservice.create');
Route::post('/subservice/store', 'SubserviceController@store')->name('subservice.store');
Route::get('/subservice/edit/{id}', 'SubserviceController@edit')->name('subservice.edit');
Route::put('/subservice/update/{id}', 'SubserviceController@update')->name('subservice.update');
Route::get('/subservice/destroy/{id}', 'SubserviceController@destroy')->name('subservice.destroy');

Route::get('/receipts', 'RecetteController@index')->name('receipts');
Route::get('/receipt/create', 'RecetteController@create')->name('receipt.create');
Route::post('/receipt/store', 'RecetteController@store')->name('receipt.store');
Route::get('/receipt/edit/{id}', 'RecetteController@edit')->name('receipt.edit');
Route::put('/receipt/update/{id}', 'RecetteController@update')->name('receipt.update');
Route::get('/receipt/destroy/{id}', 'RecetteController@destroy')->name('receipt.destroy');

Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/course/create', 'CourseController@create')->name('course.create');
Route::post('/course/store', 'CourseController@store')->name('course.store');
Route::get('/course/show/{slug}', 'CourseController@show')->name('course.show');
Route::get('/course/edit/{id}', 'CourseController@edit')->name('course.edit');
Route::put('/course/update/{id}', 'CourseController@update')->name('course.update');
Route::get('/course/destroy/{id}', 'CourseController@destroy')->name('course.destroy');

Route::get('/teachers', 'TeacherController@index')->name('teachers');
Route::get('/teacher/create', 'TeacherController@create')->name('teacher.create');
Route::post('/teacher/store', 'TeacherController@store')->name('teacher.store');
Route::get('/teacher/edit/{id}', 'TeacherController@edit')->name('teacher.edit');
Route::put('/teacher/update/{id}', 'TeacherController@update')->name('teacher.update');
Route::get('/teacher/destroy/{id}', 'TeacherController@destroy')->name('teacher.destroy');

Route::get('/students', 'StudentController@index')->name('students');
Route::get('/student/create', 'StudentController@create')->name('student.create');
Route::post('/student/store', 'StudentController@store')->name('student.store');
Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::put('/student/update/{id}', 'StudentController@update')->name('student.update');
Route::get('/student/destroy/{id}', 'StudentController@destroy')->name('student.destroy');

Route::get('/accounts', 'AccountController@index')->name('accounts');
Route::get('/account/create', 'AccountController@create')->name('account.create');
Route::post('/account/store', 'AccountController@store')->name('account.store');
Route::get('/account/edit/{id}', 'AccountController@edit')->name('account.edit');
Route::put('/account/update/{id}', 'AccountController@update')->name('account.update');
Route::get('/account/destroy/{id}', 'AccountController@destroy')->name('account.destroy');

Route::get('/people', 'PersonController@index')->name('people');
Route::get('/person/create', 'PersonController@create')->name('person.create');
Route::post('/person/store', 'PersonController@store')->name('person.store');
Route::get('/person/edit/{id}', 'PersonController@edit')->name('person.edit');
Route::put('/person/update/{id}', 'PersonController@update')->name('person.update');
Route::get('/person/destroy/{id}', 'PersonController@destroy')->name('person.destroy');
