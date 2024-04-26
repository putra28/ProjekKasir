<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Sistem Point of Sale (POS)

Ini adalah sistem Point of Sale (POS) yang dibangun menggunakan framework Laravel untuk mengelola transaksi penjualan dan inventaris. Sistem ini mendukung dua peran pengguna: admin dan kasir.

## Fitur

### Panel Admin

- **Dashboard**: Menampilkan data penjualan dan informasi akun.
- **Manajemen Kategori**: Operasi CRUD untuk kategori produk.
- **Manajemen Produk**: Operasi CRUD untuk produk, dengan kemampuan untuk mencetak laporan produk.
- **Manajemen Pengguna**: Operasi CRUD untuk akun admin dan kasir.
- **Manajemen Penjualan**: Mengelola transaksi penjualan, mencetak struk, menghapus transaksi, dan mencetak laporan penjualan.
- **Manajemen Anggota**: Operasi CRUD untuk data anggota.

### Panel Kasir

- **Dashboard**: Menampilkan data penjualan dan informasi akun untuk kasir yang login.
- **Transaksi**: Memungkinkan kasir melakukan transaksi penjualan dengan menambahkan produk ke keranjang, menyesuaikan jumlah, memilih anggota, memasukkan total pembayaran, dan mengirimkan transaksi.
- **Tambah Anggota**: Memungkinkan kasir menambahkan data anggota baru.
- **Manajemen Produk**: Memungkinkan kasir mengelola stok produk.
- **Manajemen Penjualan**: Mengelola transaksi penjualan, mencetak struk, menghapus transaksi, dan mencetak laporan penjualan.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/putra28/ProjekKasir.git

2. Masuk ke Direktori Projek:
   cd ProjekKasir
   
4. Install Dependensi:
   Composer install
   
6. Buat file .env dengan menyalin file .env.example:
   cp .env.example .env

8. Konfigurasi koneksi database di file .env:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ujikompos
   DB_USERNAME=putra
   DB_PASSWORD=putra
   
10. Import SQL ke XAMPP
    
12. Jalankan Aplikasi:
    php artisan serve
    
13. Akses aplikasi di peramban web Anda pada `http://localhost:8000`

## Akun Default

- **Admin**:
- Nama Pengguna: admin
- Kata Sandi: admin123

- **Kasir**:
- Nama Pengguna: kasir
- Kata Sandi: kasir123

 
 
