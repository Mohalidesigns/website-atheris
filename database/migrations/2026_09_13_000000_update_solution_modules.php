<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Rename two modules and disable three others.
     * Runs on deploy (migrate --force) so the live DB stays in sync with the seeder.
     */
    public function up(): void
    {
        DB::table('solutions')->where('slug', 'audit-management')
            ->update(['title' => 'Internal Audit Management']);

        DB::table('solutions')->where('slug', 'controls-management')
            ->update(['title' => 'Internal Control Management']);

        // Disable (unpublish) modules — hidden from grids, nav, sitemap, and
        // their detail pages 404 via the published() scope.
        DB::table('solutions')
            ->whereIn('slug', ['incident-management', 'business-continuity'])
            ->update(['status' => 'draft']);
    }

    public function down(): void
    {
        DB::table('solutions')->where('slug', 'audit-management')
            ->update(['title' => 'Audit Management']);

        DB::table('solutions')->where('slug', 'controls-management')
            ->update(['title' => 'Controls Management']);

        DB::table('solutions')
            ->whereIn('slug', ['incident-management', 'business-continuity'])
            ->update(['status' => 'published']);
    }
};
