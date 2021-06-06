package com.services;

import java.time.LocalDateTime;
import java.util.List;
import java.util.Random;

import org.springframework.beans.factory.annotation.Autowired;

import com.dao.GamerRepository;
import com.dao.PartyRepository;
import com.model.Configuration;
import com.model.Gamer;
import com.model.Party;

public class service {

	GamerRepository gamerRepository;
	@Autowired
	PartyRepository partyRepository;

	static String secret;

	public service() {

		this.gamerRepository = new GamerRepository();
	}

	public int createGamer(String p) {
		System.err.println("Pseudo : " + p);
		// int g = gamerRepository.addGamer(p);
		return 1;

	}

	public int gameConfiguration(int nbtries, int nombre, int time) {
		System.err.println("nb Tries : " + nbtries + "-- nombre : " + nombre + "-- time :" + time);
		// int g = gamerRepository.addGamer(p);
		return 1;

	}

	public void createParty(LocalDateTime dateTime, Long time, boolean ach, int gamers, int configuration) {
		System.err.println("Party create ... DateTime:"+dateTime+"/ Time:"+time+"/ IsAcheived:"+ach+"/ Gamer:"+gamers+"/ Configuration :"+configuration);

	}

	public String generateSecret() {
		
		Random r = new Random();
		int r1;
		int r2;
		int r3;
		int r4;
		do {
			r1 = r.nextInt(9);
			r2 = r.nextInt(9);
			r3 = r.nextInt(9);
			r4 = r.nextInt(9);

		} while ((r1 == r2) || (r1 == r3) || (r1 == r4) || (r2 == r3) || (r2 == r4) || (r3 == r4));

		secret = r1 + "" + r2 + "" + r3 + "" + r4 + "";
		System.err.println(secret);
		return secret;
	}

	public String compareSecret(String f) {
		System.out.println("Sec : " + f + " pws :" + secret);
		int m = 0;
		int b = 0;
		System.err.println("" + m + ":" + b);
		for (int i = 0; i < 4; i++) {

			if (secret.contains("" + f.charAt(i))) {
				if (f.indexOf(i) == secret.indexOf(i))
					m++;
				else
					b++;
			}
		}

		return "m:" + m + "-" + "b:" + b;
	}
}