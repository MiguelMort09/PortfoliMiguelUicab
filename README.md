# Personal Portfolio Project

This project is a multi-faceted web application designed to showcase my personal portfolio while also providing an admin
area for managing content. It leverages modern technologies to deliver a seamless user experience on both the frontend
and backend.

## Features

### Landing Page

- **Responsive Design**: Tailored to look great on all devices, from mobile phones to desktop computers.
- **Portfolio Showcase**: Highlights my work, including projects, achievements, and skills.
- **Interactive Elements**: Smooth animations and interactive components for better engagement.
- **Contact Form**: Easy-to-use form for visitors to reach out.

### Admin Area

- **Content Management**: Manage portfolio items, such as projects and blog posts, directly from the admin panel.
- **User Management**: Role-based access control for secure admin operations.
- **Analytics**: Overview of visitor metrics and engagement statistics.

## Tech Stack

### Backend

- **Laravel**: Robust framework for handling business logic and API endpoints.
- **Inertia.js**: Combines the backend and frontend seamlessly.
- **Laravel Sanctum**: Provides secure authentication.
- **MySQL**: Reliable database for structured data storage.

### Frontend

- **Vue 3**: Modern JavaScript framework for building interactive UIs.
- **Tailwind CSS**: Utility-first CSS framework for custom styling.
- **PrimeVue**: Rich set of UI components for consistent design.
- **Quill**: WYSIWYG editor for rich text content management.

### DevOps & Tooling

- **Vite**: High-performance build tool for faster development.
- **Typescript**: Ensures type safety and enhances code reliability.
- **Pint**: Automatically formats code for clean and consistent style.
- **Prettier**: Ensures consistent formatting in JavaScript and TypeScript files.

## Installation

### Prerequisites

- PHP >= 8.2
- Node.js >= 18.x
- MySQL >= 8.0

### Steps

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```
2. Install backend dependencies:
   ```bash
   composer install
   ```
3. Install frontend dependencies:
   ```bash
   npm install
   ```
4. Copy the `.env` file and configure:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Run migrations:
   ```bash
   php artisan migrate
   ```
7. Install and configure Inertia.js:
    - Install the Inertia.js Vue 3 adapter:
      ```bash
      npm install @inertiajs/vue3
      ```
    - Update your `app.js` to include Inertia:
      ```javascript
      import { createApp, h } from 'vue';
      import { createInertiaApp } from '@inertiajs/vue3';
 
      createInertiaApp({
          resolve: name => require(`./Pages/${name}`).default,
          setup({ el, App, props, plugin }) {
              createApp({ render: () => h(App, props) })
                  .use(plugin)
                  .mount(el);
          },
      });
      ```
    - Update your Laravel routes to use Inertia:
      ```php
      use Inertia\Inertia;
 
      Route::get('/', function () {
          return Inertia::render('Welcome', [
              'message' => 'Welcome to my portfolio!',
          ]);
      });
      ```

8. Start the development server:
   ```bash
   npm run dev
   ```
9. Serve the backend:
   ```bash
   php artisan serve
   ```

## Usage

### Landing Page

Access the landing page at `http://localhost:3000` (if using Vite).

### Admin Area

The admin panel is accessible at `/admin` after login. Use seeded credentials or register a new admin user.

## Future Enhancements

- Add real-time notifications using Laravel Echo and Pusher.js.
- Expand analytics to include detailed insights on user behavior.
- Integrate multi-language support with `laravel-lang/common`.

## License

This project is open-source and available under the MIT license.

---
Developed by [Your Name](https://your-portfolio-url.com) as part of my personal portfolio.

