package com.wstest.endpoint;

import com.mycompany.hr.schemas.HolidayRequest;
import com.mycompany.hr.schemas.HolidayResponse;

/**
 * Created by IntelliJ IDEA.
 * User: mpo435
 * Date: Oct 14, 2010
 * Time: 4:25:25 PM
 * To change this template use File | Settings | File Templates.
 */
public interface HolidayEndpoint {
    HolidayResponse getOrder(HolidayRequest holidayRequest);
}
