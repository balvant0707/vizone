<?php
/**
 * Copy this file to configure SMTP credentials used by contact-us.php.
 * Do NOT commit real credentials into version control if this repo is public.
 */

return [
    'recipient' => 'info@vizonegroup.com', // The address that receives contact form submissions.
    'from_email' => 'no-reply@vizonegroup.com',
    'from_name' => 'Vizone Group Website',
    'smtp' => [
        'host' => 'smtp.example.com',     // e.g., smtp.gmail.com or your mail relay.
        'port' => 587,
        'username' => 'your-smtp-username',
        'password' => 'your-smtp-password',
        'secure' => 'tls',
        'auth' => true,
    ],
];
