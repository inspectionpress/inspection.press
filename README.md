<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Open-source, self-hosted field inspection, reporting, CRM, communications, and scheduling OS
</p>

<p align="center">
  <sub>Unlimited inspectors · Unlimited inspections · Unlimited templates & report types · PWA · Twilio · SES · SNS · S3 · Outlook/Graph · BuildFax · RentCast · ASCE</sub>
</p>

---

## Why This Exists

InspectionPress was born out of frustration with existing tools:

- Per-inspection pricing and rigid licensing  
- Weak support for insurance and specialty forms, especially Florida workflows  
- Limited automation and clumsy APIs  
- Poor support for real-world team operations like zones, availability, agencies, assignments, and communications  
- A general feeling that you are renting *someone else’s* platform instead of owning your own stack  

This project is an attempt to fix that:

- **Self-hosted** – you own the data, the hosting, the backups, and the knobs  
- **GPL-licensed** – fork it, bend it, ship it, as long as you respect the GPL  
- **Automation- and API-friendly** – built to integrate and extend, not wall things off  
- **Field-first** – focused on people who live in this software all day, not casual users  

> **Honest status:** InspectionPress is a work-in-progress, but it is also **working in production**. Real inspections are being scheduled, documented, edited, and delivered through it right now. There are still bugs, sharp edges, and fast-moving areas of development. It is provided **as-is, with no warranty expressed or implied**. Test thoroughly, review the code, and use the issue tracker for bugs, regressions, and feature requests.

---

## ✨ High-Level Overview

InspectionPress is a full-stack field operations platform for:

- Inspectors (home, building, insurance, WDO, roofing, specialty trade, etc.)
- Appraisers and insurance adjusters
- Contractors and field teams who need structured forms, media capture, PDFs, and operational records
- Anyone who sends people to locations, documents conditions, communicates with stakeholders, and produces reports

Core capabilities include:

- **Scheduling & availability** with inspector auto-assignment workflows
- **Service areas & zones** with distance and region rules
- **Service categories** and **agency-based service catalogs**
- **Dynamic pricing** with modifiers and surcharges
- **Full CRM** for customers, agents, agencies, and related contacts
- **Browser dialer, SMS, call disposition, call queues, and communication threads**
- **Universal inbox direction for SMS and email tied to jobs and contacts**
- **Pre-defined messages** with merge fields for email, SMS, and internal use
- **UUID-based email routing** with auto-attachment to inspections
- **Property, permit, weather, and map integrations**
- **Custom inspection/report templates** including Florida four-point and wind mitigation
- **Advanced report writer** with AI-assisted narratives, narrative library tooling, and reference-photo workflows
- **Rapid-fire field media capture** and specialty image tools
- **Document uploads, permit attachment, and ASCE image attachment**
- **Time-stamped notes and operational commentary**
- **PWA** and mobile-first workflows for field use

---

## 🚀 Production Highlights

InspectionPress is broader than any single module, but several specialty features deserve specific mention because they are active in real production workflows.

### Wind Mitigation 2026

The **Wind Mitigation 2026** workflow is one of the flagship specialty tools in the platform.

Current work includes:

- Dedicated **2026 wind mitigation editor**
- SVG-based form editing for high form fidelity
- Mapped inputs, radios, checkboxes, and conditional form logic
- Section-specific helper tools and mobile-friendly workflows
- Rapid photo capture and specialty image assistance inside the editor
- Carrier-style PDF rendering and ongoing specialty output refinements

This is important, but it is part of a much larger inspection and reporting system, not the whole story.

### ASCE Integration

**ASCE is live, working, and in production.**

InspectionPress uses ASCE-related reference support in active specialty workflows, especially where structural and wind-related documentation benefits from standards-backed reference material.

Current usage includes:

- Pulling ASCE-related reference material into inspection workflows
- Attaching **ASCE images and supporting content** to inspection records
- Reducing manual lookup time in the field and during report writing
- Supporting more defensible documentation in wind- and roof-related work

### Roof Slope Assistant

The **Roof Slope Assistant** is designed to help inspectors make faster and more consistent roof-related decisions directly from captured imagery.

Current and recent work includes:

- Image-based roof-slope assistance inside specialty editors
- Level-assist and sample-based workflow support
- Tighter form linkage for slope-related answers
- Ongoing refinement of capture behavior, thresholds, overlays, and usability

The goal is practical field assistance, not just a visual overlay.

---

## 🧱 Architecture & Stack

| Layer        | Tech / Service                                                                 |
| ------------ | ------------------------------------------------------------------------------ |
| OS           | Ubuntu Server 20.04+ (22.04+ recommended)                                      |
| Web server   | Nginx                                                                          |
| Runtime      | PHP 8.1+ (8.2+ recommended)                                                    |
| DB           | MariaDB 10.5+ (or MySQL 8+ compatible)                                         |
| Frontend     | Node.js 18+, Vite, Tailwind CSS, Alpine.js, PWA                                |
| Package mgrs | Composer 2+ (PHP), npm / yarn (JS)                                             |
| Hosting      | Amazon Lightsail (or any similar VPS)                                          |
| Storage      | Amazon S3 (optionally fronted by Cloudflare)                                   |
| Email        | Amazon SES                                                                     |
| Messaging    | Amazon SNS                                                                     |
| Identity     | Microsoft Graph (Outlook calendar/email integration)                           |
| Telephony    | Twilio (voice, SMS, dialer, call logging)                                      |
| Data APIs    | BuildFax, RentCast, ASCE, Weather API, Google Maps, Apple Maps                 |

---

## 🛠 Admin & Company Features

### 👥 User, Role & Team Management

- Unlimited **users** and **inspectors / field staff**
- Role-based access control with granular permissions
- GUI-driven permissions direction and team management tools
- Inspector-specific settings:
  - Availability (days of week, time windows)
  - Service areas & zones
  - Travel radius and overflow rules
  - Assignment and scheduling behavior
- Company branding:
  - Logos
  - Report headers/footers
  - Branding settings for customer-facing output

### 🧾 Time-Stamped Office Notes

- Internal, time-stamped notes on:
  - Inspections / jobs
  - Customers
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
  - WDO / pest inspections
  - HVAC, electrical, plumbing, and trade-specific inspections
  - Adjuster / claims inspections
  - Specialty and custom-defined services
- **Service categories**:
  - Group services into logical families
  - Configure category defaults for public schedulers and portals
  - Control which categories appear for internal teams vs outside users

### Agency-Based Services

- Per-agency service catalogs:
  - Restrict which services a given agency can book
  - Define agency-specific bundles or packages
  - Attach agency-specific templates where needed
- Per-agency pricing and rules:
  - Special rates and discount structures
  - Different available time windows
  - Custom agreements and messaging
- Agency-branded workflows:
  - Scheduling pages
  - Lead forms
  - Communication and service restrictions

---

## 💵 Dynamic Pricing & Custom Surcharges

- Base price per service and per bundle
- Optional add-ons and upsell services
- Modifier and surcharge rules driven by:
  - **Distance** from inspector or home base
  - **Property size** (square footage bands)
  - **Property age**
  - **Region / ZIP / county / zone**
  - **Day of week**
  - **Time of day**
  - **Turnaround time**
  - Agency-specific overrides and special cases
- Flat-rate overrides and special partner pricing

---

## 📑 Templates & Report Types

- Unlimited templates:
  - Home inspections
  - Insurance inspection forms
  - Appraisal checklists
  - WDO and moisture / termite-specific templates
  - HVAC / electrical / plumbing inspections
  - Roofing and other specialty trade inspections
  - Custom field forms and internal workflows
- **Florida inspection support**:
  - Four-point inspections
  - Wind mitigation (including **OIR-B1-1802** workflows)
- Template scopes:
  - Private templates
  - Company-wide templates
  - Agency-specific templates
- Import templates from:
  - CSV
  - XLS
  - XLSX

---

## 🧾 Report Writer, Narrative Library & Specialty Workflow Tools

The report writer is the core of InspectionPress. It is built for structured inspection documentation with media-heavy workflows and specialty-form support.

### Structured Report Editing

- Hierarchy:
  - **Sections → Components → Findings**
- Required vs optional content
- Rich-text editing for narratives and comments
- Severity levels such as:
  - Minor
  - Major
  - Material / Safety Concern
- Summary and filtered report views
- Public UUID-based report access
- PDF generation for both standard reports and specialty forms

### AI Report Narratives

InspectionPress includes **AI-assisted report narrative workflows** to help inspectors work faster and maintain more consistent language.

Use cases include:

- Drafting or refining findings
- Rewording technical observations for different audiences
- Improving consistency across inspectors
- Speeding up narrative-heavy reporting work without replacing inspector judgment

### Narrative Library

The **narrative library** is a major production feature, not an afterthought.

Current workflow includes:

- Centralized reusable narrative content
- Fast insertion of prewritten language into findings
- Support for company-standard wording
- Consistency across report types and inspectors
- A foundation for guidance, specialty content, and internal standards

### Reference Photos

InspectionPress is not limited to text-only narratives.

The platform supports **reference-photo workflows** that help inspectors compare what they are seeing in the field against reusable image-backed guidance.

Current and active use includes:

- Reference photos tied to specialty workflows
- Visual guidance alongside narrative content
- Read-only reference modal patterns for in-form help
- A reusable design direction for future specialty guidance tools

### Rapid Fire Camera

The **Rapid Fire Camera** workflow is designed for speed and ergonomics in the field.

Current work includes:

- Fast photo capture from within editors
- Landscape and portrait support
- Ongoing UI refinement for left- and right-handed field use
- Tight integration with report and specialty workflows

### Intervention, Flagging & Recommended Actions

InspectionPress is being shaped to do more than store observations.

Active reporting workflow includes support for:

- **Intervention** patterns that help direct the inspector through complex specialty flows
- **Flagging** conditions that need attention, escalation, or follow-up
- **Recommended actions** tied to findings and summaries
- Better structure for surfacing important concerns in downstream communication and output

### Attachments, Permit Support & ASCE Image Attachment

InspectionPress keeps supporting evidence close to the inspection record.

Current and active workflows include:

- Photo and video attachment at the report level
- Inspection document uploads
- **Permit attachment** workflows
- **ASCE image attachment** workflows
- Public and internal access patterns based on UUIDs and report context

---

## 📇 CRM: Customers, Agents, Agencies, Contractors & Leads

### Customers

- Full customer profiles:
  - Contact info, tags, custom fields
  - Property history
  - Inspection history
- Bulk imports from CSV / XLS / XLSX
- Internal notes, documents, and communication history

### Agents & Agencies

- Real-estate agents, insurance agents, appraisers, and partner contacts
- Agency records for:
  - Brokerages
  - Insurance agencies and carriers
  - Appraisal firms
  - Contractors
  - Other partner organizations
- For each agency:
  - Default services, templates, pricing, and agreements
  - Custom scheduling URLs and lead forms
  - Agency-specific communication and pre-defined messages
- Attach multiple agents or agencies to a single job as needed

### Contractors & Other Contacts

- Roofers, electricians, HVAC techs, pest / WDO operators, engineers, HOAs, and related contacts
- Designed to keep communication and documents attached to the right operational record

### Leads & Agency Lead Forms

- Custom lead submission forms per agency
- Agency-branded lead intake direction
- Leads can flow into:
  - CRM
  - Scheduling pipeline
  - Outbound communication and follow-up workflows

---

## ☎️ Communications, Dialer, SMS, Threads & Universal Inbox

InspectionPress is intended to handle real operational communication, not just report generation.

### Browser Dialer

- Browser-based calling via **Twilio**
- Click-to-call from CRM records and related operational views
- Call handling designed to work inside the platform instead of forcing staff to leave it

### Call Disposition & Logging

- Per-call disposition such as:
  - Answered
  - Voicemail
  - No answer
  - Wrong number
  - Other
- Notes and logging tied back to the relevant record
- Designed for queue-based follow-up and operational history

### SMS Workflows

- Two-way SMS support for clients, agents, and related contacts
- Confirmation, reminder, and operational messaging workflows
- SMS history and threaded message context

### Threads & Universal Inbox

A major goal of InspectionPress is keeping communication attached to the correct job, person, and context.

Current and active workflow includes:

- **Threaded communication history** for SMS and email
- **Universal inbox direction** for bringing email and SMS into one operational view
- Linking conversations back to inspections, customers, agents, and agencies
- Reducing the need to hunt across multiple apps to understand what happened on a job

### Pre-Defined Messages & Merge Tags

- Central library of **pre-defined messages** for:
  - Email
  - SMS
  - Internal snippets
- Rich merge-field support for:
  - Customer details
  - Inspection details
  - Property information
  - UUID-based links for reports, agreements, and payment pages

### UUID-Based Email Routing & Auto-Attachments

- Each inspection / job can expose a **UUID-based email address or token**
- Used as reply-to and/or CC in communications
- Helps route replies back to the correct inspection record
- Email attachments can be auto-linked to the right job or contact record

### Email Delivery & Outlook Integration

- Transactional and operational email via **Amazon SES**
- Messaging-related workflow support via **Amazon SNS**
- Optional Microsoft Graph / Outlook integration for calendar and communication workflows

---

## ⚙️ Automation Rules

- Triggered on:
  - Job scheduling, rescheduling, or cancellation
  - Agreement, report, and delivery events
  - Communication and operational status changes
  - Payment and invoice workflow events
- Conditions can include:
  - Service type
  - Agency, category, or region
  - Price, distance, or turnaround time
  - Job and communication status
- Actions can include:
  - Send email or SMS
  - Add to outbound follow-up workflow
  - Notify team members
  - Apply tags or update operational state

---

## 🧰 Equipment & Asset Tracking

- Inventory management for:
  - Tools, meters, ladders
  - Cameras, drones, mobile devices
  - Office or field equipment
- Assign assets to staff, locations, or workflows
- Track operational accountability and usage history

---

## 🏠 Property, Permits, Maps & Weather

### BuildFax & RentCast

- **BuildFax** integration for permit and property history workflows
- **RentCast** integration for property-related data workflows
- Built to keep external data closer to the inspection record

### Maps

- **Google Maps / Places** integration for address lookup and map-assisted workflows
- **Apple Maps** support for navigation-oriented usage
- Used in scheduling, dispatch, and inspection detail contexts

### Weather

- Weather integration for capturing inspection-time conditions
- Lockable weather context once inspection time is reached or passed
- Useful for documentation, especially in field-sensitive workflows

---

## 🗂 Documents, Attachments & Operational Records

- Upload support for PDFs, images, and other common document types
- Attach documents to:
  - Inspections / jobs
  - Report content
  - Related CRM records
- Permit and specialty-supporting material can be attached to the operational record
- Keeps documentation in one place and tied to context

---

## 📄 Full & Summary Views + PDF Exports

- **Full report view** for complete inspection detail
- **Summary view** focused on key severities and filtered output
- PDFs for:
  - Full reports
  - Summary reports
  - Specialty forms such as four-point and wind mitigation
- Delivery via secure UUID-based links
- No-login access patterns for clients, agents, and other stakeholders where appropriate

---

## 📱 PWA & Offline Usage

- Progressive Web App direction for field use
- Installable on mobile and desktop browsers
- Mobile-focused report editing improvements
- Offline-aware direction for field workflows with inconsistent connectivity

---

## 🌍 Adaptable to Many Industries

InspectionPress is not limited to one niche. It is built to adapt via:

- Custom services
- Service categories
- Templates and specialty forms
- Agency and pricing rules
- Automations and communication workflows

Common use cases include:

- Home and building inspections  
- Insurance inspections  
- Roofing workflows  
- Real-estate appraisals  
- Adjusting and claims documentation  
- HVAC, electrical, plumbing, and specialty trade evaluations  
- WDO / pest workflows  
- Other field services that need structured forms, media, and operational records  

---

## 🔌 Integrations Overview

- **Cloudflare** – CDN, WAF, edge caching
- **Amazon S3** – file storage for photos, docs, and PDFs
- **Amazon SES** – outbound email
- **Amazon SNS** – messaging-related workflows
- **Amazon Lightsail** – simple VPS hosting
- **Microsoft Graph** – Outlook calendar/email integration
- **Twilio** – dialer, voice, SMS, call logging
- **BuildFax** – permit and property-related data
- **RentCast** – property-related data
- **ASCE** – standards-backed structural / wind-related reference support
- **Weather APIs** – job-time weather conditions
- **Google Maps / Apple Maps** – mapping, address, and navigation workflows

---

## 💸 Paid Services & Operating Costs

InspectionPress is open source, but a real production deployment can still involve meaningful third-party costs.

In addition to your **server hosting and infrastructure costs**, paid requirements can include:

- **BuildFax**
- **RentCast**
- **Amazon SES**
- **Amazon SNS**
- **Twilio**
- **ASCE**
- **Amazon S3** and related storage / bandwidth costs
- Optional **Cloudflare** costs depending on your setup
- Maps, geocoding, weather, and related API costs depending on usage

Not every deployment will enable every integration, but production users should expect external paid-service costs on top of normal hosting expenses.

---

## ⚙️ System Requirements

### Server

- Ubuntu Server **20.04+** (22.04+ recommended)
- Nginx
- PHP **8.1+** (8.2+ recommended) with typical Laravel extensions
- MariaDB **10.5+** or MySQL 8+
- Node.js **18+**
- npm or yarn
- Composer **2+**

### Background Tasks

InspectionPress uses the Laravel scheduler and queue system for tasks such as:

- Email sending  
- PDF generation  
- Imports and background processing  
- API integrations and syncs  
- Time-based automations  
- Communication and operational workflows  

You should run the scheduler and at least one queue worker using your preferred process manager.

### Storage & External Services

A typical production deployment may require:

- S3-compatible storage
- Email service credentials
- SMS / voice provider credentials
- API credentials for property, permit, weather, mapping, and ASCE-related services

---

## 🛣 Roadmap & Active Work

InspectionPress is already usable in production, but there is still substantial active development underway.

Key areas of current work include:

- Continued refinement of Wind Mitigation 2026 workflows
- Four-point editor and output improvements
- Deeper narrative-library tooling
- Better reference-photo workflows and reusable specialty modal patterns
- More refinement to rapid-capture and media-heavy field workflows
- Better summary, flagging, intervention, and recommended-action handling
- Expanded scheduling, assignment, pricing, invoicing, and communication workflows
- More polished CRM, permissions, inbox, and operational views
- More consistency across mobile, tablet, and desktop interfaces

---

## 📜 License & Warranty

InspectionPress is released under the **GNU General Public License (GPL)**.

You may:

- Use it for commercial or non-commercial purposes  
- Study the source, modify it, and extend it  
- Redistribute original or modified versions, as long as you comply with the GPL  

**No Warranty**

This software is provided **as-is**, with **no warranty expressed or implied**, including any implied warranties of merchantability or fitness for a particular purpose. Use it at your own risk. You are responsible for:

- Verifying correctness and suitability for your workflows  
- Complying with local laws, regulations, carrier requirements, and professional standards  
- Handling backups, security, and disaster recovery  

---

## 💡 In Short

InspectionPress is:

- A deeply configurable **field operations OS**
- Built out of real-world frustration with existing software
- Already **working in production** while still under active development
- Focused on inspection reporting, specialty forms, CRM, communications, scheduling, and media-heavy workflows
- Designed for teams that want to own their platform, control their data, and keep building on top of open code

Use it as the backbone of your own operation, turn it into a product, or fork it into something new. Just expect bugs, test thoroughly, and if you improve it, consider sending a pull request.
