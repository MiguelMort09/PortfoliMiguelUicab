<?php

namespace Database\Seeders;

use App\Enums\StatusJob;
use App\Models\Employment;
use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var Employment $employment1 */
        $employment1 = Employment::create([
            'company_name' => 'ONIXT ROBOTICS',
            'role' => 'Web Developer Jr',
            'description' => 'Desarrollé y desplegué aplicaciones web utilizando Laravel, abarcando desde la planificación detallada del desarrollo hasta la toma de requerimientos. Adicionalmente, impartí cursos de principios de programación a niños y adolescentes durante los fines de semana.',
            'date_init' => '2021-01-21',
            'date_finished' => '2021-07-21',
            'status' => StatusJob::CompletedJob
        ]);
        $employment1->technologies()->attach([31, 19, 21, 27, 29, 14, 9, 15]);

        $employment2 = Employment::create([
            'company_name' => 'Grupo Icarus S.A. de C.V',
            'role' => 'Desarrollador full stack',
            'description' => 'Desarrollé aplicaciones web a medida en PHP (legacy y modernas), implementando pasarelas de pago, facturación electrónica mediante API y reportes con JasperReports. Participé en la toma de requerimientos, planificación y desarrollo de user stories con SCRUM. Optimicé sistemas con lógica de negocio, dockerización de entornos y refactorización de procesos. También gestioné y resolví tickets de clientes, asegurando la mejora continua de los proyectos.',
            'date_init' => '2022-07-18',
            'date_finished' => '2023-11-15',
            'status' => StatusJob::CompletedJob
        ]);
        $employment2->technologies()->attach([2, 3, 6, 7, 9, 11, 13, 14, 15, 17, 18, 19, 20, 22, 27, 31, 34,]);

        $employment3 = Employment::create([
            'company_name' => 'Junkyard México',
            'role' => 'Desarrollador Laravel',
            'description' => 'Participé en el desarrollo de una aplicación CMDB utilizando Laravel, integrando tecnologías como Docker, APIs REST y MySQL. Colaboré en la migración del sistema en producción a su nueva versión, asegurando la compatibilidad y continuidad operativa. Este proyecto presentó el desafío de trabajar con un equipo multicultural, utilizando herramientas como Azure DevOps y Slack, siendo mi primer empleo con una empresa de Estados Unidos, lo que fortaleció mis habilidades técnicas y de colaboración internacional.',
            'date_init' => '2023-11-27',
            'date_finished' => '2024-02-29',
            'status' => StatusJob::CompletedJob
        ]);
        $employment3->technologies()->attach([1, 3, 5, 6, 7, 9, 11, 13, 14, 15, 17, 19, 20, 21, 27, 31, 34,]);

        $employment4 = Employment::create([
            'company_name' => 'Sahuro Consulting',
            'role' => 'Desarrollador Full Stack',
            'description' => 'Brindé consultoría en el desarrollo de aplicaciones web con servicios API REST para una empresa multinacional, utilizando herramientas como Azure DevOps para la gestión de proyectos bajo la metodología Scrum. Participé en la administración de servicios de intranet, integración con SAP y desarrollo de una aplicación móvil en Apache Cordova que se comunicaba con nuestro backend, garantizando una solución integral y eficiente para las necesidades del cliente.',
            'date_init' => '2023-11-20',
            'date_finished' => '2024-03-31',
            'status' => StatusJob::CompletedJob
        ]);
        $employment4->technologies()->attach([4, 5, 6, 7, 11, 14, 17, 25, 27, 31]);

    }
}
