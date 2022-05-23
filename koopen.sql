-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2022 pada 23.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koopen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seo_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `link_tokped` varchar(255) NOT NULL,
  `gambar_name` varchar(255) NOT NULL,
  `id_kproduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `name`, `seo_name`, `description`, `harga`, `status`, `link_tokped`, `gambar_name`, `id_kproduk`) VALUES
(23, 'Robusta Dampit - Sridonoretno', 'robusta-dampit-sridonoretno', '<p>Robusta Dampit - Sridonoretno (200gr)<br />\r\n<br />\r\n<br />\r\n<br />\r\nIg: @koopen_klojen<br />\r\nfb: tokokopikoopen<br />\r\nalamat: Jl.Trunojoyo No A1<br />\r\nwhatsapp :083834376927 / 081216789545</p>\r\n', '40000', 'Tersedia', 'https://www.tokopedia.com/tokokopikoopen/robusta-dampit-sridonoretno', '40309491_0741ccb6-8099-4b01-b4cf-ba63f7b9c47f_2048_2048.jpg', 1),
(24, 'Arabika Bumiaji', 'arabika-bumiaji', '<p>Arabika Bumiaji (200 gr)<br />\r\n<br />\r\n<br />\r\n<br />\r\nIg: @koopen_klojen<br />\r\nfb: tokokopikoopen<br />\r\nalamat: Jl.Trunojoyo No A1<br />\r\nwhatsapp :083834376927 / 081216789545</p>\r\n', '60000', 'Tersedia', 'https://www.tokopedia.com/tokokopikoopen/arabika-bumiaji', '40309491_a5f43e75-e55c-4908-b98c-bdbc433d32f4_2048_2048.jpg', 1),
(25, 'kaos koopen', 'kaos-koopen', '', '75000', 'Tidak Tersedia', '', 'WhatsApp_Image_2022-05-21_at_20_23_00_(1).jpeg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartikel`
--

CREATE TABLE `kartikel` (
  `id_kartikel` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `seo_nama` varchar(200) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kartikel`
--

INSERT INTO `kartikel` (`id_kartikel`, `nama`, `seo_nama`, `isActive`) VALUES
(2, 'seduhan kopi', 'biji-kopi', 1),
(3, 'kebun kopi', 'tentang-kopi', 1),
(4, 'Roasting kopi', 'roasting', 1),
(5, 'opini kopi', 'koopen-klojen', 1),
(6, 'Feature', 'feature', 1),
(7, 'event', 'event', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kproduk`
--

CREATE TABLE `kproduk` (
  `id_kproduk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `seo_nama` varchar(200) NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kproduk`
--

INSERT INTO `kproduk` (`id_kproduk`, `nama`, `seo_nama`, `isActive`) VALUES
(1, 'Biji Kopi', '', '1'),
(2, 'merchandise', 'merchandise', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_posting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `seo_nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` varchar(100) NOT NULL,
  `tahun` date NOT NULL,
  `gambar_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama`, `seo_nama`, `alamat`, `maps`, `tahun`, `gambar_name`) VALUES
(1, 'tes', 'tes', 'tes', 'Mpas', '2022-05-11', ''),
(2, 'TESSSS', 'AJSDKL', 'asdklk', 'askldj', '2022-05-17', 'jnhh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id_partner`, `name`, `alamat`, `instagram`, `maps`) VALUES
(1, 'Tes', 'Tes Alamat No21 Malang 56123', '@Remboegpawon', 'https://maps.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `seo_judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `featured` varchar(100) NOT NULL,
  `gambar_name` varchar(255) NOT NULL,
  `id_kartikel` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id_posting`, `judul`, `seo_judul`, `konten`, `featured`, `gambar_name`, `id_kartikel`, `user`, `isActive`, `date`) VALUES
(10, 'YANG IKONIK DI PRAPATAN KLOJEN', 'yang-ikonik-di-prapatan-klojen', '<p>Selain produk yang khas, suatu perusahaan akan lebih mudah dikenali konsumen ketika melihat logonya, karena logo merupakan wajah dari perusahaan. Namun demikian, tak banyak tempat usaha atau perusahaan khususnya di kota Malang yang menggunakan foto wajah pemiliknya sebagai logo. Butuh kepercayaan diri dan keyakinan yang kuat sebelum memutuskan untuk memakai foto wajah sebagai logo. Toko Kopi Koopen merupakan salah satunya atau bahkan mungkin satu-satunya toko dan kedai kopi di Malang yang menggunakan foto wajah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Toko Kopi Koopen berada di tengah kota, dekat dengan Gedung Balaikota, Gedung DPRD, Lapangan Rampal dan sederet dengan stasiun kereta api Kota Baru. Berseberangan dengan Pasar Klojen, tepat di pojok perempatan jalan yang cukup padat arus lalulintasnya. Pada satu tembok toko yang menghadap jalan, terlihat cukup jelas logo berukuran cukup besar. Logo dengan gambar pemiliknya yang biasa dipanggil Ipong.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Logo merupakan identitas dari perusahaan. Seperti kita tahu, ada beberapa perusahaan terkenal yang produknya dengan cepat bisa dikenali lewat logo wajahnya , diantaranya jamu Nyonya Meneer dan minuman beralkohol Anggur Orang Tua atau para penggemarnya kerap menyebut Pak Jenggot. Dua perusahaan nasional yang telah berdiri puluhan tahun dan bertahan hingga sekarang. Mengingat merek hanya dengan melihat satu gambar saja adalah bukti dari logo yang berdampak baik bagi suatu bisnis usaha.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sekilas melihat logo Toko Kopi Koopen, kita seolah menangkap kesan; &quot;Ipong secara personal telah memberi jaminan bahwa produk kopinya layak dicoba untuk dikonsumsi. Figur yang berani pasang muka untuk mempertanggungjawabkan secara sosial sebuah produk.&quot; Tak semua pengusaha punya nyali seperti itu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada umumnya, perusahaan memakai simbol yang unik atau rangkaian huruf dan kata sebagai &quot;signature&quot;. Identitas yang kadang penafsiran akan visinya hanya dimengerti oleh sang pemilik, lepas dari penilaian estetika yang subyektif. Dan memang, ketidakmengertian yang mengusik logika dan menggugah rasa penasaran kerap menjadi bagian dari strategi pengenalan perusahaan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salam baik dan sehat selalu,</p>\r\n\r\n<p>15 Maret 2022</p>\r\n', 'Ya', 'FB_IMG_1653140380514.jpg', 6, 23, 1, '2022-05-21'),
(11, 'YANG TAK TERSERET ARUS', 'yang-tak-terseret-arus', '<p>&quot;Hanya ikan mati yang terseret arus,&quot; ujar seorang kawan di suatu saat. Quote yang terlintas saat lebih memperhatikan puluhan toples dan kemasan di Toko Kopi Koopen. Wadah-wadah yang berisi kopi &quot;hanya&quot; dari Malang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-----------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seperti kita tahu, pertumbuhan kafe dan kedai kopi di Malang lebih dulu mewabah dibanding pandemi. Ruko-ruko, lahan-lahan yang sebelumnya &quot;mangkrak&quot; bahkan rumah-rumah yang sebelumnya menjadi tempat tinggal, dialih fungsikan menjadi tongkrongan baru berupa kafe. Ratusan ribu mahasiswa dari berbagai daerah di Nusantara yang masuk ke kota Malang tiap tahun rupanya menjadi daya tarik. Tempat nongkrong telah menjadi kebutuhan yang merepresentasikan masyarakat urban sebagai simbol pergaulan untuk saling mengenal dan berkenalan. Ngopi bareng telah menjadi bagian dari lifestyle mereka.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari sana, banyak sekali kafe yang menyediakan kopi dari berbagai daerah yang ada di Nusantara. Mungkin sebagian besar dari pengelola kafe berpikiran untuk berusaha memenuhi kebutuhan dari para pendatang, pasar yang cukup besar tersebut. Namun demikian, Toko Kopi Koopen merupakan sedikit atau bahkan satu-satunya dari kafe atau kedai yang berpikiran lain lantas mengambil sikap yang berbeda. Koopen, sejak semula fokus menyediakan kopi &quot;hanya&quot; dari Malang Raya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Justru karena banyaknya pendatang, Ipong yang asli Arek Malang ini sepertinya lebih tertarik untuk mengenalkan kopi dari Malang Raya kepada mereka. Setidaknya, para pendatang itu pernah mencicipi beragam kopi dari Malang Raya saat mereka ada di sini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ketika masuk di Koopen yang menyediakan kopi &#39;hanya&#39; dari Malang, mereka menjadi tahu, bahwa Malang Raya yang dikelilingi pegunungan ini mempunyai beragam kopi, baik kopi robusta maupun arabika. Nampak sekali, Ipong begitu percaya diri akan produknya dan seolah berharap, ketika para penikmat kopi itu kembali ke daerah asalnya atau bahkan merantau, mereka mau menceritakan tentang kekhasan kopi dari Malang Raya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berdasarkan data yang dikutip dari media online Malangtimes, 10 Oktober 2017, setidaknya ada 50-an perguruan tinggi swasta mencakup akademi, politeknik, sekolah tinggi, institut dan universitas yang tersebar di wilayah Kota Malang dan Kabupaten Malang. Dari jumlah perguruan tinggi swasta yang ada di Kota dan Kabupaten Malang itu, tidak salah bila julukan Kota Pendidikan disematkan kepada Malang. Setiap tahun, ratusan ribu mahasiswa memasuki Malang. Tahun 2015 lalu, dikutip dari beberapa sumber, ada sekitar 21.500 mahasiswa menyerbu dua kampus negeri ternama di Kota Malang. Tahun 2016, dari satu kampus negeri saja ada 12 ribu mahasiswa baru. Dan dari akumulasi jumlah mahasiswa di lima perguruan tinggi negeri di Kota Malang, jumlahnya mencapai 131 ribu. Jumlah yang disebutkan di atas datang dari perguruan tinggi negeri. Tentu bila ditambah dengan 50-an perguruan tinggi swasta di Malang, akumulasi jumlah mahasiswa di Malang bisa lebih dari 131 ribu.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salam baik dan sehat selalu,</p>\r\n\r\n<p>Yono Ndoyit, 23 Maret 2022</p>\r\n', 'Ya', 'FB_IMG_1653141042056.jpg', 6, 23, 1, '2022-05-21'),
(12, 'REBEL YELL DI BERGEN BUURT', 'rebel-yell-di-bergen-buurt', '<p>&nbsp;</p>\r\n\r\n<p>In the midnight hour, she cried more, more, more</p>\r\n\r\n<p>With a rebel yell, she cried more, more, more, wow</p>\r\n\r\n<p>In the midnight hour, babe, more, more, more</p>\r\n\r\n<p>With a rebel yell, she cried more, more, more</p>\r\n\r\n<p>More, more, more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bukan karena larut dalam emosi film Layangan Putus, Wahyoe GV menyanyikan lagu berlirik tangis dari Billy Idol yang berjudul Rebel Yell. Bukan juga karena berempati dengan Kinan, tokoh utama wanita yang tak rela diduakan oleh Aris, suaminya. Karena kesibukannya manggung kesana kemari, Wahyoe mungkin tak sempat nonton film serial yang lagi viral itu. Lagu itu meluncur begitu saja darinya. Satu dari puluhan lagu beberapa masa yang ia bawakan saat itu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sabtu malam, Wahyoe &quot;konser tunggal&quot; di Burgen Buurt. Di Koopen Ijen. Salah satu dari cabang toko kopi milik Ipong, Arek Kasin, yang juga Arek Tugu (halokes). Jalan Ijen dibangun di kawasan elit kota Malang dengan sebutan &lsquo;Bergen Buurt&rsquo; yg berarti kawasan jalan dengan nama-nama gunung. Kawasan itu dibangun oleh seorang arsitek asal Belanda, Herman Thomas Karsten di tahun 1935. Seperti yang kita tahu, kota Malang dikelilingi oleh gunung-gunung.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Koopen sendiri merupakan toko dan kedai yang menyediakan kopi hanya dari Malang. Mungkin, hanya Koopen dan kelompoknya yang mengambil gagasan seperti itu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kopi Malang mempunyai riwayat yang cukup panjang. Terakota.id menyebutkan, perkebunan kopi di Nusantara terjadi pada periode tanam paksa atau Cultuurstelsel. Komoditas kopi menjadi komoditas primadona dalam perdagangan internasional. Pemerintah kolonial Hindia Belanda membuka perkebunan kopi termasuk Afdeling Malang (Goor, 1986: 35). Afdeling Malang bukan tempat penting sebelum masuknya ekonomi perkebunan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perkebunan kopi dibuka di Afdeling Malang sejak 1832. Lokasi Afdeling Malang strategis, diapit dua barisan pegunungan, yakni pegunungan Arjuna-Kawi di sebelah barat dan Bromo-Semeru di sebelah timur. Kondisi geografis ini sangat menguntungkan karena aktivitas vulkanis gunung berapi membuat lahan menjadi subur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saat itu, Afdeling Malang merupakan bagian dari Karesidenan Pasuruan, yang membawahi delapan distrik. Meliputi Penanggungan, Turen, Ngantang, Karanglo, Pakis, Gondanglegi, Sengguruh (Kepanjen), dan Kota Malang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>---------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tepat pukul 23.15 wib, sepulang dari Burgen Buurt, melintas di Kayutangan. Jalan kembar di pusat kota yang lagi banyak dibicarakan sebab dipupuk kontroversi dan hingar bingar reaksioner, nampak ramai sekali. Kursi-kursi di trotoar kiri kanan tak ada yang tersisa, bahkan sebagian muda mudi terlihat &quot;nendes kombet&quot; di toko dan perkantoran yang sudah tutup. Tutup karena memang jam kerja sudah kelar, bukan sebab jalannya yang ditutup seperti di jalan lain.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mungkin saja, kisah-kisah lain seperti &quot;layangan putus&quot; bisa muncul dan berawal dari sana. Atau, mungkin juga, celetukan lawas Malangan kembali kerap terdengar, &quot;nggolek pedhotan&quot; hehe.&nbsp;</p>\r\n\r\n<p>Entah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salam baik dan sehat selalu,</p>\r\n\r\n<p>30 Januari 2022</p>\r\n', 'Ya', 'FB_IMG_1653141402837.jpg', 6, 23, 1, '2022-05-21'),
(13, 'PUISI DAN SECANGKIR KOPI KOOPEN', 'puisi-dan-secangkir-kopi-koopen', '<p>Ada orang yang berpandangan, &quot;Tak sopan bila saat ngopi bareng kawan &#39;disambi&#39; otak-atik handphone&quot; Namun, ada juga sebagian orang yang sengaja memainkan hpnya karena seringkali ada sesuatu dalam obrolan yang tiba-tiba perlu untuk diingat dan layak ditulis dalam catatan gawainya agar hal yang dianggap penting itu tak menguap begitu saja, terutama bagi seseorang yang merasa memori di otaknya amat terbatas seperti penulis. Atau mungkin juga, dia merasa harus menyelesaikan tulisan pendeknya sebelum perjumpaannya itu berakhir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dan memang, inspirasi yang menarik kadang tiba-tiba datang meski tanpa undangan. Diundang pun, kadang ia enggan datang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seperti saat ngopi di &quot;Prapatan Klojen&quot;, inspirasi dan ingatan akan wacana lama muncul begitu saja saat melihat beberapa pelanggan Toko Kopi Koopen yang ngopi sambil sibuk memainkan handphonenya. Beberapa diantaranya nampak nge-game. Namun yang menarik, sebagian dari mereka yang lagi asik ngobrol sambil sesekali seperti menuliskan sesuatu di handphonenya. Rasa ketertarikan mengundang penasaran yang kemudian berkembang menimbulkan dugaan. Menduga-duga adalah hak masing-masing individu meski hal itu tak bisa dianggap kebenaran dan menduga adalah hobi termurah yang manusiawi hehe. Bisa jadi mereka tengah saling mengirim pesan WhatsApp dengan koleganya, saling berkomentar di akun medsos atau mungkin sedang menulis cerita pendek yang akan diupload saat nongkrong di Koopen. Atau, mungkin juga mereka sedang asyik menulis puisi ?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pikiran &quot;ngglambyar&quot; meluncur saat muncul kata puisi di tempat ngopi yang lantas mengingatkan penulis pada obrolan singkat dengan Bung Iwan Jaconiah beberapa bulan yang lalu. Saat itu, dia baru saja menulis artikel tentang Bayar Kopi dengan Puisi di Rumania yang dimuat di Mediaindonesia.com. Tulisan yang menarik. Padanya, penulis sampaikan kalau wacana dalam tulisannya itu akan disampaikan pada kawan-kawan di Malang yang mempunyai kedai kopi. Barangkali dari mereka ada yang merespon baik.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Iwan Jaconiah sendiri merupakan pengasuh &lsquo;Sajak Kofe&rsquo; di Media Indonesia, penyair Indonesia pertama peraih Diploma of Honor Award pada helatan X International Literary Festival &quot;Chekhov Autumn-2019&quot; di Yalta, Republik Krimea, Federasi Rusia. Buku terbarunya kumpulan puisi Hoi! (Terbit Press, 2020).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada Ipong, pemilik Toko Kopi Koopen, wacana ini penulis sampaikan. Barangkali saja, gagasan bayar kopi dengan puisi bisa diadopsi dengan beberapa adaptasi, tak harus meniru &quot;plek&quot; di Rumania sana. Mungkin juga, tidak dalam bentuk puisi, bisa saja dengan cerita pendek sekitar Toko Kopi Koopen atau bentuk kreativitas seni lainnya. Dan Ipong, pada intinya setuju-setuju saja dan terbuka untuk hal-hal yang baik. &quot;Wokey tok wes,&quot; jawab Ipong. Yang jadi pertanyaannya, bagaimana nanti mekanisme pelaksanaannya. Wacana dan respon baik selalu penulis duga menjadi modal yang cukup baik pula hehe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di bulan Maret tiga tahun yang lalu, penulis sempat beberapa kali mendokumentasikan pembacaan puisi di Toko Kopi Koopen. Si Kecil Ferdy, salah satu pelanggan ngopi yang saat itu masih duduk di bangku SMA, kerap dengan santainya membaca karya puisinya di sana.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berikut tulisan Iwan Jaconiah seperti dilansir dari Mediaindonesia.com (19/01/2022) yang dia beri judul; Bayar Kopi dengan Puisi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berbicara tentang kopi dan puisi, saya teringat akan Julius Meinl, sebuah produsen dan pengecer kopi ternama. Perusahaan bonafide tersebut membangun kedai kopi terbesar di dunia. Terletak antara Museum Sejarah Alam dan Museum Sejarah Seni di Ringstrasse Wina, Austria. Kedai tersebut dihadirkan selama kejuaraan sepak bola Eropa 2008. Peminatnya terbilang melambung.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada 1 Oktober 2013, misalnya, saat liburan berakhir, para penumpang kereta bawah tanah di Bucharest, Rumania, dikejutkan dengan seluruh gerbong yang dihiasi dan ditempeli puisi-puisi. Siapapun boleh ambil untuk dibawa pulang sebagai oleh-oleh. Dalam konferensi pers waktu itu, para pemimpin negara tersebut membahas pentingnya puisi dalam kehidupan sehari-hari mereka. Kejutan berlanjut dengan kereta bawah tanah lain yang mencerahkan hari para penumpang dengan puisi dalam perjalanan pulang.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada 25 Oktober di tahun yang sama, lebih dari 6.300 orang menulis puisi, sajak, atau syair tanpa menjadi seniman, penyair, musisi, atau penulis. Puisi-puisi, yang ditulis di atas serbet, digunakan sebagai mata uang untuk ditukar dengan kopi Julius Meinl di seluruh Rumania.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selama sehari, harga kopi tidak dinyatakan dengan uang, tetapi dengan kata-kata. Tak mengherankan masyarakat di tanah kelahiran penyair Nina Cassian (1924-2014) itu begitu menghargai puisi. Bayar dengan puisi adalah kesuksesan besar.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada Hari Puisi Sedunia 2015, lebih dari 100.000 orang menunjukkan kepada dunia bahwa perasaan lebih berharga daripada uang.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Inisiatif gerakan membayar kopi dengan puisi adalah contoh nyata. Membuat dunia menjadi tempat yang lebih baik dengan kekuatan puisi. Melalui slogan perusahaan sejak 2016, yaitu pay with a poem (bayar dengan puisi) dan meet with a poem (jumpa dengan puisi) menjadikan Julius Meinl kian membumi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gerakan membayar kopi dengan puisi pun berlanjut hingga 2020 sebelum pandemi. Tidak hanya di Eropa, namun juga di Australia. Bahkan saat saya berada di Moskwa, Rusia, produsen Julius Meinl juga memberlakukan konsumen untuk membayar segelas kopi dengan sebuah puisi. Puisi dan kopi memang bukan barang baru di bawah langit ini. Namun, inovasi-inovasi teranyar menjadi penting untuk menjembatani mata rantai antara petani, produsen, dan konsumen.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salam baik dan sehat selalu,</p>\r\n\r\n<p>Yono Ndoyit, 31 Maret 2022</p>\r\n', 'Ya', 'IMG_20220521_210646.jpg', 6, 23, 1, '2022-05-21'),
(14, 'KEPEKAAN LIDAH SANG ATLIT BASKET', 'kepekaan-lidah-sang-atlit-basket', '<p>&quot;Bolehkah, orang awam seperti penonton, di luar penggiat kopi mengikuti Sekolah Minum Kopi dengan agenda reguler Reboan Malam ? Dan kalau diperbolehkan, sebagai penonton yang suka akan &#39;pertunjukan&#39;, bisakah ditambahkan di sela atau jeda acara diadakan semacam &quot;entertainment&quot; agar lebih menarik. Misal baca puisi atau musik akustik ?&quot; usulan dari penonton yang sedikit mengusik peserta yang hadir. Sesi usulan ini disediakan waktunya oleh moderator yang pengelola Remboeg Pawon Kelud, Edy, yang di Facebook menggunakan nama panggung Kyai Sengkelat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Acara ini diadakan oleh Sekolah Minum Kopi tiap hari Rabu malam. Tempatnya bergilir. Malam kemarin (14/4), Kedai Remboeg Pawon Kelud menjadi kedai yang tergilir dengan tema Sensory Training: Identification and Ranking Test. Semacam festival yang menguji kepekaan indera pengecap dari peserta.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tiga puluh dua gelas berisi air bening berpipet nampak diletakkan di dua meja terpisah disekeliling meja para peserta. Air bening yang sebelumnya telah diberi larutan berasa manis, asin dan asam dalam kadar yang berbeda. Ada empat grade tiap rasa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Peserta yang berjumlah sekitar lima belas orang bergantian mencicipi air itu. Penulis tak tergerak mencobanya, karena telah mencicip oleh-oleh air bening dari Karangasem Bali dan yang tentu akan mengaburkan indera perasanya hehe ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seperti yang dituturkan Ipong, pemilik Toko Kopi Koopen di pojok perempatan Klojen, melatih kepekaan lidah seperti ini sebenarnya pelajaran dasar bagi seseorang yang berminat terjun di dunia kuliner. Untuk menguji kualitas bahan atau hasil dari sebuah produk olahan. Dan kepekaan seperti ini tidak hanya bermanfaat bagi penggiat kopi meski acara ini diinisiasi oleh &quot;masyarakat kopi&quot;. Output dari edukasi seperti ini disebut grader. Grader yang berpengalaman dan bersertifikasi mampu mempengaruhi pandangan umum tentang suatu produk.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Acara ini dimaksudkan untuk mencapai &#39;goal&#39; dari agenda forum. Goal yang telah disepakati. Jadi, untuk saat ini, lebih baik kita fokus pada pembelajaran untuk penguatan internal. Belum waktunya melibatkan orang umum yang mungkin akan mengaburkan tujuan agenda,&quot; jawaban tegas namun menarik dari Ika, mahasiswi UB jurusan Teknik Elektro tingkat akhir asal Prigen Pandaan yang juga atlit basket. Selain kuliah, saat ini, Ika juga nyambi bekerja di salah satu usaha kuliner di kota Malang. Jawaban yang seolah menunjukkan bahwa dia telah menemukan apinya, dara manis yang serius dan fokus akan passionnya di bidang Food and Beverage. Jelas, acara ini begitu penting di matanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Karena kesukaannya, Ika juga beberapa kali melakukan eksperimen di dunia kuliner. Dalam obrolan menjelang dini hari itu dan sedikit mengabaikan teman prianya, dia katakan telah membuat beberapa &quot;karya&quot; ekperimennya. Salah satu yang teringat, dia pernah membikin salad tanpa rasa &quot;neg&quot; karena mayonaise. Dan saat ditanya tentang harapannya setelah lulus kuliah dia mau bikin apa dan membuka usaha apa, dia menjawab dengan senyum manisnya, &quot;Tunggu tanggal mainnya hehehe...&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Satu dua tahun kedepan, di Remboeg Pawon Kelud, kita akan bersepakat bertemu. itu tanggal mainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15 April 2021</p>\r\n', 'Ya', 'FB_IMG_1653145339252.jpg', 6, 23, 1, '2022-05-21'),
(15, 'DI MALANG, DUO ETNICHOLIC MEMBACA NUSANTARA', 'di-malang-duo-etnicholic-membaca-nusantara', '<p>&quot;Seorang seniman itu dikenali dari karyanya, bukan aktivismenya, juga bukan karena sering nge-jamm kesana kemari dengan komposisi yang asal bunyi,&quot; komentar seorang kawan jurnalis di ibukota dalam pembicaraan via WhatsApp yang mempersoalkan tentang reputasi kesenimanan seorang Redy beberapa tahun yang lalu. Komentar bernada kritik ini sempat penulis sampaikan padanya saat itu juga. &quot;Dia punya energi luar biasa dalam pergerakannya, namun sebagai seorang yang mengklaim dirinya sebagai musisi, dia masih belum dianggap. Selama ini tak ada karya komposisi serius darinya,&quot; sambungnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Redy Eko Prasetyo, mahasiswa S2 di Pascasarjana Komunikasi FISIP UB tahap akhir yang saat ini menjadi salah satu pengurus di Dewan Kesenian Jawa Timur ini memang lebih dikenal sebagai penggiat budaya yang aktif. Kiprahnya cukup memberi warna dalam perkembangan seni budaya terutama di kota Malang. Penggagas Festival Kampung Cempluk dan inisiator Festival Dawai Nusantara, sebuah festival yang sejak tahun ketiga menjadi agenda tahunan Dinas Pariwisata Pemkot Malang. Dia juga salah satu yang menginisiasi Jaringan Kampung Nusantara, sebuah jaringan budaya berbasis kampung yang dideklarasikan di Banyuwangi sekitar lima atau enam tahun yang lalu dan telah meluas di puluhan kota, di dalam dan luar pulau Jawa. Salah satunya Kabupaten Penajam Paser Utara di Kalimantan yang merupakan calon ibukota negara yang baru. Sebelum semuanya itu, dia lebih dulu aktif dalam wadah yang saat ini dikenal sebagai Museum Musik Indonesia. Dan masih banyak lagi jejak yang telah dia kerjakan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sepertinya, segala inspirasi dari geliatnya ini dipengaruhi oleh &quot;mentornya&quot; yang mempunyai relasi dan referensi amat luas, Tanto Mendut, Presiden Lima Gunung yang juga pengajar di Pascasarjana ISI Jogja. Seorang budayawan nasional yang juga terkenal sebagai pelopor dan penyelenggara Festival Lima Gunung di Magelang, sebuah festival seni budaya tahunan yang diselenggarakan secara mandiri bersama masyarakat di lima gunung yang ada di sekitar Magelang dan telah berjalan hampir dua dasawarsa hingga sekarang. Tempat tinggal yang sekaligus menjadi galeri atau museumnya di sekitar Candi Mendut menjadi salah satu simpul jujugan bagi para tokoh lintas seni budaya nasional.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;----------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Endapan gagasan dan karya yang di era pembatasan kuat terbendung akan mencari celahnya untuk keluar sporadis saat pandemi berakhir, sesuai prediksi dari para analis sosial. Dan Redy memanfaatkan momentum itu seiring pandemi yang melandai. Dia dan kelompoknya seolah mendahului start.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di awal-awal pandemi, Redy membentuk Duo Etnicholic bersama Anggar Syaf&#39;iah Gusti, vokalis perempuan yang dalam kesehariannya berprofesi sebagai guru kesenian di SMA BSS Universitas Brawijaya Malang. Pembatasan pergerakan sosial tak menghalangi energi kreatifnya bahkan menginspirasinya untuk menghasilkan suatu karya. Mungkin juga, Redy termotivasi untuk saatnya membayar lunas dendam dari kritik kawan jurnalis. Menciptakan komposisi lagu di &quot;masa lerem&quot; adalah hal yang sangat mungkin bisa dilakukan bagi seorang musisi. Energi baik akan membawa hasil yang baik pula. Di akhir tahun 2020, dengan membawakan lagu Hijau Lestari dan instrumen Dawai Cempluk, Duo Etnicholic berhasil memperoleh penghargaan Sopravista International Festival di Italia sebagai 1 Defree Lateate Nominasi Mixed Vocal dan Instrumen. Penghargaan yang berawal setelah dia mengunggah video klip lagu itu dalam program Youtube iRL Gigs, sebuah kanal yang berisi karya musik &#39;non-mainstream&#39; dari Malang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam perkembangannya, kelompok musik ini bertambah personelnya, menjadi full band, meski tetap menggunakan kata Duo dalam nama grup.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sabtu malam (26/03), di sebuah kafe di jalan Ki Ageng Gribig Malang, Redy seolah menjawab tantangan dari komentar itu dengan menggelar pementasan karyanya. Dan tentu saja, penulis juga merasa Redy tantang untuk menyaksikan jawabannya. Sebelumnya, Redy sering kali mengirim pesan WhatsApp untuk merespon geliat terbarunya pada penulis, dan baru di hari ini, penulis berkesempatan menyaksikan pertunjukannya secara langsung. Bersama kelompok musiknya yang dinamai Duo Etnicholic, Redy melakukan tour perdana sebelum merilis album musiknya beberapa hari ke depan di Museum Musik Indonesia (30/03). Nandur Kamulyan menjadi judul albumnya. Judul yang bisa diterjemahkan secara bebas sebagai Menanam Kebaikan. Dari judulnya albumnya, kita segera tahu, lirik dalam lagu-lagu ini mengajak untuk mengingat kembali nilai-nilai kebajikan pada kita sebagai makhluk sosial yang berbudaya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Empat dari sepuluh lagu yang mereka pilih secara acak mereka pentaskan di malam itu. Yang menarik, beberapa diantaranya berlirik bahasa daerah. Lagu berjudul Mantra Kopi Gayo yang dibawakan duet vokal Anggar dan Amri membuat penonton yang hampir seluruhnya mahasiswa ini beberapa kali memberikan applaus. Terutama saat Anggar memainkan nada-nada tinggi dan koreografi sederhana darinya dengan gerakan-gerakan pendek namun tegas dari tangannya yang seolah sedang memetik biji kopi. Dalam lagu ini, Amri, additional vocal yang merupakan mahasiswa semester enam di UIN asal Aceh memasukkan kidung-kidung dari daerahnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pergaulan Redy dengan Trie Utami dan Almarhum Leo Cristy nampaknya mempengaruhi komposisi-komposisinya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam releasenya, Duo Etnicholic ingin terlibat aktif untuk menyuarakan nilai-nilai kebaikan dengan menyisipkan petuah-petuah atau mantra-mantra dari daerah dalam lirik lagu yang diciptakan dengan mengadopsi komposisi instrument musik dari berbagai daerah di Indonesia serta berkolaborasi dengan seniman-seniman dari beberapa daerah. Meski demikian, komposisi yang mereka bawakan terasa jauh dari sekedar mengejar pretensi kontemporer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salam baik dan sehat selalu,</p>\r\n\r\n<p>Yono Ndoyit,</p>\r\n\r\n<p>Kapi Kopi , 28 Maret 2022</p>\r\n', 'Ya', 'FB_IMG_1653147676045.jpg', 7, 23, 1, '2022-05-21'),
(16, 'Kooopen Testing By admin nama', 'kooopen-testing-by-admin-nama', '<p>Testing</p>\r\n', 'Ya', 'pos8.jpg', 4, 23, 1, '2022-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `gambar_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slide`, `gambar_name`) VALUES
(11, 'koopen_cewek.jpg'),
(12, 'WhatsApp_Image_2022-05-21_at_20_35_49.jpeg'),
(14, 'mak_koopen.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','master') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'master', '$2a$12$erIFWPSHn8Nb10AwdHkHfO5Pv4F7ZdeMZ6eodBNGzGkmdJTGx86Y.', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(20, 'Dummy Akun', 'tes', 'demo@getcraftable.com', '123109293', 'admin', '$2y$10$ctMaQzDJI31ii6zTNftZR.C1lcmft95pGNZMYEdNiqbYevHegdm.m', 1635823901, 'user.png', 1),
(23, 'Yono Ndoyit', 'yonondoyit', 'yonondoyit@kopikoopen.com', '087759812020', 'admin', '$2y$10$8nZd5rdnJY2TbTgwiu7DR.hbuJisNAZdL5VNTDkd/uRt.cSlebSgC', 1653140007, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kproduk` (`id_kproduk`);

--
-- Indeks untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  ADD PRIMARY KEY (`id_kartikel`);

--
-- Indeks untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  ADD PRIMARY KEY (`id_kproduk`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_kartikel` (`id_kartikel`),
  ADD KEY `user` (`user`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  MODIFY `id_kartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  MODIFY `id_kproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kproduk`) REFERENCES `kproduk` (`id_kproduk`);

--
-- Ketidakleluasaan untuk tabel `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`);

--
-- Ketidakleluasaan untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_kartikel`) REFERENCES `kartikel` (`id_kartikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
