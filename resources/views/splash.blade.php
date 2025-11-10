<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
  <title>Crocodic Smart Farming - Splash</title>

 
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* gunakan dynamic viewport height agar tidak terpotong di mobile */
    :root {
      --vh: 100dvh; /* modern */
    }

    html,body {
      height: calc(var(--vh));
      margin: 0;
      padding: 0;
      overflow: hidden;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      background: #F4FAF4;
    }

    /* container full screen */
    .splash-wrap {
      position: relative;
      width: 100%;
      height: calc(var(--vh));
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* tanah (oval) responsif, gunakan vw agar proporsional */
    .soil {
      position: absolute;
      left: 50%;
      bottom: 20vh; /* jarak dari bawah, relatif */
      transform: translateX(-50%) translateY(120px) scale(0.98);
      width: 60vw;            /* lebar bergantung layar */
      max-width: 520px;
      height: 18vw;           /* proporsional; hasil oval */
      max-height: 180px;
      background: #3D2817;
      border-radius: 50%;
      opacity: 0;
      box-shadow: 0 20px 40px rgba(0,0,0,0.12);
      will-change: transform, opacity;
    }

    /* animasi soil slide up */
    @keyframes soilUp {
      0% {
        transform: translateX(-50%) translateY(150px) scale(0.96);
        opacity: 0;
      }
      70% {
        transform: translateX(-50%) translateY(-6px) scale(1.005);
        opacity: 1;
      }
      100% {
        transform: translateX(-50%) translateY(0) scale(1);
        opacity: 1;
      }
    }

    /* plant (logo kecil) */
    .plant {
      position: absolute;
      left: 50%;
      transform: translateX(-50%) translateY(120px) scale(0.6);
      bottom: calc(20vh + (18vw * 0.36)); /* sit di atas tanah */
      opacity: 0;
      will-change: transform, opacity;
    }

    /* bounce + scale */
    @keyframes plantBounce {
      0% {
        transform: translateX(-50%) translateY(120px) scale(0.45);
        opacity: 0;
      }
      55% {
        transform: translateX(-50%) translateY(-18px) scale(1.12);
        opacity: 1;
      }
      75% {
        transform: translateX(-50%) translateY(6px) scale(0.98);
      }
      100% {
        transform: translateX(-50%) translateY(0) scale(1);
        opacity: 1;
      }
    }

    /* final big logo + text */
    .final-panel {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding-left: clamp(1rem, 6vw, 4.5rem);
      flex-direction: column;
      gap: 0.6rem;
      background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 60%);
      pointer-events: none;
      opacity: 0;
      transform: scale(0.97);
      color: white;
      will-change: opacity, transform, background;
    }

    @keyframes finalIn {
      0% { opacity: 0; transform: scale(0.92); }
      100% { opacity: 1; transform: scale(1); }
    }

    /* background transition (krem -> hijau) */
    .bg-transition {
      position: absolute;
      inset: 0;
      background: #F4FAF4;
      transition: background-color 0.7s ease;
      z-index: 0;
    }

    /* small white circular card for logo inside final */
    .final-logo-wrap {
      width: clamp(72px, 12vw, 160px);
      height: clamp(72px, 12vw, 160px);
      background: white;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 20px 40px rgba(0,0,0,0.18);
    }

    /* helper utility to make elements visible when animate class added */
    .soil.show { animation: soilUp 0.92s cubic-bezier(.22,1,.36,1) forwards; }
    .plant.show { animation: plantBounce 1.05s cubic-bezier(.22,1,.36,1) forwards; }
    .final-panel.show { animation: finalIn 0.9s cubic-bezier(.2,.9,.2,1) forwards; opacity: 1; }

    /* ensure text responsive */
    .final-title { font-size: clamp(22px, 3.8vw, 36px); font-weight: 700; letter-spacing: .06em; text-transform: uppercase; }
    .final-sub { font-size: clamp(14px, 2.0vw, 18px); font-weight: 600; letter-spacing: .08em; }

    /* keep z-index stacking sensible */
    .z-top { z-index: 40; }      /* final content + logo */
    .z-mid { z-index: 30; }      /* plant + soil */
    .z-back { z-index: 10; }     /* bg-transition */

    /* small accessibility */
    img { display:block; }
  </style>
</head>
<body>

  <div class="splash-wrap">
    <!-- background layer that will change color -->
    <div id="bgLayer" class="bg-transition z-back"></div>

    <!-- soil (oval) -->
    <div id="soil" class="soil z-mid" aria-hidden="true"></div>

    <!-- small plant/logo that pops out of soil -->
    <div id="plant" class="plant z-mid" aria-hidden="true">
      <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center shadow" style="padding:0.45rem;">
        <!-- ganti path sesuai project: /public/asset/img/logo.png -->
        <img src="{{ asset('asset/img/logo.png') }}" alt="logo" style="width:100%;height:100%;object-fit:contain;">
      </div>
    </div>

    <!-- final panel (logo besar + text) -->
    <div id="final" class="final-panel z-top" aria-hidden="true" role="presentation">
      <div class="final-logo-wrap mb-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Crocodic Logo" style="width:70%;height:70%;object-fit:contain;">
      </div>

      <div class="text-left">
        <div class="final-title">CROCODIC</div>
        <div class="final-sub">SMART FARMING</div>
      </div>
    </div>
  </div>

  <script>
    // fallback: set --vh for browsers not supporting 100dvh well
    (function setVh() {
      const doc = document.documentElement;
      function update() {
        const vh = window.innerHeight * 0.01;
        doc.style.setProperty('--vh-fallback', `${vh}px`);
      }
      update();
      window.addEventListener('resize', update);
    })();

    // urutan animasi: soil -> plant bounce -> background menjadi hijau -> final panel muncul -> redirect
    window.addEventListener('load', () => {
      const soil = document.getElementById('soil');
      const plant = document.getElementById('plant');
      const bg = document.getElementById('bgLayer');
      const finalPanel = document.getElementById('final');

      // Step 1: soil muncul (dari bawah)
      setTimeout(() => {
        soil.classList.add('show');
      }, 160); // delay kecil agar terlihat natural

      // Step 2: plant bounce keluar setelah soil terlihat
      setTimeout(() => {
        plant.classList.add('show');
      }, 1100); // sekitar soil animation hampir selesai

      // Step 3: transisi background ke hijau sedikit setelah plant settle
      setTimeout(() => {
        // haluskan transisi background
        bg.style.backgroundColor = '#134E1E'; // hijau gelap
        // juga beri sedikit gelap overlay agar kontras teks
        bg.style.transition = 'background-color 0.7s ease';
      }, 2000);

      // Step 4: munculkan panel final (logo besar + teks) setelah bg berubah
      setTimeout(() => {
        finalPanel.classList.add('show');
      }, 2400);

      // Step 5: setelah beberapa detik pindah ke beranda (ganti route jika perlu)
      setTimeout(() => {
        // jika kamu ingin tetap di halaman, comment baris bawah
        // pastikan route('beranda') tersedia di Laravel; kalau tidak, ganti ke '/home' atau URL lain
        window.location.href = "{{ route('beranda') }}";
      }, 4800);
    });
  </script>
</body>
</html>
