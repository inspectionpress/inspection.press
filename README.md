# InspectionPress

A full‐featured Laravel application for home inspection businesses: scheduling, report writing, CRM, payments, PDF exports, Bland.ai integration, CSV import/export, and more, all with a modern responsive UI. Unlimited locations. Unlimited employees. Unlimited payments. Inspection.press is the free, scalable, open-source home inspection software the industry desperately needs. 

---

## 🔍 Project Overview

InspectionPress lets you:

- 📅 **Schedule appointments** (client‐self‐service & admin side)  
- 🏠 **Lookup property data** via Zillow & BuildFax  
- 💳 **Accept payments** (Square & Stripe) with agent‑based invoicing logic  
- 🗂️ **Manage a CRM** for clients and real estate agents  
- ✍️ **Write inspection reports** with drag‑drop templates, narrative library, image support, and color‑coded severity  
- 📄 **Generate PDFs** (standard reports + Florida Four‑Point & Wind Mitigation forms)  
- 📑 **Import/export** narrative libraries via CSV  
- 📞 **Automate calls & SMS** via Bland.ai (reminders, follow‑ups)  
- 🔐 **Client portal** for secure, GUID‑based report access & agreement signing  
- ⚙️ **Admin panel** for roles, services, pricing rules, API keys, storage settings, and theming  

---

## 📋 Features

1. **Scheduler**  
   - Inspector time‑slot management  
   - Client self‑scheduling via embedded iframe  
   - Price calculated by service + distance + square footage + age  
   - Square (default) & Stripe payment integration  
   - Invoice‑only mode for certain agents  

2. **CRM**  
   - Searchable clients & agents lists  
   - Inline “add new” forms on booking  
   - Role‑based access (admin, inspector, agent, client)
   - Initiate calls from customer card and read history

3. **Report Writer**  
   - Drag/drop sections & findings  
   - Import narrative library from CSV with field mapping  
   - Rich‑text editing & image attachments  
   - Color‑coded severity levels (admin configurable)  
   - Public GUID‑based shareable link & PDF export
   - Built-in ChatGPT

4. **Insurance Forms (FL‑specific)**  
   - Auto‑fillable Four‑Point & Wind Mitigation PDFs  
   - Inspector signature & flattening for compliance  

5. **Bland.ai Integration**  
   - Configurable call & SMS scripts  
   - Automated reminders & follow‑ups  
   - Call/text event logging in CRM  

6. **File Storage**  
   - Local, Amazon S3, Google Drive, OneDrive support  
   - Admin‑configurable storage driver  

7. **Admin Panel**  
   - Manage users, roles, services, pricing rules  
   - Edit email templates & inspection agreements  
   - View audit logs & communications history  

---

## 🚀 Quick Start

### 1. Prerequisites

- PHP 8.1+  
- Composer  
- Node.js & npm  
- MySQL (or MariaDB)  
- Redis (optional, for queues)  

### 2. Clone & Install

git clone https://github.com/your‑username/inspection.press.git
cd inspection.press

composer install
npm install

3. Environment Setup
Copy the example env file and generate your app key:

cp .env.example .env
php artisan key:generate
Edit .env to configure:

DB_* (database credentials)

FILESYSTEM_DRIVER (e.g. local or s3)

SQUARE_* or STRIPE_* API keys

BLAND_API_KEY

Mail & other integrations

4. Migrate & Seed

php artisan migrate --seed
5. Build Assets

npm run build
6. Run the App

php artisan serve
Visit http://localhost:8000 and log in with your seeded admin account:

pgsql

Email: admin@example.com  
Password: password
⚙️ Configuration & Maintenance
Add/Edit Services & Pricing: Admin → Services

Manage Users & Roles: Admin → Users

Template & CSV Import: Admin → Templates

Scheduler Settings: Admin → Scheduling

Bland.ai & Integrations: Admin → Settings

Storage Driver: .env or Admin → Storage Settings

🧪 Testing
Run PHPUnit tests:

php artisan test
Run ESLint & StyleLint (if configured):

npm run lint
🤝 Contributing
We welcome improvements, bug fixes, and new features! Please:

Fork the repo

Create a feature/your‑feature branch

Commit your changes with clear messages

Open a Pull Request against main

📄 License
This project is released under the MIT License. See LICENSE for details.

No support is provided. 

Thank you for choosing InspectionPress — the ultimate toolkit for modern home inspection businesses!
