package com.vaannila;

import javax.inject.Inject;
import javax.inject.Named;

@Named
public class QuizMasterService {

	@Inject @Named("springQuizMaster")
	private QuizMaster quizMaster;
	// private SpringQuizMaster quizMaster;
	
	public void askQuestion()
	{
		System.out.println(quizMaster.popQuestion());
	}
}
