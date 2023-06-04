# Penjelasan dari langkah-langkah praktikum (PHP Framework)

### 1. Mengaktifkan ekstentsi :
• php-json ekstension untuk bekerja dengan JSON;

• php-mysqlnd native driver untuk MySQL;

• php-xml ekstension untuk bekerja dengan XML;

• php-intl ekstensi untuk membuat aplikasi multibahasa;

• libcurl (opsional), jika ingin pakai Curl.


#### Cara mengaktifkannya melalui XAMPP Control Panel, pada bagian Apache klik Config-> PHP.ini

<img width="532" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/0d192f43-3471-4e1e-8200-41feaa20faac">


#### Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

<img width="610" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/2717e850-58d2-421d-8fa4-5ede640c2fde">


### 2. Melakukan instalasi Codeigniter 4

#### Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer.

![image](https://github.com/indahles56/Lab7Web/assets/127643042/2285a934-54e6-4387-a2d5-4100699b47cd)

#### Extrak file zip Codeigniter ke direktori htdocs/lab11_ci dan ubah nama direktory framework-4.x.xx menjadi ci4.

<img width="478" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/4ec82029-97b5-4d03-9be1-beba9c40643b">

#### Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![image](https://github.com/indahles56/Lab7Web/assets/127643042/297d22a9-d7a7-4854-9d4b-9c7bc975309b)


### 3. Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:

<img width="455" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/4d53859d-d679-4653-9130-6c2e38e74b51">


### 4. Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![image](https://github.com/indahles56/Lab7Web/assets/127643042/5eeb1227-e097-4793-8e52-f60069599271)

#### Mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development untuk memudahkan mengetahui jenis errornya.

#### Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development.

<img width="676" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/3885ce4d-dd21-48ab-896c-6fee17052136">


### 5. Contoh error yang terjadi pada file app/Controller/Home.php jika menghilangkan titik koma pada akhir kode.

![image](https://github.com/indahles56/Lab7Web/assets/127643042/8cccb9de-e8f9-43fc-af1f-c21555b1c88b)


### 6. Membuat Route Baru
Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request.

#### Menambahkan kode berikut pada Routes.php

<img width="283" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/0e87ea54-40ae-4d6a-b1a3-59dcb3e19f8e">

#### Cara untuk mengetahui route yang ditambahkan sudah benar dengan buka CLI dan jalankan perintah "php spark routes"

<img width="675" alt="image" src="https://github.com/indahles56/Lab7Web/assets/127643042/66a97f58-aff0-4f2b-a792-a45a832451f0">

#### Akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about


### 7. Membuat Controller
Controller adalah class atau script yang bertanggung jawab merespon sebuah request.

#### Buat file baru dengan nama page.php pada direktori Controller

#### Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.

![image](https://github.com/indahles56/Lab7Web/assets/127643042/7e8ce502-e2c1-4a3b-b142-c499c57c0062)


### 8. Membuat Layout Web dengan CSS

#### Buat file css pada direktori public dengan nama style.css

#### Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

#### Selanjutnya mengakses alamat url http://localhost:8080/home dan akan muncul tampilan seperti berikut
![image](https://github.com/indahles56/Lab7Web/assets/127643042/1e37abba-5193-4ad8-8248-b5a7779f1240)


### 8. Membuat View 
#### Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.
Yang akan menampilkan seperti ini :

![Screenshot (576)](https://github.com/indahles56/Lab7Web/assets/127643042/fce57a15-79de-4319-8bf6-84dd79889f28)


#### Menambahkan beberapa data pada database agar dapat ditampilkan datanya.

![Screenshot (578)](https://github.com/indahles56/Lab7Web/assets/127643042/989ad996-51ab-444d-ac22-86fd4a09c56d)


#### Membuat Routing untuk artikel detail

![Screenshot (577)](https://github.com/indahles56/Lab7Web/assets/127643042/89a95976-e02f-4d16-94c4-943b932b2b71)


### 9. Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Yang akan menampilkan seperti ini :

![image](https://github.com/indahles56/Lab7Web/assets/127643042/dfc1349c-475c-4d12-b7df-472c032e74a9)


### 10. Menambah Data Artikel
Yang akan menampilkan seperti ini :

![Screenshot (582)](https://github.com/indahles56/Lab7Web/assets/127643042/08e02987-7713-489c-89a5-182fa1118fcf)


### 11. Mengubah Data
Yang akan menampilkan seperti ini :

![Screenshot (583)](https://github.com/indahles56/Lab7Web/assets/127643042/c30d02a2-0888-4a96-821a-34e4d3d64f41)


### 12. Membuat Tampilan Login
Membuat codingan tampilan login pada vscode. Kemudian untuk menampilkan tampilan login dengan cara mengakses url http://localhost:8080/user/login .
Yang akan menamilkan seperti ini :

![image](https://github.com/indahles56/Lab7Web/assets/127643042/307361f1-f843-48a0-aead-bc19eec75896)


### 13. Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login. 
Yang akan menampilkan seperti ini :

![image](https://github.com/indahles56/Lab7Web/assets/127643042/c1e3670c-6175-4dcc-a343-2d8c72be9ab0)




