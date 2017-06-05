#!/usr/bin/env Rscript
#Usage :
#	1) From Command line : $ cd /var/www/html/lifematters; Rscript kmeans.R '<email_id>' 'donor/receiver'
#	2) From PHP : exec("Rscript kmeans.R <email_id> donor/receiver", $out);

library(rJava)
library(RMongo)

args <- commandArgs(TRUE)

#args <- c("om@gmail.com", "donor")

if (args[2] == 'donor')
{
	left <- 'donorinfo'
	right <- 'receiverinfo'
} else if (args[2] == 'receiver')
{
	left <- 'receiverinfo'
	right <- 'donorinfo'
} else
	print("Error!");

rootkea <- mongoDbConnect('organ')

query <- gsub(' ', '', paste('{"email":"', args[1], '", "approved": "1"}'))
donor <- dbGetQuery(rootkea, left, query, skip = 0, limit = 1)
receivers <- dbGetQuery(rootkea, right, '{"approved": "1"}', skip = 0, limit = 20000)

receiver_ds <- receivers[, c("email", "organ", "blood")]
receiver_clusters <- kmeans(receiver_ds[, c("organ", "blood")], 8)

organ_diff <- receiver_clusters$centers[,"organ"] - donor$organ
blood_diff <- receiver_clusters$centers[,"blood"] - donor$blood

ans_cluster_l <- which.min(abs(organ_diff) + abs(blood_diff))
temp <- receiver_ds[receiver_clusters$cluster == ans_cluster_l, ]

final <- temp[(temp$organ == donor$organ) & (temp$blood == donor$blood),]
print(final$email)
