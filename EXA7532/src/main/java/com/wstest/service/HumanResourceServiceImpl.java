package com.wstest.service;

import com.mycompany.hr.schemas.HolidayRequest;
import com.wstest.service.HumanResourceService;
import org.springframework.stereotype.Service;


@Service
public class HumanResourceServiceImpl implements HumanResourceService {
    public void bookHoliday(HolidayRequest holidayRequest) {
        System.out.println("done " + holidayRequest.getEmployee().getFirstName());
    }
}
