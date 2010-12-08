package org.prodageo ;

import org.springframework.context.support.GenericApplicationContext ;
import org.springframework.beans.factory.xml.XmlBeanDefinitionReader ;
import  org.springframework.core.io.ClassPathResource ;

public class Main {
public static void main(String[] args)
{
    GenericApplicationContext context =
		new GenericApplicationContext();
    XmlBeanDefinitionReader xmlReader =
		new XmlBeanDefinitionReader(context);
    xmlReader.loadBeanDefinitions(new ClassPathResource("applicationContext.xml"));
    context.refresh();
    Calculator calculator = (Calculator) context.getBean("calculator");
    calculator.makeAnOperation();
}
}