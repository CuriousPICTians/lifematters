#!/usr/bin/env Rscript

i <- as.numeric(commandArgs(TRUE))
#i <- commandArgs(TRUE)
rootkea <- mongoDbConnect('rootkea')

donors <- dbGetQuery(rootkea, 'donorinfo', '{"approved": "1"}', skip = 0, limit = 10000)
receivers <- dbGetQuery(rootkea, 'receiverinfo', '{"approved": "1"}', skip = 0, limit = 20000)

#donor_ds <- donors[, c("email", "organ", "blood")]
donor_ds <- donors[, c("uid", "organ", "blood")]
#receiver_ds <- receivers[, c("email", "organ", "blood")]
receiver_ds <- receivers[, c("uid", "organ", "blood")]

donor_clusters <- kmeans(donor_ds[, c("organ", "blood")], 8)
receiver_clusters <- kmeans(receiver_ds[, c("organ", "blood")], 8)

j <- 1
ans <- 0
for (email in donor_ds$uid)
{
	if (email == i)
	{
		ans <- j
		break;
	}
	j <- j + 1
}

cd_cluster <- donor_clusters$cluster[ans]

organ_diff <- receiver_clusters$centers[,"organ"] - donor_clusters$centers[cd_cluster,"organ"]
blood_diff <- receiver_clusters$centers[,"blood"] - donor_clusters$centers[cd_cluster,"blood"]

ans_cluster_l <- which.min(abs(organ_diff) + abs(blood_diff))
temp <- receiver_ds[receiver_clusters$cluster == ans_cluster_l, ]

final <- temp[(temp$organ == donor_ds[ans, ]$organ) & (temp$blood == donor_ds[ans,]$blood),]
#print(final)
#print(final$uid)

for (email in final$uid)
{

	query <- gsub(' ', '', paste('{"uid":"', email, '"}'))
#	print(query)
	dbInsertDocument(rootkea, "result", query)
}

#k <- 1
#rows <- nrow(final)
#while (k <= rows)
#{
#	docs <- gsub('[]\\[]', "", toJSON(final[k,], dataframe = c("rows")))
#print(docs)
#	dbInsertDocument(rootkea, "result", doc = docs)
#	k <- k + 1
#}