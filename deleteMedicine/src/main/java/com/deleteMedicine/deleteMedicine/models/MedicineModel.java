package com.deleteMedicine.deleteMedicine.models;

import lombok.Data;
import jakarta.persistence.*;

import java.math.BigDecimal;

@Data
@Entity
@Table(name = "medicines")
public class MedicineModel {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;

    private String usage;

    @Column(nullable = false)
    private BigDecimal price;

    private Integer quantity;
}