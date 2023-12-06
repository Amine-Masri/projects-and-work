package com.example.tp5;

import java.util.ArrayList;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteDatabase.CursorFactory;
import android.database.sqlite.SQLiteOpenHelper;
public class EtudiantDataBaseHandler extends SQLiteOpenHelper {

    private static final int DATABASE_VERSION = 1;
    // Database Name
    private static final String DATABASE_NAME = "Etudiants";
    private static final String TABLE_ETUDIANTS = "table_etudiants";
    private static final String COLONNE_ID = "id";
    private static final String COLONNE_PRENOM = "prenom";
    private static final String COLONNE_NOM = "nom";
    private static final String COLONNE_LOGIN = "login";
    private static final String COLONNE_PASSWORD = "password";
    private static final String REQUETE_CREATION_BD = "create table "+ TABLE_ETUDIANTS + " (" + COLONNE_ID + " integer primary key autoincrement, " + COLONNE_PRENOM
            + " TEXT not null, " + COLONNE_NOM + " TEXT not null," + COLONNE_LOGIN + " TEXT not null, " + COLONNE_PASSWORD + " TEXT not null) ";
    private static final int COLONNE_ID_ID = 0;
    private static final int COLONNE_PRENOM_ID = 1;
    private static final int COLONNE_NOM_ID = 2;
    private static final int COLONNE_LOGIN_ID = 3;
    private static final int COLONNE_PASSWORD_ID = 4;
    public EtudiantDataBaseHandler(Context context, String nom ,CursorFactory cursorfactory, int version) {
        super(context, nom , cursorfactory, version ); }
    public EtudiantDataBaseHandler(Context context) {
        super(context, DATABASE_NAME ,null, DATABASE_VERSION
        ); }
    @Override
    public void onCreate(SQLiteDatabase db)
    {
        db.execSQL(REQUETE_CREATION_BD);
    }
    @Override
    public void onUpgrade(SQLiteDatabase
                                  db, int oldVersion, int newVersion) {
        // Dans notre cas, nous supprimons la base et les donn�es pour en cr�er
        // une nouvelle ensuite. Vous pouvezcr�er une logique de mise � jour
        // propre � votre base permettant degarder les donn�es � la place.
        db.execSQL("DROP TABLE" +TABLE_ETUDIANTS + ";");
        // Cr�ation de la nouvelle structure.
        onCreate(db);
    }
    public void insertEtudiant(Etudiant etudiant) {
        SQLiteDatabase maBD = this.getWritableDatabase();
        ContentValues valeurs = new ContentValues();
        valeurs.put(COLONNE_PRENOM, etudiant.getPrenom());
        valeurs.put(COLONNE_NOM, etudiant.getNom());

        valeurs.put(COLONNE_LOGIN, etudiant.getLogin());
        valeurs.put(COLONNE_PASSWORD, etudiant.getPassword());
        maBD.insert(TABLE_ETUDIANTS, null, valeurs);
        maBD.close();
    }
    private ArrayList<Etudiant>
    cursorToEtudiants(Cursor c) {
        // Si la requ�te ne renvoie pas de r�sultat.
        if (c.getCount() == 0)
            return new ArrayList<Etudiant>(0);
        ArrayList<Etudiant> retEtudiants = new ArrayList<Etudiant>(c.getCount());
        c.moveToFirst();
        do {
            Etudiant etudiant = new Etudiant();
            etudiant.setId(c.getInt(COLONNE_ID_ID));
            etudiant.setPrenom(c.getString(COLONNE_PRENOM_ID));
            etudiant.setNom(c.getString(COLONNE_NOM_ID));
            etudiant.setLogin(c.getString(COLONNE_LOGIN_ID));
            etudiant.setPassword(c.getString(COLONNE_PASSWORD_ID));
            retEtudiants.add(etudiant);
        } while (c.moveToNext());
        // Ferme le curseur pour lib�rer les ressources.
        c.close();
        return retEtudiants;
    }
    public ArrayList<Etudiant> getAllEtudiants() {
        SQLiteDatabase maBD = this.getReadableDatabase();
        Cursor c = maBD.query(TABLE_ETUDIANTS,
                new String[] { COLONNE_ID, COLONNE_NOM,COLONNE_PRENOM,COLONNE_LOGIN,COLONNE_PASSWORD },
                null, null, null,null, null);
        return cursorToEtudiants(c);
    }
    //Mapper les donn�es BD dans classe Planete
    private Etudiant cursorToEtudiant(Cursor c) {
        // Si la requ�te ne renvoie pas de r�sultat.
        if (c==null || c.getCount() == 0)return null;
        c.moveToFirst();
        Etudiant etudiant = new Etudiant();
        // Extraction des valeurs depuis le curseur.
        etudiant.setId(c.getInt(COLONNE_ID_ID));
        etudiant.setPrenom(c.getString(COLONNE_PRENOM_ID));
        etudiant.setNom(c.getString(COLONNE_NOM_ID));
        etudiant.setLogin(c.getString(COLONNE_LOGIN_ID));
        etudiant.setPassword(c.getString(COLONNE_PASSWORD_ID));
        // Ferme le curseur pour lib�rer les ressources.
        c.close();
        return etudiant;
    }



}


