package com.model;
import java.util.List;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Configuration {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	Long id;
	Long nombre;
	Long nbTries;
	Long timeGam;
	
	@OneToMany
	List<Party> parties;
}
