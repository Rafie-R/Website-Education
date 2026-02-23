// Mobile menu toggle
function toggleMenu() {
  const navLinks = document.querySelector(".nav-links");
  navLinks.classList.toggle("active");
}

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Fade in animation on scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("fade-in");
    }
  });
}, observerOptions);

document.querySelectorAll(".blog-post").forEach((post) => {
  observer.observe(post);
});

// Simulate loading more articles
function showFullArticle(type) {
  const loading = document.getElementById("loading");
  loading.style.display = "block";

  setTimeout(() => {
    loading.style.display = "none";

    let content = "";
    switch (type) {
      case "sejarah":
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
      case "arsitektur":
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
      case "wisata":
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
      case "spiritual":
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

    const blogPosts = document.querySelector(".blog-posts");
    blogPosts.insertAdjacentHTML("beforeend", content);

    // Scroll to new content
    const newPost = blogPosts.lastElementChild;
    newPost.scrollIntoView({ behavior: "smooth" });
  }, 1500);
}

// Add some interactive effects
document.addEventListener("DOMContentLoaded", function () {
  // Add hover effect to blog posts
  const blogPosts = document.querySelectorAll(".blog-post");
  blogPosts.forEach((post) => {
    post.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-5px)";
    });

    post.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)";
    });
  });

  // Add click effect to tags
  const tags = document.querySelectorAll(".tag");
  tags.forEach((tag) => {
    tag.addEventListener("click", function (e) {
      e.preventDefault();
      this.style.background = "#8B4513";
      this.style.color = "white";

      setTimeout(() => {
        this.style.background = "#f0f0f0";
        this.style.color = "#666";
      }, 200);
    });
  });

  // Parallax effect for hero section
  window.addEventListener("scroll", function () {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector(".hero");
    const rate = scrolled * -0.5;
    hero.style.transform = `translateY(${rate}px)`;
  });
});

// Search functionality (basic)
function searchArticles(query) {
  const posts = document.querySelectorAll(".blog-post");
  posts.forEach((post) => {
    const title = post.querySelector("h2").textContent.toLowerCase();
    const content = post.querySelector("p").textContent.toLowerCase();

    if (
      title.includes(query.toLowerCase()) ||
      content.includes(query.toLowerCase())
    ) {
      post.style.display = "block";
    } else {
      post.style.display = "none";
    }
  });
}

// Close mobile menu when clicking outside
document.addEventListener("click", function (e) {
  const nav = document.querySelector("nav");
  const navLinks = document.querySelector(".nav-links");
  const menuToggle = document.querySelector(".menu-toggle");

  if (!nav.contains(e.target) && navLinks.classList.contains("active")) {
    navLinks.classList.remove("active");
  }
});
