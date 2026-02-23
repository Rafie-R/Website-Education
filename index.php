<?php
session_start(); // ← WAJIB PALING ATAS

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah</title>
    <link rel="stylesheet" href="cs/home.css" />
  </head>
  <body>
    <header>
      <nav class="container">
        <a href="#" class="logo">⛵ SeaShanty</a>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#sejarah">-</a></li>
          <li><a href="#arsitektur">-</a></li>
          <li><a href="#wisata">-</a></li>
          <li><a href="#galeri">-</a></li>
          <li><div><b><?= $user['quota_remaining'] ?>🪙</b>
                    </div>
                </li>
            </ul>
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content fade-in">
            <h1>SeaShanty</h1>
            <p>Welcome to SeaShanty E-Book</p>
            <a href="#blog" class="cta-button">Yuk Jelajah!</a>
        </div>
    </section>
    <br />
    <main class="container" id="blog">
        <div class="blog-grid">
            <div class="blog-posts">
                <article class="blog-post fade-in">
                    <img src="assets/portu.jpg" alt="Relief Borobudur" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 03 Oktober 2025</span>
                            <span>👤 Rafie Ashraf</span>
                            <span>🏷️ Sejarah</span>
                        </div>
                        <h2>Pelayaran Eropa Menuju Nusantara</h2>
                        <p>
                            Ternyata ini sebab mengapa bangsa Eropa (Portugis, Spanyol,
                            Inggris, dan Belanda) melakukan penjelajahan menuju Nusantara.
                            Yuk simak artikel lengkapnya ini!
                        </p>
                        <a href="access_book.php" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 Rafie Ashraf</span>
                            <span>🏷️ HTML</span>
                        </div>
                        <h2>HTML Tags</h2>
                        <p>
                            Blog Post ini berisi tentang pengertian, fungsi, dan kegunaan
                            dari beberapa tags yang ada di HTML
                        </p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <!-- <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article>

                <article class="blog-post fade-in">
                    <img src="assets/NoImage.jpg" alt="XXXX" />
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>📅 XX XX XXXX</span>
                            <span>👤 XXXXXXXXX</span>
                            <span>🏷️ XXXXXXXXX</span>
                        </div>
                        <h2>Coming Soon</h2>
                        <p>....</p>
                        <a href="" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </article> -->
            </div>

            <div class="blog-layout">
            <!-- <aside class="sidebar">
          <div class="widget">
            <h3>📖 Artikel Populer</h3>
            <div class="popular-posts">
              <div class="popular-post">
                <img src="assets/Fireplace.jpg" alt="Thumbnail" />
                <div class="popular-post-content">
                  <h4>Misteri Hilangnya Borobudur</h4>
                  <span>5 hari yang lalu</span>
                </div>
              </div>
              <div class="popular-post">
                <img
                  src="/borobudur-jataka-relief-thumbnail.jpg"
                  alt="Thumbnail"
                />
                <div class="popular-post-content">
                  <h4>Relief Jataka di Borobudur</h4>
                  <span>1 minggu yang lalu</span>
                </div>
              </div>
              <div class="popular-post">
                <img
                  src="/borobudur-restoration-thumbnail.jpg"
                  alt="Thumbnail"
                />
                <div class="popular-post-content">
                  <h4>Restorasi Borobudur Modern</h4>
                  <span>2 minggu yang lalu</span>
                </div>
              </div>
            </div>
      </div>

      <div class="widget">
        <h3>🏷️ Tag Populer</h3>
            <div class="tags">
              <a href="#" class="tag">Sejarah</a>
              <a href="#" class="tag">Arsitektur</a>
              <a href="#" class="tag">Buddha</a>
              <a href="#" class="tag">Wisata</a>
              <a href="#" class="tag">Spiritualitas</a>
              <a href="#" class="tag">Jawa Tengah</a>
              <a href="#" class="tag">UNESCO</a>
              <a href="#" class="tag">Relief</a>
            </div>
      </div>

      <div class="widget">
         <h3>📊 Fakta Menarik</h3>
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 0.8rem;">
                🏗️ Dibangun dengan 2 juta blok batu
              </li>
              <li style="margin-bottom: 0.8rem;">📏 Tinggi 42 meter</li>
              <li style="margin-bottom: 0.8rem;">🗿 504 arca Buddha</li>
              <li style="margin-bottom: 0.8rem;">🎨 2.672 panel relief</li>
              <li style="margin-bottom: 0.8rem;">
                🌍 Situs Warisan Dunia UNESCO
              </li>
            </ul>
          </div>
        </aside> -->

                <aside class="sidebar">
          <div class="widget">
            <!-- <h3>Daftar Isi</h3> -->
            <ul>
              <!-- <li><a href="#LatarBelakang">Latar Belakang</a></li>
              <li><a href="#Tokoh">Tokoh Penjelajah</a></li>
              <li><a href="#JalurPelayaran">Jalur Pelayaran</a></li>
              <li><a href="#PerjanjianPelayaran">Perjanjian Pelayaran </a></li> -->
          </ul>
          </div>

          <!-- <div class="widget">
            <h3>Catatan</h3>
              <p>
                Sidebar ini akan tetap terlihat saat kamu scroll ke bawah.
              </p>
          </div> -->
        </aside>
        </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <!-- <div class="footer-content">
          <div class="footer-section">
            <h3>Tentang Borobudur Blog</h3>
            <p>
              Blog ini didedikasikan untuk berbagi pengetahuan dan informasi
              tentang Candi Borobudur, salah satu keajaiban dunia yang menjadi
              kebanggaan Indonesia.
            </p>
          </div>
          <div class="footer-section">
            <h3>Kategori</h3>
            <p><a href="#">Sejarah</a></p>
            <p><a href="#">Arsitektur</a></p>
            <p><a href="#">Wisata</a></p>
            <p><a href="#">Spiritualitas</a></p>
          </div>
          <div class="footer-section">
            <h3>Kontak</h3>
            <p>📧 info@borobudurblog.com</p>
            <p>📱 +62 123 456 7890</p>
            <p>📍 Magelang, Jawa Tengah</p>
          </div>
        </div>
        <div class="social-links">
          <a href="#">📘</a>
          <a href="#">📷</a>
          <a href="#">🐦</a>
          <a href="#">📺</a>
        </div>
        <p
          style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #A0522D;"
        >
          © 2024 Borobudur Blog. Dibuat dengan ❤️ untuk melestarikan warisan
          budaya Indonesia.
        </p> -->
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.blog-post').forEach(post => {
            observer.observe(post);
        });

        // Simulate loading more articles
        function showFullArticle(type) {
            const loading = document.getElementById('loading');
            loading.style.display = 'block';

            setTimeout(() => {
                loading.style.display = 'none';

                let content = '';
                switch (type) {
                    case 'sejarah':
                        content = `
                          <div class="blog-post fade-in" style="margin-top: 2rem;">
                              <div class="blog-content">
                                  <h2>Sejarah Lengkap Candi Borobudur</h2>
                                  <p>Candi Borobudur dibangun sekitar tahun 750-850 Masehi pada masa pemerintahan Dinasti Syailendra. Pembangunan candi ini memakan waktu sekitar 75 tahun dan melibatkan ribuan pekerja dan pengrajin ahli.</p>
                                  <p>Nama "Borobudur" kemungkinan berasal dari kata Sanskerta "Vihara Buddha Uhr" yang berarti "biara Buddha di bukit". Candi ini sempat terlupakan selama berabad-abad hingga ditemukan kembali oleh Sir Thomas Stamford Raffles pada tahun 1814.</p>
                                  <p>Pada tahun 1991, Borobudur ditetapkan sebagai Situs Warisan Dunia UNESCO, mengakui nilai universal dan pentingnya bagi peradaban manusia.</p>
                              </div>
                          </div>
                      `;
                        break;
                    case 'arsitektur':
                        content = `
                          <div class="blog-post fade-in" style="margin-top: 2rem;">
                              <div class="blog-content">
                                  <h2>Keajaiban Arsitektur Mandala Borobudur</h2>
                                  <p>Borobudur dirancang sebagai replika alam semesta dalam kosmologi Buddha. Struktur candi terdiri dari tiga tingkat utama yang melambangkan tiga alam dalam ajaran Buddha.</p>
                                  <p><strong>Kamadhatu (Dunia Nafsu):</strong> Tingkat dasar yang menggambarkan dunia yang masih terikat oleh nafsu dan keinginan duniawi.</p>
                                  <p><strong>Rupadhatu (Dunia Bentuk):</strong> Tingkat tengah dengan relief-relief yang menceritakan kehidupan Buddha dan ajaran-ajarannya.</p>
                                  <p><strong>Arupadhatu (Dunia Tanpa Bentuk):</strong> Tingkat teratas dengan stupa-stupa yang melambangkan pencapaian nirwana.</p>
                              </div>
                          </div>
                      `;
                        break;
                    case 'wisata':
                        content = `
                          <div class="blog-post fade-in" style="margin-top: 2rem;">
                              <div class="blog-content">
                                  <h2>Panduan Wisata Borobudur Terlengkap</h2>
                                  <p><strong>Waktu Terbaik Berkunjung:</strong> Pagi hari (sunrise) atau sore hari untuk menghindari terik matahari dan mendapatkan pencahayaan terbaik untuk foto.</p>
                                  <p><strong>Tiket Masuk:</strong> Tersedia berbagai paket tiket, mulai dari tiket reguler hingga paket sunrise yang memberikan pengalaman spiritual yang tak terlupakan.</p>
                                  <p><strong>Tips Berkunjung:</strong></p>
                                  <ul style="margin-left: 2rem;">
                                      <li>Kenakan pakaian yang nyaman dan sepatu yang tidak licin</li>
                                      <li>Bawa air minum dan topi untuk perlindungan dari sinar matahari</li>
                                      <li>Hormati aturan dan jangan merusak relief atau struktur candi</li>
                                      <li>Gunakan jasa guide untuk pemahaman yang lebih mendalam</li>
                                  </ul>
                              </div>
                          </div>
                      `;
                        break;
                    case 'spiritual':
                        content = `
                          <div class="blog-post fade-in" style="margin-top: 2rem;">
                              <div class="blog-content">
                                  <h2>Dimensi Spiritual Candi Borobudur</h2>
                                  <p>Borobudur bukan sekadar monumen bersejarah, tetapi juga merupakan "kitab batu" yang menceritakan perjalanan spiritual menuju pencerahan.</p>
                                  <p><strong>Pradakshina:</strong> Tradisi berjalan mengelilingi candi searah jarum jam sambil merenungkan relief-relief yang ada, melambangkan perjalanan spiritual dari kegelapan menuju pencerahan.</p>
                                  <p><strong>Simbolisme Stupa:</strong> 72 stupa berlubang di tingkat teratas masing-masing berisi arca Buddha dalam posisi dharmachakra mudra, melambangkan penyebaran ajaran dharma.</p>
                                  <p><strong>Meditasi:</strong> Banyak pengunjung yang datang untuk bermeditasi, merasakan energi spiritual yang terpancar dari arsitektur sakral ini.</p>
                              </div>
                          </div>
                      `;
                        break;
                }

                const blogPosts = document.querySelector('.blog-posts');
                blogPosts.insertAdjacentHTML('beforeend', content);

                // Scroll to new content
                const newPost = blogPosts.lastElementChild;
                newPost.scrollIntoView({ behavior: 'smooth' });

            }, 1500);
        }

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function () {
            // Add hover effect to blog posts
            const blogPosts = document.querySelectorAll('.blog-post');
            blogPosts.forEach(post => {
                post.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-5px)';
                });

                post.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add click effect to tags
            const tags = document.querySelectorAll('.tag');
            tags.forEach(tag => {
                tag.addEventListener('click', function (e) {
                    e.preventDefault();
                    this.style.background = '#8B4513';
                    this.style.color = 'white';

                    setTimeout(() => {
                        this.style.background = '#f0f0f0';
                        this.style.color = '#666';
                    }, 200);
                });
            });

            // Parallax effect for hero section
            window.addEventListener('scroll', function () {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero');
                const rate = scrolled * -0.5;
                hero.style.transform = `translateY(${rate}px)`;
            });
        });

        // Search functionality (basic)
        function searchArticles(query) {
            const posts = document.querySelectorAll('.blog-post');
            posts.forEach(post => {
                const title = post.querySelector('h2').textContent.toLowerCase();
                const content = post.querySelector('p').textContent.toLowerCase();

                if (title.includes(query.toLowerCase()) || content.includes(query.toLowerCase())) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function (e) {
            const nav = document.querySelector('nav');
            const navLinks = document.querySelector('.nav-links');
            const menuToggle = document.querySelector('.menu-toggle');

            if (!nav.contains(e.target) && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
            }
        });
    </script>
</body>

</html>