<?php
    function display()
    {
        $totalbooks=bookArray();
    }

    function bookArray()
    {
        $book1=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter1.jpg',
        );
         $book2=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter2.jpg',
        );
         $book3=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter3.jpg',
        );
         $book4=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter4.jpeg',
        );
         $book5=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter5.jpeg',
        );
         $book6=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter6.jpg',
        );
         $book7=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter7.jpg',
        );
         $book8=array(
            'name'=> 'Harry Potter',
            'imgURL'=> './img/harrypotter_cursedchild.jpg',
        );
        $totalbooks= array(
            $book1, $book2, $book3, $book4, $book5,
            $book6, $book7, $book8
            );
      return $totalbooks;
    }
?>