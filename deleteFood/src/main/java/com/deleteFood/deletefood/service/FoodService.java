package com.deleteFood.deletefood.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class FoodService {

    @Autowired
    private FoodRepository foodRepository;

    public void deleteFood(Long id) {
        foodRepository.deleteById(id);
    }
}
