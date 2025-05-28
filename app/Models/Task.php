<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable, HasFactory;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['project_id', 'title', 'description', 'status', 'priority', 'due_date'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
