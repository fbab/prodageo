package com.hello.hello;

import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Locale;

//import org.slf4j.Logger;
//import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

/**
 * Handles requests for the application home page.
 */
@Controller
public class HomeController {

	// private static final Logger logger = LoggerFactory.getLogger(HomeController.class);

	/**
	 * Simply selects the home view to render by returning its name.
	 */
	@RequestMapping(value = "/time", method = RequestMethod.GET)
	public String home(Locale locale, Model model) {
		// logger.info("Welcome home! the client locale is "+ locale.toString());

		Date date = new Date();
		String serverTime = new SimpleDateFormat("dd-MMMM-YYYY / hh:mm:ss", Locale.US).format(date);
		int serverHour = Integer.parseInt(new SimpleDateFormat("hh").format(date));
		if(serverHour > 0 && serverHour < 12)
		{
			model.addAttribute("serverGreeting","Morning");
		}
		else if(serverHour > 12 && serverHour < 17){
			model.addAttribute("serverGreeting","Afternoon");
		}
		else if(serverHour > 12 && serverHour < 20){
			model.addAttribute("serverGreeting","Evening");
		}
		else
		{
			model.addAttribute("serverGreeting","Night");
		}

		model.addAttribute("serverTime", serverTime );

		return "home";
	}

}
