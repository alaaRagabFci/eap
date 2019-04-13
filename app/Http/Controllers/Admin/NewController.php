<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\NewService;
use Response;

class NewController extends AbstractController {

    public $newService = null;
    public function __construct(NewService $newService)
    {
        $this->middleware('auth');
        $this->newService = $newService;
    }

    /**
     * List all news.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $news  = $this->newService->listNews();
        $tableData = $this->newService->datatables($news);

        if($request->ajax())
            return $tableData;

        return view('news.index')
              ->with('modal', 'news')
              ->with('tableData', $tableData);
    }

    /**
     * Update news.
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
        $news = $this->newService->createNews($data);
        return Response::json(['msg'=>'Adding Successfully',200]);
    }
    /**
     * Edit news.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="news id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $news = $this->newService->getNews($id);
        session(['news_id'     => $news->id]);
        session(['image'  => $news->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $news->toJson()]);
    }

    /**
     * Update news.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="news id"},
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

        $news = $this->newService->updateNews(
            session('news_id'), $data, $images ,session('image')
        );

        return Response::json(['msg'=>'Updated Successfully',200]);
    }

    /**
     * Delete news.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="news id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $news = $this->newService->deleteNews($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}
