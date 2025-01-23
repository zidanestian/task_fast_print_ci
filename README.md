# task_fast_print_ci
Tes programmer pada Fast Print dengan framework Codeigniter3 dan PostgreSQL


# Proyek Manajemen Produk

Proyek ini adalah aplikasi web sederhana untuk mengelola produk menggunakan CodeIgniter 3 dan PostgreSQL. Aplikasi ini memungkinkan pengguna untuk menambah, mengedit, menghapus, dan menampilkan produk. Data produk diambil dari API eksternal dan disimpan dalam database.

## Fitur

- Mengambil data produk dari API
- Menyimpan produk ke dalam database
- Menampilkan daftar produk
- Menambah, mengedit, dan menghapus produk
- Validasi form input
- Dropdown untuk kategori dan status yang diambil dari database

## Prerequisites

Sebelum memulai, pastikan Anda memiliki hal-hal berikut:

- PHP (versi 7.2 atau lebih tinggi)
- PostgreSQL
- Web server (seperti Apache atau Nginx)
- CodeIgniter 3

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi ini:

1. **Clone Repository**

   Clone repository ini ke dalam direktori lokal Anda:
   git clone https://github.com/zidanestian/task_fast_print_ci.git
   
2. **Konfigurasi Database**

    Konfigurasi database pada file ./application/config/database.php 
    Ubah bagian your_username dengan username database anda dan your_password dengan password database anda
    

3. **Jalankan Migration atau Import Database**

    Terdapat 2 cara untuk membuat table pada database
        1. Migration
            A. buat database dengan nama db_task_fast_print_ci
            B. akses aplikasi untuk melakukan migrate {url}/migrate
        2. Import Database
            A. Import file db_task_fast_print_ci.sql pada database anda (file berada pada root project)

4. **Ambil Data dari API**

    Untuk mengambil data dari API akses aplikasi dengan url {url}/fetch_data