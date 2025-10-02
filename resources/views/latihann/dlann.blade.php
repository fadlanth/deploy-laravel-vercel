<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Personal Website Muhammad Fadan</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
      /* Reset */
      * {
        box-sizing: border-box;
      }
      body {
        margin: 0;
        background: #fff;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        color: #1c2833;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      header {
        position: relative;
        background: linear-gradient(135deg, #0b2545, #13293d);
        color: #f1c40f;
        text-align: center;
        padding: 5rem 1rem 6rem;
        box-shadow: 0 8px 20px rgba(11, 37, 69, 0.7);
        overflow: visible;
      }
      header img.profile-pic {
        width: 160px;
        height: 160px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid #f1c40f;
        position: absolute;
        bottom: -80px;
        left: 50%;
        transform: translateX(-50%);
        background: white;
        box-shadow: 0 8px 15px rgba(241, 196, 15, 0.7);
        transition: transform 0.4s ease;
        cursor: pointer;
      }
      header img.profile-pic:hover {
        transform: translateX(-50%) scale(1.1);
        box-shadow: 0 12px 25px rgba(241, 196, 15, 0.9);
      }
      header h1 {
        font-weight: 900;
        font-size: 2.8rem;
        margin-bottom: 0.2rem;
        letter-spacing: 2px;
        text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
      header p.lead {
        font-size: 1.2rem;
        font-weight: 600;
        letter-spacing: 0.3px;
        margin-bottom: 1.2rem;
        color: #f9d342cc;
        text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
      }
      .social-icons {
        margin-top: 0.5rem;
      }
      .social-icons a {
        color: #f1c40f;
        font-size: 1.8rem;
        margin: 0 0.7rem;
        transition: color 0.3s ease, transform 0.3s ease;
        text-shadow: 0 0 6px #f1c40f88;
        display: inline-block;
      }
      .social-icons a:hover {
        color: #d4ac0d;
        transform: scale(1.3);
        text-shadow: 0 0 12px #d4ac0dcc;
      }
      main {
        flex-grow: 1;
        max-width: 1100px;
        margin: 7rem auto 3rem;
        padding: 0 1rem 3rem;
      }
      section {
        margin-bottom: 3rem;
      }
      .section-title {
        font-size: 2rem;
        font-weight: 800;
        color: #13293d;
        border-bottom: 4px solid #f1c40f;
        padding-bottom: 0.5rem;
        margin-bottom: 2rem;
        letter-spacing: 1px;
        user-select: none;
      }
      /* Biodata Grid */
      .biodata-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.8rem;
      }
      .card {
        background: white;
        border-radius: 14px;
        padding: 2rem;
        box-shadow: 0 12px 30px rgb(0 0 0 / 0.08);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        cursor: default;
      }
      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgb(0 0 0 / 0.15);
      }
      .card p {
        font-size: 1.15rem;
        margin-bottom: 1rem;
        color: #34495e;
      }
      .card p strong {
        color: #13293d;
      }
      .card a {
        color: #f1c40f;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.3s ease;
      }
      .card a:hover {
        color: #d4ac0d;
        text-decoration: underline;
      }
      /* Project Grid */
      .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
      }
      .project-card {
        background: white;
        border-radius: 16px;
        padding: 1.8rem 2rem;
        box-shadow: 0 10px 28px rgb(0 0 0 / 0.1);
        cursor: pointer;
        transition: all 0.35s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .project-card:hover {
        box-shadow: 0 22px 48px rgb(0 0 0 / 0.18);
        transform: translateY(-10px) scale(1.04);
      }
      .project-card h5 {
        color: #13293d;
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 0.8rem;
        letter-spacing: 0.03em;
      }
      .project-card p {
        color: #2c3e50dd;
        font-size: 1.05rem;
        line-height: 1.5;
        flex-grow: 1;
      }
      /* Modal styling override */
      .modal-content {
        border-radius: 18px;
        overflow: hidden;
      }
      .modal-header {
        background: #13293d;
        color: #f1c40f;
        font-weight: 700;
        font-size: 1.4rem;
        letter-spacing: 0.05em;
        border-bottom: none;
      }
      .btn-close {
        filter: brightness(10);
        opacity: 0.8;
        transition: opacity 0.3s ease;
      }
      .btn-close:hover {
        opacity: 1;
      }
      .modal-body p {
        font-size: 1.1rem;
        color: #34495e;
      }
      .modal-footer {
        border-top: none;
        padding: 1rem 2rem 1.8rem;
      }
      .btn-secondary {
        background-color: #34495e;
        border: none;
        font-weight: 600;
        letter-spacing: 0.05em;
        transition: background-color 0.3s ease;
      }
      .btn-secondary:hover {
        background-color: #2c3e50;
      }

      @media (max-width: 575.98px) {
        header h1 {
          font-size: 2rem;
        }
        header p.lead {
          font-size: 1rem;
        }
      }
      /* DARK MODE STYLES */
      body.dark-mode {
        background: #121212;
        color: #f8f9fa;
      }
      .dark-mode header {
        background: linear-gradient(135deg, #0d1117, #161b22);
        color: #f1c40f;
      }
      .dark-mode header p.lead {
        color: #f9d342cc;
      }
      .dark-mode .social-icons a {
        color: #f1c40f;
      }
      .dark-mode .section-title {
        color: #f1c40f;
        border-color: #d4ac0d;
      }
      .dark-mode .card,
      .dark-mode .project-card {
        background: #1e1e1e;
        color: #f1f1f1;
        box-shadow: 0 10px 28px rgba(255, 255, 255, 0.05);
      }
      .dark-mode .card p,
      .dark-mode .project-card p {
        color: #ccc;
      }
      .dark-mode .card a {
        color: #f9d342;
      }
      .dark-mode .card a:hover {
        color: #f1c40f;
      }
      .dark-mode .project-card h5 {
        color: #f1c40f;
      }
      .dark-mode .modal-content {
        background: #1f1f1f;
        color: #f1f1f1;
      }
      .dark-mode .modal-header {
        background: #0d1117;
        color: #f1c40f;
      }
      .dark-mode .btn-secondary {
        background-color: #2c3e50;
      }
    </style>
  </head>
  <body>
    <header>
      <img src="https://i.pravatar.cc/150?img=15" alt="Foto Muhammad Fadan" class="profile-pic" />
      <h1>Halo, Saya Muhammad Fadan</h1>
      <p class="lead">Siswa SMKN 1 Garut | Pengembangan Perangkat Lunak dan Gim</p>
      <div class="social-icons" aria-label="Ikon media sosial">
        <button id="toggle-dark" class="btn btn-sm btn-outline-warning position-absolute top-0 end-0 m-3" aria-label="Toggle Dark Mode">
          <i class="bi bi-moon-stars-fill"></i>
        </button>

        <a href="https://instagram.com/fadan" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://linkedin.com/in/fadan" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/fadlanth" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
      </div>
    </header>

    <main>
      <!-- Quote Inspiratif -->
      <section>
        <div class="card text-center p-4" style="background: #f9f9f9">
          <blockquote class="blockquote mb-0">
            <p style="font-style: italic">“Keberhasilan terbesar adalah bangkit setiap kali kamu jatuh.”</p>
            <footer class="blockquote-footer mt-2">Nelson Mandela</footer>
          </blockquote>
        </div>
      </section>

      <!-- Tentang Saya -->
      <section>
        <h2 class="section-title">Tentang Saya</h2>
        <div class="card">
          <p>
            Saya adalah siswa jurusan Pengembangan Perangkat Lunak dan Gim di SMKN 1 Garut, yang memiliki minat tinggi terhadap teknologi, pemrograman, dan inovasi digital. Saya percaya bahwa dengan belajar dan mencoba, tidak ada yang tidak
            mungkin untuk dikuasai.
          </p>
        </div>
      </section>

      <!-- Timeline Pendidikan -->
      <section>
        <h2 class="section-title">Pendidikan</h2>
        <div class="biodata-grid">
          <div class="card">
            <p>
              <strong><i class="bi bi-mortarboard-fill"></i> SDN 7 Paminggir</strong><br />Lulus tahun 2020
            </p>
          </div>
          <div class="card">
            <p>
              <strong><i class="bi bi-mortarboard-fill"></i>MTS Al-Qur'an Kudang</strong><br />Lulus tahun 2023
            </p>
          </div>
          <div class="card">
            <p>
              <strong><i class="bi bi-mortarboard-fill"></i> SMKN 1 Garut</strong><br />Jurusan PPLG (2024–Sekarang)
            </p>
          </div>
        </div>
      </section>

      <!-- Keterampilan -->
      <section>
        <h2 class="section-title">Keterampilan</h2>
        <div class="biodata-grid">
          <div class="card">
            <p>
              <strong><i class="bi bi-code-slash"></i> Pemrograman</strong>
            </p>
            <ul>
              <li>HTML & CSS</li>
              <li>MySQL</li>
              <li>JavaScript (Dasar)</li>
            </ul>
          </div>
          <div class="card">
            <p>
              <strong><i class="bi bi-tools"></i> Tools & Framework</strong>
            </p>
            <ul>
              <li>Bootstrap</li>
              <li>Laravel</li>
              <li>Git & GitHub</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Prestasi -->
      <section>
        <h2 class="section-title">Prestasi</h2>
        <div class="project-grid">
          <div class="project-card">
            <h5><i class="bi bi-award-fill"></i> Juara 1 Lomba Pidato PAI</h5>
            <p>Meraih peringkat kesatu dalam lomba pidato PAI IBC Ramadhan Competition SMKN 1 Garut 2025.</p>
          </div>
          <div class="project-card">
            <h5><i class="bi bi-trophy-fill"></i> Finalis Lomba Pidato PAI</h5>
            <p>Masuk ke tahap final dalam Lomba Pidato PAI IBC Ramadhan Competition SMKN 1 Garut 2025.</p>
          </div>
        </div>
      </section>

      <!-- Portofolio -->
      <section>
        <h2 class="section-title">Portofolio Proyek</h2>
        <div class="project-grid">
          <div class="project-card" tabindex="0" data-bs-toggle="modal" data-bs-target="#project1Modal">
            <img src="https://via.placeholder.com/400x200.png?text=Web+Biodata+Flutter" alt="Screenshot Web Biodata Flutter" class="img-fluid rounded mb-3" />
            <h5><i class="bi bi-phone"></i> Web Biodata menggunakan Flutter</h5>
            <p>Membuat aplikasi biodata personal menggunakan Flutter untuk tampilan modern dan responsif.</p>
          </div>
          <div class="project-card" tabindex="0" data-bs-toggle="modal" data-bs-target="#project2Modal">
            <img src="https://via.placeholder.com/400x200.png?text=Kalkulator+C%23" alt="Screenshot Kalkulator C#" class="img-fluid rounded mb-3" />
            <h5><i class="bi bi-calculator"></i> Kalkulator dengan C#</h5>
            <p>Aplikasi kalkulator desktop sederhana yang dibuat menggunakan bahasa pemrograman C#.</p>
          </div>
          <div class="project-card" tabindex="0" data-bs-toggle="modal" data-bs-target="#project3Modal">
            <img src="https://via.placeholder.com/400x200.png?text=Website+Travel" alt="Screenshot Website Travel" class="img-fluid rounded mb-3" />
            <h5><i class="bi bi-globe"></i> Website Travel dengan HTML, CSS, dan JavaScript</h5>
            <p>Membangun website travel interaktif dan responsif menggunakan HTML, CSS, dan JavaScript.</p>
          </div>
        </div>
      </section>

      <!-- Hubungi Saya -->
      <section>
        <h2 class="section-title">Hubungi Saya</h2>
        <div class="card">
          <p>Jika kamu ingin berdiskusi, berkolaborasi, atau sekadar menyapa, silakan hubungi saya di:</p>
          <ul>
            <li><strong>Email:</strong> <a href="mailto:fdln@gmail.com">fdln@gmail.com</a></li>
            <li><strong>Instagram:</strong> <a href="https://instagram.com/fadlan" target="_blank">@fadan</a></li>
            <li><strong>GitHub:</strong> <a href="https://github.com/fadlan" target="_blank">@fadan</a></li>
          </ul>
        </div>
      </section>
    </main>

    <!-- Modal tetap gunakan modal sebelumnya -->
    <!-- ... (Modal project 1, 2, 3 tetap sama) ... -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const toggleButton = document.getElementById("toggle-dark");
      toggleButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
        const icon = toggleButton.querySelector("i");
        icon.classList.toggle("bi-moon-stars-fill");
        icon.classList.toggle("bi-brightness-high-fill");
      });
    </script>
  </body>
</html>
