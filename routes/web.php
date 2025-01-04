<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function(){

// Welcome Route
// Route::get('/', [welcontroller::class, 'welcome'])->name('welcome');
 Route::redirect('/','/note')->name('dashboard');
// Individual Note Routes (optional, if not using resource)
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/{note}', [NoteController::class, 'show'])->name('note.show'); // Use {note} for route model binding
Route::get('/note/{note}/edit', [NoteController::class, 'edit'])->name('note.edit'); // Consistent with resource naming
Route::put('/note/{note}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
// Resource Route (recommended for simplicity)
Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
