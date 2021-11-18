<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Client\ClientRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    private $client;

    public function __construct(ClientRepository $client){
        $this->client = $client;
    }


    public function index()
    {
        $details=$this->client->orderBy('order', 'asc')->get();
        return view('admin.client.list', compact('details'));
    }

    public function create()
    {
        $clients = $this->client->where('publish', 1)->get();
        return view('admin.client.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish', 'client_file');
        $value['publish']= $request->publish=="on"? 1 : 0 ;
        $value['user_id'] = Auth::id();

        if($request->hasFile('client_file')){
            $fileName = time().'.'.$request->client_file->extension();  
            $request->client_file->move(public_path('client'), $fileName);
            $value['image'] = $fileName;
        }

        $this->client->create($value);
        return redirect()->route('admin.client.index')->with('message','Client Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->client->find($id);
        return view('admin.client.edit', compact('detail'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->client->find($id);
        $this->validate($request, $this->rulesForUpdate($id));
        $value=$request->except('publish');

        $value['publish']= $request->publish=="on" ? 1:0;

        if($request->hasFile('client_file')){
            $fileName = time().'.'.$request->client_file->extension();  
            $request->client_file->move(public_path('client'), $fileName);
            $value['image'] = $fileName;
        }

        $this->client->update($value, $id);
        return redirect()->route('admin.client.index')->with('message','Client Updated Successfully');
    }


    public function destroy($id)
    {
        $value['publish'] =0;
        $this->client->update($value, $id);

        $this->client->destroy($id);
        return redirect()->route('admin.client.index')->with('message','Client Deleted Successfully');
    }

    public function rules($oldId = null)
    {
        $rules =  [
            'name' => 'required',
            'order'=> 'required|numeric',
            'client_file' => 'required|mimes:jpg,bmp,png,jpeg'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'name' => 'required|unique:users,name,'. $oldId,
            'order'=> 'required|numeric',
            'client_file' => 'sometimes|mimes:jpg,bmp,png,jpeg'
        ];

        return $rules;
    }
}
