<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;

class PdfController extends Controller
{
    public function upload(Request $request)
    {
        // Validar la subida del archivo PDF
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        // Guardar el PDF en la carpeta storage/app/public/pdf
        $pdfFile = $request->file('pdf');
        $pdfPath = $pdfFile->storeAs('pdf', $pdfFile->getClientOriginalName(), 'public');

        // Convertir el PDF a imagen
        $this->convertPdfToImage(storage_path('app/public/' . $pdfPath));

        return back()->with('success', 'PDF uploaded and converted to image successfully.');
    }

    private function convertPdfToImage($pdfPath)
    {
        $pdf = new Pdf($pdfPath);

        // Convertir la primera página del PDF a imagen y guardarla en public/pdf-images
        $pdf->setPage(1)
            ->saveImage(public_path('pdf-images/' . basename($pdfPath, '.pdf') . '.jpg'));
    }
}
