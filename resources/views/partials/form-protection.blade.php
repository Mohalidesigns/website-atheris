{{--
    Spam protection for public lead forms (demo / contact / partners).
    Include INSIDE the <form>, just before the submit button.

    1. Honeypot — a field hidden from humans; bots fill every field, so any
       value here flags the submission as spam (checked in LeadController).
    2. Timing trap — an encrypted render timestamp; a submission that arrives
       in under a few seconds is almost certainly a bot.
    3. Cloudflare Turnstile — only rendered when keys are configured, so the
       forms keep working until TURNSTILE_KEY / TURNSTILE_SECRET are set.
--}}
<div style="position:absolute;left:-9999px;top:-9999px" aria-hidden="true">
    <label>Leave this field empty
        <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
    </label>
</div>
<input type="hidden" name="form_ts" value="{{ encrypt(now()->timestamp) }}">

@if(config('services.turnstile.key'))
    <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.key') }}"></div>
    @error('captcha')<p class="text-xs text-error">{{ $message }}</p>@enderror
    @once
        @push('head')
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        @endpush
    @endonce
@endif
