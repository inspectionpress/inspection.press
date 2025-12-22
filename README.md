<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Open-source, AI-powered field inspection &amp; reporting OS
</p>

<p align="center">
  <sub>Unlimited inspectors · Unlimited inspections · Unlimited templates &amp; report types · PWA · Twilio · SES · S3 · Outlook/Graph · BuildFax · RentCast</sub>
</p>

---

## Why This Exists

InspectionPress was born out of frustration with existing inspection software:

- Rigid pricing and per-inspection fees  
- Weak or clunky support for insurance forms (especially Florida four-point and wind mitigation)  
- Limited automation, weak APIs, and locked-down data  
- Poor tooling for teams that actually live inside the software all day

This project is an attempt to fix that:

- **Self-hosted** so you own your data
- **GPL-licensed** so you can modify, fork, and extend
- **API- and automation-friendly** so you can wire it into the rest of your stack
- **General-purpose field operations** so it works for more than just home inspectors

> **Honest status:** There are probably a lot of bugs. This is an evolving, work-in-progress system. It’s provided **as-is, with no warranty expressed or implied**. Use it at your own risk, test thoroughly before production, and submit improvements if you find issues.

---

## ✨ High-Level Overview

InspectionPress is a full-stack field operations platform for people who:

- Schedule on-site work
- Collect structured data, photos, and notes
- Need formal reports and PDFs
- Communicate with clients, agents, and partners
- Rely on repeat business and ongoing relationships

Core capabilities include:

- Scheduling & availability management
- Service areas & zones with automatic staff assignment
- Dynamic pricing & custom surcharges
- Full CRM (clients, agents, agencies, contractors, leads)
- Call disposition, outbound call queue & SMS logging
- Property, permit & weather integrations (BuildFax, RentCast, weather APIs)
- Custom inspection/report templates (including Florida four-point & wind mitigation)
- Advanced report writer with AI support
- Equipment & asset tracking
- Document uploads & auto-attached permit data
- Time-stamped office notes & internal communication
- Custom lead submission forms per agency
- PWA for offline and mobile-first use
- Google Maps & Apple Maps integration

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

## 🛠 Admin & Company Features

### 👥 User & Role Management

- Unlimited **users** and **inspectors/field staff**
- Role-based access control with granular permissions
- Inspector/tech-specific settings:
  - Availability (days of week, time windows)
  - Service areas & zones
  - Travel radius & overflow rules (max distance, minimum invoice, etc.)
- Company branding:
  - Logos
  - Report headers/footers
  - Email signatures and styling

### 🧾 Time-Stamped Office Notes

- Internal notes on:
  - Inspections / jobs
  - Clients
  - Agents / agencies
- Every note is time-stamped, creating an internal audit trail/history

---

## 📦 Services, Service Areas & Zones

- Unlimited **services**:
  - Home inspections
  - Appraisal-style inspections
  - Four-point and wind mitigation
  - Roof-only inspections
  - WDO/pest
  - Electrical, HVAC, plumbing, and other trades
  - Insurance adjuster scopes
  - Automotive inspections and any other custom service
- **Service areas** and **service area zones**:
  - Define areas by county, city, ZIP, or custom region
  - Assign inspectors/techs to zones for automatic assignment and routing
- Per-service, per-zone, per-agency configuration:
  - Pricing
  - Estimated duration
  - Availability rules
  - Required agreements and templates

---

## 💵 Dynamic Pricing & Custom Surcharges

Powerful pricing engine:

- Base prices per service and bundles
- Optional add-on services
- Complex surcharge rules based on:
  - Date (holiday/peak days)
  - Time of day (evenings, after-hours)
  - Day of week (weekends vs weekdays)
  - ZIP / city / county / zone
  - Distance from inspector/office (mileage tiers)
  - Property size (square footage bands)
  - Property age bands
  - Turnaround time (rush/same-day pricing)
- Agency-specific overrides:
  - Special rates for key partners
  - Flat-rate pricing for certain agencies

---

## 📑 Templates & Report Types

- Unlimited templates for any type of inspection/job:
  - Home inspection reports
  - Roof condition
  - Insurance forms
  - Appraisals
  - WDO/HVAC/electrical checklists
  - Municipal or code enforcement templates
- **Custom Florida inspection support**, including:
  - Four-Point inspections
  - Wind mitigation (OIR-B1-1802) with full PDF output
- Template scopes:
  - Private (per inspector or team)
  - Company-wide
  - Agency-specific templates
- Import templates from other platforms via:
  - CSV / XLS / XLSX
- Sample templates included as a starting point

---

## 📇 CRM: Clients, Agents, Agencies, Contractors & Leads

### 👤 Clients / Customers

- Detailed profiles:
  - Name, contact info, company
  - Tags & custom fields
  - Property history
  - Inspection/job history
- Bulk import from CSV/XLS(X)
- Attach internal notes, documents, and communication history

### 🧑‍💼 Agents & Agencies

- Real-estate agents, insurance agents, appraisers, and more
- Agencies:
  - Brokerages, insurance agencies, appraisal firms, contracting companies, municipalities
  - Default services, templates, and pricing
  - Custom branding and messaging style
- Attach **multiple agents & agencies** to a single job:
  - Buyer’s agent, listing agent, insurance agent, property manager, contractor, etc.
  - All can be copied on communication and report delivery

### 🧑‍🔧 Contractors & Other Contacts

- Roofers, electricians, HVAC techs, WDO operators, engineers, HOAs, and other third parties
- Link them to jobs and reports, and keep them in the loop as needed

### 📝 Custom Lead Submission Forms

- **Agency-specific lead forms**:
  - Customizable fields per agency or partner
  - Share as links or embed on websites
- Leads flow into:
  - CRM (as contacts)
  - Scheduling pipeline
  - Outbound call queue for follow-up

---

## ☎️ Communication, Call Disposition & Outbound Queue

### Email (SES + Outlook/Graph)

- Transactional & operational email via **Amazon SES**
- Microsoft Graph integration for:
  - Calendar-based scheduling
  - Outlook-linked workflows
- Email templates for:
  - New jobs
  - Reschedules/cancellations
  - Reminders & on-my-way messages
  - Agreements sent/signed
  - Reports available/updated
  - Payment requests & receipts
- Email tracking pixel:
  - Basic “opened/not opened” tracking for key messages

### Phone & SMS (Twilio)

- **Click-to-call** directly from CRM cards (browser-based)
- Two-way **SMS**:
  - Confirmations
  - Reminders
  - Quick updates

#### Call Disposition & Logging

- Every outbound call can be tagged with:
  - Answered / voicemail / no answer / wrong number / other
  - Detailed notes and next steps
- Full call history per client, agent, or agency
- Call outcomes can trigger:
  - Follow-up tasks
  - Automation rules
  - Inclusion or removal from call queues

#### SMS History & Logging

- Threaded SMS logs per contact
- Status tracking where available (queued/sent/delivered/failed)
- View SMS history alongside email, notes, and job history

#### Outbound Call Queue

- Build prioritized call lists from:
  - New leads
  - Unconfirmed appointments
  - Past-due invoices
  - Cold/warm lead campaigns
  - Agency follow-ups
- Work the queue from inside the app:
  - Click-to-call
  - Save disposition
  - Auto-advance to the next contact
- Great for:
  - Booking more jobs
  - Re-engaging agents/agencies
  - Collections follow-up
  - Sales and retention campaigns

---

## ⚙️ Automation Rules

- Event-driven automation:
  - On new/updated/canceled jobs
  - On agreements sent/signed
  - On report ready/published
  - On payment or invoice changes
  - On call/SMS events or lead status changes
- Conditions:
  - Service type
  - Agency or contact type
  - Location (zone, city, ZIP, etc.)
  - Disposition or lead status
  - Time-based triggers
- Actions:
  - Send email/SMS
  - Add to outbound call queue
  - Notify staff
  - Kick off custom logic (hooks/integrations)

---

## 🧰 Equipment & Asset Tracker

- Maintain an inventory of:
  - Tools, ladders, meters
  - Drones, cameras, tablets, laptops
  - Printers and office gear
- Assign items to:
  - Individual inspectors/techs
  - Offices or vehicles
- Track:
  - Check-in/check-out history
  - Which gear was on which job
  - Responsibility and loss/damage trends

---

## 🏠 Property, Permits, Maps & Weather

### BuildFax & RentCast

- **BuildFax** (where licensed):
  - Pull permit history and property details
- **RentCast**:
  - Property/market data for context
- Cached property data:
  - Reduce external API calls
  - Increase speed
  - Lower costs

### Maps

- **Google Maps** + **Apple Maps**:
  - Map jobs and routes
  - Launch navigation in one click
  - Visual overview of your pipeline

### Weather

- Weather integration:
  - Capture current conditions for a job’s time/location
  - Lock conditions after the job for accurate record-keeping
  - Optional display in reports and job details

---

## 🗂 Documents, Attachments & Permits

- Upload:
  - PDFs, images, and other supporting files
- Attach to:
  - Entire inspection/jobs
  - Specific sections
  - Individual findings
- Automatically attach permit records:
  - Pull from BuildFax and link them to appropriate parts of the report
- Keep everything:
  - In one place
  - Linked directly to the job and related stakeholders

---

## 🧾 Report Writer, Template Builder & Narrative Library

### Structure & Editing

- Hierarchy:
  - **Sections → Components → Findings**
- Required vs optional items
- Template order preserved in the live report
- **TinyMCE** everywhere for rich text
- Severity levels:
  - Minor / maintenance
  - Major
  - Material / safety
- Extra metadata:
  - Location tags
  - Contractor type
  - Cost estimate toggles
- Inline media:
  - Photos, videos, captions

### AI Integration

- AI helps with:
  - Drafting narratives
  - Rewriting for clarity or tone
  - Summarizing long reports for clients
  - Suggesting potential issues or missing context
- Optional and designed to speed up, not replace, professional judgment

### Narrative Library

- Built-in and custom narrative libraries:
  - Import via CSV / XLS / XLSX
- Tag narratives:
  - System, severity, location, trade, etc.
- Quick insert from the library while editing findings

---

## 🏝 Florida Insurance & Custom Forms

Even though this is not “Florida-only”, it supports **custom Florida inspection workflows**, including:

- Four-point inspections
- Wind mitigation (OIR-B1-1802)
- Other insurance and lender forms via custom templates

Features:

- Form-aware editors:
  - Mapped checkbox/radio/input fields
- Full PDF support that matches carrier expectations
- Ability to build additional private or municipal templates
- Use the same system for:
  - Private inspectors
  - Municipal inspectors
  - Insurance-only inspection teams

---

## 📄 Full & Summary Views + PDF Exports

- **Full report**:
  - All sections, components, media, notes
- **Summary view**:
  - Filtered to key/severe issues
- PDFs:
  - Full report PDF
  - Summary-only PDF
  - Lender/insurance-specific PDFs (e.g. four-point, wind mitigation)
- Served from S3 (optionally via Cloudflare), accessible via secure UUID links

---

## 📱 PWA & Offline Usage

- Progressive Web App:
  - Install on Android, iOS (via Safari), and desktop browsers
- Behaves like a native app:
  - Home screen icon
  - Launch full-screen
- Offline-aware:
  - Work on-site with intermittent connectivity
  - Sync changes and uploads once back online

---

## 🌍 Adaptable to Many Industries

InspectionPress is intentionally generic under the hood. With custom templates, services, and workflows, it can be used for:

- Home & building inspectors  
- **Real-estate appraisers**  
- **Insurance adjusters**  
- **Roofing** companies  
- **Electrical** contractors  
- **HVAC** service & inspections  
- **WDO / pest** inspections  
- **Automotive** inspections (pre-purchase, fleet audits, etc.)  
- Municipal code enforcement, rental inspections, and more  

If your work is:

1. Field-based  
2. Structured (forms, checklists, photos, notes)  
3. Needs PDFs and communication  

…then InspectionPress can be adapted to it.

---

## 🔌 Integrations Overview

- **Cloudflare** – CDN, WAF, edge caching
- **Amazon S3** – File storage for uploads & PDFs
- **Amazon SES** – Transactional email
- **Amazon Lightsail** – Straightforward VPS hosting
- **Microsoft Graph** – Outlook calendar/email integration
- **Twilio** – Voice, SMS, call disposition, outbound call queues, AI campaigns
- **BuildFax** – Permit lookup with caching
- **RentCast** – Property/rent data with caching
- **Weather APIs** – Inspection-time weather conditions
- **Google Maps & Apple Maps** – Mapping & navigation

---

## ⚙️ System Requirements

### Server

- Ubuntu Server **20.04+** (22.04+ recommended)
- Nginx
- PHP **8.1+** (8.2+ recommended) with common extensions:
  - `mbstring`, `openssl`, `pdo_mysql`, `gd`, `curl`, `zip`, `intl`, `fileinfo`, `json`
- MariaDB **10.5+** (or MySQL 8+)
- Node.js **18+**
- npm or yarn
- Composer **2+**

### Background Tasks

InspectionPress uses Laravel’s scheduler and queue system for:

- Email sending
- PDF generation
- Imports & bulk jobs
- External API integrations
- Time-based automations
- Outbound call queue processing

You should run the scheduler and at least one queue worker using your preferred process manager (cron, systemd, Supervisor, etc.), following standard Laravel best practices.

### Storage & External Services

- Amazon S3 bucket for uploads & reports
- Amazon SES for email
- (Optional) Cloudflare in front of app and/or S3
- Microsoft Graph app registration
- Twilio account & numbers for calls/SMS
- BuildFax, RentCast, and Weather API credentials as needed
- Google Maps API key and optional Apple Maps deep-linking configuration

---

## 📜 License & Warranty

InspectionPress is released under the **GNU General Public License (GPL)**.

You are free to:

- Use it for commercial or non-commercial purposes  
- Study, modify, and extend the code  
- Redistribute original or modified versions under GPL terms  

**No Warranty**

This software is provided **as-is**, with **no warranty expressed or implied**, including but not limited to warranties of merchantability, fitness for a particular purpose, or noninfringement. There are almost certainly bugs, edge cases, and rough edges. You are responsible for:

- Validating the system for your use case  
- Complying with local laws, regulations, and insurance/carrier requirements  
- Maintaining backups and disaster recovery plans  

---

## 💡 In Short

InspectionPress is:

- A heavily automated **field operations OS**
- Built from real-world frustration with “good enough” tools
- Designed to be bent into shape for **inspectors, appraisers, adjusters, and contractors**
- Open, extensible, and **fully GPL**

Use it as the backbone of your own business, offer it as a managed solution, or fork it into something new. Just test it, expect bugs, and contribute back if you can.
