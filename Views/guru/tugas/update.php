<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/dashboardadmin.css">
    <link rel="stylesheet" href="/assets/css/tablestyle.css">
    <style>
        .form-container {
            background: var(--light);
            padding: 24px;
            border-radius: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--grey);
            border-radius: 5px;
            font-size: 1rem;
        }

        .error-message {
            color: var(--red);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-container {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .form-hint {
            font-size: 0.75rem;
            color: var(--dark-grey);
            margin-top: 0.25rem;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--dark-grey);
        }
    </style>
    <title>Dashboard Guru Page</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/dashboard-guru" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">SDN 1 KALISAT</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard-guru">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/tugas-pembelajaran">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Tugas</span>
                </a>
            </li>
            <li>
                <a href="/pengumpulan-tugas">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Pengumpulan Tugas</span>
                </a>
            </li>
            <li class="active">
                <a href="/latihan-soal">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Latihan Soal</span>
                </a>
            </li>
            <li>
                <a href="/penilaian-latihan-soal">
                    <i class='bx bx-task'></i>
                    <span class="text">Penilaian Latihan Soal</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/settings">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="/logout-guru" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="profile">
                <a href="/settings" class="profile">
                    <img src="img/people.png">
                </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Data Tugas</h1>
                    <ul class="breadcrumb">
                        <li><a href="/dashboard-guru">Dashboard</a></li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li><a class="active" href="#">Tabel Tugas</a></li>
                    </ul>
                </div>
                <a href="/tugas-pembelajaran/create" class="btn btn-primary">
                    <i class='bx bx-plus'></i>
                    <span>Tambah Tugas</span>
                </a>
            </div>
            <div class="form-container">
                <?php if (isset($errors['system'])): ?>
                    <div class="error-message" style="margin-bottom: 1rem;">
                        <?= htmlspecialchars($errors['system'][0]) ?>
                    </div>
                <?php endif; ?>

                <form action="/tugas-pembelajaran/update" method="post" id="updateForm" onsubmit="return validateForm()">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']); ?>">

                    <div class="form-group">
                        <label for="kelas">Mapel Kelas</label>
                        <select class="form-control" id="kelas" name="kelas" required>
                            <option value="" disabled>-- Pilih Mapel Dan Kelas --</option>
                            <?php foreach ($asd as $row): ?>
                                <option value="<?= htmlspecialchars($row['id']); ?>"
                                    <?= $row['id'] == $data['awok'] ? 'selected' : ''; ?>>
                                    <?= htmlspecialchars($row['kelas']) . ' - ' . htmlspecialchars($row['nama']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-hint">Pilih Kelas Dan Mapel Yang Tersedia</div>
                        <?php if (isset($errors['kelas'])): ?>
                            <?php foreach ($errors['kelas'] as $error): ?>
                                <div class="error-message"><?= htmlspecialchars($error) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="judul_tugas">Judul Tugas</label>
                        <input type="text" class="form-control" id="judul_tugas" name="judul_tugas" required maxlength="100" value="<?= htmlspecialchars($data['judul_tugas']); ?>">
                        <div class="form-hint">Masukkan Judul Tugas</div>
                        <?php if (isset($errors['judul_tugas'])): ?>
                            <?php foreach ($errors['judul_tugas'] as $error): ?>
                                <div class="error-message"><?= htmlspecialchars($error) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Tugas</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required value="<?= htmlspecialchars($data['deskripsi']); ?>">
                        <div class="form-hint">Masukkan Deskripsi Tugas</div>
                        <?php if (isset($errors['deskripsi'])): ?>
                            <?php foreach ($errors['deskripsi'] as $error): ?>
                                <div class="error-message"><?= htmlspecialchars($error) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="tgl-tugas">Tanggal dan Jam Tugas Dibuat</label>
                        <input type="datetime-local" class="form-control" id="tgl-tugas" name="tgl_tugas" required value="<?= htmlspecialchars($data['tanggal_tugas']); ?>">
                        <div class="form-hint">Masukkan Tanggal dan Jam Tugas Dibuat</div>
                        <?php if (isset($errors['tanggal_tugas'])): ?>
                            <?php foreach ($errors['tanggal_tugas'] as $error): ?>
                                <div class="error-message"><?= htmlspecialchars($error) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="tgl-deadline">Tanggal dan Jam Deadline Tugas</label>
                        <input type="datetime-local" class="form-control" id="tgl-deadline" name="tgl_deadline" required value="<?= htmlspecialchars($data['deadline']); ?>">
                        <div class="form-hint">Masukkan Tanggal dan Jam Deadline Tugas</div>
                        <?php if (isset($errors['deadline'])): ?>
                            <?php foreach ($errors['deadline'] as $error): ?>
                                <div class="error-message"><?= htmlspecialchars($error) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">
                            <i class='bx bx-save'></i>
                            <span>Simpan Perubahan</span>
                        </button>
                        <a href="/tugas-pembelajaran" class="btn btn-danger">
                            <i class='bx bx-x'></i>
                            <span>Batal</span>
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </section>

    <script src="/assets/js/dashboardadmin.js"></script>
    <script>
        // Add dark mode toggle functionality
        const switchMode = document.getElementById('switch-mode');

        switchMode.addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        });

        // Form validation
        function validateForm() {
            const nip = document.getElementById('nip').value;
            const nomor_hp = document.getElementById('nomor_hp').value;
            const password = document.getElementById('password').value;

            // Validate NIP
            if (!/^[0-9]{18}$/.test(nip)) {
                alert('NIP harus 18 digit angka');
                return false;
            }

            // Validate phone number
            if (!/^[0-9]{10,13}$/.test(nomor_hp)) {
                alert('Nomor HP harus berupa 10-13 digit angka');
                return false;
            }

            // Validate password only if it's not empty
            if (password && password.length < 6) {
                alert('Password minimal 6 karakter');
                return false;
            }

            return true;
        }

        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bx-show');
                toggleIcon.classList.add('bx-hide');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bx-hide');
                toggleIcon.classList.add('bx-show');
            }
        }

        // Add input event listeners for real-time validation
        document.getElementById('nomor_hp').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13);
        });

        document.getElementById('nip').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 18);
        });
    </script>
</body>

</html>