<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="View user accounts in Sebastian POS.">
    <title>User Accounts | Sebastian POS</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>

<body>
    <header class="site-header">
        <nav class="navbar" aria-label="Main navigation">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Sebastian POS home"><span class="brand-mark" aria-hidden="true">S</span>Sebastian POS</a>
            <p class="nav-label">Workspace</p><div class="nav-links"><a class="nav-home" href="<?= site_url('/') ?>">Home</a><a class="nav-about" href="<?= site_url('about') ?>">About</a><a class="nav-customers" href="<?= site_url('customers') ?>">Customers</a><a class="nav-users active" aria-current="page" href="<?= site_url('users') ?>">Users</a></div>
        </nav>
    </header>
    <main class="page-main">
        <section class="container">
            <div class="page-title">
                <div>
                    <p class="eyebrow">Team management</p>
                    <h1>User Accounts</h1>
                    <p>View staff identities and assigned roles across the POS system.</p>
                </div>
            </div>
            <div class="table-card">
                <div class="table-heading">
                    <div>
                        <h2>User list</h2>
                        <p>Current staff account records</p>
                    </div><span class="page-badge">Total Users: 6</span>
                </div>
                <div class="table-responsive">
                    <table>
                        <caption class="sr-only">User accounts with username, full name, and role</caption>
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td data-label="Username"><strong class="blue"><?= esc($user['username']) ?></strong></td>
                                    <td data-label="Full Name"><strong><?= esc($user['full_name']) ?></strong></td>
                                    <td data-label="Role"><span class="role"><?= esc($user['role']) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container footer-content">
            <p>&copy; 2026 Sebastian POS. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
