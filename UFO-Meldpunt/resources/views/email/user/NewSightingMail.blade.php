<!-- resources/views/emails/NewSightingMail.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alien Spotting Alert</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #0d0d0d; color: #ffffff; padding: 30px;">

    <div style="max-width: 600px; margin: auto; background-color: #1a1a1a; padding: 20px; border-radius: 8px;">
        <h2 style="text-lime-400;">Welcome to UFO spotter</h2>

        <p>Hallo {{ $user->name ?? 'spotter' }},</p>

        <p>Uw foto is goed aangekomen en wordt onderzocht naar wat het zou bevatten door professionals</p>

        <hr style="border-color: #333; margin: 20px 0;">

        <p style="font-size: 14px; color: #888;">
            Als u zich niet had opgegeven voor dit soort mail te ontvangen, negeer dit a.u.b.
        </p>

        <p style="font-size: 14px; color: #888;">— Het UFO-spotting team</p>
    </div>

</body>
</html>
