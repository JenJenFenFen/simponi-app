## About Portfolio

I have created a university website inspired by Simponi at Multi Data University in Palembang. This website assists students and lecturers in accessing various information or annoucements,  viewing class schedule, assigning tasks to student, and grading the assignments. The tech and framework I used:

- [Laravel 10](https://laravel.com/docs/10.x).
- [Tailwind](https://tailwindcss.com/docs/installation).
- [Flowbite](https://flowbite.com/docs/getting-started/quickstart).
- [JQuery](https://api.jquery.com).
- XAMPP.
- MySQL.

**Still under development**

## How to use

- Make sure you have a Composer and Node.js.
- Open XAMPP, turn on the Apache and MySQL.
- Fork this repository.
- Install all dependencies.
    ```
    composer install 

    npm install
    ```
- Open PHPMyAdmin, create database named `simponi-app`.
- Open the terminal, run `php artisan migrate:fresh` and `php artisan db:seed --class=RuleSeeder`.
- Open two terminals:
    - First terminal, run `npm run dev` to turn on the Vite.
    - Second terminal, run `php artisan server` to run the server.
- Open browser, type `localhost:8000/admin`.
