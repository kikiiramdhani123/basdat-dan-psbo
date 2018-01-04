package com.example.kiki.myheroapp;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

/**
 * Created by KIKI on 1/4/2018.
 */

public class MenuBuatSoal extends AppCompatActivity {
    private Button buttonBuat;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.halaman_buat_soal);

        buttonBuat = (Button) findViewById(R.id.btnBuat);

        buttonBuat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(getBaseContext(),"Soal berhasil dibuat", Toast.LENGTH_LONG).show();
            }
        });
    }
}
