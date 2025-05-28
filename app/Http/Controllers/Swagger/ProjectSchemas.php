<?php

namespace App\Http\Controllers\Swagger;

/**
 * @OA\Schema(
 *     schema="Project",
 *     type="object",
 *     required={"id", "name", "status"},
 *     @OA\Property(
 *         property="id",
 *         type="string",
 *         format="uuid",
 *         example="123e4567-e89b-12d3-a456-426614174000"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Proyecto Alpha"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción detallada del proyecto."
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         example="active"
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
 *     schema="ProjectCreateRequest",
 *     type="object",
 *     required={"name", "status"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Proyecto Alpha"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción detallada del proyecto."
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         example="active"
 *     )
 * )
 *
 * @OA\Schema(
 *     schema="ProjectUpdateRequest",
 *     type="object",
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Proyecto Beta Actualizado"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         nullable=true,
 *         example="Descripción actualizada del proyecto."
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         example="inactive"
 *     )
 * )
 */
class ProjectSchemas
{
    // Esta clase solo define esquemas para Swagger/OpenAPI
}
