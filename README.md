# Amigo MVC
This project is a simple CRUD with PHP + MySQL in this case using PDO library.

## 📊 Create Table and Database
```sql
create database php2020;
use php2020;

create table amigos (
    id int not null primary key auto_increment,
    paterno varchar(50) not null,
    materno varchar(50) not null,
    nombre varchar(50) not null
);
```

## 📂 Files Structured
```bash
amigo_mvc/

  | index.php
  --------------
  | controllers/
    | amigo.controller.php
  --------------
  | models/
    | amigo.model.php
    | db.php
  --------------
  | public/
  --------------
  | views/
    | footer.php
    | header.php
    | amigo/
      | amigo_edit.php
      | amigo_list.php
```

### 🎛️ Controllers
The brains of the application that controls how data is displayed

- `**amigo.controller.php:**` In this file realized all CRUD (Create, Read, Update, Delete), for database `php2020`.

### 📊 Models
The backend that contains all the data logic.

- `**amigo.model.php:**` In this file, realized the CRUD with connect direct to database.
- `**db.php**` Connect with database for realized the CRUD.

### 🌐 Public
All files with global access in this web site.

### 🎨 Views
The frontend or graphical user interface (GUI)

#### 🫂 Amigo (Folder)
- `**amigo_edit.php:**` Form for edit amigo.
- `**amigo_list.php:**` List of amigos.

#### Header and Footer
- `**header.php:**` Header of application.
- `**footer.php:**` Footer of application.

### 🗃️ Others Files

- **index.php:** In this file, show for users the view `views/home.php`.

## 🔼 Run Application
To run the application, you need to have a PHP server and MySQLinstalled on your computer.
Form more information:

- [PHP Download](https://www.php.net/downloads.php)
- [MySQL Download](https://www.mysql.com/downloads/)

### Run application with:
```bash
php -S localhost:8000
```

### Open Chrome and result:
![Imaged referenced]()\
_This is a imaged referenced_