# 05 - Technical SEO, Image Alt-Text & Schema Implementation

This document specifies the technical search engine optimization (SEO) architecture, image optimization standards, and complete JSON-LD Structured Data schemas for **familydentalcare.in**.

---

## 1. Image Alt-Text Optimization Strategy

Replace all generic file names (e.g., `img1.jpg`, `banner.png`) with descriptive, keyword-rich alt attributes designed to capture regional Google Image Search and web rankings:

| Image Asset | Target File Name / Location | Recommended Alt-Text Attribute |
| :--- | :--- | :--- |
| **Hero Main Banner** | `hero_cosmetic_dentistry.webp` | `alt="Advanced Smile Corrections and Dental Veneers near Oachira and Kayamkulam"` |
| **Clear Aligner Tray** | `clear_aligners_kayamkulam.webp` | `alt="Custom Clear Aligners Teeth Straightening Kayamkulam"` |
| **Dental Implant Illustration** | `titanium_dental_implants.webp` | `alt="Permanent Titanium Dental Implants Oachira Alappuzha"` |
| **Doctor Consultation Photo** | `dr_farhana_bds_consult.webp` | `alt="Dr Farhana BDS Chief Dental Surgeon Family Dental Care"` |
| **Porcelain Veneers Before/After**| `veneers_smile_makeover.webp` | `alt="Porcelain E-Max Veneers Smile Makeover Case Oachira"` |
| **Single-Sitting RCT Rotary** | `rotary_root_canal_treatment.webp`| `alt="Single-Sitting Painless Rotary Root Canal Treatment Vallikunnam"` |

---

## 2. Structured Data: Dentist Schema (JSON-LD)

Place this schema script directly inside the `<head>` tag of the homepage and key service pages:

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dentist",
  "@id": "https://familydentalcare.in/#dentist",
  "name": "Family Dental Care",
  "url": "https://familydentalcare.in",
  "logo": "https://familydentalcare.in/favicon.png",
  "image": "https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop",
  "telephone": "+917012761098",
  "priceRange": "₹₹",
  "currenciesAccepted": "INR",
  "paymentAccepted": "Cash, Credit Card, Debit Card, UPI, Net Banking, EMI",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Kanjippuzha Pallimukk, Changankulangara - Kambisseri Rd",
    "addressLocality": "Vallikunnam",
    "addressRegion": "Kerala",
    "postalCode": "690501",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 9.1202,
    "longitude": 76.5637
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      "opens": "09:00",
      "closes": "18:30"
    }
  ],
  "founder": {
    "@type": "Person",
    "name": "Dr. Farhana",
    "jobTitle": "Chief Dental Surgeon & Aesthetic Consultant",
    "honorificPrefix": "Dr.",
    "hasCredential": "BDS (Bachelor of Dental Surgery)"
  },
  "medicalSpecialty": [
    "Orthodontics",
    "Prosthodontics",
    "Cosmetic Dentistry",
    "Periodontics",
    "Pediatric Dentistry"
  ],
  "areaServed": [
    {
      "@type": "AdministrativeArea",
      "name": "Oachira"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Kayamkulam"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Karunagappally"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Charummoodu"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Vallikunnam"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Mavelikara"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Alappuzha"
    }
  ],
  "sameAs": [
    "https://maps.google.com/?cid=1155437812921048890",
    "https://wa.me/917012761098"
  ]
}
</script>
```

---

## 3. Structured Data: FAQPage Schema (JSON-LD)

Embed this schema block on all pages displaying the Section 8 FAQ Accordion to secure Google Rich Answer snippet rankings:

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long do porcelain dental veneers last, and do they look natural?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "High-grade porcelain (E-Max) veneers typically last 10 to 15+ years with normal oral hygiene. They are individually shaded to match your natural enamel translucency and are highly resistant to coffee, tea, and tobacco stains."
      }
    },
    {
      "@type": "Question",
      "name": "Should I get clear aligners or dental veneers for my smile correction?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If your teeth have significant crowding, rotation, or bite misalignment, clear aligners gently move your natural teeth into position over 6 to 14 months. If your teeth are already well aligned but have surface chips, gaps, or permanent stains, dental veneers correct your smile in just 1 to 2 visits."
      }
    },
    {
      "@type": "Question",
      "name": "Is dental implant surgery painful?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Dental implant placement is performed under precise local anaesthesia, ensuring total comfort during the procedure. Most patients report less post-procedure discomfort than a routine extraction and return to normal light activities the following day."
      }
    },
    {
      "@type": "Question",
      "name": "How frequently will I need to visit the clinic during clear aligner treatment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Unlike traditional braces that require monthly wire adjustments, clear aligner checkups occur only once every 6 to 8 weeks to review progress and collect your next tray sets—convenient for patients traveling from Kayamkulam or Oachira."
      }
    },
    {
      "@type": "Question",
      "name": "Are interest-free monthly installment (EMI) plans available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer phased payments and zero-interest monthly EMI plans for smile corrections, veneers, aligners, and dental implants."
      }
    }
  ]
}
</script>
```

---

## 4. Key On-Page SEO Checklist

- [ ] **Title Tag Format:** `Advanced Smile Corrections & Dental Implants | Family Dental Care (near Oachira & Kayamkulam)`
- [ ] **Meta Description Format:** `Premier Cosmetic & Implant Dental Center serving Oachira, Kayamkulam & Karunagappally. Led by Dr. Farhana (BDS). Digital Smile Design, Veneers, Clear Aligners & Implants.`
- [ ] **Canonical URL:** Self-referencing canonical tag on all pages (`<link rel="canonical" href="https://familydentalcare.in/..." />`).
- [ ] **OpenGraph (OG) Meta Tags:** Title, Description, Image, and Type configured for WhatsApp and Facebook card sharing.
- [ ] **Mobile Responsiveness:** Viewport meta tag enabled with fast-loading responsive assets.
