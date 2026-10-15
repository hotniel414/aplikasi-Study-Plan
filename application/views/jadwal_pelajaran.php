<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Pelajaran - MyWebsite</title>

    <!-- Menghubungkan file CSS -->
     <link rel="stylesheet" href="styles.css">

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

            <a href="#" class="nav-link active">
                <i class="fa-regular fa-calendar-days"></i>
                <span>Jadwal Pelajaran</span>
            </a>

            <a href="#" class="nav-link">
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


        <!-- BAGIAN JADWAL -->
        <section class="schedule-section">

            <!-- Judul halaman -->
            <div class="page-heading">

                <div class="heading-icon">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>

                <div class="heading-text">
                    <h1>Jadwal Pelajaran</h1>
                    <p>Jadwal pelajaran mingguan siswa</p>
                </div>

            </div>


            <!-- DAFTAR JADWAL -->
            <div class="schedule-container">


                <!-- ================= SENIN ================= -->
                <div class="day-column monday">

                    <div class="day-header">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h2>Senin</h2>
                    </div>

                    <div class="day-body">

                        <div class="lesson-card">
                            <span class="lesson-number">1</span>

                            <div class="lesson-info">
                                <h3>Matematika</h3>
                                <p>07.00 – 08.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">2</span>

                            <div class="lesson-info">
                                <h3>Bahasa Indonesia</h3>
                                <p>08.30 – 10.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">3</span>

                            <div class="lesson-info">
                                <h3>Pemrograman Web</h3>
                                <p>10.15 – 11.45</p>
                            </div>
                        </div>

                        <div class="lesson-card break-card">
                            <span class="break-icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </span>

                            <div class="lesson-info">
                                <h3>Istirahat</h3>
                                <p>11.45 – 12.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">5</span>

                            <div class="lesson-info">
                                <h3>Fisika</h3>
                                <p>12.30 – 14.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">6</span>

                            <div class="lesson-info">
                                <h3>Bahasa Inggris</h3>
                                <p>14.00 – 15.30</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ================= SELASA ================= -->
                <div class="day-column tuesday">

                    <div class="day-header">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h2>Selasa</h2>
                    </div>

                    <div class="day-body">

                        <div class="lesson-card">
                            <span class="lesson-number">1</span>

                            <div class="lesson-info">
                                <h3>Basis Data</h3>
                                <p>07.00 – 08.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">2</span>

                            <div class="lesson-info">
                                <h3>Bahasa Inggris</h3>
                                <p>08.30 – 10.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">3</span>

                            <div class="lesson-info">
                                <h3>PPKn</h3>
                                <p>10.15 – 11.45</p>
                            </div>
                        </div>

                        <div class="lesson-card break-card">
                            <span class="break-icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </span>

                            <div class="lesson-info">
                                <h3>Istirahat</h3>
                                <p>11.45 – 12.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">5</span>

                            <div class="lesson-info">
                                <h3>Desain Grafis</h3>
                                <p>12.30 – 14.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">6</span>

                            <div class="lesson-info">
                                <h3>Matematika</h3>
                                <p>14.00 – 15.30</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ================= RABU ================= -->
                <div class="day-column wednesday">

                    <div class="day-header">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h2>Rabu</h2>
                    </div>

                    <div class="day-body">

                        <div class="lesson-card">
                            <span class="lesson-number">1</span>

                            <div class="lesson-info">
                                <h3>Pemrograman Berorientasi Objek</h3>
                                <p>07.00 – 08.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">2</span>

                            <div class="lesson-info">
                                <h3>Matematika</h3>
                                <p>08.30 – 10.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">3</span>

                            <div class="lesson-info">
                                <h3>PJOK</h3>
                                <p>10.15 – 11.45</p>
                            </div>
                        </div>

                        <div class="lesson-card break-card">
                            <span class="break-icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </span>

                            <div class="lesson-info">
                                <h3>Istirahat</h3>
                                <p>11.45 – 12.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">5</span>

                            <div class="lesson-info">
                                <h3>Sistem Komputer</h3>
                                <p>12.30 – 14.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">6</span>

                            <div class="lesson-info">
                                <h3>Bahasa Indonesia</h3>
                                <p>14.00 – 15.30</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ================= KAMIS ================= -->
                <div class="day-column thursday">

                    <div class="day-header">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h2>Kamis</h2>
                    </div>

                    <div class="day-body">

                        <div class="lesson-card">
                            <span class="lesson-number">1</span>

                            <div class="lesson-info">
                                <h3>Jaringan Komputer</h3>
                                <p>07.00 – 08.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">2</span>

                            <div class="lesson-info">
                                <h3>Bahasa Indonesia</h3>
                                <p>08.30 – 10.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">3</span>

                            <div class="lesson-info">
                                <h3>Produk Kreatif</h3>
                                <p>10.15 – 11.45</p>
                            </div>
                        </div>

                        <div class="lesson-card break-card">
                            <span class="break-icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </span>

                            <div class="lesson-info">
                                <h3>Istirahat</h3>
                                <p>11.45 – 12.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">5</span>

                            <div class="lesson-info">
                                <h3>Database Lanjut</h3>
                                <p>12.30 – 14.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">6</span>

                            <div class="lesson-info">
                                <h3>Kewirausahaan</h3>
                                <p>14.00 – 15.30</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ================= JUMAT ================= -->
                <div class="day-column friday">

                    <div class="day-header">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h2>Jumat</h2>
                    </div>

                    <div class="day-body">

                        <div class="lesson-card">
                            <span class="lesson-number">1</span>

                            <div class="lesson-info">
                                <h3>Pendidikan Agama</h3>
                                <p>07.00 – 08.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">2</span>

                            <div class="lesson-info">
                                <h3>Sejarah</h3>
                                <p>08.30 – 09.45</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">3</span>

                            <div class="lesson-info">
                                <h3>Projek RPL</h3>
                                <p>10.00 – 11.30</p>
                            </div>
                        </div>

                        <div class="lesson-card break-card">
                            <span class="break-icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </span>

                            <div class="lesson-info">
                                <h3>Istirahat</h3>
                                <p>11.30 – 13.00</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">5</span>

                            <div class="lesson-info">
                                <h3>Kesenian</h3>
                                <p>13.00 – 14.30</p>
                            </div>
                        </div>

                        <div class="lesson-card">
                            <span class="lesson-number">6</span>

                            <div class="lesson-info">
                                <h3>BK</h3>
                                <p>14.30 – 15.30</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>

    </main>

</body>
</html>