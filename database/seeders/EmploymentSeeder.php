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
            'role' => 'Jr. Web Developer',
            'description' => 'I developed and deployed web applications using Laravel, covering everything from detailed development planning to requirements gathering. Additionally, I taught programming principles courses for kids and teens on weekends.',
            'date_init' => '2021-01-21',
            'date_finished' => '2021-07-21',
            'status' => StatusJob::CompletedJob
        ]);
        $employment1->technologies()->attach([31, 19, 21, 27, 29, 14, 9, 15]);

        $employment2 = Employment::create([
            'company_name' => 'Grupo Icarus S.A. de C.V',
            'role' => 'Full stack developer',
            'description' => 'I developed custom web applications in PHP (legacy and modern), implementing payment gateways, electronic invoicing through API and reports with JasperReports. I participated in the requirements gathering, planning and development of user stories with SCRUM. I optimized systems with business logic, dockerization of environments and refactoring of processes. I also managed and resolved customer tickets, ensuring continuous improvement of the projects.',
            'date_init' => '2022-07-18',
            'date_finished' => '2023-11-15',
            'status' => StatusJob::CompletedJob
        ]);
        $employment2->technologies()->attach([2, 3, 6, 7, 9, 11, 13, 14, 15, 17, 18, 19, 20, 22, 27, 31, 34,]);

        $employment2 = Employment::create([
            'company_name' => 'Junkyard Mexico',
            'role' => 'Laravel Developer',
            'description' => 'I participated in the development of a CMDB application using Laravel, integrating technologies such as Docker, REST APIs, and MySQL. I collaborated in the migration of the production system to its new version, ensuring compatibility and operational continuity. This project presented the challenge of working with a multicultural team, using tools such as Azure DevOps and Slack, being my first job with a company in the United States, which strengthened my technical and international collaboration skills.',
            'date_init' => '2023-11-27',
            'date_finished' => '2024-02-29',
            'status' => StatusJob::CompletedJob
        ]);
        $employment2->technologies()->attach([1, 3, 5, 6, 7, 9, 11, 13, 14, 15, 17, 19, 20, 21, 27, 31, 34,]);

        $employment4 = Employment::create([
            'company_name' => 'Sahuro Consulting',
            'role' => 'Full Stack Developer',
            'description' => "I provided consulting in the development of web applications with REST API services for a multinational company, using tools such as Azure DevOps for project management under the Scrum methodology. I participated in the administration of intranet services, integration with SAP and development of a mobile application in Apache Cordova that communicated with our backend, guaranteeing a comprehensive and efficient solution for the client's needs.",
            'date_init' => '2023-11-20',
            'date_finished' => '2024-03-31',
            'status' => StatusJob::CompletedJob
        ]);
        $employment4->technologies()->attach([4, 5, 6, 7, 11, 14, 17, 25, 27, 31]);
    }
}
