<?php

namespace App\Models;

use App\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUlids as ConcernsHasUlids;

class Permission extends \Spatie\Permission\Models\Permission
{
    use ConcernsHasUlids;
}
