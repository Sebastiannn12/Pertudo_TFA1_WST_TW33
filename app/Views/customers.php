<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="View customer accounts in Sebastian POS.">
    <title>Customer Accounts | Sebastian POS</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>

<body>
    <header class="site-header">
        <nav class="navbar container" aria-label="Main navigation">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Sebastian POS home"><span class="brand-mark" aria-hidden="true">S</span>Sebastian POS</a>
            <div class="nav-links"><a href="<?= site_url('/') ?>">Home</a><a href="<?= site_url('about') ?>">About</a><a class="active" aria-current="page" href="<?= site_url('customers') ?>">Customer Accounts</a><a href="<?= site_url('users') ?>">User Accounts</a></div>
        </nav>
    </header>
    <main class="page-main">
        <section class="container">
            <div class="page-title">
                <div>
                    <p class="eyebrow">Account management</p>
                    <h1>Customer Accounts</h1>
                    <p>View customer contact information in one organized directory.</p>
                </div><span class="page-badge">Customer directory</span>
            </div>
            <div class="table-card">
                <div class="table-heading">
                    <div>
                        <h2>Customer list</h2>
                        <p>Current customer account records</p>
                    </div><span class="page-badge">Total Customers: 5</span>
                </div>
                <div class="table-responsive">
                    <table>
                        <caption class="sr-only">Customer accounts with full name, email address, and phone number</caption>
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customers as $customer): ?>
                                <tr>
                                    <td data-label="Full Name"><strong><?= esc($customer['full_name']) ?></strong></td>
                                    <td data-label="Email Address"><?= esc($customer['email']) ?></td>
                                    <td data-label="Phone Number"><?= esc($customer['phone']) ?></td>
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
