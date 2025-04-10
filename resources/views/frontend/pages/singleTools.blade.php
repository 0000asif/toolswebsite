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

    @default
        <p>Select a tool to view.</p>
@endswitch
