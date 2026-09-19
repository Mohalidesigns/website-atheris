# Open Questions — needs Mohammed's input

Consolidated `[TODO: confirm]` items blocking full completion. Nothing below has been asserted publicly; placeholders are used until confirmed.

## Business facts (block schema / llms.txt / NAP)
1. **Founding year** — for `Organization.foundingDate`. Currently omitted.
2. **Registered street address** — for `LocalBusiness` schema + `/contact` + footer NAP. Currently only "Lagos, Nigeria".
3. **Phone line** — publish the `+234 803 593 5802` mobile, or a landline/virtual business number? (§5.9 — a business line reads as more established to bank procurement.)
4. **Module product names** — audit = **ThirdLine**, controls = **SecondLine** (confirmed in code). Confirm names (if any) for Enterprise Risk, Compliance, ESG modules.

## Claims (block ads + new copy) — see `08-claims-register.md`
5. C1 "#1", C2 "only", C3 "500+", C4 "trusted by leading institutions", C5 "99.9% uptime", C6 "2,000+ newsletter" — confirm/evidence/reframe each.

## Tracking / analytics
6. **GA4 Measurement ID** and **Meta Pixel ID** currently inside GTM container `GTM-59B4JQCC` — needed to (a) confirm the container holds exactly one of each, (b) build the GTM tag that fires **Meta `Lead`** off the `generate_lead` dataLayer event (forms now push this; the direct `fbq` call was removed for GTM-only). 
7. **AI crawler policy** (`robots.txt`) — currently ALLOW GPTBot/ClaudeBot/PerplexityBot/etc. Confirm you want AI-answer visibility despite the training trade-off, or switch to Disallow.
8. Google Ads ID and LinkedIn Partner ID — not yet provided (§0). Needed before SEM §6.

## Decisions already made
- ✅ Tracking = **GTM-only** (hard-coded GA4 + Pixel removed).
- ✅ URL slugs = **keep current** (Option A; no redirects).
