$(document).ready(function () {

    $("#tab-services-content-1").show();
    $("#tab-services-content-2").hide();
    $("#tab-service-1 div h6 a").addClass("text-blue-gradient");
    $("#tab-service-1 div").addClass("border-primary-custom");

    $("#tab-service-1").on("click", function (e) {
        e.preventDefault();
        $("#tab-services-content-1").show();
        $("#tab-services-content-2").hide();
        $("#tab-service-2 div h6 a").removeClass("text-blue-gradient");
        $("#tab-service-1 div h6 a").addClass("text-blue-gradient");
        $("#tab-service-2 div").removeClass("border-primary-custom");
        $("#tab-service-1 div").addClass("border-primary-custom");
    });


    $("#tab-service-2").on("click", function (e) {
        e.preventDefault();
        $("#tab-services-content-1").hide();
        $("#tab-services-content-2").show();
        $("#tab-service-1 div h6 a").removeClass("text-blue-gradient");
        $("#tab-service-2 div h6 a").addClass("text-blue-gradient");
        $("#tab-service-1 div").removeClass("border-primary-custom");
        $("#tab-service-2 div").addClass("border-primary-custom");
    });
});
