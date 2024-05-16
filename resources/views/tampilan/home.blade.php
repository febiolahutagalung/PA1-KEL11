@extends('layout.user')

@section('container')
<style>


/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 100px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li+li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  cursor: pointer;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #76b5ee;
}

.faq .faq-list .icon-show,
.faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: #1977cc;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  /* padding: 80px 0; */
}

.section-bg {
  background-color: #f2f2f2;
}

.section-title {
  text-align: center;
  padding-bottom: 50px;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  margin: 0;
  background: #f5f9fc;
  color: #428bca;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}

.section-title h3 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
}

.section-title h3 span {
  color: #428bca;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 500;
  color: #919191;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('Template/img/GEREJA1.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{URL::asset('Template/img/GEREJA2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('Template/img/GEREJA3.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
       
        <!-- Navbar & Hero End -->

        <!-- About Start -->
<div class="container-fluid about py-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container py-5">
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-10 text-center" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)); padding: 20px; border-radius: 10px;">
                <h5 class="section-about-title pe-3">Sejarah Gereja</h5>
                <h1 class="mb-4">Selamat Datang di HKBP Sabungan Kota</h1>
                <p class="mb-4">Gereja HKBP Sabungan Siborongborong berdiri (diojakhon) pada tahun 1892 dan saat ini sudah berumur 130 tahun. Awal mula berdirinya gereja ini tidak terlepas dari sejarah berdirinya Gereja Dame Saitnihuta yang didirikan oleh Dr. I. L. Nommensen pada tanggal 20 – 05 – 1864. Ketika Nommensen sudah mendirikan gereja Dame Saitnihuta, Raja Naor Hutasoit yang merupakan kelahiran Siborongborong yang merantau ke Silindung Simorangkir memberikan hatinya untuk dibabpis menjadi Kristen. Setelah ia menjadi Kristen, ia kembali ke daerah kelahirannya pada tahun 1885. Kemudia ia mengajak saudaranya untuk dibaptis yaitu; Raja Isak Hutasoit, Raja Aristarkus Hutasoit, Raja Elias Hutasoit, Raja Aron Hutasoit dan Raja Simon Hutasoit dan mereka membuka perkampungan di Tapian Nauli Siborongborong.
                Pada saat itu jugalah pemerintah Belanda membuat “Pasanggarahan” (istilah pada masa kolonial Belanda yang artinya; tempat peristirahatan / penginapan) di dekat Onangudang Siborongborong. Kemudian pemerintah Belanda mengangkat Op. Toga Tunggal Hutasoit menjadi Raja Ihutan Nahor Hutasoit menjadi Raja Pandua sebagai pengajar di Siborongborong sampai ke Pohan. Raja Pandua Nahor Hutasoit meminta kepada marga Sihombing, Pohan dan Marbun agar mereka mendekatkan tempat tinggal mereka ke pinggir jalan Onangudang. Kemudian Nommensen mengusulkan agar tempat penginapan (pasanggarahan) tersebut menjadi tempat peribadahan mereka. Setelah jemaat semakin bertambah Raja Nahor Hutasoit meminta kepada Nommensen untuk mengirimkan pelayan untuk melayani jemaat yang beribadah di pasanggarahan tersebut. Jemaat sepakat untuk memenuhi semua kebutuhan pelayan. Nommensen kemudian mengirimkan seorang guru untuk melayani mereka yaitu Gr. Eras Simanjuntak. Tidak berapa lama mereka sepakat untuk membangun gedung gereja sekaligus gedung sekolah. Mereka membeli satu rumah dari Silando yang akan menjadi gedung gereja dan sekolah kemudian didirikan di Tapian Nauli Siborongborong dan itulah tempat gereja saat ini. Tanah gereja adalah sumbangan ataupun yang diberikan oleh Raja Aristarkus Hutasoit panjangnya: 93 m (arah Barat Daya), 118,5 m (Timur Laut) dan lebarnya: 80 m (arah Barat Laut), 87 m (arah Tenggara). Setelah beberapa lama ada 6 pasangan yang dibaptis oleh Pdt. Ernist Pasaribu dari Paniaran pada hari Minggu 13 Juli 1892 dan pada saat itulah diresmikan gereja di Siborongborong.
                Pada tahun 1894 Raja Pandua Nahor Hutasoit meminta kepada Nommensen untuk mengirimkan seorang Pendeta sebagai pengganti Gr. Eras Simanjuntak dikarenkan belum adanya seorang pendeta yang melayani di daerah Humbang. Nommensen kemudian mengirimkan Pdt. Sett untuk melayani di gereja Siborongborong sekaligus diwilayah Humbang. Setelah dilantik di gereja Siborongborong, Pdt. Sett meminta agar gedung gereja dipindahkan di ke Silaitlait Hariara yang berjarak sekitar 4 km dari Tapian Nauli Siborongborong. Raja Pandua Nahor Hutasoit pada awalnya tidak menyetujui usulan dari Pdt. Sett, tetapi demi perkembangan pemberitaan injil dibagian utara yaitu; daerah Paranginan, Hutaginjang serta bagian Hasundutan yaitu; daerah Nagasaribu dan Lintong Nihuta maka usulan tersebut disetujui. Kemudian gereja Siborongborong dipindahkan ke Silaitlait Hariara dan berganti nama menjadi “Huria Silaitlait”. Gedung gereja, gedung sekolah dan tempat tinggal pendeta juga ditempatkan di Silaitlait.
                Huria Silaitlait mengalami perkembangan, baik dari pelayanan dan pertumbuhan jemaat yang datang untuk dibaptis dan mau untuk belajar disekolah Silaitlait. Namun, pada tahun 1900 setelah Pendeta tidak tinggal di Silaitlait dan masyarakat di Siborongborong semakin bertambah maka direncanakan untuk memindahkan kembali gereja ke tempat semula yaitu di Siborongborong. Rencana itu disetujui dan gereja pindah kembali ke tanah yang dulunya diberikan oleh Raja Nahor Hutasoit di Tapian Nauli Siborongborong (tempat gereja saat ini). Gereja Siborongborong semakin berkembang dan jemaat semakin bertambah. Kemudian jemaat mengusulkan untuk memperbesar bangunan rumah pelayan dan memperbesar gedung gereja. Melihat kemajuan gereja maka Argilaus Hutasoit memberikan tanahnya dengan ukuran panjangnya; 53 m (arah Timur Laut), 59 m (arah Barat Daya) dan lebarnya 87 m (arah Tenggara), 87 m (arah Barat Laut). Pada tanggal 24 – 2 – 1917 akhirnya gereja dipindahkan ke tempat gereja yang sekarang ini. Melihat perkembangan gereja semakin pesat maka jemaat sepakat untuk memperluas lahan gereja dengan membeli sawah si Thomas Hutasoit yang dekat dengan gereja dengan harga 40 kaleng beras serta setiap sisi dari persawahan yang belum dikerjakan dibeli dengan harga Rp. 200. Pada tahun 1917 jemaat yang datang beribadah semakin bertambah dan sesuai dengan statistik jemaat pada akhir tahun 1917 jumlah jemaat yang terdaftar sudah mencapai 900 jiwa atau 193 kepala keluarga. Tetapi rata-rata jumlah jemaat yang mengikuti peribadahan hanyak berkisar 200 jiwa. Jumlah anak-anak yang dibaptis sebanyak 50 jiwa.
                Melihat perkembangan jemaat yang semakin bertambah maka disepakati untuk membangun gedung gereja agar jemaat bisa dengan nyaman untuk beribadah dan banyaknya jemaat pendatang yang hanya beribadah dari daerah Humbang. Oleh karena itu, pada tanggal 7 – 8 – 1956 dibentuk Panita Pabalga Gareja (PPG) yang bertugas untuk membangun gedung gereja. Pada awalnya semua sepakat untuk membangun gedung gereja tetapi ternyata disamping itu ada bebrapa jemaat yang berencana untuk mendirikan gereja yang lain. Mereka kemudian membuat peribadahan sendiri disebuah sekolah. Salah satu penggerak dari kegiatan itu adalah seorang bibelvrow br. Pasaribu yang pada akhirnya disetujui oleh pusat HKBP dan masuk ke Ressort Siborongborong walaupun tanpa adanya rapat parhalado. Keadaan itu juga memunculkan pandangan yang kurang baik karena di satu tempat ada dua gereja HKBP yang berdiri dan beberapa jemaat harus melewati gereja yang lama hanya untuk beribadah di gereja yang baru padahal sama-sama HKBP. Penulis tidak menemukan adanya perselisihan di awal pendirian gereja yang baru karena tidak dijelaskan di buku sejarah ini. Kemudian pada tanggal 24 – 11 – 1957 Praeses Distrik Humbang meresmikan gereja yang baru dan diberi nama Gereja Kota Siborongborong sekaligus peletakan batu pertama. Gereja yang lama kemudian diberi nama Gereja Sabungan Siborongborong. Melihat keadaan itu jemaat HKBP Sabungan Siborongborong tetap semangat untuk melanjutkan rencana pembangunan gereja Sabungan Siborongborong. Pada tanggal 22 – 9 – 1957 disitulah dilaksanakan acara peletakan batu pertama. Pada tanggal 26 – 4 – 1973 sesuai hasil rapat parhalado maka jemaat yang berada di daerah Silaitlait disetujui untuk melakuakan peribadahan sendiri di Silaitlait. hal ini dikarenakan karena jemaat yang dari Silaitlait sudah mencapai 80 KK dan jarak tempuh yang berkisar 4 km.
                </p>
                <p class="mb-4">Sebagai pusat kegiatan ibadah, sosial, dan pendidikan bagi masyarakat, HKBP Sabungan telah menjadi lambang kekuatan iman dan pelayanan dalam menghadapi berbagai cobaan. Dengan fondasi sejarah yang kokoh, gereja ini terus menjadi terang bagi dunia sekitarnya, memperkuat komunitasnya, dan memberkati masyarakat yang dilayaninya.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">FAQ</h5>
                    <h1 class="mb-0">Frequently Asked Question</h1>
                </div>
                <section id="faq" class="faq section-bg">
                    <div class="container">
                    <div class="faq-list">
                        <ul>
                        @php
                            $No = 0;
                        @endphp
                        {{-- @foreach ($faq as $fq) --}}
                        @foreach ($dataFaq as $key => $fq)
                        @php
                            $current = $loop->iteration;
                        @endphp
                        <li data-aos="fade-up" data-aos-delay="{{  $current }}00">
                            <i class="fa fa-question-circle-o	icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{  $current }}">{{ $fq->pertanyaan }}<i class="fa fa-sort-down	icon-show"></i><i class="fa fa-sort-asc icon-close"></i></a>
                            <div id="faq-list-{{  $current }}" class="collapse {{  $current == 1 ? 'show' : '' }}" data-bs-parent=".faq-list-{{  $current }}">
                            <p>
                                {{ $fq->jawaban }}
                            </p>
                            </div>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                
                    </div>
                </section>
            </div>
        </div>

                
        
        <script>
            function toggleAnswer(element) {
                var answer = element.querySelector('.answer');
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                } else {
                    answer.style.display = "none";
                }
            }
        </script>
         
        

       
        

               
@endsection
       
    