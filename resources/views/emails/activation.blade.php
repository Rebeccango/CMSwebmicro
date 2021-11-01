<p>Hello <strong>{{ $user->name }}</strong>,</p>

<p>Thank you for signing up at <strong><a href="https://www.cadmicro.com">CADMicro.com</a></strong>! Please confirm your email address by clicking on the link below. We'll communicate with you from time to time via email so it's important that we have an up-to-date email address on file.</p>
<strong><a href="{{$user->activation_url}}">{{$user->activation_url}}</a></strong>
<br />
<p>If you did not sign up for a CADMicro.com account, then simply ignore this email.</p>

<p>Thank you for choosing CAD MicroSolutions!</p>

<p>Best Regards,<br />
The CAD MicroSolutions team.</p>
