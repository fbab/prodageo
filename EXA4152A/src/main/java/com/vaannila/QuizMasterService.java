package com.vaannila;

public class QuizMasterService {

	QuizMaster quizMaster;
	
	public void setQuizMaster(QuizMaster quizMaster) {
		this.quizMaster = quizMaster;
	}

	public void askQuestion()
	{
		System.out.println(quizMaster.popQuestion());
	}
}
