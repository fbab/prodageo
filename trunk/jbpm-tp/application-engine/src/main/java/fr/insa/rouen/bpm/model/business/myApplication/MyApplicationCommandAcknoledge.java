package fr.insa.rouen.bpm.model.business.myApplication;

import java.io.Serializable;

public interface MyApplicationCommandAcknoledge extends Serializable {

	public Long getProcessId();
	
	public void setProcessId(Long processId);	
	
	public Long getUserId();
	
	public void setUserId(Long userId);
	
	public boolean isOk();
	
	public void setOk(boolean ok);
	
	public String getErrorCause();
	
	public void setErrorCause(String errorCause);
	
}
