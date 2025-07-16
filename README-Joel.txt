# 📚 Book Management System (Laravel)

A simple web application built with **Laravel** that allows users to **register, log in, and manage their own book collection**. Each user can create, edit, delete, and view their books in a personalized dashboard.

---

## 🚀 Features

- ✅ User Authentication (Laravel Breeze)
- ✅ CRUD operations for books
- ✅ Each user can only see and manage their own books
- ✅ Form validation with error feedback
- ✅ Blade templating with Tailwind CSS (via Breeze)
- ✅ Pagination on the book listing
- ✅ Clean and simple UI

---

## 🛠 Tech Stack

- Backend: Laravel 12
- Frontend: Blade, Tailwind CSS (Laravel Breeze)
- Auth: Laravel Breeze
- Database: MySQL
- Tools: Composer, npm

---

## 📂 Project Structure

bookapp/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── BookController.php
│   ├── Models/
│   │   └── Book.php
├── resources/
│   └── views/
│       └── books/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
├── database/
│   └── migrations/
│       └── create_books_table.php

---

## 🧪 Validation Rules

- title: required
- author: required
- published_year: numeric, reasonable (e.g., between 1500 and current year)
- description: optional

---

## 🔒 Authentication & Authorization

- Laravel Breeze handles registration, login, and logout.
- All book-related routes are protected with auth middleware.
- Each user can only access and manage their own books.

---

## 📦 Installation

### 1. Clone the repository
git clone https://github.com/yourusername/bookapp.git
cd bookapp

### 2. Install dependencies
composer install
npm install && npm run dev

### 3. Configure the environment
cp .env.example .env
php artisan key:generate

Update `.env` with your MySQL DB credentials:
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=your_database  
DB_USERNAME=your_username  
DB_PASSWORD=your_password

### 4. Run migrations
php artisan migrate

### 5. Start the server
php artisan serve

Visit: http://localhost:8000


## 🧑‍💻 Author

Your Name  
[Your Portfolio Link]  
[LinkedIn Profile] | [GitHub Profile]

---

## 📄 License

This project is open-source and free to use under the MIT License.
