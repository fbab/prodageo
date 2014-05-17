package fr.insarouen.prof.server;

public class DbFacade {

		String retrieve_dept_by_code ( Integer codePostal )
		{
			// on met quelques valeurs juste pour rendre crédible quelques tests
			String[] departement = { "ZERO", "AIN", "AISNE", "ALLIER" };
			if ( ( codePostal > 0) && ( codePostal < 4) )
			{
				return departement[codePostal];
			}
			else
			{
				return "INCONNU" ;
			}
		}

}
