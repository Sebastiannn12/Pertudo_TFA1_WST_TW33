<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn more about Sebastian POS.">
    <title>About | Sebastian POS</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>

<body>
    <header class="site-header">
        <nav class="navbar" aria-label="Main navigation">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Sebastian POS home">
                <span class="brand-mark" aria-hidden="true">S</span>
                Sebastian POS
            </a>
            <p class="nav-label">Workspace</p><div class="nav-links">
                <a class="nav-home" href="<?= site_url('/') ?>">Home</a>
                <a class="nav-about active" aria-current="page" href="<?= site_url('about') ?>">About</a>
                <a class="nav-customers" href="<?= site_url('customers') ?>">Customers</a>
                <a class="nav-users" href="<?= site_url('users') ?>">Users</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="about-section">
            <div class="container about-layout">
                <article class="about-card">
                    <p class="eyebrow">About the system</p>
                    <h1>About Sebastian POS</h1>
                    <p>Sebastian POS is a simple Point-of-Sale website for viewing and organizing customer and staff information.</p>
                    <p>It provides a clean place to access customer contact details and review staff usernames, names, and assigned roles.</p>
                </article>
                <section class="creator-card" aria-labelledby="creator-title">
                    <div class="creator-icon" aria-hidden="true">S</div>
                    <p class="creator-label">Created By</p>
                    <h2 id="creator-title">Francis Sebastian A. Pertudo</h2>
                    <div class="creator-details">
                        <p><span>Created by</span><strong>Francis Sebastian A. Pertudo</strong></p>
                        <p><span>Section</span><strong>TW33</strong></p>
                        <p><span>Course</span><strong>IT0049 Web System Technologies</strong></p>
                        <p><span>Professor</span><strong>Prof. Enriquez</strong></p>
                    </div>
                </section>
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
