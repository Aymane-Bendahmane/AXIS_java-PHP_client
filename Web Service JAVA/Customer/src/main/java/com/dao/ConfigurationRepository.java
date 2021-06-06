package com.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import com.model.Configuration;


public interface ConfigurationRepository extends JpaRepository<Configuration, Long>{

}
