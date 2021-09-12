@component('mail::message')

<b>Hi,{{ $user->name }}</b><br>
<span>Please click the button below to verify your email address.
</span>
@component('mail::button', ['url' => Route('verif',['id'=>encrypt($user->id)]) ])
Verify Your Account
@endcomponent

<p>If you did not create an account, no further action is required.</p>
Thanks,<br>


{{ config('app.name') }}
@endcomponent
