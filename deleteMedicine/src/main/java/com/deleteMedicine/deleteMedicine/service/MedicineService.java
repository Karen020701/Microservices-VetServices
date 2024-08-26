package com.deleteMedicine.deleteMedicine.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class MedicineService {

    @Autowired
    private MedicineRepository medicineRepository;

    public void deleteMedicine(Long id) {
        medicineRepository.deleteById(id);
    }
}