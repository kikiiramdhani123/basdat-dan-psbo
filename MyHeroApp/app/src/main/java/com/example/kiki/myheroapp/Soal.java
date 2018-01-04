package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/4/2018.
 */

public class Soal {
    private String id_pertanyaan;
    private String pertanyaan;


    public Soal(String id_pertanyaan, String pertanyaan) {
        this.id_pertanyaan = id_pertanyaan;
        this.pertanyaan = pertanyaan;

    }

    public String getId_pertanyaan() {
        return id_pertanyaan;
    }

    public String getPertanyaan() {
        return pertanyaan;
    }

}
