<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayaran Eropa Menuju Nusantara</title>
    <link rel="stylesheet" href="cs/Style_Sejarah.css" />
  </head>
  <body>
    <header id="start">
      <nav class="container">
        <p class="logo">⛵ SeaShanty</p>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="">.</a></li>
          <li><a href="">.</a></li>
          <li><a href="">.</a></li>
          <li><div><b><?= $user['quota_remaining'] ?>🪙</b>
            </div>
          </li>
        </ul>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
      </nav>
    </header>

    <main class="container" id="blog">
      <div class="blog-layout">
        <div class="blog-posts">
          <article class="blog-post fade-in">
            <img src="assets/portu.jpg" alt="Relief Borobudur" />
            <div class="blog-content" style="padding-bottom: 0px;">
              <h1 id="LatarBelakang">
                Latar Belakang Bangsa Eropa Melakukan Penjelajahan ke Nusantara
                (Samudra)
              </h1>
              <!-- Perang Salib -->
              <div>
                <h2>1. Perang Salib</h2>
                <p class="ident">
                  Perang Salib adalah perang-perang agama yang ada di Asia Barat
                  dan Eropa, diantara abad ke-11 sampai abad ke-17. Perang ini
                  melibatkan Masyarakat dari Eropa melawan Turki Seljuk dan
                  orang Arab. Perang ini pun telah berlangsung selama 200 tahun
                  dan terbagi menjadi tujuh periode.
                </p>
                <p class="ident">
                  Bagi orang Kristen, Perang tersebut bernama Perang Salib.
                  Sedangkan bagi orang islam, Perang tersebut bernama Perang
                  Suci. Dan penyebab Perang Salib atau Perang Suci adalah
                  perebutan Kota Yerusalem. Perang ini pun menghabiskan kekayaan
                  bangsa Eropa.
                </p>
                <p class="ident">
                  Perang Salib pertama kali dicetuskan oleh Paus Urbanus II pada
                  tahun 1095. Dalam siding Konsili Clermont, beliau meminta para
                  hadirinnya untuk mengangkat senjata membantu Kaisar Romawi
                  Timur melawan orang Turki Seljuk. Dan orang-orang yang
                  mengikuti perang ini memiliki niat yang berbeda-beda, ada yang
                  niat supaya bisa terangkat ramai ke surga, ada yang niat
                  supaya bisa bakti kepada majikannya, ada yang niat untuk
                  mencari ketenaran dan nama baik, dan ada pula berniat untuk
                  mengambil keuntungan ekonomi maupun politik melalui
                  keikutsertaannya.
                </p>
                <p class="ident">
                  Perang Salib Pertama ini disebut sebagai “lawatan” atau
                  “ziarah”. Dan setelah kata “crucesignatus” datang, baru kata
                  istilah “salib” muncul. Kata “crucesignatus” datang dari
                  Bahasa latin yang mulai digunakan pada akhir abad ke-12.
                </p>
                <p class="ident">
                  Menurut Kamus Bahasa Inggris Oxford, kata “crusade” sangat
                  berkaitan dengan kata croisade dalam Bahasa Prancis modern,
                  croisée dalam Bahasa Prancis kuno, crozada dalam Bahasa
                  Provençal, cruzada dalam Bahasa Portugis dan Spanyol, dan
                  crociata dalam Bahasa Italia. Semua Bahasa ini adalah turunan
                  dari kata cruciāta atau cruxiata, yang artinya “menyiksa” atau
                  “menyalibkan”, tetapi sejak abad ke-12 juga berarti “membuat
                  tanda salib”.
                </p>
                <p class="ident">
                  Giles Constable, dalam The Historiography of the Crusades
                  (2001), menjabarkan empat sudut padang berbeda dari kalangan
                  para pengkaji Sejarah lainnya:
                </p>
                <div>
                  <h3>A) Sudut Pandang Kaum Tradisionalis</h3>
                  <p class="ident">
                    Kaum tradisionalis membatasi pengertian Perang Salib sebagai
                    perang-perang yang dilakukan oleh umat Kristen di Tanah Suci
                    semenjak 1095 sampai 1291, baik untuk membantu umat Kristen
                    di negeri itu maupun untuk memerdekakan Yerusalem dan Makam
                    Suci dari penjajahan.
                  </p>
                  <h3>B) Sudut Pandang Kaum Pluralis</h3>
                  <p class="ident">
                    Kaum pluralis menggunakan istilah Perang Salib sebagai
                    sebutan bagi segala macam aksi militer yang direstui secara
                    terbuka oleh paus yang sedang menjabat. Pemaknaan ini
                    mencerminkan pandangan Gereja Katolik Roma (termasuk
                    tokoh-tokoh Abad Pertengahan pada masa Perang Salib, seperti
                    Santo Bernardus dari Clairvaux), bahwasanya setiap perang
                    yang direstui oleh Sri Paus dapat disebut secara sah sebagai
                    Perang Salib, tanpa membeda-bedakan sebab, alasan, maupun
                    tempatnya.
                  </p>
                  <p>
                    Definisi yang luas ini mencakup pula aksi-aksi penyerangan
                    terhadap kaum penyembah berhala dan ahli bidah seperti
                    Perang Salib Albigensia, Perang Salib Utara, dan Perang
                    Salib Husite. Hal ini juga mencakup perang-perang demi
                    keuntungan politik dan penguasaan wilayah seperti Perang
                    Salib Aragon di Sisilia, Perang Salib yang dimaklumkan Sri
                    Paus Inosensius III terhadap Markward dari Anweiler pada
                    1202, dan yang dimaklumkan terhadap orang-orang Stedingen.
                  </p>
                  <h3>C) Sudut Pandang Kaum Generalis</h3>
                  <p class="ident">
                    Kaum generalis memandang Perang Salib sebagai segala macam
                    perang suci yang berkaitan dengan Gereja Latin dan yang
                    dilakukan sebagai tindakan bela agama.
                  </p>
                  <h3>D) Sudut Pandang Kaum Popularis</h3>
                  <p>
                    Kaum popularis membatasi pengertian Perang Salib sebagai
                    perang-perang yang bercirikan gerakan khalayak ramai dengan
                    alasan keagamaan, yakni hanya Perang Salib pertama dan
                    mungkin pula Perang Salib Rakyat.
                  </p>
                </div>
              </div>

              <!-- Jatuhnya Konstantinopel -->
              <div>
                <h2>2. Jatuhnya Konstantinopel</h2>
                <p class="ident">
                  Dahulu kala, Konstantinopel merupakan salah satu wilayah yang
                  dikuasai oleh Kerajaan Romawi-Bryzantium. Dan pada tanggal 29
                  Mei 1453, Sultan Mehmed II (Raja Turki) berhasil menguasai
                  Konstantinopel. Sultan Mehmed II mengusai Konstantinopel
                  karena kota tersebut merupakan salah satu titik penting dalam
                  jalur perdagangan darat, yang menyambungkan Eropa dengan Asia
                </p>
                <p class="ident">
                  Setelah Konstatinopel dikuasai oleh Sultan Mehmed II, jalur
                  perdagangan darat Asia dan Eropa menjadi terputus. Hal
                  tersebut disebabkan karena Sultan Mehmed II melarang
                  orang-orang Eropa berdagang di Konstatinopel.
                </p>
                <p class="ident">
                  Setelah konstantinopel dikuasai oleh Sultan Mehmed II selama
                  23 hari, Sultan Mehmed II telah menyelesaikan segala urusannya
                  dan juga telah mengangkat konstantinopel sebagai ibu kota.
                </p>
              </div>

              <!-- Mencari Kepulauan Rempah -->
              <div>
                <h2>3. Mencari Kepulauan Rempah-Rempah</h2>
                <p class="ident">
                  Menurut Merle Calvin Ricklefs, tujuan utama Eropa menuju
                  Nusantara adalah rempah-rempah. Dan hal tersebut dibuktikan
                  oleh bangsawan eropa bahwa mereka membutuhkan rempah-rempah
                  bukan hanya sebagi bahan baku obat, parfum, makanan, dan
                  pengawet. Namun mereka juga membutuhkan rempah-rempah supaya
                  bisa dijual dan mendapetkan keuntungan.
                </p>
                <p class="ident">
                  Selain India, Nusantara juga termasuk tempat yang terkenal
                  sebagai penghasil rempah-rempah yang berlimpah, terutama pala,
                  lada, dan cengkeh, yang nilai beli-jualnya sangat mahal. Oleh
                  karena itu bisa dibuktikan bahwasan bangsa Eropa berniat untuk
                  memonopoli perdagangan rempah-rempah, supaya mendapatkan
                  keuntungan.
                </p>
              </div>

              <!-- Perkembangan Teknologi -->
              <div>
                <h2>4. Perkembangan Teknologi dan Sains</h2>
                <p class="ident">
                  Setelah mereka kalah di Perang Salib, perkembangan teknologi
                  dan sains mereka berkembang menjadi sangat pesat. Dan pada
                  masa itu juga, munculah teori Heliosentrisme yang
                  diperkenalkan oleh Nicolas Copernicus dan Gelileo Galilei.
                </p>
                <p class="ident">
                  Hal tersebut bisa dibuktikan oleh berkembangnya teknologi
                  pelayaran, seperti ditemukannya Kompas, Meriam, dan alat-alat
                  lainnya. Hal tersebut membuat pencarian tempat penghasil
                  rempah-rempah dapat dilakukan melalui laut.
                </p>
              </div>

              <!-- Semangat 3G -->
              <div>
                <h2>5. Semangat 3G</h2>
                <p class="ident">
                  Pada akhirnya, penjelajahan samudera yang dilakukan
                  bangsa-bangsa Eropa disertai semangat 3G, yaitu gold
                  (kekayaan), glory (kejayaan), dan gospel (menyebarkan agama
                  Nasrani).
                </p>
                <div>
                  <h3>A) Gold</h3>
                  <p class="ident">
                    Gold berarti keinginan memperoleh kekayaan di
                    wilayah-wilayah baru yang ditemukan, yaitu emas, perak dan
                    bahan tambang serta bahan-bahan lain yang sangat berharga.
                    Waktu itu, wilayah utama yang dituju adalah Guinea dan
                    rempah-rempah dari Timur. Kekayaan yang dieksploitasi dari
                    daerah baru itu kemudian digunakan untuk kepentingan
                    kerajaan atau negara imperialis.
                  </p>
                  <h3>B) Glory</h3>
                  <p class="ident">
                    Glory diartikan sebagai kejayaan atau untuk menguasai
                    wilayah yang didatangi dan dijadikan sebagai koloni. Selain
                    itu, glory juga merupakan semboyan memburu kejayaan,
                    superioritas, dan kekuasaan melalui penjajahan. Dalam kaitan
                    ini, mereka saling bersaing dan ingin berkuasa di dunia baru
                    yang ditemukannya.
                  </p>
                  <h3>C) Gospel</h3>
                  <p class="ident" id="Tokoh">
                    Gospel merupakan misi menyebarkan ajaran Nasrani (Kristen
                    Katolik dan Kristen Protestan). Misionaris bangsa-bangsa
                    Eropa menyebarkan agamanya di wilayah-wilayah baru yang
                    mereka datangi. Setiap kapal milik bangsa-bangsa Eropa yang
                    melakukan penjelajahan samudra selalu diikuti kelompok
                    misionaris, yang menganggap penyebaran ajaran Injil
                    merupakan panggilan hidup dan tugas mulia. Mereka kemudian
                    memanfaatkan daerah koloni sebagai tempat menjalankan misi
                    tersebut.
                  </p>
                </div>
              </div>
              <hr />
            </div>

            <div
              class="blog-content"
              style="padding-top: 0px;padding-bottom: 0px;">
              <h1 id="Tokoh">Tokoh Penjelajah dari Portugis, Spanyol, Belanda, Inggris</h1>

              <!-- Portugis -->
              <div>
                <p>
                  Bangsa <strong>Portugis</strong> dikenal sebagai pelopor
                  pelayaran samudra pertama. Tokoh penting mereka antara lain:
                </p>

                <!-- Bartelomeus Diaz -->
                <div>
                  <h3>A) Bartolomeu Dias</h3>
                  <ul>
                    <li>
                      Pada tahun 1488, Dias berhasil mencapai titik terjauh dari
                      ujung Selatan Afrika
                    </li>
                    <li>
                      Ujung Selatan Afrika tersebut dinamakan Tanjung Harapan
                    </li>
                    <li>
                      Dan Tanjung Harapan ini sangat penting, karena membuka
                      jalan bagi penjelajahan lebih lanjut di sepanjang Pantai
                      Afrika
                    </li>
                    <li>
                      Penemuan Tanjung Harapan menjadi tonggak penting dalam
                      sejarah penjelajahan Samudra
                    </li>
                  </ul>
                </div>

                <!-- Vasco da Gama -->
                <div>
                  <h3>B) Vasco Da Gama</h3>
                  <ul>
                    <li>
                      Pada tahun 1497, ia berekspedisi dari Eropa ke India
                    </li>
                    <li>
                      Membuka harapan bagi orang Eropa bahwasan ada daratan lain
                      dari Tanjung Harapan
                    </li>
                  </ul>
                </div>

                <!-- Alfonso d’Albuquerque -->
                <div>
                  <h3>C) Alfonso d’Albuquerque</h3>
                  <ul>
                    <li>
                      Dijuluki “The Great”, “The Caesar of the East”, dan “The
                      Portuguese Mars”
                    </li>
                    <li>
                      Pada tahun 1511, Alfonso berhasil menguasai Malaka. Dan
                      dari situlah Portugis mengetahui bahwa Kepulauan Nusantara
                      merupakan tanah penghasil rempah-rempah, terutama wilayah
                      Maluku
                    </li>
                    <li>
                      Pada tahun 1512, Alfonso berhasil datang ke Maluku dan
                      diterima baik oleh Sultan Ternate
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Spanyol -->
              <div>
                <p>
                  Bangsa <strong>Spanyol</strong> juga melakukan penjelajahan
                  samudra, dengan tokoh-tokoh penting antara lain:
                </p>

                <!-- Christopher Columbus  -->
                <div>
                  <h3>A) Christopher Columbus</h3>
                  <ul>
                    <li>
                      Columbus berlayar di bawah naungan Raja Ferdinand dan Ratu
                      Isabella dari Spanyol, dengan tujuan mencari jalur barat
                      ke Asia
                    </li>
                    <li>
                      Pada tahun 1492, Coloumbus menemukan sebuah benua yang ia
                      percaya adalah benua Asia, ternyata Benuanya adalah Benua
                      Amerika
                    </li>
                    <li>
                      Dan Columbus membeuka era baru penjelajahan dan penjajahan
                      Eropa di Amerika, memulai periode yang diknela sebagai
                      “Zaman Penemuan” dan merubah peta dunia yang dikenal pada
                      masa itu
                    </li>
                  </ul>
                </div>

                <!-- Ferdinand Magellan -->
                <div>
                  <h3>B) Ferdinand Magellan</h3>
                  <ul>
                    <li>
                      Salah satu orang yang ingin membuktikan bahwasan bumi itu
                      bulat
                    </li>
                    <li>
                      Dan pada sekitar tahun 1519-1521, Ia melakukan ekspedisi
                      dari amerika sampai ke Filipina
                    </li>
                    <li>Tewas di Filipina pada tahun 1521</li>
                  </ul>
                </div>

                <!-- Juan Sebastian Elcano -->
                <div>
                  <h3>C) Juan Sebastian Elcano</h3>
                  <ul>
                    <li>
                      Melanjutkan perjalanan Ferdinand Magellan sampai ke Maluku
                    </li>
                    <li>
                      Ketemu orang Portugis di Maluku dan pada tahun 1522,
                      langsung Kembali ke spanyol
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Belanda -->
              <div>
                <p>
                  Bangsa <strong>Belanda</strong> juga melakukan penjelajahan
                  samudra, dengan tokoh-tokoh penting antara lain:
                </p>

                <!-- Cornelis de Houtman -->
                <div>
                  <h3>A) Cornelis de Houtman</h3>
                  <ul>
                    <li>
                      Pada tahun 1596, Conelis de Houtman berhasil tiba di
                      Banten. Namun setelah beberapa tabiat kasar yang
                      ditunjukan awak kapal Belanda, Sultan Banten, bersama
                      dengan petugas Portugisnya di Banten, mengusir kapal
                      Belanda
                    </li>
                    <li>
                      Setelah berhasil mengumpulkan rempah-rempah, Conelis de
                      Houtman Kembali ke Belanda pada tahun 1597
                    </li>
                    <li>
                      Pada tahun 1598, COnelis de Houtman Kembali menjelajahi
                      Nusantara, supaya bisa memperlua jangkauan perdagangan
                      Belanda
                    </li>
                    <li>
                      Cornelis de Houtman meninggal dalam pertempuran melawan
                      Malahayati pada tahun 1599
                    </li>
                  </ul>
                </div>

                <!-- Jacon Conelisz, van Neck -->
                <div>
                  <h3>B) Jacon Conelisz, van Neck</h3>
                  <ul>
                    <li>
                      Pada tahun 1596, J.C. Van Neck datang ke Banten dan
                      disambut baik oleh kesultanan Banten
                    </li>
                    <li>
                      J.C. van Neck memberikan sebuah piala berkaki emas sebagai
                      hadiah untuk sultan dan tanda persahabatannya
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Inggris -->
              <div>
                <p>
                  Bangsa <strong>Inggris</strong> juga melakukan penjelajahan
                  samudra, dengan tokoh-tokoh penting antara lain:
                </p>

                <!-- Francis Drake -->
                <div>
                  <h3>A) Francis Drake</h3>
                  <ul>
                    <li>
                      Pada tahun 1577, Drake dipilih dan didukung oleh Ratu
                      Elizabeth untuk memimpin ekspedisi mengelilingi Amerika
                      Selatan melalui Selat Magellan
                    </li>
                    <li>
                      Pada tahun 1586, Drake menjadi komando di sebuah kapal,
                      pemilik kapal tersebut adalah milik Drake sendiri, yang
                      berada di Karbia
                    </li>
                  </ul>
                </div>

                <!-- Thomas Cavendish -->
                <div>
                  <h3>B) Thomas Cavendish</h3>
                  <ul>
                    <li>
                      Pada tahun 1586, Cavendish mengelilingi dunia dalam waktu
                      kurang dari dua tahun. Beliau telah menjelajahi Pantai
                      Amerika Selatan dan menyergap kapal-kapal spanyol di
                      sepanjang perjalanannya
                    </li>
                  </ul>
                </div>

                <!-- Sir James Lancaster -->
                <div>
                  <h3>C) Sir James Lancaster</h3>
                  <ul>
                    <li>
                      Pemimpin kapal dagang pertama di Inggris yang sampai ke
                      Kepulauan Hindia Timur dan mendirikan pos perdagangan Asia
                      Tenggara. Beliau juga membuat cikal bakal Easy India
                      Company (EIC), di dalam perjalanannya
                    </li>
                    <li>
                      Pada tahun 1591, Lancaster berangkat dari Inggris dan
                      mencapai Pulau Penang, di sebelah barat Semenanjung Malaya
                    </li>
                  </ul>
                </div>

                <!-- Wiliam Dampier -->
                <div>
                  <h3>D) Wiliam Dampier</h3>
                  <ul>
                    <li>
                      Pada usia 16, Dampier berlayar ke Newfoundland, kemudian
                      ke Hindia timur dan Teluk Meksiko
                    </li>
                    <li>
                      Setelah bertahun-tahun, beliau diangkat menjadi komando
                      Roebuck untuk menjelajah Angkatan Laut Inggris
                    </li>
                    <li>
                      Dampier berhasil menjelajahi Sebagian pesisir Australia,
                      Nugini, dan Inggris Baru. Dan ia menulis buku berjudul “A
                      New Voyager Round the World"
                    </li>
                  </ul>
                </div>
              </div>
              <hr />
            </div>

            <div
              class="blog-content"
              style="padding-top: 0px;padding-bottom: 0px;">
              <img
                src="assets/Peta Sejarah.jpeg"
                alt="Relief Borobudur"
              />
              <h1 id="JalurPelayaran" >Jalur Pelayaran</h1>
              <div>
                <h4>
                  Bangsa Portugis berlayar menuju Timur, dengan jalur berikut
                  ini:
                </h4>
                <ul>
                  <li>Dari Lisbon ke pantai barat Afrika</li>
                  <li>Dari pantai barat Afrika ke Tanjung Harapan</li>
                  <li>Dari Tanjung Harapan ke Lautan Hindia</li>
                  <li>Dari Lautan Hindia ke India</li>
                  <li>Dari India ke Malaka</li>
                  <li>Dari Malaka ke Maluku</li>
                </ul>
              </div>

              <div>
                <h4>
                  Bangsa Spanyol berlayar menuju Barat, dengan jalur berikut
                  ini:
                </h4>
                <ul>
                  <li>Dari Spanyol ke Samudra Atlantik</li>
                  <li>Dari Samudara Atlantik ke benua Amerika</li>
                  <li>Dari benua Amerika ke ujung Selatan benua Amerika</li>
                  <li>Dari ujung Selatan benua Amerika ke Samudra Pasifik</li>
                  <li>Dari Samudra Pasifik ke Filipina</li>
                  <li>Dari Filipina ke Maluku</li>
                </ul>
              </div>

              <div>
                <h4>
                  Bangsa Spanyol berlayar menuju Timur, dengan jalur berikut
                  ini:
                </h4>
                <ul>
                  <li>Dari Pantai Barat Afrika ke Tanjung Harapan</li>
                  <li>Dari Tanjung Harapan ke Samudra Hindia</li>
                  <li>Dari Samudra Hindia ke Selat Sunda</li>
                  <li>Dari Selat Sunda ke Banten</li>
                </ul>
              </div>

              <div>
                <h4>
                  Bangsa Inggris berlayar menuju Barat, dengan jalur berikut
                  ini:
                </h4>
                <ul>
                  <li>Dari Inggris ke Samudra Atlantik</li>
                  <li>Dari Samudra Atlantik ke Afrika (Mengelilingi Afrika)</li>
                  <li>Dari Afrika ke Samudra Hindia</li>
                  <li>Dari Samudra Hindia ke Nusantara</li>
                </ul>
              </div>

              <div>
                <h4>
                  Namun Inggris juga berlayar menuju Timur, dengan jalur berikut
                  ini:
                </h4>
                <ul>
                  <li>Dari Inggris ke Samudra Atlantik</li>
                  <li>Dari Samudra Atlantik ke Pantai Timur Amerika Selatan</li>
                  <li>Dari Pantai Timur Amerika Selatan ke Selat Magelhanes</li>
                  <li>Dari Selat Magelhaens ke Filipina</li>
                  <li>Dari Filipina ke Asia Tenggara</li>
                  <li>Dari Asia Tenggara ke Maluku</li>
                </ul>
              </div>
              <hr />
            </div>

            <div
              class="blog-content"
              style="padding-top: 0px;padding-bottom: 0px;">
              <h1 id="PerjanjianPelayaran">Perjanjian Pelayaran dari Eropa ke Nusantara</h1>
              <!-- Portugis & Spanyol -->
              <div>
                <h3 style="margin-bottom: 0px;">Portugis & Spanyol</h3>
                <p class="Perjanjian">1. Perjanjian Tordesillas (1494):</p>
                <ul style="line-height: 1.3; padding-bottom: 1rem;">
                  <li>Barat milik Spanyol</li>
                  <li>Timur milik Portugis</li>
                </ul>
                <p class="Perjanjian">2. Perjanjian Saragosa (1529):</p>
                <ul style="line-height: 1.3; padding-bottom: 1rem;">
                  <li>Wilayah Maluku jatuh ke Portugis</li>
                  <li>Spanyol mundur ke Filipina</li>
                </ul>
              </div>

              <!-- Belanda -->
              <div>
                <h3 style="margin-bottom: 0px;">Belanda</h3>
                <p class="Perjanjian">1. Hak Oktroi VOC (1602):</p>
                <ul style="line-height: 1.3; padding-bottom: 1rem;">
                  <li>Hak monopoli dagang di Asia</li>
                  <li>Hak membuat perjanjian dengan raja lokal</li>
                  <li>Hak memiliki tentara dan membangun benteng</li>
                  <li>Hak mencetak uang dan memerintah daerah jajahan</li>
                </ul>
              </div>

              <!-- Inggris -->
              <div>
                <h3 style="margin-bottom: 0px;">Inggris</h3>
                <p class="Perjanjian">1. Navigation Acts (1651, 1660, 1663):</p>
                <ul style="line-height: 1.3; padding-bottom: 1rem;">
                  <li>
                    Barang impor ke Inggris atau koloninya hanya boleh diangkut
                    oleh kapal Inggris
                  </li>
                  <li>
                    Kapal asing dilarang berdagang langsung ke koloni Inggris
                  </li>
                </ul>
                <p class="Perjanjian">
                  2. Perjanjian dengan Belanda (Traktat London 1824):
                </p>
                <ul style="line-height: 1.3; padding-bottom: 1rem;">
                  <li>Belanda menguasai wilayah Indonesia</li>
                  <li>Inggris menguasai Semenanjung Malaya dan Singapura</li>
                </ul>
              </div>
            </div>
          </article>
        </div>

        <aside class="sidebar">
          <div class="widget">
            <h3>Daftar Isi</h3>
            <ul>
              <li><a href="#LatarBelakang">Latar Belakang</a></li>
              <li><a href="#Tokoh">Tokoh Penjelajah</a></li>
              <li><a href="#JalurPelayaran">Jalur Pelayaran</a></li>
              <li><a href="#PerjanjianPelayaran">Perjanjian Pelayaran </a></li>
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
    </main>

    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="footer-section">
            <h3>Tentang SeaShanty</h3>
            <p>
              Blog ini didedikasikan untuk berbagi pengetahuan dan informasi
              sejarah tentang Pelayaran Eropa ke Nusantara.
            </p>
          </div>
          <div class="footer-section">
            <h3>Kategori</h3>
            <p>
              <a href="#">Sejarah</a>
            </p>
          </div>
        </div>
        <p
          style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #A0522D;"
        >
          © 2025 SeaShanty. All rights reserved.
        </p>
      </div>
    </footer>
  </body>
</html>