<?php

	class Actor
	{
		private $id;
		private $first_name;
    private $last_name;
		private $favorite_movie_id;
		private $favorite_movie_title;

    public function __construct($first_name, $last_name)
    {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
    }

    public function setFirstName($first_name)
    {
      $this->first_name = $first_name;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function setLastName($last_name)
    {
      $this->last_name = $last_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }


    public function setMovieId($movie_id)
    {
      $this->movie_id = $movie_id;
    }

    public function getMovieId()
    {
				return $this->movie_id;
		}

		public function setFavoriteMovieTitle($favorite_movie_title)
		{
			$this->favorite_movie_title = $favorite_movie_title;
		}

		public function getFavoriteMovieTitle()
		{
			if ($this->favorite_movie_title ) {
				return $this->favorite_movie_title ;
			}
			return 'Sin Pelicula Preferida';
		}

		public function setFavoriteMovieId($favorite_movie_id)
		{
			$this->favorite_movie_id = $favorite_movie_id;
		}

		public function getFavoriteMovieId()
		{
				return $this->favorite_movie_id;

		}
