<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;



Route::get('/', function () {
    return view('welcome');
});



// Rutas para gestión de proyectos
Route::get('projects', [ProjectController::class, 'index']);          // Listar proyectos con filtros
Route::post('projects', [ProjectController::class, 'store']);         // Crear nuevo proyecto
Route::get('projects/{id}', [ProjectController::class, 'show']);      // Ver detalle de proyecto
Route::put('projects/{id}', [ProjectController::class, 'update']);    // Actualizar proyecto
Route::delete('projects/{id}', [ProjectController::class, 'destroy']); // Eliminar proyecto

// Rutas para gestión de tareas
Route::get('tasks', [TaskController::class, 'index']);                // Listar tareas con filtros
Route::post('tasks', [TaskController::class, 'store']);               // Crear nueva tarea
Route::get('tasks/{id}', [TaskController::class, 'show']);            // Ver detalle de tarea
Route::put('tasks/{id}', [TaskController::class, 'update']);          // Actualizar tarea
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);      // Eliminar tarea

// Route::apiResource('projects', ProjectController::class);
// Route::apiResource('tasks', TaskController::class);

// Ruta de prueba para verificar que el API está activa
Route::get('/ping', function () {
    return response()->json([
        'message' => 'API funcionando correctamente ✅',
        'timestamp' => now()
    ]);
});
