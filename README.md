## Cinema API Laravel 7 

I created laravel project: 
- laravel new blog --auth 

- After created a database.

## Creat a Cinema API Project
Follow this steps

- composer require laravel/ui
- laravel new cinema_api --auth
- npm install
- npm run dev
- php artisan migrate

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## Create Migrations Folder

- php artisan make:migration create_cınemas_table --create=cinemas
- php artisan migrate
## Create Seeder Folder
- php artisan make:seeder CinemaSeeder
- 

  DB::table('cinemas')->insert([
            'cinema_image' => Str::random(10),
            'num_areas' => '1',
            'deleted_at' => null,
        ]);
- 
- php artisan db:seed 

## Create Controller Folder

- php artisan make:controller API/PhotoController --api 

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[npm install]**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- [UserInsights](https://userinsights.com)

venue_image

num_of_areas

num_of_seats

record_state

deleted_at