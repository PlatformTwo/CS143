TEE foo.txt;
DROP TABLE IF EXISTS Movie, Actor, Director, MovieGenre, MovieDirector, MovieActor, Review, MaxPersonID, MaxMovieID;
CREATE TABLE Movie(id INT, title VARCHAR(100), year INT, rating VARCHAR(10), company VARCHAR(50));
LOAD DATA LOCAL INFILE '~/data/movie.del' INTO TABLE Movie FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
SELECT * FROM Movie;
NOTEE;
