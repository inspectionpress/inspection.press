<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Florida-first, AI-powered inspection OS · Fully open source
</p>

<p align="center">
  <sub>Unlimited inspectors · Unlimited inspections · Unlimited templates &amp; report types · PWA · Twilio · SES · S3 · Outlook/Graph · BuildFax · RentCast</sub>
</p>

---

## ✨ Overview

**InspectionPress** is a Florida-first, fully open-source inspection platform for home, building, insurance, and municipal inspectors.

It brings together:

- Scheduling & availability
- Service areas & zones
- Dynamic pricing & surcharges
- CRM (clients, agents, agencies, contractors)
- Property, permit & weather APIs (BuildFax, RentCast, weather services)
- Florida insurance forms (Four-Point, Wind Mitigation)
- Report writer & template builder with AI
- Equipment & asset tracking
- Document uploads & automatic permit attachment
- Time-stamped internal office notes
- Call disposition tracking & improved call/SMS logging
- Outbound call queue and contact follow-up tools
- Custom lead submission forms per agency
- Email/SMS/phone automations
- PWA with offline support
- Google Maps & Apple Maps integration

…all in a single, self-hosted Laravel application.

> **Unlimited by design**: inspectors, inspections, templates, report types, services, service areas, and service area zones.

Beyond home inspections, the platform is built to pivot easily into other field-based verticals, including:

- Real-estate appraisers
- Insurance adjusters
- Roofing companies
- Electrical contractors
- HVAC companies
- WDO / pest inspectors
- Automotive and specialty inspection providers
- Any business that sends people and checklists into the field

---

## 🧱 Architecture & Stack

| Layer        | Tech / Service                                                                 |
| ------------ | ------------------------------------------------------------------------------ |
| OS           | Ubuntu Server 20.04+ (22.04+ recommended)                                      |
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
| Data APIs    | BuildFax (permits), RentCast (property), Weather API, Google Maps, Apple Maps  |

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
- Time-stamped **office notes**:
  - Internal notes on inspections, clients, or agents
  - Each entry time-stamped for history and accountability

### 📦 Services, Service Areas & Zones

- Unlimited **services**:
  - Standard home inspection
  - Four-Point
  - Wind Mitigation (OIR-B1-1802)
  - Roof certification
  - Pre-acquisition forms
  - Municipal/insurance-only templates
  - Appraisal forms, WDO, HVAC, electrical, roof-only, and any custom service
- **Service areas** and **service area zones**:
  - Areas like “Tampa Bay” with zones by county, city, ZIP, or custom regions
  - Inspectors/field staff assigned by zone for auto-assignment
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
  - Appraisal-style reports, WDO, HVAC, electrical, roof-only, and other verticals
- Template scopes:
  - Private inspector templates
  - Company-wide templates
  - Agency-specific templates (e.g. pre-acquisition form per carrier/agency)
- Import templates from other platforms:
  - CSV / XLS / XLSX
- Sample templates included to get started quickly

---

## 📇 CRM: Clients, Agents, Agencies & More

### 👤 Customers (Clients)

- Full client profiles:
  - Contact info, tags, custom fields
  - Property history
  - Inspection/job history
  - Internal notes (time-stamped where needed)
- Bulk client import from CSV/XLS(X)

### 🧑‍💼 Agents & Agencies

- Real-estate agents, insurance agents, appraisers, property managers, and more
- Agency records:
  - Brokerages, insurance agencies, municipal departments, appraisal firms, contractors
  - Default services and pricing
  - Default templates (e.g. which pre-acquisition or specialty form to use)
  - Custom branding and communication style per agency
- Unlimited agents & agencies attached to a single inspection/job:
  - Buyer’s agent, listing agent, insurance agent, appraiser liaison, property manager, contractor reps, etc.
  - All can be copied on communication and report delivery

### 🧑‍🔧 Contractors & Other Contacts

- Contractors, roofers, electricians, HVAC techs, WDO operators, engineers, HOAs, and other third parties
- Easily CC’d on reports, invoices, and scheduling emails

### 📝 Custom Lead Submission Forms for Agencies

- Agency-specific lead forms:
  - Embed or link custom lead capture forms for each agency
  - Pre-configure services, templates, and required fields per partner
- New leads flow directly into:
  - CRM
  - Scheduling pipeline
  - Communication & outbound call queue (where enabled)

---

## 🧰 Equipment & Asset Tracker

Keep track of every piece of gear your company owns:

- Create an inventory of:
  - Tools
  - Ladders
  - Moisture meters
  - Drones
  - Cameras
  - Computers, tablets, phones
  - Printers and office equipment
- Assign inventory items to inspectors or staff:
  - Know who has which tool right now
  - Assign gear to offices, vehicles, or storage locations
- Track movement and history:
  - Check-in/check-out style history
  - See the last inspection or office note associated with each asset
- Always know where your gear is and who is responsible for it

---

## 📅 Scheduling, Availability & Self-Service

### 🗓 Admin Scheduler

- Create, edit, and reschedule inspections/jobs with:
  - Live pricing calculations
  - Selected services and add-ons
  - Preferred inspector/field tech & backups
- Respect availability, travel radius, and service area settings
- Automatic staff assignment based on:
  - Address → zone → service area → inspector/tech
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
  - Staff calendars (via availability & Outlook/Graph)
  - Travel rules and distance
  - Existing jobs and durations

---

## 🏠 Property, Permits, Maps & Weather

### 🧾 BuildFax & RentCast

- **BuildFax** integration (where licensed):
  - Permit history and property records
- **RentCast** integration:
  - Property info and market context
- Aggressive caching of property & permit data:
  - Fewer API calls
  - Faster subsequent lookups
  - Lower external costs

### 📍 Maps Integration

- **Google Maps** and **Apple Maps** integration:
  - Map and visualize job locations
  - Launch turn-by-turn navigation from job details
  - Quick access to neighborhood/street context

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
  - New inspection/job scheduled
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
  - Two-way SMS confirmations, reminders, and follow-ups
- **Call disposition & enhanced logging**:
  - Track call result (answered, voicemail, no answer, wrong number, etc.)
  - Capture notes and outcome for each call
  - Tie dispositions back to leads, clients, and agencies
- **Improved SMS logging**:
  - Full history of inbound/outbound SMS per contact
  - Message status tracking (queued, sent, delivered, failed where available)
- **Outbound call queue**:
  - Build prioritized outbound call lists from:
    - New leads
    - Unconfirmed appointments
    - Past-due invoices
    - Follow-up campaigns
  - Work through the queue from inside the app
  - Log disposition and next steps as you go
- AI-assisted campaigns:
  - Post-inspection or post-job follow-ups
  - Agent and partner nurturing / re-engagement
  - Review & testimonial requests
  - Reactivation of “quiet” clients or agencies

### ⚙️ Automation Rules

- Event-driven automation engine:
  - Triggers on inspection/job, agreement, invoice, or report events
- Conditions based on:
  - Service type
  - Agency
  - Location or zone
  - Call disposition or lead status
  - Time / status
- Actions can include:
  - Sending email/SMS
  - Pushing contacts into the outbound call queue
  - Notifying staff
  - Applying custom logic (extensible for future integrations)

---

## 📝 Interactive Agreements & Legal

- Multiple agreement templates:
  - Per service, per agency, or global
- **Interactive, variable-driven agreements**:
  - Variables like client name, property address, fee, services, scheduled date/time, inspector/tech, etc.
  - Generated by a centralized variable context provider
- E-signature workflows with status tracking:
  - Sent / viewed / signed
- Agreements tied directly to inspections/jobs and reports
- Suitable for private and municipal inspectors, appraisers, adjusters, contractors, and more

---

## 📥 Migration & Data Imports

- Import from other platforms via CSV/XLS(X):
  - Clients / customers
  - Agents & agencies
  - Historical inspections/jobs & report metadata
  - Invoices & payments
  - Templates and narrative libraries
- Mapping tools to align legacy fields to InspectionPress models
- Sample mappings and templates provided to accelerate onboarding

---

## 🗂 Documents, Attachments & Permits

- Upload documents:
  - PDFs, images (JPG/PNG), and other file types
- Attach documents:
  - To entire inspections/jobs
  - To specific sections
  - To individual findings
- Automatically attach permit records:
  - Pull BuildFax permit data and attach it to relevant report sections
  - Keep permit evidence alongside narratives and photos
- Centralize all supporting documentation for each inspection/job

---

## 🧾 Report Writer & Template Builder

### 🧩 Structure

- Clear hierarchy:
  - **Sections → Components → Findings**
- Template order is **strictly preserved** in the report writer:
  - Desktop and mobile views match template ordering
- Support for:
  - Required vs optional sections/components
  - Filters and summary views for key issues

### ✍️ Editing & UI

- **TinyMCE** rich-text editor throughout:
  - Narratives, information blocks, limitations, comments
- Severity levels:
  - Minor / Maintenance
  - Major
  - Material / Safety Concern
  - Fully color-coded and customizable
- Additional metadata:
  - Location tags (e.g. “Roof – South slope”)
  - Contractor type (roofing, electrical, plumbing, HVAC, etc.)
  - Cost estimate toggles
- Media:
  - Inline photos and videos
  - Thumbnails, galleries
  - Desktop and mobile workflows

---

## 🤖 AI Integration

- AI integrated in both:
  - **Report writer**
  - **Template builder**
- Capabilities:
  - Generate or refine narratives for findings
  - Rewrite, expand, or simplify language for clients and agents
  - Create summaries and recommendations
  - Suggest standard narratives and limitations for new templates
  - Foundation for AI-driven QA:
    - “You mentioned hail damage but did not attach a photo”
    - “GFCI not mentioned for kitchen despite age of home”

---

## 🗃 Narrative Library

- Built-in narrative library for common defects and scenarios
- Upload your own narrative sets:
  - CSV / XLS / XLSX import
- Tag and categorize narratives for quick lookup:
  - By system, severity, location, contractor type, etc.
- In-editor narrative picker:
  - Search and insert narratives directly while editing findings

---

## 🏝 Florida Insurance Forms

**Florida-first** design with complete support for:

- **Four-Point** inspection forms
- **Wind Mitigation** (OIR-B1-1802)

Key capabilities:

- Form-aware editors:
  - Radios, checkboxes, and conditional inputs
  - Mapped to official layouts (via SVG/PDF)
- Automatic **LBX generation** for wind mitigations
- Carrier-compatible PDFs:
  - Output matches the official forms that carriers expect
- Support for private and municipal/insurance inspectors

---

## 📄 Full & Summary Views + PDF Exports

Each inspection/job supports multiple report views:

- **Full report view**
  - All sections, components, findings, media, and notes
- **Summary report view**
  - Filtered to key severities (e.g. major, material/safety concerns)

PDF features:

- Full report PDF
- Summary-only PDF
- Separate Four-Point and Wind Mitigation PDFs
- All PDFs served from S3 (optionally via Cloudflare)

Access:

- Secure **UUID-based links**
  - Clients, agents, and carriers do **not** need an account
  - Different links can be shared as needed (full vs summary vs form PDFs)

---

## 📱 PWA & Offline Usage

InspectionPress ships as a **Progressive Web App**:

- Installable on:
  - Android
  - iOS (via Safari)
  - Desktop browsers (Chrome/Edge)
- Features:
  - Home screen icon & splash screen
  - Full-screen “app-like” experience
  - Caching strategies for data and assets
  - Offline-friendly workflows for on-site work
  - Syncs changes and photos when connectivity returns

---

## 🌍 Use Cases & Verticals

While built “Florida-first” for home and insurance inspections, the platform is designed to adapt quickly to other industries that need:

- Field scheduling
- Structured forms & checklists
- Photos, notes, and PDFs
- CRM and communication tools

Example verticals:

- Home & building inspectors  
- Real-estate **appraisers**  
- Insurance **adjusters**  
- **Roofing** contractors  
- **Electrical** contractors  
- **HVAC** companies  
- **WDO** / pest inspection providers  
- **Automotive** inspection services  
- Municipal code enforcement & permitting  
- Any workflow where people visit locations, collect data, and produce reports

---

## 🔌 Integrations Overview

- **Cloudflare** – CDN, WAF, and edge caching for app and assets
- **Amazon S3** – File storage for uploads and PDFs
- **Amazon SES** – Outbound transactional email
- **Amazon Lightsail** – Simple VPS hosting
- **Microsoft Graph** – Outlook calendar & email integration
- **Twilio** – Voice calling, SMS, call disposition, call queues, and AI campaigns
- **BuildFax** – Permit lookup (licensed) with caching
- **RentCast** – Property and rental data (licensed) with caching
- **Weather APIs** – Weather conditions at inspection time/location
- **Google Maps & Apple Maps** – Mapping and navigation from inspection addresses

---

## ⚙️ System Requirements

### Server

- Ubuntu Server **20.04+** (22.04+ recommended)
- Nginx
- PHP **8.1+** (8.2+ recommended) with:
  - `mbstring`, `openssl`, `pdo_mysql`, `gd`, `curl`, `zip`, `intl`, `fileinfo`, `json`
- MariaDB **10.5+** (or MySQL 8+)
- Node.js **18+**
- npm or yarn
- Composer **2+**

### Background Tasks

InspectionPress relies on the standard Laravel scheduler and queue system for:

- Email sending
- PDF generation
- Imports & bulk jobs
- External API integrations
- Time-based automations
- Outbound call queue processing and notification workflows

You can run the scheduler and queue workers using your preferred process manager (cron, systemd, Supervisor, etc.), following the standard Laravel documentation.

### Storage & External Services

- Amazon S3 bucket for uploads & reports
- Amazon SES for email
- (Optional) Cloudflare in front of app and/or S3
- Microsoft Graph app registration for Outlook calendar/email
- Twilio account for calls/SMS
- BuildFax, RentCast, and Weather API credentials (where used)
- Google Maps API key and Apple Maps deep-link configuration (where used)

### Client Devices

- Modern browser (Chrome, Edge, Firefox, Safari – latest versions)
- Android 10+ / iOS 15+ for best PWA support
- Camera & microphone for:
  - On-site media capture
  - Browser-based calling (if enabled)

---

## 📜 Licensing

InspectionPress is released under the **GNU General Public License (GPL)**.

You may:

- Use it for commercial or non-commercial businesses
- Study and modify the source code
- Redistribute modifications under GPL terms

It’s suitable for:

- Solo inspectors & small teams
- Multi-inspector firms & franchises
- Appraisers, adjusters, and contractors
- Municipal / code enforcement departments
- Insurance specialists
- White-label and multi-tenant deployments (within GPL requirements)

---

## 💡 Why InspectionPress?

- **Florida-first**: Four-Point and Wind Mitigation workflows are first-class, not bolted on.
- **Unlimited everything**: Inspectors, inspections, templates, services, areas, zones.
- **AI-powered**: Report writer and template builder make narrative work faster and cleaner.
- **Full CRM**: Clients, agents, agencies, and contractors with calls, SMS, automations, and lead forms.
- **Equipment tracker**: Know where every tool, drone, computer, and printer is—and who has it.
- **Call disposition & queues**: Structured outbound calling and detailed logging for serious follow-up.
- **PWA-ready**: Field-friendly, offline-capable, and installable on mobile & desktop.
- **Maps and data-rich**: Google Maps, Apple Maps, BuildFax, RentCast, and weather data baked in.
- **Cross-industry ready**: Home inspectors, appraisers, adjusters, roofers, electricians, HVAC, WDO, automotive inspections, and more.
- **Self-hosted & GPL**: You own the stack and control your data—no per-inspection pricing, no lock-in.

Use InspectionPress as the operational core of your company, white-label it for partners, or evolve it into your own SaaS platform. It’s built to grow with you.
