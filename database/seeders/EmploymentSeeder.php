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
            'description' => 'En Onixt Robótica, mi primer empleo formal como programador, enfrenté diversos desafíos que no solo influyeron en mi desarrollo profesional, sino también en mi crecimiento personal. Este período me ayudó a mejorar mi toma de decisiones, a aprender a generar requerimientos y a gestionar mi trabajo de manera autónoma. Además, tuve que enfrentar el control de emociones en el entorno laboral debido a mi falta de experiencia en las tecnologías y en el desarrollo de software.',
            'date_init' => '2021-01-21',
            'date_finished' => '2021-07-21',
            'status' => StatusJob::CompletedJob
        ]);
        $employment1->technologies()->attach([31, 19, 21, 27, 29, 14, 9, 15]);

        $employment2 = Employment::create([
            'company_name' => 'Grupo Icarus S.A. de C.V',
            'role' => 'Desarrollador full stack',
            'description' => 'Durante mi tiempo en Grupo Icarus, además de consolidar mis conocimientos previos en PHP, Laravel, base de datos relacionales y no relacionales, Java Script, tuve la oportunidad de adquirir nuevas habilidades y conocimientos en la administración de servidores y el mantenimiento de plataformas. Gracias al reconocimiento de mis superiores y a la confianza depositada en mí, pude desempeñar roles de administrador en solitario o colaborar en diversos proyectos. Mis responsabilidades abarcaron desde apoyar en estimaciones y participar en reuniones con clientes hasta la planificación de proyectos. En el aspecto técnico, trabajé con nuevas tecnologías como Jaspers Reports, servicios de facturación y pasarelas de pago. Esta experiencia no solo contribuyó a mi crecimiento profesional, sino también personal, al influir en mis habilidades y valores.',
            'date_init' => '2022-07-18',
            'date_finished' => '2023-11-15',
            'status' => StatusJob::CompletedJob
        ]);
        $employment2->technologies()->attach([2, 3, 6, 7, 9, 11, 13, 14, 15, 17, 18, 19, 20, 22, 27, 31, 34,]);

        $employment3 = Employment::create([
            'company_name' => 'Junkyard México',
            'role' => 'Desarrollador Laravel',
            'description' => 'Durante mi tiempo en Junkyar, tuve mi primer empleo remoto, lo cual significó una experiencia enriquecedora al trabajar con personas de diversas nacionalidades. Aunque inicialmente la comunicación presentó un desafío, con el tiempo logramos superarlo. Trabajar con tecnologías conocidas fue beneficioso, ya que pude expandir mis conocimientos. El proyecto en el que colaboré fue de gran envergadura, lo que también supuso un desafío adicional.',
            'date_init' => '2023-11-16',
            'date_finished' => '2024-02-28',
            'status' => StatusJob::CompletedJob
        ]);
        $employment3->technologies()->attach([1, 3, 5, 6, 7, 9, 11, 13, 14, 15, 17, 19, 20, 21, 27, 31, 34,]);

    }
}
