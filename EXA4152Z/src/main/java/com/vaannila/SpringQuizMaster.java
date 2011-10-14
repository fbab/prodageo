package com.vaannila;

	import javax.inject.Named;

@Named("aQuizMaster")
public class SpringQuizMaster implements QuizMaster {

	public String popQuestion() {
		return "Are you new to Spring?";
	}

}
