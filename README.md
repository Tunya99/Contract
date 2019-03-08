# Contract

This project created for automate work with contracts in college

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

One thing that you need is install [xampp](https://www.apachefriends.org/index.html)

### Installing

To begin, clone the project into a folder htdocs by command

```
git clone https://github.com/LitvinAndrey/Contract.git
```

Next step is create table bdcontract in your xampp mysql server. You can use [phpMyAdmin](https://www.phpmyadmin.net/) that installed in xampp or you can run following commands:

```
mysql -u root -p
mysql> CREATE DATABASE bdcontract;
```

You'll see this output confirming that it was created.

```
Output

Query OK, 1 row affected (0.00 sec)
```

From the normal command line, you should import the dump file with the following command:

```
mysql -u username -p bdcontract < bdcontract.sql
```

* username is the username you can log in to the database with
* [bdcontract.sql](bdcontract.sql) is the data dump file to be imported, located in the current directory

Also you should configure you database properties in two files

* [perform_login.php](perform_login.php)
* [All files in folder functions](functions)
* [config.php](lib/config.php)

## Deployment

You should have database structure as described in installation topic. Clone folder with project in live system and it should work

## Built With

* [php](https://ru.wikipedia.org/wiki/PHP) - hypertext preprocessor
* [DataTables](https://datatables.net/) - DataTables is a plug-in for the jQuery Javascript library
* [JQuery](https://jquery.com/) - jQuery is a fast, small, and feature-rich JavaScript library

## Versioning

We use [git](https://git-scm.com/) for versioning. See [CHANGELOG.md](CHANGELOG.md) for more details.

## Authors

* **Antonina Potapkina** - *Initial work* - [Tunya](https://github.com/LitvinAndrey)