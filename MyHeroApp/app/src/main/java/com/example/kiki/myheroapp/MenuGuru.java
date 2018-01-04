package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/4/2018.
 */
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import static android.view.View.GONE;

public class MenuGuru extends AppCompatActivity{

    private static final int CODE_GET_REQUEST = 1024;
    private static final int CODE_POST_REQUEST = 1025;

    ProgressBar progressBar;
    ListView listView;

    List<Guru> guruList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.halaman_guru);


        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        listView = (ListView) findViewById(R.id.listViewGuru);

        guruList = new ArrayList<>();

        readGuru();
    }


    private void readGuru() {
        MenuGuru.PerformNetworkRequest request = new PerformNetworkRequest(Api.URL_READ_GURU, null, CODE_GET_REQUEST);
        request.execute();
    }


    private void refreshGuruList(JSONArray questions) throws JSONException {
        guruList.clear();

        for (int i = 0; i < questions.length(); i++) {
            JSONObject obj = questions.getJSONObject(i);

            guruList.add(new Guru(
                    obj.getInt("id_guru"),
                    obj.getString("nama"),
                    obj.getString("alamat"),
                    obj.getString("tempat_lahir"),
                    obj.getString("tanggal_lahir"),
                    obj.getString("jenis_kelamin"),
                    obj.getString("lulusan")
            ));
        }

        GuruAdapter adapter = new GuruAdapter(guruList);
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
                    refreshGuruList(object.getJSONArray("questions"));
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

    class GuruAdapter extends ArrayAdapter<Guru> {
        List<Guru> guruList;

        public GuruAdapter(List<Guru> guruList) {
            super(MenuGuru.this, R.layout.layout_guru_list, guruList);
            this.guruList = guruList;
        }


        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            LayoutInflater inflater = getLayoutInflater();
            View listViewItem = inflater.inflate(R.layout.layout_guru_list, null, true);

            TextView textViewNamaGuru = listViewItem.findViewById(R.id.textViewNamaGuru);
            TextView textViewAlamatGuru = listViewItem.findViewById(R.id.textViewAlamatGuru);
            TextView textViewTempatLahirGuru = listViewItem.findViewById(R.id.textViewTempatLahirGuru);
            TextView textViewTanggalLahirGuru = listViewItem.findViewById(R.id.textViewTanggalLahirGuru);
            TextView textViewJenisKelaminGuru = listViewItem.findViewById(R.id.textViewJenisKelaminGuru);
            TextView textViewLulusanGuru = listViewItem.findViewById(R.id.textViewLulusanGuru);

            final Guru guru = guruList.get(position);

            textViewNamaGuru.setText(guru.getNama());
            textViewAlamatGuru.setText(guru.getAlamat());
            textViewTempatLahirGuru.setText(guru.getTempatLahir());
            textViewTanggalLahirGuru.setText(guru.getTanggalLahir());
            textViewJenisKelaminGuru.setText(guru.getJenisKelamin());
            textViewLulusanGuru.setText(guru.getLulusan());

            return listViewItem;
        }
    }
}
