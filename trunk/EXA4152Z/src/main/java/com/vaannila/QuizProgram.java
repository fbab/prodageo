package com.vaannila;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

public class QuizProgram {
	
	public static void main(String[] args) {
	
	ApplicationContext context = new ClassPathXmlApplicationContext("beans.xml");
		
		
		QuizMasterService quizMasterService = (QuizMasterService) context.getBean("quizMasterService");
		// SpringQuizMaster aQuizMaster = (SpringQuizMaster) context.getBean("springQuizMaster");
		// System.out.println(aQuizMaster.popQuestion());

		// QuizMaster anotherQuizMaster = (QuizMaster) context.getBean("springQuizMaster");
		// System.out.println(anotherQuizMaster.popQuestion());

		quizMasterService.askQuestion();
	}

}
