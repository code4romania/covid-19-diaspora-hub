<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DiplomaticMissionCollection;
use App\Models\DiplomaticMission;

/**
 * @group Diplomatic missions
 */
final class DiplomaticMissionController extends Controller
{
    /**
     * Get all diplomatic missions.
     */
    public function index(): DiplomaticMissionCollection
    {
        return new DiplomaticMissionCollection(DiplomaticMission::all());
    }
}
