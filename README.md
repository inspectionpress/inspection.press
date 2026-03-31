<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> · Open-source field inspection, reporting, CRM, and scheduling platform
</p>

<p align="center">
  <sub>Self-hosted · Production-used · Inspection-focused · PWA-friendly · Built for real-world field workflows</sub>
</p>

---

## Why InspectionPress Exists

InspectionPress was built out of frustration with software that charges per inspection, limits customization, handles specialty insurance forms poorly, and forces inspection companies to adapt their workflow to someone else’s platform.

This project is for teams that want to own their stack:

- **Self-hosted** and under your control
- **Open source** and intended to be extended
- **Built for inspection operations**, not generic forms
- **Focused on real field workflows** like scheduling, assignment, service-area logic, media-heavy reporting, specialty forms, CRM, and partner communication

---

## Production Status

InspectionPress is a **work in progress**, but it is also **working in production**.

That means two things are true at the same time:

- Real inspections are being scheduled, edited, documented, and delivered through the platform
- The codebase is still evolving quickly, and some areas are under active refinement

Expect rough edges, changing interfaces, and ongoing cleanup. Use the issue tracker for bugs, regressions, and feature requests.

---

## What InspectionPress Is

InspectionPress is a full-stack field operations platform for inspection-based businesses and adjacent service teams, including:

- Home inspectors
- Insurance inspection companies
- Wind mitigation and four-point specialists
- Roofers and roofing sales teams
- Appraisers and adjusters
- Contractors and specialty trades
- Any field service business that needs structured forms, media capture, scheduling, PDFs, CRM, and operational records

At a high level, InspectionPress combines:

- **Scheduling and dispatch**
- **CRM for customers, agents, and agencies**
- **Dynamic service pricing and modifiers**
- **Template-driven report writing**
- **Specialty inspection form workflows**
- **Photo, video, and document handling**
- **PDF generation and public share links**
- **Operational integrations for maps, weather, messaging, storage, permits, and structural reference data**

---

## Current Production Highlights

### Wind Mitigation 2026

The new **Wind Mitigation 2026** workflow is one of the most visible specialty modules in the system, but it is part of a larger reporting platform rather than the entire platform itself.

Current work includes:

- Dedicated **2026 wind mitigation editor**
- Form-aware UI built around the Florida **OIR-B1-1802** workflow
- SVG-based editing for form fidelity
- Mapped fields, radios, checkboxes, conditional logic, and section-specific controls
- Mobile-focused editing improvements for field use
- Sticky section navigation and section-level helper tools
- Specialty photo workflows tied directly to the form
- Carrier-style PDF rendering and form-specific output handling
- Ongoing refinements to field mapping, signatures, pagination, and specialty logic

This is not treated as a generic template. It is being built as a true specialty-form workflow for real production use.

### ASCE Integration

**ASCE integration is live, working, and in production.**

InspectionPress uses ASCE-related tooling to support real inspection workflows, especially in areas where standards-based structural or wind-related reference material improves field documentation.

Current usage includes:

- Pulling ASCE-related reference content into specialty workflows
- Attaching ASCE-related images and supporting material where useful to the inspection record
- Reducing manual lookup work during inspection and reporting
- Supporting more defensible documentation in wind- and roof-related workflows

This is an active part of the production system, not a future idea.

### Roof Slope Assistant

InspectionPress includes a **Roof Slope Assistant** designed to help inspectors make faster and more consistent roof-related decisions from actual imagery instead of relying only on manual estimation.

Current and recent work includes:

- Visual roof-slope measurement assistance inside the editor
- Level-assist behavior for interpreting image angle
- Sample-based answer assistance tied back to the form workflow
- UI for working from captured imagery directly in the report process
- Continued refinement of capture behavior, thresholds, and form application logic

The goal is practical field assistance, not just an overlay.

---

## Report Writer and Narrative Workflow

The report writer is the core of InspectionPress. It is built around a structured hierarchy and media-heavy documentation workflow.

### Structured Report Editing

- Template-driven report writing
- Section → component → finding hierarchy
- Required and optional content support
- Rich-text narrative editing
- Severity-based findings such as **Minor**, **Major**, and **Material / Safety Concern**
- Summary and filtered report views
- Public UUID-based report access
- PDF generation for both standard reports and specialty forms

### Narrative Library

The **narrative library** is a major part of day-to-day usability.

Current functionality and active workflow includes:

- Centralized reusable narrative content
- Fast insertion of prewritten narratives into findings
- Consistent language across inspectors and report types
- Support for reference content that goes beyond plain text
- A foundation for building company-standard language, field guidance, and specialty inspection support content

### Reference Photos and Visual Guidance

InspectionPress is not limited to plain narratives. The platform is being shaped around visual reference content as well.

Current and active workflows include:

- **Reference photos** associated with narrative and specialty workflows
- Section-level visual guidance where it helps inspectors make faster choices
- Reusable image-backed content for training, reminders, and field consistency
- Read-only reference modal patterns for in-form assistance

### Rapid Fire Camera

The **Rapid Fire Camera** workflow is designed for speed in the field.

Current work includes:

- Fast photo capture from within specialty editors
- UI optimized for field use and repetitive capture workflows
- Landscape/portrait handling improvements
- Ongoing work around ergonomics, handedness, and quick capture behavior

### Intervention, Flagging, and Recommended Actions

InspectionPress is being built to do more than just store photos and text blocks.

Active reporting workflow includes support for:

- **Intervention** patterns where the system helps direct the inspector toward the next step in the workflow
- **Flagging** findings or conditions that need attention, follow-up, or special emphasis
- **Recommended actions** tied to findings and reporting output
- Better structure around how concerns are surfaced in summary views and downstream communication

### Attachments and Supporting Evidence

InspectionPress is designed to keep supporting evidence close to the actual inspection record.

Current and active workflows include:

- Photo and video attachment at the report level
- Permit attachment workflows
- ASCE image attachment workflows
- Document uploads tied to inspections and related records
- Public and internal access patterns based on UUIDs and report context

---

## Current Platform Features

The following areas are already present in the platform in some form and are being actively improved.

### Specialty Inspection Workflows

- Wind mitigation editor and PDF workflow
- Four-point inspection support
- Specialty inspection form mapping and form-aware editors
- SVG-backed specialty workflows where fidelity matters

### Scheduling and Inspection Management

- New inspection creation workflows
- Service selection tied to inspections
- Property and inspection detail management
- Unconfirmed inspection handling
- Inspector assignment workflows
- Availability-aware scheduling direction
- Service-area and zone-based assignment work

### Pricing and Services

- Service catalog management
- Service categories
- Template-to-service linkage
- Dynamic pricing logic based on:
  - Square footage
  - Property age
  - Distance / mileage
  - Service-specific modifiers
- Add-on service support
- Modifier UI work for inspection pricing behavior

### CRM

- Customer records
- Agent records
- Agency records
- Import workflows for customers, agents, agencies, and templates
- CRM-style detail views and edit pages
- Duplicate merge workflows for contact cleanup
- Notes, history, and operational record direction

### Documents, PDFs, and Operational Records

- UUID-based public access patterns
- Report PDFs
- Specialty-form PDFs
- Document uploads tied to inspections
- Public/private delivery workflows for report records

### Mapping, Property, and Weather

- Google Maps / Places integration work
- Address lookup and map-assisted workflows
- BuildFax integration
- RentCast integration
- Weather block support for inspection conditions and locked-at-inspection-time weather context

### Roles, Permissions, and Branding

- Admin panel for core modules
- Roles and permissions support
- GUI-based permissions matrix direction
- Branding settings for report headers, footers, and other company-facing output

### Communications and Telephony

- Twilio integration work for browser-based calling and related workflows
- SMS / voice workflow direction
- Outlook / Microsoft 365 integration work for scheduling and communication
- Automated email and notification workflow direction for inspection lifecycle events

### PWA and Mobile-Focused Work

- Progressive Web App direction for the report writer and broader field use
- Mobile-specific editing improvements
- Offline-aware design goals
- Installable, app-like workflow direction for field inspectors

---

## Paid Services and Operating Costs

InspectionPress is open source, but a production deployment can still involve real third-party costs.

Depending on how you use it, you should expect costs for:

- **Server hosting / VPS / cloud infrastructure**
- **BuildFax**
- **RentCast**
- **Amazon SES**
- **Amazon SNS**
- **Twilio**
- **ASCE**
- **Storage and CDN services** such as S3 and optionally Cloudflare
- **Maps and geocoding services** depending on provider and usage

Some deployments may choose not to enable every integration, but the platform is built with the expectation that many production teams will rely on paid external services on top of normal hosting costs.

---

## Core Integrations

InspectionPress is designed to work with a mix of self-hosted application logic and paid external services.

Current and active integration areas include:

- **Amazon S3** for storage
- **Amazon SES** for email delivery
- **Amazon SNS** for messaging-related workflows
- **Twilio** for phone and SMS workflows
- **BuildFax** for permit and property-related data
- **RentCast** for property-related data
- **ASCE** for structural / wind-related reference support
- **Google Maps / Places** for address and mapping workflows
- **Weather APIs** for inspection-condition capture
- **Microsoft Graph / Outlook** for scheduling and communication workflows

---

## Self-Hosting and Deployment

InspectionPress is intended to be self-hosted.

Typical baseline requirements include:

- Ubuntu Server **20.04+**
- Nginx
- PHP **8.1+**
- MariaDB or MySQL
- Node.js / npm
- Composer
- Queue workers and scheduler support following normal Laravel deployment practices

Production use will often also require:

- S3-compatible storage
- Email service credentials
- SMS/voice provider credentials
- API credentials for property, permit, weather, mapping, and ASCE-related services

---

## Roadmap and Active Work

InspectionPress is already usable, but there is still a large amount of active build-out happening.

Key areas of current development include:

- Continued refinement of the Wind Mitigation 2026 workflow
- Four-point editor and output improvements
- Deeper narrative-library tooling
- Better reference-photo workflows and reusable specialty modal patterns
- More refinement to rapid-capture and media-heavy field workflows
- Better summary, flagging, and recommended-action handling
- Expanded scheduling, assignment, pricing, and invoicing workflows
- More polished CRM, permissions, and operational views
- More consistency across mobile, tablet, and desktop interfaces

---

## License and Warranty

InspectionPress is released under the **GNU General Public License (GPL)**.

You may use, study, modify, and redistribute it in accordance with the GPL.

**No Warranty**

This software is provided **as-is**, with **no warranty expressed or implied**, including any implied warranties of merchantability or fitness for a particular purpose. Use it at your own risk.

You are responsible for:

- Verifying correctness and suitability for your workflow
- Complying with local laws, regulations, carrier requirements, and professional standards
- Handling your own backups, security, and disaster recovery

---

## In Short

InspectionPress is:

- A self-hosted inspection operations platform
- Already working in production while still under active development
- Built for structured field reporting, specialty forms, CRM, scheduling, and media-heavy workflows
- Focused on practical inspection work rather than generic form software

If you want to own your platform, control your data, support specialty inspection workflows, and keep building on top of an open codebase, InspectionPress is aimed at exactly that use case.
