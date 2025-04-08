@switch($type)
    @case('bmi')
        @include('frontend.pages.tools.bmi_calculator')
        @break

    @case('age')
        @include('frontend.pages.tools.age_calculator')
        @break

    @default
        <p>Select a tool to view.</p>
@endswitch
