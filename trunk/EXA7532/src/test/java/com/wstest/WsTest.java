package com.wstest;

import com.mycompany.hr.schemas.EmployeeType;
import com.mycompany.hr.schemas.HolidayRequest;
import com.mycompany.hr.schemas.HolidayResponse;
import com.mycompany.hr.schemas.HolidayType;
import org.junit.Before;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.mortbay.jetty.Server;
import org.mortbay.jetty.webapp.WebAppContext;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit4.SpringJUnit4ClassRunner;
import org.springframework.ws.client.core.WebServiceTemplate;
import org.springframework.ws.soap.client.SoapFaultClientException;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;

import static junit.framework.Assert.assertNotNull;
import static org.hamcrest.core.IsEqual.equalTo;
import static org.junit.Assert.assertThat;

@RunWith(SpringJUnit4ClassRunner.class)
@ContextConfiguration(locations = {"/applicationContext_test.xml"})
public class WsTest {

    @Autowired
    private WebServiceTemplate webServiceTemplate;

    @Before
    public void setUp() throws Exception {
        Server server = new Server(0);
        server.addHandler(new WebAppContext("src/main/webapp", "/"));
        server.start();

        int localPort = server.getConnectors()[0].getLocalPort();
        String endPoint = "http://localhost:" + localPort + "/holidayservice/holiday.wsdl";

        webServiceTemplate.setDefaultUri(endPoint);

    }

    @Test
    public void sendHolidayRequest() throws Exception {

        HolidayRequest holidayRequest = new HolidayRequest();
        EmployeeType employeeType = new EmployeeType();
        HolidayType holidayType = new HolidayType();

        holidayType.withStartDate(getDate("2011-06-10")).withEndDate(getDate("2011-07-10"));
        holidayRequest.setHoliday(holidayType);
        employeeType.withFirstName("xxxx").withLastName("xxxx").withNumber(222);
        holidayRequest.setEmployee(employeeType);
        HolidayResponse holidayResponse = (HolidayResponse) webServiceTemplate.marshalSendAndReceive(holidayRequest);
        assertNotNull(holidayResponse);
        assertThat(holidayResponse.isSuccess(), equalTo(true));
    }

    @Test(expected = SoapFaultClientException.class)
    public void sendHolidayRequestWithIncompleteEmployeeDetailsFails() throws Exception {

        HolidayRequest holidayRequest = new HolidayRequest();
        EmployeeType employeeType = new EmployeeType();
        HolidayType holidayType = new HolidayType();

        holidayType.withStartDate(getDate("2011-06-10")).withEndDate(getDate("2011-07-10"));
        holidayRequest.setHoliday(holidayType);
        employeeType.withFirstName("xxxx");
        holidayRequest.setEmployee(employeeType);
        webServiceTemplate.marshalSendAndReceive(holidayRequest);

    }

    private Calendar getDate(String date) throws ParseException {
        SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-MM-dd");
        Calendar calendar = Calendar.getInstance();
        calendar.setTime(simpleDateFormat.parse(date));
        return calendar;
    }
}
