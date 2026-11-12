<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessage;
use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact');
    }

    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $contactMessage = ContactMessage::create($request->only(['name', 'email', 'phone', 'message']));

        try {
            Mail::to(config('salon.contact_notify_email'))->send(new NewContactMessage($contactMessage));
            $contactMessage->update(['notified' => true]);
        } catch (\Throwable $e) {
            Log::error('Nem sikerült elküldeni a kapcsolatfelvételi email értesítést.', [
                'contact_message_id' => $contactMessage->id,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()
            ->route('contact.show')
            ->with('success', 'Köszönjük megkeresését! Üzenetét megkaptuk, hamarosan válaszolunk.');
    }
}
