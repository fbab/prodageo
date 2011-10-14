package com.vaannila;

	import javax.inject.Named;

@Named("springQuizMaster")
public class SpringQuizMaster implements QuizMaster {

	public String popQuestion() {
		return "Are you new to Spring?";
	}

}
