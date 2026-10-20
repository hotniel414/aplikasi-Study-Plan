<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Study Plan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/beranda.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- SIDEBAR -->
    <aside class="sidebar">
         <div class="logo">
             <i class="fa-solid fa-school"></i>
             <span>Study Plan</span>
         </div>
        <nav class="navigation">
            <a href="<?= site_url() ?>" class="nav-link active">
                <i class="fa-solid fa-house"></i>
                <span>Beranda</span>
            </a>
            <a href="<?= site_url('studyplan') ?>" class="nav-link">
                <i class="fa-regular fa-calendar-days"></i>
                <span>Jadwal Pelajaran</span>
            </a>
            <a href="<?= site_url('studyplan/tugas') ?>" class="nav-link">
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
        <div class="sidebar-footer" style="margin-top: auto; margin-bottom: 20px; padding: 20px; text-align: center; border-top: 1px solid #eee; font-size: 13px; color: #666;">
            <div id="sidebar-date" style="line-height: 1.6;"></div>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="main-content">
        <header class="topbar" style="border-radius: 20px; padding: 16px; margin: 0 30px; background: #ffffff; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
            <div class="welcome-text" style="text-align:center; font-size:24px; font-weight:700; line-height:1.35; letter-spacing:-1px;">selamat datang <span class="welcome-nama">siswa</span></div>
        </header>

        <section class="schedule-section">
            <div class="page-heading">
                <div class="heading-icon" style="width: 48px; height: 48px;">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="heading-text">
                    <h1 style="font-size: 28px;">Beranda</h1>
                    <p>Jadwal pelajaran dan tugas hari ini</p>
                </div>
            </div>

            <div class="beranda-grid" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 18px; margin-top: 24px;">
                <!-- JADWAL HARI INI -->
                <div>
                    <h2 style="font-size: 18px; margin-bottom: 12px; font-weight: 600;"><i class="fa-regular fa-calendar-days"></i> Jadwal Pelajaran Hari Ini</h2>
                    <div id="today-schedule" class="schedule-container" style="display: flex; flex-direction: column; gap: 12px;">
                        <!-- Akan diisi oleh JavaScript -->
                    </div>
                </div>

                <!-- TUGAS HARI INI -->
                <div>
                    <h2 style="font-size: 18px; margin-bottom: 12px; font-weight: 600;"><i class="fa-solid fa-clipboard-list"></i> Tugas</h2>
                    <div id="today-tasks" style="display: flex; flex-direction: column; gap: 12px;">
                        <!-- Akan diisi oleh JavaScript -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const now = new Date();
        const dayIndex = now.getDay();
        const dayName = days[dayIndex];
        
        function updateSidebarDate() {
            const date = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            document.getElementById('sidebar-date').innerHTML = dayName + '<br>' + date + ' ' + month + ' ' + year;
        }
        updateSidebarDate();

        // Jadwal berdasarkan hari
        const schedules = {
            1: [ // Senin
                {no: 1, mapel: 'Matematika', waktu: '07.00 – 08.30'},
                {no: 2, mapel: 'Bahasa Indonesia', waktu: '08.30 – 10.00'},
                {no: 3, mapel: 'Pemrograman Web', waktu: '10.15 – 11.45'},
                {type: 'break', mapel: 'Istirahat', waktu: '11.45 – 12.30'},
                {no: 5, mapel: 'Fisika', waktu: '12.30 – 14.00'},
                {no: 6, mapel: 'Bahasa Inggris', waktu: '14.00 – 15.30'}
            ],
            2: [ // Selasa
                {no: 1, mapel: 'Basis Data', waktu: '07.00 – 08.30'},
                {no: 2, mapel: 'Bahasa Inggris', waktu: '08.30 – 10.00'},
                {no: 3, mapel: 'PPKn', waktu: '10.15 – 11.45'},
                {type: 'break', mapel: 'Istirahat', waktu: '11.45 – 12.30'},
                {no: 5, mapel: 'Desain Grafis', waktu: '12.30 – 14.00'},
                {no: 6, mapel: 'Matematika', waktu: '14.00 – 15.30'}
            ],
            3: [ // Rabu
                {no: 1, mapel: 'Pemrograman Berorientasi Objek', waktu: '07.00 – 08.30'},
                {no: 2, mapel: 'Matematika', waktu: '08.30 – 10.00'},
                {no: 3, mapel: 'PJOK', waktu: '10.15 – 11.45'},
                {type: 'break', mapel: 'Istirahat', waktu: '11.45 – 12.30'},
                {no: 5, mapel: 'Sistem Komputer', waktu: '12.30 – 14.00'},
                {no: 6, mapel: 'Bahasa Indonesia', waktu: '14.00 – 15.30'}
            ],
            4: [ // Kamis
                {no: 1, mapel: 'Jaringan Komputer', waktu: '07.00 – 08.30'},
                {no: 2, mapel: 'Bahasa Indonesia', waktu: '08.30 – 10.00'},
                {no: 3, mapel: 'Produk Kreatif', waktu: '10.15 – 11.45'},
                {type: 'break', mapel: 'Istirahat', waktu: '11.45 – 12.30'},
                {no: 5, mapel: 'Database Lanjut', waktu: '12.30 – 14.00'},
                {no: 6, mapel: 'Kewirausahaan', waktu: '14.00 – 15.30'}
            ],
            5: [ // Jumat
                {no: 1, mapel: 'Pendidikan Agama', waktu: '07.00 – 08.30'},
                {no: 2, mapel: 'Sejarah', waktu: '08.30 – 09.45'},
                {no: 3, mapel: 'Projek RPL', waktu: '10.00 – 11.30'},
                {type: 'break', mapel: 'Istirahat', waktu: '11.30 – 13.00'},
                {no: 5, mapel: 'Kesenian', waktu: '13.00 – 14.30'},
                {no: 6, mapel: 'BK', waktu: '14.30 – 15.30'}
            ]
        };

        const tasks = [
            {judul: 'Latihan Soal Aljabar', mapel: 'Matematika', deadline: '20 Oktober 2026', img: 'gambar-tugas/tugas_mtk_aljabar.jpg'},
            {judul: 'Membuat Form HTML', mapel: 'Pemrograman Web', deadline: '22 Oktober 2026', img: 'gambar-tugas/tugas_pw_form.jpg'},
            {judul: 'Analisis Teks Cerpen', mapel: 'Bahasa Indonesia', deadline: '24 Oktober 2026', img: 'gambar-tugas/tugas_bindo_cerpen.jpg'},
            {judul: 'Latihan Gerak Dasar', mapel: 'PJOK', deadline: '25 Oktober 2026', img: 'gambar-tugas/tugas_pjok_gerak.jpg'},
            {judul: 'Rangkum Materi Jaringan', mapel: 'Jaringan Komputer', deadline: '27 Oktober 2026', img: 'gambar-tugas/tugas_jarkom_rangkum.jpg'},
            {judul: 'Desain Poster Sederhana', mapel: 'Desain Grafis', deadline: '29 Oktober 2026', img: 'gambar-tugas/tugas_dg_poster.jpg'}
        ];

        const scheduleContainer = document.getElementById('today-schedule');
            if (schedules[dayIndex]) {
            schedules[dayIndex].forEach(item => {
                if (item.type === 'break') {
                    scheduleContainer.innerHTML += `
                        <div class="lesson-card break-card" style="display: flex; align-items: center; gap: 10px; padding: 10px 14px; border-radius: 12px;">
                            <span class="break-icon"><i class="fa-solid fa-mug-hot"></i></span>
                            <div class="lesson-info"><h3 style="margin: 0; font-size: 14px;">${item.mapel}</h3><p style="margin: 0; font-size: 12px;">${item.waktu}</p></div>
                        </div>
                    `;
                } else {
                    scheduleContainer.innerHTML += `
                        <div class="lesson-card" style="display: flex; align-items: center; gap: 10px; padding: 10px 14px; background: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                            <span class="lesson-number" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; background: #4f7cff; color: white; border-radius: 8px; font-size: 12px;">${item.no}</span>
                            <div class="lesson-info"><h3 style="margin: 0; font-size: 14px;">${item.mapel}</h3><p style="margin: 0; font-size: 12px; color: #666;">${item.waktu}</p></div>
                        </div>
                    `;
                }
            });
        } else {
            scheduleContainer.innerHTML = '<p style="color: #666;">Tidak ada jadwal pelajaran hari ini</p>';
        }

        const taskContainer = document.getElementById('today-tasks');
        tasks.slice(0, 3).forEach(task => {
            taskContainer.innerHTML += `
                    <div class="lesson-card task-card" style="display: flex; align-items: center; gap: 10px; padding: 10px 14px; background: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                        <span class="lesson-number"><i class="fa-solid fa-file-lines"></i></span>
                        <div class="lesson-info task-info" style="flex: 1;">
                            <div class="task-header" style="display: flex; justify-content: space-between; align-items: center;">
                                <h3 class="task-title" style="margin: 0; font-size: 14px;">${task.judul}</h3>
                                <a href="<?= base_url() ?>${task.img}" target="_blank"><img src="<?= base_url() ?>${task.img}" style="width: 44px; height: 44px; object-fit: cover; border-radius: 8px;"></a>
                            </div>
                            <div class="task-meta" style="display: flex; gap: 12px; font-size: 11px; color: #666; margin-top: 4px;">
                                <span><i class="fa-solid fa-book"></i> ${task.mapel}</span>
                                <span><i class="fa-regular fa-clock"></i> ${task.deadline}</span>
                            </div>
                        </div>
                    </div>
            `;
        });
    </script>
</body>
</html>
