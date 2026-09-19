# Metadata Matrix

**System (live):** all public pages render through `layouts/app.blade.php`, which now guarantees per page: unique `<title>` + `meta description`, self-referencing **canonical**, full **OG** set (`type/site_name/title/description/url/image/image:alt/locale=en_NG`), **Twitter** `summary_large_image`, `robots` (`index,follow,max-…`, or `noindex` via the `:noindex` prop), `theme-color #0B1F3A`, `<html lang="en-NG">`, hreflang `en-NG`+`x-default`, and the full favicon set. Titles/descriptions are set per page via `<x-app-layout :metaTitle :metaDescription :ogImage>` and fall back to sitewide defaults.

## Key pages

| URL | Title | H1 | Notes |
|-----|-------|----|-------|
| `/` | Atheris Limited — Africa's AI-First GRC Platform | AI-First GRC Software for Africa's Financial Institutions (sr-only; hero slides are H2) | title ⚠️ contains "only"/"#1" style framing — review under §3 |
| `/solutions/audit-management` | AI-Powered Internal Audit Management for African Banks \| Atheris | Internal Audit Management Software for Nigerian Banks | + SoftwareApplication + FAQPage |
| `/solutions/enterprise-risk-management` | Enterprise Risk Management — Atheris GRC | Enterprise Risk Management Software for African Financial Institutions | title could add "software Nigeria" |
| `/solutions/controls-management` | Control Testing & Exception Management Software for Banks \| SecondLine by Atheris | Internal Control & Continuous Controls Monitoring Software | |
| `/solutions/compliance-management` | Regulatory Compliance Management Software for Nigerian Banks \| Atheris | Regulatory Compliance Management Software for Nigerian Banks | |
| `/solutions/esg-management` | ESG Management Software — Atheris GRC | ESG & Sustainability Reporting Software for African Institutions | |
| `/platform` | (Setting-driven) | One Platform. Complete GRC Coverage. | H1 ⚠️ no primary keyword — candidate rewrite to "Integrated GRC Platform for Nigerian Financial Institutions" |
| `/contact` | Contact Us — Atheris GRC | Get in Touch | + LocalBusiness schema |
| `/industries/*` | derived | Commercial Banks / Microfinance Banks / … | + FAQPage |

## Rules for every new/edited page
- Title 50–60 chars, includes the URL's primary keyword (see `01-keyword-map.md`), brand suffix `| Atheris` or `— Atheris GRC`.
- Description 140–158 chars, keyword-bearing, regulator-specific, **no unverified claims** (§3).
- One `<h1>` containing the primary keyword; logical h2/h3.
- Set `:metaTitle`/`:metaDescription` explicitly; never rely on the default except on `/`.

## Follow-up candidates (title/H1 tuning, low risk)
- `/platform` H1 — add primary keyword.
- `/` title — resolve "#1/only" framing per claims register.
- `/solutions/enterprise-risk-management` + `/solutions/esg-management` titles — add "Nigeria/Africa" + "software" for keyword weight.
