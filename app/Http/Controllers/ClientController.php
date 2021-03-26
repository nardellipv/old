<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\UpdateProfile;
use App\Point;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list()
    {
        $clients = User::with(['category'])
            ->where('type', 'Client')
            ->get();

        return view('admin.client.list', compact('clients'));
    }

    public function show($id)
    {
        $client = User::find($id);
        $categories = Category::all();

        return view('admin.client.edit', compact('client', 'categories'));
    }

    public function updateClient(ClientRequest $request, $id)
    {

        $client = User::find($id);

        $client->name = $request['name'];
        $client->lastname = $request['lastname'];
        $client->email = $request['email'];
        $client->type = 'Client';
        $client->birthday = $request['birthday'];
        $client->phone = $request['phone'];
        $client->total_points = $request['total_points'];
        $client->category_id = $request['category_id'];
        $client->save();

        $clients = User::with(['category'])
            ->where('type', 'Client')
            ->get();

        toastr()->success('Cliente Editado Correctamente', 'Cliente Editado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);

        return view('admin.client.list', compact('clients'));
    }

    public function storeClient(ClientRequest $request)
    {

        $path = 'users/' . $request['phone'];

        if (!is_dir($path)) {
            mkdir('users/' . $request['phone']);
        }

        User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'type' => 'Client',
            'birthday' => $request['birthday'],
            'phone' => $request['phone'],
            'total_points' => 0,
            'category_id' => '1',
            'password' => bcrypt('barber'),
        ]);

        toastr()->success('Cliente Agregado Correctamente', 'Cliente Agregado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function delete($id)
    {
        $client = User::find($id);
        $client->delete();

        toastr()->success('Cliente Eliminado Correctamente', 'Cliente Eliminado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function addService($id)
    {        
        $client = User::find($id);
        $products = Product::all();
        $points = Point::where('user_id', $id)
            ->get();

        return view('admin.client.addService', compact('client', 'products', 'points'));
    }

    public function showSendWsp($id)
    {
        $client = User::find($id);

        return view('admin.client.sendWsp', compact('client'));
    }

    public function showProfile($id)
    {
        $client = User::find($id);

        return view('adminClient.profile.profile', compact('client'));
    }

    public function updateProfile(UpdateProfile $request, $id)
    {
        $client = User::find($id);
        $client->name = $request['name'];
        $client->lastname = $request['lastname'];
        $client->email = $request['email'];
        $client->birthday = $request['birthday'];
        $client->phone = $request['phone'];

        if ($request->password) {
            $client->password = bcrypt($request->password);
        }

        $client->save();

        toastr()->success('Perfil Modificado Correctamente', 'Perfil Modificado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function sendRegisterMail(Request $request)
    {
        dd($request->all());
    }
}
