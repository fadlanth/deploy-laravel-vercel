<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Saya</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #0a0a0a, #14143b);
      color: #fff;
    }

    header {
      text-align: center;
      padding: 80px 20px;
      background: linear-gradient(to right, #0a0a0a, #1c1c3c);
    }

    header h1 {
      font-size: 2.8rem;
      background: linear-gradient(to right, #a855f7, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 10px;
    }

    header p {
      color: #a5b4fc;
      font-size: 1.2rem;
    }

    .biodata {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    .card {
      background: linear-gradient(to bottom right, #1e1e2e, #2a2a40);
      border-radius: 20px;
      padding: 40px;
      width: 400px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.7);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-8px);
    }

    .card img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid transparent;
      background-image: linear-gradient(to right, #a855f7, #6366f1);
      background-origin: border-box;
      background-clip: content-box, border-box;
      margin-bottom: 20px;
    }

    .card h2 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #c084fc;
    }

    .card p {
      margin: 6px 0;
      font-size: 1rem;
      color: #e5e5e5;
    }

    /* Bagian section */
    section {
      padding: 60px 20px;
      max-width: 800px;
      margin: auto;
    }

    section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 30px;
      background: linear-gradient(to right, #a855f7, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .list-box {
      background: linear-gradient(to right, #1f1f2e, #2b2b42);
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.6);
      margin-bottom: 30px;
    }

    .list-box ul {
      list-style: none;
      padding: 0;
    }

    .list-box ul li {
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      color: #ddd;
    }

    .list-box ul li:last-child {
      border-bottom: none;
    }

    footer {
      text-align: center;
      padding: 25px;
      background: #0a0a0a;
      font-size: 0.9rem;
      color: #aaa;
    }

    footer span {
      color: #a855f7;
    }
  </style>
</head>
<body>
  <header>
    <h1>Biodata Saya</h1>
    <p>Perkenalan singkat tentang diri saya ✨</p>
  </header>

  <section class="biodata">
    <div class="card">
      <img src="biodata/assets/memet.jpeg" alt="Foto Saya">
      <h2>syam</h2>
      <p><strong>Kelas:</strong> x ppl 2</p>
      <p>Saya suka karna benyanyi bisa mengekspresikan diri dan membuat orang lain bahagia.</p>
    </div>
  </section>

  <section>
    <h2>Pencapaian</h2>
    <div class="list-box">
      <ul>
        <li>juara 1 lomba paduan suara piala gubernur (2024)</li>
        <li>juara 1 sepakbola soeratin kabupaten garut(2022)</li>
        <li>juara 3 lomba paduan suara pmi</li>
      </ul>
    </div>
  </section>

  <section>
    <h2>Keterampilan</h2>
    <div class="list-box">
      <ul>
        <li>Flutter & Dart</li>
        <li>UI/UX Design (Figma, Adobe XD)</li>
        <li>HTML, CSS, JavaScript</li>
        <li>Backend Development (Node.js, Express)</li>
        <li>Database (MySQL, MongoDB)</li>
      </ul>
    </div>
  </section>

  <footer>
    © 2025 | Dibuat dengan <span>❤</span>
  </footer>
</body>
</html>