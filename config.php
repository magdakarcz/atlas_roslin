<?php
$conf->debug = true;
$conf->server_name = 'localhost';
$conf->app_root = '/atlas_roslin/public';
$conf->protocol = 'http';
$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'roslinydb';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';
$conf->db_port = '3306';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
$conf->img = $conf->app_root.'/img/';// /atlas_roslin/public/img
$conf->vendor = $conf->app_root.'/vendor/';// /atlas_roslin/public/vendor
