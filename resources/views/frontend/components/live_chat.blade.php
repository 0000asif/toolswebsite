@php
    $setting = App\Models\Setting::first();
@endphp


 <div class="container">
        <div class="row">
            <div class="floating_container">
                <!-- Chat button -->
                <div class="floating_button" id="show_chat">
                    <i class="bi bi-chat-square-text-fill sms"></i>
                </div>
                <!-- Close button (hidden initially) -->
                <div class="floating_button d-none" id="xros">
                    <!--  -->
                    <i class="bi bi-x close"></i>
                </div>
                <!-- Floating elements (hidden initially) -->
                <span class="floating_element d-none" id="whatsapp">
                    <a target="_blank" href="https://wa.me/{{ $setting->whatsapp_number }}">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </span>

                <span class="floating_element d-none" id="telephone">
                    <a target="__blank" href="tel:{{ $setting->phone }}">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                </span>
                <span class="floating_element d-none" id="messenger">
                    <a target="__blank" href="https://www.facebook.com/sirajganjsohor">
                        <i class="bi bi-messenger"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
