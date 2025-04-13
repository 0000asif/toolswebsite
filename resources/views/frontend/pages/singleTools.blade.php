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
        @include('frontend.pages.tools.random_number_generator')
    @break
    @case('temperature')
        @include('frontend.pages.tools.temperature_converter')
    @break
    @case('unit')
        @include('frontend.pages.tools.unitconverter')
    @break
    @case('text_counter')
        @include('frontend.pages.tools.textcounter')
    @break
    @case('smileys_copy_emoji')
        @include('frontend.pages.tools.smileys_copy_emoji')
    @break
    @case('pale_copy_emoji')
        @include('frontend.pages.tools.pale_bodyparts_emoji')
    @break

    @case('clothe_animal_emoji')
        @include('frontend.pages.tools.clothe_animal_emoji')
    @break
    @case('percentage')
        @include('frontend.pages.tools.percentage_calculator')
    @break
    @case('average')
        @include('frontend.pages.tools.average_calculator')
    @break
    @case('grade')
        @include('frontend.pages.tools.grade_calculator')

    @default
        <p>Select a tool to view.</p>
@endswitch
