# lifematters
Donate organs. Give life.


* Requirements :-

1) r-base
2) default-jdk
3) rJava RMongo

	Terminal : 
	$ sudo R  
	> install.packages("rJava", lib="/usr/local/lib/R/site-library/");  
	> install.packages("RMongo", lib="/usr/local/lib/R/site-library/");  
					
* Mongo DB Command :-  
1) mongodump -d organ
2) cd dump; mongorestore -d organ organ/


* rscript  
1) Rscript kmeans.R '<Donor/Receiver Email-ID>' 'donor/receiver'

mongo restore from dump
mongorestore --collection hospitalinfo --db organ dump/organ/hospitalinfo.bson
