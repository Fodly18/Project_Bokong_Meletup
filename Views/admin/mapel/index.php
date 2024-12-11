<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dataguruadmin.css">
    <link rel="stylesheet" href="/assets/css/dashboardadmin.css">
    <title>Data Mata Pelajaran - Admin Dashboard</title>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/admin" class="brand">
        <img src="/assets/img/logo.png" alt="Logo" class="icon" width="60" height="60">
            <span class="text">SDN 1 KALISAT</span>
        </a>
		<ul class="side-menu top">
			<li>
				<a href="/dashboard-admin">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/guru">
					<i class='bx bxs-group' ></i>
					<span class="text">Guru</span>
				</a>
			</li>
			<li>
				<a href="/kelas">
					<i class='bx bxs-news' ></i>
					<span class="text">Kelas</span>
				</a>
			</li>
			<li class="active">
				<a href="/mapel">
					<i class='bx bxs-receipt' ></i>
					<span class="text">Mapel</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-receipt' ></i>
					<span class="text">Mapel-Kelas</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-receipt' ></i>
					<span class="text">Jadwal</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>

				<a href="/logout-admin" class="logout">
					<i class='bx bxs-log-out-circle' ></i>

					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
    </section>

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="/siswa/search" method="GET">
                <div class="form-input">
                    <input type="text" name="query" placeholder="Cari siswa..." aria-label="Cari siswa">
                    <button type="submit" class="search-btn">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="profile">
                <img src="/assets/img/people.png" alt="Profile" aria-label="Profile">
            </a>
        </nav>

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Data Mata Pelajaran</h1>
                    <ul class="breadcrumb">
                        <li><a href="/admin">Dashboard</a></li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li><a class="active" href="#">Data Mapel</a></li>
                    </ul>
                </div>
                <a href="/mapel/create" class="btn btn-primary">
                    <i class='bx bx-plus'></i>
                    <span>Tambah Mapel</span>
                </a>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($data)): ?>
                            <tr>
                                <td colspan="3" class="empty-state">
                                    <i class='bx bx-folder-open'></i>
                                    <p>Belum ada data Mapel tersedia</p>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php $no = 1; foreach ($data as $row): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= htmlspecialchars($row['nama']); ?></td>
                                    <td class="action-buttons">
                                        <a href="/mapel/update/<?= $row['id']; ?>" class="btn btn-success">
                                            <i class='bx bx-edit-alt'></i>
                                            <span>Edit</span>
                                        </a>
                                        <a href="/mapel/delete/<?= $row['id']; ?>"
                                           onclick="return confirm('Apakah Anda yakin ingin menghapus mata pelajaran <?= htmlspecialchars($row['nama']); ?>?');"
                                           class="btn btn-danger">
                                            <i class='bx bx-trash'></i>
                                            <span>Hapus</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>

    <script src="/assets/js/dashboardadmin.js"></script>
    <script>
        const switchMode = document.getElementById('switch-mode');
        switchMode.addEventListener('change', function () {
            document.body.classList.toggle('dark', this.checked);
        });
    </script>
</body>
</html>