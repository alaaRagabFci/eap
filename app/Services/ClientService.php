<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Client;
use App\Services\UtilityService;

class ClientService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Client.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listClients()
    {
        return Client::get();
    }

    /**
     * Datatebles
     * @param client
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($clients)
    {
        $tableData = Datatables::of($clients)
            ->addColumn('type', function (Client $client) {
                return $client->getType->type;

            })
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','clients')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions'])->make(true);

        return $tableData ;
    }

    /**
     * Get client.
     * @param $clientId
     * @return Client
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getClient($clientId)
    {
        try {
            $client = Client::findOrFail($clientId);
            return $client;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Client not found');
        }
    }

    /**
     * Create client.
     * @param $clientId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createClient($parameters)
    {
        try {
            $client = new Client();
            $client->create($parameters);
            return array('status' => 'true', 'message' => 'Client created');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Client already exist');
        }
    }

    /**
     * Update client.
     * @param $clientId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateClient($parameters, $clientId)
    {
        try {
            $client = Client::findOrFail($clientId);
            $client->update($parameters);
            return array('status' => 'true', 'message' => 'Client updated');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Client not found');
        }
    }

    /**
     * Delete client.
     * @param $clientId
     * @return Client
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteClient($clientId)
    {
        return Client::find($clientId)->delete();
    }
}
