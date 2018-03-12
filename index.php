<?php
    if(isset($_GET['keyword'])){
        //include './booksapi.php';
        $keyword=$_GET['keyword'];
        //$books= getBooks($_GET['keyword']);
        //print_r($books);
    }
    include './functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Books Page</title>
        <style>
             @import url("./styles.css");
        </style>
       
    </head>
        <body>
            <header>
             Welcome to the Book Searcher!
             <link href="https://www.misskatecuttables.com/products/school-graduation/freebie-of-the-day-cute-bookworm.php">
            </header>
            <?php
                display();
            ?>
            <form>
                <div id='allbooks'>
                    Type in the book you want to search <br>
                    Book Name: <input type="text" name="book">
                    <input type="Submit" value= "Send"> 
                </div>
                
                <div class= "response">
                    <?php
                    if($_GET['allbooks'] != ''){
                        $num=rand(0,sizeof($replies)-1);
                        echo $replies[$num];
                    }
                    ?>
                </div>
                
                <div id='favbooks'>
                    <br>
                    What are your favorite books?<br>
                    <input type="radio" id="book1" name="starter" value="book1">
                    <label for="book1"></label><label for="book1">Game of Thrones</label><br>
                    <input type="radio" id="book2" name="starter" value="book2">
                    <label for="book2"></label><label for="book2">The perks of being a WallFlower</label><br>
                    <input type="radio" id="book3" name="starter" value="book3">
                    <label for="book3"></label><label for="book3">The sea of Tranquility</label><br>
                    <input type="radio" id="book4" name="starter" value="book4">
                    <label for="book4"></label><label for="book4">Harry Potter</label><br>
                    <input type="radio" id="book5" name="starter" value="book5">
                    <label for="book5"></label><label for="book5">The mist</label><br>
                    <input type="radio" id="book6" name="starter" value="book6">
                    <label for="book6"></label><label for="book6">The heors of Olympus</label><br>
                    <input type="radio" id="book7" name="starter" value="book7">
                    <label for="book7"></label><label for="book7">The last song</label><br>
                </div>
                
            
            </form>
            <form id="category">
              <input type= "text" name="keyword" placeholder="booktype" value="<?=$_GET['keyword']?>"/>
              <select name="category">
                <option value="">Select One</option>
                <option value="books">Action</option>
                <option>Romance</option>
                <option>Adventure</option>
                <option>Non-Fiction</option>
            </select>
            <input type= "submit" value="Search" />
            </form>
            
            <div id='type'>
                What type of book?<br>
                <input type="checkbox" name="type" value="Fiction">Fiction<br>
                <input type="checkbox" name="type" value="Non-Fiction">Non-Fiction<br>
            
            </div>
            
            <div class="response">
                <?php
                if($_GET['type'] != ' ') {
                    echo "Outstanding!";
                }
                ?>
            </div>
            
            <div id="content">
                <script>
                    function handleResponse(response){
                        for(var i=0; i< response.items.length;i++){
                            var item=response.items[i];
                            document.getElementById("content").innerHTML += "<br>" +item.volumeInfo.title;
                        }
                    }
                </script>
                    <<script src="https://openlibrary.org/api/books?bibkeys=ISBN:0451526538&callback=mycallback"></script>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </body>
</html>