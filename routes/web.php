<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderTypeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\HandymanController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProviderAddressMappingController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\ProviderDocumentController;
use App\Http\Controllers\RatingReviewController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\ProviderPayoutController;
use App\Http\Controllers\HandymanPayoutController;
use App\Http\Controllers\HandymanTypeController;
use App\Http\Controllers\ServiceFaqController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\PostJobRequestController;
use App\Http\Controllers\ServicePackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingRatingController;
use App\Http\Controllers\HandymanRatingController;
use App\Http\Controllers\KashierPaymentController;

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
require __DIR__.'/auth.php';
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::group(['prefix' => 'auth'], function() {
    Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');
    Route::get('lock-screen', [HomeController::class, 'authlockScreen'])->name('auth.lock-screen');
});

Route::get('lang/{locale}', [HomeController::class,'lang'])->name('switch-language');

Route::group(['middleware' => ['auth', 'verified']], function()
{
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::group(['namespace' => '' ], function () {
        Route::resource('permission',PermissionController::class);
        Route::get('permission/add/{type}',[PermissionController::class,'addPermission'])->name('permission.add');
        Route::post('permission/save',[PermissionController::class,'savePermission'])->name('permission.save');

    });
    Route::resource('role', RoleController::class);

    Route::get('changeStatus', [ HomeController::class, 'changeStatus'])->name('changeStatus');
    Route::resource('category', CategoryController::class);
    Route::post('category-action',[CategoryController::class, 'action'])->name('category.action');
    Route::post('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::resource('service', ServiceController::class);
    Route::get('user-service-list',[ServiceController::class,'getUserServiceList'])->name('service.user-service-list');
    Route::post('service-action',[ServiceController::class, 'action'])->name('service.action');
    Route::post('service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::resource('provider', ProviderController::class);
    Route::resource('provideraddress', ProviderAddressMappingController::class);
    Route::post('provideraddress/{id}', [ProviderAddressMappingController::class, 'destroy'])->name('provideraddress.destroy');
    Route::get('provider/list/{status?}', [ProviderController::class,'index'])->name('provider.pending');
    Route::get('provider/approve/{id}',[ProviderController::class, 'approve'])->name('provider.approve');
    Route::post('provider-action',[ProviderController::class, 'action'])->name('provider.action');
    Route::resource('providertype', ProviderTypeController::class);
    Route::post('providertype-action',[ProviderTypeController::class, 'action'])->name('providertype.action');
    Route::post('providertype/{id}', [ProviderTypeController::class, 'destroy'])->name('providertype.destroy');
    Route::post('provider/{id}', [ProviderController::class, 'destroy'])->name('provider.destroy');
    Route::resource('handyman', HandymanController::class);
    Route::get('handyman/list/{status?}', [HandymanController::class,'index'])->name('handyman.pending');
    Route::get('handyman/approve/{id}',[ProviderController::class, 'approve'])->name('handyman.approve');
    Route::post('handyman-action',[HandymanController::class, 'action'])->name('handyman.action');
    Route::post('handyman/{id}', [HandymanController::class, 'destroy'])->name('handyman.destroy');
    Route::resource('coupon', CouponController::class);
    Route::post('coupons-action',[CouponController::class, 'action'])->name('coupon.action');
    Route::post('coupon/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');
    Route::resource('booking', BookingController::class);
    Route::post('booking-status-update',[ BookingController::class,'updateStatus'])->name('bookingStatus.update');
    Route::post('booking-save', [ App\Http\Controllers\BookingController::class, 'store' ] )->name('booking.save');
    Route::post('booking-action',[BookingController::class, 'action'])->name('booking.action');
    Route::post('booking/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
    Route::resource('slider', SliderController::class);
    Route::post('slider-action',[SliderController::class, 'action'])->name('slider.action');
    Route::post('slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::resource('payment', PaymentController::class);
    Route::get('cash-payment-list', [PaymentController::class,'cashDatatable'])->name('cash.list');

    Route::get('cash/history/{id?}', [PaymentController::class,'cashIndex'])->name('cash.index');
    Route::get('cash/approve/{id}',[PaymentController::class, 'cashApprove'])->name('cash.approve');
    
    Route::post('save-payment',[App\Http\Controllers\API\PaymentController::class, 'savePayment'])->name('payment.save');
    Route::resource('user', CustomerController::class);
    Route::get('user/list/{status?}', [CustomerController::class,'index'])->name('user.all');
    Route::post('user-action',[CustomerController::class, 'action'])->name('user.action');
    Route::post('user/{id}', [CustomerController::class, 'destroy'])->name('user.destroy');

    Route::get('booking-assign-form/{id}',[BookingController::class,'bookingAssignForm'])->name('booking.assign_form');
    Route::get('details/{id}',[BookingController::class,'bookingDetails'])->name('booking.details');
    Route::post('booking-assigned',[BookingController::class,'bookingAssigned'])->name('booking.assigned');
    Route::get('comission/{id}',[SettingController::class,'comission'])->name('setting.comission');


    // Setting
    Route::get('setting/{page?}',[ SettingController::class, 'settings'])->name('setting.index');
    Route::post('/layout-page',[ SettingController::class, 'layoutPage'])->name('layout_page');
    Route::post('/layout-page',[ SettingController::class, 'layoutPage'])->name('layout_page');
    Route::post('settings/save',[ SettingController::class , 'settingsUpdates'])->name('settingsUpdates');
    Route::post('dashboard-setting',[ SettingController::class , 'dashboardtogglesetting'])->name('togglesetting');
    Route::post('provider-dashboard-setting',[ SettingController::class , 'providerdashboardtogglesetting'])->name('providertogglesetting');
    Route::post('handyman-dashboard-setting',[ SettingController::class , 'handymandashboardtogglesetting'])->name('handymantogglesetting');
    Route::post('config-save',[ SettingController::class , 'configUpdate'])->name('configUpdate');

    
    Route::post('env-setting', [ SettingController::class , 'envChanges'])->name('envSetting');
    Route::post('update-profile', [ SettingController::class , 'updateProfile'])->name('updateProfile');
    Route::post('change-password', [ SettingController::class , 'changePassword'])->name('changePassword');

    Route::get('notification-list',[ NotificationController::class ,'notificationList'])->name('notification.list');
    Route::get('notification-counts',[ NotificationController::class ,'notificationCounts'])->name('notification.counts');
    Route::get('notification',[ NotificationController::class ,'index'])->name('notification.index');

    Route::post('remove-file', [ App\Http\Controllers\HomeController::class, 'removeFile' ] )->name('remove.file');
    Route::post('get-lang-file', [ App\Http\Controllers\LanguageController::class, 'getFile' ] )->name('getLangFile');
    Route::post('save-lang-file', [ App\Http\Controllers\LanguageController::class, 'saveFileContent' ] )->name('saveLangContent');

    Route::get('pages/term-condition',[ SettingController::class, 'termAndCondition'])->name('term-condition');
    Route::post('term-condition-save',[ SettingController::class, 'saveTermAndCondition'])->name('term-condition-save');

    Route::get('pages/privacy-policy',[ SettingController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::post('privacy-policy-save',[ SettingController::class, 'savePrivacyPolicy'])->name('privacy-policy-save');

    Route::get('pages/help-support',[ SettingController::class, 'helpAndSupport'])->name('help-support');
    Route::post('help-support-save',[ SettingController::class, 'saveHelpAndSupport'])->name('help-support-save');

    Route::get('pages/refund-cancellation-policy',[ SettingController::class, 'refundCancellationPolicy'])->name('refund-cancellation-policy');
    Route::post('refund-cancellation-policy-save',[ SettingController::class, 'saveRefundCancellationPolicy'])->name('refund-cancellation-policy-save');

    Route::resource('document', DocumentsController::class);
    Route::post('document-action',[DocumentsController::class, 'action'])->name('document.action');
    Route::post('document/{id}', [DocumentsController::class, 'destroy'])->name('document.destroy');

    Route::resource('providerdocument', ProviderDocumentController::class);
    Route::post('providerdocument-action',[ProviderDocumentController::class, 'action'])->name('providerdocument.action');
    Route::post('providerdocument/{id}', [ProviderDocumentController::class, 'destroy'])->name('providerdocument.destroy');

    Route::resource('ratingreview', RatingReviewController::class);
    Route::post('ratingreview-action',[RatingReviewController::class, 'action'])->name('ratingreview.action');

    Route::resource('booking-rating', BookingRatingController::class);
    Route::post('booking-rating/{id}', [BookingController::class, 'destroy'])->name('booking-rating.destroy');
    Route::resource('handyman-rating', HandymanRatingController::class);
    Route::post('handyman-rating/{id}', [HandymanController::class, 'destroy'])->name('handyman-rating.destroy');

    Route::post('/payment-layout-page',[ PaymentGatewayController::class, 'paymentPage'])->name('payment_layout_page');
    Route::post('payment-settings/save',[ PaymentGatewayController::class , 'paymentsettingsUpdates'])->name('paymentsettingsUpdates');
    Route::post('get_payment_config',[ PaymentGatewayController::class , 'getPaymentConfig'])->name('getPaymentConfig');

    Route::resource('tax', TaxController::class);
    Route::post('tax/{id}', [TaxController::class, 'destroy'])->name('tax.destroy');
    Route::get('earning',[EarningController::class,'index'])->name('earning');
    Route::get('earning-data',[EarningController::class,'setEarningData'])->name('earningData');

    Route::get('handyman-earning',[EarningController::class,'handymanEarning'])->name('handymanEarning');
    Route::get('handyman-earning-data',[EarningController::class,'handymanEarningData'])->name('handymanEarningData');

    Route::resource('providerpayout', ProviderPayoutController::class);
    Route::get('review/{id}',[ProviderController::class,'review'])->name('provider.review'); 
    Route::get('providerpayout/create/{id}', [ProviderPayoutController::class,'create'])->name('providerpayout.create');
    Route::post('sidebar-reorder-save',[ SettingController::class, 'sequenceSave'])->name('reorderSave');

    Route::resource('handymanpayout', HandymanPayoutController::class);
    Route::get('handymanpayout/create/{id}', [HandymanPayoutController::class,'create'])->name('handymanpayout.create');

    Route::resource('handymantype', HandymanTypeController::class);
    Route::post('handymantype-action',[HandymanTypeController::class, 'action'])->name('handymantype.action');
    Route::post('handymantype/{id}', [HandymanTypeController::class, 'destroy'])->name('handymantype.destroy');

    Route::resource('servicefaq', ServiceFaqController::class);
    Route::post('send-push-notification', [ SettingController::class , 'sendPushNotification'])->name('sendPushNotification');
    Route::post('save-earning-setting', [ SettingController::class , 'saveEarningTypeSetting'])->name('saveEarningTypeSetting');
    Route::post('advance-earning-setting' , [ SettingController::class , 'advanceEarningSetting'])->name('advanceEarningSetting');

    Route::post('enable-user-wallet', [SettingController::class, 'enableUserWallet'])->name('enableUserWallet');

    Route::resource('wallet', WalletController::class);
    Route::post('wallet/{id}', [WalletController::class, 'destroy'])->name('wallet.destroy');
    Route::resource('subcategory', SubCategoryController::class);
    Route::post('subcategory-action',[SubCategoryController::class, 'action'])->name('subcategory.action');
    Route::post('subcategory/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');

    Route::resource('plans', PlanController::class);
    Route::post('plans/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');
    Route::resource('bank',BankController::class);
    Route::post('bank-action',[BankController::class, 'action'])->name('bank.action');


    Route::get('frontend/app-download',[ FrontendController::class, 'appDownloadPage'])->name('app-download');
    Route::post('app-download-save',[ FrontendController::class, 'saveAppDownloadPage'])->name('app-download-save');
    Route::get('/provider-detail-page',[ ProviderController::class, 'providerDetail'])->name('provider_detail_pages');
    Route::post('/provider-detail-page',[ ProviderController::class, 'providerDetail'])->name('provider_detail_pages');
    Route::post('/booking-layout-page/{id}',[ BookingController::class, 'bookingstatus'])->name('booking_layout_page');
    Route::get('/invoice_pdf/{id}', [BookingController::class, 'createPDF'])->name('invoice_pdf');
    

    Route::resource('post-job-request', PostJobRequestController::class);
    Route::get('post-job-service/list/{postjobid?}', [ServiceController::class, 'index'])->name('postjobrequest.service');
    Route::resource('servicepackage', ServicePackageController::class);
    Route::get('servicepackage/list/{packageid?}', [ServiceController::class,'index'])->name('servicepackage.service');
    Route::post('servicepackage-action',[ServicePackageController::class, 'action'])->name('servicepackage.action');

    Route::resource('blog', BlogController::class);
    Route::post('blog-action',[BlogController::class, 'action'])->name('blog.action');
    Route::post('blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // added by Hadi for kashier checkout payment:begins
    Route::get('/kashier/pay', [KashierPaymentController::class, 'pay'])->name('kashier.pay');
    Route::get('/kashier/callback', [KashierPaymentController::class, 'callback'])->name('kashier.callback');
    // added by Hadi for kashier checkout payment:ends


});
Route::get('/ajax-list',[HomeController::class, 'getAjaxList'])->name('ajax-list');
Route::post('/service-list',[HomeController::class, 'getAjaxServiceList'])->name('service-list');







