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

InspectionPress was born out of frustration with existing tools:

- Per-inspection pricing and rigid licensing  
- Weak support for insurance and specialty forms (including Florida four-point & wind mitigation)  
- Limited automation and clumsy APIs  
- Poor handling of real-world team workflows (availability, zones, agencies, call queues, etc.)  
- A general feeling that you’re renting *someone else’s* tool instead of owning your own stack

This project is an attempt to fix that:

- **Self-hosted** – you own the data, the hosting, and the knobs  
- **GPL-licensed** – fork it, bend it, ship it, as long as you respect the GPL  
- **Automation- and API-friendly** – built to integrate and extend, not wall things off  
- **Field-first** – focused on people who live in this software all day, not casual users  

> **Honest status:** This is a work-in-progress. There are almost certainly bugs, sharp edges, and missing guardrails. It is provided **as-is, with no warranty expressed or implied**. Test thoroughly, review the code, and contribute fixes if you can.

---

## ✨ High-Level Overview

InspectionPress is a full-stack field operations platform for:

- Inspectors (home, building, insurance, WDO, HVAC, etc.)
- Appraisers and insurance adjusters
- Contractors (roofing, electrical, HVAC, specialty trades)
- Anyone who sends people to locations, fills out structured forms, and produces reports/PDFs

Core capabilities:

- **Scheduling & availability** with inspector/tech auto-assignment
- **Service areas & zones** with distance and region rules
- **Service categories** and **agency-based service catalogs**
- **Dynamic pricing** with custom surcharges (date, time, location, turnaround, etc.)
- **Full CRM**: clients, agents, agencies, contractors, and leads
- **Call disposition, outbound call queues, and enhanced SMS logging**
- **Pre-defined messages** with merge fields (email/SMS/internal)
- **UUID-based email routing** with auto-attachment to inspections
- **Property, permit & weather integrations** (BuildFax, RentCast, weather APIs)
- **Custom inspection/report templates** (including Florida four-point & wind mitigation)
- **Advanced report writer** with AI narration & narrative libraries
- **Equipment & asset tracking**
- **Document uploads & automatic permit attachments**
- **Time-stamped office notes & internal commentary**
- **Custom lead submission forms per agency**
- **PWA** for offline and mobile-first usage
- **Google Maps & Apple Maps integration**

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

### 👥 User, Role & Team Management

- Unlimited **users** and **inspectors/field staff**
- Role-based access control with granular permissions
- Inspector/tech-specific settings:
  - Availability (days of week, time windows)
  - Service areas & zones
  - Travel radius and overflow rules (max miles out of zone, minimum invoice, etc.)
- Company branding:
  - Logos
  - Report headers/footers
  - Email signatures and footers

### 🧾 Time-Stamped Office Notes

- Internal, time-stamped notes on:
  - Inspections / jobs
  - Clients
  - Agents / agencies
  - Equipment and other entities
- Keeps a clear internal history of decisions, escalations, and conversations

---

## 📦 Services, Service Categories & Agency-Based Services

### Services & Categories

- Unlimited **services**:
  - Home/building inspections
  - Insurance inspections (four-point, wind mitigation, roof-only, etc.)
  - Appraisal-style services
  - WDO/pest inspections
  - HVAC, electrical, plumbing, and trade-specific inspections
  - Adjuster/claims inspections
  - Automotive/fleet inspections
  - Any custom service you define
- **Service categories**:
  - Group services into logical families (e.g. “Home”, “Insurance”, “Add-ons”, “Commercial”)
  - Configure category defaults for public schedulers and portals
  - Control which categories appear for which audiences (clients vs agencies vs internal)

### Agency-Based Services

- Per-agency service catalogs:
  - Restrict which services a given agency can book
  - Define agency-specific bundles or pre-configured packages
  - Attach agency-specific templates (e.g. preferred pre-acquisition form)
- Per-agency pricing and rules:
  - Special rates and discount structures
  - Different available time windows
  - Custom agreements and messaging
- Agency portals:
  - Agency-branded scheduling pages
  - Lead submission forms and “request an inspection” flows scoped to that agency

---

## 💵 Dynamic Pricing & Custom Surcharges

- Base price per service and per bundle
- Optional add-ons and upsell services
- Surcharge rules driven by:
  - **Date** (holidays, busy season)
  - **Time of day** (evenings, early mornings)
  - **Day of week** (weekends vs weekdays)
  - **ZIP / city / county / zone**
  - **Distance** from inspector/home office (mileage tiers)
  - **Property size** (square footage bands)
  - **Property age** (older homes, premium pricing)
  - **Turnaround time** (same-day or 24-hour rush)
- Agency-specific overrides:
  - Flat rates for key partners
  - Special bundles for recurring clients

---

## 📑 Templates & Report Types

- Unlimited templates:
  - Home inspections
  - Insurance inspection forms
  - Appraisal checklists
  - WDO and moisture/termite-specific templates
  - HVAC/electrical/plumbing inspections
  - Pre-purchase automotive inspection templates
  - Municipal/code enforcement checklists
- **Custom Florida inspection support**:
  - Four-point inspections
  - Wind mitigation (OIR-B1-1802) with full carrier-compatible PDF output
- Template scopes:
  - Private templates (per inspector/team)
  - Company-wide templates
  - Agency-specific templates
- Import templates:
  - CSV / XLS / XLSX
- Sample templates included so you can start quickly and customize from there

---

## 📇 CRM: Clients, Agents, Agencies, Contractors & Leads

### Clients / Customers

- Full client profiles:
  - Contact info, tags, custom fields
  - Property history
  - Inspection/job history
- Bulk imports for clients from CSV/XLS(X)
- Internal notes, documents, and communication history

### Agents & Agencies

- Real-estate agents, insurance agents, appraisers, and partner contacts
- Agency records for:
  - Brokerages
  - Insurance agencies and carriers
  - Appraisal firms
  - Contractors
  - Municipal or institutional partners
- For each agency:
  - Default services, templates, pricing, and agreements
  - Custom scheduling URLs and lead forms
  - Agency-specific communication and pre-defined messages
- Attach multiple agents & agencies to a single job:
  - Buyer’s agent, listing agent, insurance agent, adjuster, property manager, etc.
  - All can be copied on communications and receive UUID-based access links

### Contractors & Other Contacts

- Roofers, electricians, HVAC techs, pest/WDO operators, engineers, HOAs, etc.
- Easily include them in communication threads and document sharing

### Leads & Agency Lead Forms

- Custom **lead submission forms** per agency:
  - Embed or link an agency-branded lead form
  - Control fields and required data per agency or partner
- Leads flow into:
  - CRM (as contacts)
  - Scheduling pipeline
  - Outbound call queues and automation rules

---

## ☎️ Communication, Pre-Defined Messages & Call Queue

### Pre-Defined Messages & Merge Tags

- Central library of **pre-defined messages** for:
  - Email
  - SMS
  - Internal notes/snippets
- Rich merge field support:
  - Client details, inspection details, property info
  - Agency-specific phrases and signatures
  - UUID-based links for reports, agreements, and payment pages
- Use pre-defined messages:
  - When sending transactional communications
  - Inside call disposition workflows
  - Within automations

### UUID-Based Email Routing & Auto-Attachments

- Each inspection/job can expose a **UUID-based email address or token**:
  - Used as reply-to and/or CC in communications
  - Ensures replies are mapped back to the correct job
- Inbound messages using that UUID:
  - Can be associated with the matching inspection/job
  - Attachments (PDFs, photos, etc.) can be auto-linked to the record
- Result: replies, extra forms, and supporting documents land in the right place without manual sorting

### Email (SES + Outlook/Graph)

- Transactional & operational email via **Amazon SES**
- Optional use of Microsoft Graph:
  - Calendar-based scheduling
  - Outlook-based mail flows
- Templates for all common workflows:
  - New job scheduled
  - Reschedule/cancel
  - Reminder / “on my way”
  - Agreements sent/signed
  - Report ready/updated
  - Payment requested/received
- Email tracking pixel for basic open-tracking on key messages

### Phone & SMS (Twilio)

- Browser-based **click-to-call** from CRM cards
- Two-way **SMS**:
  - Confirmation, reminders, agent/client updates

#### Call Disposition & Logging

- Per-call disposition:
  - Answered / Voicemail / No answer / Wrong number / Other
  - Free-form notes
- Rich logging:
  - View all calls per client/agent/agency/job
  - Combine with office notes, emails, and SMS threads

#### Outbound Call Queue

- Build **call queues** from:
  - New leads
  - Unconfirmed appointments
  - Past-due invoices
  - Lost/quiet agents and agencies
- Work the queue:
  - One-click dialing
  - Save disposition and notes
  - Auto-advance to the next contact
- Combine with automations:
  - Add/remove contacts from queues based on behavior and status

#### SMS History & Logging

- Threaded SMS view at the contact or inspection level
- Status awareness (where available):
  - Queued, sent, delivered, failed

---

## ⚙️ Automation Rules

- Triggered on:
  - Job scheduling, rescheduling, or cancellation
  - Agreement sent/viewed/signed
  - Report created/published/updated
  - Payment events and invoice status changes
  - Call disposition and lead status changes
- Conditions:
  - Service type
  - Agency, category, or region
  - Price, distance, or turnaround time
  - Lead or job status, call outcomes, etc.
- Actions:
  - Send email/SMS
  - Add to outbound call queue
  - Notify internal team members
  - Tag contacts or jobs for reporting
  - Call custom code hooks/integrations

---

## 🧰 Equipment & Asset Tracker

- Inventory management for:
  - Tools, ladders, meters
  - Drones, cameras, mobile devices
  - Laptops, printers, office gear
- Assign assets to:
  - Inspectors/techs
  - Offices, trucks, or storage locations
- Track:
  - Check-in/check-out events
  - Which inspections/jobs used which gear
  - Responsibility for lost/damaged equipment

---

## 🏠 Property, Permits, Maps & Weather

### BuildFax & RentCast

- **BuildFax** integration:
  - Pull permit history and property details (where licensed)
- **RentCast** integration:
  - Property information and market/rent context
- Caching layer:
  - Reduces API calls
  - Improves performance
  - Cuts external API costs

### Maps

- **Google Maps** and **Apple Maps**:
  - Visualize inspection/job locations
  - Launch navigation
  - See neighborhood context

### Weather

- Weather integration:
  - Capture conditions near job time and location
  - Lock conditions once the job is complete
  - Optional inclusion on reports for documentation and risk context

---

## 🗂 Documents, Attachments & Permits

- Upload support for:
  - PDFs, images, and other common doc types
- Attach documents to:
  - Jobs/inspections
  - Individual sections
  - Specific findings
- Auto-attach:
  - BuildFax permit records to relevant report sections
  - Inbound email attachments (via UUID routing) to the correct job or contact
- All documentation ends up:
  - In one place
  - Linked to the correct job and stakeholders

---

## 🧾 Report Writer, Template Builder & Narrative Library

### Structure & Editing

- Hierarchy:
  - **Sections → Components → Findings**
- Required vs optional content
- Template ordering enforced in live reports
- **TinyMCE** for rich text everywhere
- Severity levels:
  - Minor / Maintenance
  - Major
  - Material / Safety / Immediate
- Additional metadata:
  - Location tags (e.g. “North elevation”, “Attic – above master”)
  - Contractor/trade tags (roofing, electrical, HVAC, etc.)
  - Cost estimate toggles and flags
- Media:
  - Inline photos and videos with captions
  - Galleries and summaries

### AI Integration

- AI-assisted:
  - Narrative generation and refinement
  - Simplification or expansion for different audiences
  - Summaries for clients, agents, or carriers
- Designed to enhance human judgment, not replace it

### Narrative Library

- Built-in narrative patterns for common defects & scenarios
- Import your own narrative libraries:
  - CSV / XLS / XLSX
- Tag narratives:
  - System, severity, location, trade, etc.
- In-editor search and insert:
  - Pull the right narrative into a finding in seconds

---

## 🏝 Custom Florida Inspections & Other Forms

Support for **custom Florida inspections**, including:

- Four-point inspection forms
- Wind mitigation (OIR-B1-1802)
- Other carrier and municipality forms via the template system

Key features:

- Form-aware editors:
  - Mapped inputs, checkboxes, and radios
- Full PDF output:
  - Structured to match carrier expectations
- Suitable for:
  - Private inspectors
  - Municipal inspectors
  - Insurance-only inspection teams
  - Any region that needs specialty forms

---

## 📄 Full & Summary Views + PDF Exports

- **Full report view**:
  - Everything (sections, findings, media, notes)
- **Summary view**:
  - Filtered to key severities and categories
- PDFs:
  - Full report PDFs
  - Summary-only PDFs
  - Specialty form PDFs (e.g. four-point, wind mitigation)
- Delivery:
  - Stored on S3 (optionally via Cloudflare)
  - Delivered via secure UUID-based links
  - No login required for clients, agents, or carriers

---

## 📱 PWA & Offline Usage

- Progressive Web App:
  - Installable on Android, iOS (via Safari), and desktop browsers
- Behaves like a native app:
  - Home screen icon
  - Full-screen experience
- Offline-aware:
  - Capture data and photos with limited connectivity
  - Syncs when back online

---

## 🌍 Adaptable to Many Industries

InspectionPress is not limited to one niche. It is built to adapt via:

- Custom services
- Service categories
- Templates and forms
- Agency and pricing rules
- Automations and call queues

Common use cases:

- Home & building inspections  
- Real-estate **appraisals**  
- Insurance **adjusting** and claim inspections  
- **Roofing** inspections and scopes  
- **Electrical** and **HVAC** evaluations  
- **WDO / pest** inspections  
- **Automotive** inspections (pre-purchase, fleet, specialty)  
- Municipal/rental/code inspections  

If your workflow involves field visits, structured checklists, media, and reports, InspectionPress can be bent into shape.

---

## 🔌 Integrations Overview

- **Cloudflare** – CDN, WAF, edge caching
- **Amazon S3** – File storage (photos, docs, PDFs)
- **Amazon SES** – Outbound email
- **Amazon Lightsail** – Simple VPS hosting
- **Microsoft Graph** – Outlook calendar/email integration
- **Twilio** – Voice, SMS, call disposition, outbound queues, AI campaigns
- **BuildFax** – Permit data with caching
- **RentCast** – Property/rent data with caching
- **Weather APIs** – Job-time weather conditions
- **Google Maps & Apple Maps** – Maps and navigation

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

InspectionPress uses the Laravel scheduler and queue system for:

- Email sending  
- PDF generation  
- Imports & migrations  
- API integrations & syncs  
- Time-based automations  
- Outbound call queue processing  

You should run the scheduler and at least one queue worker using your preferred process manager (cron, systemd, Supervisor, etc.), following standard Laravel practices.

### Storage & External Services

- Amazon S3 bucket for uploads & report PDFs
- Amazon SES credentials for email
- (Optional) Cloudflare in front of app and/or S3
- Microsoft Graph app registration
- Twilio account and phone numbers
- BuildFax, RentCast, Weather API credentials as needed
- Google Maps API key and optional Apple Maps deep-linking

---

## 📜 License & Warranty

InspectionPress is released under the **GNU General Public License (GPL)**.

You may:

- Use it for commercial or non-commercial purposes  
- Study the source, modify it, and extend it  
- Redistribute original or modified versions, as long as you comply with the GPL  

**No Warranty**

This software is provided **as-is**, with **no warranty expressed or implied**, including (but not limited to) any implied warranties of merchantability or fitness for a particular purpose. Use it at your own risk. You are responsible for:

- Verifying correctness and suitability for your workflows  
- Complying with local laws, regulations, and carrier requirements  
- Handling backups, security, and disaster recovery  

---

## 💡 In Short

InspectionPress is:

- A deeply configurable **field operations OS**
- Built out of real-world frustration with existing software
- Designed for inspectors, appraisers, adjusters, and contractors
- Packed with:
  - Agency-based services and service categories  
  - Call queues, dispositions, and pre-defined messages  
  - UUID-based email routing and auto-attachments  
  - Advanced templates, automation, and PWA support  

Use it as the backbone of your own operation, turn it into a product, or fork it into something new. Just expect bugs, test thoroughly, and if you improve it—consider sending a pull request.
