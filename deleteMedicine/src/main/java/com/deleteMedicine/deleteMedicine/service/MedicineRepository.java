package com.deleteMedicine.deleteMedicine.service;

import com.deleteMedicine.deleteMedicine.models.MedicineModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface MedicineRepository extends JpaRepository<MedicineModel, Long> {
}