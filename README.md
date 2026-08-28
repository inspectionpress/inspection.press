<p align="center">
  <img src="https://dummyimage.com/600x120/020617/38bdf8&text=InspectionPress" alt="InspectionPress" />
</p>

<p align="center">
  <b>InspectionPress</b> - Open-source, self-hosted field inspection, reporting, CRM, communications, scheduling, billing, and operations OS
</p>

<p align="center">
  <sub>Unlimited inspectors - Unlimited inspections - Unlimited templates & report types - Public scheduler - Inspector portal - Client portal - PWA - Twilio - SES - SNS - S3 - Outlook/Graph - Google - BuildFax - RentCast - ASCE - OpenAI</sub>
</p>

---

## Why This Exists

InspectionPress was born out of frustration with existing tools:

- Per-inspection pricing and rigid licensing
- Weak support for insurance and specialty forms, especially Florida workflows
- Limited automation and clumsy APIs
- Poor support for real-world team operations like zones, availability, agencies, assignments, payments, and communications
- A general feeling that you are renting someone else's platform instead of owning your own stack

This project is an attempt to fix that:

- **Self-hosted** - you own the data, the hosting, the backups, and the knobs
- **GPL-licensed** - fork it, bend it, ship it, as long as you respect the GPL
- **Automation- and API-friendly** - built to integrate and extend, not wall things off
- **Field-first** - focused on people who live in this software all day, not casual users
- **Operations-aware** - scheduling, reporting, payments, communication, marketing attribution, and team management all live in one system

> **Honest status:** InspectionPress is a work-in-progress, but it is also working in production. Real inspections are being scheduled, documented, edited, billed, paid, and delivered through it right now. There are still bugs, sharp edges, company-specific assumptions, and fast-moving areas of development. It is provided as-is, with no warranty expressed or implied. Test thoroughly, review the code, and use the issue tracker for bugs, regressions, and feature requests.

---

## What InspectionPress Is

InspectionPress is a full-stack field operations platform for inspection-heavy businesses. It combines the pieces that are usually scattered across several systems:

- Public scheduling and quote workflows
- Admin scheduling and dispatch
- Inspector availability, service areas, zones, and travel logic
- Client, agent, agency, contractor, and customer CRM records
- Agreements, invoices, payments, and report delivery gates
- Structured report writing with photos, videos, findings, recommendations, and PDFs
- Florida insurance specialty forms such as Four Point, Roof Certification, and Wind Mitigation
- Email, SMS, browser calling, call logs, inbox threads, and voice-agent tooling
- Property, permit, weather, map, recall, and external data support
- Public website pages, service pages, area pages, reviews, sitemap, and CMS migration tools
- Marketing and operations dashboards driven by inspection data, GA4, and Google Ads

The production application audited for this README includes company-specific branding and assumptions, but the underlying platform is meant to be forked and adapted for other inspection or field-service businesses.

---

## High-Level Overview

InspectionPress can support:

- Home inspectors
- Building inspectors
- Insurance inspectors
- Roofing and specialty trade inspectors
- WDO, pest, moisture, HVAC, electrical, plumbing, and contractor workflows
- Appraisers and adjusters
- Field teams that need structured forms, media capture, customer records, communication logs, and defensible deliverables

Core capabilities include:

- **Scheduling and availability** with public and admin workflows
- **Inspector matching** by service, service area, zone, county, ZIP, distance, and active status
- **Service catalogs** with public visibility, service categories, report writer keys, and agency-specific offerings
- **Dynamic pricing** with base prices, service-specific pricing, agency overrides, distance, property size, property age, custom fees, and premium-time surcharges
- **Invoices, payments, and agreements** with Square and Stripe support
- **Report templates** with sections, components, findings, required/optional content, default findings, ordering, and import tooling
- **Multi-report inspections** with report instances, specialty writers, duplicate/rename/reorder/restore behavior, and independent publish status
- **Report writing** with findings, rich text, media, severity, recommendations, location tags, AI assistance, recall support, and public/PDF output
- **Specialty forms** for Four Point, Roof Certification, legacy Wind Mitigation, and Wind Mitigation 2026 OIR-B1-1802
- **CRM** for customers, agents, agencies, unconfirmed agencies, contractor contacts, leads, and communication history
- **Communications** through email, SMS, inbox threads, browser dialer, call dispositions, Twilio voice, and inbound email routing
- **Voice agent support** for caller context, service matching, quote support, scheduling, human intervention, and transcript summaries
- **Property intelligence** through BuildFax, RentCast, Google geocoding/maps, weather, permits, and public contractor lookup
- **Public website tooling** for landing pages, service pages, public area pages, CMS pages/posts/tables, reviews, sitemap, and robots
- **Marketing intelligence** with GA4, Google Ads sync, attribution, recommendations, predictions, and forensic exports
- **Admin operations** for users, roles, permissions, announcements, help center, training, bug reports, market launches, 404 logs, and settings

---

## Production Highlights

InspectionPress is broader than any single module, but several production workflows deserve specific mention.

### Wind Mitigation 2026

The Wind Mitigation 2026 workflow is one of the flagship specialty tools in the platform.

Current source-backed capabilities include:

- Dedicated 2026 wind mitigation editor
- Support for the Florida OIR-B1-1802 workflow
- SVG-based form rendering for high-fidelity form output
- Mapped inputs, radios, checkboxes, page overlays, footer overlays, and conditional data handling
- ASCE region lookup support using inspection coordinates or entered coordinates
- Generated ASCE evidence image attachment to the inspection/report photo record
- Opening-protection chart normalization and persistence
- Inspector signature embedding
- Photo section uploads, photo list endpoints, managed photo pages, and cached PDF generation
- Public delivery through the secure report asset route

This is important, but it is part of a much larger inspection and reporting system, not the whole story.

### Four Point

The Four Point workflow supports Florida insurance reporting around the four systems carriers commonly care about:

- Roof
- Electrical
- Plumbing
- HVAC

Current source-backed capabilities include:

- Dedicated Four Point editor
- SVG page preview
- PDF generation
- Report-instance support
- Photo uploads and reordering
- Photo pages
- Inspector signature embedding
- Carrier-style output handling

### Roof Certification

InspectionPress includes a dedicated Roof Certification writer for focused insurance roof documentation.

Current source-backed capabilities include:

- Dedicated Roof Certification editor
- SVG preview and PDF output
- Photo page generation
- Inspector/company/default field resolution
- Signature embedding
- Report-instance support
- Public PDF delivery through the report asset route

### Legacy Wind Mitigation

The legacy Wind Mitigation writer remains present alongside the 2026 workflow.

Current source-backed capabilities include:

- Legacy wind mitigation editor
- SVG preview and PDF generation
- Photo upload, deletion, listing, staging, and photo-page rendering
- LBX export support
- Specialized PDF merge and SVG conversion utilities

### Pre-Acquisition Reports

The pre-acquisition workflow is a separate specialty writer with its own schema, viewer, uploads, and media behavior.

Current source-backed capabilities include:

- Dedicated pre-acquisition editor
- Structured form schema and normalized payloads
- Inspection prefill from existing inspection data
- RentCast/property-derived context where available
- Weather selection mapping
- Managed image galleries and shared photo loading
- Direct video upload issue/finalize workflow
- Public viewer rendering
- Photos ZIP download support
- Background video processing job support

### ASCE Integration

ASCE is used in active specialty workflows, especially wind-related documentation.

Current source-backed usage includes:

- ASCE hazard/region lookup service
- Coordinates sourced from the inspection, report data, or request input
- Generated evidence images stored as section photos
- Region badges, palettes, and supporting metadata for Wind Mitigation 2026
- Support for defensible specialty-form documentation

### Roof Slope Assistant

The Roof Slope Assistant is designed to help inspectors make faster and more consistent roof-related decisions from captured imagery.

Current source-backed usage includes:

- Admin endpoint for roof-slope analysis
- Image-analysis workflow inside the inspection/report context
- Practical helper behavior for specialty roof and wind documentation

### Serial Number Decoder and Recall Checker

InspectionPress includes a serial-number and recall intelligence workflow.

Current source-backed capabilities include:

- Manufacturer, brand, alias, appliance type, source, asset, and serial-decoder rule models
- Admin CRUD for serial decoder rules
- CSV import and export of decoder rules
- Pattern backfill and obfuscation commands
- OCR/model extraction from uploaded images
- OpenAI vision fallback support
- CPSC recall lookup through saferproducts.gov recall services
- Recall summary building and recall image persistence
- Ability to pin recall information back into report findings

---

## Main Product Areas

### Scheduling and Dispatch

InspectionPress has both public and admin scheduling paths.

Scheduling capabilities include:

- Multi-step public scheduler
- Admin inspection creation and editing
- Public quote endpoint
- Public service selection and upsell flows
- Property lookup and property detail capture
- County, ZIP, service-area, and zone checks
- Inspector matching by service, area, active flags, home address, and explicit service restrictions
- Pooled availability endpoint
- Inspector information endpoint for the scheduler
- Premium availability fee handling
- Online booking discount support
- Unconfirmed inspection requests
- Admin confirmation of unconfirmed requests
- Bulk cancellation of unconfirmed requests
- Reschedule and cancel flows for admin and public users
- Proposed-time handling for unconfirmed requests
- Manual date updates
- Outlook/calendar synchronization hooks
- Arrival status tracking for On My Way, Running Late, Arrived, and Finished states
- Travel estimate support for arrival status
- Automatic overdue-finished command for inspections that pass their scheduled end

### Inspection Records

Inspection records are the operational center of the platform.

Inspection capabilities include:

- UUID-based inspection records
- Multiple customers through pivot-backed relationships
- Multiple agents through pivot-backed relationships
- Multiple inspectors through pivot-backed relationships
- Legacy compatibility helpers for older customer, agent, and inspector columns
- Service attachment and service updates
- Custom inspection-level fee items
- Invoice and agreement creation
- Admin notes
- Client/public notes
- Document uploads
- Hero image uploads
- Property-level hero images and automatic hero fallback behavior
- CYA photo management
- Permit attachment
- BuildFax retrieval
- RentCast retrieval
- Weather context
- Call initiation from inspection records
- Call disposition storage
- Photos ZIP download
- Public/client-facing inspection detail page
- Public reschedule, cancellation, agent attachment, document upload, and service update flows

### Services, Categories, Areas, Zones, and Pricing

The service layer is designed to let an inspection company define what it sells and where it sells it.

Current source-backed capabilities include:

- Unlimited services
- Service categories
- Service-category ordering
- Service ordering inside categories
- Default category selection
- Service area management
- Zone management under service areas
- Active/inactive states for service areas and zones
- Service-to-template relationships
- Service report writer keys
- PDF-only service behavior
- Public scheduler visibility controls
- Service badges, descriptions, website links, and public landing metadata
- Service pricing overrides by agency, service area, zone, and user/inspector
- Service modifiers for price and duration
- Modifier criteria for square footage, age/year built, ZIP, county, and distance
- Deduped travel modifiers when multiple services are selected
- Haversine distance fallback with Google geocoding support
- Custom surcharges and premium time fees
- Agency flat-rate overrides
- Admin fee edits that win over default pricing

### Templates and Report Types

Templates define reusable inspection content.

Template capabilities include:

- Unlimited templates
- Template sections
- Template components
- Template findings
- Required and optional sections/components
- Default-checked findings
- Finding answer types, options, responses, and severity
- Section ordering
- Component ordering
- Finding ordering
- Duplicate sections
- Duplicate components
- Toggle optional sections/components
- Toggle default findings
- Template settings
- XLS import
- CSV import/export
- Preview and process flows for template import
- Service-template attachment

### Report Instances

InspectionPress supports multiple report instances on a single inspection.

Report-instance capabilities include:

- Add a report from a template without changing services or pricing
- Use an existing service only as route/access context when adding template-only reports
- Resolve specialized writers by service, template, or report title
- Rename reports
- Reorder reports
- Soft-delete reports
- Restore reports
- Duplicate a report inside the same inspection
- Duplicate a report to another inspection
- Copy findings, photos, and related assets through the duplication service
- Publish all reports
- Track individual report publish status
- Deliver individual reports through secure UUID routes
- Public report view tracking for clients and agents

### Standard Report Writer

The standard report writer is organized around:

- Sections
- Components
- Findings

Report-writer capabilities include:

- Edit report sections/components/findings
- Add findings
- Delete findings
- Duplicate findings
- Move findings
- Reorder sections
- Reorder components
- Sync findings from API/offline-style payloads
- Save findings
- Autosave report data
- Mobile section, component, finding, edit, save, add, and update flows
- Section and component completion state
- Severity updates
- Active/inactive findings
- Flagging
- Summary counts
- Contractor type assignment
- Location tags
- Internal finding notes
- Recommendation text and recommendation toggles
- Public full report view
- Public summary/PDF output
- Public report asset routing
- Photos ZIP export

### Report Media

InspectionPress treats media as first-class report evidence.

Media capabilities include:

- Finding photo uploads
- Desktop photo upload
- AJAX desktop photo upload
- Rapid field photo capture paths
- Finding video uploads
- Direct video presign/finalize flow
- 360-photo upload, proxy, caption, and delete support
- Section photo upload
- Four Point/Wind photo upload
- CYA photo upload and management
- Hero image upload
- Property hero image upload
- Image thumbnail generation
- Image scaling and EXIF orientation handling
- Caption updates
- Annotation/editing
- Revert edited images
- Location tags on photos
- Photo reordering
- Four Point photo reordering
- Section photo editor image endpoint
- Section photo annotation, caption, location tags, and revert
- Copy finding photos to another finding
- Copy finding photos to specialty report sections
- Copy section photos to findings
- Copy section photos to specialty sections
- Bulk copy from findings or section photos
- Evidence-photo handling for permits, ASCE images, and other generated support material

### Recommendations and Nearby Contractor Lookup

InspectionPress connects report findings to practical next steps.

Recommendation capabilities include:

- Admin-managed recommendation library
- Recommendation quick-update endpoint
- Sync/create missing recommendation mappings
- Google Place type refresh
- Recommendation-to-Google-Place mapping
- Public nearby-business lookup for report findings
- Saved contractor support on inspections
- Contractor type support for findings

### Client and Public Report Delivery

Public report delivery is UUID-based and supports both HTML and PDF output.

Delivery capabilities include:

- Secure report URLs
- Public report route `/r/{report}`
- Public asset route for specialized PDFs
- Public PDF route
- Photos ZIP route
- Specialized PDF routing for Four Point, Roof Certification, Wind Mitigation, Wind Mitigation 2026, and PDF-only services
- Full report viewer
- Summary count building
- Property and permit data on public reports where available
- Recall refresh route for report findings
- Report view tracking
- Client/public inspection detail pages
- Agreement and payment status gating patterns

---

## CRM and Partner Workflows

### Customers

Customer capabilities include:

- Customer CRUD
- Customer import with preview/process flow
- Bulk delete
- Duplicate merge
- Admin search
- Public scheduler search
- Tags
- Customer profile view
- Inspection history
- Invoice history
- Payment history
- Call history
- SMS/message history
- Stored email history
- Microsoft Graph email history support where configured
- Click-to-call
- Send SMS
- Send email

### Agents

Agent capabilities include:

- Agent CRUD
- Agent import with preview/process flow
- Bulk delete
- Duplicate merge
- Agent photo upload/delete
- Agent tag handling
- JSON search and regular search
- AJAX create from scheduling/forms
- Send email
- Send SMS/reminder
- Click-to-call
- Inspection history
- Email history
- SMS/message history
- Call history
- Invoice and payment history related to agent-linked inspections
- Agent role support on inspections, including buyer, seller, contractor, insurance, agency, and other

### Agencies

Agency capabilities include:

- Agency CRUD
- Agency import with preview/process flow
- Bulk delete
- Duplicate merge
- Public form/portal fields
- Agency email distribution members
- Agency-specific email template overrides
- Agency service catalogs
- Agency service auto-attach behavior
- Agency flat-rate service overrides
- Agency default customer support
- Agency jobs export/preview/CSV behavior
- Search by agency data and inspection history
- Public agency view routes
- Public agency lead forms

### Agency Acquisition CRM

The unconfirmed-agency/acquisition workflow is a newer CRM layer for partner development.

Agency acquisition capabilities include:

- Unconfirmed agency index
- Saved index/view preferences
- Agency CRM categories
- Agency CRM profiles
- County coverage/profile mapping
- Service area/profile mapping
- Tags
- Contacts
- Activities
- Offered services and pricing model notes
- Communication timeline across emails, calls, messages, and activities
- Confirm agency action
- Acquisition history
- Email templates
- Email queue
- Scheduled local queue times
- Send-now and cancel actions
- Attachments on acquisition emails
- Email intelligence scanning
- Email candidate review
- Use, reject, and restore candidate email addresses
- Batch target support for scanning

### Roofing Partner Program

The public roofing partner workflow supports lead intake for roofing companies and wind mitigation partner submissions.

Current capabilities include:

- Public roofing partner page
- Lead submission endpoint with throttle
- Lead email notification
- Roofing partner lead model
- Link from roofing partner lead into agency/unconfirmed-agency workflow

---

## Communications

InspectionPress is intended to keep operational communication attached to the correct job, person, and context.

### Email

Email capabilities include:

- SES-backed outbound mail
- Database-backed email templates
- Global email template editing
- Agency-specific template overrides
- Compose email modal/API
- Template availability checks
- Template variables/merge fields
- Send-as behavior for inspection mailbox vs user mailbox
- Inspection UUID mailbox address handling
- User signatures
- Outgoing email recording
- Inbound email API
- Raw inbound email parsing
- Header/reference normalization
- Conversation key support
- Email attachment storage
- Email detail viewer with safe iframe rendering
- Delivery tracking
- Open tracking
- Bounce/tracking diagnosis command
- Manual delivery override fields

### SMS

SMS capabilities include:

- Twilio SMS sending
- Incoming SMS webhook
- SMS status webhook
- Twilio signature validation
- SMS consent service
- SMS suppression service
- SMS automation templates
- SMS template reset/update
- SMS automation event retry/cancel
- Opt-out suffix support
- First-message introduction template
- Transactional SMS events for booking confirmation, appointment reminder, reschedule, pending cancellation, cancellation, invoice paid, report published, review request, and arrival statuses
- SMS history in inbox/CRM views

### Universal Inbox

Inbox capabilities include:

- Email and SMS thread list
- Thread detail view
- Reply from inbox
- Follow-up flag toggle
- Email status updates
- Unread thread filtering
- Compose templates endpoint
- Compose users endpoint
- Context-aware compose send
- Thread filters/search
- Conversation-key handling

### Browser Dialer and Calls

Calling capabilities include:

- Browser voice token generation
- Twilio browser voice TwiML
- Click-to-call from customers, agents, and inspections
- CRM search from dialer
- Call disposition CRUD
- Per-call disposition storage
- Call detail view
- User-specific call disposition defaults
- AI test outbound call start path
- Call history on CRM records

### Voice Agent

The voice-agent surface is a significant subsystem.

Voice-agent capabilities include:

- Health endpoint
- Caller lookup by phone
- Customer/agent matching
- Inspection lookup for verified caller context
- Voice-safe inspection filters
- Service list endpoint
- Availability endpoint
- Caller context text generation
- Report type detection for voice context
- Voice scheduling service
- Service matching from spoken/user query
- Property lookup
- Quote generation
- Availability generation
- Confirmed booking creation
- Unconfirmed/abandoned booking creation
- Quote SMS sending
- Internal user caller lookup
- Call-state endpoint
- Transcript store endpoint
- Transcript feed and active-feed admin views
- Voice console
- Active calls endpoint
- Human intervention notifications
- Human intervention check-ins
- Intervention acknowledgement
- Intervention decision polling
- Browser/operator barge-in preparation
- Caller hold/unhold
- Voice agent mute/unmute
- Hangup/conference termination
- Voice console push subscriptions
- Voice call summary creation
- OpenAI-assisted voice call summary fallback where configured
- Summary email delivery

---

## Billing, Payments, and Compensation

### Invoices and Payments

Billing capabilities include:

- Invoice CRUD
- Invoice items
- PDF preview and export
- Mark paid
- Public invoice pay route
- Admin invoice pay route
- Square public payment flow
- Square refund support
- Stripe public payment flow
- Stripe PaymentIntent support
- Stripe Checkout session support
- Stripe webhook handling
- Stripe test payment route
- Payment state syncing from payments and invoice totals
- Gateway resolver for Square/Stripe/default behavior
- Invoice balance summary, total, paid, balance due, and status logic
- Weekly lead invoice command for agencies that bill weekly

### Agreements

Agreement capabilities include:

- Agreement CRUD
- Service-agreement relationships
- Inspection agreement records
- Public/admin agreement signing routes
- Agreement sent/signed automation events
- Payment/agreement gating patterns for delivery flows

### Contractor Compensation

Contractor compensation capabilities include:

- Compensation rules
- Contractor compensation rule services
- Fee rules
- Role defaults
- User overrides
- Rollup rules
- Inspection compensation records
- Compensation lines
- Quality events
- Corrective activities
- Lock, approve, recalculate, and line management
- Mileage entries
- Mileage approval
- Contractor earnings dashboard
- Contractor payouts
- Payout approval and paid marking
- Contractor wallets
- Wallet ledger entries
- Matured-entry release
- Withdrawal requests
- Stripe Connect account creation and onboarding
- Stripe dashboard login URL
- Stripe Connect withdrawals/payouts

---

## Property, Permit, Map, Weather, and External Data

### Properties

Property capabilities include:

- Property records
- Property edit/update
- Property hero image upload
- Automatic property hero fallback
- Refresh BuildFax
- Refresh RentCast
- Refresh all property data
- Clear RentCast overrides
- Static map URLs
- Slugs
- External metadata fields

### BuildFax and RentCast

External property-data capabilities include:

- BuildFax lookup
- BuildFax retrieval and redirect retrieval
- BuildFax background fetch job
- RentCast lookup by address
- RentCast retrieval
- Property details surfaced into inspection and public report contexts

### Maps, Geocoding, Distance, and Navigation

Map-related capabilities include:

- Google geocoding service
- Server-side Google Maps API key split
- Distance calculations for quotes
- Google Places lookup for recommendation/nearby-business workflows
- Public contractor lookup around report findings
- Address matching and spoken-address cleanup for voice scheduling
- Public area maps from county SVG mapping
- Static maps and Street View-style hero support where configured

### Weather

Weather capabilities include:

- Weather service support
- Weather data surfaced into inspection/report workflows
- Weather mapping inside pre-acquisition viewer data
- Inspection-time weather context for reports

### Permit Intelligence

Permit capabilities include:

- Permit jurisdictions
- Permit scrape sources
- Permit scrape runs
- Permit records
- Permit inspection records
- Permit utilization reports
- Permit backlog snapshots
- Municipal permit platform scraper support
- Generic permit source scraper support
- Jurisdiction-specific permit client/store support
- Permit source list command
- Import permit results command
- Import permit inspections command
- Import jurisdiction permits command
- Backfill permit inspection fields command
- Dedupe permit backlog snapshots command
- Dedupe permit inspection records command
- Permit backlog scoring
- Permit backlog dashboard
- Permit record explorer
- Jurisdiction-level permit intelligence views
- Inspection permit index
- Permit attachment to report sections/findings
- Generated permit evidence JPG attachment
- Public report permit rows where available

---

## AI, Automation, and Intelligence

### AI Report Assistance

AI-assisted report workflow includes:

- Finding AI analysis
- Generate, save, show, and toggle AI analysis
- Public photo URL handling for analysis payloads
- TinyMCE ChatGPT proxy
- OpenAI service configuration
- AI narrative drafting/refinement direction

### Narrative Library

The narrative library is a major production feature.

Capabilities include:

- Narrative CRUD
- Category/tag-style filtering
- Search text normalization
- Summary and filter option building
- Sorting
- Quality labels
- Usage tracking
- Search logs
- Import form and import process
- Reference image upload and processing
- Reference image search endpoint
- Processed JPEG reference images
- Reference-image cleanup
- JSON fields and structured metadata

### Local AI

InspectionPress includes local AI bridge tooling for a private local/WSL model environment.

Current source-backed capabilities include:

- Local AI admin page
- Ask endpoint
- Dashboard endpoint
- Refresh endpoint
- Saved responses
- Save/rename/delete response endpoints
- Health endpoint
- Insights endpoint
- Loopback-only admin proxy configuration
- Local snapshot manifest endpoint
- Local snapshot table streaming endpoint
- Table/column exclusion rules for sensitive data
- Token-based snapshot authorization

### Automation Rules

Automation capabilities include:

- Automation rule CRUD
- Automation event definitions
- Automation runner services
- Inspection automation service
- Inspection SMS automation service
- Inspection SMS automation runner
- Event suppression and unsuppression
- Retry/cancel SMS automation events
- Lifecycle events for inspection creation, requests, confirmation, scheduling, rescheduling, cancellation, completion, no-show, invoices, agreements, documents, report publishing, admin notes, status changes, email, SMS, upsells, and manual triggers

### Dashboard, AI Assistant, GA4, and Google Ads

Operations and marketing intelligence capabilities include:

- Admin dashboard
- Dashboard service
- Dashboard GA4 endpoint
- Dashboard Google Ads endpoint
- Dashboard pulse endpoint
- Notification groups
- Dashboard inbox previews
- Unread SMS previews
- Recent email/SMS/call previews
- Bug snapshot
- Market launch dashboard block
- AI Assistant analytics overview
- AI Assistant realtime endpoint
- AI Assistant historical endpoint
- AI Assistant predictions endpoint
- AI Assistant snapshot endpoint
- GA4 Data API service
- GA4 realtime and historical reports
- GA4 key-event enrichment
- Page-title/path enrichment and inspection matching
- Google Ads OAuth connect/callback/disconnect
- Google Ads settings
- Google Ads test, sync, insights, and intelligence actions
- Google Ads daily metrics
- Google Ads search terms
- Google Ads recommendations
- Google Ads recommendation resolve action
- Google Ads attribution capture and inspection/invoice sync
- Google Ads marketing predictions
- Google Ads bottleneck diagnostic dashboard
- Google Ads bottleneck export
- Google Ads forensic export command

---

## Public Website, Reviews, CMS, and SEO

InspectionPress includes public-facing website functionality in addition to the authenticated operations app.

### Public Landing Pages

Public website capabilities include:

- Homepage
- Service landing pages
- Service-area landing pages
- Service + service-area landing pages
- Public pricing display with freshness fallback
- Service cards and sample report links
- Service/area FAQ support
- Schema.org graph generation
- Breadcrumb schema
- Public sitemap
- Public robots.txt
- Static pages such as terms of use and standards of practice
- Buy-back guarantee static page

Public service page definitions currently include:

- Residential Home Inspection
- Four Point Inspection
- Wind Mitigation
- Home Maintenance Inspection
- Pre-Listing Home Inspection
- Roof Certification

### Dynamic Public Areas

Public area capabilities include:

- Active markets
- Active counties
- Active cities
- Market pages
- County pages
- City pages
- Preview routes
- Live routes
- Florida-focused public geography config
- CMS area/city import
- Service-area coverage sync from county zones
- County SVG ID mapping
- Covered-county map rendering
- Focused county map rendering
- Public host access controls

### Reviews

Review capabilities include:

- Public reviews page
- Google Business Profile connection
- Google Business Profile OAuth connect/callback/disconnect
- Google Business Profile location selection
- Google Business Profile sync
- Review archive import command
- Legacy HTML review import command
- Public review profiles and public reviews tables
- Fallback rating/count configuration

### CMS and Site Migration

CMS capabilities include:

- Admin CMS dashboard
- CMS page CRUD
- CMS post CRUD
- CMS media migration audit
- CMS table builder
- CMS table duplication
- CMS table shortcode rendering
- CMS redirects
- CMS revisions
- Public CMS route resolver
- Public CMS catch-all route
- CMS snapshot import
- CMS media audit
- CMS rendering audit
- Legacy CMS shortcode cleanup/rendering
- Legacy rows/columns, captions, buttons, galleries, video, embeds, tables, and map placeholders
- YouTube iframe rendering
- Media URL normalization

### Short Links

Short-link capabilities include:

- Branded short-link host support
- Create/reuse/custom-name Artisan command
- Admin short-link index/show
- Destination update
- Rotation
- Revocation
- Destination-change history
- Visit tracking
- Allowed-host restrictions
- Reserved tokens
- Public redirect and unavailable routes

---

## Inspector Portal and Team Operations

### Inspector Portal

Inspector-facing capabilities include:

- Inspector dashboard
- Inspector inspection list
- Inspector inspection detail
- Inspector profile
- Headshot upload/history
- Signature upload and processing
- Profile text editing
- Travel settings
- Overflow settings
- Availability editing
- Active status editing
- Calendar feed URL
- Calendar feed token rotation
- Manual calendar feed connector
- Google/Microsoft calendar connector routes
- Stripe earnings dashboard link
- Stripe onboarding link
- Training module access
- Help center access

### Inspector Onboarding

Inspector onboarding capabilities include:

- Public onboarding application
- Admin onboarding application review
- Pending, confirm, and reject actions
- File upload/replacement for onboarding documents
- Password setup token flow
- Contractor payment agreement text
- Company standards acknowledgement
- Software standards acknowledgement
- Procedure basics acknowledgement
- Sample inspection acknowledgement
- Signature upload
- Availability capture
- Required document handling
- Confirmation service that creates/updates user records
- Default profile/availability setup for confirmed inspectors
- Sample inspection creation for new inspectors

### Users, Roles, Permissions, and Preferences

Admin/team capabilities include:

- User CRUD
- User management
- Role CRUD
- Permission CRUD
- Spatie permission integration
- User permission tools
- User impersonation
- Sort preferences
- User preferences
- Page activity logs
- Private notes and private note attachments
- Active/inactive admin and inspector flags
- Public staff feed visibility rules
- Public inspector feed token support

### Help, Training, Feedback, and Bugs

Operational support capabilities include:

- Help article CRUD
- Help dashboard
- Help feedback management
- Help UI element management
- Help article approval/flagging
- UI element approval/flagging
- Inspector help drawer/search/UI element routes
- Training modules
- Training lessons
- Training progress
- Module/lesson completion
- Bug report index/edit/update
- Bug report notes
- Bug report attachments
- Bug report snapshot on dashboard

### Market Launches and Expansion Planning

Market-launch capabilities include:

- Market launch CRUD
- Market launch tasks
- Task complete/reopen
- Service-area sync
- Readiness service
- Dashboard market-launch block

### Equipment and Assets

Equipment capabilities include:

- Equipment CRUD
- Equipment quantity/key fields
- Agency assignment fields
- Operational inventory support for tools, devices, and field equipment

---

## Imports, Migration, and Maintenance

InspectionPress includes a large amount of import and migration support.

Current source-backed import/maintenance tooling includes:

- Customer import
- Agent import
- Agency import
- Template XLS import
- Template CSV import/export
- Narrative import
- CMS snapshot import
- CMS media audit
- CMS area/city import
- Public area audit
- Public pricing inspect/detect changes
- BuildFax background fetch
- Legacy inspection import
- Legacy review import
- Legacy report storage migration
- Legacy photo repair command
- Additional legacy inspection import
- Additional legacy inspection import
- Legacy EML import
- Legacy duplicate merge command
- Legacy phone provider import
- Legacy CRM/communication import
- Google Reviews Takeout import
- Google Ads forensic audit export
- Serial decoder CSV import
- Serial decoder regex backfill
- Serial decoder pattern obfuscation
- Permit imports and dedupe commands
- Short link create/reuse/custom-token command
- Weekly agency lead invoice command
- Overdue inspections finished command

These tools are one reason the project is more than a report writer. It is also a migration bridge from older systems into a self-owned operating platform.

---

## PWA and Mobile Direction

InspectionPress includes PWA and mobile-focused infrastructure.

Current source-backed pieces include:

- Web app manifest
- Service worker route
- Offline page route
- PWA inspection-by-day endpoint
- PWA date-range metadata endpoint
- API sync endpoint for finding payloads
- Dexie dependency for browser-side storage
- Mobile report writer endpoints for sections, components, findings, edits, saves, and additions
- Mobile-friendly specialty editor direction

The offline/PWA surface is an active development area. Treat it as a direction and infrastructure layer unless your fork has tested the exact offline behavior you intend to rely on.

---

## Architecture and Stack

| Layer | Tech / Service |
| --- | --- |
| Application framework | Laravel 9.52.x |
| Production runtime observed in audit | PHP 8.4.x |
| Composer platform target | PHP 8.3 |
| Database | MySQL/MariaDB |
| Frontend build | Vite |
| Frontend libraries | Tailwind CSS, Alpine.js, Vue 3, Inertia, Axios |
| Calendar UI | Vue Cal |
| Rich text | TinyMCE |
| Image annotation/editing | markerjs2 plus server-side image processing |
| 360 photos | photo-sphere-viewer |
| PWA/browser storage | Manifest, service worker, Dexie |
| PDFs | DomPDF, FPDF, FPDI, PDFtk integration |
| Storage | Laravel filesystem, S3 default in production config |
| Auth | Laravel Breeze/Sanctum-style auth plus Spatie permissions |
| Roles/permissions | Spatie Laravel Permission |
| Email | Amazon SES, database templates, inbound email API |
| SMS/voice | Twilio SDK, Twilio browser voice, Twilio webhooks |
| Payments | Square and Stripe |
| Contractor payouts | Stripe Connect |
| Property/permit data | BuildFax, RentCast, municipal permit platforms, and custom permit sources |
| Maps/geocoding | Google Maps/Geocoding/Places, public map helpers |
| Analytics/marketing | GA4 Data API, Google Ads API, attribution tables |
| AI | OpenAI API, local AI bridge/proxy, serial/OCR/vision support |
| Push | Web Push/VAPID |
| Deployment shape | Nginx + PHP-FPM on a VPS/cloud server, with scheduler and queue workers |

---

## Controller-Derived Module Map

The audited source contains 261 controller files, 1,073 registered routes, 225 models, 390 migrations, 600 Blade views, and 787 PHP app files. The table below groups the controller surface by product area.

| Area | Main controllers/services | What it owns |
| --- | --- | --- |
| Inspections | `Admin/InspectionController`, `PublicInspectionController`, `Inspector/InspectionController`, `Pwa/PwaInspectionController` | Admin jobs, public scheduling, client detail pages, inspector job views, unconfirmed requests, people/services, reschedule/cancel, notes, documents, photos, and PWA inspection lists |
| Reports | `Admin/ReportController`, `PublicReportController`, `Client/PublicReportController`, `Api/SyncFindingsController` | Report instances, default writer, mobile writer endpoints, publish/delivery, public assets, PDFs, ZIP exports, autosave, and sync |
| Specialty reports | `FourPointController`, `WindMitigationController`, `WindMitigation2026Controller`, `RoofCertificationController`, `PreAcquisitionReportController` | Florida insurance forms, specialty schemas, SVG/PDF rendering, photo pages, signatures, ASCE evidence, and specialty viewers |
| Report media | `FindingPhotoController`, `FindingVideoDirectUploadController`, `Finding360Controller`, `SectionPhotoEditorController`, `BulkPhotoCopyController`, `FindingPhotoCopyController`, `SectionPhotoCopyController`, `InspectionCyaPhotoController`, `InspectionHeroController` | Uploads, thumbnails, annotations, captions, reverts, 360 photos, videos, CYA photos, hero images, and copy flows |
| Scheduling/availability | `InspectionAvailabilityController`, `PublicSchedulerAvailabilityController`, `InspectorController`, `InspectorSuggestionController`, `InspectionArrivalStatusController`, `PublicInspectionArrivalStatusController` | Inspector eligibility, availability, pooled slots, closest inspectors, arrival status, travel estimates, and late/finished events |
| Services/pricing | `ServiceController`, `ServiceCategoryController`, `ServiceAreaController`, `ZoneController`, `ServicePricingController`, `ServiceModifierController`, `PremiumRuleController`, `PricingController`, `SurchargeController` | Catalogs, categories, areas, zones, pricing overrides, modifiers, premium rules, and quote calculations |
| CRM | `CustomerController`, `AgentController`, `AgencyController`, `PublicAgentController`, `PublicAgentInspectionController` | Customers, agents, agencies, imports, merges, tags, histories, public agent search/attach, and CRM communication history |
| Agency acquisition | `AgencyAcquisitionController`, `AgencyEmailIntelligenceController`, `AgencyAcquisitionEmailQueueController`, `AgencyAcquisitionEmailTemplateController`, `AgencyLeadController`, `RoofingPartnerProgramController` | Partner CRM, unconfirmed agencies, contacts, activities, lead forms, email discovery, queued outreach, and roofing partner leads |
| Communications | `InboxController`, `InspectionEmailController`, `InboundEmailController`, `EmailController`, `EmailTemplateController`, `SmsController`, `SmsAutomationController`, `TwilioController`, `DialerController`, `CallController`, `CallDispositionController` | Inbox threads, compose/send, inbound email, templates, SMS, automation events, Twilio webhooks, browser dialer, calls, and dispositions |
| Voice agent | `Api/VoiceAgent*`, `Admin/Voice*`, `TwilioBrowserVoiceController`, `VoiceConsolePushController` | Caller lookup, scheduling APIs, transcripts, call state, human intervention, browser barge/hold/hangup, push, and call summaries |
| Billing/payments | `InvoiceController`, `PublicInvoiceController`, `Billing/StripeInvoicePaymentController`, `Billing/StripeWebhookController` | Invoices, line items, public/admin pay flows, Square, Stripe, webhooks, refunds, and payment state |
| Compensation | `InspectionCompensationController`, `ContractorCompensationRuleController`, `ContractorEarningsController`, `ContractorMileageController`, `ContractorPayoutController`, `UserStripeLedgerController` | Contractor pay rules, compensation lines, quality/corrective events, mileage, payouts, Stripe Connect, wallets, and ledgers |
| Property/data | `PropertyController`, `BuildFaxLookupController`, `RentCastLookupController`, `InspectionPermitController`, `PermitIntelligenceController`, `PermitBacklogDashboardController`, `PermitRecordExplorerController` | Property records, BuildFax, RentCast, permits, generated evidence, permit backlog, and jurisdiction intelligence |
| AI/content intelligence | `FindingAiAnalysisController`, `TinyMceChatGptProxyController`, `SerialDecoderController`, `RecallCheckerController`, `LocalAiIntelligenceController`, `AiAgentKnowledgeController` | AI finding analysis, AI text assistance, serial decoding, OCR/vision, recall lookup/pinning, local AI bridge, and voice-agent knowledge |
| Templates/narratives | `Template*Controller`, `NarrativeLibraryController`, `RecommendationController`, `RecommendationPlaceMapController`, `FindingRecommendationController` | Template structure, imports, narrative library, reference photos, recommendation library, and Google Places mappings |
| Public website/CMS | `PublicLandingPageController`, `Public/AreaPageController`, `Public/LiveAreaPageController`, `Public/CmsPublicController`, `Admin/Cms/*`, `PublicSitemapController`, `PublicRobotsController`, `GoogleReviewsController` | Public pages, service/area pages, CMS migration, CMS tables, reviews, sitemap, robots, public areas, and SEO metadata |
| Analytics/marketing | `DashboardController`, analytics controllers, `GoogleAdsController`, `GoogleAdsBottleneckController`, `MarketLaunchController`, `MarketLaunchTaskController` | Admin dashboard, AI Assistant analytics, GA4, Google Ads sync/insights, predictions, recommendations, market launch planning, and operational pulse |
| Admin/security/support | `UserController`, `UserManagementController`, `RoleController`, `PermissionController`, `SettingsController`, `CompanySettingsController`, `Help*Controller`, `TrainingModuleController`, `BugReportController`, `EquipmentController`, `NotFoundRequestController` | Users, roles, permissions, settings, company config, help/training, bugs, equipment, 404 logs, and internal operations |
| Auth/calendar/integrations | `Auth/*`, `CalendarController`, `CalendarFeedController`, `CalendarIcalController`, `OutlookController`, `Inspector/CalendarConnectorController` | Login/password/email verification, inspector password setup, calendar feeds, external calendar connectors, and Outlook/Graph flows |
| Short links/public access | `ShortLinkController`, `ShortLinkRedirectController`, `PublicHostAccessController`, `PublicInspectorFeedController` | Branded short links, redirect safety, visit/destination history, public host controls, and public staff feed |

---

## Data Model Highlights

The schema is broad. Important durable concepts include:

| Data area | Representative models/tables |
| --- | --- |
| Core jobs | `Inspection`, `Property`, `InspectionCustomItem`, `InspectionNote`, `InspectionArrivalEvent` |
| People/CRM | `Customer`, `Agent`, `Agency`, `Client`, `Tag`, pivots for customers/agents/inspectors |
| Services/pricing | `Service`, `ServiceCategory`, `ServiceArea`, `Zone`, `ServicePricing`, `ServiceModifier`, `PremiumRule` |
| Reports | `InspectionReport`, `Section`, `Component`, `InspectionReportFinding`, `InspectionReportPhoto`, `InspectionReportPinnedFinding` |
| Templates | `Template`, `TemplateSection`, `TemplateComponent`, `TemplateFinding` |
| Specialty photos | `FourPoint`, `FourPointPhoto`, `InspectionCyaPhoto`, `ReinspectionFinding`, `ReinspectionPhoto` |
| Documents/agreements | `Document`, `Agreement`, `InspectionAgreement` |
| Billing | `Invoice`, `InvoiceItem`, `Payment`, `StripeWebhookEvent` |
| Compensation | `InspectionCompensation`, `InspectionCompensationLine`, `ContractorPayout`, `ContractorWallet`, `ContractorWithdrawal`, `ContractorMileageEntry` |
| Communications | `Email`, `EmailAttachment`, `EmailSend`, `Message`, `Call`, `CallDisposition`, `InboxFlag`, `SmsSuppression`, `SmsMessageTemplate` |
| Voice agent | `VoiceCallTranscript`, `VoiceCallSummary`, `VoiceAgentPresence`, `VoiceConsolePushSubscription` |
| Agency acquisition | `AgencyCrmProfile`, `AgencyAcquisitionContact`, `AgencyAcquisitionActivity`, `AgencyAcquisitionQueuedEmail`, `AgencyAcquisitionEmailCandidate` |
| Permits | `PermitJurisdiction`, `PermitScrapeSource`, `PermitScrapeRun`, `PermitRecord`, `PermitInspectionRecord`, `PermitBacklogSnapshot` |
| Public site/CMS | `LandingPage`, `PublicCounty`, `PublicCity`, `PublicReview`, `CmsPage`, `CmsPost`, `CmsMedia`, `CmsTable` |
| AI/reference data | `AiAgentKnowledge`, `NarrativeLibrary`, `SerialDecoderRule`, `SerialDecoderSource`, `Manufacturer`, `Brand`, `ApplianceType` |
| Marketing | `GoogleAdsAttribution`, `GoogleAdsDailyMetric`, `GoogleAdsSearchTerm`, `GoogleAdsInsight`, `GoogleAdsRecommendation`, analytics snapshots |

---

## Integrations Overview

InspectionPress can integrate with:

- **Amazon S3** - file storage for photos, documents, videos, generated evidence, and PDFs
- **Amazon SES** - outbound transactional and operational email
- **Amazon SNS** - SES notification/event support
- **Twilio** - SMS, browser voice, voice calls, webhooks, call control, and voice-agent conference flows
- **Square** - invoice payments and refunds
- **Stripe** - invoice payment intents, checkout sessions, webhooks, and connected accounts
- **Stripe Connect** - contractor onboarding, dashboard login, withdrawals, and payouts
- **Microsoft Graph / Outlook** - email/calendar integration
- **Google Calendar** - inspector calendar connectors
- **Google Maps / Geocoding / Places** - address lookup, pricing distance, nearby-business recommendations, and map workflows
- **Google Analytics 4** - realtime and historical public website analytics
- **Google Ads** - campaign metrics, search terms, attribution, recommendations, predictions, and forensic exports
- **Google Business Profile** - public reviews sync
- **OpenAI** - report/finding analysis, OCR/vision fallback, recall/model extraction, summary assistance
- **Local AI bridge** - private local model proxy/snapshot flow
- **BuildFax** - property and permit history workflows
- **RentCast** - property data workflows
- **ASCE** - wind/specialty documentation support
- **Municipal permit platforms** - permit record and inspection import/scrape support
- **Cloudflare** - commonly used for DNS/CDN/WAF/edge behavior in production deployments

Not every installation needs every integration. Many integrations are optional or environment-configured.

---

## Paid Services and Operating Costs

InspectionPress is open source, but a real production deployment can still involve meaningful third-party costs.

In addition to server hosting and infrastructure costs, paid requirements can include:

- Amazon S3 storage and bandwidth
- Amazon SES
- Amazon SNS
- Twilio SMS/voice
- Square payment processing
- Stripe payment processing and connected-account costs
- BuildFax
- RentCast
- ASCE-related services
- Google Maps, Geocoding, Places, Calendar, GA4, Google Ads, and Google Business Profile API usage where applicable
- OpenAI API usage
- Cloudflare paid features if used
- Permit data/scrape infrastructure costs depending on jurisdiction and volume

Production users should review every enabled integration, expected volume, retention policy, and vendor billing model before relying on the system.

---

## System Requirements

### Server

A typical deployment expects:

- Ubuntu Server 20.04+ or similar Linux server
- Nginx or another production web server
- PHP 8.1+ minimum by composer requirements, with PHP 8.2+ or newer recommended
- PHP extensions required by Laravel, image processing, PDF generation, database, and HTTP clients
- MySQL 8+ or MariaDB 10.5+
- Composer 2+
- Node.js 18+
- npm or yarn
- A queue worker
- Laravel scheduler
- Writable storage paths
- S3-compatible object storage if using the production-style storage setup

### Application Services

Common production services include:

- Web server + PHP-FPM
- MySQL/MariaDB
- Queue worker
- Scheduler cron
- Storage link if using local public files
- SSL/TLS certificates
- Supervisor/systemd for workers
- Backups for database and object storage
- Log rotation and monitoring

### Background Tasks

InspectionPress uses Laravel commands, jobs, listeners, and observers for tasks such as:

- Email sending
- SMS automation
- Inspection lifecycle automation
- PDF generation and caching
- BuildFax retrieval
- Permit scraping/importing
- Google Ads/GA4 sync and analysis
- Legacy imports
- Public pricing refresh/detection
- Local AI snapshots
- Contractor wallet/payout workflows
- Overdue inspection status updates

Run the Laravel scheduler and at least one queue worker using your preferred process manager.

---

## Typical Development Setup

Exact setup will vary by fork and environment, but the application follows a normal Laravel pattern.

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

For production, use a real web server, configure storage, run the scheduler and queue worker, and set integration credentials only for services you intend to enable.

---

## Security and Privacy Notes

Because InspectionPress stores operational records, customer information, inspection reports, payment records, communication history, photos, documents, and potentially sensitive property data, every deployment should be treated as a serious production system.

Recommended review areas include:

- Authentication and password policies
- Role and permission assignments
- Public report URL behavior
- Public invoice URL behavior
- S3/object-storage visibility
- Inbound email authentication
- Twilio webhook signature validation
- Stripe webhook signature validation
- PII retention policy
- Backups and restore testing
- Local AI snapshot exclusions
- Public host access controls
- Logs and debugging settings
- Third-party vendor credentials

---

## Adaptable to Many Industries

InspectionPress is not limited to one niche. It is built to adapt through:

- Custom services
- Service categories
- Templates and specialty forms
- Report writer keys
- Agency rules
- Service-area and zone rules
- Pricing overrides
- Automations
- Communication templates
- CRM records
- Public landing pages
- Import tools

Common use cases include:

- Home and building inspections
- Insurance inspections
- Roofing workflows
- Real-estate appraisals
- Adjusting and claims documentation
- HVAC, electrical, plumbing, and specialty trade evaluations
- WDO and pest workflows
- Permit-heavy property research workflows
- Other field services that need structured forms, media, communication, billing, and operational records

---

## Roadmap and Active Work

InspectionPress is already usable in production, but there is still substantial active development underway.

Key active areas include:

- Continued refinement of Wind Mitigation 2026 workflows
- Four Point editor and output improvements
- Roof Certification and other specialty form improvements
- Pre-acquisition report improvements
- Deeper narrative-library tooling
- Better reference-photo workflows
- More reliable rapid-capture and media-heavy field workflows
- Stronger PWA/offline behavior
- More consistent mobile/tablet/desktop report writing
- Better summary, flagging, intervention, recommendation, and recall workflows
- Expanded scheduling, assignment, pricing, invoicing, and communication automation
- More polished CRM, permissions, inbox, inspector portal, help, and training tools
- More complete contractor compensation and wallet workflows
- Public website/CMS and SEO refinements
- Marketing intelligence, attribution, and dashboard refinement
- Broader import tooling for legacy systems

---

## License and Warranty

InspectionPress is released under the GNU General Public License (GPL).

You may:

- Use it for commercial or non-commercial purposes
- Study the source, modify it, and extend it
- Redistribute original or modified versions, as long as you comply with the GPL

**Repository metadata note:** If this project is published as GPL, make sure package metadata such as `composer.json` matches the intended license. Some Laravel skeleton files may still contain default metadata until explicitly updated.

**No Warranty**

This software is provided as-is, with no warranty expressed or implied, including any implied warranties of merchantability or fitness for a particular purpose. Use it at your own risk.

You are responsible for:

- Verifying correctness and suitability for your workflows
- Reviewing generated reports and specialty forms before relying on them
- Complying with local laws, regulations, carrier requirements, professional standards, privacy rules, and communication rules
- Handling backups, security, incident response, and disaster recovery
- Testing payment, communication, report-delivery, and automation behavior before using it with real clients

---

## In Short

InspectionPress is:

- A deeply configurable field operations OS
- Built out of real-world frustration with existing inspection software
- Already working in production while still under active development
- Focused on inspection reporting, specialty forms, CRM, communications, scheduling, billing, media-heavy workflows, and operational visibility
- Designed for teams that want to own their platform, control their data, and keep building on top of open code

Use it as the backbone of your own operation, turn it into a product, or fork it into something new. Just expect bugs, test thoroughly, and if you improve it, consider sending a pull request.
