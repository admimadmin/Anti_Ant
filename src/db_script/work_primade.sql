-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 05, 2022 at 07:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `work_primade`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `domains`
-- 

CREATE TABLE `domains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `domains`
-- 

INSERT INTO `domains` (`id`, `web`, `user`, `pwd`) VALUES 
(1, 'https://www.jobleads.co/', 'johans1023@hotmail.com', 'ya tu sabe');

-- --------------------------------------------------------

-- 
-- Table structure for table `tabla`
-- 

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tabla`
-- 

INSERT INTO `tabla` (`id`, `nombre`, `clave`) VALUES 
(1, 'johans1023@hotmail.com', 'password');
