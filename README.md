[readme_md.md](https://github.com/user-attachments/files/34325879/readme_md.md)
# 🏰 Grimoire Vault - Mini Digital Library (Tugas Pemrograman Web)

Repositori ini berisi *source code* untuk Tugas Terstruktur Pemrograman Web: Pengembangan Sistem Informasi Perpustakaan Digital Mini. Aplikasi ini dibangun menggunakan PHP Native dan MySQL dengan mengusung tema **Magic / RPG Game**.

## 👨‍💻 Identitas Mahasiswa
- **Nama:** [Isi Nama Lengkap Kamu]
- **NPM / NIM:** [Isi NPM/NIM Kamu]
- **Program Studi:** Sistem Informasi

## 🎥 Video Demo Aplikasi
[Klik di sini untuk menonton demo aplikasi di YouTube](https://youtube.com/...) *(Ganti link ini dengan link video YouTube kamu)*

---

## ⚙️ Fitur Aplikasi
Sistem ini telah memenuhi seluruh kriteria dan logika bisnis yang diminta:
1. **Autentikasi & Keamanan:** Login menggunakan *Session* dan fitur "Remember Me" menggunakan *Cookie*, serta fitur Logout.
2. **CRUD Lengkap:** Create, Read, Update, dan Delete data "Grimoire" (Buku).
3. **Manajemen File:** Upload sampul buku (validasi ekstensi `.jpg/.png` dan maksimal ukuran 2MB), serta auto-hapus file fisik saat data buku dihapus.
4. **Logika Bisnis Khusus:** Menggunakan *Ternary Operator* (if-else) untuk mengubah label status stok otomatis (Tersedia / Dipinjam).

---

## 🗄️ Struktur Tabel Database (`db_magic_library`)

Aplikasi ini menggunakan dua buah tabel. File *dump* database tersedia di file `db_perpustakaan.sql`.

### 1. Tabel `users`
Digunakan untuk menyimpan data akun Admin/Mage.

| Nama Kolom | Tipe Data    | Keterangan |
| :---       | :---         | :---       |
| `id`       | INT (11)     | Primary Key, Auto Increment |
| `username` | VARCHAR(50)  | Username untuk login |
| `password` | VARCHAR(255) | Password (di-hash menggunakan MD5) |

### 2. Tabel `grimoire`
Digunakan untuk menyimpan data master buku (grimoire).

| Nama Kolom | Tipe Data    | Keterangan |
| :---       | :---         | :---       |
| `id`       | INT (11)     | Primary Key, Auto Increment |
| `judul`    | VARCHAR(100) | Nama Grimoire |
| `kategori` | VARCHAR(50)  | Elemen sihir buku tersebut |
| `penulis`  | VARCHAR(100) | Penyusun/Penyihir buku |
| `tahun`    | INT (4)      | Tahun penemuan |
| `stok`     | INT (11)     | Jumlah ketersediaan buku |
| `sampul`   | VARCHAR(255) | Nama file fisik gambar (disimpan di folder `/uploads`) |

---

## 📸 Screenshot Aplikasi

*(Cara mengisi: Tarik dan lepas (drag-and-drop) file gambar screenshot kamu dari komputer ke dalam area edit README ini di GitHub, atau ganti URL di dalam kurung dengan path gambar kamu)*

### 1. Halaman Login
![Screenshot Halaman Login](path/to/gambar-login.png)

### 2. Halaman Dashboard (Read & Tabel CRUD)
![Screenshot Halaman Dashboard](path/to/gambar-dashboard.png)

### 3. Halaman Tambah Grimoire (Create & Upload)
![Screenshot Halaman Tambah](path/to/gambar-tambah.png)

---
*Dibuat untuk memenuhi Tugas Mata Kuliah Pemrograman Web.*
