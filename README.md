# mobil_wo_taufik_wabula
>app mobil_wo_taufik_wabula di develop menggunakan [laravel 8](https://laravel.com/docs/8.x)
# convert web ke apk
> untuk Wo projek dengan nama **auth_wo_taufik**, sedangkan untuk user projek dengan nama **user_wo_taufik**
+ untuk membuat apk dalam bentuk webview menggunakan bantuan [**creator.kodular.io**](https://creator.kodular.io/#6711221539569664/)
+ import file **.aia** yang didalam folder \apk\projek kodular
+ pada bagian **All Component** pilih **web_Viewer1**
+ pada bagian **properties**. Ubah **Home Url** sesuai dengan **IP Laptop**.
> contoh : jika ip laptop **192.169.209.3**, maka home url **http://192.169.209.3:8000/.../...**
+ Selanjutnya **Export > Android App (.Apk)**
# framework front-end
+ home wedding menggunakan https://materializecss.com/
+ dashboard user wo menggunakan https://getbootstrap.com/docs/5.3
# configurasi awal app

## Build database
+ masuk pada ```http://localhost/phpmyadmin``` dan buat database dengan nama **```p_larawed```**
+ buka **cmd** pada folder **mobil_wo_taufik_wabula**
+ ketik perintah berikut ```php artisan migrate:fresh --seed``` untuk [menjalankan seeders](https://laravel.com/docs/8.x/seeding#running-seeders) dan tunggu hingga selesai


## Akses app
+ jalankan xampp
+ start mysql pada **xampp**
+ Jalankan **cmd** pada folder **mobil_wo_taufik_wabula**
+ Selanjutnya masukan perintah berikut pada **cmd** : ```php artisan serve --host 0.0.0.0``` untuk menjalankan server laravel 8
+ silahkan akses app android
+ (opsi) untuk dapat dibuka lewat website akses ke url 	```192.168.1.100:8000```


## Akun wo
+ email: ```pengguna1@mail.com``` password: ```password```
+ email: ```pengguna2@mail.com``` password: ```password```
+ email: ```pengguna3@mail.com``` password: ```password```

## Dokumentasi app
+ configurasi database terdapat pada file ```.env```
+ [migrate table](https://laravel.com/docs/8.x/migrations#tables) untuk membuat database dari laravel terdapat pada folder ```database\migrations```
+ [seeders](https://laravel.com/docs/8.x/seeding#writing-seeders) untuk menambahkan data dami secara otomatis dari laravel terdapat pada folder ```database\seeders```
+ lokasi file [controller](https://laravel.com/docs/8.x/controllers) terdapat pada folder ```app\Http\Controllers```
+ lokasi file [model](https://laravel.com/docs/8.x/eloquent) terdapat pada folder ```app\Models```
+ lokasi file assets terdapat pada folder ```public\assets```
+ lokasi file tampilan untuk interface user terdapat pada folder ```resources\views\user```
+ lokasi file tampilan untuk interface Wedding Organizer terdapat pada folder ```resources\views\wo```
+ lokasi file [route](https://laravel.com/docs/8.x/routing) terdapat pada folder ```routes\web.php```
