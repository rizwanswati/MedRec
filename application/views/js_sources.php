<script type="text/javascript">
    
    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /*Make a loop that will continue until
         no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
             first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                 one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                //check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                 and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }



</script>



<!--admin_home js-->
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>


    $(document).ready(function(){
        $('#search').on("click",(function(e){
            $(".form-group").addClass("sb-search-open");
            e.stopPropagation()
        }));
        $(document).on("click", function(e) {
            if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
                $(".form-group").removeClass("sb-search-open");
            }
        });
        $(".form-control-submit").click(function(e){
            $(".form-control").each(function(){
                if($(".form-control").val().length == 0){
                    e.preventDefault();
                    $(this).css('border', '2px solid red');
                }
            })
        })
    })



</script>




<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        check = true;
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            if(check) {
                $('#icon-change').removeClass();
                $('#icon-change').toggleClass('glyphicon glyphicon-chevron-right');
                check = false;
            }else{
                $('#icon-change').removeClass();
                $('#icon-change').toggleClass('glyphicon glyphicon-chevron-left');
                check = true;
            }
        });
    });

    $(function () {
       setNavigation();
    });
    
    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\/$/,'');
        path = decodeURIComponent(path);
        $(".list-unstyled a").each(function () {
            var href = $(this).attr('href');
            if(path.substring(0,href.length)==href){
                $(this).closest('li').addClass('active');
            }

        });
    }


    function searchTable() {

        var input, filter, table, tr, td, td1, td2, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td2 = tr[i].getElementsByTagName("td")[0];
           if(td2) {
                txtValue = td2.textContent || td2.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

</script>

<!--basic_info js sources-->
<!-- Jquery JS-->
<script src="<?=base_url('assets/colorlib-regform-5/vendor/jquery/jquery.min.js');?>"></script>
<!-- Vendor JS-->
<script src="<?=base_url('assets/colorlib-regform-5/vendor/select2/select2.min.js');?>"></script>
<script src="<?=base_url('assets/colorlib-regform-5/vendor/datepicker/moment.min.js');?>"></script>
<script src="<?=base_url('assets/colorlib-regform-5/vendor/datepicker/daterangepicker.js');?>"></script>

<!-- Main JS-->
<script src="<?=base_url('assets/colorlib-regform-5/js/global.js');?>"></script>

<!--===============================================================================================-->
<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<script src="<?=base_url('assets/table/table/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
<!--<script src="vendor/bootstrap/js/popper.js"></script>-->

<script src="<?=base_url('assets/table/table/vendor/bootstrap/js/popper.js');?>"></script>

<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<script src="<?=base_url('assets/table/table/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

<!--===============================================================================================-->

<script src="<?=base_url('assets/table/table/js/main.js');?>"></script>

<!--===============================================================================================-->
<!--<script src="js/main.js"></script>-->

