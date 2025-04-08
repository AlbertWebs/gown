<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DropzoneController;




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gown-for-hire', [App\Http\Controllers\HomeController::class, 'gown_hire'])->name('gown-for-hire');
Route::get('/legal-attire', [App\Http\Controllers\HomeController::class, 'legal_attire'])->name('legal-attire');
Route::get('/shop-attire/{slung}', [App\Http\Controllers\HomeController::class, 'shop_attire'])->name('shop-attire');
Route::get('/request-hire/{slung}', [App\Http\Controllers\HomeController::class, 'request_hire'])->name('request-hire');

Route::get('/shop-attire-collection/{category_id}/{subcategory_id}', [App\Http\Controllers\HomeController::class, 'shop_attire_collection'])->name('shop-attire-collection');

Route::get('/church-wear', [App\Http\Controllers\HomeController::class, 'church_wear'])->name('church-wear');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/m-pesa/buy-with-m-pesa/{slung}', [App\Http\Controllers\HomeController::class, 'buy_with_m_pesa'])->name('buy-with-m-pesa');



Route::get('/our-products/shop-graduation-attires', [App\Http\Controllers\HomeController::class, 'shop_graduation_attires'])->name('shop-graduation-attires');
Route::get('/our-products/shop-church-attires', [App\Http\Controllers\HomeController::class, 'shop_church_attires'])->name('shop-church-attires');
Route::get('/our-products/{slung}', [App\Http\Controllers\HomeController::class, 'our_products'])->name('our-products');

Route::get('/our-products/shop-legal-attires', [App\Http\Controllers\HomeController::class, 'shop_legal_attires'])->name('shop-legal-attires');
Route::get('/shop-legal-attire/{slung}', [App\Http\Controllers\HomeController::class, 'shop_legal_attire'])->name('shop-legal-attire');
Route::get('/our-products/shop-church-attire/{slung}', [App\Http\Controllers\HomeController::class, 'shop_church_attire'])->name('shop-church-attire');

Route::get('/bulk-inquiry', [App\Http\Controllers\HomeController::class, 'bulk_inquiry'])->name('bulk-inquiry');


Route::get('/gown-for-hire/{slung}', [App\Http\Controllers\HomeController::class, 'gown_hire_single'])->name('gown-for-hire-single');
Route::get('/shop-graduation-attire/{gown}', [App\Http\Controllers\HomeController::class, 'shop_graduation_attire'])->name('shop-graduation-attire');


Route::get('/buy-gown-wear', [App\Http\Controllers\HomeController::class, 'shop'])->name('church-wear-shop');
Route::get('/buy-gown-wear/checkout', [App\Http\Controllers\HomeController::class, 'shop_checkout'])->name('church-wear-shop-checkout');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slung}', [App\Http\Controllers\HomeController::class, 'blog_single'])->name('blog-single');

Route::post('/mobile-stk-received', [App\Http\Controllers\HomeController::class, 'mobile_stk_received'])->name('mobile-stk-received');
Route::get('/mobile-stk-initiate', [App\Http\Controllers\HomeController::class, 'mobile_stk_initiate'])->name('mobile-stk-initiate');
Route::post('/mobile-stk-initiate-post', [App\Http\Controllers\HomeController::class, 'mobile_stk_initiate_post'])->name('mobile-stk-initiate-post');
Route::get('/mobile-payment-received', [App\Http\Controllers\HomeController::class, 'mobile_payment_received'])->name('mobile-payment-received');
Route::get('/mobile-payment-failed', [App\Http\Controllers\HomeController::class, 'mobile_payment_failed'])->name('mobile-payment-failed');

Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/return-policy', [App\Http\Controllers\HomeController::class, 'return_policy'])->name('return-policy');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
Route::get('/change-image-url', [App\Http\Controllers\HomeController::class, 'changeImageurl'])->name('change-image-url');
Route::get('/open-gallery/{id}', [App\Http\Controllers\HomeController::class, 'open_gallery'])->name('open-gallery');
//request-gown.store
Route::post('/request-gown/store', [App\Http\Controllers\HomeController::class, 'request_gown_store'])->name('request-gown.store');




Auth::routes();

// group routes with prefix
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminsController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [AdminsController::class, 'adminHome'])->name('admin.homes');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    // SiteSettings
    Route::get('/credentials', [AdminsController::class, 'systemsCredentials']);
    Route::get('/SiteSettings', [AdminsController::class, 'SiteSettings']);
    Route::get('/SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings']);
    Route::get('/logo-and-favicon', [AdminsController::class, 'logo_and_favicon']);
    Route::post('/logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update']);

    // mailerSettings
    Route::get('/mailerSettings', [AdminsController::class, 'mailerSettings']);

    // Terms and Conditions
    Route::get('/terms', [AdminsController::class, 'terms']);
    Route::get('/addTerms', [AdminsController::class, 'addTerms']);
    Route::get('/editTerm/{id}', [AdminsController::class, 'editTerm']);
    Route::post('/add_term', [AdminsController::class, 'add_term']);
    Route::post('/edit_term/{id}', [AdminsController::class, 'edit_term']);
    Route::get('/delete_term/{id}', [AdminsController::class, 'delete_term']);

    // Privacy Policy
    Route::get('/privacy', [AdminsController::class, 'privacy']);
    Route::get('/addPrivacy', [AdminsController::class, 'addPrivacy']);
    Route::get('/editPrivacy/{id}', [AdminsController::class, 'editPrivacy']);
    Route::post('/add_privacy', [AdminsController::class, 'add_privacy']);
    Route::post('/edit_privacy/{id}', [AdminsController::class, 'edit_privacy']);
    Route::get('/delete_privacy/{id}', [AdminsController::class, 'delete_privacy']);

    // Frequently Asked Questions
    Route::get('/faq', [AdminsController::class, 'faq']);
    Route::get('/addFaq', [AdminsController::class, 'addFaq']);
    Route::get('/editFaq/{id}', [AdminsController::class, 'editFaq']);
    Route::post('/add_Faq', [AdminsController::class, 'add_Faq']);
    Route::post('/edit_Faq/{id}', [AdminsController::class, 'edit_Faq']);
    Route::get('/delete_Faq/{id}', [AdminsController::class, 'delete_Faq']);

    // Risks Declaration
    Route::get('/editRisk', [AdminsController::class, 'editRisk']);
    Route::post('/edit_Risk', [AdminsController::class, 'edit_Risk']);

    // How It Works
    Route::get('/how', [AdminsController::class, 'how']);
    Route::get('/addHow', [AdminsController::class, 'addHow']);
    Route::get('/editHow/{id}', [AdminsController::class, 'editHow']);
    Route::post('/add_How', [AdminsController::class, 'add_How']);
    Route::post('/edit_How/{id}', [AdminsController::class, 'edit_How']);
    Route::get('/delete_How/{id}', [AdminsController::class, 'delete_How']);

    // Courses
    Route::get('/courses', [AdminsController::class, 'courses']);
    Route::get('/addCourse', [AdminsController::class, 'addCourse']);
    Route::get('/editCourse/{id}', [AdminsController::class, 'editCourse']);
    Route::post('/add_Course', [AdminsController::class, 'add_Course']);
    Route::post('/edit_Course/{id}', [AdminsController::class, 'edit_Course']);
    Route::get('/delete_Course/{id}', [AdminsController::class, 'delete_Course']);

    // Topics
    Route::get('/topics', [AdminsController::class, 'topics']);
    Route::get('/addTopic', [AdminsController::class, 'addTopic']);
    Route::get('/editTopic/{id}', [AdminsController::class, 'editTopic']);
    Route::post('/add_Topic', [AdminsController::class, 'add_Topic']);
    Route::post('/edit_Topic/{id}', [AdminsController::class, 'edit_Topic']);
    Route::get('/delete_Topic/{id}', [AdminsController::class, 'delete_Topic']);

    // Copyright Statement
    Route::get('/editCopyright', [AdminsController::class, 'copyright']);
    Route::post('/edit_Copyright', [AdminsController::class, 'edit_copyright']);

    // About Us
    Route::get('/editAbout', [AdminsController::class, 'about']);
    Route::post('/edit_About', [AdminsController::class, 'edit_about']);

    // Sliders
    Route::get('/sliders', [AdminsController::class, 'slider']);
    Route::get('/addSlider', [AdminsController::class, 'addSlider']);
    Route::post('/add_Slider', [AdminsController::class, 'add_Slider']);
    Route::get('/editSlider/{id}', [AdminsController::class, 'editSlider']);
    Route::post('/edit_Slider/{id}', [AdminsController::class, 'edit_Slider']);
    Route::get('/deleteSlider/{id}', [AdminsController::class, 'deleteSlider']);

    // Banners
    Route::get('/banners', [AdminsController::class, 'banners']);
    Route::get('/editBanner/{id}', [AdminsController::class, 'editBanner']);
    Route::post('/edit_Banner/{id}', [AdminsController::class, 'edit_Banner']);

    // Messages
    Route::get('/allMessages', [AdminsController::class, 'allMessages']);
    Route::get('/unread', [AdminsController::class, 'unread']);
    Route::post('/reply', [AdminsController::class, 'reply']);
    Route::get('/read/{id}', [AdminsController::class, 'read']);
    Route::get('/deleteMessage/{id}', [AdminsController::class, 'deleteMessage']);

    // Categories
    Route::get('/categories', [AdminsController::class, 'categories']);
    Route::get('/addCategory', [AdminsController::class, 'addCategory']);
    Route::post('/add_Category', [AdminsController::class, 'add_Category']);
    Route::get('/editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::post('/edit_Category/{id}', [AdminsController::class, 'edit_Category']);
    Route::get('/deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

    // Sub Categories
    Route::get('/sub_categories', [AdminsController::class, 'sub_categories']);
    Route::get('/addSubCategory', [AdminsController::class, 'addSubCategory']);
    Route::post('/add_SubCategory', [AdminsController::class, 'add_SubCategory']);
    Route::get('/editSubCategory/{id}', [AdminsController::class, 'editSubCategory']);
    Route::post('/edit_SubCategory/{id}', [AdminsController::class, 'edit_SubCategory']);
    Route::get('/deleteSubCategory/{id}', [AdminsController::class, 'deleteSubCategory']);


    // Products
    Route::get('/products', [AdminsController::class, 'products']);
    Route::post('/add_image/{id}', [AdminsController::class, 'add_image']);

    Route::get('/addProduct', [AdminsController::class, 'addProduct']);
    Route::get('/addGallery/{id}', [AdminsController::class, 'addGallery']);
    Route::post('/add_Product', [AdminsController::class, 'add_Product']);
    Route::get('/editProducts/{id}', [AdminsController::class, 'editProducts']);
    Route::post('/edit_Product/{id}', [AdminsController::class, 'edit_Product']);
    Route::get('/deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);



    Route::post('/add_Variation', [AdminsController::class, 'add_Variation']);
    Route::post('/edit_Variation/{id}', [AdminsController::class, 'edit_Variation']);
    Route::get('/addVariation/color', [AdminsController::class, 'variations_color']);
    Route::get('/addVariation/size', [AdminsController::class, 'variations_size']);
    Route::get('/variations/color', [AdminsController::class, 'var_color']);
    Route::get('/variations/size', [AdminsController::class, 'var_size']);
    Route::get('/editVariation/{id}', [AdminsController::class, 'editVariation']);

    // Categories
    Route::get('/categories', [AdminsController::class, 'categories']);
    Route::get('/addCategory', [AdminsController::class, 'addCategory']);
    Route::post('/add_Category', [AdminsController::class, 'add_Category']);
    Route::get('/editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::post('/edit_Category/{id}', [AdminsController::class, 'edit_Category']);
    Route::get('/deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

    // Testimonials
    Route::get('/testimonials', [AdminsController::class, 'testimonials']);
    Route::get('/addTestimonial', [AdminsController::class, 'addTestimonial']);
    Route::post('/add_Testimonial', [AdminsController::class, 'add_Testimonial']);
    Route::get('/editTestimonial/{id}', [AdminsController::class, 'editTestimonial']);
    Route::post('/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial']);

    // Signal
    Route::get('/signals', [AdminsController::class, 'signals']);
    Route::get('/addSignal', [AdminsController::class, 'addSignal']);
    Route::post('/add_Signal', [AdminsController::class, 'add_Signal']);
    Route::get('/editSignal/{id}', [AdminsController::class, 'editSignal']);
    Route::post('/edit_Signal/{id}', [AdminsController::class, 'edit_Signal']);

    // Blog
    Route::get('/blog', [AdminsController::class, 'blog']);
    Route::get('/addBlog', [AdminsController::class, 'addBlog']);
    Route::post('/add_Blog', [AdminsController::class, 'add_Blog']);
    Route::get('/editBlog/{id}', [AdminsController::class, 'editBlog']);
    Route::post('/edit_Blog/{id}', [AdminsController::class, 'edit_Blog']);
    Route::get('/delete_Blog/{id}', [AdminsController::class, 'delete_Blog']);


    // Payments
    Route::get('/b2b', [AdminsController::class, 'b2b']);
    Route::get('/b2c', [AdminsController::class, 'b2c']);
    Route::get('/lnmo_api_response', [AdminsController::class, 'lnmo_api_response']);
    Route::get('/mobile_payments', [AdminsController::class, 'mobile_payments']);
    Route::get('/reverse_transaction', [AdminsController::class, 'reverse_transaction']);
    Route::get('/transaction_status', [AdminsController::class, 'transaction_status']);
    Route::get('/accountbalance', [AdminsController::class, 'accountbalance']);
    Route::get('/approve-transaction/{id}', [AdminsController::class, 'approve_transaction']);
    Route::get('/approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk']);

    // Enroll Users
    Route::get('/enroll-users', [AdminsController::class, 'enroll_users']);
    Route::get('/enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post']);
    Route::post('/enroll-user-now', [AdminsController::class, 'enroll_user_now']);

    //Manage Users
    Route::get('/users', [AdminsController::class, 'users']);
    Route::get('/admins', [AdminsController::class, 'admins']);
    Route::get('/addUser', [AdminsController::class, 'addUser']);
    Route::get('/editUser/{id}', [AdminsController::class, 'editUser']);
    Route::post('/add_User', [AdminsController::class, 'add_User']);
    Route::post('/edit_User/{id}', [AdminsController::class, 'edit_User']);
    Route::get('/delete_user/{id}', [AdminsController::class, 'delete_user']);
    Route::get('/switchRole/{id}', [AdminsController::class, 'switchRole']);
    Route::get('/switchStatus/{id}', [AdminsController::class, 'switchStatus']);

    Route::get('/updateSlung', [AdminsController::class, 'updateSlung']);




    Route::get('/activitylogs', [AdminsController::class, 'activitylogs']);


    // AJAX REQUESTS
    Route::post('/addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest']);
    Route::post('/deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax']);
    Route::put('/updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax']);
    Route::put('/updateMailerAjax', [AdminsController::class, 'updateMailerAjax']);
    Route::put('/updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax']);
    Route::put('/updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials']);
    Route::post('/deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax']);
    Route::post('/deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax']);
    Route::post('/deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax']);
    Route::post('/deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax']);
    Route::post('/deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax']);
    Route::post('/deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax']);
    Route::post('/deleteBalAjax', [AdminsController::class, 'deleteBalAjax']);
    Route::post('/deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax']);
    Route::post('/deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax']);
    Route::post('/deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax']);
    Route::post('/deleteUserAjax', [AdminsController::class, 'deleteUserAjax']);
    Route::post('/deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax']);
    Route::post('/deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax']);
    Route::post('/deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax']);
    Route::post('/deleteHowAjax', [AdminsController::class, 'deleteHowAjax']);
    Route::post('/deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax']);
    Route::post('/deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax']);
    Route::post('/deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax']);
    Route::post('/deleteProductAjax', [AdminsController::class, 'deleteProductAjax']);

    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook']);
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google']);
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);



});

Route::controller(DropzoneController::class)->group(function(){

    Route::get('dropzone', 'index');

    Route::post('dropzone/store', 'store')->name('dropzone.store');

});
