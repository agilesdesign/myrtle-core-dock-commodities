<?php

namespace Myrtle\Core\Commodities\Http\Controllers\Administrator;

use Flasher\Support\Notifier;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Myrtle\Commodities\Models\Commodity;
use Myrtle\Commodities\Http\Requests\SaveCommodityForm;

class CommodityController extends Controller
{
    /**
     * Show the list of commodities
     *
     * @return Response
     */
    public function index()
    {
        $commodities = Commodity::searched()->paginate();

        return view('admin::commodities.index')->withCommodities($commodities);
    }

    /**
     * Show the create form for commodity
     *
     * @return Response
     */
    public function create()
    {
        return view('admin::commodities.create');
    }

    /**
     * Store commodity
     *
     * @param SaveCommodityForm $form
     * @return Response
     */
    public function store(SaveCommodityForm $form)
    {
        $form->process();

        flasher()->alert('Commodity created successfully', Notifier::SUCCESS);

        return redirect()->route('admin.commodities.index');
    }

    /**
     * Show the edit form for the address type
     *
     * @param Commodity $commodity
     * @return Response
     */
    public function edit(Commodity $commodity)
    {
        return view('admin::commodities.edit')->withCommodity($commodity);
    }

    /**
     * Update the address type
     *
     * @param SaveCommodityForm $form
     * @param Commodity $commodity
     * @return Response
     */
    public function update(SaveCommodityForm $form, Commodity $commodity)
    {
        $form->process($commodity);

        flasher()->alert('Commodity updated successfully', 'success');

        return redirect()->route('admin.commodities.index');
    }
}
