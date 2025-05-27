# Medical Records System

A web-based medical records system for managing patients, doctors and appointments, with patient registration, role-based login (admin/patient) and an admin dashboard. Built with HTML, CSS, JavaScript, PHP and MySQL.

> Course project for **CSE-208** at UITS (University of Information Technology and Sciences).

## Features

- **Patient registration** with securely hashed passwords
- **Role-based login** for admins and patients, with session handling and logout
- **Appointment booking** form with client-side validation, saved to the database
- **Doctors directory** listing doctors by specialty
- **Patient records** table showing age, gender and medical history
- **Services page** listing available medical services
- **Admin dashboard** with links for managing patients, doctors and appointments
- **Prepared statements** for database queries

## Tech Stack

| Technology | Purpose |
|---|---|
| HTML5 / CSS3 | Pages and styling |
| JavaScript | Doctors list and form validation |
| PHP | Backend logic, authentication, sessions |
| MySQL | Database |

## Project Structure

```
├── htmls/
│   ├── index.html          # Home page
│   ├── login.html          # Login (admin / patient)
│   ├── register.html       # Patient registration
│   ├── appointment.html    # Book an appointment
│   ├── doctors.html        # Doctors directory
│   ├── patients.html       # Patient records
│   ├── services.html       # Medical services
│   └── admin.html          # Admin dashboard
├── index.css           # Styles
├── index.js            # Scripts
├── sql                 # Database schema
├── pictures/           # Images
└── php/
    ├── db.php          # Database connection
    ├── login.php
    ├── logout.php
    ├── register.php
    ├── appointment.php
    ├── doctors.php
    ├── patients.php
    └── admin.php
```

## How to Run

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** and **MySQL**.
2. Copy the project folder into `C:\xampp\htdocs\`.
3. Open **phpMyAdmin** (`http://localhost/phpmyadmin`), create a database named `medical_system`, and run the queries from the `sql` file.
4. If your MySQL has a password, update it in `php/db.php`.
5. Open `http://localhost/<project-folder>/htmls/index.html` in your browser.

## Database Tables

| Table | Stores |
|---|---|
| `users` | Login accounts with role (admin / patient) |
| `patients` | Name, age, gender, medical history |
| `doctors` | Name and specialty |
| `appointments` | Patient, doctor, date and time |

## Author

**Zearin Akhter** – [GitHub](https://github.com/Zearin14)
