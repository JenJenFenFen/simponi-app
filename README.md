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

- Make sure you have a Composer, Node.js, and XAMPP. Download [Composer](https://getcomposer.org), [Node.js](https://nodejs.org/en/download), and [XAMPP](https://www.apachefriends.org/download.html) here.
- Open XAMPP, turn on the Apache and MySQL.
- Fork this repository.
- Install all dependencies.

    ```
    composer install 

    npm install
    ```
    
- Open PHPMyAdmin or [click](http://localhost/phpmyadmin) here. Create database named `simponi-app`.
- Rename ".env.example" file to ".env".
- Open the terminal, run `php artisan migrate:fresh` and `php artisan db:seed --class=RuleSeeder`.
- Open two terminals:
    - First terminal, run `npm run dev` to frontend.
    - Second terminal, run `php artisan serve` to backend.
- Open browser, type `localhost:8000/admin`.

## Note

- You can use another seeder like ClassnameSeeder, MaterialSeeder, and others. Run the seeder: `php artisan db:seed --class=NameSeeder`. This is order to run the seeder:
    - UserLoginSeeder
    - StudentIdentitySeeder or LecturerIdentitySeeder
    - ClassnameSeeder or MaterialSeeder
