<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        $query = Lead::latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%");
            });
        }

        $leads = $query->paginate(25);
        // Test leads use the reserved example.com domain (RFC 2606) — never a real lead.
        $testLeadCount = Lead::where('email', 'like', '%@example.com')->count();
        return view('admin.leads.index', compact('leads', 'testLeadCount'));
    }

    public function show(Lead $lead)
    {
        return view('admin.leads.show', compact('lead'));
    }

    public function updateStatus(Request $request, Lead $lead)
    {
        $request->validate(['status' => 'required|in:new,contacted,qualified,converted,lost']);
        $lead->update(['status' => $request->status]);
        return back()->with('success', 'Lead status updated.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('admin.leads.index')->with('success', 'Lead deleted.');
    }

    /** Bulk-delete test leads (reserved example.com domain — safe, never real). */
    public function destroyTest()
    {
        $count = Lead::where('email', 'like', '%@example.com')->delete();
        return redirect()->route('admin.leads.index')->with('success', "{$count} test lead(s) deleted.");
    }
}
