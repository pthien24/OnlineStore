<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
   /**
    * PRODUCT ATTRIBUTES
    * $this->attributes['id'] - int - contains the product primary key (id)
    * $this->attributes['name'] - string - contains the product name
    * $this->attributes['description'] - string - contains the product description
    * $this->attributes['image'] - string - contains the product image
    * $this->attributes['price'] - int - contains the product price
    * $this->attributes['created_at'] - timestamp - contains the product creation date
    * $this->attributes['updated_at'] - timestamp - contains the product update date
    */
    /**
     * @return type
     */


    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        ];
    public function getId()
    {
        return $this->attributes['id'];
    }
    /**
     * @param type $id
     */
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    /**
     * @return type
     */
    public function getname()
    {
        return $this->attributes['name'];
    }
    /**
     * @param type $name
     */
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    /**
     * @return type
     */
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    /**
     * @param type $description
     */
    public function setdescription($description)
    {
        $this->attributes['description'] = $description;
    }
    /**
     * @return type
     */
    public function getImage()
    {
        return $this->attributes['image'];

    }
    /**
     * @param type $image
     */
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    /**
     * @return type
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param type $price
     */
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    /**
     * @return type
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }
    /**
     * @param type $created_ad
     */
    public function setCreated_ad($created_ad)
    {
        $this->attributes['created_ad'] = $created_ad;
    }
    /**
     * @return type
     */
    public function getUpdate_at()
    {
        return $this->update_at;
    }
    /**
     * @param type $update_at
     */
    public function setUpdate_at($update_at)
    {
        $this->attributes['update_at'] = $update_at;
    }
}
