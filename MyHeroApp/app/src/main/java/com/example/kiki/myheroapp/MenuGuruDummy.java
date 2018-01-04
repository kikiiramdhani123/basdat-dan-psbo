package com.example.kiki.myheroapp;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

/**
 * Created by KIKI on 1/4/2018.
 */

public class MenuGuruDummy extends AppCompatActivity {
    private Button btnBuatSoal;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.layout_guru_dummy);

        btnBuatSoal = (Button) findViewById(R.id.btnBuatSoal);

        btnBuatSoal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),
                        MenuBuatSoal.class);
                startActivity(i);
            }
        });
    }
}
