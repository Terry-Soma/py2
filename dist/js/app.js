  $(document).ready(function () {
        $(".datepicker").datepicker({
          format: "yyyy-mm-dd",
          autoclose: true,
          startDate: "0d",
        });
      });

    // setInterval(()=>{
    //   $(document).ready(function () {

    //     $(".datepicker").datepicker({
    //       format: "yyyy-mm-dd",
    //       autoclose: true,
    //       startDate: "0d",
    //     });
    //     $(".cell").click(function () {
    //       $(".cell").removeClass("select");
    //       $(this).addClass("select");
    //     });
       
    //   });
  
    // },500);