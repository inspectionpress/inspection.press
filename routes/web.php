<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\ClientPortalController;
use App\Http\Controllers\SchedulerController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\DashboardController;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin
Route::redirect('/admin', '/admin/dashboard');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.users.index');
    Route::post('/users/{user}/assign-role', [UserManagementController::class, 'assignRole'])->name('admin.users.assignRole');
    Route::get('/settings', [SettingsController::class, 'edit'])->name('admin.settings.edit');
    Route::post('/settings', [SettingsController::class, 'update'])->name('admin.settings.update');
    Route::prefix('templates')->name('admin.templates.')->group(function () {
        Route::get('/', [TemplateController::class, 'index'])->name('index');
        Route::get('/create', [TemplateController::class, 'create'])->name('create');
        Route::post('/', [TemplateController::class, 'store'])->name('store');
        Route::get('/{template}/edit', [TemplateController::class, 'edit'])->name('edit');
        Route::post('/{template}/sections', [TemplateController::class, 'storeSection'])->name('sections.store');
        Route::post('/sections/{section}/findings', [TemplateController::class, 'storeFinding'])->name('findings.store');
        Route::patch('/sections/{section}', [TemplateController::class, 'updateSection'])->name('sections.update');
        Route::delete('/sections/{section}', [TemplateController::class, 'destroySection'])->name('sections.destroy');
        Route::patch('/findings/{finding}', [TemplateController::class, 'updateFinding'])->name('findings.update');
        Route::delete('/findings/{finding}', [TemplateController::class, 'destroyFinding'])->name('findings.destroy');
    });
});
Route::middleware(['auth', 'role:admin'])->prefix('admin/services')->name('admin.services.')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('index');
    Route::get('/create', [ServicesController::class, 'create'])->name('create');
    Route::post('/', [ServicesController::class, 'store'])->name('store');
    Route::get('/{service}/edit', [ServicesController::class, 'edit'])->name('edit');
    Route::put('/{service}', [ServicesController::class, 'update'])->name('update');
    Route::delete('/{service}', [ServicesController::class, 'destroy'])->name('destroy');
});

// Inspections
Route::middleware(['auth'])->group(function () {
    Route::get('/inspections', [InspectionController::class, 'index'])->name('inspections.index');
    Route::get('/inspections/create', [InspectionController::class, 'create'])->name('inspection.create');
    Route::post('/inspections', [InspectionController::class, 'store'])->name('inspection.store');
});

// Public report access
Route::get('/inspection/{uuid}', [InspectionController::class, 'publicView'])->name('inspection.public');
Route::get('/inspection/{uuid}/pdf', [InspectionController::class, 'downloadPdf'])->name('inspection.pdf');

// Client portal
Route::get('/client/inspection/{uuid}', [ClientPortalController::class, 'view']);
Route::get('/client/inspection/{uuid}/pdf', [ClientPortalController::class, 'downloadPdf']);

// Scheduler
Route::get('/scheduler', [SchedulerController::class, 'index'])->name('scheduler.index');

// Inspection agreement
Route::get('/inspection/{id}/agreement', [AgreementController::class, 'show'])->name('agreement.show');
Route::post('/inspection/{id}/agreement', [AgreementController::class, 'submit'])->name('agreement.submit');

require __DIR__.'/auth.php';

// CRM
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Customers
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

    // Agents
    Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::get('/agents/create', [AgentController::class, 'create'])->name('agents.create');
    Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');
});

// Dashboard

Route::middleware(['auth','role:admin'])
 ->prefix('admin')
 ->name('admin.')
 ->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
     Route::resource('clients', Admin\ClientController::class)->only(['index','create','store','edit','update','destroy']);
     Route::resource('agents',  Admin\AgentController::class)->only(['index','create','store','edit','update','destroy']);
     Route::resource('templates',Admin\TemplateController::class);
     Route::resource('services', Admin\ServiceController::class);
     Route::get('/settings', [Admin\SettingsController::class, 'edit'])->name('settings.edit');
     Route::patch('/settings', [Admin\SettingsController::class, 'update'])->name('settings.update');
 });