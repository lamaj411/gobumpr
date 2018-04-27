<!DOCTYPE html>
<?php

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
 //......................................................................   
    $('#name').on("keyup input", function(){
        /* Get input value on change */
        var name = $(this).val();
        
        var resultDropdown = $(this).siblings(".result");
        if(name.length){
            $.get("pplclassbackend.php", {name: name}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".result .name", function(){
        $(this).parents(".search-box").find('#name').val($(this).text());
        $(this).parent(".result").empty();
   });
     $(document).on("click", ".result .name", function(){
        
         var name =$('#name').val();
            $.ajax({
             type: "POST",
             url: "pplclassbackend2.php",
             data: {name:name},
             cache: false,
             success: function(result){

            $('#student-details').html(result) ;
            document.getElementById("student-details").innerHTML = result;

}
});
});




//......................................................................................










    
       
});
</script>

    <div id="page-wrapper">

        
        
    
    <!--............................................................-->
    
    <!--............................................................-->
<!--    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Name" id="name"/>
        <div class="result"></div>
    </div>-->
    
    <div id="student-details"></div>
</form>	
</div>
<?php

?>