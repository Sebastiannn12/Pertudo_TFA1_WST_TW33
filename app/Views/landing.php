<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta
      name="description"
      content="Sebastian POS account management dashboard."
    />
    <title>Home | Sebastian POS</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>" />
  </head>
  <body>
    <header class="site-header">
      <nav class="navbar container" aria-label="Main navigation">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="Sebastian POS home"
          ><span class="brand-mark" aria-hidden="true">S</span>Sebastian POS</a
        >
        <div class="nav-links">
          <a class="active" aria-current="page" href="<?= site_url('/') ?>">Home</a
          ><a href="<?= site_url('about') ?>">About</a><a href="<?= site_url('customers') ?>">Customer Accounts</a
          ><a href="<?= site_url('users') ?>">User Accounts</a>
        </div>
      </nav>
    </header>
    <main>
      <section class="hero">
        <div class="container hero-grid">
          <div>
            <p class="eyebrow">Simple. Reliable. Organized.</p>
            <h1>Welcome to Sebastian POS</h1>
            <p class="lead">
              A clean point-of-sale account dashboard built with CodeIgniter 4
              to keep customer and staff information easy to view and manage.
            </p>
            <div class="actions">
              <a class="button primary" href="<?= site_url('customers') ?>">View Customers</a
              ><a href="<?= site_url('about') ?>" class="button-secondary">
                Discover More
              </a>
            </div>
          </div>
          <aside class="hero-panel" aria-label="System overview">
            <span class="pill">Dashboard overview</span>
            <h2>Everything you need, at a glance.</h2>
            <p>
              Move quickly between customer records and user accounts from one
              focused workspace.
            </p>
            <div class="status"><i></i>System operational</div>
          </aside>
        </div>
      </section>
      <section class="section container" aria-labelledby="summary-title">
        <div class="section-heading">
          <div>
            <p class="eyebrow">Quick summary</p>
            <h2 id="summary-title">Your POS workspace</h2>
          </div>
          <p>Access the core areas of Sebastian POS.</p>
        </div>
        <div class="card-grid">
          <article class="summary-card">
            <span class="icon">C</span>
            <p>Customers</p>
            <h3>Customer directory</h3>
            <a href="<?= site_url('customers') ?>">View accounts &rarr;</a>
          </article>
          <article class="summary-card">
            <span class="icon">U</span>
            <p>Users</p>
            <h3>Staff directory</h3>
            <a href="<?= site_url('users') ?>">View accounts &rarr;</a>
          </article>
          <article class="summary-card">
            <span class="icon success">✓</span>
            <p>System status</p>
            <h3 class="green">Online</h3>
            <span class="card-note">Ready for use</span>
          </article>
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
