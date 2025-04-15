@extends('frontend.components.front-master')

{{-- @section('metadesc')
    {{ $blog->meta_description }}
@endsection
@section('metakey')
    {{ $blog->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $blog->meta_title }}
@endsection --}}

@section('front_content')
    <div class="singlePageBg course-home-section">

        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'online-math-calculator')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Text Counter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="calc-container">
                    <form name="calcForm">
                        <input type="text" class="calc-display form-control mb-3" value="0" disabled>
                    </form>
                    <div class="calc-buttons">
                        <div class="row">
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="7">7</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="8">8</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="9">9</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-operator" type="button" data-input="/">/</button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="4">4</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="5">5</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="6">6</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-operator" type="button" data-input="*">×</button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="1">1</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="2">2</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="3">3</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-operator" type="button" data-input="-">-</button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input=".">.</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-num" type="button" data-input="0">0</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-operator" type="button" data-input="+">+</button>
                            </div>
                            <div class="col-3">
                                <button class="calc-btn calc-btn-clear" type="button">C</button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <button class="calc-btn calc-btn-equal" type="button">=</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    

                    </div>

                    {{-- ========= Description ========= --}}
                    <div class="postBodyDesc">
                        <h3 class="my-3 text-start">Total View : <span>{{ $tools->view ?? 0 }}</span></h3>
                    </div>
                    <div class="postBodyDesc mt-5">
                        <p class="postBodyDescText">{!! $tools->description ?? '' !!}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    @include('frontend.components.home_sidebar')
                </div>
            </div>
        </div>


        <div class="course-home-section related_post">

            <div class="container sirajganj_related_view">

                <span id="allInfoContent">
                    <div class="container my-4 sirajganj_related_container">
                        <div class="row py-3 sirajganj_related_row">
                            <h4>রিলেটেড তথ্য </h4>
                            <div class="head d-flex justify-content-center">
                                <!-- <h1 class="head1 text-white">সকল পোস্ট </h1> -->
                                <a href="" class="sirajganj_btn-primary">সকল তথ্য ➜ </a>
                            </div>
                        </div>

                    </div>

                </span>

                <div id="preloader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function changeImage(element) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = element.src;
        }
    </script>
    <script>
        document.getElementById('sharebtn').addEventListener('click', async () => {
            const shareData = {
                title: document.title,
                text: 'Check out this awesome website!',
                url: window.location.href
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                    console.log('Content shared successfully');
                } catch (err) {
                    console.error('Error sharing:', err);
                }
            } else {
                // Fallback: Copy the link to clipboard
                copyToClipboard(shareData.url);
                alert('Link copied to clipboard!');
            }
        });

        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
    </script>
@endsection

@push('front_js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const display = document.querySelector('.calc-display');
    const buttons = document.querySelectorAll('.calc-btn');
    let currentInput = '0';
    let previousInput = '';
    let operation = null;
    let resetScreen = false;

    // Update calculator display
    function updateDisplay() {
        display.value = currentInput;
    }

    // Reset calculator
    function resetCalculator() {
        currentInput = '0';
        previousInput = '';
        operation = null;
        updateDisplay();
    }

    // Append number to display
    function appendNumber(number) {
        if (currentInput === '0' || resetScreen) {
            currentInput = number;
            resetScreen = false;
        } else {
            currentInput += number;
        }
        updateDisplay();
    }

    // Add decimal point
    function addDecimal() {
        if (resetScreen) {
            currentInput = '0.';
            resetScreen = false;
            updateDisplay();
            return;
        }
        if (!currentInput.includes('.')) {
            currentInput += '.';
            updateDisplay();
        }
    }

    // Choose operation
    function chooseOperation(op) {
        if (currentInput === '') return;
        if (previousInput !== '') {
            calculate();
        }
        operation = op;
        previousInput = currentInput;
        currentInput = '';
        resetScreen = true;
    }

    // Perform calculation
    function calculate() {
        let result;
        const prev = parseFloat(previousInput);
        const current = parseFloat(currentInput);
        
        if (isNaN(prev)) return;  // Fixed the missing parenthesis here
        
        switch (operation) {
            case '+':
                result = prev + current;
                break;
            case '-':
                result = prev - current;
                break;
            case '*':
                result = prev * current;
                break;
            case '/':
                result = prev / current;
                break;
            default:
                return;
        }
        
        currentInput = result.toString();
        operation = null;
        previousInput = '';
        resetScreen = true;
        updateDisplay();
    }

    // Button click event listeners
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.textContent;
            const inputType = button.getAttribute('data-input');

            if (button.classList.contains('calc-btn-num')) {
                if (inputType === '.') {
                    addDecimal();
                } else {
                    appendNumber(inputType);
                }
            } else if (button.classList.contains('calc-btn-operator')) {
                chooseOperation(inputType);
            } else if (button.classList.contains('calc-btn-clear')) {
                resetCalculator();
            } else if (button.classList.contains('calc-btn-equal')) {
                calculate();
            }
        });
    });

    // Keyboard support
    document.addEventListener('keydown', (e) => {
        if (e.key >= '0' && e.key <= '9') {
            appendNumber(e.key);
        } else if (e.key === '.') {
            addDecimal();
        } else if (e.key === '+' || e.key === '-' || e.key === '*' || e.key === '/') {
            chooseOperation(e.key);
        } else if (e.key === 'Enter' || e.key === '=') {
            calculate();
        } else if (e.key === 'Escape') {
            resetCalculator();
        } else if (e.key === 'Backspace') {
            currentInput = currentInput.slice(0, -1) || '0';
            updateDisplay();
        }
    });
});
</script>
@endpush
