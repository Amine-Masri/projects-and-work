package com.example.tp5;

public class Etudiant {
    public int id ;
    public String prenom ;
    public String nom;

    public Etudiant() {
        super();
        // TODO Auto-generated constructor stub
    }
    public Etudiant(int id, String prenom, String nom, String login,
                    String password) {
        super();
        this.id = id;
        this.prenom = prenom;
        this.nom = nom;
        this.login = login;
        this.password = password;
    }
    public String getNom() {
        return nom;
    }
    public void setNom(String nom) {
        this.nom = nom;
    }
    public String login ;
    public  String password;

    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }
    public String getPrenom() {
        return prenom;
    }
    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }
    public String getLogin() {
        return login;
    }
    public void setLogin(String login) {
        this.login = login;
    }
    public String getPassword() {
        return password;
    }
    public void setPassword(String password) {
        this.password = password;
    }


}
