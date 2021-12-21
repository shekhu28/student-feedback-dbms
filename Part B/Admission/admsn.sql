-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 10:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` int(10) NOT NULL,
  `s_phn2` int(10) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `f_phn` int(10) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `m_occ` varchar(45) NOT NULL,
  `m_phn` int(10) NOT NULL,
  `s_iop` int(10) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cst` varchar(20) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` int(10) NOT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_pst` varchar(20) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` int(10) NOT NULL,
  `s_ruc` varchar(10) NOT NULL,
  `s_natn` varchar(10) NOT NULL,
  `s_relg` varchar(10) DEFAULT NULL,
  `s_catg` varchar(3) NOT NULL,
  `s_phd` varchar(20) NOT NULL,
  `s_mainsrank` varchar(10) NOT NULL,
  `s_mainsroll` varchar(20) NOT NULL,
  `s_rndalc` varchar(45) NOT NULL,
  `s_branch` varchar(60) NOT NULL,
  `s_hostel` varchar(6) NOT NULL,
  `s_sal` varchar(20) NOT NULL,
  `s_jeerc` varchar(20) NOT NULL,
  `s_pip` varchar(20) NOT NULL,
  `s_dobc` varchar(20) NOT NULL,
  `s_qem` varchar(20) NOT NULL,
  `s_ic` varchar(20) NOT NULL,
  `s_cc` varchar(20) NOT NULL,
  `s_cv` varchar(20) NOT NULL,
  `s_nclc` varchar(20) NOT NULL,
  `s_pwdc` varchar(20) NOT NULL,
  `s_tc` varchar(20) NOT NULL,
  `s_mc` varchar(20) NOT NULL,
  `s_ac` varchar(20) NOT NULL,
  `s_gapc` varchar(20) NOT NULL,
  `s_pcm` varchar(10) NOT NULL,
  `s_jdd` varchar(20) NOT NULL,
  `s_jdt` date DEFAULT NULL,
  `s_jamnt` varchar(20) NOT NULL,
  `s_idd` varchar(20) NOT NULL,
  `s_idt` date DEFAULT NULL,
  `s_iamnt` varchar(20) NOT NULL,
  `s_tamnt` varchar(20) NOT NULL,
  `s_tenbrd` varchar(7) NOT NULL,
  `s_tenyop` varchar(4) NOT NULL,
  `s_tentotmark` varchar(4) NOT NULL,
  `s_tenmarkob` varchar(4) NOT NULL,
  `s_tendiv` varchar(4) NOT NULL,
  `s_tenprcmark` varchar(4) NOT NULL,
  `s_twlbrd` varchar(7) NOT NULL,
  `s_twlyop` varchar(4) NOT NULL,
  `s_twltotmark` varchar(4) NOT NULL,
  `s_twlmarkob` varchar(4) NOT NULL,
  `s_twldiv` varchar(4) NOT NULL,
  `s_twlprcmark` varchar(4) NOT NULL,
  PRIMARY KEY (`s_detid`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `t_user` (`s_detid`, `s_id`, `s_phn1`, `s_phn2`, `f_name`, `f_occ`, `f_phn`, `m_name`, `m_occ`, `m_phn`, `s_iop`, `s_sex`, `s_cadr`, `s_cst`, `s_cpin`, `s_cmob`, `s_padr`, `s_pst`, `s_ppin`, `s_pmob`, `s_ruc`, `s_natn`, `s_relg`, `s_catg`, `s_phd`, `s_mainsrank`, `s_mainsroll`, `s_rndalc`, `s_branch`, `s_hostel`,`s_sal`,`s_jeerc`,`s_pip`,`s_dobc`,`s_qem`,`s_ic`,`s_cc`,`s_cv`,`s_nclc`,`s_pwdc`,`s_tc`,`s_mc`,`s_ac`,`s_gapc`, `s_pcm`,`s_jdd`,`s_jdt`,`s_jamnt`,`s_idd`,`s_idt`,`s_iamnt`,`s_tamnt`, `s_tenbrd`, `s_tenyop`, `s_tentotmark`, `s_tenmarkob`, `s_tendiv`, `s_tenprcmark`, `s_twlbrd`, `s_twlyop`, `s_twltotmark`, `s_twlmarkob`, `s_twldiv`, `s_twlprcmark`) VALUES
('DE00000003', 'CUTM00003', 1234567890, 1234567890, 'Ashok Karwa', 'Employee', 1234567890, 'xyz', 'Housemaker', 1234567890, 400000, 'Female', 'Jaipur', 'Rajasthan', 302012, 1234567890, 'Jaipur', 'Rajasthan', 302012, 1234567890, 'City', 'Indian', 'Hindu', 'GEN', 'NO', '723', '71', '7', 'COMPUTER SCIENCE AND ENG', 'YES', 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , '80' , 'abc123abc' , '2015-09-08' , '100100' , 'abc123abd' , '2015-09-10' , '100100' , '200200' , 'ICSE', '2011', '100', '80', '1', '80', 'CBSE', '2014', '100', '66', '1', '79'),
('DE00000004', 'CUTM00004', 1234567890, 1234567890, 'Shikhar Gupta', 'Employee', 1234567890, 'axyz', 'Housemaker', 1234567890, 400000, 'Female', 'Jaipur', 'Rajasthan', 302012, 1234567890, 'Jaipur', 'Rajasthan', 302012, 1234567890, 'City', 'Indian', 'Hindu', 'GEN', 'NO', '723', '71', '7', 'COMPUTER SCIENCE AND ENG', 'YES', 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'YES' , 'NO' , '80' , 'abc123absc' , '2015-09-08' , '100100' , 'abc123aabd' , '2015-09-10' , '100100' , '200200' , 'CBSE', '2011', '100', '80', '1', '80', 'CBSE', '2014', '100', '66', '1', '79');

CREATE TABLE IF NOT EXISTS `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL,
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `t_userdoc` (`s_id`, `s_pic`, `s_sigpic`) VALUES
('CUTM00003', 'B612-2015-04-06-14-19-16.jpg', 'Signature.png'),
('CUTM00004', 'IMG_20150301_235958.JPG', 'Signature.png');



CREATE TABLE IF NOT EXISTS `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(10) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `t_user_data` (`s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob`, `s_signupdate`) VALUES
('CUTM00003', 'QBAfi0Wy', '2015-09-08', 'Varun Karwa', 'varun22@gmail.com', '1234567890', '2015-09-30 14:43:31.000000'),
('CUTM00004', 'X3PXhxEV', '2015-10-15', 'Aadi', 'a@gmail.com', '6884280078', '2015-10-08 19:15:11.000000');

ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

ALTER TABLE `t_userdoc`
  ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);
