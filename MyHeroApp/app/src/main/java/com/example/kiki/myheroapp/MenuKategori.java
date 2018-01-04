package com.example.kiki.myheroapp;

/**
 * Created by KIKI on 1/4/2018.
 */
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
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

public class MenuKategori extends AppCompatActivity{

    private static final int CODE_GET_REQUEST = 1024;
    private static final int CODE_POST_REQUEST = 1025;

    ProgressBar progressBar;
    ListView listView;

    List<Kategori> kategoriList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.halaman_kategori);


        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        listView = (ListView) findViewById(R.id.listViewKategori);


        kategoriList = new ArrayList<>();

        readKategori();


    }


    private void readKategori() {
        MenuKategori.PerformNetworkRequest request = new PerformNetworkRequest(Api.URL_READ_KATEGORI, null, CODE_GET_REQUEST);
        request.execute();
    }


    private void refreshKategoriList(JSONArray questions) throws JSONException {
        kategoriList.clear();

        for (int i = 0; i < questions.length(); i++) {
            JSONObject obj = questions.getJSONObject(i);

            kategoriList.add(new Kategori(
                    obj.getInt("id_kategori"),
                    obj.getString("nama")
            ));
        }

        KategoriAdapter adapter = new KategoriAdapter(kategoriList);
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
                    refreshKategoriList(object.getJSONArray("questions"));
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

    class KategoriAdapter extends ArrayAdapter<Kategori> {
        List<Kategori> kategoriList;

        public KategoriAdapter(List<Kategori> kategoriList) {
            super(MenuKategori.this, R.layout.layout_kategori_list, kategoriList);
            this.kategoriList = kategoriList;
        }


        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            LayoutInflater inflater = getLayoutInflater();
            View listViewItem = inflater.inflate(R.layout.layout_kategori_list, null, true);

            TextView textViewKategori = listViewItem.findViewById(R.id.textViewKategori);

            final Kategori kategori = kategoriList.get(position);

            textViewKategori.setText(kategori.getNama());

            return listViewItem;
        }
    }

    public class ListClickHandler implements AdapterView.OnItemClickListener{

        @Override
        public void onItemClick(AdapterView<?> adapter, View view, int position, long arg3) {
            // TODO Auto-generated method stub
            TextView listText = (TextView) view.findViewById(R.id.textViewKategori);
            String text = listText.getText().toString();
            Intent intent = new Intent(getApplicationContext(), MenuModul.class);
            intent.putExtra("selected-item", text);
            startActivity(intent);


        }

    }


}
