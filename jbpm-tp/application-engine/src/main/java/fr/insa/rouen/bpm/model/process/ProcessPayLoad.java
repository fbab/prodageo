package fr.insa.rouen.bpm.model.process;

import java.io.Serializable;
import java.util.Map;

public interface ProcessPayLoad<T> extends Serializable{

	public String getProcessInfo();
	
	public String getProcessVariableInfo();
	
	public Map<String, Serializable> getInitProcessVariables();
	
	public Map<T, Serializable> getProcessVariables();
	
}
