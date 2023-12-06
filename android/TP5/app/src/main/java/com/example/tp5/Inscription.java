package com.example.tp5;




import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;

public class Inscription extends Activity {



    Button B_OK;
    Button B_AN;
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);


        setContentView(R.layout.activity_inscription);
        B_OK=(Button)findViewById(R.id.sin);
        B_AN=(Button)findViewById(R.id.annuler);
        B_OK.setOnClickListener (new OnClickListener () {
            public void onClick (View view) {
                EtudiantDataBaseHandler db = new EtudiantDataBaseHandler (Inscription.this);
                Etudiant et=new Etudiant();
                EditText p=(EditText)findViewById(R.id.prenom);
                String prenom=p.getText().toString();
                EditText n=(EditText)findViewById(R.id.nom);
                String nom=n.getText().toString();
                EditText l=(EditText)findViewById(R.id.login);
                String login =l.getText().toString();
                EditText pass=(EditText)findViewById(R.id.password);
                String password=pass.getText().toString();
                et.setPrenom(prenom);
                et.setNom(nom);
                et.setLogin(login);
                et.setPassword(password);
                db.insertEtudiant(et);



                setResult(RESULT_OK);
                finish();
            }
        });
        B_AN.setOnClickListener (new OnClickListener () {
            public void onClick (View view) {

                setResult(RESULT_CANCELED);
                finish();
            }
        });
    }//onCreate


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.inscription, menu);
        return true;
    }

}
