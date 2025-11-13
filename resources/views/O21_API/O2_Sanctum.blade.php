<!--
Sanctum : Laravel Sanctum is a simple way to add token-based authentication to your Laravel apps, especially for APIs, SPAs, and mobile apps. Here's a line-by-line breakdown in plain language:

- Laravel Sanctum helps you secure your API.
    . It lets users log in and get a token to access protected routes.
- It’s great for single-page apps (SPAs) and mobile apps.
    . You can use it with React, Vue, or any frontend that talks to Laravel.
- Each user can have multiple tokens.
    . These tokens are like keys that allow access to specific parts of your app.
- Tokens can have abilities.
    . You can limit what each token is allowed to do (like read-only or admin access).
- Sanctum is easy to install.
    . Just run composer require laravel/sanctum and publish its config.
- You add Sanctum’s middleware to your API routes.
    . This makes sure only authenticated users can access those routes.
- It supports cookie-based login for SPAs.
    . This means your frontend can use normal login forms and stay logged in.
- You can revoke tokens anytime.
    . If a user logs out or you want to block access, you can delete their token.
- It’s lightweight and simple.
    . No need for OAuth or complex setups—just basic token auth.
- You can test it easily.
    . Laravel provides tools to simulate login and check protected routes.

Sources: Laravel Sanctum Official Docs
-->
