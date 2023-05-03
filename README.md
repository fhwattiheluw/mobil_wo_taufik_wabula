# mobil_wo_taufik_wabula
>app mobil_wo_taufik_wabula di develop menggunakan [laravel 8](https://laravel.com/docs/8.x)

## configurasi awal app
### IP komputer
pastikan komputer yang menjadi server harus menggunakan ip static 192.168.1.1

### Akses app
+ jalankan xampp
+ start mysql pada xampp
+ Jalankan cmd pada folder mobil_wo_taufik_wabula
+ Selanjutnya masukan perintah berikut : ```php artisan serve``` untuk menjalankan server laravel 8

### Build database
+ masuk pada ```http://localhost/phpmyadmin``` dan buat database dengan nama **```p_larawed```**
+ buka cmd pada folder mobil_wo_taufik_wabula
+ ketik perintah berikut ```php artisan migrate:fresh --seed``` untuk (menjalankan seeders)[https://laravel.com/docs/8.x/seeding#running-seeders] dan tunggu hingga selesai

### Akun wo
+ email: ```pengguna1@mail.com``` password: ```password```
+ email: ```pengguna2@mail.com``` password: ```password```
+ email: ```pengguna3@mail.com``` password: ```password```

## Dokumentasi app
+ configurasi database terdapat pada file ```.env```
+ [migrate table](https://laravel.com/docs/8.x/migrations#tables) untuk membuat database dari laravel terdapat pada folder ```database\migrations```
+ [seeders](https://laravel.com/docs/8.x/seeding#writing-seeders) untuk menambahkan data dami secara otomatis dari laravel terdapat pada folder ```database\seeders```
+ lokasi file (controller)[https://laravel.com/docs/8.x/controllers] terdapat pada folder ```app\Http\Controllers```
+ lokasi file (model)[https://laravel.com/docs/8.x/eloquent] terdapat pada folder ```app\Models```
+ lokasi file assets terdapat pada folder ```public\assets```
+ lokasi file tampilan untuk interface user terdapat pada folder ```resources\views\user```
+ lokasi file tampilan untuk interface Wedding Organizer terdapat pada folder ```resources\views\wo```
+ lokasi file (route)[https://laravel.com/docs/8.x/routing] terdapat pada folder ```routes\web.php```
