<?php

namespace App\View\Components\frontend;

use App\Models\configs;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->configs = $configs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $configs = configs::get();
      	//$configs[1]='percobaan'; 
        return view('components.frontend.footer',compact('configs'));
    }
  
 
}
