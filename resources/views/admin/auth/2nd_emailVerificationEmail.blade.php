<!DOCTYPE html>
<html lang="en">
    <body>
        <p>Dear</p>
            <p>Your account has been created, please activate your account by clicking this link</p>
            <p>
                <a href="{{ route('user.verify', $token) }}">Verify Email</a>
            </p>
        <p>Thanks</p>
    </body>
</html> 