<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Boolean;

class CompanyPrinciples extends Component {
  /**
   * @var bool
   */
  public bool $compact;
  
  public $principles = [
    [
      "icon"      => "fa-solid fa-award",
      "title"     => "Trattamenti rapidi ed efficaci",
      "shortText" => "mirati e appropriati per intervenire sulla tua situazione"],
    [
      "icon"      => "fa-solid fa-house-circle-check",
      "title"     => "Monitoraggio e consigli tecnici",
      "shortText" => "ti aiutiamo a prevenire ulteriori infestazioni future"],
    [
      "icon"      => "fa-solid fa-leaf",
      "title"     => "Eco-friendly",
      "shortText" => "usiamo prodotti e tecniche con minore impatto ambientale"],
    [
      "icon"      => "fa-solid fa-hourglass",
      "title"     => "Tempestività degli interventi",
      "shortText" => "è tutto sotto controllo fin dal momento della tua chiamata"],
  ];
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(bool $compact) {
    $this->compact = $compact ?? false;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.company-principles',
      ["principles" => $this->principles]);
  }
}
