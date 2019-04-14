<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\News;
use App\Services\UtilityService;

class NewService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all News.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listNews()
    {
        return News::get();
    }

    /**
     * Datatebles
     * @param news
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($news)
    {
        $tableData = Datatables::of($news)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','news')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get news.
     * @param $newsId
     * @return News
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getNews($newsId)
    {
        try {
            $news = News::findOrFail($newsId);
            return $news;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'News not found');
        }
    }

    /**
     * Create news.
     * @param $newsId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createNews($parameters)
    {
        try {
            if(isset($parameters['image']) && $parameters['image'] != ""){
                $data = $this->utilityService->uploadImage($parameters['image']);
                if(!$data['status'])
                    return response(array('msg' => $data['errors']), 404);
                $parameters['image'] = $data['image'];
            }else{
                return array('status' => false, 'message' => 'Image required');
            }

            $news = new News();
            $news->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update news.
     * @param $newsId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateNews($newsId, $parameters, $images, $image)
    {
        try {
            $news = News::findOrFail($newsId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $news->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete news.
     * @param $newsId
     * @return News
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteNews($newsId)
    {
        return News::find($newsId)->delete();
    }
}
