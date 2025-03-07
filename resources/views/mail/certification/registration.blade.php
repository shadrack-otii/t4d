@component('mail::message')
Hello {{ $booking->customer->name }}. <br>

Thank you for your application. We are delighted to invite you to participate in a {{ $booking->certification->duration }} days training on {{ $booking->certification->name }} to be held from {{ date('F j Y', strtotime($booking->schedule->from)) }} to {{ date('F j Y', strtotime($booking->schedule->to)) }}. <br> 

Find an invoice and pre-training form attached. Please fill and resend the pre-training to {{ @$booking->schedule->venue->email }}. <br>

View complete certification details.
@component('mail::button', ['url' => route('certification.show', $booking->certification_id)])
View Certification
@endcomponent

We are looking forward to seeing you.
@endcomponent
