DROP TABLE IF EXISTS "Honeywell";
CREATE TABLE "Honeywell" ("image_path" TEXT check(typeof("image_path") = 'text') , "about_it" TEXT, "catalogue_path" TEXT);
INSERT INTO "Honeywell" VALUES('../img/temp_control_Honeywell.jpg','Honeywell is a good company','../catalog/dsmartengg.pdf');
