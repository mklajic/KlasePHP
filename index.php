<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vježba klase</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php 
    
    // stvaranje klase
    class Vjezba{
    	
		//dodavanje vrijednosti u klasu
		public $svojstvo1 = "Ovo je svojstvo klase!";
		
		// metoda set
		public function dodajSvojstvo($novoSvojstvo)
		{
			$this->svojstvo1=$novoSvojstvo;
		}
		
		// metoda get
		public function dohvatiSvojstvo()
		{
			return $this-> svojstvo1 . "<br />";
		}
		
		// Magic Methods __construct()
		public function __construct()
		{
			echo " <b> Objekt klase " . __CLASS__ . " je iniciran! </b> <br/>" ;
		}
		
		//Magic Methods __destruct()
		public function __destruct()
		{
			echo "<b>Objekt klase " . __CLASS__ . " je uništen! </b><br/>";
		}
		
    }
	
		// instanca klase
		$objekt= new Vjezba();
		
		//ispis
		echo $objekt->dohvatiSvojstvo();
		
		// korištenje metode set
		$objekt->dodajSvojstvo("Ovo je novo svojstvo!");
		
		//korištenje metode get
		echo $objekt->dohvatiSvojstvo();
		
		
		
		//druga instanca iste klase
		$objekt2= new Vjezba();
		$objekt2->dodajSvojstvo("Ovo je novo svojstvo iz druge instance iste klase!");
		echo $objekt2->dohvatiSvojstvo();
		
		include_once 'nasljedjivanje.php' ;
    
    ?>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
