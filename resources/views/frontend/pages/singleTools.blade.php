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
    @break

    @case('uppercase_lowercase')
        @include('frontend.pages.tools.uppercase_lowercase')
    @break

    @case('lowercase_uppercase')
        @include('frontend.pages.tools.lowercase_uppercase')
    @break

    @case('decimal_hexadecimal')
        @include('frontend.pages.tools.decimal_hexadecimal')
    @break

    @case('decimal_binary')
        @include('frontend.pages.tools.decimal_binary')
    @break

    @case('decimal_octal')
        @include('frontend.pages.tools.decimal_octal')
    @break

    @case('binary_decimal')
        @include('frontend.pages.tools.binary_decimal')
    @break

    @case('octal_decimal')
        @include('frontend.pages.tools.octal_decimal')
    @break

    @case('hexadecimal_decimal')
        @include('frontend.pages.tools.hexadecimal_decimal')
    @break

    @case('decimal_ascii')
        @include('frontend.pages.tools.decimal_to_ascii_converter')
    @break

    @case('ascii_decimal')
        @include('frontend.pages.tools.ascii_decimal')
    @break

    @case('ascii_text')
        @include('frontend.pages.tools.ascii_text')
    @break

    @case('text_ascii')
        @include('frontend.pages.tools.text_ascii')
    @break

    @case('binary_text')
        @include('frontend.pages.tools.binary_text')
    @break
    @case('text_binary')
        @include('frontend.pages.tools.text_binary')
    @break
    @case('text_html_entities')
        @include('frontend.pages.tools.text_html_entities')
    @break
    @case('html_entities_text')
        @include('frontend.pages.tools.html_entities_text')
    @break

    @default
        <p>Select a tool to view.</p>
@endswitch
