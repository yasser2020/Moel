<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Service;
use App\User;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients=Client::whenSearch($request->search)->where('done',0)->orWhere('subscription',0)->paginate(5);
        return view('dashboard.clients.index',compact('clients'));
    }

    public function currentClients(Request $request)
    {
        $clients=Client::whenSearch($request->search)->where('done',1)->withCount('services')->paginate(5);
        return view('dashboard.clients.current_clients',compact('clients'));
    }

    public function currentClientsData($id)
    {
        $id=(int)$id;
        $client=Client::findOrFail($id);
        $services=Service::where('client_id',$client->id)->get();
        return view('dashboard.clients.show_current_client',compact('client','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clients.create_client');
    }

    // public function doSubscription($num)
    // {
        
    //     dd($client);
    //     session()->flash('success','تم  تفعيل اشتراك العميل بنجاح');
    //     return redirect()->back();
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:10',
            'sex'=>'required',
            'nationality'=>'required',
            'city'=>'required',
            'address'=>'required',
            'phone_num'=>'required',
            'whats_num'=>'required',
            'email'=>'required|unique:clients,email',
            'how_know_us'=>'required',
            'kind_of_service'=>'required',
            'service'=>'required',
        ]);

        $request_client_data=$request->except(['kind_of_service','service']);
        $client=Client::create($request_client_data);
        $client_name=$request->how_know_us;
        $client_obj=Client::whereName($client_name)->first();
        if($client_obj!=null)
        {
            $client_obj->clients_record= ($client_obj->clients_record)+1;
            if($client_boj->clients_record==10)
            {
                $client_boj->clients_record=0;
            }
            $client_obj->update();
        }
       
        $request_service_data=$request->only(['kind_of_service','service']);
        $request_service_data['client_id']=$client->id;
        $service=Service::create($request_service_data);

        
        session()->flash('success','تم اضافة العميل بنجاح');
        return redirect()->route('dashboard.clients.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $service=$client->services()->first();
        return view('dashboard.clients.show_client',compact('client','service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $client->done="1";
        $client->update();
        session()->flash('success','تم  تفعيل اشتراك العميل بنجاح');
        //add client to users table to login using email and phone_num as password
        $user= User::create([
            'name' => $client->name,
            'email' => $client->email,
            'password' => Hash::make($client->phone_num),
            'user_type'=>'client',
        ]);
        $user->attachRole('client');
        
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $user=User::where('email',($client->email));
        $user->delete();
        $freelancer->delete();
      $client->delete();
      session()->flash('success','تم  حذف بيانات العميل بنجاح');
      return redirect()->back();  
    }
}
