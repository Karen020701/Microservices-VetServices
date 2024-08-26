package com.deleteFood.deletefood.service;

import com.deleteFood.deletefood.models.FoodModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface FoodRepository extends JpaRepository<FoodModel, Long> {
}
