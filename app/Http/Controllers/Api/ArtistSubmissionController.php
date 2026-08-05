<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ArtistSubmissionController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = Validator::make($request->all(), [
            'mode' => ['required', 'in:artist,dj'],
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'performance_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'tiktok' => ['nullable', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'best_song' => ['nullable', 'string', 'max:255'],
        ])->validate();

        $body = collect([
            'Artist registration received',
            '',
            'Mode: '.strtoupper($validated['mode']),
            'Name: '.$validated['name'],
            'Number: '.$validated['number'],
            'Performance Name: '.$validated['performance_name'],
            'Email: '.$validated['email'],
            'Instagram: '.($validated['instagram'] ?: 'N/A'),
            'TikTok: '.($validated['tiktok'] ?: 'N/A'),
            'Institution: '.$validated['institution'],
            'Best Song: '.($validated['best_song'] ?: 'N/A'),
        ])->implode(PHP_EOL);

        Mail::raw($body, function ($message) use ($validated) {
            $message->to(config('mail.from.address'))
                ->subject('New artist registration: '.$validated['performance_name']);
        });

        return response()->json([
            'message' => 'Artist registration submitted successfully.',
        ]);
    }
}