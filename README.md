# Spirometry-Lab
This database management solution was designed for the Spirometry Lab of Postgraduate Institute of Medical Education and Research, Chandigarh, India. This lab gets more than 3000 patients every month and there was a need to autmoate the process of data collection and inference. This solution uses the AMP stack and needs wamp64 server or something similar running in the background to insert values into the MySQL database. I used phpMyAdmin. The database schema can be imported using `pft.sql`.

This simple solution allows the lab technicians to add data and view the resulting inferences from the calculations done in the database. They can query records using the ID no of the patient or by date. These results are then exported to `file.csv` which is used to generate automated reports. The code for automated report generation has not been updated yet as it has not been tested in the hospital lab.

`index.php` is the main page/interface and `index-style.css` is the accompanying CSS stylesheet.
`insert.php` and `search.php` are used to insert insert and search data respectively with `insert-style.css` and `search-style.php` being the respective stylesheets.
`tocsv.php` is used for generating csv files for the report and is being expanded to print these reports using `dompdf` library.
