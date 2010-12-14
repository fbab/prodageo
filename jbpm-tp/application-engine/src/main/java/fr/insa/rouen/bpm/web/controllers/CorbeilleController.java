package fr.insa.rouen.bpm.web.controllers;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Required;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import fr.insa.rouen.bpm.services.MyApplicationService;

@Controller
public class CorbeilleController {
	
	private MyApplicationService applicationService;		

	private static final Logger logger = Logger.getLogger(CorbeilleController.class);
	
	@RequestMapping(method = RequestMethod.GET)
	public ModelAndView afficheCorbeille(@RequestParam("userId") String userId){
		ModelAndView result = new ModelAndView();
		
		logger.info("Affiche corbeille pour user : "+userId);
		
		return result;
	}
	
	@RequestMapping(method = RequestMethod.GET)
	public ModelAndView afficheTache(@RequestParam("taskId") String taskId){
		ModelAndView result = new ModelAndView();
		
		logger.info("Affichage de la tâche : "+taskId);
		
		
		return result;
	}
	
	@Required
	@Autowired
	public void setApplicationService(MyApplicationService applicationService) {
		this.applicationService = applicationService;
	}
}
