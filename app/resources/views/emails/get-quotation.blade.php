@component('mail::message')
# Asking for a Quotation

<p>Hi,</p>
<p>A client/customer is asking for a quotation with the following details below:</p>

- Name: {{ $request->name }}
- Company: {{ $request->company }}
- Contact Number: {{ $request->contact }}
- Email Address: <a href="mailto:{{ $request->email_address }}">{{ $request->email_address }}</a>
- Order Type: {{ $request->order_type ?? '' }} 

@if($request->service === 'sublimation')
- Printing Type: {{ $request->printing_type ?? '' }}
- Fabric: {{ $request->fabric ?? '' }}
- Collar Type: {{ $request->collar_type ?? '' }}
@else
- Sticker Type (For Sticker Only): {{ $request->sticker_type ?? '' }}
@endif

- Quantity: {{ $request->quantity ?? '' }}
- Size (Must Be In Inches): {{ $request->size ?? '' }}
- Possible Deadline For Order: {{ $request->deadline ?? '' }}
- Reference Design:(See attachment)
- Remarks: {{ $request->remarks ?? '' }}

<br>
Thanks,<br>
<div><small>Do not reply to this automated message.</small></div>
{{ config('app.name') }}
@endcomponent
