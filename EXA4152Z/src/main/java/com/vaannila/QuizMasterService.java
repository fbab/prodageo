package com.vaannila;

import javax.inject.Inject;
import javax.inject.Named;

@Named
public class QuizMasterService {

	private QuizMaster theQuizMaster;

	// ce codage marche avec le refactor (1) et (2)
	@Inject @Named("aQuizMaster")
	public void setQuizMaster( QuizMaster q )
	{
		theQuizMaster = q ;
	}

	// ce codage ne marche qu'avec le refactor (1)
	// car il n'y a pas de setter => l'injection par setter pilotée
	// par le fichier de config ne marche pas !
	/*
	        @Inject @Named("springQuizMaster")
	        private QuizMaster quizMaster;
	*/
	
	public void askQuestion()
	{
		System.out.println(theQuizMaster.popQuestion());
	}
}
