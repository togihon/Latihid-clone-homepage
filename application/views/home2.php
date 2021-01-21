<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   function rupiah($angka){
	
	$convert = "Rp " . number_format($angka,0,',','.');
	return $convert;
 
	}
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:72,height:72/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='apple-touch-icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:144,height:144/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='apple-touch-icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:320,height:345/https://www.filepicker.io/api/file/iwKYeGzTRiNt4KJM5j7J' rel='apple-touch-startup-image' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:640,height:690/https://www.filepicker.io/api/file/iwKYeGzTRiNt4KJM5j7J' rel='apple-touch-startup-image' type='image/png'>
      <meta name='apple-mobile-web-app-capable' content='yes' />
      <meta charset="UTF-8">
      <meta name="csrf-param" content="authenticity_token" />
      <meta name="csrf-token" content="l1ZH+y7LE+uI1UyNTEkogbxzzCL5XWI3m+JjQl3BsnUST5df4RMeLnH8si7uYAm/hAKt1djm1t3Z0Y9bmKQYWQ==" />
      <link rel="stylesheet" href="<?=base_url('assets/font.css'); ?>"/>
      <link rel="stylesheet" media="screen" href="https://fedora.teachablecdn.com/assets/pages-6288d01eb51d12142db712822bb0c1f7c1432c047dbf23d6f819c3e23efa3a29.css" />
      <link rel="stylesheet" media="screen" href="<?=base_url('assets/style.css'); ?>"/>
      <title><?= $judul ?></title>
      <meta name="description" content="new Homepage">
      <link rel="canonical" href="https://www.latihid.com/">
      <meta property="og:title" content="Homepage">
      <meta property="og:type" content="website">
      <meta property="og:image" content="https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1">
      <meta property="og:url" content="https://www.latihid.com/p/homepage">
      <meta property="og:description" content="new Homepage">
      <meta name="brand_video_player_color" content="#09A59A">
      <meta name="site_title" content="LatihID">
      <script src='//fast.wistia.com/assets/external/E-v1.js'></script>
      <script src='https://www.recaptcha.net/recaptcha/api.js' async defer></script>
      <meta name="asset_host" content="https://fedora.teachablecdn.com">
      <script src="https://fedora.teachablecdn.com/packs/pages-6b035fdf2e698cefda59.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
      <link rel="stylesheet" href="https://design.upanastudio.com/latih_id_asset/glide-3.4.1/glide-3.4.1/dist/css/glide.core.min.css">
      <meta name="google-site-verification" content="PlzRyevxN3DRuY_W1ZJzglIXFzeesAGr0tdxRbCTRRA" />
      <?php include 'footer.php'; ?>
      <script>
         document.addEventListener("DOMContentLoaded", function(){
             document.getElementsByClassName("navbar__menu__list")[0].innerHTML=`
             <li class="navLink-left">
             <button class="menu-trigger" onclick="toggleMenu('program-menu')">
             Program<i class="caret"></i>
             </button>
             <ul id="program-menu" class="inner-menu menu hidden" tabindex="0">
                <li class="user-profile">
                   <a href="https://www.latihid.com/courses/category/LatihIDModul">
                   LatihID Modul
                   </a>
                </li>
                <li>
                   <a href="https://www.latihid.com/courses/category/LatihIDTalks">
                   LatihID Talks
                   </a>
                </li>
                <li>
                   <a href="/p/peta">
                   LatihID PETA
                   </a>
                </li>
                <li>
                   <a href="/p/maju">
                   LatihID MAJU
                   </a>
                </li>
             </ul>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/blog">
             Artikel
             </a>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/p/tentangkami">
             Tentang Kami
             </a>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/p/ayokolaborasi">
             Ayo Kolaborasi
             </a>
          </li>
          <li class="navLink-left">
             <button class="menu-trigger" onclick="toggleMenu('bantuan-menu')">
             Bantuan<i class="caret"></i>
             </button>
             <ul id="bantuan-menu" class="inner-menu menu hidden" tabindex="0">
                <li class="user-profile">
                   <a href="/p/bantuan">
                   FAQ
                   </a>
                </li>
                <li>
                   <a href="/p/contact">
                   Kontak Kami
                   </a>
                </li>
             </ul>
          </li>
          <li>
             <a href="/sign_in">
             Masuk
             </a>
          </li>
          <li>
             <a class="daftarButton" style="" href="/sign_up">
             Daftar
             </a>
          </li>
             `;
         });
      </script>
      <!-- HEADER -->
      <a id="top"></a>
      <style id="ncs">
         :root {
         --header_width: 960px;
         }
      </style>
      <header id="header" class="header header-sticky">
         <!-- Navbar -->
         <nav
            class="navbar is-not-signed-in is-homepage  at-top"
            id='navbar'
            role='navigation'>
            <div class='navbar__header'>
               <!-- Site logo -->
               <a class='navbar__header__logolink' href='https://www.latihid.com'>
               <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1" alt="LatihID" srcset="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:120/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1 2x" />
               </a>
               <!-- Header Menu -->
               <div class="navbar__menu">
                  <button for="f-toggle" tabindex="0" role="button" id="hamburger" class="hamburger" aria-label="Toggle navigation"
                     onclick="toggleMenu('hamburger-menu')">
                  <span></span>
                  </button>
                  <ul class='navbar__menu__list menu hidden' id="hamburger-menu" role="menu" aria-describedby="hamburger" tabindex="0">
                     <li>
                        <a href='/courses' target=''>
                        Program
                        </a>
                     </li>
                     <li>
                        <a href='/blog' target=''>
                        Artikel
                        </a>
                     </li>
                     <li>
                        <a href='https://www.latihid.com/p/tentangkami' target=''>
                        Tentang Kami
                        </a>
                     </li>
                     <li>
                        <a href='https://www.latihid.com/p/ayokolaborasi' target=''>
                        Ayo Kolaborasi
                        </a>
                     </li>
                     <li>
                        <a href='https://www.latihid.com/p/bantuan' target=''>
                        Bantuan
                        </a>
                     </li>
                     <!-- If more than 5 links, collapse the rest in a dropdown -->
                     <li>
                        <a href='/sign_in'>
                        Masuk
                        </a>
                     </li>
                     <li>
                        <a href='/sign_up'>
                        Daftar
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <main class='view-school page-layout-v2 main'>
         <div id="blocks" class="blocks-page blocks-page-blank_page_v2 ">
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-banner " id="block-49618812">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <div style="background-color: white;padding-top: 0px;padding-bottom: 30px;padding-left: 0%;padding-right: 0%">
                  <div style="position: relative">
                     <!--<p class="judul-section" style="margin-bottom:60px">Tim LatihID</p>-->
                     <!--<img class="bgTim" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/bg/6-bg2.svg"  style="width:100%"> -->
                     <div id="bannerHeader" class="tampilanDesktop">
                        <section class="banner-view slider-banner " style="width: 100%">
                           <div class="slide ">
                              <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul?_ga=2.89604959.574234990.1596349825-860036232.1593510817">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5e7b5d2f46049ebbc421c67a/5f265df315da6c63b7b28769_web%20banner%20pc.png">
                              </a>
                           </div>
                           <div class="slide ">
                              <a class="linkBannerHome" href="whttps://www.latihid.com/p/lit-17">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5ffc6646e6ae96a859472787_Copy%20of%20Banner%20LIT%2017.png">
                              </a>
                           </div>
                           <div class="slide">
                              <a class="linkBannerHome" href="/p/peta">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f60287bb9d5a99ae8ab3867_Banner%20web%20PETA%20Desktop-p-2600.png">
                              </a>
                           </div>
                           <div class="slide">
                              <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f5f3a90e55ab0fd5d9ce4c7_Banner%20Modul%20Desktop-p-2600.png">
                              </a>
                           </div>
                        </section>
                     </div>
                     <div id="bannerHeader" class="tampilanMobile">
                        <section class="banner-view slider-banner " style="width: 100%">
                           <div class="slide ">
                              <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul?_ga=2.89604959.574234990.1596349825-860036232.1593510817">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5e7b5d2f46049ebbc421c67a/5f265df1be698effeac0f9a8_web%20banner%20mobile.png" >
                              </a>
                           </div>
                           <div class="slide ">
                              <a class="linkBannerHome" href="whttps://www.latihid.com/p/lit-17">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5ffc6648796cccaad769f1f2_Copy%20of%20Copy%20of%20Banner%20Mobile%20lit%2017%20(1).png" >
                              </a>
                           </div>
                           <div class="slide">
                              <a class="linkBannerHome" href="/p/peta">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f60287bffadf64b745d3090_Banner%20Web%20PETA%20Mobile.png" >
                              </a>
                           </div>
                           <div class="slide">
                              <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul">
                              <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f5f3a92999a265fb4ab6ff1_Banner%20Web%20Modul%20Mobile.png" >
                              </a>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-keunggulan " id="block-49618813">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <div style="background-color: #fff">
                  <div class="sectionItem" style="padding-left: 13.3%;padding-right: 13.3%; padding-top: 25px; padding-bottom: 25px">
                     <div class="">
                        <!--<img class="judulSection judul-img" src="https://design.upanastudio.com/latih_id_asset/Keunggulan%20LatihID.png" style="">-->
                        <p class="judul-section" style="margin-bottom:50px">Kenapa memilih LatihID?</p>
                     </div>
                     <div class="row mt-5">
                        <div class=" column-md-3 keunggulan-item">
                           <img class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_1.svg" width="80"> 
                           <p class="keunggulan-judul" style="">Fokus pada UMKM</p>
                           <p class="keunggulan-info" style="">Konten Berfokus untuk Pengembangan Bisnis UMKM Indonesia</p>
                        </div>
                        <div class=" column-md-3 keunggulan-item">
                           <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_2.svg" width="80">
                           <p class="keunggulan-judul" style="">Bebas Akses Dimana Saja</p>
                           <p class="keunggulan-info">Modul Pelatihan Dapat Diakses dari Perangkat Apa Saja Melihat Website</p>
                        </div>
                        <div class=" column-md-3 keunggulan-item">
                           <img class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" width="80">
                           <p class="keunggulan-judul" style="">Akses Seumur Hidup</p>
                           <p class="keunggulan-info">Akses Seumur Hidup dan Satu Login untuk Semua Kursus Pelatihan yang Ada</p>
                        </div>
                     </div>
                     <div class="row mt-5">
                        <div class=" column-md-3 keunggulan-item">
                           <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_4.svg" width="80"> 
                           <p class="keunggulan-judul" style="">Akses Kapan Saja</p>
                           <p class="keunggulan-info">Akses 24/7 untuk Semua Modul Pelatihan</p>
                        </div>
                        <div class=" column-md-3 keunggulan-item">
                           <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_5.svg" width="80">
                           <p class="keunggulan-judul" style="">Akses Gratis</p>
                           <p class="keunggulan-info">Akses Gratis untuk Semua Modul Pelatihan</p>
                        </div>
                        <div class=" column-md-3 keunggulan-item">
                           <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_6.svg" width="80">
                           <p class="keunggulan-judul" style="">Konten yang Praktis</p>
                           <p class="keunggulan-info">Pelatihan Praktis yang Dapat Langsung Diterapkan</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-kelas-gratis-populer " id="block-49618814">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="kelas-gratis-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #D7EFF4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;padding-bottom: 30px;display: flex;flex-wrap: wrap;align-items: center;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-Modul.svg" class="svgCard" style="width: 30%;">
                              <!--<p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Pelatihan online yang bertujuan untuk berbagi pengetahuan secara berkelanjutan melalui media internet</p>-->
                              <div class="keunggulan__Left" style="width:70%;padding-left: 20px;">
                                 <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold;padding-bottom: 25px;padding-left: 5px;">Kelas Gratis Populer</p>
                                 <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="l-btn l-btn-secondary l-btn-radius-large" style="" id="">Lihat Modul Lainnya</a>
                              </div>
                           </div>
                           <div class="keunggulan__col slider-view-style-1" style="width: 100%;">
						   <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 1));
							 foreach ($query->result() as $row) {
							?>
                              <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/kerjasama-tim-dalam-kesuksesan-umkm">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							  <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-kelas-terbaru " id="block-49618815">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="kelas-terbaru-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas LatihID Terbaru</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">LatihID selalu berkomitment untuk memberikan pelatihan-pelatihan terbaru yang sesuai dengan trend, pasar, dan kondisi nyata di lapangan.</p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
						   <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 2));
							 foreach ($query->result() as $row) {
							?>
                              <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/copywriting-untuk-meningkatkan-bisnis-kita">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							 <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-expert-class " id="block-49618816">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="expert-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #ffe7dc">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;padding-bottom: 30px;display: flex;flex-wrap: wrap;align-items: center;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/2-Talks.svg" class="svgCard" style="width: 30%;">
                              <!--<p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Pelatihan online yang bertujuan untuk berbagi pengetahuan secara berkelanjutan melalui media internet</p>-->
                              <div class="keunggulan__Left" style="width:70%;padding-left: 20px;">
                                 <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold;padding-bottom: 25px;padding-left: 5px;">Expert Class</p>
                                 <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="l-btn l-btn-secondary l-btn-radius-large" style="" id="">Lihat Kelas Lainnya</a>
                              </div>
                           </div>
                           <div class="keunggulan__col slider-view-style-1" style="width: 100%;">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 3));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='https://www.latihid.com/p/strategi-pemasaran';">
                                    <div class="imgThumbnail">
                                       <a href="https://www.latihid.com/p/strategi-pemasaran">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/strategi-pemasaran">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							 <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-modul,-talks,-peta " id="block-49618817">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="latihid-modul-section" class="section-container">
                  <div class="programUnggulan__container" style="padding-left: 12.3%;padding-right: 12.3%;">
                     <div class="programUnggulan__inner programUnggulan__inner--flex">
                        <div id="latihid__talk" class="programUnggulan__columns">
                           <div class="programUnggulan__Box1">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID Modul</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/courses/category/LatihIDModul">Lihat Modul Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
                                 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 4));
								  $this->db->limit(3);
									$query = $this->db->get();
							 $this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                            <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
								 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 4));
								  $this->db->limit(3);
								$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                            <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                              <!--End BOX Section-->
                           </div>
                           <!--End Section-->
                        </div>
                        <div id="latihid__peta" class="programUnggulan__columns">
                           <div class="programUnggulan__Box2">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID Talks</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/courses/category/LatihIDTalks">Lihat Talks Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
                                 <div class="keunggulan__row">
								 <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 5));
								  $this->db->limit(3);
									$query = $this->db->get();
									$this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"><?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                 </div>
                                 <!--End row Section-->
                                 <div class="keunggulan__row">
								 <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 5));
								  $this->db->limit(3);
									$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"><?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                           </div>
                        </div>
                        <div id="latihid__latest" class="programUnggulan__columns">
                           <div class="programUnggulan__Box">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID PETA</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/p/peta">Lihat PETA Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
								 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 6));
								  $this->db->limit(3);
									$query = $this->db->get();
									$this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                    
                                 </div>
                                 <!--End row Section-->
                                 <div class="keunggulan__row">
                                     <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 6));
								  $this->db->limit(3);
									$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                       <!--End row Section-->
                                    </div>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-memulai-bisnis " id="block-49618818">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="bisnis-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_1.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Memulai Bisnis</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Bingung mau mulai Bisnis ? Sudah punya Ide tapi belum tahu cara implementasi bisnis nya? Gabung di kelas memulai bisnis sekarang !</p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 7));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-pemasaran " id="block-49618819">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="pemasaran-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_2.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Pemasaran</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Ingin bisnismu lebih dikenal oleh pasar ? Ikuti kelas tentang pemasaran dan dapatkan manfaatnya dalam bisnismu !</p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 8));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-managemen-operasional " id="block-49618820">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="manajemen-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Manajemen Operasional</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Belajar Manajemen Operasional menjadi mudah dengan ikut kelas-kelas di sini! Bisa kamu praktekan langsung di Usahamu. </p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 9));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-last-section " id="block-49618821">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section class="section-container">
                  <div class="d-flex">
                     <div class="columns-50" style="background-image: url(https://1.bp.blogspot.com/-xj9cgzCuR2o/X4-SU5KwgDI/AAAAAAAAE7k/Y5pAuUEp7rUZXtnTVBtLISC2yJsWUVk_ACLcBGAsYHQ/s0/meeting.png)">
                        <div class="cardWrap">
                           <h2 class="cardTitle">Menjadi Pembicara</h2>
                           <p class="cardDesc">
                              Kami membuka kesempatan untuk individu/lembaga yang ingin menjadi pemateri pada LatihID Modul, Talks, ataupun Pojok Cerita (PETA).
                           </p>
                           <div class="btnBlock">
                              <a href="https://www.latihid.com/p/ayokolaborasi" class="l-btn l-btn-primary l-btn-radius-large">Ayo Kolaborasi</a>
                           </div>
                        </div>
                     </div>
                     <div class="columns-50" style="background-image: url(https://1.bp.blogspot.com/-WaLs1vlpcp0/X4-SU7KKPRI/AAAAAAAAE7g/YfKvSUalBRIxfTOumstN75xszg8Ts-B7wCLcBGAsYHQ/s0/Deal.png)">
                        <div class="cardWrap">
                           <h2 class="cardTitle">Menjadi Mitra</h2>
                           <p class="cardDesc">
                              Kami menerima individu/lembaga yang ingin bekerja sama untuk jenis kemitraan lainnya, seperti media partner.
                           </p>
                           <div class="btnBlock">
                              <a href="https://www.latihid.com/p/ayokolaborasi" class="l-btn l-btn-primary l-btn-radius-large">Ayo Kolaborasi</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-footer " id="block-49618822">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <footer>
                  <!-- Footer main -->
                  <section class="ft-main">
                     <div class="ft-main-item">
                        <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/Logo%20LatihID%20-%20New/NEW%20LOGO%20LATIHID%20Color.png" alt="Girl in a jacket" width="70"> 
                        <p class="deskripsiLatih" style="margin-top: 20px; text-align:left">LatihID adalah suatu platform penyedia </p>
                        <p class="deskripsiLatih" style="text-align:left">pelatihan gratis dan berkualitas untuk</p>
                        <p class="deskripsiLatih" style="text-align:left">UMKM di Indonesia</p>
                     </div>
                     <div class="ft-main-item">
                        <h2 class="ft-title">Menu</h2>
                        <ul>
                           <li><a href="https://www.latihid.com">Beranda</a></li>
                           <li><a href="/courses">Modul</a></li>
                           <li><a href="https://www.latihid.com/p/tentangkami">Tentang Kami</a></li>
                           <li><a href="https://www.latihid.com/p/contact">Hubungi Kami</a></li>
                        </ul>
                     </div>
                     <div class="ft-main-item">
                        <h2 class="ft-title">Info</h2>
                        <ul>
                           <li><a href="https://www.latihid.com/p/bantuan">FAQ</a></li>
                           <li><a href="https://www.latihid.com/p/ayokolaborasi">Ayo Kolaborasi</a></li>
                           <li><a href="https://www.latihid.com/p/privacy">Kebijakan Privasi</a></li>
                           <li><a href="https://www.latihid.com/p/terms">Syarat Penggunaan</a></li>
                        </ul>
                     </div>
                     <div class="ft-main-item">
                        <h2 class="ft-title">Ikuti Kami</h2>
                        <ul>
                           <li><a target="_blank" href="https://www.youtube.com/channel/UCi2WG2vnvehuplyf6R5T2Ew"> <i class="fa fa-youtube-play"></i> LatihID Official</a></li>
                           <li><a target="_blank" href="https://www.instagram.com/latihidofficial/"> <i class="fa fa-instagram" ></i> @latihidofficial</a></li>
                           <li><a target="_blank" href="https://www.facebook.com/latihidofficial/"> <i class="fa fa-facebook-square"></i> Latih ID</a></li>
                        </ul>
                     </div>
                     <div class="ft-main-item">
                        <h2 class="ft-title">Jadi yang pertama mengetahui</h2>
                        <h2 class="ft-title" style=" text-align: center; margin-bottom: 5px">update terbaru dari kami !</h2>
                        <div id="mc_embed_signuxp">
                           <form action="https://latihid.us19.list-manage.com/subscribe/post?u=b9566c387466e869bbafe27aa&amp;id=55ccb2e4bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                              <div id="mc_embed_signup_scroll">
                                 <div class="mc-field-group" style="margin-bottom: 7px">
                                    <input type="text" placeholder="Nama" value="" name="nama" class="required inputan" id="nama" style="width: 100%">
                                 </div>
                                 <div class="mc-field-group" style="margin-bottom: 7px">
                                    <input type="email" placeholder="Email" value="" name="EMAIL" class="required inputan" id="mce-EMAIL" style="width: 100%">
                                 </div>
                                 <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                 </div>
                                 <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9566c387466e869bbafe27aa_55ccb2e4bd" tabindex="-1" value=""></div>
                                 <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btnx" style="width: 100%"></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </section>
                  <section class="ft-legal">
                     <h2 class="ft-title">© 2020 Copyright LatihID</h2>
                  </section>
                  <!-- Footer social -->
               </footer>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-css-in-pages " id="block-49618823">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <style>
                  .blockMobile__program {
                  display: none;
                  }
                  .title-nav {
                  text-align: center;
                  font-size: 1.8rem;
                  padding-bottom: 8px;
                  font-weight: 700;
                  }
                  .desc-nav {
                  font-style: normal;
                  font-size: 1vw;
                  line-height: 1.5vw;
                  text-align: center;
                  color: black
                  }
                  .section-container {
                  /*padding: 40px 0;*/
                  background: #fff;
                  }
                  #timLatihID .slick-prev::before, #timLatihID .slick-next::before {
                  color: #5CBCD2 !important
                  }
                  .d-flex {
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: center;
                  }
                  .columns-50 {
                  width: 50%;
                  padding: 14px;
                  box-sizing: border-box;
                  color: #fff;
                  position: relative;
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-position: center;
                  }
                  .cardWrap {
                  position: inherit;
                  padding: 23px;
                  line-height: 2;
                  z-index: 2
                  }
                  .cardTitle {
                  font-size: 30px;
                  }
                  .cardDesc {
                  font-size: 18px;
                  line-height: 1.5;
                  padding-bottom: 15px;
                  width: 400px;
                  z-index: 99;
                  }
                  .columns-50:first-child:after {
                  content:'';
                  position:absolute;
                  top:0;
                  bottom:0;
                  left:0;
                  right:0;
                  background:rgba(19, 71, 0, 0.6);
                  z-index:1;
                  }
                  .columns-50:last-child:after {
                  content:'';
                  position:absolute;
                  top:0;
                  bottom:0;
                  left:0;
                  right:0;
                  z-index:1;
                  background:rgba(0, 71, 67, 0.6);
                  }
                  .navTab {
                  padding-left: 20%;
                  padding-right: 20%;
                  display: flex;
                  }
                  /*
                  * Program Unggulan
                  */
                  .programUnggulan__container {
                  width: 100%;
                  padding-left: 13.3%;
                  padding-right: 13.3%;
                  padding-top: 25px;
                  padding-bottom: 25px;
                  }
                  .programUnggulan__inner--flex {
                  display: flex;
                  flex-wrap: wrap;
                  }
                  .programUnggulan__columns {
                  width: 33.3333%;
                  padding: 14px;
                  }
                  .programUnggulan__columns .judul-section {
                  text-align: left;
                  margin-bottom: 20px !important;
                  }
                  .keunggulan__row {
                  display: flex;
                  flex-wrap: wrap;
                  flex-direction: column;
                  }
                  .keunggulan__innner {
                  position:relative;
                  border-radius: 11px;
                  box-shadow: 0px 2px 15px 0.5px rgba(0,0,0,0.1);
                  min-height: 290px;
                  background: #fff;
                  }
                  .keunggulan__columns {
                  padding: 14px;
                  }
                  .keunggulan__colBody {
                  padding: 14px;
                  }
                  .programUnggulan__Box {
                  padding: 23px;
                  background: #D7EFF4;
                  border-radius: 11px;
                  }
                  .programUnggulan__Box1 {
                  padding: 23px;
                  background: #D7EFF4;
                  border-radius: 11px;
                  }
                  .programUnggulan__Box2 {
                  padding: 23px;
                  background: #D7EFF4;
                  border-radius: 11px;
                  }
                  .programUnggulanBox__header {
                  padding: 15px 35px;
                  }
                  .programUnggulanBox1__header {
                  padding: 15px 35px;
                  }
                  .programUnggulanBox2__header {
                  padding: 15px 35px;
                  }
                  .modulBanner__row {
                  display: flex;
                  flex-wrap: wrap;
                  }
                  .keunggulan__col.slider-view-top {
                  width: 70%;
                  }
                  .keunggulan__col {
                  width: 30%;
                  }
                  .slick-next {
                  right: -13px;
                  }
                  .slick-prev {
                  left: -12px;
                  }
                  .fontgratis {
                  position: absolute;
                  bottom: 10px;
                  }
                  @media screen and (max-width: 768px) {
                  .programUnggulan__columns {
                  width: 100%;
                  }
                  .keunggulan__col, .keunggulan__col.slider-view-top {
                  width: 100%;
                  }
                  .keunggulan__col--left {
                  text-align: center;
                  padding-bottom:40px !important;
                  }
                  .block__dekstopProgram {
                  display: none;
                  }
                  .blockMobile__program {
                  display: block;
                  }
                  .navTab {
                  padding-left: unset;
                  padding-right: unset;
                  display: flex;
                  }
                  .title-nav {
                  font-size: 1.8rem;
                  height: 0;
                  }
                  #petaNav .title-nav {
                  width:100px;
                  padding-bottom: 20px;
                  }
                  .desc-nav {
                  padding-top: 25px;
                  font-size: 1.4rem;
                  line-height: 1;
                  }
                  .separator-mobile {
                  padding-top: 300px;
                  }
                  .columns-50 {
                  width: 100%;
                  }
                  .bgTim {
                  display:none;
                  }
                  .cardWrap {
                  text-align: center;
                  }
                  .cardWrap .cardDesc {
                  width:100%
                  }
                  }
               </style>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-js-in-pages " id="block-49618824">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <!--CDN-->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
               <script>
                  // slider
                  document.addEventListener("DOMContentLoaded", function() {
                  
                    $('.slider-banner').slick({
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: true,
                          autoplaySpeed: 4000,
                          arrows: true,
                          infinite: true,
                          dots: true,
                          pauseOnHover: false,
                          responsive: [{
                              breakpoint: 768,
                              settings: {
                                  slidesToShow: 1
                              }
                          }, {
                              breakpoint: 520,
                              settings: {
                                  slidesToShow: 1
                              }
                          }]
                      });
                    
                     $('.slider-view').slick({
                          lazyLoad: 'progressive',
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: false,
                          autoplaySpeed: 4000,
                          arrows: true,
                          infinite: true,
                          dots: false,
                          pauseOnHover: false,
                          responsive: [{
                              breakpoint: 768,
                              settings: {
                                  slidesToShow: 2,
                              }
                          }, {
                              breakpoint: 520,
                              settings: {
                                  slidesToShow: 1,
                              }
                          }]
                    }); 
                    
                      
                     $('.slider-view-top').slick({
                          lazyLoad: 'progressive',
                          slidesToShow: 3,
                          slidesToScroll: 1,
                          autoplay: true,
                          autoplaySpeed: 4000,
                          arrows: true,
                          infinite: true,
                          dots: true,
                          pauseOnHover: false,
                          responsive: [{
                              breakpoint: 768,
                              settings: {
                                  slidesToShow: 2,
                              }
                          }, {
                              breakpoint: 520,
                              settings: {
                                  slidesToShow: 1,
                              }
                          }]
                    }); 
                    
                     $('.slider-view-style-1').slick({
                          lazyLoad: 'progressive',
                          slidesToShow: 4,
                          slidesToScroll: 1,
                          autoplay: true,
                          autoplaySpeed: 4000,
                          arrows: true,
                          infinite: true,
                          dots: true,
                          pauseOnHover: false,
                          responsive: [{
                              breakpoint: 768,
                              settings: {
                                  slidesToShow: 2,
                              }
                          }, {
                              breakpoint: 520,
                              settings: {
                                  slidesToShow: 1,
                              }
                          }]
                    }); 
                  
                  });
               </script>
            </div>
         </div>
      </main>
      </div>
      <script>
         if (!Element.prototype.closest) {
           Element.prototype.closest = function(s) {
             let el = this;
             do {
               if (el.matches(s)) return el;
               el = el.parentElement || el.parentNode;
             } while (el !== null && el.nodeType === 1);
             return null;
           };
         }
         const offMenu = event => {
         if (event.target.closest('.navbar__menu')) return
         document
           .querySelectorAll('.menu')
           .forEach(item => {
             item.classList.add('hidden')
             item.setAttribute('aria-hidden', 'true')
           })
         }
         const toggleMenu = id => {
         const el = document.getElementById(id)
         if (el.classList.contains('hidden')) {
         document
         .querySelectorAll('.inner-menu')
         .forEach(item => {
           item.classList.add('hidden')
           item.setAttribute('aria-hidden', 'true')
         })
         el.classList.remove('hidden')
         el.setAttribute('aria-hidden', 'false')
         } else {
         el.classList.add('hidden')
         el.setAttribute('aria-hidden', 'true')
         }
         !el.classList.contains('hidden') && el.focus()
         }
         
         const domBody = document.body
         const usingMouse = 'using-mouse'
         domBody.addEventListener('mousedown', () => {
           domBody.classList.add(usingMouse)
         })
         domBody.addEventListener('keydown', () => {
           domBody.classList.remove(usingMouse)
         })
         
         const headerEl = document.querySelector('#navbar')
         const topHook = document.querySelector('#top')
         if (
           "IntersectionObserver" in window
         ) {
           const observer = new IntersectionObserver(entries => {
             if (entries[0].boundingClientRect.y < 0) {
               headerEl.classList.remove('at-top')
             } else {
               headerEl.classList.add('at-top')
             }
           },{threshold: 1});
           observer.observe(topHook)
         }
      </script>
      <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6145bed6cf9dc33b',m:'1cf7d6f0c6e14daf591aab86687891dafece3590-1611113727-1800-AY+Typg90zfWA5SsuPJDtvbXGu891Xr7a0L7nyooNiklc/+mkjsZTxG5EgKDhLwV4jQu4Je5PDhGagk3t50P1137KZYPLv/KqV3wUiKPlohc/iYgSffu3hKtCA1h8bDZgw==',s:[0xefb6dc30b7,0xa06007ccd2],}})();</script></body>
</html>