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

    @case('food_sport_emoji')
        @include('frontend.pages.tools.food_sport_emoji')
    @break

    @case('travel_object_emoji')
        @include('frontend.pages.tools.travel_object_emoji')
    @break

    @case('symbol_copy_paste')
        @include('frontend.pages.tools.symble_copy_pase')
    @break

    @case('function_symbols')
        @include('frontend.pages.tools.function_pro_symblols')
    @break

    @case('popular_symbols')
        @include('frontend.pages.tools.popular_symbols')
    @break

    @case('percentage')
        @include('frontend.pages.tools.percentage_calculator')
    @break
    @case('average')
        @include('frontend.pages.tools.average_calculator')
    @break
    @case('guessing_game')
        @include('frontend.pages.game.gussing_game')
    @break
    @case('snake_game')
        @include('frontend.pages.game.snake_game')
    @break
    @case('grade')
        @include('frontend.pages.tools.grade_calculator')

    @default
        <p>Select a tool to view.</p>
@endswitch
