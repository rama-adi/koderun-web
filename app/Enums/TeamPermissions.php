<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TeamPermissions extends Enum
{
    const INVITE_MEMBER = "team:invite";
    const REMOVE_MEMBER = "team:removeMember";
    const RENAME = "team:rename";
}
