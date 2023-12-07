<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Afiliado;
use App\Models\Especialidad;
use App\Models\Hospital;
use App\Models\Medico;
use App\Models\Hora;
use App\Models\Atencion;
use App\Models\Empresa;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function formularioRegistro(Request $request)
    {
        $afiliado = $request->get('afiliado');
        $especialidades = Especialidad::all();

        return view('registrar_ticket', ['afiliado' => $afiliado, 'especialidades' => $especialidades]);
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

    public function registrarForm(Afiliado $afiliado, Especialidad $especialidad, Medico $medico, Hospital $hospital)
    {
        // Puedes obtener más datos necesarios para el formulario
        // Por ejemplo, obtener médicos según la especialidad, etc.
        return view('afiliados.registrar', ['afiliado' => $afiliado, 'especialidad' => $especialidad, 'medico' => $medico, 'hospital' => $hospital]);
    }

    public function registrar(Request $request)
    {
        // Lógica para registrar el ticket con los datos del formulario
        // ...

        return "Ticket registrado exitosamente.";
    }
    public function index()
    {
        $tickets = Ticket::with([
            'afiliados',
            'medicos',
            'medicos.especialidades',
            'medicos.especialidades.hospital',
            'medicos.atenciones',
            'medicos.atenciones.horas',
        ])->get();

        return view('tickets.index', compact('tickets'));
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
