package com.vaannila;

import org.springframework.context.support.GenericApplicationContext ;
import org.springframework.beans.factory.xml.XmlBeanDefinitionReader ;
import  org.springframework.core.io.ClassPathResource ;

// import org.springframework.context.ApplicationContext;
// import org.springframework.context.support.ClassPathXmlApplicationContext;

public class QuizProgram {
	
	public static void main(String[] args) {
	
	// ApplicationContext context = new ClassPathXmlApplicationContext("beans.xml");
		
		    GenericApplicationContext context =
		new GenericApplicationContext();
    XmlBeanDefinitionReader xmlReader =
		new XmlBeanDefinitionReader(context);
    xmlReader.loadBeanDefinitions(new ClassPathResource("beans.xml"));
		
		QuizMasterService quizMasterService = (QuizMasterService) context.getBean("quizMasterService");
		quizMasterService.askQuestion();
	}

}
