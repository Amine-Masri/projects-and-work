package com.example.tp5;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import java.util.ArrayList;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends Activity {
    Button bouton_1;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        bouton_1=(Button)findViewById(R.id.bouton);

        bouton_1.setOnClickListener(new
                                            OnClickListener(){
                                                public void onClick (View view){
                                                    Intent intent=new
                                                            Intent(MainActivity.this,Inscription.class);
                                                    startActivityForResult(intent,1);
                                                }
                                            });

    }//
    public void onActivityResult (int requestCode, int resultCode, Intent data){
        switch (requestCode){
            case (1): switch (resultCode){
                case RESULT_OK:
                    Toast.makeText(this,"Inscription r�ussit",
                            Toast.LENGTH_SHORT).show();
                    return;
                case RESULT_CANCELED:
                    EtudiantDataBaseHandler db = new EtudiantDataBaseHandler (MainActivity.this);
                    Toast.makeText(this,"Inscription Annul�e",
                            Toast.LENGTH_SHORT).show();
                    ArrayList<Etudiant> etudiants = db.getAllEtudiants();

                    String mess= "";
                    for (Etudiant pl :etudiants) {
                        mess += "Id: "+ pl.getId() + " ,Nom: " + pl.getNom() + ",prenom: "  +pl.getPrenom()+"login "+ pl.getLogin()+"password"+pl.getPassword();
                    }//for
                    // Ecrire le resultat dans le log

                    Toast.makeText(MainActivity.this, mess, Toast.LENGTH_LONG).show();
                    return;
            }


        }
    }
}







