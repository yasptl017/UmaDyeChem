<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'company_name' => SiteSetting::get('company_name', 'Uma Dye Chem'),
            'company_tagline' => SiteSetting::get('company_tagline', 'Leading Manufacturer of Ammonium Bisulphite & Industrial Chemicals Since 1984'),
            'phone' => SiteSetting::get('phone', '+91-2767-255893'),
            'phone_alt' => SiteSetting::get('phone_alt', '+91-2767-253749'),
            'whatsapp_number' => SiteSetting::get('whatsapp_number', '919825012345'),
            'email' => SiteSetting::get('email', 'umadyechem.industries@gmail.com'),
            'address' => SiteSetting::get('address', 'Survey No. 1283/1291, Unjha-Unava Highway, Behind National Federation, Unava, Unjha, Mehsana, Gujarat - 384160, India'),
            'postal_address' => SiteSetting::get('postal_address', 'Post Box No. 155, Unava - Unjha Highway, Unava, Gujarat, India'),
            'working_hours' => SiteSetting::get('working_hours', 'Monday - Saturday: 9:00 AM - 6:30 PM (IST)'),
            'meta_title' => SiteSetting::get('meta_title', 'Uma Dye Chem | Ammonium Bisulphite Manufacturer Gujarat India'),
            'meta_description' => SiteSetting::get('meta_description', 'Uma Dye Chem is a pioneer manufacturer and exporter of Ammonium Bisulphite solutions, Oxygen Scavengers, and specialty industrial chemicals since 1984 in Gujarat, India.'),
        ];

        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token']);

        foreach ($data as $key => $value) {
            SiteSetting::set($key, (string) $value);
        }

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }
}

