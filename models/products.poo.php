<?php

class Product
{

    protected $picture;
    protected $title;
    protected $description;

    // DETRUIT LA DONNEE UNE FOIS CONSOMMEE, DANS UN SOUCIS DE PERFORMANCE

    public function __destruct()
    {
        // echo "Variables destroyed";
    }

    // LE CONSTRUCTEUR S'OCCUPE DE FABRIQUER LA/LES FUTURES INSTANCES

    public function __construct($pic, $t, $d)
    {
        $this->picture = $pic;
        $this->title = $t;
        $this->description = $d;
    }

    // SETTER & GETTER

    public function setPicture($pic)
    {
        $this->picture = $pic;
    }

    public function getPicture()
    {
        return $this->picture;
    }
    // --------------------------------------------//
    public function setTitle($t)
    {
        $this->title = $t;
    }

    public function getTitle()
    {
        return $this->title;
    }
    // --------------------------------------------//
    public function setDescription($d)
    {
        $this->description = $d;
    }
    public function getDescription()
    {
        return $this->description;
    }
    // --------------------------------------------//
    public function productCard()
    {
        echo '
        <div class="card m-5 p-5 text-center w-25">
            <img class="p-5 bg-primary rounded-circle card-img-top img-fluid" src=' . $this->getPicture() . ' alt="La Colombe">
            <h2 class="my-2 card-title">' . $this->getTitle() . '</h2>
            <p class="card-text">' . $this->getDescription() . '</p>
        </div>
        ';
    }
}
