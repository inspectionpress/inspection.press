<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Open-source field inspection, reporting, CRM, and scheduling platform
</p>

<p align="center">
  <sub>Self-hosted · PWA-ready · Multi-service · Inspection-focused · Built for real-world field workflows</sub>
</p>

---

## Why InspectionPress Exists

InspectionPress was built out of frustration with software that charges per inspection, limits customization, makes specialty forms awkward, and forces companies to work inside somebody else’s box.

This project is aimed at teams that want to own their stack:

- **Self-hosted** and under your control
- **Open source** and intended to be extended
- **Built for inspection operations**, not generic forms
- **Focused on real field workflows** like scheduling, assignment, service-area logic, specialty forms, media-heavy reporting, and partner communication

> **Status note:** InspectionPress is under active development. Some modules are already usable, some are in heavy iteration, and some roadmap items are planned but not finished yet. Expect rough edges, test thoroughly, and use the issue tracker for bugs and feature requests.

---

## What InspectionPress Is

InspectionPress is a full-stack field operations platform for inspection-based businesses and adjacent service teams, including:

- Home inspectors
- Insurance inspection companies
- Wind mitigation and four-point specialists
- Roofers and roofing sales teams
- Appraisers and adjusters
- Contractors and specialty trades
- Any field service business that needs structured forms, media capture, scheduling, PDFs, and CRM

At a high level, InspectionPress combines:

- **Scheduling and dispatch**
- **CRM for customers, agents, and agencies**
- **Dynamic service pricing and modifiers**
- **Template-driven report writing**
- **Specialty inspection form support**
- **Photo, video, and document handling**
- **PDF generation and public share links**
- **Integrations for maps, property data, weather, email, phone, and storage**

---

## Current Product Highlights

### Wind Mitigation 2026 Editor and PDF Output

The **Wind Mitigation 2026** workflow is one of the biggest focal points of the project right now.

Current work includes:

- Dedicated **2026 wind mitigation editor**
- Form-aware UI built specifically around the Florida OIR-B1-1802 workflow
- Mapped fields, checkboxes, radio groups, and section-specific logic
- SVG-driven editing for form fidelity
- Mobile-focused editing improvements for field use
- Sticky top navigation and section-focused workflow improvements
- Per-section hints and reference tools
- Photo capture, annotation, and section-level media handling
- Carrier-style PDF rendering with form-specific output rules
- Ongoing refinements to page rendering, filenames, image pagination, signatures, and specialty field mapping

This is not treated as a generic template. It is being built as a **true specialty form workflow**.

### Roof Slope Assistant

InspectionPress now includes a **roof slope assistant** aimed at helping inspectors make faster and more consistent roof-form decisions.

Current and recent work around this tool includes:

- Visual roof-slope measurement assistance inside the editor
- Level-assist behavior to improve interpretation of the image angle
- Sampling tools that can drive the selected answer in the form
- UI for working directly from captured imagery instead of manual guesswork alone
- Tight coupling with roof-related inspection workflows and specialty forms
- Ongoing refinement of capture behavior, thresholding, and form application logic

The goal is to make the slope workflow more useful in the field, not just add a gimmicky overlay.

### ASCE API Integration

ASCE-related support is a major roadmap emphasis.

Planned direction includes:

- Pulling structural / wind-related reference data into inspection workflows where appropriate
- Supporting better decision assistance for wind-related form completion and roof-related workflows
- Reducing manual lookups when inspectors need standards-based context during reporting

This area is still evolving, but it is important enough to call out prominently because it fits the broader goal of making specialty inspection workflows smarter and more defensible.

---

## Current Features

The following areas are already present in the product in some form and are being actively improved.

### Reporting and Form Workflows

- Template-based report writing
- Section → component → finding hierarchy
- Rich-text editing for narratives
- Findings with severity states such as Minor, Major, and Material / Safety Concern
- Narrative library support
- Summary views and filtered report views
- Public UUID-based report access
- PDF generation for report outputs
- Specialty form support for:
  - Wind mitigation
  - Four-point inspections
- Media support in reports:
  - Photos
  - Captions
  - Annotation workflows
  - Inline video support in key reporting flows

### Scheduling and Inspection Management

- New inspection creation workflows
- Service selection tied to inspections
- Property and inspection detail management
- Unconfirmed inspection handling
- Inspector assignment workflows
- Availability-aware scheduling direction
- Planned and active work around service-area and zone-based assignment

### Pricing and Services

- Service catalog management
- Service categories
- Template-to-service linkage
- Dynamic pricing logic based on factors like:
  - Square footage
  - Property age
  - Distance / mileage
- Add-on service support
- Modifier UI work for inspection pricing behavior

### CRM

- Customer records
- Agent records
- Agency records
- Import workflows for customers, agents, agencies, and templates
- CRM-style detail views and edit pages
- Internal notes and record history direction
- Duplicate merge workflows for contacts

### Invoices, Documents, and Operational Records

- Invoice module groundwork and active build-out
- Inspection-linked and standalone invoice direction
- Document uploads tied to inspections
- PDF storage / sharing workflows
- Public document access patterns through UUID-style links

### Mapping, Property, and Weather

- Google Maps / Places integration work
- Address lookup and map-assisted workflows
- BuildFax integration direction
- RentCast integration direction
- Weather block support for inspection conditions and locked-at-inspection-time weather context

### Admin, Roles, and Permissions

- Admin panel for core modules
- User / employee / inspector management direction
- Roles and permissions support
- GUI-based permissions matrix work
- Branding settings for report headers, footers, and other company-facing output

### Communications and Telephony

- Twilio integration direction for browser-based calling
- Call buttons from CRM views
- SMS / voice workflow direction
- Outlook / Microsoft 365 integration plans for scheduling and communication
- Automated email workflow direction for appointment and report events

### PWA and Mobile-Focused Work

- Progressive Web App direction for the report writer and broader field use
- Mobile-specific editing improvements
- Offline-aware design goals
- Installable, app-like workflow direction for field inspectors

---

## Planned Features and Active Roadmap

InspectionPress is being built as a broad inspection operations platform, not just a single report editor. Major roadmap areas include:

### Specialty Inspection Expansion

- Continued hardening of **Wind Mitigation 2026**
- Continued hardening of **Four Point** form workflows
- Additional Florida and carrier-specific form support
- More inspection-type-specific editors instead of forcing everything through one generic UI

### Smarter Inspection Assistance

- Expanded **ASCE API** usage where it meaningfully supports inspection decisions
- Better standards-aware workflows for wind and roof-related forms
- Continued refinement of roof measurement and classification helpers
- More field-side decision assistance tools that reduce repetitive manual lookup work

### Full Operational Platform Features

- More complete invoice and payment handling
- Square and Stripe payment flows
- Customer and partner portals
- Agent-specific pricing and service visibility
- Region-based pricing and inspector assignment
- More automation around scheduling, reminders, confirmations, and delivery
- Deeper inspection-to-CRM-to-invoice linking

### Communication and Collaboration

- More complete Twilio browser calling
- End-call and call-state improvements across CRM views
- Email templates and notification pipelines
- Outlook / Microsoft 365 calendar integration
- Additional transactional communication workflows

### Data and Integrations

- Continued BuildFax and RentCast improvements
- More robust weather integration for inspection records
- Better document ingestion and attachment workflows
- S3-compatible storage options and cloud backup flexibility

### UX and Platform Polish

- More consistency across specialty modals and editor tools
- Better tablet and mobile layouts
- Cleaner admin UI throughout the platform
- More reusable shared components for form editors and specialty tools

---

## Core Modules

### 1. Inspection Scheduler

InspectionPress is being built to support real scheduling complexity, including:

- Customer creation during scheduling
- Agent / agency linking
- Service-based booking flows
- Property-aware pricing
- Inspector assignment logic
- Availability and duration-aware scheduling direction
- Support for embedded scheduler experiences

### 2. Report Writer

The report writer is one of the central pieces of the platform.

Goals and current direction include:

- Fast narrative entry
- Rich media support
- Better mobile usability
- Template-driven structure
- Severity-based summary workflows
- AI-assisted narrative refinement in the future
- Specialty editors where a generic report builder is not enough

### 3. CRM

InspectionPress treats CRM as part of inspection operations, not a separate afterthought.

Supported or planned records include:

- Customers
- Agents
- Agencies
- Inspectors / employees
- Related communication and inspection history

### 4. Services and Pricing

Services are intended to be flexible enough for:

- Standard home inspections
- Insurance forms
- Add-ons
- Roof-only inspections
- Trade-specific inspections
- Agency-specific service offerings

### 5. Forms and PDFs

The system is designed to support:

- General narrative inspection reports
- Summary reports
- Carrier-style specialty forms
- Exact or near-exact PDF output requirements for real-world use cases

---

## Integrations

Current or planned integrations include:

- **Google Maps / Places** for address and map workflows
- **BuildFax** for permit and property history direction
- **RentCast** for property data direction
- **Weather.gov / weather APIs** for inspection-time conditions
- **Twilio** for browser calling, SMS, and communication workflows
- **Outlook / Microsoft 365 / Graph** for calendar and email direction
- **Square** for payments
- **Stripe** for payments
- **Amazon S3** and S3-compatible storage for files and PDFs

---

## Tech Stack

| Layer | Stack |
| --- | --- |
| Backend | Laravel / PHP |
| Frontend | Blade, Alpine.js, Tailwind CSS, JavaScript |
| Build tools | Vite, Node.js |
| Database | MySQL / MariaDB |
| Storage | Local and S3-compatible storage |
| PDFs / forms | SVG- and template-driven rendering workflows |
| Mobile strategy | PWA-first direction |

---

## Who This Is For

InspectionPress is being built for companies that need more control than typical inspection SaaS platforms allow.

That includes teams doing:

- Home inspections
- Wind mitigations
- Four-point inspections
- Roof inspections
- Insurance inspections
- Contractor field documentation
- Specialty trade evaluations
- Property condition reporting

If your workflow involves field visits, photos, specialty forms, structured findings, scheduling, partner coordination, and PDF delivery, this project is likely relevant.

---

## Development Philosophy

A few themes keep driving this project:

- **Own your stack** instead of renting critical workflow infrastructure
- **Build for actual inspection use** instead of generic forms alone
- **Support specialty forms properly** when they deserve custom workflows
- **Favor field usability** on phones and tablets
- **Keep the door open for automation and integrations**

InspectionPress is opinionated in the sense that it is being built from real inspection workflow pain points, but flexible in the sense that the platform is meant to be extended.

---

## Contributing and Feedback

This project is a work in progress and feedback matters.

Please use the issue tracker for:

- Bugs
- Workflow issues
- Inspection-specific edge cases
- Form fidelity problems
- UI / UX suggestions
- Feature requests

Special attention is especially helpful on:

- Wind Mitigation 2026 behavior and PDF fidelity
- Roof slope assistant behavior and usability
- Specialty form workflows
- Tablet and mobile field use
- Integration edge cases

---

## License and Warranty

InspectionPress is released under the **GNU General Public License (GPL)**.

You may use it, study it, modify it, and redistribute it in accordance with the GPL.

**No warranty is provided.**

Use the software at your own risk. Verify all calculations, generated PDFs, workflow behavior, and regulatory or carrier-specific requirements before relying on it in production.

---

## In Short

InspectionPress is evolving into a full inspection operations platform with strong emphasis on:

- **Wind Mitigation 2026**
- **Four Point workflows**
- **Roof slope assistance**
- **Specialty-form PDF output**
- **Scheduling, CRM, and pricing in one stack**
- **Self-hosted, open, inspection-first architecture**

If you want an inspection platform you can actually control, extend, and adapt to your business, that is the direction of this project.
