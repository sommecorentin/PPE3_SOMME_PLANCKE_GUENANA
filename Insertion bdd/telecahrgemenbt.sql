create table telechargementFilm
(	idFilm int,
	idClient int,
	laDate date,
	constraint pk_telechargementFilmx primary key (idFilm,idClient),
	constraint fk_telechargementSerie_idFilm foreign key (idFilm) references film(idFilm),
	constraint fk_telechargementSerie_idClient foreign key (idClient) references client(idClient)
	
  )  ;

create table telechargementSerie
(	idSerie int,
	numSaison int,
	numEpisode int,
	idClient int,
	laDate date,
	constraint pk_telechargementSerie primary key (idSerie, numSaison,numEpisode,idClient),
	constraint fk_telechargementSerie_numEpisode foreign key (idSerie,numSaison,numEpisode) references episode(idSerie,numSaison,numEpisode),
	constraint fk_telechargementSerie_idClient foreign key (idClient) references client(idClient)
	
  )  ;