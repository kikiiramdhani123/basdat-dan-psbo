package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/4/2018.
 */

public class Kategori {
    private int id_kategori;
    private String nama;


    public Kategori(int id_kategori, String nama) {
        this.id_kategori = id_kategori;
        this.nama = nama;

    }

    public int getId_kategori() {
        return id_kategori;
    }

    public String getNama() {
        return nama;
    }
}
