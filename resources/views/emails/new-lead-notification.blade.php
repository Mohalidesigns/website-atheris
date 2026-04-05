<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; }
        .header { background: #1A365D; color: #fff; padding: 20px; text-align: center; }
        .content { padding: 20px; }
        .field { margin-bottom: 12px; }
        .label { font-weight: bold; color: #1A365D; }
        .badge { display: inline-block; background: #2D7D46; color: #fff; padding: 4px 12px; border-radius: 4px; font-size: 13px; }
        .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="margin:0;">New Lead Received</h2>
    </div>
    <div class="content">
        <p>A new <span class="badge">{{ ucfirst($lead->form_type) }}</span> submission has been received.</p>

        <div class="field">
            <span class="label">Name:</span> {{ $lead->first_name }} {{ $lead->last_name }}
        </div>
        <div class="field">
            <span class="label">Email:</span> <a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>
        </div>
        @if($lead->company)
        <div class="field">
            <span class="label">Company:</span> {{ $lead->company }}
        </div>
        @endif
        @if($lead->role)
        <div class="field">
            <span class="label">Role:</span> {{ $lead->role }}
        </div>
        @endif
        @if($lead->phone)
        <div class="field">
            <span class="label">Phone:</span> {{ $lead->phone }}
        </div>
        @endif
        @if($lead->message)
        <div class="field">
            <span class="label">Message:</span><br>
            {{ $lead->message }}
        </div>
        @endif
        <div class="field">
            <span class="label">Submitted:</span> {{ $lead->created_at->format('M d, Y \a\t h:i A') }}
        </div>
    </div>
    <div class="footer">
        <a href="{{ url('/admin/leads/' . $lead->id) }}">View in Admin Panel</a>
    </div>
</body>
</html>
