package fr.insa.rouen.bpm.model.business.myApplication.impl;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;

public class MyApplicationCommandAcknoledgeImpl implements
		MyApplicationCommandAcknoledge {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	private Long processId;
	
	private Long userId;
	
	private boolean ok;
	
	private String errorCause;
	
	public Long getProcessId() {
		return processId;
	}
	
	public void setProcessId(Long processId) {
		this.processId = processId;
	}
	
	public Long getUserId() {
		return userId;
	}
	
	public void setUserId(Long userId) {
		this.userId = userId;
	}
	
	public boolean isOk() {
		return ok;
	}
	
	public void setOk(boolean ok) {
		this.ok = ok;
	}
	
	public String getErrorCause() {
		return errorCause;
	}
	
	public void setErrorCause(String errorCause) {
		this.errorCause = errorCause;
	}
	
	@Override
	public String toString() {
		StringBuilder stringBuilder = new StringBuilder("Cmd Ack : \n");
		stringBuilder.append("User : ")
		.append(userId)
		.append("\nisProcess Ok : ")
		.append(ok);
		
		if(isOk()){
			stringBuilder.append("\nProcess Instance Id : ")
			.append(processId);
		}else{
			stringBuilder.append("\nError Cause : ")
			.append(errorCause);
		}
		
		return stringBuilder.toString();
	}
}
