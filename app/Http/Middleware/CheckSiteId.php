<?php

namespace App\Http\Middleware;

use App\Models\Page;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSiteId
{
    /**
     * Handle an incoming request.
     * If page parent site id != incoming redirect back
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $siteId = $request->route('site');
        $pageId = $request->route('page');

        $page = Page::find($pageId);

        if ($page && $page->site_id != $siteId) {
            return redirect()->route('site.page.index', $siteId);
        }

        return $next($request);
    }
}
