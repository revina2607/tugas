# CRUD Data Mahasiswa - PHP OOP
Project ini merupakan aplikasi sederhana CRUD (Create, Read, Update, Delete) Data Mahasiswa menggunakan PHP Native dengan konsep OOP (Object Oriented Programming) serta database MySQL.
Aplikasi ini dibuat untuk memenuhi tugas pembelajaran pemrograman web menggunakan struktur MVC sederhana.
---
## Fitur Utama
- Menampilkan data mahasiswa
- Menambahkan data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Menggunakan konsep OOP sederhana
- Koneksi database menggunakan MySQL
- Tampilan lebih rapi dan modern
---
## Teknologi yang Digunakan
- PHP Native
- MySQL
- XAMPP
- phpMyAdmin
- Visual Studio Code
- HTML + CSS
---
##  Struktur Folder Project
```bash id="a2d7k1"
tugas_kampus/
│
├── config/
│   └── Database.php
│
├── controllers/
│   └── MahasiswaController.php
│
├── models/
│   └── Mahasiswa.php
│
├── views/
│   ├── list.php
│   ├── tambah.php
│   └── edit.php
│
└── index.php

⸻

 Database

Nama Database

kampusss

Nama Tabel

mahasiswa

Struktur Tabel SQL

CREATE TABLE mahasiswa (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(100) NOT NULL,
    JURUSAN VARCHAR(100) NOT NULL
);

⸻

⚙️ Cara Menjalankan Project

1. Clone Repository

git clone https://github.com/username/crud-mahasiswa-php-oop.git

Atau download ZIP project lalu extract.

⸻

2. Pindahkan Folder ke htdocs

Simpan folder project ke:

C:\xampp\htdocs\

Contoh:

C:\xampp\htdocs\tugas_kampus

⸻

3. Jalankan XAMPP

Aktifkan:

* Apache
* MySQL

⸻

4. Import Database

* Buka phpMyAdmin
* Buat database baru dengan nama:

kampusss

* Jalankan query SQL berikut:

CREATE TABLE mahasiswa (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(100) NOT NULL,
    JURUSAN VARCHAR(100) NOT NULL
);

⸻

5. Akses Project di Browser

Buka:

http://localhost/tugas_kampus

⸻

 Tampilan Aplikasi

Halaman Data Mahasiswa

Menampilkan seluruh data mahasiswa beserta tombol:

* Edit
* Hapus
* Tambah Data

⸻

Halaman Tambah Data

Form input untuk menambahkan data mahasiswa baru.

⸻

Halaman Edit Data

Form untuk mengubah data mahasiswa yang sudah tersimpan.

⸻

 Author

Revina Aureliya Juliani

Project tugas CRUD Data Mahasiswa menggunakan PHP OOP.

⸻

Tujuan Project

Project ini dibuat untuk:

* memahami konsep CRUD
* belajar struktur MVC sederhana
* memahami koneksi database MySQL dengan PHP
* menerapkan OOP dasar pada project web

⸻

 Notes

Project ini cocok untuk tugas kampus, latihan dasar PHP Native, serta pemahaman awal tentang sistem CRUD menggunakan OOP.
