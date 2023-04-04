<div class="max-w-6xl m-auto">
    <div class="my-8 bg-white shadow-sm p-8 text-left relative  rounded-md">
        <div class="text-4xl font-bold mb-8 flex items-center justify-between flex-1">
            <h2 class="flex-1 w-full text-center font-bold">Thank you for your offer of support for the new Community Centre project.</h2>

       </div>
<div class="text-center mb-8">
     
            <p>So that we can follow up and keep imn touch, we'd appreciate it if your could share your contact details and some information about your idea, event or donation to the campaign.</p>
        </div>
        <div class="text-left">
            <form wire:submit.prevent="createContact">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">


                    <div>
                        <div>Your Name</div>
                        <input type="text" wire:model="name" class="border border-gray-300     @error('name') border-red-500 @enderror px-4 py-3 rounded-lg w-full">
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                    <div>
                        <div>Email</div>
                        <input type="email" wire:model="email" class="border border-gray-300 @error('email') border-red-500 @enderror px-4 py-3 rounded-lg w-full">
                        @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                    <div>
                        <div>Phone</div>
                        <input type="text" wire:model="phone" class="border border-gray-300 @error('phone') border-red-500 @enderror px-4 py-3 rounded-lg w-full">
                        @error('phone') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                </div>
                <div>
                    <h2 class="font-bold text-3xl mt-4">What are you planning or offering.</h2>
               
                    <div class="flex gap-4 items-center align-middle mt-4">
                        <input type="checkbox" wire:model="show_fundraising">
                    <div class="">Fundraising event.</div>
       
                    </div>
                    @if ($show_fundraising)
                    <div class="mt-4">
                        <div>Fundraising details</div>
                        <textarea wire:model="fundraising" cols="30" rows="4" class="border border-gray-300 px-4 py-3 rounded-lg w-full"></textarea>

                    </div>
                    @endif
            


            <div class="flex gap-4 mt-2">
                <input type="checkbox" wire:model="show_donation">
                <div>Donation of voucher, prize or reward.</div>
            
            </div>
                    
                    @if ($show_donation)
                    <div class="mt-4">
                        <div>Donation details</div>
                        <textarea wire:model="donation" cols="30" rows="4" class="border border-gray-300 px-4 py-3 rounded-lg w-full"></textarea>

                    </div>
                    @endif
                </div>
                <div class="mt-4">
                    <div>Any other information that would be helpful for us to know about</div>
                    <textarea wire:model="comments" cols="30" rows="4" class="border border-gray-300 px-4 py-3 rounded-lg w-full"></textarea>
                    <input type="hidden" name="ip" name="{{$_SERVER['REMOTE_ADDR']}}">
                </div>

                @if ($contact_id)
                    <div class="text-4xl font-bold mb-8 flex items-center mt-8">
                        <div>
                            <h2 class="flex-1 w-full">Thank You ! <span class="font-light">We will get back to you shortly. Your reference is #{{$contact_id}}</span> </h2>
                            <div class="">

                            </div>
                        </div>
                    </div>

                    @else
                    <button class="bg-green-500 px-4 py-3 rounded-lg w-full mt-4 text-white" type="submit" wire:loading.attr="disabled">Send Your Message</button>
                @endif





            </form>


        </div>
    </div>
</div>
