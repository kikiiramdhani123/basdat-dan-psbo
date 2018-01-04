package com.example.kiki.myheroapp;

import android.content.DialogInterface;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
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

public class MenuSoal extends AppCompatActivity {

    private static final int CODE_GET_REQUEST = 1024;
    private static final int CODE_POST_REQUEST = 1025;

    ProgressBar progressBar;
    ListView listView;

    List<Soal> soalList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.halaman_soal);


        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        listView = (ListView) findViewById(R.id.listViewSoal);

        soalList = new ArrayList<>();

        readSoal();
    }


    private void readSoal() {
        PerformNetworkRequest request = new PerformNetworkRequest(Api.URL_READ_PERTANYAAN, null, CODE_GET_REQUEST);
        request.execute();
    }


    private void refreshSoalList(JSONArray questions) throws JSONException {
        soalList.clear();

        for (int i = 0; i < questions.length(); i++) {
            JSONObject obj = questions.getJSONObject(i);

            soalList.add(new Soal(
                    obj.getString("id_pertanyaan"),
                    obj.getString("pertanyaan")

            ));
        }

        SoalAdapter adapter = new SoalAdapter(soalList);
        listView.setAdapter(adapter);
    }

    private class PerformNetworkRequest extends AsyncTask<Void, Void, String> {
        String url;
        HashMap<String, String> params;
        int requestCode;

        PerformNetworkRequest(String url, HashMap<String, String> params, int requestCode) {
            this.url = url;
            this.params = params;
            this.requestCode = requestCode;
        }

        @Override
        protected void onPreExecute() {
            super.onPreExecute();
            progressBar.setVisibility(View.VISIBLE);
        }

        @Override
        protected void onPostExecute(String s) {
            super.onPostExecute(s);
            progressBar.setVisibility(GONE);
            try {
                JSONObject object = new JSONObject(s);
                if (!object.getBoolean("error")) {
                    Toast.makeText(getApplicationContext(), object.getString("message"), Toast.LENGTH_SHORT).show();
                    refreshSoalList(object.getJSONArray("questions"));
                }
            } catch (JSONException e) {
                e.printStackTrace();
            }
        }

        @Override
        protected String doInBackground(Void... voids) {
            RequestHandler requestHandler = new RequestHandler();

            if (requestCode == CODE_POST_REQUEST)
                return requestHandler.sendPostRequest(url, params);


            if (requestCode == CODE_GET_REQUEST)
                return requestHandler.sendGetRequest(url);

            return null;
        }
    }

    class SoalAdapter extends ArrayAdapter<Soal> {
        List<Soal> soalList;

        public SoalAdapter(List<Soal> soalList) {
            super(MenuSoal.this, R.layout.layout_soal_list, soalList);
            this.soalList = soalList;
        }


        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            LayoutInflater inflater = getLayoutInflater();
            View listViewItem = inflater.inflate(R.layout.layout_soal_list, null, true);

            TextView textViewPertanyaan = listViewItem.findViewById(R.id.textViewPertanyaan);
            TextView textViewNomer = listViewItem.findViewById(R.id.textViewNomer);

            final Soal soal = soalList.get(position);

            textViewPertanyaan.setText(soal.getPertanyaan());
            textViewNomer.setText(soal.getId_pertanyaan());



            return listViewItem;
        }
    }
}