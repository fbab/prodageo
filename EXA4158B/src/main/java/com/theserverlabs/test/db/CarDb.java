/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package com.theserverlabs.test.db;

import com.theserverlabs.namespaces.cars.Car;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 *
 * @author kmccormack
 */
public class CarDb {

    // singleton instance
    private static final CarDb instance = new CarDb();

    private Map<String, Car> cars = new HashMap<String, Car>();
	private int carIdx = 0;

    public static CarDb getInstance() {
        return instance;
    }
    
    private CarDb() {
    	Car p306 = new Car();
		p306.setMake("Peugeot");
		p306.setModel("306");
		p306.setColor("blue");
		addCar(p306);
		Car clio = new Car();
		clio.setMake("Renault");
		clio.setModel("Clio");
		clio.setColor("green");		
        addCar(clio);
    }

    public List<Car> getCars() {
        return new ArrayList<Car>(cars.values());
    }

    public Car findById(String id) {
        return cars.get(id);
    }
    
    public synchronized void addCar(Car car) {
        int id = carIdx++;
        cars.put(Integer.toString(id), car);
        car.setId(id);
    }

    public synchronized void updateCar(String id, Car car) {
        cars.put(id, car);
    }

    public synchronized void deleteCar(String id) {
        cars.remove(id);
    }
    
}
