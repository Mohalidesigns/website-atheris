# Launch Checklist

Status of the technical SEO work and the go-live steps. ✅ done · ⏳ needs Mohammed · ⬜ not started

## Technical SEO (implemented & deployed)
- ✅ Tracking consolidated to GTM-only (no double-firing GA4/Pixel)
- ✅ `robots.txt` — sitemap declared, admin disallowed, AI crawlers allowed
- ✅ `llms.txt` published
- ✅ Structured data: Organization, WebSite, SoftwareApplication (×5), BreadcrumbList, FAQPage (×12), LocalBusiness
- ✅ Breadcrumbs site-wide
- ✅ Keyword H1s (solutions + home) + FAQ on 12 pages
- ✅ Metadata system: canonical, full OG, robots meta, `en-NG`, hreflang, theme-color
- ✅ NAP + tap-to-call phone + LocalBusiness
- ✅ Sitemap hardened: `lastmod` on all URLs + image sitemap
- ✅ Image alt coverage complete (audit finding was a false positive)

## Search Console / Bing
- ✅ Google Search Console verified (`atherislimited@gmail.com`, URL-prefix, HTML tag)
- ⏳ Submit `sitemap.xml` in GSC (Indexing → Sitemaps → `sitemap.xml`)
- ⏳ Request indexing for key pages (home, 5 solutions, /platform, /contact)
- ⬜ Bing Webmaster Tools — add site (import from GSC), submit sitemap
- ⬜ Google Business Profile — create with matching NAP

## Validation (run after deploy)
- ⬜ Rich Results Test on `/` and `/solutions/audit-management` — expect Organization, Breadcrumb, FAQ, SoftwareApplication, no errors
- ⬜ Schema Markup Validator (schema.org) — confirm the `@graph` links resolve
- ⬜ PageSpeed Insights on home + one solution page — record LCP/INP/CLS (mobile, throttled)
- ⬜ Mobile-friendly / render check

## Measurement (blocking paid) — ⏳ needs Mohammed
- ⏳ Confirm GTM container `GTM-59B4JQCC` fires: GA4 config (all pages), Meta Pixel base (all pages), Meta **Lead** tag on `generate_lead` custom event
- ⏳ Provide GA4 Measurement ID + Meta Pixel ID (to document + verify no duplicates)
- ⬜ GA4 key events: `demo_request`, `roi_calculator_complete`, `whitepaper_download` (+ `contact_form_submit`, `solution_page_view`, `scroll_75`, `outbound_click`)
- ⬜ Consent Mode v2 wired to an NDPA-appropriate cookie banner (deny analytics/ads storage until consent)

## Content / claims — ⏳ needs Mohammed
- ⏳ Rule on the 6 flagged claims (`08-claims-register.md`) before any ad copy or new page
- ⏳ Business facts: founding year, registered street address (completes Organization + LocalBusiness)

## Nice-to-have (SEO backlog)
- ⬜ `/solutions` hub page (internal-link hub, targets *GRC suite Nigeria*)
- ⬜ `/pricing` decision (tiers vs "request pricing")
- ⬜ Title/H1 tuning per `02-metadata-matrix.md` follow-ups
- ⬜ Auto-regenerate sitemap `lastmod` (currently config-driven `content_updated`)
