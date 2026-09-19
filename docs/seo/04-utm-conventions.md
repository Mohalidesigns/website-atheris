# UTM Conventions

One standard so campaign data stays clean in GA4 and attribution survives into the CRM. **Lowercase, no spaces, use underscores.** Every paid/owned link must be tagged.

## Format

```
utm_source   = google | linkedin | meta | x | instagram | youtube | email | whatsapp
utm_medium   = cpc | paid_social | organic_social | email | referral | display
utm_campaign = atheris_<module>_<objective>_<yyyymm>
utm_term     = <keyword or audience>          (paid search / paid social)
utm_content  = <ad or variant id>             (A/B and creative differentiation)
```

- `<module>` = `audit | erm | controls | compliance | esg | platform | brand`
- `<objective>` = `demo | leadgen | awareness | retargeting | webinar | whitepaper`

## Examples

```
Google Search, audit demo, Sep 2026, exact-match ad variant B:
?utm_source=google&utm_medium=cpc&utm_campaign=atheris_audit_demo_202609&utm_term=internal+audit+software+nigeria&utm_content=rsa_b

LinkedIn paid, compliance leadgen:
?utm_source=linkedin&utm_medium=paid_social&utm_campaign=atheris_compliance_leadgen_202609&utm_content=single_image_1

Email newsletter, CBN hub:
?utm_source=email&utm_medium=email&utm_campaign=atheris_platform_awareness_202609&utm_content=newsletter_cbn
```

## Rules
- Never tag internal links (breaks session attribution).
- Landing pages must **persist `utm_*` into the lead record** so sales see the source (the leads flow already stores `utm_params`; confirm all new forms include the hidden UTM capture).
- Keep a running campaign log so `utm_campaign` values are reused, not reinvented.
- Google Ads: prefer auto-tagging (`gclid`) **and** these UTMs for GA4 consistency.
