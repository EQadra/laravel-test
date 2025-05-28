<?php

namespace App\Http\Controllers\Swagger;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Laravel Project & Task API",
 *     description="API RESTful para la gestión de proyectos y tareas",
 *     @OA\Contact(
 *         email="ecuadra06@example.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="API Server"
 * )
 */
class OpenApiInfo
{
    // Solo contenedor para anotaciones Swagger/OpenAPI
}
