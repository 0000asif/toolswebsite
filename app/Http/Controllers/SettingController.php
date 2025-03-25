<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('backend.pages.setting.index', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        //     'fav_icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        //     'site_title' => 'required|string|max:255',
        //     'short_description' => 'required|string|max:500',
        //     'phone' => 'required|string|max:20',
        //     'email' => 'required|email|max:255',
        //     'whatsapp_number' => 'required|string|max:20',
        //     'fb_link' => 'required|max:255',
        //     'instagram_link' => 'required|max:255',
        //     'x_link' => 'required|max:255',
        //     'linkedin' => 'required|max:255',
        //     'address' => 'required|string|max:500',
        //     'payment_img' => 'nullable|file|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        //     'footer_bg' => 'nullable|file|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        //     'copyright_text' => 'required|string|max:255',
        //     'booking_time' => 'required',

        //     // New columns validation
        //     'meta_title' => 'nullable|string|max:255',
        //     'meta_description' => 'nullable|string|max:500',
        //     'keywords' => 'nullable|string|max:255',
        //     'meta_url' => 'nullable|string|max:255',
        //     'meta_img' => 'nullable|file|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        //     'footer_text' => 'nullable',
        //     'header_text' => 'nullable',
        // ]);

        // try {
        //     DB::beginTransaction();

            $update = $request->all();

            $setting = Setting::findOrFail($id);

            // Save the current file paths for possible deletion later
            $currentLogo = $setting->logo;
            $currentFavicon = $setting->fav_icon;
            $currentPaymentImg = $setting->payment_img;
            $currentFooterBg = $setting->footer_bg;
            $currentMetaImg = $setting->meta_img;

            // Update the text fields and columns
        // dd($request->all());
            $setting->update($update);

            // Handle file uploads
            if ($request->hasFile('logo')) {
                $logoName = time() . '_logo.' . $request->logo->extension();
                $request->logo->move(public_path('image/setting'), $logoName);
                $setting->update(['logo' => $logoName]);
                if ($currentLogo) {
                    File::delete(public_path('image/setting') . '/' . $currentLogo);
                }
            }

            if ($request->hasFile('fav_icon')) {
                $faviconName = time() . '_favicon.' . $request->fav_icon->extension();
                $request->fav_icon->move(public_path('image/setting'), $faviconName);
                $setting->update(['fav_icon' => $faviconName]);
                if ($currentFavicon) {
                    File::delete(public_path('image/setting') . '/' . $currentFavicon);
                }
            }

            if ($request->hasFile('payment_img')) {
                $paymentImgName = time() . '_payment.' . $request->payment_img->extension();
                $request->payment_img->move(public_path('image/setting'), $paymentImgName);
                $setting->update(['payment_img' => $paymentImgName]);
                if ($currentPaymentImg) {
                    File::delete(public_path('image/setting') . '/' . $currentPaymentImg);
                }
            }

            if ($request->hasFile('footer_bg')) {
                $footerBgName = time() . '_footer.' . $request->footer_bg->extension();
                $request->footer_bg->move(public_path('image/setting'), $footerBgName);
                $setting->update(['footer_bg' => $footerBgName]);
                if ($currentFooterBg) {
                    File::delete(public_path('image/setting') . '/' . $currentFooterBg);
                }
            }

            if ($request->hasFile('meta_img')) {
                $metaImgName = time() . '_meta.' . $request->meta_img->extension();
                $request->meta_img->move(public_path('image/setting'), $metaImgName);
                $setting->update(['meta_img' => $metaImgName]);
                if ($currentMetaImg) {
                    File::delete(public_path('image/setting') . '/' . $currentMetaImg);
                }
            }
            // $setting->fill($update)->save();

            // DB::commit();
            return redirect()->back()->with('success', 'Setting updated successfully');
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        // }
    }
}
