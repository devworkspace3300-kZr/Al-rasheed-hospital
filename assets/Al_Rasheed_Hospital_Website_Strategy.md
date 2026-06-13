# Al Rasheed Hospital & Kidney Center — Website Strategy & Google Stitch Design Prompt

---

## PART 1: TECHNOLOGY RECOMMENDATION

### Recommended Tech Stack (Frontend Only — Phase 1)

| Layer | Technology | Reason |
|---|---|---|
| Framework | **Next.js 14 (React)** | SEO-friendly, fast page loads, great for hospital sites |
| Styling | **Tailwind CSS** | Rapid, consistent, responsive design |
| UI Components | **shadcn/ui** | Clean, accessible components |
| Animations | **Framer Motion** | Smooth page transitions, scroll effects |
| Icons | **Lucide React** | Medical-friendly icon set |
| Fonts | **Google Fonts** — Inter + Poppins | Professional, readable |
| Image Optimization | **Next.js Image component** | Auto WebP, lazy loading |
| Carousel/Slider | **Swiper.js** | For hero slider and doctor cards |
| Maps Embed | **Google Maps Embed API** | Contact/location page |
| Form (static) | **React Hook Form** | Appointment form (ready for backend) |
| Deployment (Phase 1) | **Vercel** | Free, instant, CI/CD |

### Brand Colors (from Logo)
```
Primary Red:    #D32F2F  (crescent/cross red)
Teal/Green:     #00897B  (cross teal center)
Deep Green:     #2E7D32  (hands green)
White:          #FFFFFF
Dark Navy:      #0D2137  (headers, footer)
Light Gray:     #F5F7FA  (section backgrounds)
Text Dark:      #1A1A2E
```

### Typography
```
Headings:  Poppins (600, 700)
Body:      Inter (400, 500)
Accent:    Poppins Italic
```

---

## PART 2: COMPLETE SITE ARCHITECTURE

### Pages List (All Frontend)

1. **Home** `/`
2. **About Us** `/about`
3. **Our Doctors / Panel of Consultants** `/doctors`
4. **Departments & Services** `/departments`
5. **Department Detail** `/departments/[slug]` (dynamic)
6. **Facilities** `/facilities`
7. **Dialysis & Kidney Care** `/kidney-care`
8. **Performance / Statistics** `/stats`
9. **Gallery** `/gallery`
10. **Contact Us** `/contact`
11. **Appointment Booking** `/appointment`
12. **Regulatory & Compliance** `/compliance`
13. **News & Events** `/news` *(placeholder for future)*

### Global Components (Same on EVERY page)
- **Topbar** — phone, email, social icons
- **Header/Navbar** — logo, nav links, appointment CTA button (sticky)
- **Footer** — logo, about blurb, quick links, departments, contact info, copyright

---

## PART 3: PAGE-BY-PAGE CONTENT MAP

### Page 1: HOME
- Hero Slider (3 slides): Hospital exterior, ICU, Dialysis Unit — tagline "Care with Compassion"
- Stats Bar: OPD 14,200 | Surgeries 1,365 | Emergencies 1,255 | Free Dialysis 1,368
- Welcome Section: Chairman's brief welcome message + hospital intro (est. May 2023)
- Services Grid (8 cards): Emergency, Dialysis, Surgery, ICU, Lab, Pharmacy, Maternity, OPD
- Why Choose Us: 4 pillars — Licensed (HCCR 01-00135/26), 100+ Beds, 24/7 Services, Free Dialysis
- Doctors Carousel: Photo cards of consultants
- HDF Highlight Banner: "First HDF Service in the Region"
- Departments Quick Links: Grid of 14 departments
- Performance Highlights 2025: Animated counters
- CTA Banner: "Book Your Appointment Today" with phone numbers
- Google Map embed

### Page 2: ABOUT US
- Hospital Overview: Est. May 2023, Abbottabad, HCCR licensed
- Vision, Mission, Core VALUES (CARE: Collaborate, Achieve, Respect, Equity)
- Messages from Leadership:
  - Chairman BOG: Rasheed Ul Haq
  - CEO: Dr. Niaz Muhammad
  - Hospital Director
  - Medical Director: Dr. Salman Khan
  - Administrator
- Organizational Structure (Organogram visual)
- Registration & Compliance section with license details

### Page 3: OUR DOCTORS
- Filter tabs by department (Urology, Nephrology, Gynecology, Orthopedics, etc.)
- Doctor Cards Grid:
  - Dr. Nasir Jamil — Urology (MBBS, FCPS — Consultant Urologist, HOD Urology)
  - Dr. Muhammad Usman Zia — Nephrology (MBBS, FCPS — Consultant Nephrologist, HOD Nephrology, Jinnah International Hospital)
  - Dr. Rubina Bashir — Gynecology & Obstetrics (MBBS, FCPS — Consultant Gynecologist, Ex HOD Gyne Unit)
  - Dr. Sadia Irum — Gynecology (MBBS, Gold Medalist, FCPS OBS/Gynae, FECPS Urogynae, ICMT Liverpool)
  - Dr. Syed Usman Shah — Orthopedic Surgery (MBBS-MS Orthopedic Malaysia, Fellowship Arthroplasty Malaysia, A.O Certified Switzerland, Member of Pakistan Orthopedic Association)
  - Dr. Ismail Akbar — General & Laparoscopic Surgery (MBBS, FCPS — Associate Professor)
  - Dr. Uzair Arif — General, Laparoscopic, Bariatric & Laser Surgery
  - Dr. Nadir Farid Khattak — Hepatobiliary & Liver Transplant Surgery (Fellowship FCPS HPB & Liver Transplantation PKLI & RC Lahore)
  - Dr. Siddique Khan — Hepatobiliary Surgery (Assistant Professor, KTH Peshawar)
  - Dr. Awais Faizi — General Medicine (MBBS, FCPS — Medical Specialist & Diabetologist)
  - Dr. Ghulam Mohiuddin Marwat — Pediatrics (Associate Professor, MBBS, FCPS — Senior Consultant Child Specialist)
  - Dr. Ibrahim Mushtaq — Neuro Surgery (MBBS, FCPS — Consultant Neurosurgeon)
  - Dr. Ajmal Mehmood — Radiology (MBBS, FCPS — Consultant Radiologist)
  - Dr. Saqib — Anesthesia (MBBS, FCPS — Anaesthetist)
  - Dr. Shapara Shakeel — Dermatology (MBBS, FCPS — Dermatology)
  - Dr. Munawar — Intensivist
  - Dr. Ghayyur — Physiotherapist
- Treatment Medical Officers (TMOs):
  - Dr. Waqar — MBBS, FCPS (CC) Orthopedic
  - Dr. Fakhar ul Hayat — Medical Officer
  - Dr. Mubasir — Medical Officer
  - Dr. Zoha Nayyar — Medical Officer
  - Dr. Salman Khan — MBBS, FCPS (CC) Anesthesia

### Page 4: DEPARTMENTS & SERVICES
Grid of all departments with icons, click to detail page:
1. General Surgery
2. Laparoscopic Surgery
3. General Medicine
4. Neurosurgery
5. Orthopedics
6. Physiotherapy
7. Gynecology & Obstetrics
8. Laser Surgery
9. Nephrology
10. Neonatology
11. Pediatrics
12. Urology
13. Hepatobiliary Surgery
14. Interventional Procedures
15. Dermatology
16. Anesthesia
17. Radiology

### Page 5: FACILITIES
Cards for each facility with description:
- 24/7 Pharmacy — fully stocked, drug formulations for children
- Digital X-Ray Department — advanced, minimal radiation, 24/7
- Hematology/Laboratory — advanced diagnostics, phlebotomy, 24/7
- Ultrasound & Radiology — diagnostic & interventional
- ICU — ventilators, cardiac monitors, ECG, O2 supply, intensivists 24/7
- NICU — neonatal intensive care
- 6 Operation Theatres — Labor Room, General, Urology, Orthopedics, Neurosurgery + 2 C-arm imaging
- Dedicated Labor Room — 24/7 obstetric, fetal monitoring
- General Ward — centralized O2, modern facilities
- Private Rooms
- VIP Rooms
- Executive Rooms — private room + attendant room, AC, LED TV, refrigerator
- Parking & Patient Access — basement parking, 2 elevators, patient ramp, barrier-free

### Page 6: DIALYSIS & KIDNEY CARE (Flagship Page)
- Dedicated full page for the Renal Dialysis Unit (RDU)
- HDF (Hemo-dia-filtration) — First in Region
- Free Dialysis Program — 100+ patients/month
- Supervised by Dr. Muhammad Usman Zia (Nephrologist)
- Skilled dialysis technologists
- Stats: 1,368 free dialysis sessions in 2025

### Page 7: PERFORMANCE / STATISTICS 2025
Animated statistics dashboard:
- OPD: 14,200 patients
- Surgeries: 1,365
- Emergencies: 1,255
- Admissions: 1,390
- Free Dialysis Sessions: 1,368
- Lab Tests: 14,581
- Ultrasounds: 5,077
- Doppler U/S: 179
- X-Rays: 2,373
- X-Ray Procedures: 10
- ECGs: 70
Period: January 1 – December 31, 2025

### Page 8: GALLERY
Photo grid from hospital sections:
- Hospital Exterior
- ICU
- Operation Theatres
- Renal Dialysis Unit
- General Ward
- Labor Room
- Pharmacy
- Digital X-Ray
- Hematology Lab
- Nursing Station
- Parking / Patient Access
- Executive Rooms
- VIP Rooms

### Page 9: CONTACT US
- Phone: 0992-406982-83
- Mobile: 0317-7338830
- Email: rashidhospi@gmail.com
- Address: Main Mansehra Road, Opposite Gillani Mart, Kala Pull, Abbottabad
- Google Map embed
- Appointment Request Form (name, phone, department, message)
- Location map diagram (near Abbott College of Nursing, Al Rasheed Mosque, Gillani Mart)

### Page 10: APPOINTMENT BOOKING
- Simple form: Name, Phone, Email, Department (dropdown), Preferred Date, Message
- Emergency call-to-action above form
- Confirmation message (static for now, ready for backend)

### Page 11: REGULATORY & COMPLIANCE
- HCCR Licence No: 01-001353/26
- Certificate of Registration — In-Patient Health Care Establishment (100–299 beds)
- Provisional Licence — KP Health Care Commission — April 24, 2025 through July 23, 2025
- Owner: Rasheed Ul Haq (NIC: 1550160386321)
- Service Provider: Dr. Niaz Jamil (NIC: 1730102388019)
- Registration under Section 12 of KP Health Care Commission Act, 2015

---

## PART 4: GLOBAL HEADER & FOOTER DESIGN

### TOPBAR (above header, thin strip)
```
Left: 📞 0992-406982-83   📱 0317-7338830   ✉ rashidhospi@gmail.com
Right: Facebook | Instagram | YouTube icons
Background: #0D2137 (dark navy)  |  Text: white, small
```

### HEADER / NAVBAR
```
Logo: Al Rasheed Hospital logo (left) + hospital name text
Nav Links: Home | About | Departments | Doctors | Facilities | Kidney Care | Gallery | Contact
CTA Button: "Book Appointment" (solid red #D32F2F, white text)
Sticky: YES — shrinks on scroll
Mobile: Hamburger menu
Background: White with bottom shadow
```

### FOOTER
```
Column 1: Logo + "Care with Compassion" tagline + short about text + social icons
Column 2: Quick Links (Home, About, Departments, Doctors, Facilities, Gallery, Contact)
Column 3: Our Services (General Surgery, Nephrology, ICU, Emergency, Dialysis, Pediatrics, Gynecology, Urology)
Column 4: Contact Info
  📍 Main Mansehra Road, Opposite Gillani Mart, Kala Pull, Abbottabad
  📞 0992-406982-83
  📱 0317-7338830
  ✉ rashidhospi@gmail.com
Bottom Bar: © 2025 Al Rasheed Hospital & Kidney Center. All Rights Reserved. | HCCR Lic. No. 01-00135/26
Background: #0D2137 (dark navy) | Text: white/light gray
```

---

## PART 5: GOOGLE STITCH DESIGN PROMPT

> Copy everything below this line and paste into Google Stitch as your design prompt.

---

```
GOOGLE STITCH DESIGN PROMPT — AL RASHEED HOSPITAL & KIDNEY CENTER WEBSITE

=========================================================
PROJECT OVERVIEW
=========================================================
Design a complete, professional hospital website for:
"Al Rasheed Hospital & Kidney Center, Abbottabad"
Tagline: "Care with Compassion"

Design philosophy: Clean, trustworthy, modern medical UI. Think Mayo Clinic meets a South Asian private hospital. Prioritize whitespace, readability, and clear call-to-actions. NO cluttered layouts.

=========================================================
BRAND IDENTITY
=========================================================
Primary Color:    #D32F2F  (red — from hospital logo crescent)
Secondary Color:  #00897B  (teal — from logo cross center)
Accent Green:     #2E7D32  (dark green — from logo hands)
Dark Navy:        #0D2137  (header, footer, topbar)
Light Background: #F5F7FA  (alternate sections)
White:            #FFFFFF  (cards, main background)
Body Text:        #1A1A2E
Muted Text:       #6B7280

Fonts:
- Headings: Poppins Bold/SemiBold
- Body: Inter Regular/Medium
- All text: Clean, no decorative fonts

Logo Description: Red crescent arc embracing a teal/green medical cross, with two green cupped hands below — symbolizing care and healing.

=========================================================
GLOBAL COMPONENTS (MUST BE IDENTICAL ON ALL PAGES)
=========================================================

--- TOPBAR ---
Thin strip (40px height) at very top.
Background: #0D2137
Left side: phone icon + "0992-406982-83" | mobile icon + "0317-7338830" | mail icon + "rashidhospi@gmail.com"
Right side: Facebook, Instagram, YouTube small icon buttons (white, circular on hover)
Text: white, 13px

--- STICKY HEADER / NAVBAR ---
Background: white
Height: 80px (shrinks to 64px on scroll with shadow)
Left: Hospital Logo image + text "Al Rasheed Hospital & Kidney Center" (two lines, small, dark navy)
Center: Navigation links — Home | About Us | Departments | Doctors | Facilities | Kidney Care | Gallery | Contact
Right: "Book Appointment" button — background #D32F2F, white text, rounded corners, hover darkens
Mobile: hamburger icon opens full-screen slide-out menu
Active nav link: underlined in red #D32F2F

--- FOOTER ---
Background: #0D2137
4 columns:
Col 1: Logo (white version) + tagline "Care with Compassion" in teal + 2-line about text + social media icons (white circles)
Col 2: "Quick Links" heading (teal) — Home, About, Departments, Doctors, Facilities, Kidney Care, Gallery, Contact, Appointment
Col 3: "Our Services" heading (teal) — General Surgery, Nephrology & Dialysis, Emergency Care, ICU, Pediatrics, Gynecology, Orthopedics, Neurosurgery
Col 4: "Contact Us" heading (teal) — address with map pin icon, phone, mobile, email
Bottom bar: thin line divider, then "© 2025 Al Rasheed Hospital & Kidney Center. All Rights Reserved. | HCCR Licence No. 01-00135/26" — centered, small, light gray

=========================================================
PAGE 1: HOME PAGE
=========================================================

SECTION 1 — HERO SLIDER
Full-width, height 600px
3 slides with parallax effect:
Slide 1: Hospital exterior building photo. Overlay dark gradient left side. Heading: "Excellence in Healthcare" Subtext: "Serving Abbottabad Since 2023 — Care with Compassion" — CTA button "Book Appointment" (red) + "Learn More" (outline white)
Slide 2: ICU room photo. Heading: "Advanced Critical Care" Subtext: "State-of-the-art ICU with 24/7 Intensivist Coverage" — CTA "Our Facilities"
Slide 3: Dialysis unit photo. Heading: "First HDF Service in the Region" Subtext: "100+ Free Dialysis Sessions Every Month" — CTA "Kidney Care"
Navigation: dot indicators + left/right arrows

SECTION 2 — STATS BAR
Full-width strip, background #D32F2F (red), white text
4 animated counters in a row with icons:
📋 14,200  OPD Patients | 🏥 1,365  Surgeries | 🚑 1,255  Emergencies | 💧 1,368  Free Dialysis Sessions
Text: large bold number, smaller label below, dividers between items

SECTION 3 — WELCOME / ABOUT INTRO
2-column layout:
Left: Hospital exterior photo with a small badge "Est. May 2023" overlapping corner
Right: 
  - Small label "Welcome to Al Rasheed Hospital"
  - H2: "Comprehensive Healthcare for Abbottabad & Surrounding Regions"
  - Paragraph: Short intro about the hospital (licensed, 100+ beds, full-service)
  - 4 inline badges: ✅ HCCR Licensed | 🛏 100+ Beds | ⏰ 24/7 Services | 💊 Full Pharmacy
  - "About Us" button (outline red)

SECTION 4 — SERVICES GRID
Section heading: "Our Medical Services" (centered, H2, dark navy)
Subheading: "Comprehensive healthcare solutions under one roof"
Grid: 4 columns × 2 rows = 8 service cards
Each card: white background, subtle shadow, colored icon top, service name, 1-line description, hover lifts card with red top border
Cards:
1. 🚨 Emergency Care — 24/7 rapid response
2. 💧 Dialysis & Kidney Care — Free HDF services
3. 🔬 Laboratory — Advanced diagnostics 24/7
4. 🏥 Intensive Care (ICU) — Critical care excellence
5. 🔪 General Surgery — Laparoscopic & open
6. 👶 Maternity & NICU — Safe deliveries
7. 💊 24/7 Pharmacy — Fully stocked
8. 🩻 Digital X-Ray — Minimal radiation imaging

SECTION 5 — WHY CHOOSE US
Background: #F5F7FA (light gray)
Heading: "Why Choose Al Rasheed Hospital?"
4 horizontal feature blocks with large icon, title, description:
1. 🏛 Officially Licensed — HCCR Provisional Licence No. 01-00135/26 by KP Health Care Commission
2. 🩺 Expert Consultants — 15+ specialist doctors across all major disciplines
3. 💚 Free Dialysis — Over 100 underprivileged patients receive free dialysis every month
4. 🕐 24/7 Services — Round-the-clock emergency, ICU, pharmacy, and diagnostic services

SECTION 6 — MEET OUR DOCTORS (Carousel)
Heading: "Our Panel of Consultants"
Horizontal scrolling card carousel (Swiper.js):
Each doctor card: Photo placeholder (avatar icon if no photo), Name (bold), Specialty tag (colored pill), Qualification (small text), hover shows "View Profile"
Show 4 cards at once on desktop, 2 on tablet, 1 on mobile
Navigation arrows left/right
Sample doctors to show: Dr. Nasir Jamil (Urology), Dr. Usman Zia (Nephrology), Dr. Rubina Bashir (Gynecology), Dr. Syed Usman Shah (Orthopedics), Dr. Ibrahim Mushtaq (Neurosurgery), Dr. Awais Faizi (Medicine)
"View All Doctors" button below (outline red)

SECTION 7 — HDF HIGHLIGHT BANNER
Full-width, background gradient from #00897B to #0D2137
White text. Large bold: "Introducing HDF — Hemo-Dia-Filtration" 
Subtext: "The most advanced renal replacement therapy — Now available for the first time in the Abbottabad region"
Right side: abstract kidney/dialysis machine illustration or icon
CTA: "Learn About Kidney Care" button (white text, transparent border)

SECTION 8 — DEPARTMENTS QUICK LINKS
Heading: "Our Departments"
3-column grid of department link cards (compact):
Each: small colored icon + department name + arrow — clickable cards
Departments: General Surgery, Laparoscopic Surgery, Nephrology, Urology, Orthopedics, Neurosurgery, Gynecology & Obstetrics, Pediatrics, General Medicine, Hepatobiliary Surgery, Dermatology, Physiotherapy, Neonatology, Radiology, Anesthesia, Emergency, ICU

SECTION 9 — PERFORMANCE 2025
Background: dark navy #0D2137
White text. Heading: "Our 2025 Performance at a Glance"
Animated number counters in grid:
OPD Visits: 14,200 | Surgeries: 1,365 | Emergencies: 1,255 | Admissions: 1,390
Free Dialysis: 1,368 | Lab Tests: 14,581 | Ultrasounds: 5,077 | X-Rays: 2,373
Each counter: large number in teal/red, label in white below

SECTION 10 — APPOINTMENT CTA BANNER
Background: #D32F2F (red)
White text. H2: "Ready to See a Doctor?"
Subtext: "Book your appointment today or call us for immediate assistance"
Two buttons: "Book Appointment" (white background, red text) | "Call Now: 0992-406982-83" (outline white)

SECTION 11 — GOOGLE MAP
Full-width embedded Google Map
Location: Al Rasheed Hospital, Main Mansehra Road, Opposite Gillani Mart, Kala Pull, Abbottabad
Height: 400px

=========================================================
PAGE 2: ABOUT US
=========================================================

HERO SECTION
Page hero banner (400px): Hospital building photo with dark overlay
Breadcrumb: Home > About Us
H1: "About Al Rasheed Hospital & Kidney Center"

SECTION: HOSPITAL OVERVIEW
2-column. Left: text. Right: building photo
Founded: May 2023 | Location: Abbottabad, KPK | Beds: 100+ | License: HCCR 01-00135/26
Full overview paragraph

SECTION: VISION, MISSION & VALUES
3 columns, each with colored icon card:
Card 1 (Red): 👁 VISION — "People Caring for People to Live Better Lives" — bullet points
Card 2 (Teal): 🎯 MISSION — "Enhance wellbeing through care and innovation" — 3 bullet points
Card 3 (Navy): 💎 VALUES (CARE) — Collaborate | Achieve | Respect | Equity — each with letter badge

SECTION: MESSAGES FROM LEADERSHIP
Tab component with 5 tabs: Chairman | CEO | Hospital Director | Medical Director | Administrator
Each tab shows: photo (round), name, title, full message text in styled blockquote card

SECTION: ORGANIZATIONAL STRUCTURE
Heading: "Hospital Organogram"
Visual org chart: BOG → CEO → (Secretary to BOG) → (Medical Director, Finance Officer, Quality Manager, Nursing IC, Hospital Director) → sub-departments
Use connected box diagram

SECTION: REGULATORY COMPLIANCE
3 certificate cards side by side:
Card 1: Certificate of Registration (HCCR)
Card 2: Provisional Licence — April 24, 2025 to July 23, 2025
Card 3: Appendix A — Licence No. 01-00135/26
Heading: "Registration & Regulatory Compliance — HCCR Licence No. 01-001353/26"

=========================================================
PAGE 3: OUR DOCTORS
=========================================================

HERO BANNER
H1: "Panel of Consultants — Care with Compassion"

FILTER BAR
Horizontal scrollable tab filters: All | Urology | Nephrology | Gynecology | Orthopedics | General Surgery | Hepatobiliary | General Medicine | Pediatrics | Neurosurgery | Radiology | Anesthesia | Dermatology | Physiotherapy

DOCTOR CARDS GRID (3 columns)
Each card:
- Top: Department color banner + specialty name
- Center: Avatar/photo (circular, gray placeholder)
- Name (bold, dark navy)
- Qualifications (MBBS, FCPS etc.) in small gray text
- Role title
- Hospital/affiliation note
- "View Profile" button (outline red, full width)

ALL CONSULTANTS:
UROLOGY: Dr. Nasir Jamil — MBBS, FCPS — Consultant Urologist, Head of Urology Department
NEPHROLOGY: Dr. Muhammad Usman Zia — MBBS, FCPS (Nephrology) — Consultant Nephrologist Physician, HOD Nephrology, Jinnah International Hospital Abbottabad
GYNECOLOGY: Dr. Rubina Bashir — MBBS, FCPS — Consultant Gynecologist, Ex HOD Gyne Unit
GYNECOLOGY: Dr. Sadia Irum — MBBS, Gold Medalist, FCPS OBS/Gynae, FECPS Urogynae, ICMT Liverpool — Consultant Gynecologist
ORTHOPEDIC SURGERY: Dr. Syed Usman Shah — MBBS-MS Orthopedic (Malaysia), Fellowship Arthroplasty (Malaysia), A.O Certified (Switzerland), Member Pakistan Orthopedic Association — Surgeon
GENERAL & LAPAROSCOPIC SURGERY: Dr. Ismail Akbar — MBBS, FCPS — Associate Professor, General and Laparoscopic Surgeon
GENERAL & LAPAROSCOPIC SURGERY: Dr. Uzair Arif — Consultant General, Laparoscopic, Bariatric and Laser Surgeon
HEPATOBILIARY & LIVER TRANSPLANT: Dr. Nadir Farid Khattak — Fellowship FCPS HPB & Liver Transplantation PKLI & RC Lahore, FCPS General/Laparoscopic — Surgeon
HEPATOBILIARY: Dr. Siddique Khan — Assistant Professor, Hepatobiliary Surgery and Liver Transplant KTH Peshawar
GENERAL MEDICINE: Dr. Awais Faizi — MBBS, FCPS — Medical Specialist and Diabetologist
PEDIATRICS: Dr. Ghulam Mohiuddin Marwat — Associate Professor, MBBS, FCPS — Senior Consultant Child Specialist
NEUROSURGERY: Dr. Ibrahim Mushtaq — MBBS, FCPS — Consultant Neurosurgeon
RADIOLOGY: Dr. Ajmal Mehmood — MBBS, FCPS — Consultant Radiologist
ANESTHESIA: Dr. Saqib — MBBS, FCPS — Anaesthetist
DERMATOLOGY: Dr. Shapara Shakeel — MBBS, FCPS — Dermatology
INTENSIVIST: Dr. Munawar — Intensivist
PHYSIOTHERAPY: Dr. Ghayyur — Physiotherapist

TMO SECTION (separate row, smaller cards):
Heading: "Treatment Medical Officers (TMOs)"
Dr. Waqar — MBBS, FCPS (CC) Orthopedic
Dr. Fakhar ul Hayat — Medical Officer
Dr. Mubasir — Medical Officer
Dr. Zoha Nayyar — Medical Officer
Dr. Salman Khan — MBBS, FCPS (CC) Anesthesia

=========================================================
PAGE 4: DEPARTMENTS & SERVICES
=========================================================

HERO BANNER
H1: "Departments & Medical Services"
Subtext: "Comprehensive specialized care across all major medical disciplines"

DEPARTMENT GRID (4 columns)
Each department card:
- Colored icon (medical themed)
- Department name (bold)
- 2 specialist names listed below
- Hover: card lifts, border color appears
- Click: goes to /departments/[slug]

All 17 departments listed. Colors rotate across: red, teal, green, navy

DETAILED DEPARTMENT SECTION
Below grid, expandable accordion cards for each department:
- Department name + icon as header
- Description paragraph
- Available doctors list
- Key procedures/services

=========================================================
PAGE 5: FACILITIES
=========================================================

HERO BANNER
H1: "Our Facilities"
Subtext: "Modern infrastructure designed for patient safety and comfort"

FACILITIES GRID (alternating layout — photo left/right per facility)

Facility 1: 24/7 PHARMACY
Photo of pharmacy. Description: Fully stocked 24/7, drug formulations for children, wide range of affordable quality products

Facility 2: DIGITAL X-RAY DEPARTMENT
Photo of X-ray. Description: Fast, accurate, high-quality imaging, minimal radiation, experienced radiologists 24/7

Facility 3: HEMATOLOGY & LABORATORY
Photo of lab. Description: Advanced diagnostic technology, routine & specialized tests, phlebotomy services, international best practices, 24/7

Facility 4: INTENSIVE CARE UNIT (ICU)
Photo of ICU. Description: Ventilators, cardiac monitors, ECG, centralized oxygen, experienced intensivists, 24/7 critical care

Facility 5: OPERATION THEATRES (×6)
Photos of OTs. Description: 6 state-of-the-art theaters — Labor Room, General Surgery, Urology, Orthopedics, Neurosurgery + 2 C-arm imaging machines. Anesthesia team led by Dr. Saqib

Facility 6: DEDICATED LABOR ROOM
Photo. Description: Modern obstetric facilities, fetal monitoring, experienced gynecologists, trained midwives, 24/7 emergency obstetric services

Facility 7: GENERAL WARD
Photo. Description: Spacious, centralized oxygen supply, modern medical facilities, dedicated nursing support

Facility 8: NICU (Neonatal ICU)
Description: Specialized neonatal intensive care for newborns

INPATIENT ROOM TIERS (3-column comparison)
General Ward | Private Room | Executive Room | VIP Room
Executive Room features: Private patient room + separate attendant room, AC, LED TV, refrigerator

Facility 9: PARKING & PATIENT ACCESS
Photo. Description: Secure basement parking, 2 modern elevators, dedicated patient ramp, barrier-free for elderly and differently-abled, 24/7 access

=========================================================
PAGE 6: DIALYSIS & KIDNEY CARE
=========================================================

HERO — full width, teal/kidney themed
H1: "Renal Dialysis Unit (RDU)"
Subtext: "Advanced Kidney Care with Compassion — Serving Abbottabad"

HIGHLIGHT BANNER
"FIRST HDF (Hemo-Dia-Filtration) Service in the Region"
Red badge label. Large bold statement. Description of what HDF is.

FREE DIALYSIS PROGRAM SECTION
Icon: 💧 Large number: "100+" Free patients per month
"Al Rasheed Hospital provides completely free dialysis treatment to underprivileged patients"
Strong CTA: "Need Dialysis? Call Us: 0992-406982-83"

SUPERVISION SECTION
Dr. Muhammad Usman Zia card:
MBBS, FCPS (Nephrology) — Consultant Nephrologist Physician
HOD Nephrology, Jinnah International Hospital Abbottabad
"Under his expert supervision, the highest standards of safety, quality, and compassionate patient care are maintained"

SERVICES OFFERED
Grid of 4 cards: Hemodialysis | Hemo-Dia-Filtration (HDF) | Renal Consultations | Kidney Health Monitoring

2025 STATS
1,368 free dialysis sessions provided in 2025

LOCATION & APPOINTMENT
CTA to contact page

=========================================================
PAGE 7: PERFORMANCE STATISTICS 2025
=========================================================

HERO
H1: "Hospital Performance Highlights — 2025"
Subtext: "January 1 – December 31, 2025"

ANIMATED STATS DASHBOARD
Dark navy background. Large animated counters.
2×4 grid:
Row 1: OPD 14,200 | Surgeries 1,365 | Emergencies 1,255 | Admissions 1,390
Row 2: Free Dialysis 1,368 | Lab Tests 14,581 | Ultrasounds 5,077 | X-Rays 2,373
Each: Large teal number, white label, icon

RADIOLOGY SUBSECTION
Smaller 4-card row:
Ultrasound 5,077 | Doppler U/S 179 | X-Rays 2,373 | ECG 70

SUMMARY TEXT
Paragraph explaining these statistics reflect the trust and commitment of the hospital

=========================================================
PAGE 8: GALLERY
=========================================================

HERO
H1: "Photo Gallery"

FILTER TABS
All | Hospital Exterior | ICU | Operation Theatre | Dialysis Unit | General Ward | Labor Room | Pharmacy | Laboratory | Rooms | Parking

MASONRY PHOTO GRID
Lightbox on click. Responsive masonry layout.
Photo categories from hospital PDF: exterior, ICU beds, OT rooms, dialysis machines, general ward, labor room, pharmacy shelves, lab equipment, executive rooms, VIP rooms, nursing station, parking/elevators

=========================================================
PAGE 9: CONTACT US
=========================================================

HERO
H1: "Contact Us"

2-COLUMN LAYOUT:
Left column: Contact info cards
- 📍 Main Mansehra Road, Opposite Gillani Mart, Kala Pull, Abbottabad
- 📞 0992-406982-83
- 📱 0317-7338830
- ✉ rashidhospi@gmail.com
- ⏰ Emergency & Pharmacy: 24/7

Location diagram card showing nearby landmarks:
- Abbott College of Nursing (nearby)
- Al Rasheed Mosque (on premises)
- Gillani Mart (opposite)
- Emmaraat Tiles (nearby)
- Abbottabad Road

Right column: Appointment/inquiry form
Fields: Full Name | Phone Number | Email | Department (dropdown — all departments) | Message
Submit button (red)

FULL-WIDTH GOOGLE MAP
400px height, showing hospital location on Mansehra Road, Abbottabad

=========================================================
PAGE 10: BOOK APPOINTMENT
=========================================================

HERO
H1: "Book an Appointment"
Subtext: "Schedule a consultation with our specialist doctors"

EMERGENCY BANNER
Red strip: "For Medical Emergencies — Call Immediately: 0992-406982-83 | 0317-7338830"

APPOINTMENT FORM (centered, max-width 700px, white card with shadow)
Fields:
- Full Name *
- Phone Number *
- Email Address
- Department * (dropdown: all 17 departments)
- Preferred Doctor (dropdown: all consultants by department)
- Preferred Date *
- Preferred Time Slot (Morning / Afternoon / Evening)
- Additional Notes (textarea)
- Submit Button (large, red, full width): "Confirm Appointment"
Note below: "Our team will contact you within 24 hours to confirm your appointment"

CONTACT ALTERNATIVES
3 small cards: Call Us | WhatsApp | Visit In Person

=========================================================
PAGE 11: REGULATORY & COMPLIANCE
=========================================================

HERO
H1: "Registration & Regulatory Compliance"

LICENCE CARDS (3 stylized certificate cards)
Card 1: CERTIFICATE OF REGISTRATION
Khyber Pakhtunkhwa Health Care Commission
Registration No: HCCR 0388 2025 | Date: 06-Jan-2025
Registered as: In-Patient Health Care Establishment — Hospital (100 to 299 beds)
Owner: Rasheed Ul Haq | NIC: 1550160386321
Service Provider: Dr. Niaz Jamil | NIC: 1730102388019

Card 2: PROVISIONAL LICENCE
Khyber Pakhtunkhwa Health Care Commission
Al Rasheed Hospital & Kidney Center, Abbottabad, KPK
Licensed as: In-Patient Health Care Establishment — Hospital
Effective: April 24, 2025 through July 23, 2025
PL-01-0148/25

Card 3: LICENCE APPENDIX A
Licence No. 01-00135/26
Licensed as: In-Patient Health Care Establishments
Under Section 12 of the KP Health Care Commission Act, 2015
Proprietor: Rasheed Ul Haq | Father: Muhammad Haq | NIC: 15501-60138632-1 | Sole Proprietor

COMPLIANCE STATEMENT
Full paragraph about commitment to regulatory standards

=========================================================
DESIGN PRINCIPLES (APPLY TO ALL PAGES)
=========================================================

SPACING: Generous whitespace — minimum 80px vertical padding per section
CARDS: Subtle box-shadow (0 2px 16px rgba(0,0,0,0.08)), rounded corners 12px, white background
HOVER STATES: All interactive elements lift (transform: translateY(-4px)) on hover with transition 0.2s
BUTTONS: Rounded corners (8px), minimum width 160px, padding 12px 28px
IMAGES: Always use object-fit: cover, lazy loading, alt text
TYPOGRAPHY SCALE:
  - H1: 48px / Poppins Bold
  - H2: 36px / Poppins SemiBold
  - H3: 24px / Poppins SemiBold
  - Body: 16px / Inter Regular
  - Small: 14px / Inter Regular
  - Caption: 12px / Inter Regular

RESPONSIVE BREAKPOINTS:
  - Mobile: < 640px (1 column layouts)
  - Tablet: 640–1024px (2 column layouts)
  - Desktop: > 1024px (full layouts)

ACCESSIBILITY:
  - All buttons have clear focus states
  - Color contrast meets WCAG AA
  - All images have alt text
  - Skip to content link
  - Semantic HTML throughout

LOADING STATES:
  - Skeleton screens for doctor cards and gallery
  - Smooth fade-in animations on scroll (IntersectionObserver)
  - Animated counters trigger when scrolled into view

MEDICAL TRUST SIGNALS (on every page):
  - HCCR licence number in footer
  - "Care with Compassion" tagline
  - Emergency number prominently displayed
  - Doctor qualifications clearly shown
```

---

## PART 6: DEVELOPMENT PHASE PLAN

### Phase 1 (Frontend — Current)
- Next.js + Tailwind setup
- All 11 pages (static data)
- Responsive design
- Animations
- Contact form (frontend only)
- Google Maps embed
- Static deployment on Vercel

### Phase 2 (Backend — After Client Input)
- Next.js API routes OR separate Node.js/Laravel backend
- Database: PostgreSQL or MongoDB
- Appointment booking system
- Doctor profiles CMS (Sanity or Strapi)
- News & Events blog
- Patient feedback forms
- Admin dashboard

### Phase 3 (Optional Future)
- Online patient portal
- WhatsApp integration
- SMS appointment reminders
- Lab reports download
- SEO optimization + Google Analytics

---

*Document prepared by: Website Strategy Team*
*Hospital: Al Rasheed Hospital & Kidney Center, Abbottabad*
*Website Concept Reference: jinnahhosp.com (improved structure)*
*Date: June 2026*
