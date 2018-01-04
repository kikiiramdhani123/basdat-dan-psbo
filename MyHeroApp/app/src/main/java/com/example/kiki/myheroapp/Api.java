package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/3/2018.
 */

public class Api {
    private static final String ROOT_URL = "http://192.168.43.207/HeroApi/v1/Api.php?apicall=";

    public static final String URL_CREATE_GURU = ROOT_URL + "createguru";
    public static final String URL_READ_GURU = ROOT_URL + "getguru";
    public static final String URL_UPDATE_GURU = ROOT_URL + "updateguru";
    public static final String URL_DELETE_GURU = ROOT_URL + "deleteguru&id=";

    public static final String URL_READ_SOAL = ROOT_URL + "getsoal";
    public static final String URL_READ_PERTANYAAN = ROOT_URL + "getpertanyaan";
    public static final String URL_READ_KATEGORI = ROOT_URL + "getkategori";
    public static final String URL_READ_MODUL = ROOT_URL + "getmodul";
}
