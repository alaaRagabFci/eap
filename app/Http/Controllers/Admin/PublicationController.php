<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\PublicationService;
use Response;

class PublicationController extends AbstractController {

    public $publicationService = null;
    public function __construct(PublicationService $publicationService)
    {
        $this->middleware('auth');
        $this->publicationService = $publicationService;
    }

    /**
     * List all publications.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $publications  = $this->publicationService->listPublications();
        $tableData = $this->publicationService->datatables($publications);

        if($request->ajax())
            return $tableData;

        return view('publications.index')
              ->with('modal', 'publications')
              ->with('tableData', $tableData);
    }

    /**
     * Update publication.
     * requirements={
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="image"},
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
        $publication = $this->publicationService->createPublication($data);
        return Response::json(['msg'=>'Adding Successfully',200]);
    }
    /**
     * Edit publication.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="publication id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $publication = $this->publicationService->getPublication($id);
        session(['publication_id'     => $publication->id]);
        session(['image'  => $publication->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $publication->toJson()]);
    }

    /**
     * Update publication.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="publication id"},
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
        $images['image'] = $request->hasFile('image') ? $request->file('image') : "";
        $data  = $request->all();

        $publication = $this->publicationService->updatePublication(
            session('publication_id'), $data, $images ,session('image')
        );

        return Response::json(['msg'=>'Updated Successfully',200]);
    }

    /**
     * Delete publication.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="publication id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $publication = $this->publicationService->deletePublication($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}
