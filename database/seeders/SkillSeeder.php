<?php

namespace Database\Seeders;

use App\Enums\TypeTechnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
                [
                    'name' => 'Alpine JS',
                    'slug' => Str::slug('alpine js'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/alpinejs/alpinejs-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Amazon Web Services',
                    'slug' => Str::slug('amazon web services'),
                    'type' => TypeTechnology::type_cloud,
                    'link_icon' => '/assets/icons/amazonwebservices/amazonwebservices-original-wordmark.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Apache',
                    'slug' => Str::slug('apache'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/apache/apache-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Axios',
                    'slug' => Str::slug('axios'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/axios/axios-plain.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Azure DevOps',
                    'slug' => Str::slug('azure devops'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/azuredevops/azuredevops-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Bash',
                    'slug' => Str::slug('bash'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/bash/bash-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Bootstrap',
                    'slug' => Str::slug('bootstrap'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/bootstrap/bootstrap-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Cloudflare',
                    'slug' => Str::slug('cloudflare'),
                    'type' => TypeTechnology::type_cloud,
                    'link_icon' => '/assets/icons/cloudflare/cloudflare-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Composer',
                    'slug' => Str::slug('composer'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/composer/composer-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'C#',
                    'slug' => Str::slug('c#'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/csharp/csharp-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'CSS3',
                    'slug' => Str::slug('css3'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/css3/css3-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Digital Ocean',
                    'slug' => Str::slug('digital ocean'),
                    'type' => TypeTechnology::type_cloud,
                    'link_icon' => '/assets/icons/digitalocean/digitalocean-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Docker',
                    'slug' => Str::slug('docker'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/docker/docker-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'GitHub',
                    'slug' => Str::slug('github'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/github/github-original-negative.svg',
                    'level' => 80
                ],
                [
                    'name' => 'HTML5',
                    'slug' => Str::slug('html5'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/html5/html5-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Java',
                    'slug' => Str::slug('java'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/java/java-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'JavaScript',
                    'slug' => Str::slug('javascript'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/javascript/javascript-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'jQuery',
                    'slug' => Str::slug('jquery'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/jquery/jquery-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Laravel',
                    'slug' => Str::slug('laravel'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/laravel/laravel-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Linux',
                    'slug' => Str::slug('linux'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/linux/linux-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Livewire',
                    'slug' => Str::slug('livewire'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/livewire/livewire-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'MariaDB',
                    'slug' => Str::slug('mariadb'),
                    'type' => TypeTechnology::type_database,
                    'link_icon' => '/assets/icons/mariadb/mariadb-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Markdown',
                    'slug' => Str::slug('markdown'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/markdown/markdown-original-negative.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Maven',
                    'slug' => Str::slug('maven'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/maven/maven-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Microsoft SQL Server',
                    'slug' => Str::slug('microsoft sql server'),
                    'type' => TypeTechnology::type_database,
                    'link_icon' => '/assets/icons/microsoftsqlserver/microsoftsqlserver-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'MongoDB',
                    'slug' => Str::slug('mongodb'),
                    'type' => TypeTechnology::type_database,
                    'link_icon' => '/assets/icons/mongodb/mongodb-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'MySQL',
                    'slug' => Str::slug('mysql'),
                    'type' => TypeTechnology::type_database,
                    'link_icon' => '/assets/icons/mysql/mysql-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Next.js',
                    'slug' => Str::slug('next.js'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/nextjs/nextjs-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Nginx',
                    'slug' => Str::slug('nginx'),
                    'type' => TypeTechnology::type_devops,
                    'link_icon' => '/assets/icons/nginx/nginx-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Node.js',
                    'slug' => Str::slug('node.js'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/nodejs/nodejs-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'PHP',
                    'slug' => Str::slug('php'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/php/php-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Python',
                    'slug' => Str::slug('python'),
                    'type' => TypeTechnology::type_backend,
                    'link_icon' => '/assets/icons/python/python-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'React',
                    'slug' => Str::slug('react'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/react/react-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Sass',
                    'slug' => Str::slug('sass'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/sass/sass-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'TypeScript',
                    'slug' => Str::slug('typescript'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/typescript/typescript-original.svg',
                    'level' => 80
                ],
                [
                    'name' => 'Vue.js',
                    'slug' => Str::slug('vue.js'),
                    'type' => TypeTechnology::type_frontend,
                    'link_icon' => '/assets/icons/vuejs/vuejs-original.svg',
                    'level' => 80
                ],
            ]
        );
    }
}
