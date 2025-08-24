# 📦 RLPACK - Document Reminder & Validation System

RLPACK adalah aplikasi internal untuk memonitor, mengelola, dan mengingatkan user terkait kelengkapan document package per `pack_id` berdasarkan PO, AWB, dan tipe document yang telah ditentukan. Dilengkapi fitur reminder automatic via email.

---

## 🚀 Fitur Core

- ✅ Dashboard progress collect document
- ✅ Monitoring status document per `pack_id`
- ✅ Upload various tipe document (CINV, BPN, eBilling, dll)
- ✅ System validation document
- ✅ Reminder email automatic (per `pack_id`, per user)
- ✅ Cronjob for send email periodic
- ✅ Report kelengkapan document
- ✅ Role user & security session restrict.php

---

## 🛠️ Technology

- PHP (version 7.4 — migration to PHP 8.3)
- MySQL / MariaDB
- PHPMailer (Email SMTP)
- Composer (Dependency Management)
- HTML, Bootstrap, jQuery (Frontend)
- Cronjob Linux (Background Job)

---

## ⚙️ Requirement Minimum

| Component     | Requirement                                             |
| ------------- | ------------------------------------------------------- |
| PHP           | 7.4 or later (8.3 recommended)   Currentlu using 8.3.32 |
| Database      | MySQL 5.7 / MariaDB 10.x                                |
| PHP Extension | `mysqli`, `mbstring`, `intl`, `json`, `openssl`, `curl` |
| Mail Server   | SMTP active (e.g Gmail App Password)                    |
| Composer      | Required to be installed                                |
| Web Server    | Apache / NGINX                                          |

---

## 📝 Status $error = a2b3

| Code                             | Description                                              |
| -------------------------------- | -------------------------------------------------------- |
| 800d                             | from logout.php = Redirect ke login                      |
| 601257a43bd5                     | from public/auth/login.php = success login               |
| 601257a43bd5s                    | from app/helpers/auth.php = much login                   |
| 688225b8                         | from public/auth/login.php = wrong password              |
| 7770                             | from public/auth/login.php = wrong username              |
| cbFYVrEhD                        | from public/auth/login.php = empty username and password |
| af59cc55a701a9e38b5b61dc8f7e986a | status: AddSuccess                                       |
| 69ff7f48427b127e03ecf46a2c201b95 | status: AddFailed                                        |
| 3bced47bf84647a6bfb5f9e80b185bc2 | status: DataDuplicate                                    |
| 62992da7dc17f151f2f0c85798a7486c | status: EditSuccess                                      |
| 299e407ffef3e907a23d7dfe462edb41 | status: EditFailed                                       |
| bc784ba0392e4ea5b52802da5dc49a86 | status: DeleteSuccess                                    |
| 798fffaeeb0f22c7990fac1bf7d20435 | status: DeleteFailed                                     |
| c1872e196a64e1c163225647de4ad1a3 | status: Check File Size                                  |
| 90a21bcf95c63aee4802a3fe3cbae9e0 | status: Check File Type                                  |
| 1518ca359cacd802fed1eaec9c42372b | status: Change Password Success                          |
| 1659a890a4aba35493f2805f074e1744 | status: Change Password Failed                           |

---
