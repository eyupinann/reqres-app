<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class APIController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET', 'https://reqres.in/api/users?page=2');

        $res =  json_decode($response->getBody(), true);

        $data = $res['data'];
        return view('index',compact('data'));
    }

    public function detail($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://reqres.in/api/users/'.$id);

        $res =  json_decode($response->getBody(), true);

        return view('detail',compact('res'));
    }

    public function create_view(){

        return view('create');
    }
    public function create(Request $request){
        $client = new Client();

        $client->request('POST', 'https://reqres.in/api/users/', [
            'form_params' => [
                'name' => $request->name,
                'job' => $request->job,
            ]
        ]);

        return redirect()->back()->with('message', 'Congratulations successfully created');
    }


    public function edit_view($id){
        return view('edit',compact('id'));
    }
    public function edit(Request $request,$id){
        $client = new Client();

       $client->request('PUT', 'https://reqres.in/api/users/'.$id, [
            'form_params' => [
                'name' => $request->name,
                'job' => $request->job,
            ]
        ]);
      /*  $ress =  json_decode($res->getBody(), true);
        dd($ress);*/

        return redirect()->back()->with('message', 'Congratulations successfully updated');
    }



    public function destroy($id)
    {
        $client = new Client();
        $client->request('DELETE', 'https://reqres.in/api/users/'.$id);

        return redirect()->back()->with('message', 'Congratulations successfully deleted');

    }
}
