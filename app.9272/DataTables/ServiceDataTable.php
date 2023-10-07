<?php

namespace App\DataTables;
use App\Traits\DataTableTrait;

use App\Models\Service;
use App\Models\PackageServiceMapping;
use App\Models\PostJobServiceMapping;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceDataTable extends DataTable
{
    use DataTableTrait;
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('name', function($service){
                return '<a class="btn-link btn-link-hover" href='.route('service.create', ['id' => $service->id]).'>'.$service->name.'</a>';
            })
            ->editColumn('category_id' , function ($service){
                return ($service->category_id != null && isset($service->category)) ? $service->category->name : '-';
            })
            ->filterColumn('category_id',function($query,$keyword){
                $query->whereHas('category',function ($q) use($keyword){
                    $q->where('name','like','%'.$keyword.'%');
                });
            })
            ->editColumn('provider_id' , function ($service){
                return ($service->provider_id != null && isset($service->providers)) ? $service->providers->display_name : '';
            })
            ->filterColumn('provider_id',function($query,$keyword){
                $query->whereHas('providers',function ($q) use($keyword){
                    $q->where('display_name','like','%'.$keyword.'%');
                });
            })
            ->editColumn('price' , function ($service){
                return getPriceFormat($service->price).'-'.ucFirst($service->type);
            })
            
            ->editColumn('discount' , function ($service){
                return $service->discount ? $service->discount .'%' : '-';
            })
            ->editColumn('status' , function ($service){
                $disabled = $service->deleted_at ? 'disabled': '';
                return '<div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                    <div class="custom-switch-inner">
                        <input type="checkbox" class="custom-control-input  change_status" '.$disabled.' data-type="service_status" '.($service->status ? "checked" : "").' value="'.$service->id.'" id="'.$service->id.'" data-id="'.$service->id.'" >
                        <label class="custom-control-label" for="'.$service->id.'" data-on-label="" data-off-label=""></label>
                    </div>
                </div>';
            })
            ->addColumn('action', function($service){
                return view('service.action',compact('service'))->render();
            })
            ->addIndexColumn()
            ->rawColumns(['name','action','status','is_featured']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Service $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Service $model)
    {
        if(auth()->user()->hasAnyRole(['admin'])){
            $model = $model->where('service_type','service')->withTrashed();
            if($this->provider_id !== null){
                $model =  $model->where('provider_id', $this->provider_id );
            }
            if($this->packageid !== null){
                $packageservice = PackageServiceMapping::where('service_package_id',$this->packageid)->pluck('service_id');
                $model =  $model->whereIn('id',  $packageservice  );
            }
            if($this->postjobid !== null)    {
                $postjobservice = PostJobServiceMapping::where('post_request_id', $this->postjobid)->pluck('service_id');
                $model = $model->whereIn('id', $postjobservice);
            }
        
        }
        $model = $model->orderBy('name', 'asc');
        return $model->newQuery()->myService();
    }
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')
                ->searchable(false)
                ->title(__('messages.srno'))
                ->orderable(false),
            Column::make('name')
                ->title(__('messages.name')),
            Column::make('provider_id')
                ->title(__('messages.provider')),
            Column::make('category_id')
                ->title(__('messages.category')),
            Column::make('price')
                ->title(__('messages.price')),
            Column::make('discount')
                ->title(__('messages.discount')),
            Column::make('status')
                ->title(__('messages.status')),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center')
                  ->title(__('messages.action')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Service_' . date('YmdHis');
    }
}
