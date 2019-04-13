<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Project;
use App\Services\UtilityService;

class ProjectService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Project.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listProjects()
    {
        return Project::get();
    }

    /**
     * Datatebles
     * @param project
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($projects)
    {
        $tableData = Datatables::of($projects)
            ->editColumn('icon', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$icon }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','projects')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','icon'])->make(true);

        return $tableData ;
    }

    /**
     * Get project.
     * @param $projectId
     * @return Project
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getProject($projectId)
    {
        try {
            $project = Project::findOrFail($projectId);
            return $project;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Project not found');
        }
    }

    /**
     * Create project.
     * @param $projectId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createProject($parameters)
    {
        try {
            if(isset($parameters['icon']) && $parameters['icon'] != ""){
                $data = $this->utilityService->uploadImage($parameters['icon']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['icon'] = $data['image'];
            }else{
                return array('status' => false, 'message' => 'Image required');
            }

            $project = new Project();
            $project->create($parameters);
            return array('status' => 'true', 'message' => 'Project created');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Project already exist');
        }
    }

    /**
     * Update project.
     * @param $projectId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateProject($projectId, $parameters, $images, $icon)
    {
        try {
            $project = Project::findOrFail($projectId);
            if(isset($images['icon']) && $images['icon'] != ""){
                $data = $this->utilityService->uploadImage($images['icon']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['icon'] = $data['image'];
            }else{
                $parameters['icon']  = $icon;
            }

            $project->update($parameters);
            return array('status' => 'true', 'message' => 'Project updated');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Project not found');
        }
    }

    /**
     * Delete project.
     * @param $projectId
     * @return Project
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteProject($projectId)
    {
        return Project::find($projectId)->delete();
    }
}
