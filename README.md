<p align="center">
    <a href="https://github.com/LuthfiMeteor" target="_blank"><img src="https://github.com/LuthfiMeteor/laravel-Ujikom-2023/assets/106295051/487a4e49-78a7-47b6-89e4-b1a6ebf8e0fb" width="120"></a>
</p>

## Tentang Aplikasi

Sistem Point of Sale (POS) ini dibangun menggunakan framework Laravel untuk mengelola transaksi penjualan dan inventaris. Sistem ini mendukung dua peran pengguna: admin dan kasir.

### Beberapa Fitur yang tersedia:
- Panel Admin :
  - Dashboard
    - Menampilkan Data penjualan dan informasi akun
  - Data Kategori
    - Operasi CRUD untuk Kategori Produk
  - Data Produk
    - Operasi CRUD untuk data produk
    - Kemampuan untuk mencetak laporan produk
  - Data Petugas
    - Operasi CRUD untuk akun admin dan kasir
  - Data Penjualan
    - Mengelola transaksi penjualan
    - Mencetak struk penjualan
    - Menghapus transaksi
    - Mencetak laporan penjualan
  - Data Member
    - Operasi CRUD untuk data member

- Panel Kasir :
  - Dashboard
    - Menampilkan Data penjualan dan informasi akun
  - Transaksi
    - Memungkinkan kasir melakukan transaksi penjualan dengan menambahkan produk ke keranjang
    - Menyesuaikan jumlah data keranjang
    - Memilih member yang membeli
    - Memasukkan total pembayaran
    - Mengirimkan transaksi
  - Tambah Member
    - Memungkinkan kasir menambahkan data member baru
  - Data Produk
    - Memungkinkan kasir untuk mengelola stok produk
  - Data Penjualan
    - Mengelola transaksi penjualan
    - Mencetak struk penjualan
    - Mencetak laporan penjualan

## Instalasi
#### Via Git
```bash
git clone https://github.com/putra28/ProjekKasir.git
```

### Download ZIP
[Link](https://github.com/putra28/ProjekKasir/archive/refs/heads/main.zip)

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikompos
DB_USERNAME=putra
DB_PASSWORD=putra
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:7ny8i06U6BGjRyeIDxeiJ1Oz3+SLjK3QIDaeesQdqWo=
APP_DEBUG=true
APP_URL=http://localhost
```
Generate key
```bash
php artisan key:generate
```
Import Manual Database ke XAMPP
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```
```bash
USERNAME ADMIN : admin
PASSWORD ADMIN : admin123

USERNAME KASIR : kasir
PASSWORD KASIR : kasir123
```
## License

[MIT license](https://opensource.org/licenses/MIT)
