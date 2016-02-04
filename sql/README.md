# Recreating OKEON MySQL Database

The `okeon.sql` file is specific to a local development environment and will probably not work by itself to recreate the database in the production environment (or a live server). The following steps can guide you through the process of recreating the database, although this is not exhaustive guide.

Note that the example commands given below assume that the database name is `okeon`. The SQL commands can be run in the MySQL console or using the `-e` commandline option like so:

`$ mysql -e "SQL STATEMENT" okeon`

### Create New Database

1. Start by deleting the previous version of the database if it exists. This can be done running the following query:

```sql
DROP DATABASE IF EXISTS okeon;
```

2. Create a new database and give appropriate privileges, if necessary.

```sql
CREATE DATABASE okeon;
GRANT ALL PRIVILEGES ON okeon.* TO "username" IDENTIFIED BY "password";
FLUSH PRIVILEGES;
```

### Rebuild Database

3. Execute SQL in `okeon.sql`.

```sql
SOURCE okeon.sql;
```

If you receive errors about an unidentified character encoding or collation, chances are that UTF8MB4 needs to be changed to UTF8. You can do this on the terminal command line prompt with the `sed` command:

`$ sed 's/utf8mb4/utf8/g' okeon.sql > fixed.sql`

Then `SOURCE` this file and, if you don't receive any errors, delete the file so that git does not consider it an addition to the repository. If you receive errors, make a new issue, providing ample information, and we'll get back with you.

### Fix HOME and SITEURL 

4. Since the home and site URLs are hard coded into the database, you need to update them to point to your web server. [This can be done in many ways](https://codex.wordpress.org/Changing_The_Site_URL) but here's a way to directly change them through the MySQL console:

```sql
UPDATE okeon_options SET option_value = 'http://okeon.unit.oist.jp' WHER
E option_name = 'siteurl';
UPDATE okeon_options SET option_value = 'http://okeon.unit.oist.jp' WHER
E option_name = 'home';
```

---

Hopefully this takes care of all the issues. If not, add one to the github issue tracker and we will update this guide.


