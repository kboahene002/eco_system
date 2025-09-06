<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\OtpMail;

class LoginComponent extends Component
{
    public string $email = '';
    public string $password = '';
    public string $otp = '';
    public bool $otpSent = false;

    protected function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if (! Auth::validate(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', 'These credentials do not match our records.');
            return;
        }

        $code = (string) random_int(100000, 999999);
        Cache::store('file')->put($this->otpCacheKey(), $code, now()->addMinutes(10));


        \App\Models\User::where('email', $this->email)->update(['otp' => $code, 'expires_at' => now()->addMinutes(10)]);
        // $this->events = Cache::remember('email', now()->addMinutes(10), function () {
        //     return $this->email;
        // });

        Mail::to($this->email)->send(new OtpMail($code));
        $this->otpSent = true;
        session()->flash('status', 'We have emailed you a one-time passcode.');

        return redirect()->route('otp', encrypt(['email' => $this->email , 'password' => $this->password])); // route('otp', encrypt($this->email));
    }



    public function resendOtp(): void
    {
        if (! $this->otpSent) {
            return;
        }
        $code = (string) random_int(100000, 999999);
        Cache::store('file')->put($this->otpCacheKey(), $code, now()->addMinutes(10));
        Mail::to($this->email)->send(new OtpMail($code));
        session()->flash('status', 'A new code has been sent.');
    }

    private function otpCacheKey(): string
    {
        return 'otp_' . sha1($this->email);
    }
    public function render()
    {
        return view('livewire.login-component');
    }
}
