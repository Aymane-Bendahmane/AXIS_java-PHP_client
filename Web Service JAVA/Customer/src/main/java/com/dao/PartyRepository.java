package com.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import com.model.Party;


public interface PartyRepository extends JpaRepository<Party, Long>{

}
