# Atheris SEO/SEM — Baseline Audit (Discovery Phase)

**Date:** 2026-09-19 · **Branch:** `feature/seo-sem-overhaul` · **Status:** awaiting approval before any implementation

> This audit fulfils Section 4 of the overhaul prompt. Per the prompt's rules, **no site files have been modified** — this document and the branch are the only changes. Nothing proceeds until you approve.

---

## 0. Headline finding (read this first)

**The tracking assumption in the prompt is out of date, and the current reality is worse: GA4, Meta Pixel, *and* GTM are all hard-coded into the layout `<head>` simultaneously.**

The prompt (§0, §6.1, G11) assumes GA4 + Meta Pixel live *only* inside the GTM container and warns "do not hard-code them." But the live code now contains all three, hard-coded, plus a second unused Setting-driven copy of each. If the GTM container `GTM-59B4JQCC` also fires a GA4 config tag and the Meta Pixel base code, **every page view and lead is being counted two-to-three times** — inflating sessions and corrupting conversion counts. This is the single most important thing to resolve before any paid spend, and it is the first decision I need from you (see §7).

Note for transparency: the hard-coded Meta Pixel (`1115892094345456`) and GTM were added earlier in our working session at your request, before this SEO prompt surfaced. So this isn't a pre-existing mystery — it's a known divergence we should now reconcile.

---

## 1. Stack map (prompt §4.1)

| Item | Finding |
|---|---|
| Framework | **Laravel 12.53.0** |
| Front-end | **Pure Blade** — no Inertia, no React (prompt's "Blade vs Inertia" → it's Blade only) |
| Build | Vite 7, Tailwind CSS 4, Alpine.js; assets committed under `public/build` (gitignored except force-added) |
| DB | MySQL (`atheris`) |
| SEO packages | **None.** No `spatie/laravel-sitemap`, no `artesaos/seotools`, no schema package. Sitemap is a hand-written Blade view at `resources/views/sitemap.blade.php` served by a closure route |
| Layout | `resources/views/layouts/app.blade.php` (public, `<x-app-layout>`), `layouts/admin.blade.php` (admin) |
| Routes | 55 GET routes total (public + `ath-admin/*`) |

## 2. How metadata is set today (prompt §4.2)

- **Mechanism:** anonymous Blade component. Pages call `<x-app-layout metaTitle="…" metaDescription="…" :ogImage="…">`; the layout head renders `{{ $metaTitle ?? '<default>' }}` etc.
- **Present:** `<title>`, `meta description`, `og:title`, `og:description`, `og:image`, `og:type`, `twitter:card`, full favicon set, `theme`-less.
- **Absent everywhere:** `canonical`, `og:url`, `og:site_name`, `og:locale`, `<meta name="robots">`, `hreflang`, `<html lang>` is `en` (not `en-NG`). No `App\Support\Seo` service or `config/seo.php`.
- **Implication:** §5.1 is a **new build** (there is no system to refactor), but the existing *strings* are good and must be migrated verbatim.

## 3. Structured data — G6 (prompt §4.3)

**Confirmed absent.** Grep for `ld+json`, `schema.org`, `@context`, `application/ld` across all views returns **0 matches**. No `Organization`, `WebSite`, `SoftwareApplication`, `FAQPage`, `BreadcrumbList`, `BlogPosting`, `LocalBusiness`. The site is invisible to Google's entity graph. **G6 = Critical, verified.**

## 4. Tracking / indexation — G11 & G12 (prompt §4.4)

Grep of `layouts/app.blade.php`:

| Signal | State | Line(s) |
|---|---|---|
| GA4 gtag `G-9RENV54SEC` | **Hard-coded** | 4–11 |
| Meta Pixel `1115892094345456` | **Hard-coded** (+ noscript) | 13–26 |
| GTM `GTM-59B4JQCC` | **Hard-coded** (+ body noscript) | 30–36, 88 |
| GSC verification `BSAzXuk…` | Live (correct) | 42 |
| Setting-driven GA (`ga_tracking_id`) | Present, unused/empty | 66–68 |
| Setting-driven GTM (`gtm_id`) | Present, unused/empty | 72–73, 93 |
| Setting-driven Pixel (`fb_pixel_id`) | Present, unused/empty | 78 |
| `canonical` / `hreflang` / `robots` meta | **None** | — |
| LinkedIn Insight (`_linkedin_partner_id`) | None | — |

**G11:** GTM is live ✓ but there is **duplicate hard-coded GA4 + Pixel** alongside it → double/triple-fire risk. No Consent Mode v2, no documented GA4 key events, no UTM standard. **G12:** no robots meta, no canonical strategy, no hreflang — all confirmed absent in code.

## 5. Route / content inventory (prompt §4.5 — abridged; full matrix is deliverable #4)

Public money/positioning pages all resolve 200. Notable H1 gaps (**G4 confirmed**):

| Page | Current H1 | Keyword? |
|---|---|---|
| `/` | dynamic hero-slide title (e.g. "Govern with Certainty. Built for Africa.") | ✗ |
| `/platform` | "One Platform. Complete GRC Coverage." (Setting default) | ✗ |
| `/solutions/audit-management` | "The Intelligent Internal Audit Solution" | partial |
| `/solutions/compliance-management` | "Stay Ahead of Nigerian Regulations" | ✗ |

## 6. Reconciliation — prompt snapshot (17–19 Sept) vs current reality

The prompt was written against an earlier state. Several items are **already done** or **changed** since:

| Prompt says | Current reality |
|---|---|
| "No contact page exists" (G7, §5.9) | ✅ `/contact` now exists (hero + form, email + "Lagos, Nigeria"), in nav + footer + sitemap. Still missing: **phone + street address** (no `tel:` link anywhere) |
| Sitemap has "26 URLs" | Now **30 URLs**, valid XML, includes `/contact`, excludes disabled solutions, gates `/software-solutions/*` behind a flag |
| Five modules incl. business-continuity/incident | Modules **renamed** ("Internal Audit Management", "Internal Control Management") and **incident/BCM/third-party-risk disabled** (TPRM 301s to ERM) |
| GA4/Pixel "only in GTM container, not in source" | ❌ Both are now **hard-coded in source** (see §0/§4) |
| GSC not yet verified | ✅ Verified under `atherislimited@gmail.com` (URL-prefix, HTML-tag). Sitemap submission in progress |
| No favicon set | ✅ Full favicon set (16/32/96, ico, apple-touch-180) added |

## 7. Confirmed gaps, re-prioritised (what the actual work is)

| # | Gap | Verified? | Priority |
|---|---|---|---|
| **G0 (new)** | Triple tracking (hard-coded GA4+Pixel+GTM) → double-firing | ✅ code | **Critical / do first** |
| G6 | Zero structured data (JSON-LD) | ✅ | Critical |
| G1 | robots.txt is 2-line stub, no sitemap line, no AI-crawler rules | ✅ | Critical |
| G2 | No FAQ sections → no `FAQPage` (biggest AI-search lever) | ✅ | Critical |
| G3 | No breadcrumbs / `BreadcrumbList` | ✅ | High |
| G4 | H1s carry no primary keyword | ✅ | High |
| G5 | No `llms.txt` | ✅ | High |
| G7 | No NAP (phone/address) in footer; `/contact` lacks phone + street | ✅ | High |
| G8 | Unverified superlatives ("#1", "only", "500+", "99.9%") | ✅ | See §3 claims register — blocks ads |
| G9 | Flat sitemap, no `lastmod` on core pages, no image sitemap/index | ✅ | Medium |
| G10 | Slugs use internal naming vs search-demand naming | ✅ | Medium — decision required (§5.10) |
| G12 | No canonical / robots-meta / hreflang | ✅ | High |
| — | ~20 of 38 public `<img>` tags missing `alt` | ✅ | Medium |

## 8. Decisions I need before implementing (checkpoints)

1. **Tracking architecture (G0) — blocking.** Do you want GA4 + Meta Pixel to live **only in the GTM container** (prompt's intent; I remove the hard-coded copies), or stay hard-coded (I remove GTM's duplicate tags instead)? I recommend **GTM-only**. I need you to confirm the GA4 Measurement ID + Meta Pixel ID currently inside the container so I can verify there's no third copy.
2. **Claims (§3).** I will not propagate "#1 / only / 500+ / 99.9% / 2,000+" into any new page or ad until you confirm each. These go into `docs/seo/08-claims-register.md`.
3. **Slugs (G10, §5.10).** Recommend **Option A** (keep slugs, capture keywords in title/H1/body). Confirm before any URL change.
4. **Business facts** for schema/llms.txt: founding year, registered street address, whether to publish the `+234 803 593 5802` mobile or a business line (§5.9), and the four non-audit module product names (audit = **ThirdLine**, controls = **SecondLine** confirmed in code; others?).

## 9. Proposed execution order (once approved)

Per prompt §8: **claims register → schema + FAQ + breadcrumbs → robots/llms/sitemap → H1s → metadata system → images → contact/NAP → performance → fix G0 tracking → landing pages → docs.** Small, single-concern commits on this branch; checkpoint after the claims register and before any slug change. Nothing merges to `main` (and therefore nothing deploys) without your say-so, since deploy triggers on push to `main`.

---

**Recommended first move on approval:** resolve **G0 (tracking)** and produce the **claims register (§3)** — these two block everything downstream (measurement integrity and ad eligibility). Then the high-leverage, low-risk SEO wins: schema + FAQ + breadcrumbs + robots/llms.
