
<?php


if ($r) {
    //  while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {   //  make sure the last parentheses is not read, otherwise it cascades to the last closing parantheses and the if wouldnt be closed..?
    
    //  TODO in api microservice vversion i guess change this assoc array into JSON and from front end read it with async..?
    while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
      echo '
      <!--  <li>        moze ist do <>                  -->
      <!--    <div class="clearfix">        moze ist do <>                  -->
        <div class="clearfix" style="border: 1px solid black;"><!--first div  -->
        <!--  stolen from  https://www.w3schools.com/Css/css_image_gallery.asp -->
          <div class="gallery">
            <h3>
              ' . $row['category'] . ' 
            </h3>
          
          <!--  <p>       moze ist do <>                  -->
            <a target="_blank" href="/browse.php?type=' . $type . '&category=' . urlencode($row['category']) . '&id=' .$row['id'] . '">
              <img width="50" height="50" alt="' . $row['category'] . '" src="/htdocs/products/' . $row['image'] . '"
              />
            </a>
          </div><!--end class gallery -->
            <p class="desc">' . $row['description'] . '
              <br />
<<<<<<< HEAD
              <button class="btn btn-header">
                <a href="/browse.php?type=' . $type . '&category=' . urlencode($row['category']) . '&id=' .
                  $row['id'] . '"class="h4">View All '
                  . $row['category'] . 
                  ' Products
                </a>
              </button>
=======
            
              <a href="/browse.php?type=' . $type . '&category=' . urlencode($row['category']) . '&id=' .
                $row['id'] . '"class="h4">View All '
                . $row['category'] . 
                ' Products
              </a>
>>>>>>> fea919feaf72024f70be95ab46d447a702c111d3
            </p>          <!--  end class desc                  -->
            <!--  </p>       moze ist do <>                  -->
          </div>  <!--  end first div  -->
        <!--  </div>       moze ist do <>                    end clearfix div  -->
        <br />
      <!--  </li> -->';
    }   //  end of while
  }