#!/usr/bin/env Rscript

#i <- 1
i <- as.numeric(commandArgs(TRUE))
rootkea <- mongoDbConnect('rootkea')

donors <- dbGetQuery(rootkea, 'donorinfo', '{"approved": "1"}', skip = 0, limit = 10000)
receivers <- dbGetQuery(rootkea, 'receiverinfo', '{"approved": "1"}', skip = 0, limit = 20000)

donor_ds <- donors[, c("uid", "organ", "blood")]
receiver_ds <- receivers[, c("uid", "organ", "blood")]

donor_clusters <- kmeans(donor_ds[, c("organ", "blood")], 8)
receiver_clusters <- kmeans(receiver_ds[, c("organ", "blood")], 8)

cd_cluster <- donor_clusters$cluster[i]

organ_diff <- receiver_clusters$centers[,"organ"] - donor_clusters$centers[cd_cluster,"organ"]
blood_diff <- receiver_clusters$centers[,"blood"] - donor_clusters$centers[cd_cluster,"blood"]

ans_cluster_l <- which.min(abs(organ_diff) + abs(blood_diff))
temp <- receiver_ds[receiver_clusters$cluster == ans_cluster_l, ]

final <- temp[(temp$organ == donor_ds[i, ]$organ) & (temp$blood == donor_ds[i,]$blood),]
#print(final)
print(final$uid)