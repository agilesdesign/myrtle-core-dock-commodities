<?php

namespace Myrtle\Core\Commodities\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Myrtle\Commodities\Models\Commodity;

class CommoditiesSeedController extends Controller
{
    /**
     * Show the seed form for the address types
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('seed', Commodity::class);

        $commodities = \CommoditiesTableSeeder::commodities();

        return view('admin::docks.commodities.seed.create')->withCommodities($commodities);
    }

    /**
     * Store commodities from seeder
     *
     * @return Response
     */
    public function store()
    {
        $this->authorize('seed', Commodity::class);

        Artisan::call('db:seed', ['--class' => \CommoditiesTableSeeder::class]);

        flasher()->alert('Commodities seeded successfully', 'success');

        return redirect()->route('admin.commodities.index');
    }
}
