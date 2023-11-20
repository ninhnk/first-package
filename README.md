## Install

```
php artisan vendor:publish --provider="Ninhnk\FirstPackage\Providers\RouteServiceProvider"
php artisan migrate
php artisan db:seed --class="Ninhnk\FirstPackage\Database\Seeders\AccountSeeder"
trong file config/auth tìm đến providers và thay 'model' => Ninhnk\FirstPackage\Models\Account::class,
php artisan ser
http://localhost:8000/sign-in
user name: ninhnk or admin
pass: 123qweASD
```
