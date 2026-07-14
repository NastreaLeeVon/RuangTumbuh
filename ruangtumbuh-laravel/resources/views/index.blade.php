<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Tumbuh - Ekosistem Pengembangan Diri Generasi Muda Indonesia</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" sizes="48x48" type="image/png">
    <link rel="icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" sizes="64x64" type="image/png">
    <link rel="icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" sizes="96x96" type="image/png">
    <link rel="icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" sizes="128x128" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}">
    <link rel="shortcut icon" href="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" type="image/x-icon">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#home" class="nav-logo">
                <img class="logo-icon" src="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" alt="Ruang Tumbuh">
                <span class="logo-text">Ruang Tumbuh</span>
            </a>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item"><a href="#home" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="#vision" class="nav-link">Visi Misi</a></li>
                <li class="nav-item"><a href="#programs" class="nav-link">Program</a></li>
                <li class="nav-item"><a href="#team" class="nav-link">Tim</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Galeri</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-badge">🌱 Ekosistem Pengembangan Diri</div>
            <h1 class="hero-title">Ruang <em>Tumbuh</em></h1>
            <p class="hero-subtitle">Tumbuh Bersama Membangun Percaya Diri Generasi Muda.</p>
            <div class="hero-buttons">
                <a href="#programs" class="btn btn-primary">Jelajahi Program</a>
                <a href="#about" class="btn btn-secondary">Kenali Kami</a>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Cerita Kami</span>
                <h2 class="section-title">Tentang <em>Ruang Tumbuh</em></h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p class="about-intro">Ruang Tumbuh lahir dari keresahan terhadap masih rendahnya rasa percaya diri di kalangan generasi muda Indonesia.</p>
                    <p>setiap remaja memiliki potensi besar, namun masih ragu untuk berbicara, mencoba hal baru, mengambil peluang, atau menunjukkan kemampuan terbaiknya. Berbagai penelitian juga menunjukkan bahwa rendahnya kepercayaan diri menjadi salah satu tantangan yang memengaruhi perkembangan dan kesehatan mental remaja.</p>
                    <p>Di sisi lain, Indonesia sedang menikmati bonus demografi yang menjadikan generasi muda sebagai aset terbesar bangsa. Kami percaya bahwa potensi tersebut hanya dapat berkembang jika didukung oleh ruang yang aman, suportif, dan mendorong setiap individu untuk belajar, berkolaborasi, serta berani mengambil langkah.</p>
                    <p class="about-highlight">Karena kami percaya, setiap anak muda memiliki potensi untuk berkembang mereka hanya membutuhkan ruang yang tepat untuk memulainya.</p>
                </div>
                <div class="about-image">
                    <div class="image-wrapper">
                        <img class="about-image-media" src="{{ asset('Aset/Logo_Ruang_Tumbuh.jpg') }}" alt="Komunitas Ruang Tumbuh">
                    </div>
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target="30">0</span>
                            <span class="stat-label">Alumni</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="1">0</span>
                            <span class="stat-label">Kota</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="2">0</span>
                            <span class="stat-label">Event</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision" class="vision section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Arah Kami</span>
                <h2 class="section-title">Visi & <em>Misi</em></h2>
            </div>
            <div class="vision-content">
                <div class="vision-card">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visi</h3>
                    <p class="vision-text">Menjadi ekosistem pengembangan diri bagi generasi muda Indonesia yang menginspirasi, memberdayakan, dan menciptakan dampak berkelanjutan melalui pembelajaran, kolaborasi, dan aksi nyata.</p>
                </div>
                <div class="mission-grid">
                    <h3>Misi</h3>
                    <div class="mission-list">
                        <div class="mission-item">
                            <span class="mission-number">01</span>
                            <p>Menyediakan ruang belajar yang aman, inklusif, dan inspiratif bagi setiap anak muda untuk mengenali serta mengembangkan potensi dirinya.</p>
                        </div>
                        <div class="mission-item">
                            <span class="mission-number">02</span>
                            <p>Menghadirkan program pengembangan diri yang aplikatif melalui workshop, diskusi, mentoring, proyek sosial, dan pengalaman belajar berbasis aksi.</p>
                        </div>
                        <div class="mission-item">
                            <span class="mission-number">03</span>
                            <p>Membangun komunitas yang saling mendukung, berkolaborasi, dan bertumbuh bersama dalam menghadapi tantangan masa depan.</p>
                        </div>
                        <div class="mission-item">
                            <span class="mission-number">04</span>
                            <p>Menghubungkan generasi muda dengan mentor, profesional, organisasi, dan berbagai peluang yang dapat mempercepat proses pengembangan diri.</p>
                        </div>
                        <div class="mission-item">
                            <span class="mission-number">05</span>
                            <p>Mendorong lahirnya pemimpin muda yang berkarakter, memiliki kepedulian sosial, serta mampu memberikan dampak positif bagi lingkungan sekitarnya.</p>
                        </div>
                        <div class="mission-item">
                            <span class="mission-number">06</span>
                            <p>Mengembangkan Ruang Tumbuh sebagai gerakan nasional melalui pembentukan chapter di berbagai daerah dengan tetap menjaga nilai dan identitas yang sama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="programs section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Apa yang Kami Tawarkan</span>
                <h2 class="section-title">Program <em>Kami</em></h2>
                <p class="section-desc">Berbagai program yang dirancang untuk mendukung pengembangan diri generasi muda Indonesia</p>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="program-badge">Populer</div>
                    <h3>Workshop</h3>
                    <p>Program pembelajaran yang menghadirkan narasumber inspiratif untuk membahas berbagai topik pengembangan diri, seperti kepercayaan diri, kepemimpinan, komunikasi, hingga pengembangan karier.</p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> 2-3 Jam</span>
                        <span><i class="fas fa-users"></i> 50-200 Peserta</span>
                    </div>
                    <a href="#gallery" class="program-link">Lihat Dokumentasi <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Ruang Tumbuh Chapter</h3>
                    <p>Program pertemuan tatap muka yang dirancang untuk membangun koneksi, berbagi pengalaman, dan mengaplikasikan pembelajaran melalui aktivitas interaktif dalam komunitas yang suportif.</p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> 4-6 Jam</span>
                        <span><i class="fas fa-users"></i> 20-50 Peserta</span>
                    </div>
                    <a href="#gallery" class="program-link">Lihat Dokumentasi <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="program-card program-coming">
                    <div class="program-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="program-badge badge-secondary">Dalam Pengembangan</div>
                    <h3>Green Action</h3>
                    <p>Program aksi sosial dan lingkungan yang mengajak generasi muda untuk berkontribusi secara langsung melalui kegiatan yang berdampak bagi masyarakat dan kelestarian lingkungan.</p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> Full Day</span>
                        <span><i class="fas fa-users"></i> 30-100 Peserta</span>
                    </div>
                    <a href="#gallery" class="program-link">Lihat Dokumentasi <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="program-card program-coming">
                    <div class="program-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="program-badge badge-secondary">Dalam Pengembangan</div>
                    <h3>Volunteer Program</h3>
                    <p>Program yang memberikan kesempatan bagi anak muda untuk terlibat sebagai relawan dalam berbagai kegiatan Ruang Tumbuh dan mengembangkan kemampuan kepemimpinan.</p>
                    <div class="program-meta">
                        <span><i class="fas fa-clock"></i> Fleksibel</span>
                        <span><i class="fas fa-users"></i> 10-30 Volunteer</span>
                    </div>
                    <a href="#home" class="program-link">Lihat Dokumentasi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Siapa Kami</span>
                <h2 class="section-title">Pencetus <em>Ruang Tumbuh</em></h2>
                <p class="section-desc">Ruang Tumbuh lahir from semangat empat anak muda yang percaya bahwa setiap orang memiliki potensi untuk berkembang.</p>
            </div>
            <div class="team-grid">
                <div class="team-card team-founder" data-member="1">
                    <div class="team-image">
                        <img src="{{ asset('Aset/Satria.jpeg') }}" alt="Muhammad Satria Gigih Alyuri" class="team-photo">
                        <div class="team-role">Founder</div>
                    </div>
                    <div class="team-info">
                        <h3>Muhammad Satria Gigih Alyuri</h3>
                        <p class="team-short-desc">Founder Ruang Tumbuh yang menginisiasi lahirnya komunitas ini...</p>
                        <div class="team-social">
                            <a href="https://www.instagram.com/satriaalyuri/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/6285147303364" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card" data-member="2">
                    <div class="team-image">
                        <img src="{{ asset('Aset/Rere.jpeg') }}" alt="Theresia Cahayani Lambok Sibarani" class="team-photo">
                        <div class="team-role">Co-Founder</div>
                    </div>
                    <div class="team-info">
                        <h3>Theresia Cahayani Lambok Sibarani</h3>
                        <p class="team-short-desc">Berperan dalam mengembangkan strategi organisasi dan membangun kolaborasi...</p>
                        <div class="team-social">
                            <a href="https://www.instagram.com/teresibaraniii/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/82114976525" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card" data-member="3">
                    <div class="team-image">
                        <img src="{{ asset('Aset/Nad.jpeg') }}" alt="Salsabila Nadhifa" class="team-photo">
                        <div class="team-role">Co-Founder</div>
                    </div>
                    <div class="team-info">
                        <h3>Salsabila Nadhifa</h3>
                        <p class="team-short-desc">Berperan dalam memperkuat pengembangan program dan komunitas...</p>
                        <div class="team-social">
                            <a href="https://www.instagram.com/sslsabilazz9/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/6285810817104" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/in/syifasalsabilanadhifah/" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card" data-member="4">
                    <div class="team-image">
                        <img src="{{ asset('Aset/Nazriel.jpeg') }}" alt="Muhammad Nazriel" class="team-photo">
                        <div class="team-role">Co-Founder</div>
                    </div>
                    <div class="team-info">
                        <h3>Muhammad Nazriel</h3>
                        <p class="team-short-desc">Berperan dalam mendukung pengembangan organisasi dan jejaring kemitraan...</p>
                        <div class="team-social">
                            <a href="https://www.instagram.com/nazriel_sof/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/6289521244039" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="mailto:mnazriel04@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Member Modal -->
    <div id="teamModal" class="team-modal">
        <div class="team-modal-overlay"></div>
        <div class="team-modal-content">
            <button class="team-modal-close" aria-label="Tutup">
                <i class="fas fa-times"></i>
            </button>
            <div class="team-modal-body">
                <div class="team-modal-image">
                    <img id="modalImage" src="" alt="">
                </div>
                <div class="team-modal-info">
                    <div class="team-modal-role" id="modalRole"></div>
                    <h3 id="modalName"></h3>
                    <p id="modalDescription"></p>
                    <div class="team-modal-social" id="modalSocial"></div>
                    <div class="team-modal-quote" id="modalQuote">
                        <i class="fas fa-quote-left"></i>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery/Documentation Section -->
    <section id="gallery" class="gallery section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Momen Kami</span>
                <h2 class="section-title">Dokumentasi <em>Kegiatan</em></h2>
                <p class="section-desc">Setiap momen adalah bukti perjalanan kami dalam bertumbuh bersama</p>
            </div>
            <div class="gallery-tabs">
                <button class="tab-btn active" data-tab="all">Semua</button>
                <button class="tab-btn" data-tab="photo"><i class="fas fa-camera"></i> Foto</button>
                <button class="tab-btn" data-tab="video"><i class="fas fa-play"></i> Video</button>
            </div>
            <div class="gallery-grid">

                <!-- ====== 2026 ====== -->
                <!-- Photo Items -->
                <div class="gallery-item" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/4.jpeg') }}" alt="Event">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Ruang Tumbuh Offline Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/8.jpeg') }}" alt="Sesi Penghargaan">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Sertifikat Penghargaan Community Support Ruang Tumbuh Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/9.jpeg') }}" alt="Momen Tidak Sengaja">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Momen Tidak Sengaja</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/12.jpeg') }}" alt="Sesi Penghargaan">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Sertifikat Penghargaan Best Delegate Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/5.jpeg') }}" alt="Sesi Dokumentasi">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Dokumentasi Ruang Tumbuh Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>
                
                <!-- ====== Video Items ====== -->
                <div class="gallery-item" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/10.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Latihan Yel Yel Dari Kelompok...</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>

                <div class="gallery-item" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/13.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Ruang Tumbuh Chapter 1 Participant</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>

                <div class="gallery-item" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/11.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Latihan Yel Yel Dari Kelompok...</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>

                <div class="gallery-item" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/16.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Game Hold The Cup</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>
               
                <!-- Extra Photo Items -->
                <div class="gallery-item gallery-extra hidden" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/1.jpeg') }}" alt="Dokumentasi">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Dokumentasi Ruang Tumbuh</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item gallery-extra hidden" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/2.jpeg') }}" alt="Dokumentasi">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Momen Dokumentasi Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item gallery-extra hidden" data-type="photo" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <img class="gallery-media" src="{{ asset('Aset/6.jpeg') }}" alt="Dokumentasi">
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-camera"></i> Foto</span>
                            <span class="gallery-title">Dokumentasi Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                    </div>
                </div>

                <!-- Extra Video Items -->
                <div class="gallery-item gallery-extra hidden" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/3.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Otw Ke tempat Event Chapter 1</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>

                <div class="gallery-item gallery-extra hidden" data-type="video" data-date="2026-06-27" data-year="2026">
                    <div class="gallery-image">
                        <video class="gallery-media" preload="metadata" muted playsinline poster="">
                            <source src="{{ asset('Aset/15.mp4') }}" type="video/mp4">
                        </video>
                        <div class="gallery-overlay">
                            <span class="gallery-type"><i class="fas fa-play"></i> Video</span>
                            <span class="gallery-title">Kasih W Kasih O Kasih W, WOW Keren, WOW WOW Keren,</span>
                            <span class="gallery-date"><i class="fas fa-calendar-alt"></i> 27 Juni 2026</span>
                        </div>
                        <div class="video-play-btn"><i class="fas fa-play"></i></div>
                    </div>
                </div>
            
            </div>

            <!-- Gallery "Lainnya" Toggle Button -->
            <div class="gallery-toggle-wrapper">
                <button id="galleryToggleBtn" class="gallery-toggle-btn">
                    <span class="btn-text">Lainnya</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#home" class="footer-logo">
                        <img class="logo-icon" src="{{ asset('Aset/logo_ruangtumbuh-removebg-preview.png') }}" alt="Ruang Tumbuh">
                        <span class="logo-text">Ruang Tumbuh</span>
                    </a>
                    <p>Ekosistem pengembangan diri bagi generasi muda Indonesia yang menginspirasi, memberdayakan, dan menciptakan dampak berkelanjutan.</p>
                </div>
                <div class="footer-contact">
                    <h4>Kontak Kami</h4>
                    <div class="footer-contact-items">
                        <div class="footer-contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>ruangtumbuhh.id@gmail.com</span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fab fa-instagram"></i>
                            <span><a href="https://www.instagram.com/ruangtumbuhh.id/" target="_blank">@ruangtumbuhh.id</a>
                            </span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fab fa-whatsapp"></i>
                            <span><a href="https://wa.me/6285147303364" target="_blank">Satria Gigih Alyuri Founder</a></span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Indonesia</span>
                        </div>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Tautan</h4>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#programs">Program</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Ikuti Kami</h4>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/ruangtumbuhh.id/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://whatsapp.com/channel/0029Vb8Pf8MAInPkNClK083G" target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Ruang Tumbuh. Dibuat dengan <i class="fas fa-heart"></i> untuk generasi muda Indonesia.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>