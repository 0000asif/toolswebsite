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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'scientific-calculator-online')->first();
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
           <div class="calculator-container">
        <div class="calculator-display">
            4π = 12.56637061
        </div>
        
        <div class="calculator-mode-buttons">
            <button class="calc-btn calc-btn-mode">main</button>
            <button class="calc-btn calc-btn-mode">abc</button>
            <button class="calc-btn calc-btn-mode">func</button>
            <button class="calc-btn calc-btn-mode">RAD</button>
            <button class="calc-btn calc-btn-mode">DEG</button>
            <button class="calc-btn calc-btn-clear">clear all</button>
        </div>
        
        <div class="calculator-buttons-grid">
            <!-- First Row -->
            <button class="calc-btn calc-btn-operation">a^2</button>
            <button class="calc-btn calc-btn-operation">a^b</button>
            <button class="calc-btn calc-btn-operation">|a|</button>
            <button class="calc-btn calc-btn-number">7</button>
            <button class="calc-btn calc-btn-number">8</button>
            <button class="calc-btn calc-btn-number">9</button>
            <button class="calc-btn calc-btn-operation">÷</button>
            <button class="calc-btn calc-btn-operation">%</button>
            <button class="calc-btn calc-btn-variable">a</button>
            
            <!-- Second Row -->
            <button class="calc-btn calc-btn-operation">√</button>
            <button class="calc-btn calc-btn-operation">∛</button>
            <button class="calc-btn calc-btn-constant">π</button>
            <button class="calc-btn calc-btn-number">4</button>
            <button class="calc-btn calc-btn-number">5</button>
            <button class="calc-btn calc-btn-number">6</button>
            <button class="calc-btn calc-btn-operation">×</button>
            <button class="calc-btn calc-btn-navigation">←</button>
            <button class="calc-btn calc-btn-navigation">→</button>
            
            <!-- Third Row -->
            <button class="calc-btn calc-btn-function">sin</button>
            <button class="calc-btn calc-btn-function">cos</button>
            <button class="calc-btn calc-btn-function">tan</button>
            <button class="calc-btn calc-btn-number">1</button>
            <button class="calc-btn calc-btn-number">2</button>
            <button class="calc-btn calc-btn-number">3</button>
            <button class="calc-btn calc-btn-operation">-</button>
            <button class="calc-btn calc-btn-navigation">⇔</button>
            
            <!-- Fourth Row -->
            <button class="calc-btn calc-btn-parenthesis">(</button>
            <button class="calc-btn calc-btn-parenthesis">)</button>
            <button class="calc-btn calc-btn-separator">,</button>
            <button class="calc-btn calc-btn-number">0</button>
            <button class="calc-btn calc-btn-decimal">.</button>
            <button class="calc-btn calc-btn-answer">ans</button>
            <button class="calc-btn calc-btn-operation">+</button>
            <button class="calc-btn calc-btn-navigation">↓</button>
        </div>
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


@endsection

@push('front_js')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // First check if elements exist
    const display = document.querySelector('.calculator-display');
    const buttons = document.querySelectorAll('.calc-btn');
    
    if (!display) {
        console.error('Display element not found!');
        return;
    }
    
    if (!buttons || buttons.length === 0) {
        console.error('No buttons found!');
        return;
    }
    
    let currentInput = '0';
    let previousInput = '';
    let operation = null;
    let isRadians = true;
    
    function updateDisplay() {
        display.textContent = currentInput;
    }
    
    function clearAll() {
        currentInput = '0';
        previousInput = '';
        operation = null;
        updateDisplay();
    }
    
    function handleNumberInput(number) {
        if (currentInput === '0') {
            currentInput = number;
        } else {
            currentInput += number;
        }
        updateDisplay();
    }
    
    function handleOperation(op) {
        if (operation !== null) calculate();
        previousInput = currentInput;
        currentInput = '0';
        operation = op;
    }
    
    function calculate() {
        let result;
        const prev = parseFloat(previousInput);
        const current = parseFloat(currentInput);
        
        if (isNaN(prev) || isNaN(current)) return;
        
        switch (operation) {
            case '+':
                result = prev + current;
                break;
            case '-':
                result = prev - current;
                break;
            case '×':
                result = prev * current;
                break;
            case '÷':
                result = prev / current;
                break;
            default:
                return;
        }
        
        currentInput = result.toString();
        operation = null;
        updateDisplay();
    }
    
    // Add event listeners safely
    buttons.forEach(button => {
        if (button) {  // Check if button exists
            button.addEventListener('click', () => {
                const buttonText = button.textContent.trim();
                
                if (button.classList.contains('calc-btn-number')) {
                    handleNumberInput(buttonText);
                } 
                else if (button.classList.contains('calc-btn-operation')) {
                    handleOperation(buttonText);
                } 
                else if (button.classList.contains('calc-btn-clear')) {
                    clearAll();
                }
                // Add more functionality for other button types
            });
        }
    });
    
    // Initialize display
    updateDisplay();
});
</script>
@endpush
