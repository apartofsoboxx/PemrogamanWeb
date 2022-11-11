package com.example.gibranactivity;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private EditText tahunInput;
    private TextView outputText;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tahunInput = findViewById(R.id.input_year);
        outputText = findViewById(R.id.text_output);
    }

    public void handleSubmit(View view) {
        int year = Integer.parseInt(tahunInput.getText().toString());
        if (year >= 1946 && year <= 1964) {
            outputText.setText(year + " Generasi Baby Bommers");
        } else if (year >= 1965 && year <= 1980) {
            outputText.setText(year + " Generasi X");
        } else if (year >= 1981 && year <= 1994) {
            outputText.setText(year + " Generasi Y/Milenial");
        } else if (year >= 1995 && year <= 2010) {
            outputText.setText(year + " Generasi Z");
        } else if (year >= 2011 && year <= 2025) {
            outputText.setText(year + " Generasi Alpha");
        } else {
            outputText.setText(year + " Diluar Jangkauan Data");
        }
    }
}