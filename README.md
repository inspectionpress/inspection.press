<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Florida-first, AI-powered inspection OS · Fully open source
</p>

<p align="center">
  <sub>Unlimited inspectors · Unlimited inspections · Unlimited templates & report types · PWA · Twilio · SES · S3 · Outlook/Graph · BuildFax · RentCast</sub>
</p>

---

## ✨ Overview

**InspectionPress** is a Florida-first, fully open-source inspection platform for home, building, insurance, and municipal inspectors.

It brings together:

- Scheduling & availability
- Service areas & zones
- Dynamic pricing & surcharges
- CRM (clients, agents, agencies, contractors)
- Property & permit APIs (BuildFax, RentCast)
- Florida insurance forms (Four-Point, Wind Mitigation)
- Report writer & template builder with AI
- Email/SMS/phone automations
- PWA with offline support

…all in a single, self-hosted Laravel application.

> **Unlimited by design**: inspectors, inspections, templates, report types, services, service areas, and service area zones.

---

## 🧱 Architecture & Stack

| Layer        | Tech / Service                                                                 |
| ------------ | ------------------------------------------------------------------------------ |
| OS           | Ubuntu Server 20.04+ (22.04+ recommended)                                     |
| Web server   | Nginx                                                                          |
| Runtime      | PHP 8.1+ (8.2+ recommended)                                                    |
| DB           | MariaDB 10.5+ (or MySQL 8+ compatible)                                         |
| Frontend     | Node.js 18+, Vite, Tailwind CSS, PWA                                           |
| Package mgrs | Composer 2+ (PHP), npm / yarn (JS)                                             |
| Hosting      | Amazon Lightsail (or any similar VPS)                                          |
| Storage      | Amazon S3 (optionally fronted by Cloudflare)                                   |
| Email        | Amazon SES                                                                     |
| Identity     | Microsoft Graph (Outlook calendar/email integration)                           |
| Telephony    | Twilio (voice, SMS, AI campaigns)                                              |
| Data APIs    | BuildFax (permits), RentCast (property), Weather API                           |

---

## 🛠 Admin Features

### 👥 User & Company Management

- Unlimited **users** and **inspectors**
- Role-based access control (RBAC) with granular permissions
- Inspector-specific settings:
  - Availability (days/times)
  - Service areas & zones
  - Travel radius & overflow rules (max distance, minimum invoice)
- Company-wide branding:
  - Logos, report headers/footers, email signatures and styling

### 📦 Services, Service Areas & Zones

- Unlimited **services**:
  - Standard home inspection
  - Four-Point
  - Wind Mitigation (OIR-B1-1802)
  - Roof certification
  - Pre-acquisition forms
  - Municipal/insurance-only templates
  - Any custom service you define
- **Service areas** and **service area zones**:
  - Areas like “Tampa Bay” with zones by county, city, ZIP, or custom regions
  - Inspectors assigned by zone for auto-assignment
- Per-service, per-zone, per-agency rules for pricing, duration, and availability

### 💵 Dynamic Pricing & Surcharges

A flexible pricing engine that supports real-world scenarios:

- Base prices per service and service bundles
- Add-ons and optional services
- Custom surcharges based on:
  - **Date** (holiday, peak season)
  - **Time of day** (evenings, after-hours)
  - **Day of week** (weekends)
  - **ZIP code / city / county / zone**
  - **Distance** from inspector or office (mileage tiers)
  - **Property size** (square footage bands)
  - **Property age**
  - **Turnaround time** (rush/same-day premiums)
- Agency-specific pricing overrides and discount structures

### 📑 Templates & Report Types

- Unlimited templates for:
  - Full home inspections
  - Four-Point
  - Wind Mitigation
  - Roof condition / insurance forms
  - Pre-acquisition (agency-specific)
  - Municipal / code enforcement
- Template scopes:
  - Private inspector templates
  - Company-wide templates
  - Agency-specific templates (e.g. pre-acquisition forms for a specific carrier/agency)
- Import templates from other platforms:
  - CSV / XLS / XLSX
- Sample templates included to get started quickly

---

## 📇 CRM: Clients, Agents, Agencies & More

### 👤 Customers (Clients)

- Full client profiles:
  - Contact info, tags, custom fields
  - Property history
  - Inspection history
  - Internal notes
- Bulk client import from CSV/XLS(X)

### 🧑‍💼 Agents & Agencies

- Real-estate agents, insurance agents, property managers, and more
- Agency records:
  - Brokerages, insurance agencies, municipal departments
  - Default services and pricing
  - Default templates (e.g. which pre-acquisition form to use)
  - Custom branding and communication style per agency
- Unlimited agents & agencies attached to a single inspection:
  - Buyer’s agent, listing agent, insurance agent, property manager, contractor reps, etc.
  - All can be copied on communication and report delivery

### 🧑‍🔧 Contractors & Other Contacts

- Contractors, roofers, engineers, HOAs, and any other third parties
- Easily CC’d on reports, invoices, and scheduling emails

> **Goal:** every stakeholder on the job gets the right information, automatically.

---

## 📅 Scheduling, Availability & Self-Service

### 🗓 Admin Scheduler

- Create, edit, and reschedule inspections with:
  - Live pricing calculations
  - Selected services and add-ons
  - Preferred inspector & backups
- Respect inspector availability, travel radius, and service area settings
- Automatic inspector assignment based on:
  - Address → zone → service area → inspector
- Manual override always available

### 🌐 Self-Service & Agency Scheduling

- **Custom scheduling pages** per agency:
  - Pre-selected services, templates, and pricing rules
- Clients can:
  - Add/remove services
  - Reschedule or cancel (within your policies)
- No login required—secure UUID-based links

### 💡 Automatic Appointment Suggestions

- Suggest optimal time slots based on:
  - Inspector calendars (via availability & Outlook/Graph)
  - Travel rules and distance
  - Existing inspections and durations

---

## 🏠 Property, Permits & Weather

### 🧾 BuildFax & RentCast

- **BuildFax** integration (where licensed):
  - Permit history and property records
- **RentCast** integration:
  - Property info and market context
- Aggressive caching of property & permit data:
  - Fewer API calls
  - Faster subsequent lookups
  - Lower external costs

### 🌤 Weather Service API

- Weather data captured from a weather API (e.g. weather.gov or similar)
- Records conditions at or near inspection time:
  - Stored with each inspection
  - Locked after inspection to preserve historical accuracy
- Displayed in inspection details and (optionally) reports

---

## 📣 Communication, Automations & Tracking

### 📧 Email (SES + Outlook/Graph)

- Outbound email via **Amazon SES** for high deliverability
- Optional Outlook/Graph integration for calendar and mail flows
- Email templates for:
  - New inspection scheduled
  - Rescheduled/canceled appointments
  - Reminders and “on my way” notices
  - Agreements ready/signed
  - Report published / updated
  - Payment requests & receipts
- Email tracking pixel support:
  - Basic open tracking for key messages

### ☎️ Phone Calls, SMS & AI Campaigns (Twilio)

- Twilio-powered communication:
  - Click-to-call from CRM cards (browser-based calling)
  - SMS confirmations, reminders, and follow-ups
  - AI-assisted campaigns:
    - Post-inspection follow-ups
    - Agent nurturing / re-engagement
    - Review & testimonial requests

### ⚙️ Automation Rules

- Event-driven automation engine:
  - Triggers on inspection, agreement, invoice, or report events
- Conditions based on:
  - Service type
  - Agency
  - Location or zone
  - Time / status
- Actions can include:
  - Sending email/SMS
  - Notifying staff
  - Applying custom logic (extensible for future integrations)

---

## 📝 Interactive Agreements & Legal

- Multiple agreement templates:
  - Per service, per agency, or global
- **Interactive, variable-driven agreements**:
  - Variables like client name, property address, fee, services, scheduled date/time, inspector, etc.
  - Generated by a centralized variable context provider
- E-signature workflows with status tracking:
  - Sent / viewed / signed
- Agreements tied directly to inspections and reports
- Suitable for private and municipal inspectors, Florida-focused but extendable

---

## 📥 Migration & Data Imports

- Import from other platforms via CSV/XLS(X):
  - Clients / customers
  - Agents & agencies
  - Historical inspections & report metadata
  - Invoices & payments
  - Templates and narrative libraries
- Mapping tools to align legacy fields to InspectionPress models
- Sample mappings and templates provided to accelerate onboarding

---

## 🧾 Report Writer & Template Builder

### 🧩 Structure

- Spectora-style hierarchy:
  - **Sections → Components → Findings**
- Template order is **strictly preserved** in the report writer:
  - Desktop and mobile views match template ordering
- Support for:
  - Required vs optional sections/components
  - Filters and summary views

### ✍️ Editing & UI

- **TinyMCE** rich-text editor throughout:
  - Narratives, information blocks, limitations, comments
- Severity levels:
  - Minor
