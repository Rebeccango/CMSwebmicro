<p>Hello <strong>{{ $user->name }}</strong>,</p>

<p>This email is in response to a request for resetting your password at <strong><a href="https://www.cadmicro.com">CADMicro.com</a></strong>! Please visit the link below for further instructions to change your password.</p>
<strong><a href="https://cadmicro.com/account/resetPassword/{{$forgot['token']}}">https://cadmicro.com/account/resetPassword/{{$forgot['token']}}</a></strong>
<br />
<p>If you did not request this password reset, then simply ignore this email.</p>

<p>Thank you for choosing CAD MicroSolutions!</p>

<p>Best Regards,<br />
The CAD MicroSolutions team.</p>
