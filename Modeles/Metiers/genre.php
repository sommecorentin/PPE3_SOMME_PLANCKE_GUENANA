<?php
Class genre
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $id‪Genre;
	private $libelleGenre;
	private $lienImage;


	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unId‪Genre, $unLibelleGenre,$unlienImage)
		{
		$this->lienImage = $unlienImage;
		$this->id‪Genre = $unId‪Genre;
		$this->libelleGenre = $unLibelleGenre;
		}

	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdGenre()
		{
		return $this->id‪Genre;
		}
	public function getLibelleGenre()
		{
		return $this->libelleGenre;
		}
		public function getLienImageGenre()
	  {
			return $this->lienImage;
	 	}

	//SETTEUR------------------------------------------------------------

	public function setIdGenre($unId‪Genre)
		{
		$this->id‪Genre = $unId‪Genre;
		}
	public function setLibelleGenre($unLibelleGenre)
		{
		$this->libelleGenre = $unLibelleGenre;
		}
	public function setlienImage ($unlienImage)
	  {
			$this->lienImage = $unlienImage;
		}

	}

?>
