package com.deleteMedicine.deleteMedicine.controllers;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import com.deleteMedicine.deleteMedicine.service.MedicineService;

@RestController
@RequestMapping("/deleteMedicine")
@CrossOrigin
public class MedicineController {

    @Autowired
    private MedicineService medicineService;

    @DeleteMapping("/{id}")
    public ResponseEntity<?> deleteMedicine(@PathVariable Long id) {
        medicineService.deleteMedicine(id);
        return ResponseEntity.ok().build();
    }
}