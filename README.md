# ⚡ Web Proxy Haskell — Pekan Ilkomerz 62

> **"Web made for Proxy Haskell in Pekan Ilkomerz 62 by Himalkom IPB"**

The official profile and documentation website for the **Proxy Haskell** group as part of the **Pekan Ilkomerz 62** program, organized by **Himalkom IPB** (Computer Science Student Association, IPB University).

Designed with a modern *retro-futuristic cyber tech* aesthetic, blending deep dark violet tones with warm sand-gold accents (`#e0d3ac`), techno-inspired typography (*Mokoto, VT323, Orbitron*), and interactive component animations.

---

## 🛠️ Tech Stack & Technologies

This project is built using modern web development tools:

- **Backend Framework**: [Laravel 12 / 11](https://laravel.com)
- **Frontend Tooling & Bundler**: [Vite](https://vitejs.dev)
- **CSS Styling**: [Tailwind CSS v4](https://tailwindcss.com)
- **State & Carousel Reactivity**: [Alpine.js](https://alpinejs.dev)
- **Templating Engine**: Laravel Blade (featuring reusable *Blade Components* & *Master Layout architecture*)
- **Custom Typography**:
  - `Mokoto` (Cyberpunk techno display font)
  - `VT323` (Retro terminal monospace font)
  - `Orbitron` & `Chakra Petch` (Futuristic display fonts)
  - `Plus Jakarta Sans` & `Space Grotesk` (Clean geometric sans-serif fonts)

---

## 🚀 Pages & Features

| Page | Route | Description |
| :--- | :--- | :--- |
| **Home / Landing** | `/` | Futuristic Hero section featuring the Lambda graphic, glow typography, quotes, and call-to-action buttons. |
| **Members** | `/anggota` | Interactive showcase displaying 11 member identity cards with profiles, ATS CV QR codes, details, and a responsive 3-slide carousel. |
| **Gallery** | `/galeri` | 8-photo grid documentation gallery (2 rows × 4 columns) with thick cream frames and a closing quote. |

---

## 💻 Local Development Guide

Follow these step-by-step instructions to set up and run this project locally on your machine.

### 1. Prerequisites

Ensure you have the following installed on your system:
- **PHP** `>= 8.2` (with extensions: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `curl`)
- **Composer** `>= 2.x`
- **Node.js** `>= 18.x` & **npm** `>= 9.x`
- **Git**

---

### 2. Clone the Repository

Clone the project to your local environment:

```bash
git clone https://github.com/Irhamamam/web-proxyHaskell.git
cd web-proxyHaskell
```

*(Note: If your local folder is named `web-haskell`, adjust your directory accordingly)*

---

### 3. Install Backend Dependencies (Composer)

Install all required PHP / Laravel packages:

```bash
composer install
```

---

### 4. Install Frontend Dependencies (NPM)

Install the JavaScript modules and Tailwind CSS dependencies:

```bash
npm install
```

---

### 5. Environment Setup & Application Key

Copy the `.env.example` file to create your `.env` configuration file, then generate the application encryption key:

**On Windows (PowerShell):**
```powershell
Copy-Item .env.example .env
php artisan key:generate
```

**On Linux / macOS / Git Bash:**
```bash
cp .env.example .env
php artisan key:generate
```

---

### 6. Run the Local Development Servers

For the best development experience with **Hot Module Replacement (HMR)** and real-time asset compilation, open **two separate terminal tabs**:

#### Terminal 1 — Vite Dev Server (Asset Watcher & Bundler):
```bash
npm run dev
```

#### Terminal 2 — Laravel Backend Server:
```bash
php artisan serve
```

Your web application is now live and accessible in your browser at:
👉 **[http://localhost:8000](http://localhost:8000)** or **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

### 7. Production Build

To compile, minify, and bundle all CSS and JavaScript assets for deployment:

```bash
npm run build
```

Production-ready assets will be generated in the `public/build/` directory.

---

## 📁 Key Project Directory Structure

```text
web-haskell/
├── app/
│   └── Http/Controllers/
│       └── AnggotaController.php    # Array data for the 11 group members
├── public/
│   └── images/
│       ├── gallery/                 # Event photos (1.jpg to 8.jpg)
│       ├── profiles/                # Member profile portraits
│       ├── qr/                      # ATS CV QR code images
│       ├── hero-background.png      # Home / Landing page background
│       ├── anggota-background.jpg   # Members page background
│       └── galeri-background.jpg    # Gallery page background
├── resources/
│   ├── css/
│   │   └── app.css                  # Tailwind configuration & custom font declarations
│   ├── fonts/                       # TTF font files (Mokoto, VT323)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Master layout (Navbar, head tags, global styling)
│       ├── components/
│       │   └── card.blade.php       # Reusable member card Blade component
│       ├── home.blade.php           # Home / Hero section view
│       ├── anggota.blade.php        # Members slider / carousel view
│       └── galeri.blade.php         # Photo gallery grid view
└── routes/
    └── web.php                      # Web application route definitions
```

---

## 👥 Credits & Team

Crafted with dedication by the members of **Proxy Haskell** for **Pekan Ilkomerz 62** — Computer Science Student Association (Himalkom), IPB University.

<br>

================================================================================

<br>

# ⚡ Web Proxy Haskell — Pekan Ilkomerz 62 (Versi Bahasa Indonesia)

> **"Web made for Proxy Haskell in Pekan Ilkomerz 62 by Himalkom IPB"**

Website profil dan dokumentasi resmi untuk kelompok **Proxy Haskell** dalam rangka kegiatan **Pekan Ilkomerz 62**, program oleh **Himalkom IPB** (Himpunan Mahasiswa Ilmu Komputer, IPB University).

Dibuat dengan pendekatan antarmuka modern bernuansa *retro-futuristic cyber tech*, memadukan warna ungu gelap (*dark violet*) dengan aksen keemasan/krem (*sand gold* `#e0d3ac`), tipografi bertema tech (*Mokoto, VT323, Orbitron*), serta animasi interaktif.

---

## 🛠️ Tech Stack & Ekosistem

Website ini dibangun menggunakan teknologi:

- **Framework**: [Laravel 12 / 11](https://laravel.com)
- **Frontend Tooling & Bundler**: [Vite](https://vitejs.dev)
- **Styling**: [Tailwind CSS v4](https://tailwindcss.com)
- **Interaktivitas & State Carousel**: [Alpine.js](https://alpinejs.dev)
- **Templating Engine**: Laravel Blade (dengan arsitektur reusable *Blade Components* & *Master Layout*)
- **Typography & Font Custom**:
  - `Mokoto` (Display techno branding)
  - `VT323` (Retro terminal monospace)
  - `Orbitron` & `Chakra Petch` (Futuristic tech display)
  - `Plus Jakarta Sans` & `Space Grotesk` (Modern geometric sans)

---

## 🚀 Fitur & Halaman

| Halaman | Route | Deskripsi |
| :--- | :--- | :--- |
| **Home / Landing** | `/` | Hero section futuristik dengan visualisasi Lambda, tipografi glow, quote, serta link call-to-action. |
| **Anggota** | `/anggota` | Showcase 11 kartu identitas anggota lengkap dengan foto, QR Code CV ATS, detail biodata, serta slider/carousel reaktif (3 slide). |
| **Galeri** | `/galeri` | Grid galeri dokumentasi foto kegiatan (2 baris x 4 kolom) berbingkai tebal krem dengan quote penutup. |

---

## 💻 Panduan Instalasi & Local Development

Ikuti langkah-langkah detail berikut untuk menjalankan proyek ini di komputer lokal Anda:

### 1. Prasyarat Sistem (Prerequisites)

Pastikan perangkat Anda telah terpasang:
- **PHP** `>= 8.2` (dengan ekstensi `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `curl`)
- **Composer** `>= 2.x`
- **Node.js** `>= 18.x` & **npm** `>= 9.x`
- **Git**

---

### 2. Kloning Repository

Buka terminal dan jalankan:

```bash
git clone https://github.com/Irhamamam/web-proxyHaskell.git
cd web-proxyHaskell
```

*(Catatan: jika nama folder Anda `web-haskell`, sesuaikan direktori terminal Anda)*

---

### 3. Instalasi Dependensi Backend (Composer)

Install semua package PHP Laravel yang diperlukan:

```bash
composer install
```

---

### 4. Instalasi Dependensi Frontend (NPM)

Install modul JavaScript dan Tailwind CSS:

```bash
npm install
```

---

### 5. Konfigurasi Environment & Application Key

Salin file `.env.example` menjadi `.env` lalu generate application encryption key:

**Di Windows (PowerShell):**
```powershell
Copy-Item .env.example .env
php artisan key:generate
```

**Di Linux / macOS / Git Bash:**
```bash
cp .env.example .env
php artisan key:generate
```

---

### 6. Menjalankan Server Lokal (Local Development)

Untuk menjalankan proyek secara optimal dengan fitur **Hot Module Replacement (HMR)** dari Vite dan server backend Laravel, buka **dua jendela terminal**:

#### Terminal 1 — Vite Dev Server (Asset Bundler & Watcher):
```bash
npm run dev
```

#### Terminal 2 — Laravel Backend Server:
```bash
php artisan serve
```

Website Anda sekarang aktif dan dapat diakses melalui browser di:
👉 **[http://localhost:8000](http://localhost:8000)** atau **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

### 7. Build untuk Produksi (Production Build)

Jika ingin mem-bundle dan mengoptimasi seluruh asset CSS dan JavaScript untuk deployment:

```bash
npm run build
```

Hasil kompilasi siap saji akan berada di folder `public/build/`.

---

## 📁 Struktur Direktori Utama

```text
web-haskell/
├── app/
│   └── Http/Controllers/
│       └── AnggotaController.php    # Data array 11 anggota kelompok
├── public/
│   └── images/
│       ├── gallery/                 # Foto-foto dokumentasi (1.jpg - 8.jpg)
│       ├── profiles/                # Foto profil setiap anggota
│       ├── qr/                      # QR code CV ATS masing-masing anggota
│       ├── hero-background.png      # Background utama halaman Home
│       ├── anggota-background.jpg   # Background halaman Anggota
│       └── galeri-background.jpg    # Background halaman Galeri
├── resources/
│   ├── css/
│   │   └── app.css                  # Konfigurasi Tailwind & deklarasi custom fonts
│   ├── fonts/                       # File font TTF (Mokoto, VT323)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Master layout (Navbar, Fonts, Head)
│       ├── components/
│       │   └── card.blade.php       # Komponen kartu identitas anggota
│       ├── home.blade.php           # Tampilan Hero Section
│       ├── anggota.blade.php        # Tampilan Slider Anggota
│       └── galeri.blade.php         # Tampilan Grid Galeri
└── routes/
    └── web.php                      # Definisi rute URL web
```

---

## 👥 Tim Proxy Haskell

Dibuat dengan ❤️ dan dedikasi oleh anggota kelompok **Proxy Haskell** untuk **Pekan Ilkomerz 62** — Himpunan Mahasiswa Ilmu Komputer (Himalkom) IPB University.
