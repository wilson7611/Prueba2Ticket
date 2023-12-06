<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Afiliado;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function formularioRegistro(Request $request)
    {
        $afiliado = $request->get('afiliado');
        $especialidades = Especialidad::all();

        return view('registrar_ticket', ['cliente' => $afiliado, 'especialidades' => $especialidades]);
    }

    public function registrarTicket(Request $request)
    {
        // Validación de datos aquí...

        $ticket = new Ticket([
            'afiliado_id' => $request->input('afiliado_id'),
            'especialidad_id' => $request->input('especialidad_id'),
            // Otros campos del ticket
        ]);

        $ticket->save();

        return "Ticket registrado exitosamente.";
    }
    /**
     * Display a listing of the resource.
     */

    public function registrarForm(Afiliado $afiliado, Especialidad $especialidad)
    {
        // Puedes obtener más datos necesarios para el formulario
        // Por ejemplo, obtener médicos según la especialidad, etc.
        return view('afiliados.registrar', ['afiliado' => $afiliado, 'especialidad' => $especialidad]);
    }

    public function registrar(Request $request)
    {
        // Lógica para registrar el ticket con los datos del formulario
        // ...

        return "Ticket registrado exitosamente.";
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
