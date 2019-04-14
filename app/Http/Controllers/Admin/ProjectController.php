<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use Response;

class ProjectController extends AbstractController {

    public $projectService = null;
    public function __construct(ProjectService $projectService)
    {
        $this->middleware('auth');
        $this->projectService = $projectService;
    }

    /**
     * List all projects.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $projects  = $this->projectService->listProjects();
        $tableData = $this->projectService->datatables($projects);

        if($request->ajax())
            return $tableData;

        return view('projects.index')
              ->with('modal', 'projects')
              ->with('tableData', $tableData);
    }

    /**
     * Update project.
     * requirements={
     *      {"name"="icon", "dataType"="String", "requirement"="\d+", "description"="icon"},
     *      {"name"="title_ar", "dataType"="String", "requirement"="\d+", "description"="title ar"},
     *      {"name"="title_en", "dataType"="String", "requirement"="\d+", "description"="title en"},
     *      {"name"="description_ar", "dataType"="text", "requirement"="\d+", "description"="description ar"},
     *      {"name"="description_en", "dataType"="text", "requirement"="\d+", "description"="description en"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function store(Request $request)
    {
        $data  = $request->all();
        $data['icon'] = $request->hasFile('icon') ? $request->file('icon') : "";
        $project = $this->projectService->createProject($data);
        return $project;
    }
    /**
     * Edit project.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="project id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $project = $this->projectService->getProject($id);
        session(['project_id'     => $project->id]);
        session(['icon'  => $project->icon]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $project->toJson()]);
    }

    /**
     * Update project.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="project id"},
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="image"},
     *      {"name"="title_ar", "dataType"="String", "requirement"="\d+", "description"="title ar"},
     *      {"name"="title_en", "dataType"="String", "requirement"="\d+", "description"="title en"},
     *      {"name"="description_ar", "dataType"="text", "requirement"="\d+", "description"="description ar"},
     *      {"name"="description_en", "dataType"="text", "requirement"="\d+", "description"="description en"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function update(Request $request)
    {
        $images['icon'] = $request->hasFile('icon') ? $request->file('icon') : "";
        $data  = $request->all();

        $project = $this->projectService->updateProject(
            session('project_id'), $data, $images ,session('icon')
        );

        return $project;
    }

    /**
     * Delete project.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="project id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $project = $this->projectService->deleteProject($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}
