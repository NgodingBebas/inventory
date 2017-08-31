-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 10:12 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_easset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE IF NOT EXISTS `aset` (
  `KODE_ASET` int(11) NOT NULL AUTO_INCREMENT,
  `NO_SERI` varchar(40) NOT NULL,
  `KODE_JENIS` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  PRIMARY KEY (`KODE_ASET`),
  KEY `KODE_JENIS` (`KODE_JENIS`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`KODE_ASET`, `NO_SERI`, `KODE_JENIS`, `STATUS`, `JUMLAH`) VALUES
(36, '18', 2, 'Tersedia', 0),
(30, '12', 2, 'Tersedia', 0),
(13, '5', 2, 'Dipinjam', 0),
(31, '13', 10, 'Dipinjam', 0),
(35, '17', 10, 'Tersedia', 0),
(34, '16', 1, 'Tersedia', 0),
(33, '15', 3, 'Tersedia', 0),
(32, '14', 1, 'Tersedia', 0),
(37, '19', 1, 'Dipinjam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `aset_keluar`
--

CREATE TABLE IF NOT EXISTS `aset_keluar` (
  `KODE_ASET_KELUAR` int(11) NOT NULL AUTO_INCREMENT,
  `TANGGAL` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `KETERANGAN` text NOT NULL,
  PRIMARY KEY (`KODE_ASET_KELUAR`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `aset_keluar`
--

INSERT INTO `aset_keluar` (`KODE_ASET_KELUAR`, `TANGGAL`, `USER_ID`, `KETERANGAN`) VALUES
(1, '2015-04-13', 1, 'as'),
(2, '2015-04-13', 1, ''),
(3, '2015-04-13', 1, 'Puskodal'),
(4, '2015-04-13', 1, 'gyro'),
(5, '2015-04-13', 1, 'DDU'),
(6, '2015-04-14', 1, 'asd'),
(7, '2015-04-14', 1, ''),
(8, '2015-04-14', 1, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `aset_masuk`
--

CREATE TABLE IF NOT EXISTS `aset_masuk` (
  `KODE_ASET_MASUK` int(11) NOT NULL AUTO_INCREMENT,
  `TANGGAL` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`KODE_ASET_MASUK`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aset_masuk`
--

INSERT INTO `aset_masuk` (`KODE_ASET_MASUK`, `TANGGAL`, `USER_ID`) VALUES
(4, '2015-04-13', 1),
(5, '2017-08-08', 1),
(6, '2017-08-09', 1),
(7, '2017-08-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_sys_css_plugin`
--

CREATE TABLE IF NOT EXISTS `core_sys_css_plugin` (
  `CSS_PLUGIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODULE_ID` varchar(50) NOT NULL,
  `SRC` varchar(767) NOT NULL,
  PRIMARY KEY (`CSS_PLUGIN_ID`,`MODULE_ID`,`SRC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `core_sys_css_plugin`
--

INSERT INTO `core_sys_css_plugin` (`CSS_PLUGIN_ID`, `MODULE_ID`, `SRC`) VALUES
(1, 'Dashboard', 'public/pages/js/bootstrap.min.js'),
(2, 'Dashboard', 'public/pages/css/bootstrap-reset.css'),
(3, 'Dashboard', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(4, '', 'public/pages/css/bootstrap.min.css'),
(4, 'Dashboard', 'public/pages/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css'),
(5, '', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(5, 'Dashboard', 'public/pages/css/owl.carousel.css'),
(6, '', 'public/pages/css/style.css'),
(6, 'Dashboard', 'public/pages/css/style.css'),
(7, 'Dashboard', 'public/pages/css/style-responsive.css'),
(7, 'Data_Aset_Pinjam', 'public/pages/css/bootstrap.min.css'),
(8, 'Data_Aset_Pinjam', 'public/pages/css/bootstrap-reset.css'),
(9, 'Data_Aset_Pinjam', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(13, 'Data_Aset_Pinjam', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(14, 'Data_Aset_Pinjam', 'public/advanced-datatable/media/css/demo_table.css'),
(16, 'Data_Aset_Pinjam', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(18, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-fileupload/bootstrap-fileupload.css'),
(20, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css'),
(21, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-datepicker/css/datepicker.css'),
(22, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-timepicker/compiled/timepicker.css'),
(22, 'Data_Aset_Pinjam', 'public/pages/assets/jquery-multi-select/css/multi-select.css'),
(23, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-colorpicker/css/colorpicker.css'),
(23, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-daterangepicker/daterangepicker-bs3.css'),
(23, 'Data_Aset_Pinjam', 'public/pages/assets/bootstrap-datetimepicker/css/datetimepicker.css'),
(23, 'Data_Aset_Pinjam', 'public/pages/css/style.css'),
(24, 'Data_Aset_Pinjam', 'public/pages/css/style-responsive.css'),
(24, 'Pesan', 'public/pages/assets/bootstrap-daterangepicker/daterangepicker-bs3.css'),
(25, 'Add_User', 'public/pages/css/bootstrap.min.css'),
(26, 'Add_User', 'public/pages/css/bootstrap-reset.css'),
(27, 'Add_User', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(28, 'Add_User', 'public/pages/assets/bootstrap-fileupload/bootstrap-fileupload.css'),
(29, 'Add_User', 'public/pages/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css'),
(36, 'Add_User', 'public/pages/assets/bootstrap-datepicker/css/datepicker.css'),
(37, 'Add_User', 'public/pages/assets/bootstrap-timepicker/compiled/timepicker.css'),
(38, 'Add_User', 'public/pages/assets/bootstrap-colorpicker/css/colorpicker.css'),
(39, 'Add_User', 'public/pages/assets/bootstrap-daterangepicker/daterangepicker-bs3.css'),
(41, 'Add_User', 'public/pages/assets/bootstrap-datetimepicker/css/datetimepicker.css'),
(42, 'Add_User', 'public/pages/assets/jquery-multi-select/css/multi-select.css'),
(45, 'Add_User', 'public/pages/css/style.css'),
(57, 'Add_User', 'public/pages/css/style-responsive.css'),
(58, 'Data_User', 'public/pages/css/bootstrap.min.css'),
(59, 'Data_User', 'public/pages/css/bootstrap-reset.css'),
(60, 'Data_User', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(61, 'Data_User', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(62, 'Data_User', 'public/pages/assets/advanced-datatable/media/css/demo_table.css'),
(63, 'Data_User', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(64, 'Data_User', 'public/pages/css/style.css'),
(65, 'Data_User', 'public/pages/css/style-responsive.css'),
(66, 'Data_Aset', 'public/pages/css/bootstrap.min.css'),
(67, 'Data_Aset', 'public/pages/css/bootstrap-reset.css'),
(68, 'Data_Aset', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(69, 'Data_Aset', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(70, 'Data_Aset', 'public/pages/assets/advanced-datatable/media/css/demo_table.css'),
(71, 'Data_Aset', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(72, 'Data_Aset', 'public/pages/css/style.css'),
(73, 'Data_Aset', 'public/pages/css/style-responsive.css'),
(76, 'Datass', 'public/pages/assets/bootstrap-daterangepicker/daterangepicker.css'),
(76, 'Data_Aset_Kembali', 'public/pages/css/bootstrap.min.css'),
(77, 'Data_Aset_Kembali', 'public/pages/css/bootstrap-reset.css'),
(78, 'Data_Aset_Kembali', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(79, 'Data_Aset_Kembali', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(80, 'Data_Aset_Kembali', 'public/pages/assets/advanced-datatable/media/css/demo_table.css'),
(81, 'Data_Aset_Kembali', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(82, 'Data_Aset_Kembali', 'public/pages/css/style.css'),
(83, 'Data_Aset_Kembali', 'public/pages/css/style-responsive.css'),
(84, 'Data_Aset_Keluar', 'public/pages/css/bootstrap.min.css'),
(85, 'Data_Aset_Keluar', 'public/pages/css/bootstrap-reset.css'),
(86, 'Data_Aset_Keluar', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(87, 'Data_Aset_Keluar', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(88, 'Data_Aset_Keluar', 'public/pages/assets/advanced-datatable/media/css/demo_table.css'),
(89, 'Data_Aset_Keluar', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(90, 'Data_Aset_Keluar', 'public/pages/css/style.css'),
(91, 'Data_Aset_Keluar', 'public/pages/css/style-responsive.css'),
(92, 'History', 'public/pages/css/bootstrap.min.css'),
(93, 'History', 'public/pages/css/bootstrap-reset.css'),
(94, 'History', 'public/pages/assets/font-awesome/css/font-awesome.css'),
(95, 'History', 'public/pages/assets/advanced-datatable/media/css/demo_page.css'),
(96, 'History', 'public/pages/assets/advanced-datatable/media/css/demo_table.css'),
(97, 'History', 'public/pages/assets/data-tables/DT_bootstrap.css'),
(98, 'History', 'public/pages/css/style.css'),
(99, 'History', 'public/pages/css/style-responsive.css');

-- --------------------------------------------------------

--
-- Table structure for table `core_sys_js_plugin`
--

CREATE TABLE IF NOT EXISTS `core_sys_js_plugin` (
  `JS_PLUGIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODULE_ID` varchar(50) NOT NULL,
  `SRC` varchar(767) NOT NULL,
  PRIMARY KEY (`JS_PLUGIN_ID`,`MODULE_ID`,`SRC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `core_sys_js_plugin`
--

INSERT INTO `core_sys_js_plugin` (`JS_PLUGIN_ID`, `MODULE_ID`, `SRC`) VALUES
(0, '', ''),
(1, 'Dashboard', 'public/pages/js/jquery.js'),
(1, 'Data_Aset_Pinjam', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(2, 'Dashboard', 'public/pages/js/jquery-1.8.3.min.js'),
(2, 'Data_Aset_Pinjam', 'public/pages/js/bootstrap.min.js'),
(3, 'Dashboard', 'public/pages/js/bootstrap.min.js'),
(3, 'Data_Aset_Pinjam', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(4, 'Dashboard', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(4, 'Data_Aset_Pinjam', 'public/pages/js/jquery.scrollTo.min.js'),
(5, 'Dashboard', 'public/pages/js/jquery.scrollTo.min.js'),
(6, 'Dashboard', 'public/pages/js/jquery.nicescroll.js'),
(6, 'Data_Aset_Pinjam', 'public/pages/js/jquery.nicescroll.js'),
(7, 'Dashboard', 'public/pages/js/jquery.sparkline.js'),
(8, 'Dashboard', 'public/pages/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'),
(9, 'Dashboard', 'public/pages/js/owl.carousel.js'),
(10, 'Dashboard', 'public/pages/js/jquery.customSelect.min.js'),
(11, 'Dashboard', 'public/pages/js/respond.min.js'),
(12, 'Dashboard', 'public/pages/js/common-scripts.js'),
(13, 'Dashboard', 'public/pages/js/sparkline-chart.js'),
(14, 'Dashboard', 'public/pages/js/easy-pie-chart.js'),
(15, 'Dashboarda', 'public/pages/js/count.js'),
(16, 'Data_Aset_Pinjam', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(17, 'Data_Aset_Pinjam', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(20, 'Data_Aset_Pinjam', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(21, 'Data_Aset_Pinjam', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(22, 'Data_Aset_Pinjam', 'public/pages/js/respond.min.js'),
(23, 'Data_Aset_Pinjam', 'public/pages/js/common-scripts.js'),
(24, 'Data_Aset_Pinjam', 'public/pages/js/custom/aset-pinjam.js'),
(25, 'Data_Aset', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(27, 'Data_Aset', 'public/pages/js/bootstrap.min.js'),
(28, 'Data_Aset', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(29, 'Data_Aset', 'public/pages/js/jquery.scrollTo.min.js'),
(30, 'Data_Aset', 'public/pages/js/jquery.nicescroll.js'),
(31, 'Data_Aset', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(32, 'Data_Aset', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(33, 'Data_Aset', 'public/pages/js/respond.min.js'),
(34, 'Data_Aset', 'public/pages/js/common-scripts.js'),
(36, 'Data_Aset', 'public/pages/js/custom/Aset.js'),
(37, 'Data_Aset', 'public/pages/js/jquery-ui-1.9.2.custom.min.js'),
(47, '', 'public/pages/js/jquery.js'),
(48, '', 'public/pages/js/bootstrap.min.js'),
(49, '', 'public/pages/js/jquery.scrollTo.min.js'),
(50, '', 'public/pages/js/jquery.nicescroll.js'),
(51, '', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(52, '', 'public/pages/js/respond.min.js'),
(53, '', 'public/pages/js/common-scripts.js'),
(54, 'Data_User', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(56, 'Data_User', 'public/pages/js/bootstrap.min.js'),
(57, 'Data_User', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(58, 'Data_User', 'public/pages/js/jquery.scrollTo.min.js'),
(59, 'Data_User', 'public/pages/js/jquery.nicescroll.js'),
(60, 'Data_User', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(61, 'Data_User', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(62, 'Data_User', 'public/pages/js/respond.min.js'),
(63, 'Data_User', 'public/pages/js/common-scripts.js'),
(65, 'Data_User', 'public/pages/js/custom/User.js'),
(66, 'Data_User', 'public/pages/js/jquery-ui-1.9.2.custom.min.js'),
(67, 'Add_User', 'public/pages/js/jquery.js'),
(68, 'Add_User', 'public/pages/js/bootstrap.min.js'),
(69, 'Add_User', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(70, 'Add_User', 'public/pages/js/jquery.scrollTo.min.js'),
(71, 'Add_User', 'public/pages/js/jquery.nicescroll.js'),
(72, 'Add_User', 'public/pages/js/respond.min.js'),
(73, 'Add_User', 'public/pages/assets/fuelux/js/spinner.min.js'),
(74, 'Add_User', 'public/pages/assets/bootstrap-fileupload/bootstrap-fileupload.js'),
(75, 'Add_User', 'public/pages/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js'),
(76, 'Add_User', 'public/pages/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js'),
(77, 'Add_User', 'public/pages/assets/bootstrap-datepicker/js/bootstrap-datepicker.js'),
(78, 'Add_User', 'public/pages/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'),
(79, 'Add_User', 'public/pages/assets/bootstrap-daterangepicker/moment.min.js'),
(80, 'Add_User', 'public/pages/assets/bootstrap-daterangepicker/daterangepicker.js'),
(81, 'Add_User', 'public/pages/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js'),
(82, 'Add_User', 'public/assets/bootstrap-timepicker/js/bootstrap-timepicker.js'),
(83, 'Add_User', 'public/pages/assets/jquery-multi-select/js/jquery.multi-select.js'),
(85, 'Add_User', 'public/pages/assets/jquery-multi-select/js/jquery.quicksearch.js'),
(86, 'Add_User', 'public/pages/js/common-scripts.js'),
(87, 'Add_User', 'public/pages/js/advanced-form-components.js'),
(88, 'Add_User', 'public/pages/js/custom/user.js'),
(89, 'Add_User', 'public/pages/js/form-validation-script.js'),
(90, 'Data_Aset_Kembali', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(91, 'Data_Aset_Kembali', 'public/pages/js/bootstrap.min.js'),
(92, 'Data_Aset_Kembali', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(93, 'Data_Aset_Kembali', 'public/pages/js/jquery.scrollTo.min.js'),
(94, 'Data_Aset_Kembali', 'public/pages/js/jquery.nicescroll.js'),
(95, 'Data_Aset_Kembali', 'public/pages/js/respond.min.js'),
(98, 'Data_Aset_Kembali', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(99, 'Data_Aset_Kembali', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(100, 'Data_Aset_Kembali', 'public/pages/js/common-scripts.js'),
(101, 'Data_Aset_Kembali', 'public/pages/js/custom/aset-kembali.js'),
(101, 'Parameter_System', 'public/Portal/scripts/app.js'),
(102, 'Parameter_System', 'public/Portal/scripts/table-managed.js'),
(103, 'Parameter_System', 'public/Portal/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js'),
(104, 'Parameter_System', 'public/Portal/scripts/Parameter_System.js'),
(105, 'User', 'public/Portal/plugins/select2/select2.min.js'),
(106, 'User', 'public/Portal/plugins/data-tables/jquery.dataTables.js'),
(107, 'User', 'public/Portal/plugins/data-tables/DT_bootstrap.js'),
(108, 'User', 'public/Portal/scripts/app.js'),
(109, 'User', 'public/Portal/scripts/table-managed.js'),
(110, 'User', 'public/Portal/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js'),
(111, 'User', 'public/Portal/scripts/User.js'),
(112, 'Data_Aset_Keluar', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(113, 'Data_Aset_Keluar', 'public/pages/js/bootstrap.min.js'),
(114, 'Data_Aset_Keluar', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(115, 'Data_Aset_Keluar', 'public/pages/js/jquery.scrollTo.min.js'),
(116, 'Data_Aset_Keluar', 'public/pages/js/jquery.nicescroll.js'),
(117, 'Data_Aset_Keluar', 'public/pages/js/respond.min.js'),
(118, 'Data_Aset_Keluar', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(119, 'Data_Aset_Keluar', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(120, 'Data_Aset_Keluar', 'public/pages/js/common-scripts.js'),
(121, 'Data_Aset_Keluar', 'public/pages/js/custom/aset-keluar.js'),
(122, 'History', 'public/pages/assets/advanced-datatable/media/js/jquery.js'),
(123, 'History', 'public/pages/js/bootstrap.min.js'),
(124, 'History', 'public/pages/js/jquery.dcjqaccordion.2.7.js'),
(125, 'History', 'public/pages/js/jquery.scrollTo.min.js'),
(126, 'History', 'public/pages/js/jquery.nicescroll.js'),
(127, 'History', 'public/pages/js/respond.min.js'),
(128, 'History', 'public/pages/assets/advanced-datatable/media/js/jquery.dataTables.js'),
(129, 'History', 'public/pages/assets/data-tables/DT_bootstrap.js'),
(130, 'History', 'public/pages/js/common-scripts.js');

-- --------------------------------------------------------

--
-- Table structure for table `core_sys_parameter`
--

CREATE TABLE IF NOT EXISTS `core_sys_parameter` (
  `PARAM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODULE_ID` varchar(50) NOT NULL DEFAULT '0',
  `PARAMETER` varchar(767) NOT NULL,
  PRIMARY KEY (`PARAM_ID`,`MODULE_ID`,`PARAMETER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `core_sys_parameter`
--

INSERT INTO `core_sys_parameter` (`PARAM_ID`, `MODULE_ID`, `PARAMETER`) VALUES
(1, 'Dashboard', 'App.init();'),
(2, 'Dashboard', 'Index.init();'),
(3, 'Dashboard', 'Index.initJQVMAP();'),
(4, 'Dashboard', 'Index.initCalendar();'),
(5, 'Dashboard', 'Index.initCharts();'),
(6, 'Dashboard', 'Index.initChat();'),
(7, 'Dashboard', 'Index.initMiniCharts();'),
(8, 'Dashboard', 'Index.initDashboardDaterange();'),
(9, 'Dashboard', 'Index.initIntro();'),
(10, 'Dashboard', 'Tasks.initDashboardWidget();'),
(11, 'Timeline', 'App.init();'),
(14, '_500', 'App.init();\r\n'),
(15, 'Parent_Module', 'App.init();'),
(16, 'Parent_Module', 'ParentModule.init();'),
(17, 'Jenis_Produk', 'App.init();\r\n'),
(18, 'Jenis_Produk', 'JenisProduk.init();'),
(19, 'Pengumuman', 'App.init();'),
(20, 'Berita', 'App.init();'),
(21, 'About', 'App.init();'),
(22, 'Kontak', 'App.init();'),
(23, 'Kontak', 'ContactUs.init();'),
(24, 'Pesan', 'App.init();'),
(25, 'Pesan', 'Inbox.init();'),
(26, 'Order', 'App.init();'),
(27, 'Order', 'Order.init();'),
(28, 'Kategori_Produk', 'App.init();'),
(29, 'Kategori_Produk', 'TableManaged.init();'),
(31, 'Module', 'App.init();'),
(32, 'Module', 'TableManaged.init();'),
(33, 'CSS_Core', 'App.init();'),
(34, 'CSS_Core', 'TableManaged.init();'),
(35, 'JS_Core', 'App.init();'),
(36, 'JS_Core', 'TableManaged.init();'),
(37, 'Parameter_System', 'App.init();'),
(38, 'Parameter_System', 'TableManaged.init();'),
(39, 'User', 'App.init();'),
(40, 'User', 'TableManaged.init();');

-- --------------------------------------------------------

--
-- Table structure for table `detail_aset_keluar`
--

CREATE TABLE IF NOT EXISTS `detail_aset_keluar` (
  `KODE_ASET_KELUAR` int(11) NOT NULL,
  `KODE_ASET` int(11) NOT NULL,
  KEY `KODE_ASET_KELUAR` (`KODE_ASET_KELUAR`,`KODE_ASET`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_aset_keluar`
--

INSERT INTO `detail_aset_keluar` (`KODE_ASET_KELUAR`, `KODE_ASET`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 3),
(3, 6),
(3, 10),
(3, 11),
(5, 12),
(6, 1),
(6, 3),
(6, 5),
(6, 7),
(6, 8),
(6, 9),
(7, 11),
(8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `detail_aset_masuk`
--

CREATE TABLE IF NOT EXISTS `detail_aset_masuk` (
  `KODE_ASET_MASUK` int(11) NOT NULL,
  `KODE_ASET` int(11) NOT NULL,
  KEY `KODE_ASET_MASUK` (`KODE_ASET_MASUK`,`KODE_ASET`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_aset_masuk`
--

INSERT INTO `detail_aset_masuk` (`KODE_ASET_MASUK`, `KODE_ASET`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 16),
(5, 16),
(5, 27),
(5, 27),
(5, 27),
(5, 30),
(5, 30),
(5, 32),
(5, 33),
(5, 34),
(5, 35),
(5, 36),
(5, 37),
(5, 38),
(5, 39),
(5, 40),
(5, 41),
(5, 42),
(5, 43),
(5, 44),
(5, 45),
(5, 46),
(5, 47),
(5, 48),
(5, 49),
(5, 50),
(5, 51),
(5, 52),
(6, 53),
(6, 54),
(7, 30),
(7, 31),
(7, 32),
(7, 33),
(7, 34),
(7, 35),
(7, 36),
(7, 37);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kembali_aset`
--

CREATE TABLE IF NOT EXISTS `detail_kembali_aset` (
  `KODE_KEMBALI` int(11) NOT NULL,
  `KODE_ASET` int(11) NOT NULL,
  KEY `KODE_KEMBALI` (`KODE_KEMBALI`,`KODE_ASET`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kembali_aset`
--

INSERT INTO `detail_kembali_aset` (`KODE_KEMBALI`, `KODE_ASET`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 5),
(4, 1),
(4, 3),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam_aset`
--

CREATE TABLE IF NOT EXISTS `detail_pinjam_aset` (
  `KODE_PINJAM` int(11) NOT NULL,
  `KODE_ASET` int(11) NOT NULL,
  KEY `KODE_PINJAM` (`KODE_PINJAM`,`KODE_ASET`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam_aset`
--

INSERT INTO `detail_pinjam_aset` (`KODE_PINJAM`, `KODE_ASET`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 2),
(4, 4),
(5, 5),
(6, 1),
(6, 3),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(7, 12),
(8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `KODE_JENIS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JENIS` varchar(50) NOT NULL,
  `TIPE` varchar(30) NOT NULL,
  PRIMARY KEY (`KODE_JENIS`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`KODE_JENIS`, `NAMA_JENIS`, `TIPE`) VALUES
(5, 'obeng', 'Perkakas'),
(4, 'gyro', 'Elektronik'),
(3, 'Obeng', 'Perkakas'),
(2, 'Avometer', 'Elektronik'),
(1, 'Keyboard', 'Elektronik'),
(10, 'Casan', 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `kembali_aset`
--

CREATE TABLE IF NOT EXISTS `kembali_aset` (
  `KODE_KEMBALI` int(11) NOT NULL AUTO_INCREMENT,
  `TANGGAL` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `KODE_PINJAM` int(11) NOT NULL,
  PRIMARY KEY (`KODE_KEMBALI`),
  KEY `KODE_PINJAM` (`KODE_PINJAM`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kembali_aset`
--

INSERT INTO `kembali_aset` (`KODE_KEMBALI`, `TANGGAL`, `USER_ID`, `KODE_PINJAM`) VALUES
(4, '2015-04-13', 1, 6),
(3, '2015-04-13', 1, 5),
(2, '2015-04-13', 1, 3),
(1, '2015-04-13', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_aset`
--

CREATE TABLE IF NOT EXISTS `pinjam_aset` (
  `KODE_PINJAM` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `PEMINJAM` varchar(45) NOT NULL,
  `STATUS` varchar(45) NOT NULL,
  `KETERANGAN` varchar(140) NOT NULL,
  PRIMARY KEY (`KODE_PINJAM`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_aset`
--

INSERT INTO `pinjam_aset` (`KODE_PINJAM`, `TANGGAL`, `USER_ID`, `PEMINJAM`, `STATUS`, `KETERANGAN`) VALUES
(3, '2015-04-13', 1, 'Aziz', 'Dikembalikan', 'Pengen'),
(2, '2015-04-13', 1, 'Agung', 'Dikembalikan', 'E'),
(1, '2015-04-13', 1, 'Agung', 'Dikembalikan', 'Tes'),
(4, '2015-04-13', 1, 'Atep', 'Dipinjam', 'mau aja'),
(5, '2015-04-13', 1, 'Aziz', 'Dikembalikan', 'Puskodal'),
(6, '2015-04-13', 1, 'Aziz', 'Dikembalikan', 'jhg'),
(7, '2015-04-14', 1, 'Agus', 'Dipinjam', 'asd'),
(8, '2015-04-14', 1, 'asd', 'Dipinjam', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `USERNAME` varchar(70) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `AKTIF` char(1) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA`, `USERNAME`, `PASSWORD`, `AKTIF`) VALUES
(1, 'Firman Maulana', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y'),
(3, 'Agung Ahmad', 'agung', 'agung', 'T'),
(5, 'Agung Ahmad', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'Y'),
(4, 'Robert', 'ss', '3691308f2a4c2f6983f2880d32e29c84', 'Y'),
(6, 'Ryfikry', 'fikry', '827ccb0eea8a706c4c34a16891f84e7b', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
