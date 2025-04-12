@switch($type)
    @case('bmi')
        @include('frontend.pages.tools.bmi_calculator')
    @break

    @case('age')
        @include('frontend.pages.tools.age_calculator')
    @break

    @case('password_generator')
        @include('frontend.pages.tools.strong_password_gen')
    @break

    @case('random_number')
        @include('frontend.pages.single_tools.random_number_generator')
    @break
    @case('temperature')
        @include('frontend.pages.tools.temperature_converter')
    @break
    @case('unit')
        @include('frontend.pages.single_tools.unitconverter')
    @break
    @case('text_counter')
        @include('frontend.pages.single_tools.textcounter')
    @break

    @default
        <p>Select a tool to view.</p>
@endswitch
