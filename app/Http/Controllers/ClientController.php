<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Direction as Direccion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            request()->validate(Client::$rules);
            $Nombre = $request->Nombre;
            $Apellido = $request->Apellido;
            $email = $request->email;
            $telefono = $request->telefono;

            $direccion =  Direccion::create([
                'id_estado' => $request->estado,
                'direccion' => $request->direccion,

            ]);

            $client  = Client::create([
                'direccion_id' => $direccion->id,
                'Nombre' => $Nombre,
                'Apellido' => $Apellido,
                'email' => $email,
                'telefono' => $telefono,
            ]);
            Alert::success('Éxito', 'Se ha registrado satisfactoriamente');
            return redirect()->route('home');
        } catch (\Throwable $e) {
            Alert::error('Fallido', 'Tiene que rellenar todos los campos');

            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
