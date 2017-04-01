<?php
namespace App\Libraries;

/**
 * Libaries Static Ijin
 */
class Ijin
{

  // Mian menu Data
  public static function mainMenu() {
    $data =[
         [ 'nama' => 'Home', 'URL' => 'web' , 'icon' => 'icon-menu fa fa-home' ],
         [ 'nama' => 'Alur Perijinan', 'URL' => 'web/alur', 'icon' => 'icon-menu fa fa-sitemap' ],
         [ 'nama' => 'Persyaratan', 'URL' => 'web/persyaratan', 'icon' => 'icon-menu fa fa-file-text-o' ],
         [ 'nama' => 'Call Center', 'URL' => 'web/callcenter', 'icon' => 'icon-menu fa fa-comments']
      ];

    return $data;
  }

  // Berita Dummy Data
  public static function Berita() {
    $data =[
         [
           'judul' => 'Pemkot Bandung Bersama TNI Membersihkan Sungai CItepus',
           'image' => 'http://portal.bkbpm.bandung.go.id//uploads/file_1466348939.jpg' ,
           'isi' => 'BANDUNG BB- Setelah melakukan rapat terkait penyelesaian masalah sampah Sungai Citarum yang difasilitasi Wakil Gubernur Jawa Barat Deddy Mizwar,
                     Pemerintah Kota Bandung dan Pemerintah Kabupaten Bandung sepakat berkolaborasi dengan unsur TNI dan komunitas pecinta  lingkungan untuk mengangkut
                     dengan unsur TNI dan komunitas pecinta lingkungan untuk mengangkut sampah yang menumpuk memenuhi Sungai Citepus. Wali Kota Bandung M Ridwansampah yang menumpuk memenuhi Sungai Citepus. Wali Kota Bandung M Ridwan Kamil didampingi Dandim 0618/BS Kolonel Inf Agoes Hari Soewanto, meninjau
                     langsung proses pengangkutan sampah di Desa Cijagra dan Sungai Citepus di Desa Cangkuang Wetan, Kecamatan Dayeuhkolot, Kabupaten Bandung, Jawa Barat,
                     Kamis (23/3/2016).'
         ],
      ];

    return $data;
  }

  // Alamat Data
  public static function Alamat() {
    $data =[
         [
           'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.22007707075!2d107.60826008451545!3d-6.902261325980927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x63d2808d57de1004!2sKantor+Walikota+Bandung!5e0!3m2!1sid!2sid!4v1466372905561',
           'alamat' => ' Jl. Wastukencana, No. 2 Bandung Jawa Barat 40117, Indonesia.' ,
           'noHp' => '022-4230097'
         ],
      ];

    return $data;
  }


}
