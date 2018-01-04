package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/3/2018.
 */

import java.io.Serializable;

import static android.R.attr.id;
import static android.R.attr.rating;

public class Guru {
    private int id_guru;
    private String nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, lulusan;


    public Guru(int id_guru, String nama, String alamat, String tempat_lahir, String tanggal_lahir, String jenis_kelamin, String lulusan) {
        this.id_guru = id_guru;
        this.nama = nama;
        this.alamat = alamat;
        this.tempat_lahir = tempat_lahir;
        this.tanggal_lahir = tanggal_lahir;
        this.jenis_kelamin = jenis_kelamin;
        this.lulusan = lulusan;
    }

    public int getId_guru() {
        return id_guru;
    }

    public String getNama() {
        return nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public String getTempatLahir() {
        return tempat_lahir;
    }

    public String getTanggalLahir() {
        return tanggal_lahir;
    }

    public String getJenisKelamin() {
        return jenis_kelamin;
    }

    public String getLulusan() {
        return lulusan;
    }
}
