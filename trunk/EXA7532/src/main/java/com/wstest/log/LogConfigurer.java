package com.wstest.log;

import ch.qos.logback.classic.LoggerContext;
import ch.qos.logback.classic.joran.JoranConfigurator;
import ch.qos.logback.core.joran.spi.JoranException;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.context.ApplicationEvent;
import org.springframework.context.ApplicationListener;
import org.springframework.context.event.ContextRefreshedEvent;

import java.io.File;

//@Component
public class LogConfigurer implements ApplicationListener {

    Logger logger = LoggerFactory.getLogger(LogConfigurer.class);

    public void onApplicationEvent(ApplicationEvent applicationEvent) {
        if (applicationEvent instanceof ContextRefreshedEvent) {
            configureLogging();
        }
    }

    private void configureLogging() {
        File logConfigFile = new File("/opt/uc/etc/sambaLogback.xml");

        //If external configuration file exist use it else the logback.xml on classpath will be used.
        if (logConfigFile.exists()) {
            LoggerContext lc = (LoggerContext) LoggerFactory.getILoggerFactory();

            try {
                JoranConfigurator configurator = new JoranConfigurator();
                configurator.setContext(lc);
                //Need to reset context since already default configured.
                lc.reset();
                configurator.doConfigure("/opt/uc/etc/sambaLogback.xml");
            } catch (JoranException je) {
                throw new IllegalStateException("Cannot configure logback", je);
            }

            logger.info("Found external log config file. Will be used to configure logging.");
        } else {
            logger.info("Didn't find external log config file. Will use default logback.xml to configure logging.");
        }
    }
}
