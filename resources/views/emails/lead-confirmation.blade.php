<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; }
        .header { background: #1A365D; color: #fff; padding: 20px; text-align: center; }
        .content { padding: 20px; }
        .cta { display: inline-block; background: #2D7D46; color: #fff; padding: 12px 24px; text-decoration: none; border-radius: 6px; margin-top: 15px; }
        .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="margin:0;">Atheris Limited</h2>
    </div>
    <div class="content">
        <p>Dear {{ $lead->first_name }},</p>

        @if($lead->form_type === 'demo')
            <p>Thank you for requesting a demo of the Atheris GRC platform. Our team has received your request and will be in touch within 24 hours to schedule a personalized demonstration.</p>
            <p>In the meantime, you can explore our platform capabilities:</p>
            <a href="{{ url('/platform') }}" class="cta" style="color:#fff;">Explore Our Platform</a>
        @elseif($lead->form_type === 'newsletter')
            <p>Thank you for subscribing to the Atheris newsletter. You'll receive the latest insights on governance, risk, and compliance delivered to your inbox.</p>
        @else
            <p>Thank you for reaching out to Atheris. We have received your message and our team will respond within 24 hours.</p>
        @endif

        <p style="margin-top: 20px;">Best regards,<br>The Atheris Team</p>
    </div>
    <div class="footer">
        Atheris Limited &bull; GRC Solutions for Africa<br>
        <a href="{{ url('/') }}">atherislimited.com</a>
    </div>
</body>
</html>
