# UTS Rekayasa Web – Toko Alat Musik (Tema NIM 2)

Aplikasi web FRONTEND Laravel 13 + Blade + Bootstrap (lokal di `public/Bootstrap`).

- Nama / NIM : Yohanes / 2510011700332
- Tema       : Toko Alat Musik  → tabel `instruments`
- Kolom      : id, name, brand, price, description, image, type
- Database   : `db_uts_2510011700332` (MySQL)
- Gambar     : `public/assets/images/`

## Cara menjalankan (Laragon / XAMPP)

1. Nyalakan MySQL, lalu buat database kosong bernama `db_uts_2510011700332`
   (phpMyAdmin atau: `CREATE DATABASE db_uts_2510011700332;`).
2. Cek `.env` (default: user `root`, password kosong).
3. Jika folder `vendor` belum ada: `composer install`
4. Jalankan migration + seeder:
   ```
   php artisan migrate:fresh --seed
   ```
5. Jalankan server: `php artisan serve` → buka http://localhost:8000

## Halaman
| URL | Keterangan |
|-----|------------|
| `/` | Beranda (hero + daftar produk) |
| `/alat-musik` | Daftar alat musik (filter jenis) |
| `/alat-musik/{id}` | Detail alat musik |
