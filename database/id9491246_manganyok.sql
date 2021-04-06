-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2020 at 05:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9491246_manganyok`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `gambar_1` varchar(128) NOT NULL,
  `gambar_2` varchar(128) NOT NULL,
  `gambar_3` varchar(128) NOT NULL,
  `youtube` varchar(128) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `asal_masakan` varchar(128) NOT NULL,
  `deskripsi` varchar(4096) NOT NULL,
  `metode` varchar(4096) NOT NULL,
  `bahan` varchar(512) NOT NULL,
  `nutrisi` varchar(512) NOT NULL,
  `pengunjung` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_user`, `title`, `gambar_1`, `gambar_2`, `gambar_3`, `youtube`, `id_tipe`, `asal_masakan`, `deskripsi`, `metode`, `bahan`, `nutrisi`, `pengunjung`, `date_created`) VALUES
(14, 13, 'Nasi Kuning Banjar', '8039248318_966f186d93_b.jpg', 'photo_(1).jpg', 'photo.jpg', 'https://www.youtube.com/watch?v=WIRvYIIRMUs', 1, 'Banjarmasin', 'Test', 'Test', 'Test', 'Test', 5, 1555766830),
(21, 12, 'Nasi Kuning Sunda', 'photo_(1)3.jpg', '9ebfa54c-78ac-47e4-902b-b7844a1da4391.jpg', '20170209075425.jpg', 'https://www.youtube.com/watch?v=WIRvYIIRMUs', 1, 'Bandung', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '<ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>', 239, 1555938760),
(22, 12, 'Nasi Kuning Betawi', 'photo2.jpg', 'photo_(2)1.jpg', 'images_sayuran_Sayur-bayam-jagung1.jpg', 'https://www.youtube.com/watch?v=WIRvYIIRMUs', 1, 'Jakarta', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '<ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>', 976, 1555938826),
(23, 12, 'Nasi Kuning Jawa', 'Rekomendasi-Empat-Nasi-Padang-Enak-Si-Makanan-Sejuta-Umat-di-Malang-cover.jpg', 'resep-rendang-padang.jpg', 'resep-pukis-kentang-menul-dan-gurih-tetap-empuk-meskipun-sudah-dingin.jpg', 'https://www.youtube.com/watch?v=WIRvYIIRMUs', 1, 'Solo', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '<ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>', 589, 1555938874),
(24, 12, 'Nasi Kuning Papua', 'Cara-Membuat-Nasi-Kuning5.jpg', 'images_sayuran_Sayur-bayam-jagung2.jpg', 'photo_(2)2.jpg', 'https://www.youtube.com/watch?v=WIRvYIIRMUs', 1, 'Marouke', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '<ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>', 132, 1555939259),
(26, 12, 'Nasi Kuning Sampit', 'Cara-Membuat-Nasi-Kuning6.jpg', 'photo3.jpg', 'photo_(1)4.jpg', 'Nasi Kuning', 4, 'Sampit', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asdasdasdas</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">d</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">as</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">das</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">d</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">as</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">das</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">d</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asd</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><br></span></p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asdasdasdasdasd</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asdasdasdasd</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asdasdasdasd</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">asdasdasdasdas</span></p><p><br></p>', '<ul><li>asdasdas: 1231</li><li>asdasd2 : 12312</li><li>asdas : 1223</li><li>sdasc : 1243</li><li>asdcz : 4634</li></ul>', '<p>Tidak Ada</p>', 9, 1556897652),
(27, 18, 'Nasi Goreng', '11.jpg', '21.jpg', '31.jpg', 'https://www.youtube.com/watch?v=BQZEiWAZyKM', 1, 'Jakarta', '<p>&nbsp; &nbsp; &nbsp; &nbsp;nasi goreng adalah makanan yang berbahan baku nasi, yang diamana nasi akan dicampur dengan bumbu yang sudah dibuat dan digoreng.</p>', '<p><b>Step 1 :</b></p><ol style=\"font-family: arial; text-size-adjust: 100%; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; border: 0px none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; padding: 0px; list-style-position: initial !important; list-style-image: initial !important;\"><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Masukkan bawang merah, bawang putih, dan cabai merah ke dalam cobek kemudian haluskan.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Goreng telur menjadi orak-arik lalu sisihkan.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Bumbu yang telah dihaluskan kemudian di tumis dengan minyak secukupnya. Tumis terus hingga harum.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Masukkan ayam cincang, telur, dan daun bawang ke dalam bumbu. Tumis lagi hingga merata.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Tambahkan kecap, garam, dan merica. Aduk hingga rata.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Baru kemudian masukkan nasi dan aduk hingga rata.</li><li style=\"font-family: &quot;Noto Sans&quot;, sans-serif; text-size-adjust: 100%; background: none 0px 0px repeat scroll transparent; border: 0px none; margin: 0px 0px 0px 30px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Nasi goreng telah jadi dan sajikan pada piring saji.</li></ol><p><br></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Nasi : 600 gr</span><br></li><li>Daging ayam</li><li>Telur 1 butir</li><li>Bawang merah 5 siung dan bawang putih 3 siung</li><li>cabai merah</li><li>Daun bawang</li><li>Kecap manis</li><li>Minyak</li><li>Merica</li></ul>', '<ul><li>Tidak Tahu</li></ul>', 21, 1556897702),
(28, 21, 'Ketoprak Cirebon', 'gado-gado.jpg', 'images.jpg', 'images_(1).jpg', 'https://www.youtube.com/watch?v=NJpItl0p87k', 1, 'Cirebon', '<p><span style=\"color: rgb(88, 88, 88); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; font-size: 15px; text-align: justify;\">Secara umum, ketoprak khas Betawi dan khas Cirebon tidak jauh beda. Cuma yang membedakannya adalah kuah bumbu kacang Cirebon lebih pekat dan berwarna kecokelatan.</span></p>', '<p><b>Step 1 :</b></p><p><span style=\"text-align: justify; color: rgb(88, 88, 88); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; font-size: 15px;\">Goreng tahu, goreng kerupuk, bihun dan tauge direbus/direndam air panas sebentar jangan terlalu lembek. Kacang digoreng lalu dihaluskan, encerkan asam jawa.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"text-align: justify; color: rgb(88, 88, 88); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; font-size: 15px;\">Haluskan cabe rawit merah, bawang putih, gula merah dan kacang tanah. jika sudah halus beri sedikit larutan asam jawa.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"text-align: justify; color: rgb(88, 88, 88); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; font-size: 15px;\">Pindahkan bumbu yang halus kepiring saji dan tambahkan air panas secukupnya sampai kekentalannya pas. Masukkan semua bahan2 yang telah siap tadi tambahkan kecap secukupnya lalu aduk. Siap dihidangkan.</span></p>', '<ul><li>2-3 buah&nbsp;tahu putih</li><li>1 bungkus&nbsp;bihun ukuran kecil</li><li>Segenggam&nbsp;touge panjang</li></ul>', '    <ul><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li></ul>\r\n    ', 15, 1556900369),
(31, 18, 'Mendoan', '41.jpg', '51.jpg', '61.jpg', 'https://www.youtube.com/watch?v=HxnHKXeOC0Y', 4, 'Purwokerto', '<p>    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Mendoan adalah makanan khas jawa/Purwokerto yang sangat populer kita dapat menemui mendoan di banyak rumah makan, mendoan biasanya disantap bersamaan dengan sambal kecap dan cabai rawit.</span></p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Potong tipis tempe-tempe, biasanya yang populer adalah potongan bujur sangkar atau persegi.&nbsp;</span><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">bersihkan daun bawang dan potong tipis, potong dan cincang bawang putih sampai tercampur</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Campur Tepung terigu ,tepung beras, daun bawang, bawang putih, garam, bumbu ketumbar, dan bumbu penyedap kemudian aduk sampai rata</span></font></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Celupkan tempe yang sudah dipotong dan masukkan ke minyak panas dengan menggunakan api sedang</span></font></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">potong cabai rawit dan campurkan dengan kecap manis, kemudian angkat dan tiriskan mendoan, kemudian mendoan dapat dinikmati</span></font></p>', '<ul><li>Tempe</li><li>Tepung Terigu</li><li>Tepung beras</li><li>garam</li><li>bumbu penyedap</li><li>bumbu ketumbar</li><li>bawang putih</li><li>daun bawang</li><li>kecap manis</li><li>cabai rawit</li><li>air</li><li>minyak</li></ul>', '    <ul><li>Kilojoule : 836.8 kj</li><li>Kalori : 200 kkal</li><li> Lemak : 12.78g</li><li>Protein : 11.18g</li><li>Karbohidrat : 12.69g</li><li>Sodium : 233 mg</li><li>Kalium : 265mg</li></ul>\r\n    ', 4, 1556903354),
(32, 22, 'Jamu Daun Sirih', 'download_(5).jpg', 'download_(6).jpg', 'images_(3).jpg', 'https://www.youtube.com/watch?v=CLnKpa_dcRs', 2, 'Jawa', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">Jamu daun sirih, jamu ini terbuat dari bahan alami daun sirih. Daun sirih sendiri merupakan tanaman khas yang berasal dari Indonesia. Daun sirih ini mempunyai bentuk daun yang teksturnya kasar dan tulang daun yang menyirip. Daun sirih selain dibuat jamu, juga dapat dikunyah lansung daunnya dengan dicampur dengan manfaat tembakau</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">.&nbsp;Daun sirih memiliki banyak manfaat, salah satunya manfaat daun sirih</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">&nbsp;bagi kesehatan dan kecantikan untuk kaum hawa. Selain direbus daun sirih juga banyak diracik menjadi jamu tradisonal yang baik untuk kesehatan. Biasanya manfaat jamu daun sirih ini dicampur dengan kunyit ataupun manfaat daun kencur</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;\">&nbsp;yang juga baik untuk kesehatan.</span><br></p>', '<p><b>Step 1 :</b></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Cuci Bersih Daun Sirih</span></font></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Rebus Sekitar 3 - 5 menit</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Saring Air menggunakan saringan untuk memisahkan daun dan air rebusan</span></font></p><p><br></p>', '<ul><li>3 lebar Daun Sirih</li><li>Gula ( Opsional )</li></ul>', '    <ul><li>Vitamin C</li><li>Saponin</li><li>Tanin</li><li>Kalsium</li><li>Fenil Koppies</li></ul>\r\n    ', 27, 1556904073),
(33, 18, 'Wedang Uwuh', '7.jpg', '8.jpg', '9.jpg', 'https://www.youtube.com/watch?v=YgVSBkjgnEo', 2, 'Yogyakarta', '<p>    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Wedang uwuh adalah minuman khas yogyakarta yang artinya adalam minuman (wedang) sampah (uwuh) dinamakan sampah karena bahan-bahan minuman ini berasal dari dedaunan yang mirip sampah.Wedang Uwuh disajikan saat panas memiliki rasa manis dan pedas dengan warna merah cerah dan aroma haurm</span></p>', '<p><b>Step 1 :</b></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Bakar jahe, lalu dimemarkan. tuang air dalam panci . Masukkan jahe, cengkeh atau batang cengkeh, daun kayu manis, daun pala, serutan kayu secang, jahe, dan gula batu</span></font></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Masak dengan api sedang hingga mendidih Rebus selama kurang lebih 15 menit, angkat dan tuang dalam gelas</span></font></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">bisa disaring terlebih dahulu sebelum dituang ke gelas</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p style=\"text-align: justify; \"><font face=\"Helvetica\"><span style=\"font-size: 14px;\">Wedang Uwuh siap dinikmati</span></font></p><p><br></p>', '<ul><li>Air</li><li>Serutan kayu secang kering</li><li>Gula batu atau Gula pasir</li><li>jahe</li><li>Daun kayu manis kering</li><li>Daun cengkeh kering</li><li>Daun pala kering</li><li>Cengkeh atau batang cengkeh</li></ul>', '    <ul><li>Menurunkan kolestrol</li><li>Mengobati masalah perut</li><li>Menghilangkan capek</li><li>Kayak akan antioksidan</li><li>menghilangkan nyeri</li><li>menyegarkan badan&nbsp;</li><li>meningkatkan kekebalan tubuh</li><li>melancarkan sirkulasi darah</li><li>menyembuhkan dan mencegah masuk angin</li><li>menghangatkan badan</li></ul>\r\n    ', 10, 1556905044),
(34, 25, 'Soto Ayam Lamongan', 'n0tuaih9ywav_5ZC2E3T3b2G0mOYk0WiYW2_soto-lamongan_squareThumbnailClean_id.png', '', '', 'https://www.youtube.com/watch?v=ICAbtyNzhV8', 3, 'Lamongan Jawa Timur Indonesia', '<p><span>Lamongan terkenal dengan soto ayamnya yang berwarna kuning \r\nberminyak dengan aneka bumbu di dalamnya. Rasa soto ini semakin mantap, \r\nkarena ditambah serbuk koya yang gurih di atasnya.</span><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"></span>\r\n    </p>', '<div class=\"VideoRecipe__SubContainer-sc-4pl27p-3 eeTolE\"><h3 class=\"VideoRecipe__Header-sc-4pl27p-1 eDfhKe\"><span>Instruksi Pembuatan :<br></span></h3></div><div class=\"VideoRecipe__SubContainer-sc-4pl27p-3 eeTolE\"><ol class=\"recipe-steps-list e-instructions VideoRecipe__List-sc-4pl27p-5 dvHwdt\"><li><p>Cuci bersih ayam, rebus dengan 2 ltr air hingga matang (sekitar 25-30 mnt). Buang buih yang keluar.</p></li><li><p>Haluskan bawang putih, bawang merah, kemiri sangrai, jahe, lengkuas, kunyit, degnan 50 ml air.</p></li><li><p>Tumis bumbu halus dengan sereh, daun salam, dan daun jeruk hingga harum.</p></li><li><p>Masukkan\r\n tumisan bumbu ke dalam rebusan ayam. Bumbui dengan garam, lada dan \r\ngula. Rebus kira-kira 20 menit atau hingga bumbu meresap dan ayam telah \r\nempuk.</p></li><li><p>Angkat ayam, panaskan minyak, goreng hingga kecoklatan. Angkat, tiriskan dan suwir-suwir ayam. Sisihkan.</p></li><li><p>Blender kerupuk udang dan bawang putih goreng sampai halus, sisihkan.</p></li><li><p>Susun\r\n bahan pelengkap dalam wadah lalu siram air kuah. Taburkan koya . Lebih \r\nsedap bila di tambah sambal, perasan air jeruk nipis dan kecap sesuai \r\nselera.</p></li></ol></div>', '<ul><li><p class=\"p-ingredient\">Bahan:</p></li><li><p class=\"p-ingredient\">1 ekor ayam</p></li><li><p class=\"p-ingredient\">2 ½ ltr air</p></li><li><p class=\"p-ingredient\">Bumbu halus:</p></li><li><p class=\"p-ingredient\">7 siung bawang putih</p></li><li><p class=\"p-ingredient\">13 siung bawang merah</p></li><li><p class=\"p-ingredient\">2 cm jahe</p></li><li><p class=\"p-ingredient\">2 cm kunyit, (bakar)</p></li><li><p class=\"p-ingredient\">3 btr kemiri, (sangrai)</p></li><li><p class=\"p-ingredient\">1 cm lengkuas,', '    <ul><td class=\"label borderTop\" colspan=\"2\"><b>Kilojoule</b> </td></ul>\r\n			<td class=\"borderTop\" align=\"right\"><b>1305,408 kj</b></td>\r\n		\r\n		<tr>\r\n			<td class=\"label borderTop\" colspan=\"2\"><b>Kalori</b> </td>\r\n			<td class=\"borderTop\" align=\"right\"><b>312 kkal</b></td>\r\n		</tr>\r\n		<tr>\r\n			<td class=\"label borderTop\" colspan=\"2\"><b>Lemak</b> </td>\r\n			<td class=\"borderTop\" align=\"right\">14,92 g</td>\r\n		</tr>\r\n		\r\n		<tr>\r\n			<td class=\"borderTop\">&nbsp;</td>\r\n			<td class=\"label borderTop\">Lemak Jenuh', 6, 1556947792),
(35, 26, 'Laksa Bogor', 'picture.png', 'Laksa_Betawi.png', 'laksa-cibinong-gading-putih-x.png', 'https://www.youtube.com/watch?v=X8FNQKrvPWo', 3, 'Bogor', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\">Tumis bahan-bahan yang diperlukan untuk membuat bumbu dan sudah dihaluskan. Masukkan juga serai dan daun salam ke dalam tumisan bumbu halus.</span></p><p><span style=\"font-weight: bolder;\">Step 2 :</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\"><br></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\">Jika sudah berbau harum, masukkan santan serta ayam. Aduk-aduk sampai merata dan didihkan ayam sampai benar-benar matang.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\"><br></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\">Saat ayam matang, ambil dan ditiriskan untuk selanjutnya disuir. Setelah ayam disuwir, oncom dimasukkan ke dalam kuah santan.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\"><br></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 14px;\">Letakkan taoge serta bihun ke dalam mangkuk dan tuangkan kuah ke dalam mangkuk tersebut. Hiasi dengan ayam yang telah disuwir, bawang goreng serta daun kemangi.</span></p>', '<ul><li style=\"box-sizing: inherit;\">Ayam buras sebanyak 500 gram, dipotong-potong.</li><li style=\"box-sizing: inherit;\">Santan yang diambil dari satu butir kelapa dan dijadikan sebanyak satu setengah cc.</li><li style=\"box-sizing: inherit;\">Daun salam sebanyak dua lembar.</li><li style=\"box-sizing: inherit;\">Oncom merah sebanyak 150 gram yang dibakar terlebih dahulu kemudian dihancurkan.</li><li style=\"box-sizing: inherit;\">Serai satu batang, dibelah dan diambil putihnya saja. Memarkan bagian putih serai t', '    <ul><li>Kilojoule : 700 kj</li><li>Kalori : 130 kkal</li><li> Lemak : 75g</li><li>Protein : 55g</li><li>Karbohidrat : 344g</li></ul>\r\n    ', 11, 1556949871),
(37, 30, 'Gudeg Jogja', 'resep-gudeg-nangka-nikmat-ala-jogja1.jpg', 'resep_gudeg_jogja1.jpg', 'gudeg_orangescaleFF1.jpg', 'https://www.youtube.com/watch?v=PTwJ5rtUVHo', 1, 'Yogyakarta', '<p>       Gudeg adalah makanan khas Yogyakarta dan Jawa tengah yang terbuat dari nangka yang dimasak dengan santan.<span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"></span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Cuci nangka hingga bersih, rebus nangka dengan daun jati kurang lebih 45 menit.<br></span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Tiriskan nangka, buang airnya.<br></span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Haluskan bumbu halus, siapkan panci berisi air dan santan yang sudah diencerkan. Masukkan bumbu kedalamnya dan aduk.<br></span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Masukkan nangka, gula 2 keping, jahe, lengkuas, dau salam. Masak sampai mendidih.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 5:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Setelah Mendidih, tambahkan garam, gula pasir, kaldu bubuk, merica bubuk secukupnya. Cek rasa, apakah rasa manis sudah oke.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 6:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Masukkan santan kental, aduk sampai rata. Masak sampai air berkurang.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 7:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Setelah menyusut matikan api, bila langsung sajikan atau terus dimasak ulang untuk mendapatkan volume kuah yang diinginkan atau mau mendapatkan gudeg yang kering<br><b></b><br><b></b><br><b></b><br></span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">2 lembar daun jati</span><br></li><li>2 lembar daun jati<br></li><li>350 gram nangka muda<br></li><li>1 santan dicampur air<br></li><li>1 santan tanpa dicampur air<br></li><li>2 cm lengkuas memarkan</li><li>2 keping gula merah</li><li>2 cm jahe memarkan</li><li>Bumbu Halus</li><li>4 siung bawang merah</li><li>3 siung bawang putih</li><li>1 sdt ketumbar bubuk</li><li>Garam sesuai selera<br><b></b><br></li></ul>', '----<br>', 8, 1556983102),
(38, 30, 'Sate Padang', 'i7Mn6ixU26jdcw24yuR2OgZ4lEQaNWQ.jpg', 'Sate-Padang-1.jpg', 'netnhifd4x6z94lgeurk.jpg', 'https://www.youtube.com/watch?v=FIid6gdw9PE', 1, 'Padang, Sumatera Barat', 'Sate Padang adalah makanan khas dari Padang, Sumatera Barat. Sate Pdang memakai bahan daging sapi, lidah, atau jerohan dengan bumbu kuah kacang kental.<br>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Potong daging, lalu bersihkan.<br></span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Tumis bumbu hingga harum, masukkan daun jeruk, serai, daun kunyit, dan lengkuas.<br></span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Masukkan daging, tambahkan air, gula, garam, dan lada.<br></span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Tunggu hingga lunak dan air menyusut. Koreksi rasa.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 5:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Angkat daging, lalu tusuk dan bakar dengan diolesi minyak goreng.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 6:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Panaskan sisa kuah lalu tambahkan larutan tepung beras dan aduk hingga mengental.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 7:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Sajikan dengan ketupat dan taburan bawang goreng.<br><b></b><br><b></b><br><b></b><br></span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">250 gr daging sapi, potong.</span><br></li><li>4 lembar daun jeruk<br></li><li>1 serai, geprek.<br></li><li>2 lembar daun kunyit<br></li><li>25 gr tepung berat larutkan dengan air.<br></li><li>Secukupnya kacang goreng tumbuk kasar.</li><li>4 siung bawang putih.</li><li>8 siung bawang merah.</li><li>5 buah cabai keriting.</li><li>1 sdt jinten.</li><li>1 kapulaga.</li><li>Jahe lengkuas, geprek.<br></li></ul>', '    ---<br>\r\n    ', 3, 1556987353),
(39, 30, 'Semur Jengkol', '091405900_1445499821-jengkol1.jpg', '22022544_994e9951-7d0d-409c-aea2-7b8c71d3a792_640_384.jpg', 'Resep-Semur-Jengkol.jpg', 'https://www.youtube.com/watch?v=DSniIdh99b0', 1, 'DKI Jakarta', '<p>Semur jengkol adalah makanan khas betawi hingga kini masih populer di masyarakat Jakarta. <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"></span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Cuci jengkol, belah, lalu rebus dengan air biasa atau air rebusan beras(agar bau hilang). Rebus sampai jengkol empuk.<br></span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Setelah jengkol empuk, angkat lalu cuci dengan air bersih, tiriskan, lalu memarkan.<br></span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Panaskan minyak, tumis bumbu halus hingga wangi, masukan daun salam, sereh, dan lengkuas. Aduk rata sampai bumbu matang.<br></span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Masukkan jengkol, tambahkan air, biarkan mendidih, lalu masukkan garam, dan kecap. Masak sampai bumbu meresap, koreksi rasa. jika sudah cukup maka makanan siap dihidangkan.<br></span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">250 gr jengkol tua.</span><br></li><li>2 lembar daun salam.<br></li><li>1 batang sereh.<br></li><li>2 cm lengkuas.<br></li><li>1 sdm kecap manis.<br></li><li>1 sdm gula merah.</li><li>250 ml air.</li><li>5 siung bawang merah.</li><li>3 siung bawang putih.</li><li>2 butir kemiri.</li><li>6 buah cabe keriting merah.</li><li>1/2 sdt ketumbar.</li><li>1 sdt merica butiran.</li><li>1/4 pala</li><li>Sejumput jinten.<br></li></ul>', '    ---<br>\r\n    ', 3, 1556992515),
(40, 30, 'Kerak Telor', 'kerak-telor.jpg', '1524391665728_lahxm_jhotew.jpg', 'Resep-Hidangan-Khas-Betawi-Kerak-Telor-Nikmat-Dan-Gurih-Sekali.jpg', 'https://www.youtube.com/watch?v=9C3805AvgyY', 4, 'DKI Jakarta', '<p>Jajanan khas betawi yang satu ini terkenal dengan rasanya yang gurih. Terbuat dari telur ayam atau bebek beras ketan putih, ebi yang disangrai sehingga menyerupai abon, lalu ditambahkan bawang goreng, dan diberi bumbu halus.<span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"></span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Rendam beras ketan putih didalam air selama satu malam, lalu tiriskan.<br></span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Panaskan minyak, tumis bumbu hingga halus.<br></span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Bubuhkan 11/2 sendok makan beras ketan putih pada wajan cekung yang sudah panas. Siram dengan 3 kali sendok makan air rendman beras, biarkan hingga agak kering.<br></span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Pada satu tempat, kocok 1 buah butir telur, 1/2 sdt bumbu halus yang sudah ditumis, 1/2 sdt ebi, 1/2 sdm bawang merah goreng, 1/8 sdt gula pasir, dan 1/8 sdt garam bubuk.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 5:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Siram campuran tersebut keatas ketan pada wajan, aduk sambil ratakan dan atur ketebalannya dengan mengira-ngira. Tutup wajan hingga matang, balik wajan cekung diatas bara api, biarkan sampai benar-benar matang.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 6:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Terakhir, taburi kelapa sangrai dan bawang goreng.<br><b></b><br><b></b><br></span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">100 gr ketan putih.</span><br></li><li>250 ml air.<br></li><li>100 gr kelapa parut, sangrai untuk ditaburkan.<br></li><li>15 gr ebi, sangrai dan haluskan.<br></li><li>Telur ayam atau bebek.<br></li><li>30 gr barang merah, goreng kering.</li><li>1 sdm minyak untuk tumis bumbu halus.</li><li>4 buah cabai keriting.</li><li>1/2 sdm merica butir.</li><li>2 cm kencur.</li><li>1 cm jahe.<br></li></ul>', '    ---<br>\r\n    ', 5, 1556995033),
(41, 30, 'Nasi Ulam', 'nasi_ulam.jpg', '', '6a00d8341ef22f53ef01b7c904fdb0970b.jpg', 'https://www.youtube.com/watch?v=D3_eNZlqflU', 1, 'DKI Jakarta', '<p>&nbsp;    <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Kalau sebagian besar dari kalian hanya tahu nasi goreng, maka harus mencoba nasi ulam khas jakarta ini. Namun nasinya dikkus bersama rempah-rempah seperti daun salam, serai, dan lengkuas.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><span style=\"font-family: &quot;Helvetica&quot;;\">Tumis bumbu halus(bawang, kemiri, bubuk pala, sereh), tambahkan kapulaga, daun. Setelah matang pindahkan ke panci.</span><br><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Tambahkan dengan kecap, masako, dan lada. Setelah kentang lunak, matikan kompornya.<br></span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Dadar telur dicampurkan dengan daun bawang dan 1/2 sdt garam.<br></span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lalu tata diatas piring semua bahan pelengkapnya da berikan kuah kentang nya.</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\"><b>Step 5:</b></span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Makanan siap dihidangkan.<br><b></b><br></span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">8 siung bawang merah.</span><br></li><li>4 siung bawang putih.<br></li><li>3 butir kemiri.<br></li><li>1/2 sdt pala bubuk.<br></li><li>1 batang sereh.<br></li><li>Secukupnya daun jeruk dan daun salam.</li><li>2 buah kapulaga.</li><li>200 ml kecap manis.</li><li>1 sdm masako.</li><li>3 liter air.</li><li>1 sdt lada.</li><li>1/2 kg kentang dibelah 4 bagian.</li><li>1 bks abon.</li><li>Telor dadar dengan daun bawang.</li><li>1/4 kg kacang tanah, sangrai matang, dan blende', '    ---<br>\r\n    ', 15, 1557031897),
(42, 33, 'Nasi Kuning', 'Amazing_salads.JPG', '', '', 'https://www.youtube.com/watch?v=NJpItl0p87k', 1, 'Indonesia', '<p>        <span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>\r\n    </p>', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '    <ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>\r\n    ', 5, 1557122748),
(43, 39, '1231231', 'download.png', 'download1.png', 'download2.png', '12312', 1, 'asd', 'Mantap Jiwa', '<p><b>Step 1 :</b></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 2:</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 3 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style=\"font-weight: bolder;\">Step 4 :</span></p><p><span style=\"font-family: Helvetica; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>', '<ul><li><span style=\"font-size: 1rem;\">Beras : 1 kg</span><br></li><li>Santan  : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>', '    <ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>\r\n    ', 1, 1575380757);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `laporan` varchar(512) NOT NULL,
  `date_created` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `id_user`, `id_post`, `laporan`, `date_created`, `status`) VALUES
(2, 13, 1, 'Gelud Kuy', 1555336821, 1),
(3, 12, 1, 'Gelud Kuy', 1555336821, 1),
(4, 13, 1, 'Hantam Koy', 1555336821, 1),
(14, 18, 35, 'Bintang 2 noob', 1557043126, 1),
(15, 27, 41, 'Saya lebih suka Honoka', 1557050852, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_masakan`
--

CREATE TABLE `tipe_masakan` (
  `id` int(11) NOT NULL,
  `tipe` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_masakan`
--

INSERT INTO `tipe_masakan` (`id`, `tipe`) VALUES
(1, 'Makanan Utama'),
(2, 'Minuman'),
(3, 'Makanan Berkuah'),
(4, 'Jajanan'),
(5, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `text` varchar(128) NOT NULL,
  `sosmed` varchar(128) NOT NULL,
  `profesi` varchar(128) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `text`, `sosmed`, `profesi`, `telp`) VALUES
(8, 'Randi D\'Insider', 'randiprawira23@gmail.com', 'Mantul_-_Copy.png', '$2y$10$1tliWdt4dyaWNrOh5fv8fu3cixRUx8S7iDWSbSpScExC4cIAHL/by', 2, 1, 1555336821, 'Alfi Fitriani', 'https://www.instagram.com/randi_prawira/', 'HACKER', '+62 821 2782 0021'),
(10, 'ManganYok', 'web.manganyok@gmail.com', 'Logo_Software_Engineering_Application.png', '$2y$10$94eqUobO2wbhQCxOOoSTUeLRYtII50Fw.YB409L2j5JpAISNVI7Fq', 1, 1, 1555343712, 'ManganYok is The Best', 'www.mangan-yok.com', 'Perompak', '+62 812 2398 7456'),
(12, 'Kanazaki Ryuto', 'muhammadrandi99@gmail.com', 'Mantul_-_Copy1.png', '$2y$10$7qOP5lmRBBTSnH1CaoWwa.Vxs9wUupiotQ5642RrLDerAvX85AJiy', 2, 1, 1555508689, 'ManganYok is The Best', 'www.mangan-yok.com', 'Perompak', '+62 812 2398 7456'),
(21, 'Altria Pendragon', 'hanyacontohemail@gmail.com', 'Web_1366_–_1.png', '$2y$10$22KwaEsRfFuwxdWMTU4O.eILhvWUf9o7B/GbsUNjDtYzqwq6R8r5O', 2, 1, 1556899327, 'For my honor', 'Line : @Altoria_88', 'King of England', '0857-7510-1348'),
(25, 'Dalvizar Ramsay', 'dalvizarkafilham@student.telkomuniversity.ac.id', 'default.png', '$2y$10$/nXAk9uMwwvX0heem7RrF.QJSOxMosUkxGps5oAUp/DAxGGsSOFve', 3, 1, 1556946642, 'Absolutely beautifull!', 'Nothing', 'Chef', '0812345678910'),
(26, 'Hans Christian Andersen', 'elvinnurf@yahoo.com', 'andersen.jpg', '$2y$10$6GEmpl3msNTsn.dJp5iq4.WEk/y/8wcAAVLPFEiK2bfV12A.Khey.', 3, 1, 1556947318, 'You know I am sensitive to fashion? Since it is a shortcut for easily finishing a manuscript after all!', 'facebook : Hans Christian Andersen', 'Pengarang Cerita anak', '0864-2742-1244'),
(27, 'Koshigaya Komari', 'nazar5518@yahoo.com', 'images.jpg', '$2y$10$tgjr0qGHXcBVTzJjLsxdEu9dPITghwTyLuUWdc1Ap.oQSu.gwesl2', 3, 1, 1556974434, 'Nyanpasu !!!', 'Kode Pos: 54122', 'Murid SD', '0827361273219'),
(30, 'Chloe Price', 'alyanaalisa27@gmail.com', 'd9qp3x2-955c6dc3-b4eb-4e56-848e-3cd96b5d71a7.png', '$2y$10$9a8WPqdXTj0aG/wFXjMYIuV.GMDm6KlCqE5HdbLumMcWlewuI/t42', 3, 1, 1556977347, 'The Priceless', 'Nothing', '', ''),
(33, 'Gordon Ramsay', 'saldalvchannel1@gmail.com', 'default.png', '$2y$10$W7.KVaY8CTQaDlxXCFCKNOy1PwHEvwRZ23vTqQTcpwRpyydtynwLW', 3, 1, 1557122443, 'ManganYok is the best', 'Nothing', '', ''),
(36, 'Ujang', 'neomv.id@gmail.com', '72041424_119856292754861_2866877677803929600_n.jpg', '$2y$10$F7dDIatSsFg689U7uAhCw.D8ZE3au1cCJYvqQS4B.0Hc3cMyJJIqy', 2, 1, 1574688789, 'ManganYok is the best', 'Nothing', 'Nothing', '021123214'),
(37, 'Momoi Saku', 'naafi0281@gmail.com', 'download_(3).jpg', '$2y$10$dUwc43/oZTB4Ugfi9apIde07oiozt2uHJTSj3x344hsofSmvOjtLi', 2, 1, 1574691449, 'ManganYok is the best', '@Momoi Saku', 'Students', '14055'),
(38, 'Koshigaya Komari', 'naafi32@gmail.com', 'default.png', '$2y$10$xhSGwZD88zFYOsGgezFOw.ue/96JMthNusJ8suOgs94e1B.mdGaXu', 3, 1, 1575340948, 'ManganYok is the best', 'Nothing', 'Nothing', '0'),
(39, 'Ujang', 'hotroms.id@gmail.com', 'default.png', '$2y$10$8TyydQ2lIJhzMH.iQxPKL.NrxbmMfQfQggd/qHYiifheE0Ml.IvOW', 2, 1, 1575380426, 'ManganYok is the best', 'Nothing', 'Nothing', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(34, 1, 2),
(11, 1, 5),
(13, 1, 8),
(4, 2, 2),
(15, 2, 3),
(35, 2, 4),
(9, 2, 5),
(23, 2, 10),
(10, 3, 5),
(24, 3, 9),
(22, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'CEO'),
(2, 'Admin'),
(3, 'Post'),
(4, 'Menu'),
(5, 'Account'),
(9, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'CEO'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Laporan', 'admin', 'fas fa-fw fa-clipboard-check', 1),
(2, 5, 'My Profile', 'account', 'fas fa-fw fa-user', 1),
(4, 5, 'Edit Profile', 'account/edit', 'fas fa-fw fa-user-edit', 1),
(5, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 4, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 5, 'Change Password', 'account/changepassword', 'fas fa-fw fa-key', 1),
(11, 1, 'Role', 'CEO/role', 'fas fa-fw fa-users-cog', 1),
(12, 1, 'Promotion', 'CEO/promotion', 'fas fa-fw fa-user-tie', 1),
(13, 1, 'Admin', 'CEO/admin', 'fas fa-fw fa-id-card', 1),
(14, 2, 'User', 'admin/user', 'fas fa-fw fa-users', 1),
(15, 2, 'Post', 'admin/post', 'fas fa-fw fa-pen-square', 1),
(16, 3, 'Report', 'post', 'fas fa-fw fa-clipboard', 1),
(17, 3, 'Tipe Masakan', 'post/tipe', 'fas fa-fw fa-utensils', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_tipe`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_post`);

--
-- Indexes for table `tipe_masakan`
--
ALTER TABLE `tipe_masakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`,`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tipe_masakan`
--
ALTER TABLE `tipe_masakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
