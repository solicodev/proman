<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

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
        $project->manager_id = $param['manager_id'];
        $project->category_id = $param['category_id'];
        $project->department_id = $param['department_id'];
        $project->save();

        if($param['photos'])
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'assets/uploads/projects/', '');
                $photo->name = $param['photos'][$i];
                $photo->user_id = Auth::id();
                $photo->save();
                $project->photos()->attach($photo);
            }

        }

        $project->members()->attach($param['members']);
        return $project;
    }
}
