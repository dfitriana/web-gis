## Simple Web GIS (Geographic Information System)

## Tech Stack
- laravel v9.44.0  
- mySQL
- mapbox-gl v2.22.1
- tailwind css v3.2.4

Aplikasi yang digunakan ketika develop projek ini
- Visual Studio Code
- XAMPP 
- Table Plus
- Google Chrome

## Pengenalan Singkat
Aplikasi ini merupakan aplikasi wisata berbasis GIS dimana melalui website ini pengguna dapat mengetahui lokasi destinasi wisata tersebut pada peta. Selain itu pengguna yg telah memiliki akun juga dapat menambahkan destinasi wisata baru.

Page yang tersedia:
- /              --> homepage
- /login         --> login page
- /map           --> add destination page (must login to access this page)
- /detail/[id]   --> detail destination page

User Account yg dapat digunakan untuk login
- Username: iamAdmin@mail.com
- Password: adminnih

## Langkah - langkah
Setelah clone repo ini lakukan step berikut
1. Pastikan sebelumnya perangkat sudah terinstal php dan [composer](https://getcomposer.org/download/). 
Hack: Gunakan XAMPP untuk menggantikan step install php yang murni, karena lebih simple dan php yg murni membutuhkan banyak setup.
2. Buat database baru (mysql), contoh settingan pada table plus(disesuaikan dg .env):
    - name: webgis
    - host: 127.0.0.1
    - port: 3306
    - user: root
    - password:
    - database : webgis
3. Copy file .env.example jadiin .env dan sesuain settingan databasenya, contoh:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webgis
DB_USERNAME=root
DB_PASSWORD=
```
4. run 
```
composer update
```
5. run 
```
php artisan key:generate
```
6. run 
```
php artisan migrate
```
7. Agar gambar yang di input saat add destinasi dapat di tampilkan, jalankan

```
php artisan storage:link
```
* sebelumnya hapus folder /public/storage, kemudian jalankan script diatas lalu jika script sudah berhasil dijalankan, pindahkan/copy gambar yang ada dalam folder temporary ke /public/storage/img
* read this step at /public/temporary/read-this.txt
8. run
```
npm install
```
9. Untuk running dapat menggunakan tips ini, buka 3 tab terminal pada vs code, satu untuk install/menjalankan perintah lain, 2 lainnya untuk menjalankan BE dan FE,
 ```
 # for run BE
 php artisan serve
 # for run FE
 npm run dev
 ```

 Jika usai melakukan perubahan pada route dan config, gunakan script ini untuk merefresh code
 
 ```
 php artisan optimize
 ```

Have Fun and Good, luck! :D