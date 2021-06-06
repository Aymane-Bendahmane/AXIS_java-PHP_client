package com.dao;

import org.hibernate.Session;
import org.hibernate.SessionFactory;

import com.model.Gamer;
import com.util.HibernateUtil;


public class GamerRepository {

	public int addGamer(String p) {
		System.err.println("hero");
		SessionFactory sf=HibernateUtil.getSessionFactory();
		Session ses = sf.openSession();
		ses.beginTransaction();
		
		Gamer gamer  = new Gamer();
		gamer.setId(null);
		gamer.setPsudo(p);
		
		ses.persist(gamer);
		ses.getTransaction().commit();
		ses.close();
		sf.close();
		return 1;
	}
}
