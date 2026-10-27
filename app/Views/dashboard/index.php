
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | FleetRent</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
</head>
<body>

<div class="app-layout">

    <aside class="sidebar">
        <div class="brand">
            <div class="brand-icon">F</div>
            <div>
                <h2>FleetRent</h2>
                <span>Fleet Management</span>
            </div>
        </div>

        <div class="menu-label">MENU UTAMA</div>

        <nav class="navigation">
            <a href="<?= base_url('dashboard') ?>" class="nav-item active">
                <span>▦</span> Dashboard
            </a>
            <a href="#" class="nav-item">
                <span>🚘</span> Kendaraan
            </a>
            <a href="#" class="nav-item">
                <span>▤</span> Penyewaan
            </a>
            <a href="#" class="nav-item">
                <span>♙</span> Pelanggan
            </a>
            <a href="#" class="nav-item">
                <span>⇄</span> Pembayaran
            </a>
            <a href="#" class="nav-item">
                <span>⌖</span> GPS Tracking
            </a>
            <a href="#" class="nav-item">
                <span>▥</span> Laporan
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="profile-avatar">A</div>
            <div class="profile-info">
                <strong>Administrator</strong>
                <span>Fleet Manager</span>
            </div>
        </div>
    </aside>

    <main class="main-content">

        <header class="topbar">
            <div>
                <p class="breadcrumb">Workspace / Dashboard</p>
                <h1>Dashboard</h1>
            </div>

            <div class="topbar-right">
                <span class="status-dot"></span>
                <span class="system-status">System Online</span>
                <div class="top-avatar">A</div>
            </div>
        </header>

        <section class="welcome">
            <div>
                <p class="eyebrow">FLEET MANAGEMENT SYSTEM</p>
                <h2>Selamat datang di FleetRent 👋</h2>
                <p>Pantau dan kelola operasional rental kendaraanmu dari satu tempat.</p>
            </div>
            <div class="welcome-icon">🚘</div>
        </section>

        <section class="section-heading">
            <div>
                <h2>Ringkasan Operasional</h2>
                <p>Gambaran umum aktivitas rental kendaraan.</p>
            </div>
            <span class="date-label">Dashboard Overview</span>
        </section>

        <section class="stats-grid">
            <article class="stat-card">
                <div class="stat-top">
                    <span>Total Kendaraan</span>
                    <span class="stat-icon blue">🚘</span>
                </div>
                <h3>48</h3>
                <p class="stat-note">Seluruh armada terdaftar</p>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span>Sedang Disewa</span>
                    <span class="stat-icon orange">🔑</span>
                </div>
                <h3>16</h3>
                <p class="stat-note">Kendaraan dalam penyewaan</p>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span>Kendaraan Tersedia</span>
                    <span class="stat-icon green">✓</span>
                </div>
                <h3>29</h3>
                <p class="stat-note">Siap digunakan untuk rental</p>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span>Pendapatan</span>
                    <span class="stat-icon purple">Rp</span>
                </div>
                <h3 class="revenue">Rp12,5 jt</h3>
                <p class="stat-note">Contoh nilai pendapatan</p>
            </article>
        </section>

        <section class="content-grid">

            <article class="panel">
                <div class="panel-header">
                    <div>
                        <h3>Penyewaan Terbaru</h3>
                        <p>Contoh aktivitas penyewaan kendaraan.</p>
                    </div>
                    <a href="#" class="text-link">Lihat semua</a>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Pelanggan</th>
                                <th>Kendaraan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Andi Pratama</strong>
                                    <small>RNT-0001</small>
                                </td>
                                <td>Toyota Avanza</td>
                                <td><span class="badge badge-green">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Budi Santoso</strong>
                                    <small>RNT-0002</small>
                                </td>
                                <td>Honda Brio</td>
                                <td><span class="badge badge-orange">Menunggu</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Citra Amelia</strong>
                                    <small>RNT-0003</small>
                                </td>
                                <td>Mitsubishi Xpander</td>
                                <td><span class="badge badge-green">Aktif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="panel fleet-panel">
                <div class="panel-header">
                    <div>
                        <h3>Status Armada</h3>
                        <p>Contoh distribusi kendaraan.</p>
                    </div>
                </div>

                <div class="fleet-row">
                    <div class="fleet-label">
                        <span>Tersedia</span>
                        <strong>29</strong>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill available"></div>
                    </div>
                </div>

                <div class="fleet-row">
                    <div class="fleet-label">
                        <span>Sedang disewa</span>
                        <strong>16</strong>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill rented"></div>
                    </div>
                </div>

                <div class="fleet-row">
                    <div class="fleet-label">
                        <span>Perawatan</span>
                        <strong>3</strong>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill maintenance"></div>
                    </div>
                </div>

                <div class="fleet-footnote">
                    Data di atas masih berupa contoh.
                </div>
            </article>

        </section>

        <footer class="footer">
            <span>© <?= date('Y') ?> FleetRent</span>
            <span>Fleet Management System</span>
        </footer>

    </main>
</div>

</body>
</html>
