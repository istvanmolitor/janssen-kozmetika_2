<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>Új üzenet a weboldalról</title>
</head>
<body style="font-family: sans-serif; color: #23262a;">
    <h2 style="color: #1F6E85;">Új üzenet érkezett a Janssen Kozmetika weboldaláról</h2>

    <p><strong>Név:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    @if ($contactMessage->phone)
        <p><strong>Telefon:</strong> {{ $contactMessage->phone }}</p>
    @endif

    <p><strong>Üzenet:</strong></p>
    <p style="white-space: pre-line;">{{ $contactMessage->message }}</p>

    <hr>
    <p style="font-size: 12px; color: #78838d;">
        Ez az üzenet a janssenkozmetika.hu weboldal kapcsolatfelvételi űrlapján keresztül érkezett.
    </p>
</body>
</html>
