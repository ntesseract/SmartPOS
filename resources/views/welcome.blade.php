<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SmartPOS - Belanja Mudah & Cepat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --color-primary: #F3E2D4;
            --color-secondary: #C5B0CD;
            --color-font: #17313E;
        }
    </style>
</head>
<body class="bg-[--color-primary] text-[--color-font] font-sans">

    {{-- Navbar --}}
    <nav class="bg-[#F3E2D4] text-[#17313E] px-6 py-4 flex items-center justify-between shadow-sm">
        <div class="text-2xl font-bold">
            <a href="{{ url('/') }}" class="hover:text-[#C5B0CD] transition">SmartPOS</a>
        </div>
        <div>
            <a href="{{ route('login') }}"
               class="bg-[#C5B0CD] text-white px-4 py-2 rounded hover:bg-opacity-90 transition">
                Login
            </a>
        </div>
    </nav>
    

    {{-- Landing awal --}}
    <section class="w-full min-h-[60vh] flex items-center justify-between px-8 py-16 bg-[--color-primary]">
        <div class="w-1/2">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di <span class="text-[--color-secondary]">SmartPOS</span></h1>
            <p class="text-lg">Temukan kemudahan belanja barang kebutuhan Anda secara langsung tanpa antre dan tanpa ribet.</p>
        </div>
        <div class="w-1/2 flex justify-center">
            <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" viewBox="0 0 902.86 902.86" xml:space="preserve">
                <g>
                    <g>
                        <path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z     M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/>
                        <path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717    c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744    c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742    C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744    c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z     M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742    S619.162,694.432,619.162,716.897z"/>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    {{-- Barang --}}
    <section class="px-8 py-12 bg-white">
        <h2 class="text-2xl font-bold text-center mb-8">Pilih Barang yang Ingin Anda Beli</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 6; $i++)
                <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold mb-2">Nama Barang {{ $i }}</h3>
                    <p class="text-sm mb-4">Deskripsi singkat tentang barang. Stok masih tersedia.</p>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-[--color-secondary]">Rp {{ number_format(10000 * $i, 0, ',', '.') }}</span>
                        <button class="bg-[--color-secondary] text-white px-4 py-1 rounded hover:bg-opacity-90">
                            Beli
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[--color-secondary] text-white mt-16">
        <div class="max-w-6xl mx-auto px-8 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-xl font-bold mb-2">SmartPOS</h4>
                <p class="text-sm">Sistem penjualan cepat berbasis web yang mempermudah proses transaksi dan pencatatan penjualan barang untuk pelaku usaha.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Alamat</h4>
                <p class="text-sm">Jl. Digitalisasi No.12, Semarang<br> Jawa Tengah, Indonesia</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Kontak</h4>
                <p class="text-sm">Email: support@smartpos.id<br> Telepon: +62 812-3456-7890</p>
            </div>
        </div>
        <div class="text-center text-sm bg-[--color-font] py-2">
            © 2025 SmartPOS. All rights reserved.
        </div>
    </footer>

</body>
</html>
