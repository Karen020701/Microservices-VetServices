package com.deleteAccessory.deleteAccessory.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import com.deleteAccessory.deleteAccessory.service.AccessoryService;

@RestController
@RequestMapping("/deleteAccessory")
@CrossOrigin
public class AccessoryController {

    @Autowired
    private AccessoryService accessoryService;

    @DeleteMapping("/{id}")
    public ResponseEntity<?> deleteAccessory(@PathVariable Long id) {
        accessoryService.deleteAccessory(id);
        return ResponseEntity.ok().build();
    }
}
