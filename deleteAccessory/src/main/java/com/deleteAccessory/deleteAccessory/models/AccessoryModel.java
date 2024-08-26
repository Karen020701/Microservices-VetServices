package com.deleteAccessory.deleteAccessory.models;

import lombok.Data;
import jakarta.persistence.*;

import java.math.BigDecimal;

@Data
@Entity
@Table(name = "accessories")
public class AccessoryModel {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;

    private String type;

    @Column(nullable = false)
    private BigDecimal price;

    private Integer quantity;
}
