<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class ScratchbookPermissions extends Enum
{
    const CREATE = "scratchbook:create";
    const READ = "scratchbook:read";
    const UPDATE = "scratchbook:update";
    const DELETE = "scratchbook:delete";
    const CLONE_TO_WORKSPACE = "scratchbook:cloneToWorkspace";
    const FOREIGN_STAR = "scratchbook:starForeign";

}
