<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicoController extends Controller
{
     // set index page view
     public function index()
     {
        $medicos = Medico::all();
         return view('medicos.index', compact('medicos'));
     }
 
     // handle fetch all eamployees ajax request
     public function fetchAll()
     {
         $emps = Medico::all();
         $output = '';
         if ($emps->count() > 0) {
             $output .= '<table class="table table-striped table-sm text-center align-middle">
             <thead>
               <tr>
                 <th>ID</th>
                
                 <th>Nombre</th>
                 <th>CI</th>
                 <th>Matricula</th>
                
                 <th>Accion</th>
               </tr>
             </thead>
             <tbody>';
             foreach ($emps as $emp) {
                 $output .= '<tr>
                 <td>' . $emp->id . '</td>
                 
                 <td>' . $emp->nombre_completo . '</td>
                 <td>' . $emp->ci . '</td>
                 <td>' . $emp->matricula . '</td>
                 
                 <td>
                   <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>
 
                   <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                 </td>
               </tr>';
             }
             $output .= '</tbody></table>';
             echo $output;
         } else {
             echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
         }
     }
 
     // handle insert a new employee ajax request
     public function store(Request $request)
     {
         $file = $request->file('avatar');
         $fileName = time() . '.' . $file->getClientOriginalExtension();
         $file->storeAs('public/images', $fileName);
 
         $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];
         Medico::create($empData);
         return response()->json([
             'status' => 200,
         ]);
     }
 
     // handle edit an employee ajax request
     public function edit(Request $request)
     {
         $id = $request->id;
         $emp = Medico::find($id);
         return response()->json($emp);
     }
 
     // handle update an employee ajax request
     public function update(Request $request)
     {
        //  $fileName = '';
         $emp = Medico::find($request->emp_id);
        //  if ($request->hasFile('avatar')) {
        //      $file = $request->file('avatar');
        //      $fileName = time() . '.' . $file->getClientOriginalExtension();
        //      $file->storeAs('public/images', $fileName);
        //      if ($emp->avatar) {
        //          Storage::delete('public/images/' . $emp->avatar);
        //      }
        //  } else {
        //      $fileName = $request->emp_avatar;
        //  }
 
         $empData = ['nombre_completo' => $request->nombre_completo, 'ci' => $request->ci, 'matricula' => $request->matricula];
 
        //  $emp->update($empData);
        //  return response()->json([
        //      'status' => 200,
        //  ]);
         try {
            $emp->update($empData);
            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
     }
 
     // handle delete an employee ajax request
     public function delete(Request $request)
     {
         $id = $request->id;
         Medico::destroy($id);
        //  $emp = Medico::find($id);
        //  if (Storage::delete('public/images/' . $emp->avatar)) {
        //     Medico::destroy($id);
        //  }
     }


}