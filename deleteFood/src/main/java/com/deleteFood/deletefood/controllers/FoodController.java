package com.deleteFood.deletefood.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import com.deleteFood.deletefood.service.FoodService;

@RestController
@RequestMapping("/deleteFood")
@CrossOrigin
public class FoodController {

    @Autowired
    private FoodService foodService;

    @DeleteMapping("/{id}")
    public ResponseEntity<?> deleteFood(@PathVariable Long id) {
        foodService.deleteFood(id);
        return ResponseEntity.ok().build();
    }
}
