package com.example.kiki.myheroapp;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.view.menu.MenuPresenter;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.RatingBar;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import static android.view.View.GONE;

public class MainActivity extends AppCompatActivity {

    private static final int CODE_GET_REQUEST = 1024;
    private static final int CODE_POST_REQUEST = 1025;

    Button buttonKategori, buttonModul, buttonSoal, buttonProfil, buttonSoalDummy, buttonGuruDummy;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        buttonKategori = (Button) findViewById(R.id.btnKategori);
        buttonModul = (Button) findViewById(R.id.btnModul);
        buttonSoal = (Button) findViewById(R.id.btnSoal);
        buttonProfil = (Button) findViewById(R.id.btnProfil);
        buttonSoalDummy = (Button) findViewById(R.id.btnSoalDummy);
        buttonGuruDummy = (Button) findViewById(R.id.btnGuruDummy);

        buttonKategori.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuKategori.class);
                startActivity(i);
            }
        });

        buttonModul.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuModul.class);
                startActivity(i);
            }
        });

        buttonSoal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuSoal.class);
                startActivity(i);
            }
        });

        buttonProfil.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuGuru.class);
                startActivity(i);
            }
        });

        buttonSoalDummy.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuSoalDummy.class);
                startActivity(i);
            }
        });

        buttonGuruDummy.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuGuruDummy.class);
                startActivity(i);
            }
        });
    }
}
