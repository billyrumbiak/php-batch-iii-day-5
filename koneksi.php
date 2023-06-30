<?php

    // echo "file koneksi ke database";

    // membuat variabel koneksi
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sacode';

    // membuat koneksi ke database
    $koneksi = new mysqli(
        $server,
        $username,
        $password,
        $database
    );

    // cek koneksi 
    // if() {}