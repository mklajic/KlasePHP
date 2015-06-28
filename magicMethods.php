
    
    <?php 
    
    class Nasljedjivanje extends Vjezba {
		
    }
	
	$objekt= new Nasljedjivanje();
	$objekt->dodajSvojstvo("Ovo je novo svojstvo iz druge klase! Primjer nasljeđivanja!");
	echo $objekt->dohvatiSvojstvo();
   
    
   