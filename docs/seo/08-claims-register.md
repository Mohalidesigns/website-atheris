# Claims Register

**Purpose:** every quantitative or superlative claim on the site, its source, and its verification status. Per prompt §3, **no unverified claim may be propagated into a new page, meta description, schema, `llms.txt`, or ad.** Existing on-site copy is left untouched until Mohammed rules on each (removing it is a content decision, not part of this SEO pass).

**Status key:** 🔴 unverified · 🟡 needs evidence link · 🟢 verified with source

| # | Claim | Where it appears | Ad-policy risk | Status | Action needed |
|---|-------|------------------|----------------|--------|---------------|
| C1 | **"Africa's #1 AI-First GRC Platform"** | `home.blade.php` | High — Google/Meta restrict "#1" without third-party substantiation | 🔴 | Provide third-party ranking source, or reframe. Suggested defensible line: *"Purpose-built for CBN, BOFIA & NDPA — not retrofitted."* |
| C2 | **"Africa's only AI-first GRC platform"** | `home.blade.php`, `footer.blade.php` | High — "only"/exclusivity claims are restricted | 🔴 | Evidence of exclusivity is near-impossible; recommend reframing to a differentiator (built-in-Nigeria, regulation-native). |
| C3 | **"500+ Nigerian institutions"** (served/trust) | `home.blade.php`, `why-atheris/index.blade.php`, `footer.blade.php` | High — unverifiable customer count | 🔴 | What does it count (customers? users? pipeline?)? If not evidenced, replace with a true, still-strong figure. |
| C4 | **"Trusted by Africa's leading financial institutions"** | `home.blade.php` | Medium — implied endorsement | 🔴 | Needs named logos with written consent, or soften. |
| C5 | **"99.9% uptime"** | `platform-security.blade.php`, `pricing.blade.php`, `home.blade.php` | Medium — SLA/performance claim | 🔴 | Back with a published status page / SLA, or remove. |
| C6 | **"2,000+ GRC professionals on newsletter"** (or similar) | `home.blade.php` | Low–Medium | 🔴 | Verify against the actual list count. |

## Rules in effect now
- New pages, meta, H1s, FAQ answers, schema and `llms.txt` produced in this overhaul **exclude C1–C6** and use only verifiable, non-superlative framing.
- `config/seo.php` and `public/llms.txt` already follow this (factual description, explicit "do not attribute superlatives" note to AI systems).
- When Mohammed confirms or reframes each, update this table and only then may the approved wording flow into ads/new pages.

## Consolidated open questions → see `docs/seo/09-open-questions.md`
