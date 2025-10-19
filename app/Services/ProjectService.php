<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    public function update(array $param, Project $project)
    {
        $project->name = $param['name'];
        $project->start_date = $param['start_date'];
        $project->end_date = $param['end_date'];
        $project->manager_id = $param['manager_id'];
        $project->category_id = $param['category_id'];
        $project->department_id = $param['department_id'];
        $project->update();

        if (isset($param['photos'])) {
            foreach ($param['photos'] as $key => $photo) {
                if (isset($project->photos[$key])){
                    File::delete($project->photos[$key]->path);
                    $project->photos[$key]->path = file_store($photo, 'assets/uploads/projects/', '');
                    $project->photos[$key]->save();
                }else {
                    $ph = new Photo();
                    $ph->path = file_store($photo, 'assets/uploads/projects/', '');
                    $ph->name = $photo;
                    $ph->user_id = Auth::id();
                    $project->photos()->save($ph);
                }
            }
        }

        $project->members()->sync($param['members']);
        return $project;
    }
}
