<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tugas - MyWebsite</title>

    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="tugas.css">
    <link rel="stylesheet" href="tugas.css">

    <!-- Font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Ikon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

         <!-- Logo website -->
         <div class="logo">
             <i class="fa-solid fa-school"></i>
             <span>MyWebsite</span>
         </div>

        <!-- Menu navigasi -->
        <nav class="navigation">

            <a href="#" class="nav-link">
                <i class="fa-solid fa-house"></i>
                <span>Beranda</span>
            </a>

            <a href="jadwal_pelajaran.html" class="nav-link">
                <i class="fa-regular fa-calendar-days"></i>
                <span>Jadwal Pelajaran</span>
            </a>

            <a href="tugas.html" class="nav-link active">
                <i class="fa-solid fa-clipboard-list"></i>
                <span>Tugas</span>
            </a>

            <a href="#" class="nav-link">
                <i class="fa-solid fa-bell"></i>
                <span>Pengumuman</span>
            </a>

            <div style="text-align:center; margin-top:10px;">
                <a href="#" class="nav-link logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>

        </nav>

    </aside>


    <!-- KONTEN UTAMA -->
    <main class="main-content">

        <!-- HEADER -->
        <header class="topbar">

            <div class="welcome-text" style="text-align:center; font-size:30px; font-weight:700; line-height:1.35; letter-spacing:-1px; width:100%;">selamat datang <span class="welcome-nama">siswa</span></div>

        </header>


        <!-- BAGIAN TUGAS -->
        <section class="schedule-section">

            <!-- Judul halaman -->
            <div class="page-heading">

                <div class="heading-icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>

                <div class="heading-text">
                    <h1>Daftar Tugas</h1>
                    <p>Daftar tugas yang harus dikerjakan siswa</p>
                </div>

            </div>


            <!-- DAFTAR TUGAS -->
            <div class="task-list-container">

                <!-- TUGAS 1 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Latihan Soal Aljabar</h3>
                            <a href="gambar-tugas/tugas_mtk_aljabar.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> Matematika</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 20 Oktober 2026</span>
                        </div>
                    </div>
                </div>

                <!-- TUGAS 2 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Membuat Form HTML</h3>
                            <a href="gambar-tugas/tugas_pw_form.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> Pemrograman Web</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 22 Oktober 2026</span>
                        </div>
                    </div>
                </div>

                <!-- TUGAS 3 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Analisis Teks Cerpen</h3>
                            <a href="gambar-tugas/tugas_bindo_cerpen.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> Bahasa Indonesia</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 24 Oktober 2026</span>
                        </div>
                    </div>
                </div>

                <!-- TUGAS 4 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Latihan Gerak Dasar</h3>
                            <a href="gambar-tugas/tugas_pjok_gerak.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> PJOK</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 25 Oktober 2026</span>
                        </div>
                    </div>
                </div>

                <!-- TUGAS 5 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Rangkum Materi Jaringan</h3>
                            <a href="gambar-tugas/tugas_jarkom_rangkum.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> Jaringan Komputer</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 27 Oktober 2026</span>
                        </div>
                    </div>
                </div>

                <!-- TUGAS 6 -->
                <div class="lesson-card task-card">
                    <span class="lesson-number">
                        <i class="fa-solid fa-file-lines"></i>
                    </span>

                    <div class="lesson-info task-info">
                        <div class="task-header">
                            <h3 class="task-title">Desain Poster Sederhana</h3>
                            <a href="gambar-tugas/tugas_dg_poster.jpg" target="_blank" class="task-link">
                                <i class="fa-solid fa-image"></i> Lihat Gambar Tugas
                            </a>
                        </div>
                        <div class="task-meta">
                            <span class="task-subject"><i class="fa-solid fa-book"></i> Desain Grafis</span>
                            <span class="task-deadline"><i class="fa-regular fa-clock"></i> Dateline : 29 Oktober 2026</span>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>

</body>
</html>