<?php
namespace App\Http\Controllers;

use DVDoug\BoxPacker\Box;
use DVDoug\BoxPacker\BoxList;
use DVDoug\BoxPacker\ItemList;
use DVDoug\BoxPacker\PackedBoxList;
use DVDoug\BoxPacker\PackedItem;
use DVDoug\BoxPacker\PackedItemList;
use DVDoug\BoxPacker\Packer;
use App\PackerBox;  // use your own object
use App\PackerItem; // use your own object
use DVDoug\BoxPacker\PackedBox;

use DB;

class PackingController extends Controller
{


  /**
    *@param array $items the items to be packed into boxes
    *@return array of parcels in follwoing format:
    *        ['length','width','height','distance_unit'=> 'in','weight',
    *         'mass_unit'=> 'lb']
  **/
  public function pack_items($items){

    $parcels = array();
    $boxes = array();
    $shipIndividually = array();
    $boxCount = 0;

    $packer = new Packer();

    $boxSizes = DB::table('packaging_boxes')->where('status','=',1)->get();

    foreach($boxSizes as $box){
      $packer->addBox(new PackerBox($box->id,$box->reference, $box->outerWidth, $box->outerLength, $box->outerDepth, $box->emptyWeight, $box->innerWidth, $box->innerLength, $box->innerDepth, $box->maxWeight));
      $boxCount++;
    }

    foreach($items as $item){
      if($item->shippable == 1 && $item->shipIndividual != 1){
        $packer->addItem(new PackerItem($item->id,$item->title, $item->width, $item->height, $item->depth, $item->weight, false));
      }else if($item->shippable == 1 && $item->shipIndividual == 1){
        $shipIndividually[] = $item;
      }
    }

    if($boxCount > 0){
      try {
        $packedBoxes = $packer->pack();
      } catch (\ItemTooLargeException $e) {
        $error[] = $e->item->getId();
      } catch (\Exception $e) {
        $error[] = $e->item->getId();
      }
    }

    $indPackedBoxes = null;
    foreach($shipIndividually as $item){
      $boxType =  '[OWN BOX] ' . $item->title;

      $parcels[] = ['length'=>$item->depth,
                    'width'=>$item->width,
                    'height'=>$item->height,
                    'distance_unit'=> 'in',
                    'weight'=>$item->weight,
                    'mass_unit'=> 'lb'
                  ];
      $boxes[] = ["individual"=>true,"type"=>$boxType, "item"=>$item];
    }

    if(!isset($packedBoxes)){
      $packedBoxes = $indPackedBoxes;
    }else{
      if($indPackedBoxes != null){
        $packedBoxes->join($indPackedBoxes);
      }
    }

    if(isset($packedBoxes)){
      foreach ($packedBoxes as $packedBox) {
        $boxType = $packedBox->getBox(); // your own box object, in this case

        $parcels[] = ['length'=>$boxType->getOuterLength(),
                      'width'=>$boxType->getOuterWidth(),
                      'height'=>$boxType->getOuterDepth(),
                      'distance_unit'=> 'in',
                      'weight'=>$packedBox->getWeight(),
                      'mass_unit'=> 'lb'
                    ];
        $boxes[] = ["individual"=>false,"type"=>$boxType, "items"=>$packedBox->getItems()];
      }
    }


    return array('parcels'=>$parcels, 'boxes'=>$boxes);
  }

  public function show_packing(){

    $packer = new Packer();
    $test = "";
    /*
     * Add choices of box type - in this example the dimensions are passed in directly via constructor,
     * but for real code you would probably pass in objects retrieved from a database instead
     */

      $boxSizes = DB::table('packaging_boxes')->where('status','=',1)->get();

      foreach($boxSizes as $box){
        $packer->addBox(new PackerBox($box->id,$box->reference, $box->outerWidth, $box->outerLength, $box->outerDepth, $box->emptyWeight, $box->innerWidth, $box->innerLength, $box->innerDepth, $box->maxWeight));
      }


      /*
      * Add items to be packed - e.g. from shopping cart stored in user session. Again, the dimensional information
      * (and keep-flat requirement) would normally come from a DB
      */

      $packer->addItem(new PackerItem(3,'Huge Item', 11, 11, 5, 18, false));
      $packer->addItem(new PackerItem(3,'Huge Item', 5, 5, 2, 18, false));

      try {
          $packedBoxes = $packer->pack();
      } catch (\ItemTooLargeException $e) {
        $test = $e->item;
      } catch (\Exception $e) {
        $test = $e->item; //the custom exception allows you to retrieve the affected item
      }

      $test = "These items fit into " . count($packedBoxes) . " box(es) <br/>
      </br/>" . PHP_EOL;
      foreach ($packedBoxes as $packedBox) {
        $boxType = $packedBox->getBox(); // your own box object, in this case TestBox
        $test .= "This box is a {$boxType->getReference()}, it is {$boxType->getOuterWidth()}\" wide, {$boxType->getOuterLength()}\" long and {$boxType->getOuterDepth()}\" high (max weight: " . $boxType->getMaxWeight() . ")" . PHP_EOL;
        $test .= "</br/>The combined weight of this box and the items inside it is {$packedBox->getWeight()}pounds" . PHP_EOL;

        $test .= "</br/>The items in this box are: <br/>" . PHP_EOL;
        $packedItems = $packedBox->getItems();
        foreach ($packedItems as $packedItem) { // $packedItem->getItem() is your own item object, in this case TestItem
          //return view('pages.packing',['test'=>print_r($packedItem)]);
            $test .= $packedItem->getDescription() . " ("  . $packedItem->getWidth() . "\"x". $packedItem->getLength() . "\"x". $packedItem->getDepth() . '" - ' . $packedItem->getWeight() .'pounds)</br/>'. PHP_EOL;
        }
        $test .= '</br/>';
      }

    return view('pages.packing',['test'=>$test]);
  }
}
