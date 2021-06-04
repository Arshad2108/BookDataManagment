# BookDataManagment

## Insert a book


<img src="images_for_read_me/homesubmit.png" width="500" height="500" />

#### In this method, on onclick of button, it runs a javaScript function **mySubmit()** , which first validates the data filled, that is checks if any of the info is left blank, if left blank raises an alert.

<img src="images_for_read_me/submitalert.png" width="500" height="500" />

#### then it goes to **connect.php** and insert the new data in the database, here **books** with table **booksdata**, and shows the data entered in the page also.

<img src="images_for_read_me/aftersubmit.png" width="500" height="500" />

## View the Database

<img src="images_for_read_me/homeview.png" width="500" height="400" />

#### Here first we take a selector input which takes the type of interval user wants. On selecting the interval it runs a onchange javascript function **showOptions()** which unhide the further information which is needed to be filled accordingly.

<img src="images_for_read_me/viewalert.png" width="500" height="400" />

#### if user selects year it asks for year, if user selects month if asks for month and year and similarly for date. Here again when user submits a javaScript function **showme()**, which first check whether any field is left empty, if it passes then it runs a php called **getinfo.php** which queries the database and outputs the top 10 books according to the query.

<img src="images_for_read_me/viewanswers.png" width="500" height="700" />


## Further Possible Additions

We can add a reset data button which clears the previous data filled in the inputs for both insertion and viewing.
