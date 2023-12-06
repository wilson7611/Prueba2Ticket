<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Medico;
use App\Models\Hospital;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    // public function buscarAfiliadoForm()
    // {
    //     return view('buscar_afiliado');
    // }

    // public function buscarAfiliado(Request $request)
    // {
    //     $ci = $request->input('ci');

    //     $afiliado = Afiliado::where('ci', $ci)->first();

    //     if ($afiliado) {
    //         return redirect()->route('formularioRegistro', ['afiliado' => $afiliado]);
    //     } else {
    //         return "Afiliado no encontrado. <a href='" . route('buscarAfiliadoForm') . "'>Volver</a>";
    //     }
    // }
    ///otra validacion
    public function validarAfiliadoForm()
    {
        return view('validar_afiliado');
    }


    public function validarAfiliado(Request $request)
    {
        $request->validate([
            'ci' => 'required|numeric',
        ]);

        $ci = $request->input('ci');
        $afiliado = Afiliado::where('ci', $ci)->first();

        if ($afiliado) {
            $especialidades = Especialidad::all();
            $medicos = Medico::all();
            foreach ($especialidades as $especialidad) {
                $medico = Medico::find($especialidad->medico_id);
                $hospital = Hospital::find($especialidad->hospital_id);

                $especialidad->medico = $medico;
                $especialidad->hospital = $hospital;
            }

            return view('mostrar_especialidades', ['afiliado' => $afiliado, 'especialidades' => $especialidades]);
        } else {
            return "Afiliado no encontrado. <a href='" . route('afiliados.index') . "'>Volver</a>";
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('afiliados.index');
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
    public function show(Afiliado $afiliado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Afiliado $afiliado)
    {
        //
    }
}
