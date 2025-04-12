<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsViewController extends Controller
{
    public function RandomNumberGenerator()
    {

            return view('frontend.pages.single_tools.random_number_generator');
    }
    public function RandomStringGenerator(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_string_generator', compact('randomString'));
    }
    public function RandomPasswordGenerator(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomPassword = '';

        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_password_generator', compact('randomPassword'));
    }
    public function RandomEmailGenerator(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomEmail = '';

        for ($i = 0; $i < $length; $i++) {
            $randomEmail .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_email_generator', compact('randomEmail'));
    }
    public function RandomUsernameGenerator(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomUsername = '';

        for ($i = 0; $i < $length; $i++) {
            $randomUsername .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_username_generator', compact('randomUsername'));
    }
    public function RandomPhoneNumberGenerator(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomPhoneNumber = '';

        for ($i = 0; $i < $length; $i++) {
            $randomPhoneNumber .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_phone_number_generator', compact('randomPhoneNumber'));
    }
    public function RandomColorGenerator(Request $request)
    {
        $colors = [
            '#FF5733',
            '#33FF57',
            '#3357FF',
            '#F1C40F',
            '#E74C3C',
            '#8E44AD',
            '#3498DB',
            '#2ECC71',
            '#E67E22',
            '#1ABC9C'
        ];

        $randomColor = $colors[array_rand($colors)];

        return view('frontend.tools.random_color_generator', compact('randomColor'));
    }
    public function RandomDateGenerator(Request $request)
    {
        $start = strtotime($request->input('start', '2000-01-01'));
        $end = strtotime($request->input('end', '2023-12-31'));

        $randomTimestamp = rand($start, $end);
        $randomDate = date('Y-m-d', $randomTimestamp);

        return view('frontend.tools.random_date_generator', compact('randomDate'));
    }
    public function RandomTextGenerator(Request $request)
    {
        $length = $request->input('length', 100);
        $words = explode(' ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $randomText = '';

        for ($i = 0; $i < $length; $i++) {
            $randomText .= $words[array_rand($words)] . ' ';
        }

        return view('frontend.tools.random_text_generator', compact('randomText'));
    }
    public function RandomImageGenerator(Request $request)
    {
        $width = $request->input('width', 200);
        $height = $request->input('height', 200);
        $imageUrl = "https://picsum.photos/{$width}/{$height}";

        return view('frontend.tools.random_image_generator', compact('imageUrl'));
    }
    public function RandomQuoteGenerator(Request $request)
    {
        $quotes = [
            'The greatest glory in living lies not in never falling, but in rising every time we fall.',
            'The way to get started is to quit talking and begin doing.',
            'Life is what happens when you’re busy making other plans.',
            'Get busy living or get busy dying.',
            'You have within you right now, everything you need to deal with whatever the world can throw at you.'
        ];

        $randomQuote = $quotes[array_rand($quotes)];

        return view('frontend.tools.random_quote_generator', compact('randomQuote'));
    }
    public function RandomHexColorGenerator(Request $request)
    {
        $randomHexColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

        return view('frontend.tools.random_hex_color_generator', compact('randomHexColor'));
    }
    public function RandomPasswordGeneratorWithSymbols(Request $request)
    {
        $length = $request->input('length', 10);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomPassword = '';

        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('frontend.tools.random_password_generator_with_symbols', compact('randomPassword'));
    }
}
