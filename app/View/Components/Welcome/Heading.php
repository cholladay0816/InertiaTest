<?php

namespace App\View\Components\Welcome;

use Illuminate\View\Component;

class Heading extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    protected $popout = false;
    public function __construct()
    {
        $this->popout = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.welcome.heading', ['popout'=>$this->popout]);
    }

    public function click()
    {
        $this->popout = !$this->popout;
        redirect()->to('/dashboard');
    }

    public function toggle()
    {
        $this->popout = !$this->popout;
        redirect()->to('/dashboard');
    }
}
