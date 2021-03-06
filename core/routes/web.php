<?php

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

//Payment IPN

Route::get('/ipnbtc', 'PaymentController@ipnBchain')->name('ipn.bchain');
Route::get('/ipnblockbtc', 'PaymentController@blockIpnBtc')->name('ipn.block.btc');
Route::get('/ipnblocklite', 'PaymentController@blockIpnLite')->name('ipn.block.lite');
Route::get('/ipnblockdog', 'PaymentController@blockIpnDog')->name('ipn.block.dog');
Route::post('/ipnpaypal', 'PaymentController@ipnpaypal')->name('ipn.paypal');
Route::post('/ipnperfect', 'PaymentController@ipnperfect')->name('ipn.perfect');
Route::post('/ipnstripe', 'PaymentController@ipnstripe')->name('ipn.stripe');
Route::post('/ipnskrill', 'PaymentController@skrillIPN')->name('ipn.skrill');
Route::post('/ipncoinpaybtc', 'PaymentController@ipnCoinPayBtc')->name('ipn.coinPay.btc');
Route::post('/ipncoinpayeth', 'PaymentController@ipnCoinPayEth')->name('ipn.coinPay.eth');
Route::post('/ipncoinpaybch', 'PaymentController@ipnCoinPayBch')->name('ipn.coinPay.bch');
Route::post('/ipncoinpaydash', 'PaymentController@ipnCoinPayDash')->name('ipn.coinPay.dash');
Route::post('/ipncoinpaydoge', 'PaymentController@ipnCoinPayDoge')->name('ipn.coinPay.doge');
Route::post('/ipncoinpayltc', 'PaymentController@ipnCoinPayLtc')->name('ipn.coinPay.ltc');
Route::post('/ipncoin', 'PaymentController@ipnCoin')->name('ipn.coinpay');
Route::post('/ipncoingate', 'PaymentController@ipnCoinGate')->name('ipn.coingate');


Route::post('/ipnpaytm', 'PaymentController@ipnPayTm')->name('ipn.paytm');
Route::post('/ipnpayeer', 'PaymentController@ipnPayEer')->name('ipn.payeer');
Route::post('/ipnpaystack', 'PaymentController@ipnPayStack')->name('ipn.paystack');
Route::post('/ipnvoguepay', 'PaymentController@ipnVoguePay')->name('ipn.voguepay');
//Payment IPN


Route::get('/', 'FrontendController@index')->name('main');
Route::get('/blogs', 'FrontendController@blog')->name('blog');
Route::get('/details/{id}/{slud}', 'FrontendController@details')->name('blog.details');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/faqs', 'FrontendController@faqs')->name('faqs');
Route::get('/menu/{id}/{slug}', 'FrontendController@menu')->name('menu');
Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribe');
Route::get('/contact-us', 'FrontendController@contactUs')->name('contact-us');
Route::post('/contact-us', 'FrontendController@contactSubmit')->name('contact-us');

Auth::routes();


Route::group(['prefix' => 'user'], function () {

    Route::get('authorization', 'HomeController@authCheck')->name('user.authorization');
    Route::post('verification', 'HomeController@sendVcode')->name('user.send-vcode');
    Route::post('smsVerify', 'HomeController@smsVerify')->name('user.sms-verify');
    Route::post('verify-email', 'HomeController@sendEmailVcode')->name('user.send-emailVcode');
    Route::post('postEmailVerify', 'HomeController@postEmailVerify')->name('user.email-verify');

Route::group(['middleware' => ['auth','CheckStatus']], function() {

        Route::get('/home', 'HomeController@index')->name('home');

        //user Deposit
        Route::get('/deposit', 'HomeController@deposit')->name('deposit');
        Route::post('/deposit', 'HomeController@deposit')->name('deposit');
        Route::post('/deposit-data-insert', 'HomeController@depositDataInsert')->name('deposit.data-insert');
        Route::get('/deposit-preview', 'HomeController@depositPreview')->name('user.deposit.preview');
        Route::post('/deposit-confirm', 'PaymentController@depositConfirm')->name('deposit.confirm');

        Route::get('/transaction-log', 'HomeController@activity')->name('user.trx');
        Route::get('/deposit-log', 'HomeController@depositLog')->name('user.depositLog');


        Route::get('change-password', 'HomeController@changePassword')->name('user.change-password');
        Route::post('change-password', 'HomeController@submitPassword')->name('user.change-password');
        Route::get('edit-profile', 'HomeController@editProfile')->name('edit-profile');
        Route::post('edit-profile', 'HomeController@submitProfile')->name('edit-profile');


        /*Merchant */
        Route::get('/send-money', 'HomeController@sendMoney')->name('send.money');
        Route::post('/send-money', 'HomeController@sendMoneyCheck')->name('send.money.check');
        Route::get('/send-money/{trx}', 'HomeController@sendMoneyPreview')->name('send.money.preview');
        Route::post('/send-confirmed', 'HomeController@sendingConfirm')->name('send.confirm');
        Route::get('/send-invoice/{trx}', 'HomeController@sendInvoice')->name('send.invoice');
        Route::get('/transfer-history', 'HomeController@sendingLog')->name('sendingLog');

        Route::get('/payout-money', 'HomeController@withdraw')->name('merchant.withdraw');
        Route::post('/payout-money', 'HomeController@trxCheck')->name('withdraw.trxCheck');
        Route::post('/payout-confirm', 'HomeController@withdrawConfirm')->name('withdrawConfirm');
        Route::post('/payout-confirm', 'HomeController@withdrawConfirm')->name('withdrawConfirm');
        Route::get('/payout-log', 'HomeController@withdrawLog')->name('withdrawLog');


        /*Normal User*/
        Route::post('/send-money-user', 'HomeController@sendMoneyCheckUser')->name('send.money.user');


        Route::get('supportTicket', 'HomeController@supportTicket')->name('user.ticket');
        Route::get('openSupportTicket', 'HomeController@openSupportTicket')->name('user.ticket.open');
        Route::post('openSupportTicket', 'HomeController@storeSupportTicket')->name('user.ticket.store');
        Route::get('supportMessage/{ticket}', 'HomeController@supportMessage')->name('user.message');
        Route::put('storeSupportMessage/{ticket}', 'HomeController@supportMessageStore')->name('user.message.store');

    });

});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminLoginController@index')->name('admin.loginForm');
    Route::post('/', 'AdminLoginController@authenticate')->name('admin.login');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {


        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');


        // General Settings
        Route::get('/general-settings', 'GeneralSettingController@GenSetting')->name('admin.GenSetting');
        Route::post('/general-settings', 'GeneralSettingController@UpdateGenSetting')->name('admin.UpdateGenSetting');

        //Contact Setting
        Route::get('contact-setting', 'GeneralSettingController@getContact')->name('contact-setting');
        Route::put('contact-setting/{id}', 'GeneralSettingController@putContactSetting')->name('contact-setting-update');


        // Admin Settings
        Route::get('/change-password', 'AdminController@changePassword')->name('admin.changePass');
        Route::post('/change-password', 'AdminController@updatePassword')->name('admin.changePass');
        Route::get('/profile', 'AdminController@profile')->name('admin.profile');
        Route::post('/profile', 'AdminController@updateProfile')->name('admin.profile');


        // Country  Settings
        Route::resource('continent', 'ContinentController');
        Route::resource('country', 'CountryController');
        Route::resource('merchant', 'MerchantController');


        //Gateway
        Route::get('/gateway', 'GatewayController@show')->name('gateway');
        Route::post('/gateway', 'GatewayController@update')->name('update.gateway');

        //Deposit
        Route::get('/deposits', 'DepositController@index')->name('deposits');
        Route::get('/deposits/requests', 'DepositController@requests')->name('deposits.requests');
        Route::put('/deposit/approve/{id}', 'DepositController@approve')->name('deposit.approve');
        Route::get('/deposit/{deposit}/delete', 'DepositController@destroy')->name('deposit.destroy');

        //    Blog Controller
        Route::get('blog', 'PostController@index')->name('admin.blog');
        Route::get('blog/create', 'PostController@create')->name('blog.create');
        Route::post('blog/create', 'PostController@store')->name('blog.store');
        Route::delete('blog/delete', 'PostController@destroy')->name('blog.delete');
        Route::get('blog/edit/{id}', 'PostController@edit')->name('blog.edit');
        Route::post('blog-update', 'PostController@updatePost')->name('blog.update');

        /*Manage Faq*/
        Route::get('faqs-create', 'FaqController@createFaqs')->name('faqs-create');
        Route::post('faqs-create', 'FaqController@storeFaqs')->name('faqs-create');
        Route::get('faqs', 'FaqController@allFaqs')->name('faqs-all');
        Route::get('faqs-edit/{id}', 'FaqController@editFaqs')->name('faqs-edit');
        Route::put('faqs-edit/{id}', 'FaqController@updateFaqs')->name('faqs-update');
        Route::delete('faqs-delete', 'FaqController@deleteFaqs')->name('faqs-delete');

        //    SubscriberController
        Route::get('/subscribers', 'SubscriberController@manageSubscribers')->name('manage.subscribers');
        Route::post('/update-subscribers', 'SubscriberController@updateSubscriber')->name('update.subscriber');
        Route::get('/send-email', 'SubscriberController@sendMail')->name('send.mail.subscriber');
        Route::post('/send-email', 'SubscriberController@sendMailsubscriber')->name('send.email.subscriber');

        //    Testimonial Controller
        Route::get('testimonial', 'TestimonialController@index')->name('admin.testimonial');
        Route::get('testimonial/create', 'TestimonialController@create')->name('testimonial.create');
        Route::post('testimonial/create', 'TestimonialController@store')->name('testimonial.store');
        Route::delete('testimonial/delete', 'TestimonialController@destroy')->name('testimonial.delete');
        Route::get('testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
        Route::post('testimonial-update', 'TestimonialController@updatePost')->name('testimonial.update');

        //User Management
        Route::get('users', 'UserManageController@users')->name('users');
        Route::get('user-search', 'UserManageController@userSearch')->name('search.users');
        Route::get('user/{user}', 'UserManageController@singleUser')->name('user.single');
        Route::put('user/pass-change/{user}', 'UserManageController@userPasschange')->name('user.passchange');
        Route::put('user/status/{user}', 'UserManageController@statupdate')->name('user.status');
        Route::get('mail/{user}', 'UserManageController@userEmail')->name('user.email');
        Route::post('/sendmail', 'UserManageController@sendemail')->name('send.email');
        Route::get('/user-login-history/{id}', 'UserManageController@loginLogsByUsers')->name('user.login.history');
        Route::get('/user-balance/{id}', 'UserManageController@ManageBalanceByUsers')->name('user.balance');
        Route::post('/user-balance', 'UserManageController@saveBalanceByUsers')->name('user.balance.update');
        Route::get('/user-banned', 'UserManageController@banusers')->name('user.ban');
        Route::get('login-logs/{user?}', 'UserManageController@loginLogs')->name('user.login-logs');
        Route::get('/user-transaction/{id}', 'UserManageController@userTrans')->name('user.trans');
        Route::get('/user-deposit/{id}', 'UserManageController@userDeposit')->name('user.deposit');
        Route::get('/user-withdraw/{id}', 'UserManageController@userWithdraw')->name('user.withdraw');

        //Email Template
        Route::get('/template', 'EtemplateController@index')->name('email.template');
        Route::post('/template-update', 'EtemplateController@update')->name('template.update');
        //Sms Api
        Route::get('/sms-api', 'EtemplateController@smsApi')->name('sms.api');
        Route::post('/sms-update', 'EtemplateController@smsUpdate')->name('sms.update');


        /*Menu Control*/
        Route::get('menu-create', 'WebSettingController@createMenu')->name('menu-create');
        Route::post('menu-create', 'WebSettingController@storeMenu')->name('menu-create');
        Route::get('menu-control', 'WebSettingController@manageMenu')->name('menu-control');
        Route::get('menu-edit/{id}', 'WebSettingController@editMenu')->name('menu-edit');
        Route::post('menu-update/{id}', 'WebSettingController@updateMenu')->name('menu-update');
        Route::delete('menu-delete', 'WebSettingController@deleteMenu')->name('menu-delete');


        //  Manage Social Controller
        Route::get('manage-social', 'WebSettingController@manageSocial')->name('manage-social');
        Route::post('manage-social', 'WebSettingController@storeSocial')->name('manage-social');
        Route::get('manage-social/{product_id?}', 'WebSettingController@editSocial')->name('social-edit');
        Route::put('manage-social/{product_id?}', 'WebSettingController@updateSocial')->name('social-edit');
        Route::post('delete-social', 'WebSettingController@destroySocial')->name('del.social');

        //  Admin Support Controller
        Route::get('supportTickets', 'AdminController@supportTicket')->name('admin.ticket');
        Route::get('ticketReply/{id}', 'AdminController@ticketReply')->name('admin.ticket.reply');
        Route::get('pendingSupportTickets', 'AdminController@pendingSupportTicket')->name('admin.pending.ticket');
        Route::put('ticketReplySend/{id}', 'AdminController@ticketReplySend')->name('admin.ticket.send');


        // Web Settings
        Route::get('manage-logo', 'WebSettingController@manageLogo')->name('manage-logo');
        Route::post('manage-logo', 'WebSettingController@updateLogo')->name('manage-logo');

        Route::get('manage-text', 'WebSettingController@manageFooter')->name('manage-footer');
        Route::put('manage-text', 'WebSettingController@updateFooter')->name('manage-footer-update');

        Route::get('/achievement', 'WebSettingController@achievement')->name('admin.achievement');
        Route::post('/achievement', 'WebSettingController@updateAchievement')->name('admin.achievement');

        Route::get('/subscribe', 'WebSettingController@subscribe')->name('admin.subscribe');
        Route::post('/subscribe', 'WebSettingController@updateSubscribe')->name('admin.subscribers');

        Route::get('/about', 'WebSettingController@getAbout')->name('admin.about');
        Route::post('/about', 'WebSettingController@updateAbout')->name('admin.about');
        Route::post('/testimonial-text', 'WebSettingController@testimonialText')->name('testimonial.text');



    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});


/*============== User Password Reset Route list ===========================*/
Route::get('user-password/reset', 'User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
Route::post('user-password/email', 'User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('user-password/reset/{token}', 'User\ResetPasswordController@showResetForm')->name('user.password.reset');
Route::post('user-password/reset', 'User\ResetPasswordController@reset');

