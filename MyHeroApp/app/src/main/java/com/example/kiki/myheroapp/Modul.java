package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/4/2018.
 */

public class Modul {
    private int id_modul;
    private String nama, deskripsi;


    public Modul(int id_modul, String nama, String deskripsi) {
        this.id_modul = id_modul;
        this.nama = nama;
        this.deskripsi = deskripsi;

    }

    public int getId_modul() {
        return id_modul;
    }

    public String getNama() {
        return nama;
    }
    public String getDeskripsi() {
        return deskripsi;
    }
}
