package com.example.volly;

public class MyObject {
    private int id;
    private String title;
    private String price;
    private String category;
    private String description;
    private String imageUrl;

    public MyObject(int id, String title, String price, String category, String description, String imageUrl) {
        this.id = id;
        this.title = title;
        this.price = price;
        this.category = category;
        this.description = description;
        this.imageUrl = imageUrl;
    }

    public int getId() {
        return id;
    }

    public String getTitle() {
        return title;
    }

    public String getPrice() {
        return price;
    }

    public String getCategory() {
        return category;
    }

    public String getDescription() {
        return description;
    }

    public String getImageUrl() {
        return imageUrl;
    }
}
