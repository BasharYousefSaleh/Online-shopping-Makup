 # 💄 Online Shopping — Makeup Store

A full-stack e-commerce web application specialized in selling **cosmetics and makeup products** — allowing customers to browse, search, track products, and complete secure purchases online.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![License](https://img.shields.io/badge/License-Apache%202.0-blue)

---

## 📌 Overview

**Online Shopping — Makeup Store** is a full-stack e-commerce platform designed to sell cosmetics and makeup products online. The system provides a complete shopping experience — from product browsing and search to secure checkout — with a powerful admin dashboard for managing products, orders, customers, and invoices.

The project is built using **PHP**, **MySQL**, and modern web technologies (HTML5, CSS3, JavaScript), following clean coding practices and a modular architecture for maintainability and scalability.

---

## ✨ Key Features

The system delivers a complete set of e-commerce features for both customers and administrators:

### 🛍️ Customer Features
- **Product Browsing:** Explore cosmetics and makeup products by category.
- **Advanced Search:** Search products by name, brand, or price.
- **Product Details:** View full product information, images, and prices.
- **Shopping Cart:** Add, update, or remove products easily.
- **Secure Checkout:** Complete purchases through an integrated payment flow.
- **Order Tracking:** Track order status from placement to delivery.
- **Account Management:** Register, log in, and manage personal profile.
- **Invoice Management:** Receive and manage purchase invoices.

### 🔐 Admin Features
- **Admin Dashboard:** Full control panel for managing the entire store.
- **Product Management:** Add, edit, and delete products with images.
- **Customer Management:** Manage customer accounts and permissions.
- **Order Management:** View, process, and update customer orders.
- **Invoice Control:** Generate and manage invoices for customers.
- **Messaging System:** Communicate with customers directly.
- **User Control:** Manage user roles and access levels.

---

## 🛠️ Technologies Used

The platform is built using a modern, reliable, and scalable web technology stack:

### Backend
- **PHP:** Core server-side scripting language.
- **MySQL:** Relational database for structured data storage.
- **Sessions & Cookies:** Secure user authentication and state management.

### Frontend
- **HTML5:** Semantic markup and structure.
- **CSS3:** Modern styling and responsive layout.
- **JavaScript:** Interactive client-side functionality.

### Database
- **MySQL:** Main database engine.
- **Structured Schema:** Optimized tables for products, users, orders, and invoices.

### Architecture & Patterns
- **Modular Structure:** Separated `project/` folder for clean organization.
- **Reusable Components:** Shared includes for header, footer, and functions.
- **Configuration Separation:** Centralized config for database and settings.

### Security
- **Password Hashing:** Secure storage of user credentials.
- **Session Management:** Protected user sessions.
- **Input Validation:** Sanitization of all user inputs.
- **SQL Injection Prevention:** Prepared statements and safe queries.

---

## 🔐 Security Implementation

Security was a priority throughout the development of this platform. The following measures were implemented to protect user data and prevent common vulnerabilities:

### 🛡️ Authentication & Authorization
- **Secure Login:** Passwords hashed using strong algorithms.
- **Role-Based Access Control (RBAC):** Separate permissions for Customers and Admins.
- **Session Management:** Secure session tokens with expiration.
- **Account Protection:** Protection against brute-force login attempts.

### 🔒 Data Protection
- **SQL Injection Prevention:** Parameterized queries and safe database access.
- **XSS Protection:** Input sanitization and output encoding.
- **CSRF Protection:** Token-based protection on all forms.
- **Secure File Uploads:** Validation of uploaded product images.

### 💳 Payment Security
- **Secure Checkout:** Protected payment flow during purchase.
- **Order Validation:** Verification of all order data before processing.
- **Invoice Integrity:** Tamper-proof invoice generation.
- **Audit Trail:** Full logging of all transactions.

### 🌐 Network & Infrastructure
- **HTTPS Support:** Secure communication.
- **Config Separation:** Sensitive settings stored in configuration files.
- **Error Logging:** Detailed logs for debugging and monitoring.

### 📋 Security Compliance
- Follows **OWASP Top 10** best practices.
- Adheres to **secure coding standards** for PHP applications.
- Implements **least privilege principle** for all users.

---

## 🏗️ Architecture

The system follows a **modular architecture**:

### 📐 System Layers
- **Presentation Layer:** HTML, CSS, and JavaScript frontend.
- **Business Logic Layer:** PHP scripts handling core e-commerce logic.
- **Data Access Layer:** MySQL queries and database operations.
- **Database Layer:** MySQL with structured schema.

### 🔄 Design Patterns
- **Modular Design:** Separated `project/` for each feature.
- **Reusable Includes:** Shared components for header, footer, and functions.
- **Configuration Separation:** Centralized config files.

### 📊 Data Flow

```
Customer / Admin
       ↓
   index.php
       ↓
    Modules
       ↓
 Database (MySQL)
       ↓
  Response → View → User
```

---

## 📂 Project Structure

The repository is organized for clarity and maintainability:

### 📁 Root Directory
- **project/**: Main source code folder (PHP application).
- **LICENSE**: Apache 2.0 license.
- **.gitignore**: Git ignore rules.
- **README.md**: Project documentation.
- **Screenshots**: `.jpg` images showing the system interface.

### 📁 Project Folder
- **Customer Interface:** Browsing, cart, checkout, and account.
- **Admin Dashboard:** Product, order, customer, and invoice management.
- **Login & Registration:** Secure authentication system.
- **Database Connection:** MySQL configuration.

### 📸 Screenshots Included
- صفحة تسجيل الدخول — Login Page
- البرمجة لإضافة العملاء — Customer Registration
- التحكم بالمستخدم — User Management
- لوحة التحكم للعميل — Customer Dashboard
- اضافة بيانات المنتج — Add Product Data
- التحكم بإرسال الفاتورة — Invoice Management
- برمجة رسالة للعميل — Customer Messaging

---

## 🚀 How to Run

Follow these steps to run the project locally:

### 📋 Prerequisites
- **XAMPP** or **WAMP** (Apache + MySQL + PHP).
- **PHP 7.4** or later.
- **MySQL** database.
- A modern web browser.

### ⚙️ Setup Steps

- **Step 1 — Clone the repository:**
  ```bash
  git clone https://github.com/BasharYousefSaleh/Online-shopping-Makup.git
  ```

- **Step 2 — Move to your server directory:**
  Place the `project/` folder inside `htdocs/` (XAMPP) or `www/` (WAMP).

- **Step 3 — Create the database:**
  Open **phpMyAdmin** and create a new database.

- **Step 4 — Import the database:**
  Import the SQL file into the created database.

- **Step 5 — Configure the connection:**
  Update database credentials in the configuration files.

- **Step 6 — Run the project:**
  Open your browser and go to:
  ```
  http://localhost/project
  ```

---

## 🎓 Academic Context

This project was developed as part of the academic requirements for the Bachelor of Science in Information Technology.

### 🏫 University
- **Al-Hikma University**, Dhamar, Yemen.

### 📅 Timeline
- **Duration:** 2024 – 2025.

---

## 👤 Author

**Bashar Yousef Saleh Al-Kharbi**

### 🎓 Education
- B.Sc. in Information Technology — Al-Hikma University (2025).

### 📬 Contact
- 📧 Email: bsharalkhrby92@gmail.com
- 🔗 GitHub: [@BasharYousefSaleh](https://github.com/BasharYousefSaleh)
- 📱 Phone: +967 778014486
- 💬 WhatsApp: [Chat on WhatsApp](https://wa.me/967778014486)

### 🎯 Interests
- Full-Stack Web Development
- Mobile Application Development (Flutter)
- Artificial Intelligence & Big Data
- Cloud Computing & Cybersecurity

---

## 📄 License

This project is licensed under the **Apache License 2.0**.

### ✅ Permitted Use
- Academic, personal, and commercial use (with attribution).

### 📧 Contact for Licensing
- Email: bsharalkhrby92@gmail.com

---

⭐ If you find this project useful, please consider giving it a star!
