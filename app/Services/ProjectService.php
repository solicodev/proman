<?php

namespace App\Services;

use App\Models\Project;

/**
 * Class ProjectService.
 */
class ProjectService
{
    public function store(array $param)
    {
        $rand = rand(111111, 999999);
        $project = new Project();
        $project->name = $param['name'];
        $project->start_date = $param['start_date'];
        $project->end_date = $param['end_date'];
        $project->project_code = 'P_' . $rand;
        $project->save();

        return $project;
    }
}
