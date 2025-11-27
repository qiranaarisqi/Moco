<?php
$pageTitle = "MotoGp - Moco";
include 'includes/header.php';
?>

<!-- Detail Berita -->
<div class="flex flex-col px-4 lg:px-14 mt-10">
    <div class="font-bold text-xl lg:text-2xl mb-6 text-center lg:text-left">
        <p>Trend Turis Indonesia</p>
    </div>
    <div class="flex flex-col lg:flex-row w-full gap-10">
        <!-- Berita Utama -->
        <div class="lg:w-8/12">
            <img src="./img/pariwisata1.png" alt="Politik" class="w-full max-h-96 rounded-xl object-cover">
            <p class="font-bold text-lg lg:text-xl mt-6">Trend turis indoanesai</p>
            <p class="mt-6 text-base lg:text-xl leading-relaxed text-justify">
                ke luar negeri kini bukan sekadar jalan-jalan, tapi benar-benar "berburu" pengalaman yang sama sekali tak bisa didapat di Indonesia.
Mulai dari mencicipi kuliner autentik, menikmati musim dingin bersalju, hingga menyaksikan aurora borealis, sensasi yang jelas absen di negara tropis seperti Indonesia.
Meski data Badan Pusat Statistik (BPS) per September 2025 masih menempatkan Malaysia sebagai destinasi nomor satu turis Indonesia, tren terbaru menunjukkan pergeseran signifikan.
                <br><br>
               "Minat masyarakat Indonesia untuk liburan ke luar negeri masih sangat tinggi. Yang berubah adalah pola mereka: sekarang lebih mengejar pengalaman unik dan tematik yang tak ada di dalam negeri, terutama salju, aurora, serta budaya pop yang lagi viral," ungkap Vice President Amethyst Group,
                Handi Pratama, seperti dilansir Detik, Senin (24/11).
                Menurut Handi, tiga besar destinasi incaran saat ini di antaranya,
- Jepang - magnet utamanya tetap bunga sakura, salju tebal di Hokkaido, serta dunia anime dan manga yang bikin penggemar tanah air rela antre visa.
- Korea Selatan - K-Pop, drama Korea, salju pertama di Nami Island, plus street food dan skincare hunting jadi kombinasi mematikan.
- Singapura - tetap jadi pilihan keluarga karena jarak dekat, visa on arrival atau bebas visa, serta destinasi ramah anak seperti Universal Studios dan Gardens by the Bay.
"Faktor kemudahan akses dan proses visa masih jadi pertimbangan utama. Makanya Jepang, Korea, dan Singapura selalu nangkring di posisi teratas," ucap Handi.

        </div>
        <!-- Berita Terbaru -->
        <div class="lg:w-4/12 flex flex-col gap-10">
            <div class="sticky top-24 z-40">
                <p class="font-bold mb-8 text-xl lg:text-2xl">Berita Terbaru Lainnya</p>
                <!-- Berita Card -->
                <div class=" gap-5 flex flex-col">
                    <a href="pariwisata2.php">
                        <div class="flex gap-3 border border-slate-300 hover:border-primary p-3 rounded-xl">
                            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 ml-2 mt-2 font-normal text-xs absolute">
                                Pariwisata
                            </div>
                            <div class="flex gap-3 flex-col lg:flex-row">
                                <img src="img/pariwisata2.png" alt="" class="max-h-36 rounded-xl object-cover">
                                <div class="">
                                    <p class="font-bold text-sm lg:text-base">4 Rekomendasi Wisata di Banyuwangi, Cocok untuk Libur Akhir Tahun</p>
                                    <p class="text-slate-400 mt-2 text-sm lg:text-xs">Sekitar 59 persen pencari kerja mengaku pernah
                                        di-ghosting oleh
                                        perekrut dan tidak mendapat respons...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="gayahidup3.php">
                        <div class="flex gap-3 border border-slate-300 hover:border-primary p-3 rounded-xl">
                            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 ml-2 mt-2 font-normal text-xs absolute">
                                Gaya Hidup
                            </div>
                            <div class="flex gap-3 flex-col lg:flex-row">
                                <img src="img/gayahidup3.png" alt="" class="max-h-36 rounded-xl object-cover">
                                <div class="">
                                    <p class="font-bold text-sm lg:text-base">3 Basic Skincare Pria Menurut Dokter, Tidak Ribet</p>
                                    <p class="text-slate-400 mt-2 text-sm lg:text-xs">Sekitar 59 persen pencari kerja mengaku pernah
                                        di-ghosting oleh
                                        perekrut dan tidak mendapat respons...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="olahraga1.php">
                        <div class="flex gap-3 border border-slate-300 hover:border-primary p-3 rounded-xl">
                            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 ml-2 mt-2 font-normal text-xs absolute">
                                Olahraga
                            </div>
                            <div class="flex gap-3 flex-col lg:flex-row">
                                <img src="img/olahraga1.png" alt="" class="max-h-36 rounded-xl object-cover">
                                <div class="">
                                    <p class="font-bold text-sm lg:text-base">Timnas Kamboja Mundur dari SEA Games 2025, Ada Potensi Drawing Ulang</p>
                                    <p class="text-slate-400 mt-2 text-sm lg:text-xs">Sekitar 59 persen pencari kerja mengaku pernah
                                        di-ghosting oleh
                                        perekrut dan tidak mendapat respons...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Author Section -->
<div class="flex flex-col gap-4 mb-10 p-4 lg:p-10 lg:px-14 w-full lg:w-2/3">
    <p class="font-semibold text-xl lg:text-2xl mb-2">Author</p>
    <a href="author.php">
        <div
            class="flex flex-col lg:flex-row gap-4 items-center border border-slate-300 rounded-xl p-6 lg:p-8 hover:border-primary transition">
            <img src="./img/profile.png" alt="profile" class="rounded-full w-24 lg:w-28 border-2 border-primary">
            <div class="text-center lg:text-left">
                <p class="font-bold text-lg lg:text-xl">Queen Fayola S</p>
                <p class="text-sm lg:text-base leading-relaxed">
                    Queen Fayola S, an expert content writer at Moco, continually acquires valuable knowledge in web
                    technology, UI/UX design, CEO, and business. This knowledge is shared freely with the extensive
                    community in Indonesia.
                </p>
            </div>
        </div>
    </a>
</div>

<?php include 'includes/footer.php'; ?>