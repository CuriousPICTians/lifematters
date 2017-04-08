rootkea <- mongoDbConnect('rootkea')
var <- "foo@bar.com"
dbInsertDocument(rootkea, "result", '{"email": var}')