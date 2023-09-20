<?php

namespace App\Models;

use App\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUlids as ConcernsHasUlids;

class Role extends \Spatie\Permission\Models\Role
{
    use ConcernsHasUlids;
}
