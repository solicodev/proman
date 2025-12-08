<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Project;
use App\Models\ProjectDependency;
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
        $project->end_date = $param['end_date'] ?? null;
        $project->project_code = 'P_' . $rand;
        $project->manager_id = Auth::id();
        $project->category_id = $param['category_id'] ?? null;
        $project->department_id = $param['department_id'];
        $project->brand_id = $param['brand_id'] ?? null;
        $project->description = $param['description'] ?? null;

        if (isset($param['inform']))
        {
            $project->inform = $param['inform'];
        }
        if (isset($param['approve_need']))
        {
            $project->approve_need  = $param['approve_need'];
            $project->approving_manager = $param['approving_manager'];
        }
        $project->save();

        if(isset($param['photos']))
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'uploads/projects/', '');
//                $photo->name = $explode[2];
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
        $project->manager_id = Auth::id();
        $project->category_id = $param['category_id'];
        $project->department_id = $param['department_id'];
        $project->description = $param['description'] ?? null;
        $project->update();

        if (isset($param['photos'])) {
            foreach ($param['photos'] as $key => $photo) {
                if (isset($project->photos[$key])){
                    File::delete($project->photos[$key]->path);
                    $project->photos[$key]->path = file_store($photo, 'uploads/projects/', '');
                    $project->photos[$key]->save();
                }else {
                    $ph = new Photo();
                    $ph->path = file_store($photo, 'uploads/projects/', '');
//                    $ph->name = $photo;
                    $ph->user_id = Auth::id();
                    $project->photos()->save($ph);
                }
            }
        }

        $project->members()->sync($param['members']);
        return $project;
    }

    public function option(array $param , Project $project)
    {
        if (isset($param['title_dependencies'])) {
            foreach ($param['title_dependencies'] as $key => $dependency) {
                $description = $param['description_dependencies'][$key] ?? null;
                if (isset($project->dependencies[$key])){
                    $project->dependencies[$key]->title = $dependency;
                    $project->dependencies[$key]->description = $description;
                    $project->dependencies[$key]->save();
                }else {
                    $project_dependency = new ProjectDependency();
                    $project_dependency->title = $dependency;
                    $project_dependency->description = $description;
                    $project_dependency->project_id  = $project->id;
                    $project->dependencies()->save($project_dependency);
                }
            }
        }
        else
        {
            for ($i=0; $i<count($param['title_dependencies']); $i++)
            {
                $project_dependency = new ProjectDependency();
                $project_dependency->title = $param['title_dependencies'][$i];
                $project_dependency->description = $param['description_dependencies'][$i];
                $project_dependency->project_id  = $project->id;
                $project->dependencies()->save($project_dependency);
            }
        }
        return $project;
    }
}
