-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 21, 2017 at 09:03 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `inventory`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `barang`
-- 

CREATE TABLE `barang` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `pokok` varchar(20) NOT NULL,
  `jual` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `barang`
-- 

INSERT INTO `barang` (`kode`, `nama`, `kategori`, `jumlah`, `pokok`, `jual`) VALUES 
('100', 'HP', 'samsung', '2', '1', '5000000'),
('101', 'laptop', 'acer', '1', '1', '4000000'),
('102', 'televisi', 'samsung', '2', '2', '4000000'),
('103', 'ac', 'samsung', '2', '1', '5000000'),
('104', 'laptop', 'lenovo', '2', '2', '8000000'),
('105', 'handphone', 'oppo', '2', '2', '10000000'),
('106', 'televisi', 'sharp', '1', '1', '3000000'),
('107', 'ac', 'polytron', '1', '1', '2000000'),
('108', 'handphone', 'lenovo', '2', '2', '5000000'),
('109', 'televisi', 'polytron', '1', '1', '2000000');
