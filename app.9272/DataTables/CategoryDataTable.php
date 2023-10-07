<?php

namespace App\DataTables;
use App\Traits\DataTableTrait;

use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
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
            ->editColumn('name', function($category){
                return '<a class="btn-link btn-link-hover" href='.route('category.create', ['id' => $category->id]).'>'.$category->name.'</a>';
            })
            ->editColumn('status' , function ($category){
                $disabled = $category->trashed() ? 'disabled': '';
                return '<div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                    <div class="custom-switch-inner">
                        <input type="checkbox" class="custom-control-input  change_status" data-type="category_status" '.($category->status ? "checked" : "").'  '.$disabled.' value="'.$category->id.'" id="'.$category->id.'" data-id="'.$category->id.'">
                        <label class="custom-control-label" for="'.$category->id.'" data-on-label="" data-off-label=""></label>
                    </div>
                </div>';
            })
            ->editColumn('is_featured' , function ($category){
                $disabled = $category->trashed() ? 'disabled': '';

                return '<div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                    <div class="custom-switch-inner">
                        <input type="checkbox" class="custom-control-input  change_status" data-type="category_featured" data-name="is_featured" '.($category->is_featured ? "checked" : "").'  '.  $disabled.' value="'.$category->id.'" id="f'.$category->id.'" data-id="'.$category->id.'">
                        <label class="custom-control-label" for="f'.$category->id.'" data-on-label="'.__("messages.yes").'" data-off-label="'.__("messages.no").'"></label>
                    </div>
                </div>';
            })
            ->addColumn('action', function($category){
                return view('category.action',compact('category'))->render();
            })
            ->addIndexColumn()
            ->rawColumns(['name','action','status','is_featured']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
    {
        if(auth()->user()->hasAnyRole(['admin'])){
            $model = $model->withTrashed();
        }
        $model = $model->orderBy('name', 'asc');
        return $model->list()->newQuery();
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
                ->title(__('messages.no'))
                ->orderable(false),
            Column::make('id')->visible(false),
            Column::make('name')
                ->title(__('messages.name')),
            Column::make('color')
                ->title(__('messages.color')),
            Column::make('is_featured')
                ->title(__('messages.featured')),
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
        return 'Category_' . date('YmdHis');
    }
}
