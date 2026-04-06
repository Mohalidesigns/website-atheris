<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Customer;
use App\Models\Resource;

class PageController extends Controller
{
    public function platform()
    {
        $solutions = Solution::published()->get();
        return view('public.platform', compact('solutions'));
    }

    public function aiIntelligence()
    {
        return view('public.platform-ai');
    }

    public function security()
    {
        return view('public.platform-security');
    }

    public function integrations()
    {
        return view('public.platform-integrations');
    }

    public function thirdPartyRisk()
    {
        return view('public.platform-tprm');
    }

    public function pricing()
    {
        $faqs = Faq::active()->where('category', 'pricing')->orWhere('category', 'general')->get();
        return view('public.pricing', compact('faqs'));
    }

    public function demo()
    {
        return view('public.demo');
    }

    public function about()
    {
        $team = TeamMember::active()->get();
        $partners = Partner::active()->get();
        return view('public.about', compact('team', 'partners'));
    }

    public function careers()
    {
        return view('public.careers');
    }

    public function partnersPage()
    {
        $partners = Partner::active()->get();
        return view('public.partners', compact('partners'));
    }

    public function customers()
    {
        $customers = Customer::published()->get();
        $testimonials = Testimonial::active()->get();
        return view('public.customers', compact('customers', 'testimonials'));
    }

    public function vsDigilent()
    {
        return view('public.why-atheris.vs-diligent');
    }

    public function vsArcher()
    {
        return view('public.why-atheris.vs-archer');
    }

    public function roiCalculator()
    {
        return view('public.why-atheris.roi-calculator');
    }

    public function softwareSolutions()
    {
        return view('public.software-solutions.index');
    }

    public function vms()
    {
        return view('public.software-solutions.visitors-management');
    }

    public function poultryManagement()
    {
        return view('public.software-solutions.poultry-management');
    }

    public function careerPortal()
    {
        return view('public.software-solutions.career-portal');
    }

    public function privacy()
    {
        return view('public.legal.privacy');
    }

    public function terms()
    {
        return view('public.legal.terms');
    }

    public function industry(string $slug)
    {
        $solutions = Solution::published()->get();
        return view('public.industries.show', compact('slug', 'solutions'));
    }
}
