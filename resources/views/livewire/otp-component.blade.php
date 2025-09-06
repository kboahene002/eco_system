<div>
    <div>

        <form wire:submit.prevent="verifyOtp">
               <div class="input-boxes">
                 <div class="input-box">
                   <i class="fas fa-key"></i>
                   <input wire:model.live="otp" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="6" placeholder="Enter the 6-digit code" required>
               </div>
               <p class="text-danger" style="font-size: 12px; color: red;">@error('otp') <span class="error">{{ $message }}</span> @enderror</p>
                 <div class="text">
                   {{-- <button type="button" wire:click="resendOtp">Resend code</button> --}}
                 </div>
                 <div class="button input-box">
                   {{-- <input type="submit" wire:loading.attr="disabled" wire:loa value="Verify & Login"> --}}
                   <button type="submit"  style="border-radius:10px; margin-top:15px ; cursor: pointer;width:100%; color:white; border:1px solid rgb(246, 244, 244); background-color: rgb(120, 120, 207); padding:10px;" wire:loading.attr="disabled" class="btn btn-primary" wire:target="performAction"
                        class="btn btn-primary button  input-box">
                        <span wire:loading.remove wire:target="verifyOtp">
                            Send
                            <i class="fas fa-paper-plane me-2"></i>
                        </span>

                        <span wire:loading wire:target="verifyOtp">
                            <span class="spinner-border spinner-border-sm me-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>

                        </span>
                    </button>
                 </div>
                 <div class="text-center"><img src={{ asset('assets/img/logo.png') }} alt="logo"/></div>
               </div>
           </form>

   </div>

</div>
