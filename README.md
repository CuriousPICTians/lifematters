# lifematters
Donate organs. Give life.


* Requirements :-
1] r-base
2) default-jdk
3) rJava RMongo

	$ sudo R
	install.packages("rJava");
	install.packages("RMongo");

* Mongo DB Command :-
1] mongodump -d organ
2] cd dump; mongorestore -d organ organ/


* rscript
1] Rscript kmeans.R <DonorEmail-ID>
