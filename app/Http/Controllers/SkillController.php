<?php

namespace App\Http\Controllers;

use App\Enums\TypeSkill;
use App\Enums\TypeTechnology;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Inertia\Inertia;


class SkillController extends Controller
{
    public function index()
    {
        return Inertia::render('Skills/page', [
            'skills' => Skill::all(),
            'typesSkill' => array_map(
                fn($case) => [
                    'label' => __($case->name),
                    'value' => $case->value
                ],
                TypeSkill::cases()
            )
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            $slug = Str::slug($request->input('name', ''));
            $validated = $request->validate([
                'name' => ['string'],
                'slug' => ['unique:skills,slug'],
                'level' => ['integer', 'min:1', 'max:100'],
                'type' => [Rule::enum(TypeTechnology::class)],
                'link_icon' => ['url'],
            ]);

            DB::beginTransaction();

            $skill = new Skill();
            $skill->name = $validated['name'];
            $skill->slug = $slug;
            $skill->level = $validated['level'];
            $skill->type = $validated['type'];
            $skill->link_icon = $validated['link_icon'] ?? null; // Si no se proporciona, lo dejamos como null
            $skill->save();
            DB::commit();

            return redirect()->route('skills.index')
                ->with('success', 'Skill created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating skill: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors($e->getMessage())
                ->withInput();

        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function icons()
    {
        $assetsPath = public_path('assets/icons');
        $directories = File::directories($assetsPath); // Obtiene subdirectorios
        $output = [];

        foreach ($directories as $directory) {
            // Ruta relativa
            $relativeDir = str_replace(array(public_path(), '\\'), array('', '/'), $directory); // Normaliza las barras

            $files = File::files($directory); // Archivos en el subdirectorio

            foreach ($files as $file) {
                // Verifica si el archivo tiene una de las extensiones permitidas
                if (in_array(strtolower($file->getExtension()), ['png', 'svg', 'jpg', 'jpeg', 'gif'])) {

                    // Obtiene el nombre del archivo sin la ruta
                    $relativePath = str_replace(array(public_path(), '\\'), array('', '/'), $file->getPathname()); // Normaliza las barras

                    // Verifica si el nombre del archivo contiene 'original'
                    if (str_contains($file->getFilename(), 'original')) {
                        // Si contiene 'original', lo agrega a la lista
                        $fileUri = asset(ltrim($relativePath, '/'));
                        $output[] = [
                            'name' => basename($relativeDir), // Nombre del directorio
                            'url' => $fileUri
                        ];
                        break; // Sale del ciclo después de agregar el primer archivo que cumpla con la condición
                    }
                }
            }

        }

        return response()->json($output);
    }
}
