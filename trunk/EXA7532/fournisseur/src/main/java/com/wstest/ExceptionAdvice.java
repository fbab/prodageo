package com.wstest;

import com.mycompany.hr.schemas.HolidayRequest;
import org.aspectj.lang.annotation.AfterThrowing;
import org.aspectj.lang.annotation.Aspect;
import org.aspectj.lang.annotation.Pointcut;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Component;

@Aspect
@Component
public class ExceptionAdvice {

    Logger logger = LoggerFactory.getLogger(ExceptionAdvice.class);

    @Pointcut(value = "execution(* com.wstest.service.HumanResourceServiceImpl.*(..)) && args(holidayRequest)", argNames = "holidayRequest")
    private void bookHoliday(HolidayRequest holidayRequest) {
    }


    @AfterThrowing(value = "bookHoliday(holidayRequest)", argNames = "exception, holidayRequest", throwing = "exception")
    public void logRequest(Throwable exception, HolidayRequest holidayRequest) {
        logger.error("OOOOPS", exception);
    }
}
