<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{

    public function welcome(): Response
    {
        return Inertia::render('Welcome');
    }

    public function dashboard(): Response
    {
        $assetsPath = public_path('assets/icons');
        $directories = File::directories($assetsPath); // Obtiene subdirectorios
        $output = [];

        foreach ($directories as $directory) {
            // Ruta relativa
            $relativeDir = str_replace(array(public_path(), '\\'), array('', '/'), $directory); // Normaliza las barras

            $files = File::files($directory); // Archivos en el subdirectorio
            $fileList = [];

            foreach ($files as $file) {
                if (in_array($file->getExtension(), ['png', 'svg', 'jpg', 'jpeg', 'gif'])) {
                    $relativePath = str_replace(array(public_path(), '\\'), array('', '/'), $file->getPathname()); // Normaliza las barras
                    $fileList[] = asset(ltrim($relativePath, '/'));
                }
            }

            // Agregar al resultado si hay archivos válidos
            if (!empty($fileList)) {
                $output[] = [
                    'name' => basename($relativeDir), // Nombre del directorio
                    'path' => ltrim($relativeDir, '/'), // Ruta relativa
                    'files' => $fileList, // Lista de URLs
                ];
            }
        }

        return Inertia::render('Dashboard', ['fileList' => $output]);
    }

}
