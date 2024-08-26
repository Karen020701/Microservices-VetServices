package com.deleteAccessory.deleteAccessory.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class AccessoryService {

    @Autowired
    private AccessoryRepository accessoryRepository;

    public void deleteAccessory(Long id) {
        accessoryRepository.deleteById(id);
    }
}
