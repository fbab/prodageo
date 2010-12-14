package fr.insa.rouen.bpm.webservices.payload;

import java.io.Serializable;

public class WebserviceCommandAcknoledge implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = -6301254484712958211L;

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
}
