# mobil_wo_taufik_wabula
>app mobil_wo_taufik_wabula di develop menggunakan [laravel 8](https://laravel.com/docs/8.x)

## configurasi awal app
### configurasi DB
=================================
terdapat di file .env <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=p_larawed
DB_USERNAME=root
DB_PASSWORD=
```
### IP komputer
pastikan komputer yang menjadi server harus menggunakan ip static 192.168.1.1

### Akses app
===============================
+ jalankan xampp
+ start mysql pada xampp
+ Jalankan cmd pada folder mobil_wo_taufik_wabula
+ Selanjutnya masukan perintah berikut : ```php artisan serve```

### Build database
+ masuk pada phpmyadmin dan buat database dengan nama **p_larawed**
+ buka cmd pada folder mobil_wo_taufik_wabula
+ ketik perintah berikut ```php artisan migrate:fresh --seed``` untuk (menjalankan seeders)[https://laravel.com/docs/8.x/seeding#running-seeders] dan tunggu hingga selesai

### Akun wo
+ email: ```pengguna1@mail.com``` password: ```password```
