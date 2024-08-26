package com.deleteAccessory.deleteAccessory.service;

import com.deleteAccessory.deleteAccessory.models.AccessoryModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface AccessoryRepository extends JpaRepository<AccessoryModel, Long> {
}
