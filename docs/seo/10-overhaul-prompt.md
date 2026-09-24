# Claude Code Prompt — Atheris Limited SEO/SEM Overhaul
### atherislimited.com · Laravel + Inertia/Blade

> **How to use:** paste everything below the line into Claude Code from the root of the Atheris website repo.
> Fill in the `[BRACKETS]` in Section 0 first. Sections 1–3 reflect a live audit of the site performed on 17 Sept 2026 — the gaps listed are real, not hypothetical.

---

# ROLE

You are a senior technical SEO engineer and Laravel developer working on the Atheris Limited corporate website (`https://atherislimited.com`). The site already has a solid metadata foundation. Your job is **not** to rebuild it — it is to close the specific structural gaps that are preventing Atheris from owning the "GRC software Nigeria" search category, and to make the site ready for paid campaigns across Google and all social platforms.

Read the codebase before changing anything. Never invent facts about the business.

---

# 0. PROJECT CONSTANTS — fill these in before running

```
Primary domain:        https://atherislimited.com
Product subdomain:     https://thirdline.atherislimited.com
Company legal name:    Atheris Limited
Registered address:    [4 Points by Sheraton, Lagos, Nigeria]
Phone (E.164):         +2348035935802
Phone (display):       +234 803 593 5802
Public email:          [info@atherislimited.com]
LinkedIn:              https://linkedin.com/company/atheris-limitedng
X/Twitter:             @atherislimited
Facebook:              @atherislimited
Instagram:             @atheris.limited
YouTube:               [URL or "none yet"]
Founding year:         [YYYY]
Brand palette:         Navy #0B1F3A · Gold #C9A227 (AEGIS design system)
```

## Tracking stack — VERIFIED LIVE 19 Sept 2026

```
Google Tag Manager:    GTM-59B4JQCC          ← INSTALLED AND LIVE ON SITE
Google site verif.:    BSAzXuk2ml-2K-9ACNiNnhLNO_TQldxpHYgO2RHO7Sg   ← LIVE IN <head>
GA4 Measurement ID:    [G-XXXXXXXXXX]        ← configured inside the GTM container
Meta Pixel ID:         [XXXXXXXXXXXX]        ← configured inside the GTM container
Google Ads ID:         [AW-XXXXXXXXX]        ← not yet confirmed
LinkedIn Partner ID:   [XXXXXXX]             ← not yet confirmed
```

**Important:** GTM is correctly installed and the Google Search Console verification token is live in the `<head>`. GA4 and the Meta Pixel are **not visible in the page source**, which is the expected and correct result when they are deployed as tags inside the GTM container rather than hard-coded. This is the right architecture — do not "fix" it by hard-coding those scripts into the layout.

Because they live inside the container, their IDs cannot be read from the site. Mohammed must paste the GA4 Measurement ID and Meta Pixel ID above from the GTM workspace (**Tags → open each tag → Tag Configuration**) or from GA4 Admin → Data Streams and Meta Events Manager.

**Verification task (do this before writing any tracking code):** confirm in the GTM container that (a) the GA4 configuration tag fires on all pages, (b) the Meta Pixel base code fires on all pages, (c) neither is duplicated by a hard-coded copy in the Blade/Inertia layout — double-firing inflates sessions and corrupts conversion counts. Report what you find.

---

# 1. WHAT THE LIVE SITE ALREADY DOES WELL — PRESERVE THIS

Verified live on 17 Sept 2026. Do not regress any of it:

- **Homepage title:** `Atheris Limited — Africa's AI-First GRC Platform`
- **Homepage description:** `Africa's only AI-first Governance, Risk & Compliance platform with native CBN, BOFIA, and NDPA compliance — purpose-built for Nigerian financial institutions.`
- **Audit page title:** `AI-Powered Internal Audit Management for African Banks | Atheris`
- **Compliance page title:** `Regulatory Compliance Management Software for Nigerian Banks | Atheris`
- Descriptions are keyword-bearing, regulator-specific (CBN/BOFIA/NDPA/AML-CFT), and within length limits.
- A valid `sitemap.xml` exists with 26 URLs plus blog posts carrying `lastmod`.
- Clean IA already in place: `/platform/*`, `/solutions/*`, `/industries/*`, `/why-atheris/*`, `/resources/*`, `/legal/*`.
- Five module pages live: audit-management, enterprise-risk-management, controls-management, compliance-management, esg-management.
- Four industry pages live: banks, microfinance, insurance, capital-markets.
- A CBN Compliance Hub and ROI Calculator exist — both are strong link-earning and lead-gen assets.

**The metadata layer is largely healthy. The gaps are structural, semantic, and campaign-readiness.**

---

# 1.1 LIVE URL INVENTORY & KEYWORD MAP — WORK FROM THESE EXACT PATHS

These are the 26 real URLs in `https://atherislimited.com/sitemap.xml` as of 17 Sept 2026, plus blog posts. **Use these paths verbatim.** Do not invent routes, do not assume a page exists that isn't listed here, and do not rename a slug without the §5.10 decision.

## Tier 1 — Money pages (the five solution modules)

| Live URL | Primary keyword | Secondary keywords |
|---|---|---|
| `/solutions/audit-management` | internal audit software Nigeria | audit management software Nigeria · IIA-compliant audit software · audit workpaper automation · risk-based audit planning software |
| `/solutions/enterprise-risk-management` | enterprise risk management software Nigeria | ERM software Africa · risk register software Nigeria · RCSA software · ISO 31000 risk software |
| `/solutions/controls-management` | internal control software Nigeria | continuous controls monitoring software · control testing software · COSO framework software |
| `/solutions/compliance-management` | compliance management software Nigeria | CBN compliance software · NDPA compliance software · AML/CFT compliance software · BOFIA compliance |
| `/solutions/esg-management` | ESG reporting software Nigeria | sustainability reporting software Africa · NGX ESG disclosure software · ESG compliance platform |

**Note:** there is no `/solutions` hub page in the sitemap. Create one — it is the natural internal-link hub for the five modules and a target for the head term *GRC modules / GRC suite Nigeria*.

## Tier 2 — Platform & positioning

| Live URL | Primary keyword |
|---|---|
| `/` | GRC software Nigeria |
| `/platform` | GRC platform Nigeria · integrated GRC suite |
| `/platform/ai-intelligence` | AI GRC platform · AI risk intelligence software |
| `/platform/security` | secure GRC platform · NDPA-compliant data hosting Nigeria |
| `/platform/integrations` | GRC core banking integration · Finacle GRC integration |
| `/why-atheris` | best GRC software in Nigeria · Nigerian GRC vendor |

## Tier 3 — Industry pages (highest commercial intent — treat as Tier 1 for paid)

| Live URL | Primary keyword |
|---|---|
| `/industries/banks` | GRC software for Nigerian banks · compliance software for commercial banks |
| `/industries/microfinance` | GRC software for microfinance banks Nigeria · MFB compliance software |
| `/industries/insurance` | GRC software for insurance companies Nigeria · NAICOM compliance software |
| `/industries/capital-markets` | GRC software for capital markets Nigeria · SEC Nigeria compliance software |

## Tier 4 — Resources & conversion assets

| Live URL | Role | Action |
|---|---|---|
| `/resources/cbn-hub` | Your strongest link-earning and authority asset | Build the content cluster around it; add FAQ + `FAQPage`; target *CBN compliance requirements* informational queries |
| `/why-atheris/roi-calculator` | Best-converting interactive asset | Instrument `roi_calculator_complete` as a GA4 key event; consider surfacing it in main nav, not nested under `/why-atheris` |
| `/resources/whitepapers` | Gated lead magnets | `whitepaper_download` key event; add `noindex` only on the thank-you, never the listing |
| `/resources/blog` | Content hub | `BlogPosting` schema, author `Person` with real audit credentials (E-E-A-T) |
| `/customers` | Social proof | Blocked by §3 claim verification — needs named logos with written consent |
| `/demo` | Primary conversion page | `demo_request` key event; keep `index,follow` |

## Tier 5 — Corporate & legal

`/about` · `/careers` · `/partners` · `/legal/privacy` · `/legal/terms` — low search value, keep indexable, ensure unique titles and descriptions.

## Live blog posts detected

Three posts carrying `lastmod` 17 Sept 2026: BOFIA 2020, AI in internal audit, NDPA compliance. Confirm their exact slugs from the codebase and add them to the keyword map.

## Missing pages worth creating

| Proposed URL | Why |
|---|---|
| `/solutions` | Hub for the five modules — currently absent |
| `/contact` | No contact page exists; blocks `LocalBusiness` schema and NAP consistency (see §5.9) |
| `/pricing` | "Naira Priced" is already a homepage selling point but there is no pricing page. *How much does GRC software cost in Nigeria* is a high-intent query with no landing page. Decide with Mohammed whether to publish tiers or a "request pricing" page |
| `/lp/<module>` ×5 | Paid campaign landing pages (see §6.6) |

**Rule: one primary keyword per URL.** Before adding any page, check this map for cannibalisation — two pages competing for *compliance software Nigeria* will beat each other rather than a competitor.

---

# 2. CONFIRMED GAPS — THIS IS THE ACTUAL WORK

| # | Gap | Evidence | Priority |
|---|-----|----------|----------|
| G1 | `robots.txt` is a two-line stub (`User-agent: * / Disallow:`) with **no sitemap declaration** and no AI-crawler directives | Fetched live | Critical |
| G2 | **No FAQ sections anywhere** → no `FAQPage` schema → the site cannot be extracted into AI answers or Google's People Also Ask | Verified on audit + compliance pages | Critical |
| G3 | **No breadcrumbs** on any interior page → no `BreadcrumbList` schema → no breadcrumb rich result | Verified | High |
| G4 | **H1s carry no primary keyword.** `Govern with Certainty. Built for Africa.` and `The Intelligent Internal Audit Solution` are brand voice, not search intent. `Stay Ahead of Nigerian Regulations` has no product noun at all | Verified | High |
| G5 | **No `llms.txt`** — for an AI-first positioning, being mis-summarised by LLMs is a direct revenue risk | Verified absent | High |
| G6 | **No structured data at all.** Re-checked 19 Sept 2026 — zero JSON-LD blocks on the homepage. No `Organization`, no `WebSite`, no `SoftwareApplication`. The site is invisible to Google's entity graph | **Confirmed absent on two separate checks** | Critical |
| G7 | **No contact details anywhere on the homepage** — no address, no phone, no email. Re-checked 19 Sept 2026, still absent. Blocks `LocalBusiness` schema and weakens NAP consistency, a ranking factor for geo-modified terms. The phone number now exists (§0) — publish it | Verified twice | High |
| G8 | **Unsubstantiated superlatives in prominent copy**: "Africa's #1 AI-First GRC Platform", "Africa's only AI-first GRC platform", "500+ Nigerian institutions", "Trusted by Africa's leading financial institutions" | Verified live | **See §3** |
| G9 | Sitemap is a flat URL set with no `lastmod` on the 26 core pages, no image sitemap, no sitemap index | Verified | Medium |
| G10 | Solution URL slugs use internal naming (`/solutions/audit-management`) rather than search-demand naming (`internal-audit-software`) | Verified | Medium — see §5 |
| G11 | **GTM and GSC verification now live** (`GTM-59B4JQCC`) — good. Still outstanding: no consent layer / Consent Mode v2, no documented GA4 key events, no paid landing pages, no UTM standard | Partially resolved 19 Sept | Critical for SEM |
| G12 | **No `<meta name="robots">`, no `hreflang`, no confirmed canonical strategy** — verify in codebase alongside G6 | Needs codebase check | High |

---

# 3. CLAIM VERIFICATION — DO THIS BEFORE ANY AD CAMPAIGN

This is a compliance software vendor. Unverifiable marketing claims are a credibility liability in front of Chief Audit Executives, and they are an outright policy problem on paid channels.

**Flag every one of these to Mohammed and get written confirmation before they survive into ads or new pages:**

1. **"500+ Nigerian institutions served"** — Nigeria has roughly two dozen commercial banks, ~880 microfinance banks, ~50 insurers, and a few hundred capital-market operators. 500+ is a defensible number only if it counts a specific, documented base. Ask what it counts. If it cannot be evidenced, replace it with something true and still strong.
2. **"Africa's #1 AI-First GRC Platform"** and **"Africa's only AI-first GRC platform"** — Google Ads and Meta both restrict unverifiable superlative and exclusivity claims. "#1" requires third-party substantiation to run in ad copy. Recommend reframing to a defensible differentiator: *"The GRC platform built in Nigeria, for Nigerian regulation"* or *"Purpose-built for CBN, BOFIA and NDPA — not retrofitted."*
3. **"Trusted by Africa's leading financial institutions"** — needs at least named logos with written consent, or it must be softened.
4. **"99.9% platform uptime"** — must be backed by a published status page or SLA, or removed.
5. **"2,000+ GRC professionals on newsletter"** — verify against the actual list count.

Create `docs/seo/08-claims-register.md` listing every quantitative or superlative claim on the site, its current source, and its verification status. Mark anything unverified `[TODO: confirm with Mohammed]`. **Do not propagate an unverified claim into a new page, meta description, or ad.**

---

# 4. DISCOVERY PHASE — READ BEFORE YOU WRITE

Produce a written audit before editing. Write it to `docs/seo/00-baseline-audit.md`.

1. Map the stack: Laravel version, Blade vs Inertia+React, Vite config, `routes/web.php`, layout files, and any SEO package already in `composer.json` (`spatie/laravel-sitemap`, `artesaos/seotools`, etc.).
2. Determine **how metadata is currently set** — per-view hardcoded tags, a shared component, or a config-driven service. This decides whether Section 5.1 is a refactor or a new build.
3. **Resolve G6:** grep the codebase for `application/ld+json`, `schema.org`, `@context`. Expect to find nothing — two live checks found zero JSON-LD. Confirm and report.
4. **Resolve G11/G12:** grep for `gtag`, `googletagmanager`, `fbq`, `_linkedin_partner_id`, `dataLayer`, `google-site-verification`, `canonical`, `hreflang`, `name="robots"`. GTM `GTM-59B4JQCC` and the GSC verification token are known to be live — confirm they are rendered once and only once, from the layout, with no duplicate hard-coded GA4 or Pixel snippets alongside them.
5. Inventory every route with: URL, title, description, H1, canonical, indexability, word count.
6. Inventory every image: path, alt text (or MISSING), format, file size, dimensions.
7. Run a link check for orphans and broken internal links.
8. List the real product names as they appear in code (the audit module is branded **ThirdLine** on the live site — confirm the branding for the other four modules before writing copy that names them).

**Stop here and show me the audit. Do not modify files until I approve it.**

---

# 5. IMPLEMENTATION

## 5.1 Metadata system (refactor, don't rewrite the strings)

The existing titles and descriptions are good. Your job is to put them behind a system that prevents future drift:

1. `config/seo.php` — site name, title suffix, default description, default OG image, social handles, organisation data.
2. A single SEO head component (`resources/views/components/seo/meta.blade.php` and/or a `<Seo />` React component for Inertia) accepting `title`, `description`, `canonical`, `ogImage`, `ogType`, `noindex`, `schema`.
3. A `App\Support\Seo\SeoData` value object so controllers declare SEO fluently.
4. Wire it into the master layout so no page can render without a head block.
5. **Migrate the existing live strings into this system verbatim.** Only rewrite a title or description where Section 5.2 requires it.
6. Add a feature test asserting every route in `routes/web.php` returns a unique, non-empty `<title>` and `meta[name=description]`, plus a self-referencing canonical.

**Per-page requirements:** title 50–60 chars, description 140–158 chars, self-referencing absolute canonical, full OG set (`og:type`, `og:site_name`, `og:title`, `og:description`, `og:url`, `og:image` 1200×630, `og:image:alt`, `og:locale` = `en_NG`), Twitter `summary_large_image`, `<html lang="en-NG">`, theme-color `#0B1F3A`, full favicon set, `robots` = `index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1` on public pages and `noindex,nofollow` on thank-you/preview/admin.

## 5.2 Fix the H1s (G4)

Keep the brand voice — add the keyword. Every H1 must contain the page's primary keyword while still reading like marketing copy, not a keyword string.

| Page | Current H1 | Proposed H1 |
|---|---|---|
| `/` | Govern with Certainty. Built for Africa. | **AI-First GRC Software for Africa's Financial Institutions** (keep the current line as the H2/kicker) |
| `/solutions/audit-management` | The Intelligent Internal Audit Solution | **Internal Audit Management Software for Nigerian Banks** |
| `/solutions/enterprise-risk-management` | — | **Enterprise Risk Management Software for African Financial Institutions** |
| `/solutions/controls-management` | — | **Internal Control & Continuous Controls Monitoring Software** |
| `/solutions/compliance-management` | Stay Ahead of Nigerian Regulations | **Regulatory Compliance Management Software for Nigerian Banks** |
| `/solutions/esg-management` | — | **ESG & Sustainability Reporting Software for African Institutions** |

Rule: exactly one `<h1>` per page, keyword in the first 100 words of body copy, logical `h2`/`h3` hierarchy with no skipped levels, semantic landmarks (`<header> <nav> <main> <article> <section> <footer>`), and no bare "Learn more" / "Click here" anchors.

## 5.3 FAQ blocks + FAQPage schema (G2) — highest-leverage item

Add a 6–8 question FAQ to every solution page, every industry page, `/platform`, `/why-atheris`, and the CBN Hub. This single change does more for AI-search visibility than anything else on the list.

**Answer format is non-negotiable:** each answer must be a self-contained 40–60 word paragraph that makes sense quoted in isolation, opening with an entity-first sentence — "Atheris is a Nigerian GRC platform that…". An LLM must be able to lift one sentence and attribute it correctly.

Seed questions (expand per page):

- What is the best GRC software for Nigerian banks?
- Which internal audit software do Nigerian financial institutions use?
- How does Atheris support CBN regulatory compliance?
- What does NDPA 2023 require of financial institutions, and how does Atheris help?
- Is there a Nigerian alternative to international GRC platforms?
- How long does GRC software implementation take in Nigeria?
- Does Atheris support IIA standards / COSO / ISO 31000 / ISO 27001?
- How is Atheris priced, and is pricing in Naira?
- How does AI-first GRC differ from GRC software with AI features bolted on?
- Can Atheris integrate with Finacle or other core banking systems?

Mark every FAQ block up with `FAQPage` JSON-LD and validate against Google's Rich Results Test.

## 5.4 Structured data (G6)

Implement via a PHP schema-builder class rendering typed JSON-LD — no raw JSON pasted into views. Link nodes with `@id` so Google reads one connected entity graph, which is what earns the knowledge-panel association for "Atheris Limited".

| Type | Placement |
|---|---|
| `Organization` (+`@id`) | Layout — legal name, logo, foundingDate, address, contactPoint, `sameAs` (all four social profiles), `areaServed: NG` + Africa |
| `WebSite` + `SearchAction` | Layout |
| `SoftwareApplication` | Each of the five solution pages — `applicationCategory: BusinessApplication`, featureList, offers |
| `Service` | Each solution + industry page |
| `FAQPage` | Every page with a §5.3 FAQ block |
| `BreadcrumbList` | Every non-home page (pairs with §5.5) |
| `BlogPosting` | Blog posts — author `Person` with real credentials (E-E-A-T), datePublished, dateModified, publisher |
| `LocalBusiness` | Contact page — Lagos address, geo, hours |
| `AggregateRating` | **Only with genuinely collected, verifiable reviews. Do not fabricate.** |

## 5.5 Breadcrumbs (G3)

Visible breadcrumbs on every page below the homepage, styled to the AEGIS system, marked up with `BreadcrumbList`. Pattern: `Home › Solutions › Internal Audit Management`.

## 5.6 robots.txt + llms.txt (G1, G5)

Replace the stub `robots.txt` with:

- Allow all public content including CSS/JS (Google needs them to render).
- Disallow `/admin`, `/login`, any staging or preview paths, and query-parameter duplicates.
- **Declare the sitemap URL** — currently missing entirely.
- **Explicitly allow `GPTBot`, `ClaudeBot`, `PerplexityBot`, `Google-Extended`, `CCBot`, `Bingbot`, `Applebot-Extended`.** For an AI-first GRC vendor, being citable by AI assistants is a strategic acquisition channel. Note the content-training trade-off in a comment and flag it for Mohammed's decision.

Create `/public/llms.txt`: plain markdown covering what Atheris is, the five modules with their URLs, the regulatory frameworks supported (CBN, BOFIA, NDPA, AML/CFT, IIA, COSO, ISO 27001/31000), industries served, and verified company facts. This is how you control your own summary in LLM answers. Every fact in it must pass §3.

## 5.7 Sitemap hardening (G9)

Convert to a sitemap index with child sitemaps (pages, solutions, industries, resources, blog). Accurate `lastmod` on all 26+ core URLs, not just blog posts. Add an image sitemap. Auto-regenerate on deploy via `spatie/laravel-sitemap` and a scheduled command.

## 5.8 Images & alt text

Descriptive 8–16 word alts stating what's shown plus product context — `Atheris internal audit dashboard showing risk-rated findings for a Nigerian bank`. Never "image of", never stuffed, never missing; decorative images get `alt=""` + `role="presentation"`. Kebab-case descriptive filenames. WebP/AVIF with fallbacks, explicit width/height, `loading="lazy"` + `decoding="async"` below the fold, `fetchpriority="high"` on the LCP hero only, `srcset`/`sizes` on hero and feature imagery. Generate branded 1200×630 OG images per top-level page in the AEGIS palette, stored in `public/images/og/`. Inline SVGs get `<title>` + `aria-label`; decorative ones `aria-hidden="true"`.

## 5.9 Contact & NAP (G7)

Publish full contact details — street address, phone `+234 803 593 5802`, email — in the sitewide footer and on a new `/contact` page. Mark the phone up as `<a href="tel:+2348035935802">` so it is tap-to-call on mobile, and use identical formatting in every location (NAP consistency is what makes the signal count).

This unblocks `LocalBusiness` schema, feeds the `Organization.contactPoint` node in §5.4, and materially helps geo-modified queries. Also create the Google Business Profile listing with exactly matching details.

**One judgement call for Mohammed:** `+2348035935802` is a mobile number. It works, and for a Nigerian B2B buyer it is unremarkable — but a landline or a virtual business number on the contact page reads as more established to a bank's procurement team evaluating a vendor. Worth considering before a paid campaign sends cold traffic to that page.

## 5.10 URL slugs (G10) — decision required, do not act unilaterally

Search demand favours `internal-audit-software` over `audit-management`. But the current URLs are indexed and carry equity. **Present both options to Mohammed with the redirect cost, and wait.**

- *Option A (recommended, low risk):* keep existing slugs. Capture the keyword in the title, H1, and body — which §5.2 already does. Slug is a weak ranking factor.
- *Option B:* migrate slugs, implement 301s for every changed URL, update every internal link, resubmit the sitemap, accept 4–8 weeks of ranking turbulence.

## 5.11 Technical & performance

Force HTTPS, canonicalise www vs non-www, consistent trailing-slash policy, HSTS. Branded 404 linking to the five solution pages. `rel=next/prev` semantics on paginated archives. `hreflang` `en-NG` + `x-default`. Core Web Vitals targets LCP < 2.5s, INP < 200ms, CLS < 0.1 — audit the Vite bundle, code-split, defer non-critical JS, self-host fonts with `font-display: swap`, inline critical CSS, Brotli, long cache headers, CDN. **Test on simulated 3G/4G** — the Nigerian mobile reality is the real constraint, not desktop fibre.

---

# 6. SEM / PAID CAMPAIGN INFRASTRUCTURE

Nothing runs until measurement is in place.

1. **GTM — already done.** `GTM-59B4JQCC` is live, with GA4 and the Meta Pixel deployed as container tags. Verify the `<noscript>` iframe is present in `<body>` as well as the head snippet, then add Google Ads and the LinkedIn Insight Tag to the same container. Do not hard-code any of these into the layout.
2. **GA4** with enhanced measurement. Events: `demo_request`, `roi_calculator_complete`, `whitepaper_download`, `cbn_hub_view`, `contact_form_submit`, `solution_page_view`, `scroll_75`, `outbound_click`. Mark `demo_request`, `roi_calculator_complete` and `whitepaper_download` as key events. *(The ROI calculator and whitepapers are already live and are your two best-converting assets — instrument them first.)*
3. **Conversions:** Google Ads actions mapped to GA4 key events; Meta `Lead` + `CompleteRegistration`; LinkedIn conversions. Implement server-side / Conversions API where feasible.
4. **Consent:** NDPA-appropriate cookie banner wired to Google Consent Mode v2, analytics and ad storage denied until consent. **Non-negotiable** — a compliance vendor tracking visitors without consent is a sales objection waiting to happen, and NDPA is one of your own selling points.
5. **UTM standard** in `docs/seo/04-utm-conventions.md`: `utm_campaign` = `atheris_<module>_<objective>_<yyyymm>`; sources `google|linkedin|meta|x|instagram|youtube|email|whatsapp`; mediums `cpc|paid_social|organic_social|email|referral`.
6. **Paid landing pages** at `/lp/<campaign-slug>` — one per module. Single CTA, no global nav, trust signals, short form, `noindex,follow`, fast LCP, matching `/thank-you` page (`noindex`) firing the conversion event.
7. **Lead forms:** honeypot, rate limiting, server-side validation, CRM/email routing, and persist the `utm_*` payload on every submission so attribution survives into the sales conversation.
8. **Ad copy assets** → `docs/seo/05-ad-copy-assets.md`: per module, 15 Google RSA headlines (≤30 chars), 4 descriptions (≤90 chars), sitelinks, callouts, structured snippets; 5 LinkedIn single-image variants; 5 Meta primary-text variants. **Every claim must pass §3** — no "#1", no "only", no unverified counts.
9. **Social profile parity** → `docs/seo/06-social-profile-copy.md`: optimised bios, banner copy and pinned-post copy for LinkedIn (primary — your buyers are CAEs and CROs), X, Facebook, Instagram, YouTube, each carrying the core positioning keywords so branded search reinforces the entity.
10. **Verification:** GSC + Bing Webmaster tags, sitemap submitted, Rich Results validated, Consent Mode tested.

---

# 7. CONTENT LAYER

`docs/seo/03-content-calendar.md` — 90 days, 24+ pieces, each with target keyword, intent, funnel stage, outline, internal-link targets and the pillar page it supports. Bias hard toward Nigerian regulatory reality: CBN circulars, BOFIA 2020, NDPA 2023, IIA standards, ISO 27001/31000, COSO, SEC Nigeria, NAICOM, PenCom, NGX sustainability disclosure rules. The CBN Compliance Hub is the natural anchor — build the cluster around it.

Internal linking: every solution page links to at least three siblings with keyword-rich anchors (the integrated-suite story is itself an SEO asset); blog posts link up to their pillar, pillars link down to posts; nothing deeper than three clicks from home; zero orphans.

---

# 8. EXECUTION RULES

- Branch `feature/seo-sem-overhaul`; small, reviewable, single-concern commits.
- **Order:** discovery audit → claims register → schema + FAQ + breadcrumbs → robots/llms/sitemap → H1s → metadata system refactor → images → contact/NAP → performance → GTM/analytics → landing pages → docs.
- **Checkpoint with me** after the discovery audit, after the claims register, and before any URL restructuring.
- **Never invent facts.** No fabricated clients, metrics, ratings, awards or certifications. Use `[TODO: confirm with Mohammed]` and consolidate them all at the end.
- **Preserve the AEGIS design system.** Navy `#0B1F3A`, Gold `#C9A227`, existing layouts. This work changes markup semantics, metadata and assets — not the visual design.
- Run the test suite after each phase. Add tests for the SEO invariants.
- **Verify before claiming done:** Lighthouse on homepage + one solution page, JSON-LD validated, sitemap parses, no broken internal links. Report actual numbers.

---

# 9. DELIVERABLES

1. Code on `feature/seo-sem-overhaul`.
2. `docs/seo/00-baseline-audit.md` — pre-change state, including the G6 and G11 findings.
3. `docs/seo/01-keyword-map.md` — one primary keyword per URL, no cannibalisation.
4. `docs/seo/02-metadata-matrix.md` — every URL's final title, description, H1, OG.
5. `docs/seo/03-content-calendar.md`
6. `docs/seo/04-utm-conventions.md`
7. `docs/seo/05-ad-copy-assets.md`
8. `docs/seo/06-social-profile-copy.md`
9. `docs/seo/07-launch-checklist.md` — GSC/Bing submission, sitemap submission, indexing requests, GA4 conversion verification, Consent Mode test, Rich Results validation, PageSpeed re-test.
10. `docs/seo/08-claims-register.md` — every claim, its source, its verification status.
11. `docs/seo/09-open-questions.md` — all `[TODO: confirm]` items consolidated.
12. Final summary: before/after Lighthouse scores, and what still needs Mohammed's input.

**Begin with Section 4. Change nothing until the discovery audit is approved.**
