package com.deleteFood.deletefood.models;

import lombok.Data;
import jakarta.persistence.*;

import java.math.BigDecimal;

@Data
@Entity
@Table(name = "food")
public class FoodModel {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String descrip;

    private String type;

    @Column(nullable = false)
    private BigDecimal price;

    private Integer quantity;
}
