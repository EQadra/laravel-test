<?php

namespace App\Http\Controllers\Swagger;

/**
 * @OA\Schema(
 *     schema="Task",
 *     type="object",
 *     required={"id", "title", "status", "priority", "project_id"},
 *     @OA\Property(
 *         property="id",
 *         type="string",
 *         format="uuid",
 *         example="abc12345-6789-4def-0123-456789abcdef"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         example="Preparar documentación"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción detallada de la tarea"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         enum={"pending", "in_progress", "done"},
 *         example="pending"
 *     ),
 *     @OA\Property(
 *         property="priority",
 *         type="string",
 *         enum={"low", "medium", "high"},
 *         example="medium"
 *     ),
 *     @OA\Property(
 *         property="due_date",
 *         type="string",
 *         format="date",
 *         nullable=true,
 *         example="2025-06-15"
 *     ),
 *     @OA\Property(
 *         property="project_id",
 *         type="string",
 *         format="uuid",
 *         example="123e4567-e89b-12d3-a456-426614174000"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         example="2025-05-28T14:45:00Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         example="2025-05-28T15:00:00Z"
 *     )
 * )
 *
 * @OA\Schema(
 *     schema="TaskCreateRequest",
 *     type="object",
 *     required={"title", "status", "priority", "project_id"},
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         example="Preparar documentación"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción detallada de la tarea"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         enum={"pending", "in_progress", "done"},
 *         example="pending"
 *     ),
 *     @OA\Property(
 *         property="priority",
 *         type="string",
 *         enum={"low", "medium", "high"},
 *         example="medium"
 *     ),
 *     @OA\Property(
 *         property="due_date",
 *         type="string",
 *         format="date",
 *         nullable=true,
 *         example="2025-06-15"
 *     ),
 *     @OA\Property(
 *         property="project_id",
 *         type="string",
 *         format="uuid",
 *         example="123e4567-e89b-12d3-a456-426614174000"
 *     )
 * )
 *
 * @OA\Schema(
 *     schema="TaskUpdateRequest",
 *     type="object",
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         example="Actualizar documentación"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción actualizada de la tarea"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         enum={"pending", "in_progress", "done"},
 *         example="in_progress"
 *     ),
 *     @OA\Property(
 *         property="priority",
 *         type="string",
 *         enum={"low", "medium", "high"},
 *         example="high"
 *     ),
 *     @OA\Property(
 *         property="due_date",
 *         type="string",
 *         format="date",
 *         nullable=true,
 *         example="2025-06-20"
 *     ),
 *     @OA\Property(
 *         property="project_id",
 *         type="string",
 *         format="uuid",
 *         example="123e4567-e89b-12d3-a456-426614174000"
 *     )
 * )
 */
class TaskSchemas
{
    // Solo esquema para Swagger/OpenAPI
}
