<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Spatie\PdfToImage\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DocumentoController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:10000',
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'tipo' => 'required|string',
        ]);

        // Guardar el PDF
        $pdfPath = $request->file('pdf')->store('pdfs', 'public');

        // Convertir el PDF a imagen (opcional)
        $pdf = new Pdf(storage_path('app/public/' . $pdfPath));
        $imageName = pathinfo($pdfPath, PATHINFO_FILENAME) . '.jpg';
        $imagePath = 'pdf-images/' . $imageName;
        $pdf->saveImage(storage_path('app/public/' . $imagePath));

        // Guardar los detalles del documento en la base de datos
        $documento = Documento::create([
            'ruta_archivo' => $pdfPath,
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
            'tipo_documento' => $request->input('tipo'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Documento subido exitosamente');
    }

    public function edit($id)
    {
        $documento = Documento::findOrFail($id);
        return view('dashboard.edit-documento', compact('documento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'tipo' => 'required|string',
            // 'pdf' => 'file|mimes:pdf|max:2048', // Descomentar si el PDF puede ser actualizado
        ]);

        $documento = Documento::findOrFail($id);
        $documento->nombre = $request->input('nombre');
        $documento->fecha = $request->input('fecha');
        $documento->tipo_documento = $request->input('tipo');

        if ($request->hasFile('pdf')) {
            // Guardar el nuevo PDF si se ha subido uno
            $pdfPath = $request->file('pdf')->store('pdfs', 'public');
            $documento->ruta_archivo = $pdfPath;
        }

        $documento->save();

        return redirect()->route('dashboard')->with('success', 'Documento actualizado exitosamente');
    }

    




    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();

        return redirect()->route('dashboard')->with('success', 'Documento eliminado exitosamente');
    }


    public function index()
    {
        $documentos = Documento::all();
        return view('dashboard', compact('documentos'));
    }

    public function showAdmission()
{
    $documentos = Documento::all();
    return view('welcome', compact('documentos'));
}

}
