<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserChatController;
use App\Http\Controllers\PlanController;


use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;
use App\Mail\ReplyMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', [PlanController::class, 'showPlanDetails']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');















// Route::get('/admin/plans/{id}/edit', [PlanController::class, 'edit'])->name('admin.plans.edit');

Route::put('/admin/plans/{id}', [PlanController::class, 'updatePlanFromAdmin']);
Route::delete('/admin/plans/{id}', [PlanController::class, 'deleteplanfromadmin']);
Route::post('/admin/plans',  [PlanController::class, 'createplanfromadmin']);

Route::delete('/admin/plans/features/{plan}', [PlanController::class, 'deleteFeatures']);
Route::post('/admin/plans/features/{plan}', [PlanController::class, 'storeFeatures']);
Route::get('/admin/plans/features/{plan}', [PlanController::class, 'getPlanFeatures']);
Route::get('/admin/plans/{plan}', [PlanController::class, 'showPlanDetails']);





Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload-profile-image', [ProfileController::class, 'uploadProfileImage'])->name('profile.upload');
    Route::get('/chat_dashboard', [ProfileController::class, 'showProfile'])->name('chat_dashboard');

    Route::post('/store-message/user', [UserChatController::class, 'storeMessage']);
    Route::post('/update-chat-name', [UserChatController::class, 'updateChatName'])->name('update.chat.name');
    Route::delete('/delete-chat/{id}', [UserChatController::class, 'delete']);
    Route::get('/fetch-chat-messages/{chatId}', [UserChatController::class, 'fetchMessages']);
    Route::post('/send-admin-reply', [UserChatController::class, 'sendAdminReply']);
    Route::post('/save-plan', [PlanController::class, 'storemembership'])->name('store.membership');
    Route::post('/start-trial', [PlanController::class, 'startTrial'])->name('start.trial');
});



Route::post('/user/contact', [ContactController::class, 'store'])->name('contact.store');


Route::post('/admin/update-user', [AdminController::class, 'updateUser'])->name('update.user');
Route::delete('/admin/contact/{id}', [AdminController::class, 'destroycontact'])->name('admin.contact.delete');
Route::post('/admin/contact/markAsViewed/{id}', [AdminController::class, 'markAsViewed'])->name('admin.contact.markAsViewed');
Route::post('/admin/faqs/toggle-preminum/{id}', [AdminController::class, 'togglePreminum'])->name('admin.faqs.toggle-preminum');
Route::post('/admin/faqs/toggle-VisitorActive/{id}', [AdminController::class, 'toggleVisitorActive'])->name('admin.faqs.toggle-VisitorActive');
Route::post('/admin/faqs/toggle/{id}', [AdminController::class, 'toggleFAQ'])->name('admin.faqs.toggle');
Route::delete('/admin/faqs/{id}', [AdminController::class, 'deleteFAQ'])->name('admin.faqs.delete');
// Route::put('/admin/faqs/{id}', [AdminController::class, 'updateFAQ']);
Route::post('/admin/faqs/create', [AdminController::class, 'storeFAQ'])->name('faqs.store');
Route::post('/admin/faqs/update/{id}', [AdminController::class, 'updateFAQ'])->name('faqs.update');
Route::post('/update-faqs-order', [AdminController::class, 'updateFaqsOrder'])->name('update.faqs.order');



Route::post('/save-ticket', [TicketController::class, 'ticketsave'])->name('ticket.save');
Route::post('/save-ticket/user', [TicketController::class, 'ticketsaveuser'])->name('ticket.save.user');
Route::get('/admin/chat/section-1',  [TicketController::class, 'chat'])->name('admin.chat.section.1');
Route::get('/chat/{uuid}',  [TicketController::class, 'fetchChatMessages'])->name('chat.fetch');
Route::post('/send-message', [TicketController::class, 'sendReply'])->name('send-reply');
Route::post('/send-message/user', [TicketController::class, 'sendReplyUser'])->name('send-reply-user');
Route::get('/helpdesk', [TicketController::class, 'helpDeskUserSide'])->middleware(['auth', 'verified']);
Route::post('/upload', [TicketController::class, 'uploadChatImage'])->name('upload.image');
Route::post('/upload/image', [TicketController::class, 'uploadChatImageUser']);









Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    Route::get('/admin/users/listing', 'users')->name('admin.user.lisitng');
    Route::post('/admin/users/toggle-active/{userId}', 'toggleActive')->name('admin.users.toggle-active');
    Route::delete('/users/{userId}', 'destroy')->name('users.destroy');
    Route::get('/admin/home/logo', 'home')->name('admin.header');
    Route::get('/admin/home/section-1', 'home')->name('admin.home.Section.2');
    Route::get('/admin/home/section-2', 'home')->name('admin.home.Section.3');
    Route::get('/admin/home/section-3', 'home')->name('admin.home.Section.4');
    Route::get('/admin/home/section-3/view-features', 'home')->name('admin.view.features');
    Route::get('/admin/home/section-4', 'home')->name('admin.home.Section.5');
    Route::get('/admin/home/section-5', 'home')->name('admin.home.Section.6');
    Route::get('/admin/home/section-6', 'home')->name('admin.home.Section.7');
    Route::get('/admin/products/section-1', 'products')->name('admin.products.Section.1');
    Route::get('/admin/products/section-2', 'products')->name('admin.products.Section.2');
    Route::get('/admin/add/products', 'products')->name('admin.add.products');
    Route::get('/admin/list/products', 'products')->name('admin.products.lisitng');
    Route::get('/admin/pricing/section-1', 'pricing')->name('admin.pricing.section.1');
    Route::get('/admin/pricing/section-2', 'pricing')->name('admin.pricing.section.2');
    Route::get('/admin/pricing/section-3', 'pricing')->name('admin.pricing.section.3');
    Route::get('/admin/pricing/section-4', 'pricing')->name('admin.pricing.section.4');
    Route::get('/admin/tools/section-1', 'tools')->name('admin.tools.section.1');
    Route::get('/admin/tools/section-2', 'tools')->name('admin.tools.section.2');
    Route::get('/admin/tools/section-3', 'tools')->name('admin.tools.section.3');
    Route::get('/admin/support/section-1', 'support')->name('admin.support.section.1');
    Route::get('/admin/support/section-2', 'support')->name('admin.support.section.2');
    Route::get('/admin/support/section-3', 'support')->name('admin.support.section.3');
    Route::get('/admin/contact/section-1', 'contact')->name('admin.contact.section.1');
    Route::get('/admin/contact/section-2', 'contact')->name('admin.contact.section.2');
    Route::get('/admin/contact/section-3', 'inbox')->name('admin.contact.section.3');
    Route::get('/admin/contact/section-4', 'inbox')->name('admin.contact.section.4');
    Route::post('/send-reply', 'sendReply')->name('send.reply');
    Route::get('/admin/faqs', 'faqs')->name('admin.faqs');
});


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/product', 'product')->name('product');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/term-condition', 'termCondition')->name('term-condition');
    Route::get('/plans', 'plans')->name('plans');
    Route::get('/payment', 'payment')->name('payment');
    Route::get('/chat', 'chat')->name('chat');
    Route::get('/faqs', 'faqs')->name('faqs');
});



// Route::get('/test',function(){
//     dd("hello");
// });

// Route::post('/admin/faqs/', [AdminController::class, 'updateFAQ'])->name('faqs.update');

require __DIR__ . '/auth.php';
