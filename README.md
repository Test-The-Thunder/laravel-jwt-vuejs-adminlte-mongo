<p align="center"><a href="http://karbh.com" target="_blank"><img src="http://karbh.com/images/logo-10.png"></a></p>

- Note:- it's Doesn't mean that, VueJs and Jwt are Inter-Connect, It's only mean jwt is diff setup and Vuejs is Diff setup on same project;
## About 

Project is plane to Authenticate Api which is to be Used on Mobile applications. And Integrate Vuejs For WebApplication
Every time Client will need to send a Authenticaiton Token in header, without token no Api can Work.
token will verify whether the user is authentic or not.

- [Installing jwt-auth](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/).
- Make Custome [Middleware](https://www.redhat.com/en/topics/middleware/what-is-middleware#:~:text=Middleware%20is%20software%20that%20provides,all%20commonly%20handled%20by%20middleware.).

### Install Vuejs [Required NodeJS](https://nodejs.org/en/download/)
 
- composer require laravel/ui
- php artisan ui vue
- php artisan ui vue --auth (install vuejs with laravel auth)
- npm install
- npm run dev

### Install admin lte
- npm install admin-lte@^3.1 --save
- npm i vue-router vform vue-progressbar sweetalert2 vue-multiselect moment vue-excel-xlsx laravel-vue-pagination vue-loading-overlay

### setup Mongo
- composer require jenssegers/mongodb

file:- `.env`

```MONGODB_CONNECTION=mongodb
MONGODB_HOST=127.0.0.1
MONGODB_PORT=27017
MONGODB_DATABASE=test
MONGODB_USERNAME=
MONGODB_PASSWORD=
```

file:- `config/database.php`
```
'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('MONGODB_HOST', '127.0.0.1'),
            'port' => env('MONGODB_PORT', 27017),
            'database' => env('MONGODB_DATABASE', 'homestead'),
            'username' => env('MONGODB_USERNAME', 'homestead'),
            'password' => env('MONGODB_PASSWORD', 'secret'),
            'options' => [
                'database' => env('MONGODB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
            ],
        ],
```
## Resource
- Postman Collection Link - https://www.getpostman.com/collections/aeb132a0012f95356517

