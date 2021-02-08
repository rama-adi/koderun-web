<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TeamPermissions extends Enum
{
    const INVITE_MEMBER = "team:invite";
    const REMOVE_MEMBER = "team:removeMember";
    const UPDATE_MEMBER_PERMISSION = "team:updateMemberPermission";
    const RENAME = "team:rename";
    const UPDATE = "team:update";
}
