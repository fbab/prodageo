package com.wstest.endpoint;


import com.mycompany.hr.schemas.HolidayRequest;
import com.mycompany.hr.schemas.HolidayResponse;
import com.wstest.service.HumanResourceService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ws.server.endpoint.annotation.Endpoint;
import org.springframework.ws.server.endpoint.annotation.PayloadRoot;

@Endpoint
public class HolidayEndpointImpl implements HolidayEndpoint {

    @Autowired
    private HumanResourceService humanResourceService;

    @PayloadRoot(localPart = "HolidayRequest", namespace = "http://mycompany.com/hr/schemas")
    public HolidayResponse getOrder(HolidayRequest holidayRequest) {

        humanResourceService.bookHoliday(holidayRequest);

        return new HolidayResponse().withSuccess(true);
    }

    
}

