<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenal Kota Semarang</title>
    <link rel="stylesheet" href="{{ asset('img/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hover-effect {
            position: relative;
            overflow: hidden;
        }
        .hover-effect img {
            transition: transform 0.3s ease;
        }
        .hover-effect:hover img {
            transform: scale(1.05);
        }
        .hover-effect .hover-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .hover-effect:hover .hover-overlay {
            opacity: 1;
        }
        .slide-transition {
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Include Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section id="hero" class="pt-10 relative opacity-0 translate-y-10 transition-all duration-700">
        <main class="flex flex-col items-center text-center mt-10">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white opacity-100"></div>
                <div class="flex">
                <img alt="Lawang Sewu" class="w-1/4 h-80 object-cover" height="300" src="/lawang sewu.jpg" width="300"/>
                <img alt="Sam Poo Kong" class="w-1/4 h-80 object-cover" height="300" src="/sampookong.jpg" width="300"/>
                <img alt="Tugu Muda" class="w-1/4 h-80 object-cover" height="300" src="/tugu muda.jpg" width="300"/>
                <img alt="Balaikota" class="w-1/4 h-80 object-cover" height="300" src="/balaikota.jpg" width="300"/>
            </div>
            <!-- <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center p-4">
                <h2 class="text-4xl font-bold">YUK KENALAN SAMA KOTA SEMARANG</h2>
                <p class="text-lg">Kota Semarang adalah Ibu kota Provinsi Jawa Tengah</p>
            </div> -->
            <div class = "absolute inset-0 flex flex-col justify-center items-center text-white text-center p-4">
                <h1 class="text-5xl font-bold">
                    Yuk Kenalan Sama<br/>
                    Kota Semarang!
                </h1>
                <p class="text-gray-400 mt-4">
                    Find a variety of properties that suit you very easily,<br/>
                    forget all difficulties in finding a residence for you
                </p>
            </div>
        </main>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="p-8 opacity-0 translate-y-10 transition-all duration-700">
        <h2 class="text-3xl font-bold text-center text-red-800 mb-4">Jejak Sejarah Kota Semarang</h2>
        <div class="border-t-2 border-red-800 w-16 mx-auto my-4"></div>
        <div class="container mx-auto px-6 py-8">
            <!-- Grid Layout -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Artikel dengan gambar di atas -->
                <div>
                    <div class="flex flex-col items-center">
                        <img 
                            src="/img/PetaSemarang1913.jpg" 
                            alt="Peta Semarang 1913" 
                            class="w-full max-w-md rounded-md shadow-md"
                        />
                        <p class="text-center text-gray-500 text-sm mt-2">
                            Peta Semarang Tahun 1913
                        </p>
                    </div>
                </div>

                <!-- Artikel dengan gambar di bawah -->
                <div>
                        <p class="text-gray-700 text-justify mt-4 leading-relaxed">
                            Sejarah Kota Semarang bermula pada <strong>abad ke-8 M</strong> sebagai daerah pesisir bernama <strong>Pragota</strong>, bagian dari Kerajaan Mataram Kuno. Saat itu, daerah ini merupakan pelabuhan penting dengan gugusan pulau kecil yang kini menjadi daratan akibat pengendapan. Pelabuhan ini diduga berada di sekitar Pasar Bulu hingga Pelabuhan Simongan, tempat Laksamana Cheng Ho bersandar pada 1405 M dan mendirikan Kelenteng Sam Po Kong.</br></br>
                            Pada abad ke-15, Kerajaan Demak menugaskan Pangeran Made Pandan untuk menyebarkan Islam di Pragota. Nama "Semarang" berasal dari pohon asam yang jarang tumbuh di daerah ini (Asem Arang). Pendiri desa, Kyai Ageng Pandan Arang I, digantikan putranya, Pandan Arang II, yang membawa kemajuan hingga Semarang ditetapkan sebagai kabupaten oleh Sultan Hadiwijaya pada 2 Mei 1547—tanggal yang kini diperingati sebagai Hari Jadi Kota Semarang.</br></br>
                            Pada tahun 1678, Amangkurat II menyerahkan Semarang kepada VOC sebagai pembayaran utang. Pada 1705, Pakubuwono I menyerahkan Semarang kepada VOC, menjadikannya kota kolonial hingga dibentuk Gemeente pada 1906. Pemerintahan ini berakhir pada 1942 saat pendudukan Jepang, yang membentuk pemerintahan lokal dengan kepala militer (Shico).</br></br>
                            Setelah kemerdekaan, Semarang mengalami Pertempuran Lima Hari (15–20 Oktober 1945) melawan Jepang. Pada 1946, Inggris menyerahkan Semarang kepada Belanda, yang menduduki kota hingga 1950. Pemerintahan kota selama pendudukan dijalankan di daerah pengungsian, hingga pada 1 April 1950, pemerintahan kota diserahkan kembali kepada pemerintah Republik Indonesia.
                        </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Semarang Masa Lalu Masa Kini dan Masa Semarang -->
    <main class="container mx-auto mt-8 px-6 transition-all duration-700">
        <section class="text-center transition-all duration-700">
            <h2 class="text-blue-600 text-sm font-semibold">
                DISCOVER
            </h2>
            <h1 class="text-3xl font-bold mt-2">
                Semarang dari Masa ke Masa
            </h1>
            <p class="text-gray-600 mt-2">
                Jelajahi sejarah dan transformasi Kota Semarang dari masa lalu, masa kini, hingga masa depan.
            </p>
            <div class="mt-4 flex justify-center space-x-4">
                <button id="btnPastPresent" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showSection('past-present')">
                    Semarang Dulu dan Kini
                </button>
                <button id="btnFuture" class="bg-gray-200 text-gray-700 px-4 py-2 rounded" onclick="showSection('future')">
                    Semarang Masa Depan
                </button>
            </div>
        </section>

        <section id="past-present-section" class="mt-8 transition-all duration-700">
            <div class="flex justify-center space-x-4 relative">
                <div class="relative w-1/2 hover-effect">
                    <img alt="Past Image" class="rounded-lg w-full h-80 object-cover slide-transition" id="pastImage" src="/api/placeholder/600/400"/>
                    <div class="hover-overlay rounded-lg">
                        <h3 class="text-white text-lg font-semibold" id="pastCaption">Past Caption</h3>
                    </div>
                    <!-- Button kiri -->
                    <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-4 py-2 rounded-full" onclick="prevSlide()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="relative w-1/2 hover-effect">
                    <img alt="Present Image" class="rounded-lg w-full h-80 object-cover slide-transition" id="presentImage" src="/api/placeholder/600/400"/>
                    <div class="hover-overlay rounded-lg">
                        <h3 class="text-white text-lg font-semibold" id="presentCaption">Present Caption</h3>
                    </div>
                    <!-- Button kanan -->
                    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-4 py-2 rounded-full" onclick="nextSlide()">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="text-center mt-4">
                <h2 id="slideTitle" class="text-2xl font-bold"></h2>
                <p id="slideDescription" class="text-gray-600 text-justify"></p>
            </div>
        </section>

        <section id="future-section" class="mt-8 section-transition hidden transition-all duration-700">
            <div class="container mx-auto px-4">
                <!-- Video Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Video Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/B4mLKcVIERs/maxresdefault.jpg" alt="Transportasi Modern" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('B4mLKcVIERs')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Transportasi Modern</h3>
                            <p class="text-gray-600 text-sm">Sistem MRT dan LRT terintegrasi yang akan menghubungkan seluruh wilayah Semarang.</p>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/c48g-XFcLcU/maxresdefault.jpg" alt="Smart City" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('c48g-XFcLcU')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Smart City Infrastructure</h3>
                            <p class="text-gray-600 text-sm">Implementasi teknologi pintar untuk sistem manajemen kota yang lebih efisien.</p>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/RYMQOcxeg6U/maxresdefault.jpg" alt="Green Building" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('RYMQOcxeg6U')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Green Building Development</h3>
                            <p class="text-gray-600 text-sm">Pembangunan gedung ramah lingkungan dengan teknologi hemat energi.</p>
                        </div>
                    </div>

                    <!-- Video Card 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/c48g-XFcLcU/maxresdefault.jpg" alt="Digital Tourism" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('c48g-XFcLcU')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Digital Tourism</h3>
                            <p class="text-gray-600 text-sm">Pengembangan wisata digital dengan teknologi AR/VR untuk eksplorasi sejarah kota.</p>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/B4mLKcVIERs/maxresdefault.jpg" alt="Waterfront City" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('B4mLKcVIERs')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Waterfront City</h3>
                            <p class="text-gray-600 text-sm">Pengembangan kawasan pesisir dengan konsep modern dan berkelanjutan.</p>
                        </div>
                    </div>

                    <!-- Video Card 6 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative aspect-video">
                            <img src="https://i3.ytimg.com/vi/RYMQOcxeg6U/maxresdefault.jpg" alt="Cultural Preservation" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="p-3 bg-blue-500 rounded-full text-white" onclick="playVideo('RYMQOcxeg6U')">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Cultural Preservation</h3>
                            <p class="text-gray-600 text-sm">Pelestarian budaya dengan teknologi modern untuk generasi mendatang.</p>
                        </div>
                    </div>
                </div>

                <!-- Video Modal -->
                <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-75 hidden items-center justify-center z-50">
                    <div class="relative w-full max-w-4xl mx-4">
                        <button class="absolute -top-10 right-0 text-white text-xl" onclick="closeVideo()">
                            <i class="fas fa-times"></i>
                        </button>
                        <div class="aspect-video bg-black">
                            <iframe id="videoFrame" 
                                    class="w-full h-full" 
                                    src="" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pemerintahan -->
        @include('pemerintahan')

        <!-- Situs Kota Lama -->
        <section id="situs-kota-lama" class="mt-16 opacity-0 translate-y-10 transition-all duration-700">
            <div class="container mx-auto p-4">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/3">
                        <img alt="Map of Kota Lama Surabaya with various landmarks marked" class="w-full" height="600" src="/SKL/situskotalama.png" width="800"/>
                    </div>
                    <div class="w-full lg:w-1/3 lg:pl-8 mt-4 lg:mt-0">
                        <h1 class="text-4xl font-bold text-gray-800">
                            Kota Lama
                        </h1>
                        <p class="mt-4 text-gray-600 text-justify">
                            Kota Lama Semarang adalah destinasi ideal bagi para penggemar wisata sejarah dan fotografi arsitektur. Kawasan ini memiliki berbagai landmark menakjubkan dan bangunan peninggalan Belanda yang terpelihara dengan baik. Pada abad ke-19 hingga ke-20, Kota Lama merupakan pusat perdagangan penting, dan untuk melindungi warga serta wilayahnya, dibangunlah benteng Vijfhoek. Jalan utama di dalam benteng tersebut diberi nama Heerenstraat, yang kini dikenal sebagai Jalan Letjen Soeprapto. Kota Lama dijuluki "Little Netherland" karena lanskapnya yang terpisah dan mirip dengan kota-kota di Eropa, serta kanal-kanal air yang mengelilinginya. Arsitektur bangunan di kawasan ini mengusung gaya Eropa dengan pintu utama dan jendela besar, elemen dekoratif, dan langit-langit tinggi.                 </p>
                        <button class="mt-6 bg-green-600 text-white px-4 py-2 rounded-full flex items-center" onclick="window.location.href='{{ route('situs-kota-lama') }}'">
                            More Information
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <script>
        // ... script slides sebelumnya tetap sama ...

        function showSection(sectionId) {
            const pastPresentSection = document.getElementById('past-present-section');
            const futureSection = document.getElementById('future-section');
            const btnPastPresent = document.getElementById('btnPastPresent');
            const btnFuture = document.getElementById('btnFuture');

            if (sectionId === 'past-present') {
                pastPresentSection.classList.remove('hidden');
                futureSection.classList.add('hidden');
                btnPastPresent.classList.remove('bg-gray-200', 'text-gray-700');
                btnPastPresent.classList.add('bg-blue-500', 'text-white');
                btnFuture.classList.remove('bg-blue-500', 'text-white');
                btnFuture.classList.add('bg-gray-200', 'text-gray-700');
            } else {
                pastPresentSection.classList.add('hidden');
                futureSection.classList.remove('hidden');
                btnFuture.classList.remove('bg-gray-200', 'text-gray-700');
                btnFuture.classList.add('bg-blue-500', 'text-white');
                btnPastPresent.classList.remove('bg-blue-500', 'text-white');
                btnPastPresent.classList.add('bg-gray-200', 'text-gray-700');
            }
        }

        // Inisialisasi halaman
        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
            showSection('past-present'); // Menampilkan section default
        });

        let currentSlide = 0;
            const slides = [
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/lawangsewutahun1930.jpg",
                        caption: "Lawang Sewu 1930"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/lawangsewu2024.jpg",
                        caption: "Lawang Sewu 2024"
                    },
                    title: "Lawang Sewu",
                    description: "Lawang Sewu adalah gedung bersejarah milik PT Kereta Api Indonesia (Persero) yang awalnya digunakan sebagai Kantor Pusat perusahaan kereta api swasta Nederlandsch-Indische Spoorweg Maatschappij (NISM). Gedung Lawang Sewu dibangun secara bertahap di atas lahan seluas 18.232 m2. Bangunan utama dimulai pada 27 Februari 1904 dan selesai pada Juli 1907. Sedangkan bangunan tambahan dibangun sekitar tahun 1916 dan selesai tahun 1918."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/stasiunsemarangnis1905.png",
                        caption: "Stasiun Semarang NIS 1905"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/KampungSpoorland2024.jpg",
                        caption: "Sekarang Menjadi Kampung Spoorland"
                    },
                    title: "Stasiun Semarang NIS",
                    description: "Stasiun Samarang NIS atau disebut juga Stasiun Kemidjen NIS dibangun pada 17 Juni 1864 dan dibuka untuk umum pada 10 Agustus 1867. Ini merupakan jalur pertama kereta api di Indonesia dengan rute Semarang-Tanggoeng. Kini, stasiun tersebut sudah tidak ada lagi bangunan fisik yang tersisa dan menjadi kompleks perkampungan."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Mercusuar Willem Tahun 1915"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Mercusuar Willem Tahun 2024"
                    },
                    title: "Mercusuar Willem",
                    description: "Menara mercusuar ini didirikan pada masa kolonial Belanda antara tahun 1879 hingga 1884. Saat ini, pengelolaannya berada di bawah Kementerian Perhubungan dan masih berfungsi secara aktif."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Wisma Perdamaian Tahun 1920"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Wisma Perdamaian Tahun 2024"
                    },
                    title: "Wisma Perdamaian Semarang",
                    description: "Wisma Perdamaian, dahulu dikenal sebagai Residence de Gubernur van Java’s Noordoosthoek, merupakan bangunan kolonial abad ke-19 yang menjadi tempat tinggal resmi Residen Belanda di Semarang. Setelah kemerdekaan Indonesia, bangunan ini diambil alih pemerintah dan difungsikan untuk kegiatan administrasi serta pertemuan resmi."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Stasiun Poncol Semarang Tahun 1927"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Stasiun Poncol Semarang Tahun 2024"
                    },
                    title: "Stasiun Poncol Semarang",
                    description: "Stasiun Semarang Poncol, yang berlokasi di daerah Poncol, Semarang, secara resmi bernama 'Semarang West' karena terletak di bagian barat kota. Dibangun untuk menggantikan Stasiun Pendrikan, stasiun ini kini melayani kereta kelas ekonomi dan campuran, melengkapi Stasiun Tawang yang melayani kereta kelas eksekutif. Stasiun ini menjadi salah satu stasiun utama di Semarang."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Tugu Muda"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Tugu Muda"
                    },
                    title: "Tugu Muda",
                    description: "Tugu Muda terletak di pusat Kota Semarang, di persimpangan lima jalan utama: Jalan Pandanaran, Mgr. Sugiopranoto, Imam Bonjol, Pemuda, dan dr. Sutomo. Pembangunannya dimulai pada 1951 dan diresmikan oleh Presiden Soekarno pada 20 Mei 1953. Tugu ini didirikan untuk mengenang jasa pemuda yang gugur dalam peristiwa heroik di Semarang."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Balai Kota Semarang"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Balai Kota Semarang"
                    },
                    title: "Balai Kota Semarang",
                    description: "Gedung Balai Kota Semarang, yang awalnya merupakan villa milik keluarga Gimberg di Jalan Pemuda No. 148, sempat digunakan sebagai kantor utama Stadsgemeente (Kotapraja) Semarang, tempat Walikota Semarang berkantor. Pada 1960-an, gedung ini dialihfungsikan untuk Dinas Pekerjaan Umum Kotamadya Semarang dengan renovasi tambahan dinding berjendela di bagian depan. Pada 1980-an, dilakukan perombakan besar dengan menutup pilar-pilar dan menambahkan kanopi bergaya Romawi kuno di bagian depan gedung."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Jalan Pahlawan"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Jalan Pahlawan"
                    },
                    title: "Jalan Pahlawan",
                    description: "Oei Tiong Ham weg di kawasan Candi Baru, Semarang. Sejak 1950-an seruas marga itu berganti nama menjadi jalan Pahlawan. Oei Tiong Ham, Sang Raja Candu Terakhir Dia adalah konglomerat fenomenal, sohor dengan julukan 'Raja Gula dari Semarang'. Namun, jarang orang yang mengenangnya sebagai Raja Candu Terakhir di Semarang."
                },
                {
                    past: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Jalan Tanjakan Gombel"
                    },
                    present: {
                        img: "/smg-masa-lalu-sekarang/",
                        caption: "Jalan Tanjakan Gombel"
                    },
                    title: "Jalan Tanjakan Gombel",
                    description: "Gombel pada awalnya merupakan suatu kawasan makam pecinan leluhur para etnis Tionghoa, lalu pada masa penjajahan Belanda dibangunlah jalan tersebut dengan mendapatkan perlawanan dari etnis Tionghoa karena dianggap merusak warisan leluhur."
                },
            ];

        function showSlide(index) {
            const slide = slides[index];
            
            // Update images and captions with fade effect
            const pastImg = document.getElementById('pastImage');
            const presentImg = document.getElementById('presentImage');
            const pastCaption = document.getElementById('pastCaption');
            const presentCaption = document.getElementById('presentCaption');
            const slideTitle = document.getElementById('slideTitle');
            const slideDescription = document.getElementById('slideDescription');

            // Apply fade out
            pastImg.style.opacity = 0;
            presentImg.style.opacity = 0;

            // Update content after brief delay
            setTimeout(() => {
                pastImg.src = slide.past.img;
                presentImg.src = slide.present.img;
                pastCaption.innerText = slide.past.caption;
                presentCaption.innerText = slide.present.caption;
                slideTitle.innerText = slide.title;
                slideDescription.innerText = slide.description;

                // Fade in
                pastImg.style.opacity = 1;
                presentImg.style.opacity = 1;
            }, 250);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Initialize the first slide
        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
        });

        function playVideo(videoId) {
            const modal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            
            // Set YouTube embed URL dengan parameter yang benar
            videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeVideo() {
            const modal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            videoFrame.src = ''; // Clear the source
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Close modal when clicking outside
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideo();
            }
        });
    </script>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const carouselItems = carousel.querySelectorAll('.carousel-item');

            // Hitung total scroll berdasarkan dua elemen
            const itemWidth = carouselItems[0].offsetWidth;
            const scrollAmount = itemWidth * 2;

            carousel.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Tambahkan animasi saat elemen terlihat
                        entry.target.classList.remove("opacity-0", "translate-y-10");
                        entry.target.classList.add("opacity-100", "translate-y-0");
                    } else {
                        // Reset animasi saat elemen keluar dari viewport
                        entry.target.classList.remove("opacity-100", "translate-y-0");
                        entry.target.classList.add("opacity-0", "translate-y-10");
                    }
                });
            }, {
                threshold: 0.2, // Berapa persen elemen terlihat sebelum animasi dimulai
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>
