<?php
include_once('Modeles/Metiers/genre.php');

Class conteneurGenre
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesGenres;

	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesGenres = new arrayObject();
		}

	//METHODE AJOUTANT UN genre------------------------------------------------------------------------------
	public function ajouteUnGenre($lienGenre,$unId‪Genre, $unLibelleGenre)
		{
		$unGenre = new genre($lienGenre,$unId‪Genre, $unLibelleGenre);
		$this->lesGenres->append($unGenre);
		}

	//METHODE RETOURNANT LE NOMBRE de genres-------------------------------------------------------------------------------
	public function nbGenre()
		{
		return $this->lesGenres->count();
		}

	//METHODE RETOURNANT LA LISTE DES Genres-----------------------------------------------------------------------------------------
	public function listeDesGenres()
		{
		$liste = "<div class='container h-100'>
                    <div class='row h-100 justify-content-center align-items-center'>
                        <table >
                            <thead>

                            </thead>
							<tbody>";


		$liste = $liste.'<tr>';
		foreach ($this->lesGenres as $unGenre)
		{
			$liste = $liste.'<td><img height=300px  class=imageGenre src="'.$unGenre->getLienImageGenre().'" ></td>';
		}
		$liste = $liste.'</tr><tr>';
		foreach ($this->lesGenres as $unGenre)
		{
			$liste = $liste.'<td class="text-white td-table">'.'<li><a href="index.php?vue=compte&action=telechargement">'.$unGenre->getLibelleGenre().'</a></li>'.'</td>';
		}
		$liste = $liste.'</tr>';


		$liste=$liste."</tbody></table></div></div>";

		return $liste;
		}

		//METHODE RETOURNANT LA LISTE DES genres DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesGenresAuFormatHTML()
		{
		$liste = "<SELECT name = 'idGenre'>";
		foreach ($this->lesGenres as $unGenre)
			{
			$liste = $liste."<OPTION value='".$unGenre->getIdGenre()."'>".$unGenre->getLibelleGenre()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}

//METHODE RETOURNANT UN genre A PARTIR DE SON NUMERO--------------------------------------------
	public function donneObjetGenreDepuisNumero($unIdGenre)
		{
		//initialisation d'un booléen (on part de l'hypothèse que le genre n'existe pas)
		$trouve=false;
		$leBonGenre=null;
		//création d'un itérateur sur la collection lesGenres
		$iGenre = $this->lesGenres->getIterator();
		//TQ on a pas trouvé le genre et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iGenre->valid()))
			{
			//SI le numéro du genre courant correspond au numéro passé en paramètre
			if ($iGenre->current()->getIdGenre() == $unIdGenre)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde du genre courant
				$leBonGenre = $iGenre->current();

				}
			//SINON on passe au genre suivant
			else
				$iGenre->next();
			}
		return $leBonGenre;
		}

	}

?>
