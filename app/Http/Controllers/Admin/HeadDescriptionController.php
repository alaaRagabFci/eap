<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\HeadDescriptionService;
use Response;

class HeadDescriptionController extends AbstractController {

    public $headDescriptionService = null;
    public function __construct(HeadDescriptionService $headDescriptionService)
    {
        $this->middleware('auth');
        $this->headDescriptionService = $headDescriptionService;
    }

    /**
     * List all descriptions.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $descriptions  = $this->headDescriptionService->listDescriptions();
        $tableData = $this->headDescriptionService->datatables($descriptions);

        if($request->ajax())
            return $tableData;

        return view('head-descriptions.index')
              ->with('modal', 'head-descriptions')
              ->with('tableData', $tableData);
    }

    /**
     * Update description.
     * requirements={
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="description image"},
     *      {"name"="page", "dataType"="String", "requirement"="\d+", "description"="page"},
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
        $data['image'] = $request->hasFile('image') ? $request->file('image') : "";
        $aboutUs = $this->headDescriptionService->createDescription($data);
        return $aboutUs;
    }
    /**
     * Edit description.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="description id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $description = $this->headDescriptionService->getDescription($id);
        session(['description_id'     => $description->id]);
        session(['image'  => $description->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $description->toJson()]);
    }

    /**
     * Update description.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="description id"},
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="description image"},
     *      {"name"="page", "dataType"="String", "requirement"="\d+", "description"="page"},
     *      {"name"="title_ar", "dataType"="String", "requirement"="\d+", "description"="title ar"},
     *      {"name"="title_en", "dataType"="String", "requirement"="\d+", "description"="title en"},
     *      {"name"="description_ar", "dataType"="text", "requirement"="\d+", "description"="description ar"},
     *      {"name"="description_en", "dataType"="text", "requirement"="\d+", "description"="description en"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function update(Request $request)
    {
        $images['image'] = $request->hasFile('image') ? $request->file('image') : "";
        $data  = $request->all();

        $description = $this->headDescriptionService->updateDescription(
            session('description_id'), $data, $images ,session('image')
        );

        return $description;
    }

    /**
     * Delete description.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="description id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $description = $this->headDescriptionService->deleteDescription($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}
