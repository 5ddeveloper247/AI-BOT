<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteConfiguration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SiteConfigurationController extends Controller
{
    //

    public function adminSiteConfigSubmit(Request $request)
    {
        $data = $request->all();

        // Define validation rules for each type of form
        $rules = [
            'configForm' => [
                'copyright' => 'required|string',
                'siteLogo' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust max file size as needed
            ],
            'contactForm' => [
                'address' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email'
            ],
            'socialForm' => [
                'facebook' => 'url',
                'linkedin' => 'url',
                'twitter' => 'url',
                'instagram' => 'url',
                'youtube' => 'url'
            ]
        ];

        // Validate the request data based on the form type
        $validator = Validator::make($data, $rules[$data['type']]);

        // Check if validation fails
        if ($validator->fails()) {
            // Return back with errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Process the form based on its type
        if ($data['type'] == 'configForm') {
            // Handle configuration form
            $copy_text = $data['copyright'];

            // Check if the record for copy right text exists
            $copyRightTextRecord = SiteConfiguration::where('tag_name', 'copy_text')->first();

            if ($copyRightTextRecord) {
                // Update the existing record
                $copyRightTextRecord->update(['tag_value' =>  $copy_text]);
            } else {
                // Create a new record
                SiteConfiguration::create([
                    'tag_name' => 'copy_text',
                    'tag_value' =>  $copy_text
                ]);
            }

            // Handle site logo upload
            if ($request->hasFile('siteLogo')) {
                $site_logo = $request->file('siteLogo');

                // Generate a unique file name
                $fileName = time() . '_' . $site_logo->getClientOriginalName();

                try {
                    // Store the file in the specified directory
                    $filePath = $site_logo->storeAs('public/profiles', $fileName);
                    $filePath = str_replace('public/', 'storage/', $filePath);
                    // Check if the record for site logo exists
                    $siteLogoRecord = SiteConfiguration::where('tag_name', 'site_logo')->first();

                    if ($siteLogoRecord) {
                        // Update the existing record
                        $siteLogoRecord->update(['tag_value' => $filePath]);
                    } else {
                        // Create a new record
                        SiteConfiguration::create([
                            'tag_name' => 'site_logo',
                            'tag_value' => $filePath
                        ]);
                    }

                    // Log a success message
                    Log::info('Stored successfully.');

                    // If you want to return the updated image URL for displaying it on the frontend
                    // you can use Storage facade to generate a URL to the stored file
                    $imageUrl = Storage::url($filePath);

                    // Return the image URL
                    // return response()->json(['image_url' => $imageUrl]);
                } catch (\Exception $e) {
                    // Log the error
                    Log::error('Failed to upload profile picture: ' . $e->getMessage());

                    // Return back with error message
                    return redirect()->back()->with('error', 'Failed to upload site logo.');
                }
            }
        } elseif ($data['type'] == 'contactForm') {
            // Handle contact form
            $address = $request->input('address');
            $phone = $request->input('phone');
            $email = $request->input('email');

            // Define an array with the field names and their corresponding tag names in the database
            $fields = [
                'address' => 'site_address',
                'phone' => 'site_phone',
                'email' => 'site_email'
            ];

            // Loop through each field, check if a record exists, and update or create accordingly
            foreach ($fields as $field => $tagName) {
                $value = $request->input($field);

                // Check if the record for this field exists
                $record = SiteConfiguration::where('tag_name', $tagName)->first();

                if ($record) {
                    // Update the existing record
                    $record->update(['tag_value' => $value]);
                } else {
                    // Create a new record
                    SiteConfiguration::create([
                        'tag_name' => $tagName,
                        'tag_value' => $value
                    ]);
                }
            }
        } elseif ($data['type'] == 'socialForm') {
            // Handle social form
            // Retrieve data from the request
            $facebook = $request->input('facebook');
            $linkedin = $request->input('linkedin');
            $twitter = $request->input('twitter');
            $instagram = $request->input('instagram');
            $youtube = $request->input('youtube');

            // Define an array with the field names and their corresponding tag names in the database
            $fields = [
                'facebook' => 'site_facebook',
                'linkedin' => 'site_linkedin',
                'twitter' => 'site_twitter',
                'instagram' => 'site_instagram',
                'youtube' => 'site_youtube'
            ];

            // Loop through each field, check if a record exists, and update or create accordingly
            foreach ($fields as $field => $tagName) {
                $value = $request->input($field);

                // Check if the record for this field exists
                $record = SiteConfiguration::where('tag_name', $tagName)->first();

                if ($record) {
                    // Update the existing record
                    $record->update(['tag_value' => $value]);
                } else {
                    // Create a new record
                    SiteConfiguration::create([
                        'tag_name' => $tagName,
                        'tag_value' => $value
                    ]);
                }
            }
        }

        // Return a success message
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}
