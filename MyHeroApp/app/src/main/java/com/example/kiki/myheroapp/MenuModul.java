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

public class MenuModul extends AppCompatActivity{

    private static final int CODE_GET_REQUEST = 1024;
    private static final int CODE_POST_REQUEST = 1025;

    ProgressBar progressBar;
    ListView listView;

    List<Modul> modulList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.halaman_modul);


        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        listView = (ListView) findViewById(R.id.listViewModul);

        modulList = new ArrayList<>();

        readModul();
    }


    private void readModul() {
        MenuModul.PerformNetworkRequest request = new PerformNetworkRequest(Api.URL_READ_MODUL, null, CODE_GET_REQUEST);
        request.execute();
    }


    private void refreshModulList(JSONArray questions) throws JSONException {
        modulList.clear();

        for (int i = 0; i < questions.length(); i++) {
            JSONObject obj = questions.getJSONObject(i);

            modulList.add(new Modul(
                    obj.getInt("id_modul"),
                    obj.getString("nama"),
                    obj.getString("deskripsi")
            ));
        }

        ModulAdapter adapter = new ModulAdapter(modulList);
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
                    refreshModulList(object.getJSONArray("questions"));
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

    class ModulAdapter extends ArrayAdapter<Modul> {
        List<Modul> modulList;

        public ModulAdapter(List<Modul> modulList) {
            super(MenuModul.this, R.layout.layout_modul_list, modulList);
            this.modulList = modulList;
        }


        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            LayoutInflater inflater = getLayoutInflater();
            View listViewItem = inflater.inflate(R.layout.layout_modul_list, null, true);

            TextView textViewNamaModul = listViewItem.findViewById(R.id.textViewNamaModul);
            TextView textViewDeskripsiModul = listViewItem.findViewById(R.id.textViewDeskripsiModul);

            final Modul modul = modulList.get(position);

            textViewNamaModul.setText(modul.getNama());
            textViewDeskripsiModul.setText(modul.getDeskripsi());

            return listViewItem;
        }
    }
}
