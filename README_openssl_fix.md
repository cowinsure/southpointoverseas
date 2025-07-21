# Fix for "Call to undefined function Illuminate\Encryption\openssl_cipher_iv_length()"

This error occurs because the OpenSSL extension is not enabled in your PHP installation.

## How to Enable OpenSSL Extension

1. Open your `php.ini` file.  
   - The location depends on your setup (e.g., `C:\xampp\php\php.ini`, `C:\wamp\bin\php\php{version}\php.ini`, etc.).

2. Search for the following line:
   ```
   ;extension=openssl
   ```
   Remove the semicolon (`;`) at the beginning to enable it:
   ```
   extension=openssl
   ```

3. Save the `php.ini` file.

4. Restart your web server (Apache, Nginx, etc.).

5. Verify by running:
   ```
   php -m | grep openssl
   ```
   You should see `openssl` listed.

## After enabling, the error should be resolved.
