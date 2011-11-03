package org.prodageo.exa6023.server.domain;

import org.springframework.roo.addon.entity.RooEntity;
import org.springframework.roo.addon.javabean.RooJavaBean;
import org.springframework.roo.addon.tostring.RooToString;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import java.util.Set;
import org.prodageo.exa6023.server.domain.Topping;
import java.util.HashSet;
import javax.persistence.ManyToMany;
import javax.persistence.CascadeType;
import org.prodageo.exa6023.server.domain.Base;
import javax.persistence.ManyToOne;

@RooJavaBean
@RooToString
@RooEntity
public class Pizza {

    @NotNull
    @Size(min = 2)
    private String name;

    private Float price;

    @ManyToMany(cascade = CascadeType.ALL)
    private Set<Topping> toppings = new HashSet<Topping>();

    @ManyToOne
    private Base base;
}
