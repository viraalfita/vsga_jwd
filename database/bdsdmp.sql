-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 06:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsdmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'BPSDMP Kominfo Surabaya bersama Dinas Kominfo Pamekasan Resmi Buka Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI', 'Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, Selasa 9/3/2021 membuka secara resmi pelaksanaan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang dilaksanakan di FrontOne Hotel Pamekasan ini di dahului dengan pelaksanaan Kegiatan Rapid Test, Senin 8/3/2021, yang diikuti oleh sekitar 40 peserta angkatan kerja muda baru di wilayah Kabupaten Pamekasan dan Sumenep.\r\nKepala BPSDMP Kominfo Surabaya Ibu Eka Handayani dalam sambutannya mengatakan bahwa Indonesia saat ini mengalami permasalahan ketenagakerjaan terutama dalam hal skill gaps, dimana kebutuhan tenaga kerja ahli dalam biang teknologi masih belum tercukupi.\r\n“Laporan World Bank Tahun 2016 bahwa saat ini Indonesia mengalami kekurangan tenaga kerja semi terampil sebesar 9 juta tahun 2015-2030, sementara di sisi lain Indonesia justru diproyeksikan menjadi Negara ekonom terbesar ke 7 tahun 2030., Ucapnya dihadapan peserta pelatihan. “\r\nKemenkominfo RI masih menurut Kepala BPSDMP-Kominfo Surabaya ini mempunyai program strategis lainnya seperti, Vocational School Graduate Academy (VSGA), Fresh Graduate Academy (FGA), Thematic Academy (TA), Digital Enterpreneurship Academy (DEA), Profesional Academy (PRO) dan Government Transformation Academy (GTA), informasi lengkapnya bisa dibuka di laman website digitalent.kominfo.go.id.\r\nSementara itu Kepala Dinas Komunikasi dan Informatika Pemkab Pamekasan dalam sambutannya yang juga sekaligus membuka acara pelatihan dan jadi Narasumber kegiatan ini menekankan kepada peserta untuk benar benar dimanfaatkan dan digunakan dengan sebaik baiknya, karena pelatihan ini adalah Gratis untuk peserta sebagai angkatan kerja muda di wilayah Pamekasan dan Sumenep.\r\nDirinya juga memberikan mensosialisasikan terkait dengan Program dari Kemenkominfo RI yakni Program Digital Talent Scholarship (DTS) yaitu pelatihan intensif kepada ASN, pelaku industry, lulusan SMK/Diploma/Sarjana dengan tema tema yang menjadi inti pengembangan industri 4.0', 'GAMBAR KEGIATAN 1.jpg'),
(7, 'Pelatihan dan Sertifikasi Kompetensi Berbasis SKKNI Hadir di Mojokerto', 'BPSDMP Kominfo Surabaya dan Dinas Komunikasi dan Informatika Kota Mojokerto menyelenggarakan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang diadakan di Hotel Ayola Sunrise Mojokerto dibuka oleh Walikota Mojokerto (Ibu Hj. Ika Puspitasari, SE) dan turut pula dihadiri oleh Bapak Gaguk Tri Prasetyo, AMT, MM selaku Kepala Dinas Kominfo Kota Mojokerto, Ibu Dra. Ec. Nirmala Dewi, MM selaku perwakilan Kepala Dinas Kominfo Jawa Timur serta didampingi oleh Kepala BPSDMP Kominfo Surabaya, Ibu Eka Handayani, SE., MM\r\nKegiatan ini diikuti oleh 70 orang peserta yang telah melalui proses seleksi administrasi dan protokol kesehatan yang ketat, seluruh peserta sebelum mengikuti pelatihan diwajibkan untuk mengikuti Rapid Test Antigen yang telah disediakan panitia penyelenggara dan menerapkan 5M. Pelatihan ini terbagi menjadi 3 skema yaitu; skema junior graphic design, skema staf manajemen data dan terampil menggunakan teknologi digital bagi perempuan dan ibu rumah tangga, yang bertujuan untuk meningkatkan keterampilan khususnya bagi angkatan kerja muda Indonesia dibidang TIK.\r\n“Kemampuan dibidang TIK seperti halnya pelatihan ini sangat penting di era digital (Industri 4.0). Saat ini tidak ada lagi masyarakat yang tidak melek teknologi. Usia berapa pun harus mengenal teknologi, apalagi usia angkatan muda, teknologi digital adalah hal yang wajib diketahui dan dipahami. Karena saat ini dibidang apapun tidak ada yang tidak menggunakan TIK,” ujar Ning Ita sapaan akrab Wali Kota Mojokerto dalam sambutannya\r\nKepala BPSDMP Kominfo Surabaya Ibu Eka Handayani memaparkan dalam sambutannya bahwa, “saat ini Indonesia masih mengalami permasalahan ketenagakerjaan khususnya dalam skills gap dimana kebutuhan tenaga kerja ahli dalam bidang teknologi belum tercukupi. Salah satu faktor yang berkontribusi dalam kurang terserapnya tenaga kerja adalah minimnya tenaga kerja terampil terutama SDM yang dapat mengembangkan teknologi digital. Padahal perkembangan teknologi digital saat ini semakin pesat dan kebutuhan tenaga ahli digital semakin meningkat.”\r\nOleh karena itu, peran Kominfo sangat penting dalam mengembangkan talenta masyarakat khususnya dibidang digital. Salah satu upaya Kementerian Kominfo adalah dengan mengadakan kegiatan pelatihan dan sertifikasi kompetensi bidang SKKNI ini. Ibu Eka Handayani dalam sambutannya berharap, peserta pelatihan dapat meningkatkan keterampilannya dan bisa lulus dalam uji sertifikasi kompetensi.', 'GAMBAR KEGIATAN 2.jpg'),
(8, 'Pelatihan Pengenalan Digital Marketing', 'BPSDMP Kominfo Surabaya dan Gapura Digital bekerjasama menyelenggarakan pelatihan pengenalan digital marketing diikuti oleh 153 orang peserta melalui aplikasi zoom meeting dan youtube channel BPSDMP Kominfo Surabaya. Pelatihan ini bertujuan agar dapat meningkatkan dan memajukan bisnis serta menambah kemampuan dan pengetahuan tentang pemasaran digital.\r\nKegiatan ini dibuka oleh Kepala BPSDMP Kominfo Surabaya, Ibu Eka Handayani dan dihadiri oleh Kepala Badan Litbang SDM Hary Budiarto yang memberikan tambahan ilmu tentang ekonomi digital. Dalam sambutannya, Bapak Hary Budiarto menyampaikan bahwa meskipun sedang dilanda pandemi kita tidak boleh bermalas-malasan dan menyerah, kita harus mampu memanfaatkan waktu dengan mengasah kemampuan melalui pelatihan-pelatihan. Salah satu contohnya adalah pelatihan yang diadakan oleh BPSDMP Kominfo Surabaya.\r\nBapak Hary Budiarto juga menyampaikan bahwa inovasi teknologi akan berdampak pada seluruh aspek kehidupan manusia, perkembangan ekonomi digital yang begitu cepat dapat menjadi salah satu pendorong pertumbuhan ekonomi Indonesia pada 5 tahun kedepan. Itulah alasan pentingnya kita mengenal dan menguasai digital marketing.\r\nPelatihan ini disampaikan oleh Ina Dwiana, Fasilitator Google Gapura Digital. Ina Dwianamenekankan pentingnya UKM Go Online karena dapat membantu menekan biaya operasional, mengatur biaya pemasaran sesuai kebutuhan dan dapat lebih cepat untuk memulai bisnis dengan meminimalisasi risiko. Adapun tools yang dapat digunakan untuk menunjang digital marketing diantaranya adalah Google Bisnisku, website, Google Ads, dan Media Sosial.', 'GAMBAR KEGIATAN 3.png'),
(9, 'Pembukaan Government Transformation Academy Tahun 2021 dan Penandatangan MOU dengan Gubernur NTB', 'Senin, 25 Oktober 2021. Kementerian Komunikasi dan Informatika melalui Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) menyelenggarakan kegiatan Pembukaan Pelatihan Government Transformation Academy (GTA) Tahun 2021. Kegiatan pembukaan dan orientasi ini diselenggarakan secara tatap muka (langsung) di Kota Mataram NTB dan online via aplikasi video conference di berberapa daerah diantaranya Palangkaraya, Jember dan Mamuju.\r\nKegiatan yang diadakan di Kantor BPSDMD Provinsi NTB ini dibuka secara resmi oleh Wakil Gubernur NTB, Ibu Dr. Ir. Hj. Sitti Rohmi Djalilah, M.Pd. Dihadiri oleh Kepala Badan Litbang SDM Kemenkominfo Bapak Harry Budiarto, Sekretaris Balitbang SDM, Kepala BPSDMP Kominfo Surabaya, Kapokja GTA, dan beberapa Kepala OPD Provinsi NTB.\r\nDalam sambutan Wakil Gubernur NTB, beliau menyampaikan bahwa NTB sangat menyambut baik kegiatan DTS GTA di NTB karena pelatihan ini merupakan suatu kebutuhan. Khususnya di masa pandemi kemampuan digitalisasi sangat membantu pekerjaan pemerintah. Pelatihan ini diharapkan dapat dimanfaatkan untuk meningkatkan kemampuan para ASN dalam menghadapi perkembangan teknologi.\r\nSkema pelatihan pada program GTA dirancang mulai dari tingkat basic skill yang berkaitan dengan literasi digital, intermediate skill yang menekankan peningkatan kompetensi teknis, hingga advance skill yang menyasar ke para pengambil keputusan. Pelatihan GTA ini berlangsung secara online dan blended yang memadukan metode online dan offline. Durasi pelatihan berbeda-beda sesuai dengan tema pelatihan. Pada pelatihan online, peserta dapat mengatur sendiri waktu belajar secara mandiri dalam batas waktu pelatihan.\r\nSebagai informasi tambahan, Pelatihan GTA tahun 2021 berfokus pada 13 (tiga belas) skema pelatihan yakni Get Connected, IT Essential, Cybersecurity Essentials, WI-lenial, IT Business Analyst, IT Project Management, Digital Public Relations, Social Media Analyst, Business Process Engineer, Network Administrator, Junior Graphic Designer, Data Mining Fundamental, dan Analis Kota Cerdas SNI ISO 37122:2019', 'GAMBAR KEGIATAN 4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
