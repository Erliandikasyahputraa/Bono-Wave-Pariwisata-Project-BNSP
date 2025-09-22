<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next): Response
{
    // Cek: Apakah pengguna sudah login DAN apakah rolenya 'admin'?
    if (auth()->check() && auth()->user()->role == 'admin') {
        // Jika ya, izinkan akses ke halaman berikutnya.
        return $next($request);
    }

    // Jika tidak, tolak akses dan tampilkan halaman error 403 (Forbidden)
    abort(403, 'AKSES DITOLAK');
}
}
