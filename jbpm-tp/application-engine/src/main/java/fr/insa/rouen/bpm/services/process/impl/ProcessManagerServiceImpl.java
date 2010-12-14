package fr.insa.rouen.bpm.services.process.impl;

import org.apache.log4j.Logger;
import org.jbpm.JbpmConfiguration;
import org.jbpm.JbpmContext;
import org.jbpm.context.exe.ContextInstance;
import org.jbpm.graph.exe.ProcessInstance;
import org.jbpm.taskmgmt.exe.TaskInstance;
import org.jbpm.taskmgmt.exe.TaskMgmtInstance;
import org.springframework.beans.factory.annotation.Required;
import org.springmodules.workflow.jbpm31.JbpmTemplate;

import fr.insa.rouen.bpm.model.process.ProcessPayLoad;
import fr.insa.rouen.bpm.services.process.ProcessManagerService;

/**
 * Interface de pilotage des process
 * @author olivier
 *
 */
public class ProcessManagerServiceImpl implements ProcessManagerService {

	private static final Logger logger = Logger.getLogger(ProcessPayLoad.class);
	
	private JbpmTemplate jbpmTemplate;
	
	private JbpmConfiguration jbpmConfiguration;
	
	//FIXME catcher les exceptions de type process not found d'une part en exceptions techniques
	//FIXME catcher les exceptions de type problème de cas sur les variables en exceptions techniques d'un autre type
	public Long startProcessWithTask(ProcessPayLoad processPayload, String processName, Long userId){
		
		if(logger.isDebugEnabled()){
			logger.debug(processPayload.getProcessInfo());
			logger.debug(processPayload.getProcessVariableInfo());
		}

		//création de l'instance de process
		JbpmConfiguration configuration = jbpmConfiguration.getInstance();
		JbpmContext context = configuration.createJbpmContext();
		ProcessInstance processInstance = context.getGraphSession().findLatestProcessDefinition(processName).createProcessInstance();
		
		//récupération d'une instance task manager
		TaskMgmtInstance taskManager = processInstance.getTaskMgmtInstance();

		TaskInstance taskInstance = taskManager.createStartTaskInstance();
		//assignation de l'acteur 
		taskInstance.setActorId(String.valueOf(userId));
		//assignation des variables
		taskInstance.addVariables(processPayload.getProcessVariables());
		//Fermeture de la tâche
		taskInstance.end();
		
		//sauvegarde de l'instance de process
		jbpmTemplate.saveProcessInstance(processInstance);
		
		return processInstance.getId();
	}
	
	
	@Required
	public void setJbpmTemplate(JbpmTemplate jbpmTemplate) {
		this.jbpmTemplate = jbpmTemplate;
	}
	
	@Required
	public void setJbpmConfiguration(JbpmConfiguration jbpmConfiguration) {
		this.jbpmConfiguration = jbpmConfiguration;
	}
	
}
