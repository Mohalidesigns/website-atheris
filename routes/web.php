<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\SolutionController;
use App\Http\Controllers\Public\PageController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\LeadController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PageSettingsController;
use App\Http\Controllers\Admin\ProductController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/platform/ai-intelligence', [PageController::class, 'aiIntelligence'])->name('platform.ai');
Route::get('/platform/security', [PageController::class, 'security'])->name('platform.security');
Route::get('/platform/integrations', [PageController::class, 'integrations'])->name('platform.integrations');
Route::get('/platform/third-party-risk', [PageController::class, 'thirdPartyRisk'])->name('platform.tprm');
Route::get('/solutions/{slug}', [SolutionController::class, 'show'])->name('solutions.show');
Route::get('/industries/{slug}', [PageController::class, 'industry'])->name('industries.show');
Route::get('/why-atheris/vs-diligent', [PageController::class, 'vsDigilent'])->name('why.diligent');
Route::get('/why-atheris/vs-archer', [PageController::class, 'vsArcher'])->name('why.archer');
Route::get('/why-atheris/roi-calculator', [PageController::class, 'roiCalculator'])->name('why.roi');
Route::get('/resources/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/resources/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/resources/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/resources/whitepapers', fn() => view('public.resources.whitepapers'))->name('resources.whitepapers');
Route::get('/resources/cbn-hub', fn() => view('public.resources.cbn-hub'))->name('resources.cbn');
// Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing'); // Disabled

Route::middleware('products.enabled')->group(function () {
    Route::get('/software-solutions', [PageController::class, 'softwareSolutions'])->name('software-solutions');
    Route::get('/software-solutions/visitors-management', [PageController::class, 'vms'])->name('software-solutions.vms');
    Route::get('/software-solutions/poultry-management', [PageController::class, 'poultryManagement'])->name('software-solutions.poultry');
    Route::get('/software-solutions/career-portal', [PageController::class, 'careerPortal'])->name('software-solutions.career-portal');
});
Route::get('/demo', [PageController::class, 'demo'])->name('demo');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/partners', [PageController::class, 'partnersPage'])->name('partners');
Route::get('/customers', [PageController::class, 'customers'])->name('customers');
Route::get('/legal/privacy', [PageController::class, 'privacy'])->name('legal.privacy');
Route::get('/legal/terms', [PageController::class, 'terms'])->name('legal.terms');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
Route::post('/newsletter', [LeadController::class, 'newsletter'])->name('newsletter.store');

// Sitemap
Route::get('/sitemap.xml', function () {
    $solutions = App\Models\Solution::published()->get();
    $posts = App\Models\Post::published()->get();
    return response()->view('sitemap', compact('solutions', 'posts'))->header('Content-Type', 'application/xml');
})->name('sitemap');

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin (Authenticated)
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts', PostController::class)->except('show');
    Route::resource('solutions', AdminSolutionController::class)->except(['show']);
    Route::resource('team', TeamController::class)->parameters(['team' => 'teamMember']);
    Route::resource('partners', PartnerController::class)->except(['show']);
    Route::get('/leads', [AdminLeadController::class, 'index'])->name('leads.index');
    Route::get('/leads/{lead}', [AdminLeadController::class, 'show'])->name('leads.show');
    Route::patch('/leads/{lead}/status', [AdminLeadController::class, 'updateStatus'])->name('leads.status');
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Page Content Management
    Route::get('/pages', [PageSettingsController::class, 'index'])->name('pages.index');
    Route::get('/pages/hero-slides', [PageSettingsController::class, 'heroSlides'])->name('pages.hero-slides');
    Route::put('/pages/hero-slides', [PageSettingsController::class, 'updateHeroSlides'])->name('pages.hero-slides.update');
    Route::get('/pages/{group}/edit', [PageSettingsController::class, 'edit'])->name('pages.edit');
    Route::put('/pages/{group}', [PageSettingsController::class, 'update'])->name('pages.update');

    // Products (Software Solutions)
    Route::resource('products', ProductController::class)->except(['show']);
});
