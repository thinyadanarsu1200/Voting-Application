<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilter extends Component
{
    public $status = 'all';
    public $redirect = false;
    public $statusCount;

    public function mount(){
        $this->status = request('status')?? 'all';
        $this->statusCount= Status::getCount();
        //  $this->statusCount= Status::getCountByDynamic();

        if(Route::currentRouteName() === 'idea.show'){
            $this->status = null;
            $this->redirect = true;
        }
    }

    public function setStatus($new_status = 'all'){
        // if($this->redirect){
        //     return redirect()->route('idea.index',[
        //         'status' => $new_status == 'all'? null : $new_status,
        //     ]);
        // }

        $this->status= $new_status === 'all'? null : $new_status;
        $this->emit('queryStringUpdatedStatus',$this->status);

        if($this->getPreviousRouteName() === 'idea.show'){
            return redirect()->route('idea.index',[
                'status' => $this->status == 'all'? null : $this->status,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.status-filter');
    }

    private function getPreviousRouteName(){
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
